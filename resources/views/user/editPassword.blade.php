@extends('dashboard.layouts.main')

@section('container')
<div class="col-lg-7 mt-3">
    <div class="card">
        <div class="card-header">
          New Password
        </div>
        <div class="card-body">              
            <form action="/user/{{ $user->id }}/password" method="post">
                @method('put')
                @csrf
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
                <button type="submit" class="btn btn-primary">Edit Password</button>
            </form>
        </div>
    </div>
</div>
@endsection