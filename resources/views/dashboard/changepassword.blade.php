@extends('dashboard.layouts.main')

@section('container')                
                    
<div class="d-flex justify-content-center">
                    <div class="card text-center" style="width: 28rem;">        
                        <div class="card-body">
                            {{-- <img src="/img/logo-dokkes.png" alt="" height="40px"> --}}
                          <h5 class="card-title"></h5>
                          
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">
                            <div class="form-floating">
                              <input type="text" name="cur_pass" class="form-control @error('cur_pass')
                                  is-invalid
                              @enderror" id="cur_pass" placeholder="cur_pass" required>
                              <label for="cur_pass">Current Password</label>
                              @error('cur_pass')                    
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                              @enderror
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="form-floating">
                              <input type="text" name="pass" class="form-control @error('pass')
                                  is-invalid
                            @enderror" id="pass" placeholder="pass" required>
                              <label for="pass">New Password</label>
                              @error('pass')                    
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                              @enderror
                            </div>
                          </li>                      
                          <li class="list-group-item">
                            <div class="form-floating">
                              <input type="text" name="con_pass" class="form-control @error('con_pass')
                                  is-invalid
                            @enderror" id="con_pass" placeholder="con_pass" required>
                              <label for="con_pass">Confirm New Password</label>
                              @error('con_pass')                    
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                              @enderror
                            </div>
                          </li>                      
                          
                        </ul>    
                        <button class="btn btn-primary mt-3">Change Password</button>
                      </div>
                    </div>              
@endsection