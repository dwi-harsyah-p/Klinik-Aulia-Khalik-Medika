<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Dwi Harsyah Prasetya">
    <meta name="generator" content="Hugo 0.98.0">
    <title>{{ $title }} Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">

            <main class="form-registration w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
                <img class="mb-4" src="/img/logo-dokkes.png" alt="" width="72" height="57">
                <form action="/register" method="post">   
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
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>            
                </form>
                <div class="card-footer text-center py-3">
                    <div class="small">Already Resgistered?<a href="/login" class="text-decoration-none"> Login!</a></div>
                </div>
                <p class="mt-2 mb-3 text-muted">&copy; 2022</p>
            </main>
        </div>
    </div> 
</div> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
