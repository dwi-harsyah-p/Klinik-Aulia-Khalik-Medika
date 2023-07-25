<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Dwi Harsyah Prasetya">
    <meta name="generator" content="Hugo 0.98.0">
    <title>{{ $title }} Page</title>
    
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />    
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet" />    
    <style>
        body {
            margin: 5em;
        }
        li {
            font-size: 18px;
            padding: 4px;
        }

        #toast-container > .toast {
            background-image: none !important;
        }

        #toast-container > .toast:before {
            position: fixed;
            font-family: FontAwesome;
            font-size: 24px;
            line-height: 18px;
            float: left;
            color: #FFF;
            padding-right: 0.5em;
            margin: auto 0.5em auto -1.5em;
        }        
        #toast-container > .toast-warning:before {
            content: "\f003";
        }
        #toast-container > .toast-error:before {
            content: "\f001";
        }
        #toast-container > .toast-info:before {
            content: "\f005";
        }
        #toast-container > .toast-success:before {
            content: "\f002";
        }
    </style>
    <style>
      @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

        * {
            box-sizing: border-box;
        }

        body {
            background: #f6f5f7;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: 'Montserrat', sans-serif;
            height: 100vh;
            margin: -20px 0 50px;
        }

        h1 {
            font-weight: bold;
            margin: 0;
        }

        h2 {
            text-align: center;
        }

        p {
            font-size: 14px;
            font-weight: 100;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 20px 0 30px;
        }

        span {
            font-size: 12px;
        }

        a {
            color: #333;
            font-size: 14px;
            text-decoration: none;
            margin: 15px 0;
        }

        button {
            border-radius: 20px;
            border: 1px solid #198754;
            background-color: #198754;
            color: #FFFFFF;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
        }

        button:active {
            transform: scale(0.95);
        }

        button:focus {
            outline: none;
        }

        button.ghost {
            background-color: transparent;
            border-color: #FFFFFF;
        }

        form {
            background-color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
        }

        input, select{
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
                    0 10px 10px rgba(0,0,0,0.22);
            position: relative;
            overflow: hidden;
            width: 768px;
            max-width: 100%;
            min-height: 520px;
        }

        .form-container {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }

        .sign-in-container {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .container.right-panel-active .sign-in-container {
            transform: translateX(100%);
        }

        .sign-up-container {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }

        .container.right-panel-active .sign-up-container {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: show 0.6s;
        }

        @keyframes show {
            0%, 49.99% {
                opacity: 0;
                z-index: 1;
            }
            
            50%, 100% {
                opacity: 1;
                z-index: 5;
            }
        }

        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
            z-index: 100;
        }

        .container.right-panel-active .overlay-container{
            transform: translateX(-100%);
        }

        .overlay {
            background: #198754;
            /* background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
            background: linear-gradient(to right, #FF4B2B, #FF416C); */
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 0;
            color: #FFFFFF;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .container.right-panel-active .overlay {
            transform: translateX(50%);
        }

        .overlay-panel {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .overlay-left {
            transform: translateX(-20%);
        }

        .container.right-panel-active .overlay-left {
            transform: translateX(0);
        }

        .overlay-right {
            right: 0;
            transform: translateX(0);
        }

        .container.right-panel-active .overlay-right {
            transform: translateX(20%);
        }

        .social-container {
            margin: 20px 0;
        }

        .social-container a {
            border: 1px solid #DDDDDD;
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 0 5px;
            height: 40px;
            width: 40px;
        }

        footer {
            background-color: #222;
            color: #fff;
            font-size: 14px;
            bottom: 0;
            position: fixed;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 999;
        }

        footer p {
            margin: 10px 0;
        }

        footer i {
            color: red;
        }

        footer a {
            color: #3c97bf;
            text-decoration: none;
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="/css/signin.css" rel="stylesheet">
  </head>
  <body> 
    <div class="container" id="container">     
      
      <div class="form-container sign-up-container">
        <form action="/register" method="post">   
          @csrf
          
              <input type="text" name="name" class="form-control @error('name')
                  is-invalid
              @enderror" id="name" placeholder="Nama" required value="{{ old('name') }}">
              
              @error('name')                    
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
                    
          
              <input type="number" name="nik" class="form-control @error('nik')
                  is-invalid
              @enderror" id="nik" placeholder="NIK" required value="{{ old('nik') }}">
              
              @error('nik')                    
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
          
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
                  
          
                  <input type="date" name="date_of_birth" class="form-control @error('date_of_birth')
                  is-invalid
              @enderror" id="date_of_birth" placeholder="date_of_birth" required value="{{ old('date_of_birth') }}">
                  
                  @error('date_of_birth')                    
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
              
          
              <input type="text" name="address" class="form-control @error('address')
              is-invalid
          @enderror" id="address" placeholder="Alamat" required value="{{ old('address') }}">
              
              @error('address')                    
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
                  
                      <input type="text" name="username" class="form-control @error('username')
                      is-invalid
                  @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                      
                      @error('username')                    
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                  
                      <input type="email" name="email" class="form-control @error('email')
                      is-invalid
                  @enderror" id="email" placeholder="Email" required value="{{ old('email') }}">                      
                      @error('email')                    
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror     
                                          
              <input type="password" name="password" class="form-control @error('password')
              is-invalid
          @enderror" id="password" placeholder="Password" required>              
              @error('password')                    
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
                   
          <button type="submit">Register</button>            
          </form>
      </div>
      
      <div class="form-container sign-in-container">
                      
                <form action="/login" method="post">
                    @csrf
                    <h3>Klinik Aulia Khalik Medika</h3>
                    <div class="social-container">				                
                        <img src="/img/LOGO KLINIK.jpg" alt="" height="90">
                    </div>
                    <h1>Sign in</h1>                    
                    
                    <input name="email" type="email" class="form-control @error('email')
                    is-invalid
                    @enderror" id="email" placeholder="Email" required>                    
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                                      
                    <input name="password" type="password" class="form-control" id="password" placeholder="Password" required>                    
                    
                    <button type="submit">Sign in</button>
                </form>                            
        </div>

        <div class="overlay-container">
          <div class="overlay">
            <div class="overlay-panel overlay-left">
              <h1>Buat Akun!</h1>
              {{-- <p>To keep connected with us please login with your personal info</p> --}}
                      <p></p>
              <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
              <h1>Selamat Datang!</h1>
              {{-- <p>Enter your personal details and start journey with us</p> --}}
                      <p></p>
              <button class="ghost" id="signUp">Sign Up</button>
            </div>
          </div>
        </div>
    </div> 
<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" ></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
@if (session('loginError'))
    <script>
    // Fungsi untuk menampilkan SweetAlert saat gagal     
        toastr.error('{{ session('loginError') }}', '', {positionClass: 'toast-bottom-left'});
    </script>
@endif

@if (session('status'))
    <script>
    // Fungsi untuk menampilkan SweetAlert saat berhasil   
        toastr.success('{{ session('status') }}', '', {positionClass: 'toast-bottom-left'});
    </script>
@endif
  </body>
</html>
