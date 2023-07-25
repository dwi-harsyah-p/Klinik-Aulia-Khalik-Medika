@extends('dashboard.layouts.main')

@section('container')
<div class="col-lg-7 mt-3">
    <div class="card">
        <div class="card-header">
          Edit Pasien
        </div>
        <div class="card-body">                  
            <form action="/pasien/{{ $biodata->id }}" method="post">   
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="name">Nama</label>
                    <input type="text" name="name" class="form-control @error('name')
                        is-invalid
                    @enderror" id="name" placeholder="Nama" required value="{{ old('name', $biodata->name) }}">
                    @error('name')                    
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>                
                <div class="mb-3">
                    <label for="nik">NIK</label>
                    <input type="number" name="nik" class="form-control @error('nik')
                        is-invalid
                    @enderror" id="nik" placeholder="NIK" required value="{{ old('nik', $biodata->nik) }}">
                    @error('nik')                    
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>                                
                    <div class="mb-3">
                        <label for="gender">Jenis Kelamin</label>
                        <select name="gender" id="gender" class="form-control @error('name')
                        is-invalid
                        @enderror" required>
                        @if (old('gender', $biodata->gender) == 'Perempuan')
                            <option value="Perempuan" selected>Perempuan</option>                       
                            <option value="Laki-laki">Laki-laki</option>                       
                        @elseif(old('gender', $biodata->gender) == 'Laki-laki')
                            <option value="Laki-laki" selected>Laki-laki</option>                        
                            <option value="Perempuan">Perempuan</option>                       
                        @else
                        <option value="Laki-laki">Laki-laki</option>                       
                        <option value="Perempuan">Perempuan</option>                       
                        @endif
                        </select>        
                        
                        @error('gender')                    
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>                        
                    
                    <div class="mb-3 ">
                        <label for="date_of_birth">Tanggal Lahir</label>
                        <input type="date" name="date_of_birth" class="form-control @error('date_of_birth')
                        is-invalid
                    @enderror" id="date_of_birth" placeholder="Tanggal Lahir" required value="{{ old('date_of_birth', $biodata->date_of_birth) }}">
                        
                        @error('date_of_birth')                    
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                
            
                <div class="mb-3">
                    <label for="address">Alamat</label>
                    <input type="text" name="address" class="form-control @error('address')
                    is-invalid
                @enderror" id="address" placeholder="Alamat" required value="{{ old('address', $biodata->address) }}">
                    
                    @error('address')                    
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
        </div>
        <div class="modal-footer">          
          <button class="btn btn-primary" type="submit">Simpan</button>            
        </form>
        </div>
    </div>
</div>
@endsection