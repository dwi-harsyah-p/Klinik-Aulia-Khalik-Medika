<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Biodata;
use App\Models\Level;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index', [
            'title' => 'User',
            'users' => User::all(),
            'levels' => Level::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            $validasibio = $request->validate([
                'name' => ['required', 'min:5', 'max:30'],
                'nik' => ['required', 'digits:16', 'unique:biodatas'],
                'gender' => 'required',
                'date_of_birth' => 'required|date',
                'address' => 'required|min:5'
            ]);

            $validatedData = $request->validate([
                'username' => ['required', 'min:5', 'max:10', 'unique:users'],
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6|max:20',
                'level_id' => 'required'
            ]);

            $validatedData['password'] = Hash::make($validatedData['password']);

            $biodata = Biodata::create($validasibio);
            $validatedData['biodata_id'] = $biodata->id;

            User::create($validatedData);

            DB::commit();

            return redirect('/user')->with('success', 'Successfully Add User!');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect('/user')->with('error', 'Failed to Add User: ' . $e->getMessage());
        }      

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {                          
        return view('user.show', [
            'title' => 'Data User',
            'bio' => $user->biodata
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        return view('user.edit', [
            'title' => 'Edit User',
            'user' => $user,
            'levels' => Level::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {        
        $validatedData = $request->validate([
            'username' => ['required', 'unique:users,username,'.$user->id],
            'email' => ['required', 'unique:users,email,'.$user->id],
            'level_id' => ['required'],
        ]);
        
        User::where('id', $user->id)->update($validatedData);
        
        return redirect("/user")->with('update', 'User has been Updated!');        
    }

    public function updateBio(Request $request, Biodata $user)
    {                
        $rules = [
            'name' => ['required', 'min:5', 'max:30'],            
            'gender' => 'required',
            'date_of_birth' => 'required|date',
            'address' => 'required|min:5'
        ];  
    
        if ($request->nik != $user->nik) {
            $rules['nik'] = ['required', 'unique:biodatas'];
        }
    
        $validatedData = $request->validate($rules);
    
        try {   
            $user->update($validatedData);
            return redirect()->back()->with('update', 'Biodata has been Updated!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update data. Please try again.');
        }
    }

    function editPassword(user $user) {
        return view('user.editPassword', [
            'title' => 'Edit Password',
            'user' => $user
        ]);
    }

    function updatePassword(Request $request, User $user) {
        $request->validate([            
            'new_password' => 'required|string|min:6',
            'confirm_password' => 'required|same:new_password',
        ]);

        $password = Hash::make($request->new_password);
        User::where('id', $user->id)->update(['password' => $password]);
        return redirect("/user")->with('update', 'Password has been Updated!');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        DB::beginTransaction();

        try {
            $user->biodata->delete(); // Menghapus biodata terlebih dahulu
            $user->delete(); // Menghapus pengguna

            DB::commit();

            return redirect('/user')->with('delete', 'User has been Deleted Successfully!');            
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect('/user')->with('error', 'Failed to Delete User: ' . $e->getMessage());            
        }
    }
}
