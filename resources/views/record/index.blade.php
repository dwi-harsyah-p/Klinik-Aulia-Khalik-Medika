@extends('dashboard.layouts.main')

@section('container')    

{{-- @if (session()->has('success'))
      <div class="alert alert-success col-lg-12 mt-3" role="alert">
        {{ session('success') }}
      </div>
    @endif
@if (session()->has('error'))
      <div class="alert alert-danger col-lg-12 mt-3" role="alert">
        {{ session('error') }}
      </div>
    @endif --}}

{{-- <a href="/records/create" class="btn btn-primary mb-3 mt-2">&#43; New Medical Record</a>     --}}
<!-- Button trigger modal -->
@can('dokter')
<button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#exampleModalCenter">
    Tambah Rekam Medis
  </button>
@endcan
{{-- @can('kasi')
  <a href="/report" class="btn btn-primary mt-2 ml-2" target="_blank">Cetak</a>
@endcan --}}
<div class="card my-4 col-lg-12">
    <div class="card-header">              
            <i class="fas fa-table me-1"></i>
            Rekam Medis       
    </div>    
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>                    
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>Keluhan</th>
                    <th>Diagnosa</th>
                    <th>Tindakan</th>
                    <th>Obat</th>                    
                    <th>Jumlah</th>                    
                    <th>Poli</th>
                    <th>Rujukan</th>
                    @can('dokter')
                    <th>Action</th>
                    @endcan                    
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>Keluhan</th>
                    <th>Diagnosa</th>
                    <th>Tindakan</th>
                    <th>Obat</th>                    
                    <th>Jumlah</th>                    
                    <th>Poli</th>
                    <th>Rujukan</th>
                    @can('dokter')
                    <th>Action</th>
                    @endcan                    
                </tr>
            </tfoot>
            <tbody>                                    
                @foreach ($records as $record)                    
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $record->created_at->format('d-m-Y h:i:s') }}</td>
                        <td>{{ $record->user->biodata->name ?? 'Data Tidak Ditemukan' }}</td>
                        <td>{{ $record->complaint }}</td>
                        <td>{{ $record->diagnosis }}</td>
                        <td>{{ $record->action }}</td>
                        <td>
                            {{ $record->medicine->name ?? 'Data Tidak Ditemukan' }}
                            {{-- {{ $record->medicine->dosis ?? 'Data Tidak Ditemukan' }} --}}
                        </td>                        
                        <td>{{ $record->qty }}</td>
                        <td>{{ $record->poly }}</td>
                        <td>{{ $record->refferal }}</td>                        
                        @can('dokter')
                        <td>  
                            {{-- <a href="/records/{{ $record->id }}/edit" class="badge bg-warning">
                                <span><i class="fas fa-pen-to-square"></i></span>
                            </a> --}}
                            <button type="button" class="badge bg-warning border-0" data-toggle="modal" data-target="#ModalEditRecord{{ $record->id }}">
                                <span><i class="fas fa-pen-to-square"></i></span>
                              </button>                              
                            <form action="/records/{{ $record->id }}" method="post" class="d-inline">                              
                              @method('delete')
                              @csrf
                              <button type="submit" class="badge bg-danger border-0" onclick="confirmDelete(event)"><span><i class="fas fa-x"></i></span></button>
                            </form>                             
                        </td>        
                        @endcan            
                    </tr>
                    
<!-- Modal -->
<div class="modal fade" id="ModalEditRecord{{ $record->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Rekam Medis</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/records/{{ $record->id }}" method="post" class="mb-3">
                @method('put')
                @csrf                
                <div class="mb-3">
                    <label for="user_id" class="form-label">Nama</label>
                    <select class="form-select @error('user_id') is-invalid @enderror" id="user_id" name="user_id">                        
                        @foreach ($users as $user)     
                            @if (old('user_id', $record->user_id) == $user->id)
                                <option value="{{ $user->id }}" selected>{{ $user->biodata->name }}</option>                                               
                            @else                        
                                <option value="{{ $user->id }}">{{ $user->biodata->name }}</option>
                            @endif               
                        @endforeach
                      </select>
                      @error('user_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>   
                <div class="mb-3">
                    <label for="complaint" class="form-label">Keluhan</label>
                    <textarea class="form-control @error('complaint')
                        is-invalid
                    @enderror" id="complaint" name="complaint" required >{{ old('complaint', $record->complaint) }}</textarea>
                    @error('complaint')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="diagnosis" class="form-label">Diagnosa</label>
                    <input type="text" class="form-control @error('diagnosis')
                        is-invalid
                    @enderror" id="diagnosis" name="diagnosis" required autofocus value="{{ old('diagnosis', $record->diagnosis) }}">    
                    @error('diagnosis')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="action" class="form-label">Tindakan</label>
                    <input type="text" class="form-control @error('action')
                        is-invalid
                    @enderror" id="action" name="action" required autofocus value="{{ old('action', $record->action) }}">    
                    @error('action')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>        

                <div class="mb-3">
                    <label for="medicine_id" class="form-label">Obat</label>
                    <select class="form-select @error('medicine_id') is-invalid @enderror" name="medicine_id" id="medicine_id">
                        <option value="">Select Medicine</option>
                        @foreach ($medicines as $medicine)     
                            @if (old('medicine_id', $record->medicine_id) == $medicine->id)
                                <option value="{{ $medicine->id }}" selected>{{ $medicine->name }}</option>                                               
                            @else                        
                                <option value="{{ $medicine->id }}">{{ $medicine->name }}</option>
                            @endif               
                        @endforeach
                      </select>
                      @error('medicine_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>       

                <div class="mb-3">
                    <label for="qty" class="form-label">Jumlah</label>
                    <input type="number" class="form-control @error('qty')
                    is-invalid
                @enderror" id="qty" name="qty" value="{{ old('qty', $record->qty) }}">    
                @error('qty')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>       

                <div class="mb-3">
                    <label for="poly" class="form-label">Poli</label>
                    <input type="text" class="form-control @error('poly')
                        is-invalid
                    @enderror" id="poly" name="poly" required value="{{ old('poly', $record->poly) }}">    
                    @error('poly')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="refferal" class="form-label">Rujukan</label>
                    <input type="text" class="form-control @error('refferal')
                        is-invalid
                    @enderror" id="refferal" name="refferal" value="{{ old('refferal', $record->refferal) }}">    
                    @error('refferal')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
      </div>
    </div>
  </div>
  {{-- End Modal Tambah --}}                    
                    
                @endforeach                
            </tbody>
        </table>        
    </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Rekam Medis</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/records" method="post" class="mb-3">
                @csrf                
                <div class="mb-3">
                    <label for="user_id" class="form-label">Nama</label>
                    <select class="form-select @error('user_id') is-invalid @enderror" id="user_id" name="user_id">                        
                        @foreach ($users as $user)     
                            @if (old('user_id', $iduser ?? '') == $user->id)
                                <option value="{{ $user->id }}" selected>{{ $user->biodata->name }}</option>                                               
                            @else                        
                                <option value="{{ $user->id }}">{{ $user->biodata->name }}</option>
                            @endif               
                        @endforeach
                      </select>
                      @error('user_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>   
                <div class="mb-3">
                    <label for="complaint" class="form-label">Keluhan</label>
                    <textarea class="form-control @error('complaint')
                        is-invalid
                    @enderror" id="complaint" name="complaint" required autofocus> {{ old('complaint') }}</textarea>   
                    @error('complaint')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="diagnosis" class="form-label">Diagnosa</label>
                    <input type="text" class="form-control @error('diagnosis')
                        is-invalid
                    @enderror" id="diagnosis" name="diagnosis" required autofocus value="{{ old('diagnosis') }}">    
                    @error('diagnosis')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>                

                <div class="mb-3">
                    <label for="action" class="form-label">Tindakan</label>
                    <input type="text" class="form-control @error('action')
                        is-invalid
                    @enderror" id="action" name="action" required autofocus value="{{ old('action') }}">    
                    @error('action')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>        

                <div class="mb-3">
                    <label for="medicine_id" class="form-label">Obat</label>
                    <select class="form-select @error('medicine_id') is-invalid @enderror" name="medicine_id" id="medicine_id">
                        <option value="">Select Medicine</option>
                        @foreach ($medicines as $medicine)     
                            @if (old('medicine_id') == $medicine->id)
                                <option value="{{ $medicine->id }}" selected>{{ $medicine->name }}</option>                                               
                            @else                        
                                <option value="{{ $medicine->id }}">{{ $medicine->name }}</option>
                            @endif               
                        @endforeach
                      </select>
                      @error('medicine_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div> 

                <div class="mb-3">
                    <label for="qty" class="form-label">Jumlah</label>
                    <input type="number" class="form-control @error('qty')
                    is-invalid
                @enderror" id="qty" name="qty" value="{{ old('qty') }}">    
                @error('qty')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>        

                <div class="mb-3">
                    <label for="poly" class="form-label">Poli</label>
                    <input type="text" class="form-control @error('poly')
                        is-invalid
                    @enderror" id="poly" name="poly" required value="{{ old('poly') }}">    
                    @error('poly')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="refferal" class="form-label">Rujukan</label>
                    <input type="text" class="form-control @error('refferal')
                        is-invalid
                    @enderror" id="refferal" name="refferal" value="{{ old('refferal') }}">    
                    @error('refferal')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
      </div>
    </div>
  </div>
  {{-- End Modal Tambah --}}

  
@endsection