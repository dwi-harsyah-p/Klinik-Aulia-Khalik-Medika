@extends('dashboard.layouts.main')

@section('container')    

{{-- @if (session()->has('success'))
      <div class="alert alert-success col-lg-12 mt-3" role="alert">
        {{ session('success') }}
      </div>
    @endif --}}

    @if($errors->any())
    <div class="alert alert-danger col-lg-12 mt-3" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- <a href="/biodata/create" class="btn btn-primary mb-3 mt-2">&#43; Tambah Pasien</a>     --}}
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-3 mt-2" data-toggle="modal" data-target="#exampleModal">
    Tambah Pasien
  </button>
<div class="card mb-4 col-lg-12">
    <div class="card-header">              
            <i class="fas fa-table me-1"></i>
            Data Pasien        
    </div>    
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Action</th>                    
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Action</th>                    
                </tr>
            </tfoot>
            <tbody>
                @foreach ($biodatas as $bio)                    
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $bio->name }}</td>                                                
                        <td>{{ $bio->nik }}</td>
                        <td>{{ $bio->gender }}</td>                                                
                        <td>{{ $bio->date_of_birth }}</td>                                                
                        <td>{{ $bio->address }}</td>                                              
                        <td>
                            <a href="/pasien/{{ $bio->id }}" class="badge bg-info">
                                <span><i class="fas fa-eye"></i></span>
                            </a>
                            {{-- <a href="/pasien/{{ $bio->id }}/edit" class="badge bg-warning">
                                <span><i class="fas fa-pen-to-square"></i></span>
                            </a> --}}
                            <button type="button" class="badge bg-warning border-0" data-toggle="modal" data-target="#ModalEdit{{ $bio->id }}">
                                <span><i class="fas fa-pen-to-square"></i></span>
                              </button>
                            <form action="/pasien/{{ $bio->id }}" method="post" class="d-inline">
                              @method('delete')
                              @csrf                             
                              <button type="submit" class="badge bg-danger border-0" onclick="confirmDelete(event)"><span><i class="fas fa-x"></i></span></button>
                            </form> 
                        </td>                    
                    </tr>  
                    
<!-- Modal Edit -->
<div class="modal fade" id="ModalEdit{{ $bio->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Pasien</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/pasien/{{ $bio->id }}" method="post">   
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="name">Nama</label>
                    <input type="text" name="name" class="form-control @error('name')
                        is-invalid
                    @enderror" id="name" placeholder="Nama" required value="{{ old('name', $bio->name) }}">
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
                    @enderror" id="nik" placeholder="NIK" required value="{{ old('nik', $bio->nik) }}">
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
                        @if (old('gender', $bio->gender) == 'Perempuan')
                            <option value="Perempuan" selected>Perempuan</option>                       
                            <option value="Laki-laki">Laki-laki</option>                       
                        @elseif(old('gender', $bio->gender) == 'Laki-laki')
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
                    @enderror" id="date_of_birth" placeholder="Tanggal Lahir" required value="{{ old('date_of_birth', $bio->date_of_birth) }}">
                        
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
                @enderror" id="address" placeholder="Alamat" required value="{{ old('address', $bio->address) }}">
                    
                    @error('address')                    
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button class="btn btn-primary" type="submit">Simpan</button>            
        </form>
        </div>
      </div>
    </div>
  </div>
  {{-- End Modal Edit --}}                    
                    
                @endforeach                
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Pasien</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/pasien" method="post">   
                @csrf
                <div class="mb-3">
                    <label for="name">Nama</label>
                    <input type="text" name="name" class="form-control @error('name')
                        is-invalid
                    @enderror" id="name" placeholder="Nama" required value="{{ old('name') }}">
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
                    @enderror" id="nik" placeholder="NIK" required value="{{ old('nik') }}">
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
                        @if (old('gender') == 'Perempuan')
                            <option value="Perempuan" selected>Perempuan</option>                       
                            <option value="Laki-laki">Laki-laki</option>                       
                        @elseif(old('gender') == 'Laki-laki')
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
                    @enderror" id="date_of_birth" placeholder="Tanggal Lahir" required value="{{ old('date_of_birth') }}">
                        
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
                @enderror" id="address" placeholder="Alamat" required value="{{ old('address') }}">
                    
                    @error('address')                    
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button class="btn btn-primary" type="submit">Tambah</button>            
        </form>
        </div>
      </div>
    </div>
  </div>
  {{-- End Modal Tambah --}}
@endsection