@extends('dashboard.layouts.main')

@section('container')
<div class="col-lg-7">
    <div class="card">
        <div class="card-header">
          New Medical Record
        </div>
        <div class="card-body">                  
            <form action="/records" method="post" class="mb-3">
                @csrf                
                <div class="mb-3">
                    <label for="user_id" class="form-label">Patient</label>
                    <select class="form-select @error('user_id') is-invalid @enderror" id="user_id" name="user_id">                        
                        @foreach ($users as $user)     
                            @if (old('user_id') == $user->id)
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
                    <label for="complaint" class="form-label">Complaint</label>
                    <textarea class="form-control @error('complaint')
                        is-invalid
                    @enderror" id="complaint" name="complaint" required autofocus> {{ old('complaint') }}</textarea>   
                    @error('complaint')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="diagnosis" class="form-label">Diagnosis</label>
                    <input type="text" class="form-control @error('diagnosis')
                        is-invalid
                    @enderror" id="diagnosis" name="diagnosis" required autofocus value="{{ old('diagnosis') }}">    
                    @error('diagnosis')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="action" class="form-label">action</label>
                    <input type="text" class="form-control @error('action')
                        is-invalid
                    @enderror" id="action" name="action" required autofocus value="{{ old('action') }}">    
                    @error('action')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>        

                <div class="mb-3">
                    <label for="medicine_id" class="form-label">Medicine</label>
                    <select class="form-select @error('medicine_id') is-invalid @enderror" name="medicine_id" id="medicine_id">
                        <option value="">Select Medicine</option>
                        @foreach ($medicines as $medicine)     
                            @if (old('medicine_id') == $medicine->id)
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

                {{-- <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" class="form-control @error('quantity')
                    is-invalid
                @enderror" id="quantity" name="quantity" value="{{ old('quantity') }}">    
                @error('quantity')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>         --}}

                <div class="mb-3">
                    <label for="poly" class="form-label">Poly</label>
                    <input type="text" class="form-control @error('poly')
                        is-invalid
                    @enderror" id="poly" name="poly" required value="{{ old('poly') }}">    
                    @error('poly')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="refferal" class="form-label">Refferal</label>
                    <input type="text" class="form-control @error('refferal')
                        is-invalid
                    @enderror" id="refferal" name="refferal" value="{{ old('refferal') }}">    
                    @error('refferal')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary">Create Medical Record</button>
            </form>
        </div>
    </div>
</div>
@endsection