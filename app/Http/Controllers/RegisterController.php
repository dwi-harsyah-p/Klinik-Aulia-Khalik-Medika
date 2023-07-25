<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {

        $validatedDataBio = $request->validate([
            'name' => ['required', 'min:5', 'max:30'],
            'nik' => ['required', 'digits:16', 'unique:biodatas'],
            'gender' => 'required',
            'date_of_birth' => 'required|date',
            'address' => 'required|min:5'
        ]);
        // return $request->all();
        $validatedData = $request->validate([
            'username' => ['required', 'min:5', 'max:10', 'unique:users'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:20'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        Biodata::create($validatedDataBio);

        $validatedData['biodata_id'] = Biodata::where('name', $validatedDataBio['name'])->get(['id'])->value('id');

        // dd('registrasi berhasil');
        User::create($validatedData);

        // $validatedDataBio['user_id'] = User::where('username',  $validatedData['username'])->get(['id'])->value('id');

        // $request->session()->flash('status', 'Registration Succesfull!, Please login');        

        // return redirect('/login');
        return redirect('/login')->with('status', 'Registration Succesfully!, Please login');
    }
}
