<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.profile', [
            'title' => 'My Profile'
        ]);
    }

    public function update(Request $request)
    {
        $validatedDataBio = $request->validate([
            'name' => ['required', 'min:5', 'max:30'],
            'nik' => ['required', 'digits:16'],
            'gender' => 'required',
            'date_of_birth' => 'required|date',
            'address' => 'required|min:5'
        ]);
        
        auth()->user()->biodata->update($validatedDataBio);

        return redirect('/profile')->with('update', 'Profile has been Updated!');
    }
}
