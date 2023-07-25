@extends('dashboard.layouts.main')

@section('container')    

@if (session()->has('success'))
      <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
      </div>
    @endif

<a href="/level/create" class="btn btn-primary mb-3 mt-2">&#43; New level</a>    
<div class="card mb-4 col-lg-8">
    <div class="card-header">              
            <i class="fas fa-table me-1"></i>
            DataTable        
    </div>    
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name level</th>
                    <th>Action</th>                    
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>#</th>
                    <th>Name level</th>
                    <th>Action</th>                    
                </tr>
            </tfoot>
            <tbody>
                @foreach ($levels as $level)                    
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $level->name }}</td>
                        <td>                             
                            <a href="/level/{{ $level->slug }}/edit" class="badge bg-warning">
                                <span><i class="fas fa-pen-to-square"></i></span>
                            </a>
                            <form action="/level/{{ $level->slug }}" method="post" class="d-inline">                              
                              @method('delete')
                              @csrf
                              <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span><i class="fas fa-x"></i></span></button>
                            </form> 
                        </td>                    
                    </tr>                
                @endforeach                
            </tbody>
        </table>
    </div>
</div>

@endsection