@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-center mt-3">
<div class="col-lg-7">
    <main class="form-registration w-100 m-auto">                
        <form action="/biodata" method="post">   
        @csrf
        <div class="form-floating">
            <input type="text" name="name" class="form-control @error('name')
                is-invalid
            @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
            <label for="name">Name</label>
            @error('name')                    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>                
        <div class="form-floating">
            <input type="number" name="nik" class="form-control @error('nik')
                is-invalid
            @enderror" id="nik" placeholder="NIK" required value="{{ old('nik') }}">
            <label for="nik">NIK</label>
            @error('nik')                    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>                
        <div class="row">
            <div class="col-lg-6">
            <div class="form-floating">
                <select name="gender" id="gender" class="form-control @error('name')
                is-invalid
                @enderror" required>
                @if (old('gender') == 'Female')
                    <option value="Female" selected>Female</option>                       
                    <option value="Male">Male</option>                       
                @elseif(old('gender') == 'Male')
                    <option value="Male" selected>Male</option>                        
                    <option value="Female">Female</option>                       
                @else
                <option value="Male">Male</option>                       
                <option value="Female">Female</option>                       
                @endif
                </select>        
                <label for="gender">gender</label>
                @error('gender')                    
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>                        
            </div>
        <div class="col-lg-6">
            <div class="form-floating ">
                <input type="date" name="date_of_birth" class="form-control @error('date_of_birth')
                is-invalid
            @enderror" id="date_of_birth" placeholder="date_of_birth" required value="{{ old('date_of_birth') }}">
                <label for="date_of_birth">date_of_Birth</label>
                @error('date_of_birth')                    
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
        <div class="form-floating">
            <input type="text" name="address" class="form-control @error('address')
            is-invalid
        @enderror" id="address" placeholder="address" required value="{{ old('address') }}">
            <label for="address">address</label>
            @error('address')                    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="row">
            <div class="col-lg-6">                    
                <div class="form-floating">
                    <input type="text" name="username" class="form-control @error('username')
                    is-invalid
                @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                    <label for="username">Username</label>
                    @error('username')                    
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email')
                    is-invalid
                @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email')                    
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control @error('password')
            is-invalid
        @enderror" id="password" placeholder="Password" required>
            <label for="password">Password</label>
            @error('password')                    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>       
        <div class="form-floating">
            <select name="level" id="level" class="form-control @error('name')
            is-invalid
            @enderror" required>
            @foreach ($level as $level)                
            <option value="{{ $level->id }}">{{ $level->name }}</option>                                   
            @endforeach
            </select>        
            <label for="level">level</label>
            @error('level')                    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>                        
                 
        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Create</button>            
        </form>
    </main>
    </div>
</div>

@endsection