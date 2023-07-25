@extends('dashboard.layouts.main')

@section('container')    

@if (session()->has('success'))
      <div class="alert alert-success col-lg-8 mt-3" role="alert">
        {{ session('success') }}
      </div>
    @endif

<a href="/categories/create" class="btn btn-primary mb-3 mt-2">&#43; New Category Medicine</a>    
<div class="card mb-4 col-lg-8">
    <div class="card-header">              
            <i class="fas fa-table me-1"></i>
            Jenis Obat  
    </div>    
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis Obat</th>
                    <th>Action</th>                    
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Jenis Obat</th>
                    <th>Action</th>                    
                </tr>
            </tfoot>
            <tbody>
                @foreach ($categories as $category)                    
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>                             
                            <a href="/categories/{{ $category->slug }}/edit" class="badge bg-warning">
                                <span><i class="fas fa-pen-to-square"></i></span>
                            </a>
                            <form action="/categories/{{ $category->slug }}" method="post" class="d-inline">                              
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