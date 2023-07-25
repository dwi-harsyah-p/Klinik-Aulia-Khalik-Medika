@extends('dashboard.layouts.main')

@section('container')    

{{-- @if (session()->has('success'))
      <div class="alert alert-success col-lg-12 mt-3" role="alert">
        {{ session('success') }}
      </div>
    @endif --}}

<!-- Button trigger modal -->
@can('dokter')
<button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#exampleModal">
    Tambah User
  </button>
@endcan

<div class="card my-4 col-lg-12">
    <div class="card-header">              
            <i class="fas fa-table me-1"></i>
            User       
    </div>    
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Akses</th>                    
                    <th>Password</th>                    
                    <th>Detail</th>                    
                    <th>Action</th>                                 
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Akses</th>                    
                    <th>Password</th>                    
                    <th>Detail</th>                    
                    <th>Action</th>              
                </tr>
            </tfoot>
            <tbody>
                @foreach ($users as $user)                    
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->biodata->name ?? 'Data Tidak Ditemukan' }}</td>                        
                        <td>{{ $user->username }}</td>                        
                        <td>{{ $user->email }}</td>                        
                        <td>{{ $user->level->name ?? 'Data Tidak Ditemukan' }}</td>
                        <td>
                            {{-- <a href="/user/{{ $user->id }}/password" class="badge bg-success container">
                                <span><i class="fas fa-pen-to-square"></i></span>
                            </a> --}}
                            <button type="button" class="badge bg-success border-0 container" data-toggle="modal" data-target="#ModalPassword{{ $user->id }}">
                                <span><i class="fas fa-pen-to-square"></i></span>
                              </button>
                        </td>                                                
                        <td>
                            <a href="/user/{{ $user->id }}" class="badge bg-info container">
                                <span><i class="fas fa-eye"></i></span>
                            </a>
                        </td>                
                        <td>
                            {{-- <a href="/user/{{ $user->id }}/edit" class="badge bg-warning">
                                <span><i class="fas fa-pen-to-square"></i></span>                                
                            </a> --}}
                            <button type="button" class="badge bg-warning border-0" data-toggle="modal" data-target="#ModalEditUser{{ $user->id }}">
                                <span><i class="fas fa-pen-to-square"></i></span>
                              </button>
                            <form action="/user/{{ $user->id }}" method="post" class="d-inline">                              
                              @method('delete')
                              @csrf
                              <button type="submit" class="badge bg-danger border-0" onclick="confirmDelete(event)"><span><i class="fas fa-x"></i></span></button>
                            </form> 
                        </td>                                
                    </tr> 
                    
{{-- Modal Edit --}}
  <div class="modal fade" id="ModalEditUser{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/user/{{ $user->id }}" method="post">   
                @method('put')
                @csrf              
                <div class="mb-3">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control @error('username')
                      is-invalid
                  @enderror" id="Musername" placeholder="Username" required value="{{ old('username', $user->username) }}">
                      
                      @error('username')                    
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                </div>

                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control @error('email')
                      is-invalid
                  @enderror" id="Memail" placeholder="Email" required value="{{ old('email', $user->email) }}">                      
                      @error('email')                    
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                </div>

                <div class="mb-3">
                    <label for="level_id" class="form-label">Hak Akses</label>
                            <select class="form-select @error('level_id') is-invalid @enderror" name="level_id" id="Mlevel_id">
                                @foreach ($levels as $level)     
                                    @if (old('level_id', $user->level_id) == $level->id)
                                        <option value="{{ $level->id }}" selected>{{ $level->name }}</option>                                               
                                    @else                        
                                        <option value="{{ $level->id }}">{{ $level->name }}</option>
                                    @endif               
                                @endforeach
                              </select>
                              @error('level_id')
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

{{-- Modal Password --}}
<div class="modal fade" id="ModalPassword{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/user/{{ $user->id }}/password" method="post">
                @method('put')
                @csrf

                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control @error('email')
                      is-invalid
                  @enderror" id="Memail" placeholder="Email" required value="{{ old('email', $user->email) }}" readonly>                      
                      @error('email')                    
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                </div>
                
                <div class="mb-3">
                    <label for="new_password" class="form-label">New Password</label>
                    <input type="password" class="form-control @error('new_password')
                        is-invalid
                    @enderror" id="new_password" name="new_password" required autofocus>    
                    @error('new_password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control @error('confirm_password')
                        is-invalid
                    @enderror" id="confirm_password" name="confirm_password" required autofocus>    
                    @error('confirm_password')
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
{{-- End Modal Password --}}

                    
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
          <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/user" method="post">   
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

                <div class="mb-3">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control @error('username')
                      is-invalid
                  @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                      
                      @error('username')                    
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                </div>

                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control @error('email')
                      is-invalid
                  @enderror" id="email" placeholder="Email" required value="{{ old('email') }}">                      
                      @error('email')                    
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                </div>

                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control @error('password')
                        is-invalid
                    @enderror" id="password" placeholder="Password" required>              
                    @error('password')                    
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="level_id" class="form-label">Hak Akses</label>
                            <select class="form-select @error('level_id') is-invalid @enderror" name="level_id">
                                @foreach ($levels as $level)     
                                    @if (old('level_id') == $level->id)
                                        <option value="{{ $level->id }}" selected>{{ $level->name }}</option>                                               
                                    @else                        
                                        <option value="{{ $level->id }}">{{ $level->name }}</option>
                                    @endif               
                                @endforeach
                              </select>
                              @error('level_id')
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
@endsection