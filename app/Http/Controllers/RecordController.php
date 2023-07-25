<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Models\Record;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->level->name == "Pasien") {
            $records = Record::where('user_id', auth()->user()->id)->get();
        } else {
            $records = Record::with('user.level')->get();
        }        
        
        return view('record.index', [
            'title' => 'Medical Record',
            'records' => $records,
            'users' => User::with('level')->where('level_id', 4)->get(),
            'medicines' => Medicine::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('record.create', [
            'title' => 'Create New Medical Record',
            'users' => User::where('level_id', 4)->get(),
            'medicines' => Medicine::all(),
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
        DB::beginTransaction();

        try {
            $validatedData = $request->validate([
                'complaint' => 'required',
                'diagnosis' => 'required',
                'action' => 'required',
                'poly' => 'required',
                'user_id' => 'required',
                'medicine_id' => 'required',
                'qty' => 'required',
                'refferal' => 'required'
            ]);

            $stock = Medicine::where('id', $request->medicine_id)->value('stock');

            if ($stock - $request->qty < 0) {
                throw new \Exception('Stock Obat is not enough!');
            }

            $stock -= $request->qty;
            Medicine::where('id', $request->medicine_id)->update(['stock' => $stock]);

            $recordData = $validatedData;
            $recordData['qty'] = $request->qty; // Menambahkan qty ke data rekam medis yang dibuat

            Record::create($recordData);

            DB::commit();

            return redirect()->back()->with('success', 'New Record has been added!');
        } catch (\Exception $e) {
            DB::rollback();

            return redirect('/records')->with('error', $e->getMessage());
        }
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function show(Record $record)
    {
        ddd($record);
        return view('record.show', [
            'title' => 'Detail Medical Record',
            'record' => $record
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function edit(Record $record)
    {    
        return view('record.edit', [
            'title' => 'Update Medical Record',
            'users' => User::where('level_id', 4)->get(),            
            'medicines' => Medicine::all(),
            'record' => $record
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Record $record)
    {
        $validatedData = $request->validate([
            'complaint' => 'required',
            'diagnosis' => 'required',
            'action' => 'required',
            'poly' => 'required',
            'user_id' => 'required',
            'medicine_id' => 'required',
            'qty' => 'required',
            'refferal' => 'required'
        ]);

        DB::beginTransaction();

        try {

            $newMedicineId = $request->medicine_id;
            $oldMedicineId = $record->medicine_id;

            if ($newMedicineId != $oldMedicineId) {
                $oldStock = Medicine::where('id', $oldMedicineId)->value('stock');
                $oldStock += $record->qty;
                Medicine::where('id', $oldMedicineId)->update(['stock' => $oldStock]);

                $newStock = Medicine::where('id', $newMedicineId)->value('stock');
                $newStock -= $request->qty;
                if ($newStock < 0) {
                    throw new \Exception('Stock Obat is not enough!');
                } 
                Medicine::where('id', $newMedicineId)->update(['stock' => $newStock]);
            }else {
                $oldStock = Medicine::where('id', $oldMedicineId)->value('stock');
                $oldStock += $record->qty;
                $oldStock -= $request->qty;
                if ($oldStock < 0) {
                    throw new \Exception('Stock Obat is not enough!');
                }  
                Medicine::where('id', $oldMedicineId)->update(['stock' => $oldStock]);
            }                                

            Record::where('id', $record->id)->update($validatedData);

            DB::commit();

            return redirect()->back()->with('update', 'Record has been Updated!');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect('/records')->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function destroy(Record $record)
    {    
        DB::beginTransaction();

        try {
            $record = Record::find($record->id); // Mengambil rekam medis berdasarkan ID
            $medicineId = $record->medicine_id;
            $qty = $record->qty;

            // Mengembalikan stok obat yang sebelumnya dikurangi
            $stock = Medicine::where('id', $medicineId)->value('stock');
            $stock += $qty;
            Medicine::where('id', $medicineId)->update(['stock' => $stock]);

            // Menghapus rekam medis
            $record->delete();

            DB::commit();

            return redirect()->back()->with('delete', 'Record has been Deleted Successfully!');            
        } catch (\Exception $e) {
            DB::rollback();

            return redirect('/records')->with('error', 'Failed to delete record. Please try again.');            
        }

    }
}
