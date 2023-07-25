@extends('dashboard.layouts.main')

@section('container')
<div class="col-lg-7">
    <div class="card">
        <div class="card-header">
          Update Medical Record
        </div>
        <div class="card-body">                  
            <form action="/records/{{ $record->id }}" method="post" class="mb-3">
                @method('put')
                @csrf                
                <div class="mb-3">
                    <label for="user_id" class="form-label">Nama</label>
                    <select class="form-select @error('user_id') is-invalid @enderror" id="user_id" name="user_id">                        
                        @foreach ($users as $user)     
                            @if (old('user_id', $record->user_id) == $user->id)
                                <option value="{{ $user->id }}" selected>{{ $user->biodata->name }}</option>                                               
                            @else                        
                                <option value="{{ $user->id }}">{{ $user->biodata->name }}</option>
                            @endif               
                        @endforeach
                      </select>
                      @error('user_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>   
                <div class="mb-3">
                    <label for="complaint" class="form-label">Keluhan</label>
                    <textarea class="form-control @error('complaint')
                        is-invalid
                    @enderror" id="complaint" name="complaint" required >{{ old('complaint', $record->complaint) }}</textarea>
                    @error('complaint')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="diagnosis" class="form-label">Diagnosa</label>
                    <input type="text" class="form-control @error('diagnosis')
                        is-invalid
                    @enderror" id="diagnosis" name="diagnosis" required autofocus value="{{ old('diagnosis', $record->diagnosis) }}">    
                    @error('diagnosis')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="action" class="form-label">Tindakan</label>
                    <input type="text" class="form-control @error('action')
                        is-invalid
                    @enderror" id="action" name="action" required autofocus value="{{ old('action', $record->action) }}">    
                    @error('action')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>        

                <div class="mb-3">
                    <label for="medicine_id" class="form-label">Obat</label>
                    <select class="form-select @error('medicine_id') is-invalid @enderror" name="medicine_id" id="medicine_id">
                        <option value="">Select Medicine</option>
                        @foreach ($medicines as $medicine)     
                            @if (old('medicine_id', $record->medicine_id) == $medicine->id)
                                <option value="{{ $medicine->id }}" selected>{{ $medicine->name }}</option>                                               
                            @else                        
                                <option value="{{ $medicine->id }}">{{ $medicine->name }}</option>
                            @endif               
                        @endforeach
                      </select>
                      @error('medicine_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>       

                <div class="mb-3">
                    <label for="qty" class="form-label">Jumlah</label>
                    <input type="number" class="form-control @error('qty')
                    is-invalid
                @enderror" id="qty" name="qty" value="{{ old('qty', $record->qty) }}">    
                @error('qty')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>       

                <div class="mb-3">
                    <label for="poly" class="form-label">Poli</label>
                    <input type="text" class="form-control @error('poly')
                        is-invalid
                    @enderror" id="poly" name="poly" required value="{{ old('poly', $record->poly) }}">    
                    @error('poly')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="refferal" class="form-label">Rujukan</label>
                    <input type="text" class="form-control @error('refferal')
                        is-invalid
                    @enderror" id="refferal" name="refferal" value="{{ old('refferal', $record->refferal) }}">    
                    @error('refferal')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection