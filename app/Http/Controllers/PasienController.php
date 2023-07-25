<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Record;
use App\Models\User;
use App\Models\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('biodata.index', [
            'title' => 'Pasien',
            'biodatas' => Biodata::with('user.level')
                ->whereHas('user.level', function ($query) {
                    $query->where('id', 4);
                })
                ->get()
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

            $firstName = Str::slug(explode(' ', $validasibio['name'])[0]);
            $id = str_pad(mt_rand(1, 999), 3, '0', STR_PAD_LEFT);

            $username = $firstName . $id;
            $email = $username . '@email.com';

            while (User::where('username', $username)->exists() || User::where('email', $email)->exists()) {
                $id = str_pad(mt_rand(1, 999), 3, '0', STR_PAD_LEFT);
                $username = $firstName . $id;
                $email = $username . '@email.com';
            }

            $validatedData = [
                'name' => $validasibio['name'],
                'nik' => $validasibio['nik'],
                'gender' => $validasibio['gender'],
                'date_of_birth' => $validasibio['date_of_birth'],
                'address' => $validasibio['address'],
                'username' => $username,
                'email' => $email,
                'password' => Hash::make('password')
            ];

            $biodata = Biodata::create($validasibio);
            $validatedData['biodata_id'] = $biodata->id;

            User::create($validatedData);

            DB::commit();

            return redirect('/pasien')->with('success', 'Successfully Add Pasien!');
        } catch (\Exception $e) {
            DB::rollBack();

            return Redirect::back()->withErrors([$e->getMessage()]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function show(Biodata $biodata)
    {               
        $records = Record::whereHas('user', function ($query) use ($biodata) {
            $query->where('biodata_id', $biodata->id);
        })->latest()->get();
        $iduser = User::where('biodata_id', $biodata->id)->first()->id;
                
        return view('record.index', [
            'title' => 'Medical Record',
            'records' => $records,
            'iduser' => $iduser,
            'users' => User::where('level_id', 4)->get(),
            'medicines' => Medicine::all(),
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function edit(Biodata $biodata)
    {
        return view('biodata.edit', [
            'title' => 'Edit Pasien',
            'biodata' => $biodata
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Biodata $biodata)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'min:5', 'max:30'],
            'gender' => 'required',
            'date_of_birth' => 'required|date',
            'address' => 'required|min:5',
            'nik' => ['required', 'digits:16', 'unique:biodatas,nik,'.$biodata->id],
        ]);
        
        Biodata::where('id', $biodata->id)->update($validatedData);
        
        return redirect("/pasien")->with('update', 'Pasien has been Updated!');        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Biodata $biodata)
    {        
        User::where('biodata_id', $biodata->id)->delete();
        Biodata::where('id', $biodata->id)->delete();
        return redirect('/pasien')->with('delete', 'Pasien has been Deleted Successfully!');        
    }
}
