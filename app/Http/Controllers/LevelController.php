<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('level.index', [
            'title' => 'Level User',
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
        return view('level.create', [
            'title' => 'Create New Level'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:20', 'unique:levels'],
            'slug' => ['required', 'unique:levels'],
        ]);

        Level::create($validatedData);
        return redirect('/level')->with('success', 'New category has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function show(Level $level)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function edit(Level $level)
    {
        return view('level.edit', [
            'title' => 'Edit Level',
            'level' => $level
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Level $level)
    {
        $rules = [
            'name' => ['required', 'max:20'],
        ];

        if ($request->slug != $level->slug) {
            $rules['slug'] = ['required', 'unique:levels'];
        }

        $validatedData = $request->validate($rules);
        Level::where('id', $level->id)->update($validatedData);
        return redirect('/level')->with('success', 'level has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function destroy(Level $level)
    {
        Level::destroy($level->id);
        return redirect('/level')->with('success', 'Level has been Deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Level::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
