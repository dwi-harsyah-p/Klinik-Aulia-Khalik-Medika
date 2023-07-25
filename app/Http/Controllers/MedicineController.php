<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pharmacy.medicines.index', [
            'title' => 'Medicine',
            'medicines' => Medicine::all(),
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'name' => ['required', 'max:30'],
            // 'slug' => ['required', 'unique:medicines'],
            'dosis' => ['required'],
            'stock' => ['required'],
            'category_id' => 'required'
        ]);

        Medicine::create($validatedData);
        return redirect('/medicines')->with('success', 'New medicine has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show(Medicine $medicine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine $medicine)
    {
        return view('pharmacy.medicines.edit', [
            'title' => 'Edit Medicine',
            'medicine' => $medicine,
            'categories' => Category::all()
        ]);
    }

    function stock(Medicine $medicine) {
        return view('pharmacy.medicines.stock', [
            'title' => 'Tambah Stok',
            'medicine' => $medicine,
            // 'categories' => Category::all()
        ]);
    }

    function updateStock(Request $request, Medicine $medicine) {
        $rules = [
            'name' => ['required', 'max:30'],
            'dosis' => ['required'],
            'stock' => 'required'
        ];
        
        // if ($request->slug != $medicine->slug) {
        //     $rules['slug'] = ['required', 'unique:medicines'];
        // }
        
        $oldStock = Medicine::where('id', $medicine->id)->value('stock');
        $newStock = $oldStock + $request->stock;
        
        $validatedData = $request->validate($rules);
        $validatedData['stock'] = $newStock;
        
        DB::beginTransaction();
        
        try {
            Medicine::where('id', $medicine->id)->update($validatedData);
        
            DB::commit();
        
            return redirect('/medicines')->with('update', 'Stok Obat Ditambah!');
        } catch (\Exception $e) {
            DB::rollBack();
        
            return redirect('/medicines')->with('error', 'Failed to update Medicine. Please try again.');
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine $medicine)
    {
        $rules = [
            'name' => ['required', 'max:30'],
            'category_id' => 'required',
            'dosis' => ['required'],
            'stock' => 'required'
        ];

        // if ($request->slug != $medicine->slug) {
        //     $rules['slug'] = ['required', 'unique:medicines'];
        // }

        $validatedData = $request->validate($rules);

        Medicine::where('id', $medicine->id)->update($validatedData);
        return redirect('/medicines')->with('update', 'Medicine has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {                
        Medicine::destroy($medicine->id);
        return redirect('/medicines')->with('delete', 'Obat has been Deleted Successfully!');        
    }

    // public function checkSlug(Request $request)
    // {
    //     $slug = SlugService::createSlug(Medicine::class, 'slug', $request->name);
    //     return response()->json(['slug' => $slug]);
    // }
}
