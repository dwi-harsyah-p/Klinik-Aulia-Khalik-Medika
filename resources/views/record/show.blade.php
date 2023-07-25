@extends('dashboard.layouts.main')

@section('container')    

@if (session()->has('success'))
      <div class="alert alert-success col-lg-12" role="alert">
        {{ session('success') }}
      </div>
    @endif
    <div class="card" style="width: 18rem;">        
        <div class="card-body">
          <h5 class="card-title">{{ $record->user->biodata->name }}</h5>
          <p class="card-text">Diagnosis : {{ $record->diagnosis }}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Action : {{ $record->action }}</li>
          <li class="list-group-item">Medicine : {{ $record->medicine->name }}</li>
          <li class="list-group-item">Quantity : {{ $record->quantity }}</li>
          <li class="list-group-item">Poly : {{ $record->poly }}</li>
          <li class="list-group-item">Refferal : {{ $record->refferal }}</li>
        </ul>    
      </div>

@endsection