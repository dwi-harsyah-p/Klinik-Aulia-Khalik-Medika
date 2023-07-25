@extends('dashboard.layouts.main')

@section('container')
<div class="col-lg-7 mt-3">
    <div class="card">
        <div class="card-header">
          Edit User
        </div>
        <div class="card-body">                  
            <form action="/user/{{ $user->id }}" method="post">
                @method('put')
                @csrf              
                <div class="mb-3">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control @error('username')
                      is-invalid
                  @enderror" id="username" placeholder="Username" required value="{{ old('username', $user->username) }}">
                      
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
                  @enderror" id="email" placeholder="Email" required value="{{ old('email', $user->email) }}">                      
                      @error('email')                    
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                </div>

                <div class="mb-3">
                    <label for="level_id" class="form-label">Hak Akses</label>
                            <select class="form-select @error('level_id') is-invalid @enderror" name="level_id">
                                @foreach ($levels as $level)     
                                    @if (old('level_id', $user->level->id) == $level->id)
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
                
                <button type="submit" class="btn btn-primary">Edit User</button>
            </form>
        </div>
    </div>
</div>
@endsection