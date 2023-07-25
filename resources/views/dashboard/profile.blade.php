@extends('dashboard.layouts.main')

@section('container')                
                    <br>
<div class="d-flex justify-content-center">
  <div class="card text-center" style="width: 28rem;"> 
      {{-- @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif --}}
                      <div class="card-body">
                          <form action="/updateprofile" method="post">
                            
                            @csrf                                                        
                          <h5 class="card-title"><img src="/img/LOGO KLINIK.png" alt="" height="20px"> My Profile</h5>                          
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">
                            <div class="form-floating">
                              <input type="text" name="name" class="form-control @error('name')
                                  is-invalid
                              @enderror" id="name" placeholder="Name" required value="{{ old('name', auth()->user()->biodata->name) }}">
                              <label for="name">Name</label>
                              @error('name')                    
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                              @enderror
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="form-floating">
                              <input type="number" name="nik" class="form-control @error('nik')
                                  is-invalid
                              @enderror" id="nik" placeholder="NIK" required readonly value="{{ old('nik', auth()->user()->biodata->nik) }}">
                              <label for="nik">NIK</label>
                              @error('nik')                    
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                              @enderror
                            </div>
                          </li>                          
                          <li class="list-group-item">
                            <div class="form-floating">
                        <select name="gender" id="gender" class="form-control @error('gender')
                        is-invalid
                        @enderror" required>
                          @if (old('gender', auth()->user()->biodata->gender) == 'Perempuan')
                              <option value="Perempuan" selected>Perempuan</option>                       
                              <option value="Laki-laki">Laki-laki</option>                       
                          @elseif(old('gender', auth()->user()->biodata->gender) == 'Laki-laki')
                              <option value="Laki-laki" selected>Laki-laki</option>                        
                              <option value="Perempuan">Perempuan</option>                       
                          @else
                          <option value="Laki-laki">Laki-laki</option>                       
                          <option value="Perempuan">Perempuan</option>                       
                          @endif
                        </select>        
                        <label for="gender">Jenis Kelamin</label>
                        @error('gender')                    
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>                                            
                          </li>
                          <li class="list-group-item">
                            <div class="form-floating">
                              <input type="date" name="date_of_birth" class="form-control @error('date_of_birth')
                                  is-invalid
                              @enderror" id="date_of_birth" placeholder="date_of_birth" required value="{{ old('date_of_birth', auth()->user()->biodata->date_of_birth) }}">
                              <label for="date_of_birth">date_of_birth</label>
                              @error('date_of_birth')                    
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                              @enderror
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="form-floating">
                              <input type="text" name="address" class="form-control @error('address')
                                  is-invalid
                              @enderror" id="address" placeholder="address" required value="{{ old('address', auth()->user()->biodata->address) }}">
                              <label for="address">address</label>
                              @error('address')                    
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                              @enderror
                            </div>
                          </li>                          
                          
                        </ul>    
                        <button class="btn btn-primary mt-3" type="submit">Update Profile</button>
                      </form>     
                      </div>
                    </div>              
@endsection