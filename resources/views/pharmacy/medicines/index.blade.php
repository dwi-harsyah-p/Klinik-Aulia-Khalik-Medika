@extends('dashboard.layouts.main')

@section('container')    

{{-- @if (session()->has('success'))
      <div class="alert alert-success col-lg-10 mt-3" role="alert">
        {{ session('success') }}
      </div>
    @endif --}}

{{-- <a href="/medicines/create" class="btn btn-primary mb-3 mt-2">&#43; New Medicine</a>     --}}
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#exampleModalCenter">
    &#43; Tambah Obat
  </button>
<div class="card mb-4 col-lg-10">
    <div class="card-header">              
            <i class="fas fa-table me-1"></i>
            Data Obat        
    </div>    
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Obat</th>
                    <th>Jenis Obat</th>
                    <th>Dosis</th>
                    <th>Stok</th>
                    <th>Action</th>                    
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama Obat</th>
                    <th>Jenis Obat</th>
                    <th>Dosis</th>
                    <th>Stok</th>
                    <th>Action</th>                    
                </tr>
            </tfoot>
            <tbody>
                @foreach ($medicines as $medicine)                    
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $medicine->name }}</td>
                        <td>{{ $medicine->category->name ?? 'Data Tidak Ditemukan' }}</td>
                        <td>{{ $medicine->dosis }}</td>
                        <td>
                            {{ $medicine->stock }}
                            {{-- <a href="/medicines/{{ $medicine->id }}/stock">
                                <span><i class="fas fa-plus"></i></span>
                            </a> --}}
                            <button type="button" class="btn btn-sm p-0" style="color:blue;" data-toggle="modal" data-target="#ModalStok{{ $medicine->id }}">
                                <span><i class="fas fa-plus"></i></span>
                              </button>
                        </td>
                        <td>                             
                            {{-- <a href="/medicines/{{ $medicine->slug }}/edit" class="badge bg-warning">
                                <span><i class="fas fa-pen-to-square"></i></span>
                            </a> --}}
                            <button type="button" class="badge bg-warning border-0" data-toggle="modal" data-target="#ModalEditObat{{ $medicine->id }}">
                                <span><i class="fas fa-pen-to-square"></i></span>
                              </button>
                            {{-- <form action="/medicines/{{ $medicine->slug }}" method="post" class="d-inline">                               --}}                            
                            <form action="/medicines/{{ $medicine->id }}" method="post" class="d-inline">                              
                              @method('delete')
                              @csrf
                              <button type="submit" class="badge bg-danger border-0" onclick="confirmDelete(event)"><span><i class="fas fa-x"></i></span></button>
                            </form> 
                        </td>                    
                    </tr> 
                    
<!-- Modal Edit Obat -->
<div class="modal fade" id="ModalEditObat{{ $medicine->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Obat</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                                            
            {{-- <form action="/medicines/{{ $medicine->slug }}" method="post"> --}}
            <form action="/medicines/{{ $medicine->id }}" method="post">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('name')
                        is-invalid
                    @enderror" id="name" name="name" required autofocus value="{{ old('name', $medicine->name) }}">    
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control @error('slug')
                    is-invalid
                @enderror" id="slug" name="slug" required value="{{ old('slug', $medicine->slug) }}">    
                @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>         --}}
                <div class="mb-3">
                    <label for="category" class="form-label">Jenis Obat</label>
                    <select class="form-select" name="category_id">
                        @foreach ($categories as $category)     
                            @if (old('category_id', $medicine->category_id) == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>                                               
                            @else                        
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif               
                        @endforeach
                        </select>
                </div>       
                <div class="mb-3">
                    <label for="dosis" class="form-label">Dosis</label>
                    <input type="text" class="form-control @error('dosis')
                        is-invalid
                    @enderror" id="dosis" name="dosis" required autofocus value="{{ old('dosis', $medicine->dosis) }}">    
                    @error('dosis')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label">stock</label>
                    <input type="number" class="form-control @error('stock')
                        is-invalid
                    @enderror" id="stock" name="stock" required autofocus value="{{ old('stock', $medicine->stock) }}">    
                    @error('stock')
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
  {{-- End Modal Edit --}}


<!-- Modal Stok -->
<div class="modal fade" id="ModalStok{{ $medicine->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Stok Obat</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                                            
            <form action="/medicines/{{ $medicine->id }}/stock" method="post">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Obat</label>
                    <input type="text" readonly class="form-control @error('name')
                        is-invalid
                    @enderror" id="name" name="name" required autofocus value="{{ old('name', $medicine->name) }}">    
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control @error('slug')
                    is-invalid
                @enderror" id="slug" name="slug" required value="{{ old('slug', $medicine->slug) }}">    
                @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>         --}}
                <div class="mb-3">
                    <label for="category" class="form-label">Jenis Obat</label>
                    <input type="text" readonly class="form-control @error('category')
                        is-invalid
                    @enderror" id="category" name="category" required autofocus value="{{ old('category', $medicine->category->name) }}">    
                    @error('category')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>       
                <div class="mb-3">
                    <label for="dosis" class="form-label">Dosis</label>
                    <input type="text" readonly class="form-control @error('dosis')
                        is-invalid
                    @enderror" id="dosis" name="dosis" required autofocus value="{{ old('dosis', $medicine->dosis) }}">    
                    @error('dosis')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label">stock</label>
                    <input type="number" class="form-control @error('stock')
                        is-invalid
                    @enderror" id="stock" name="stock" required autofocus value="{{ old('stock', 0) }}">    
                    @error('stock')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>                                                          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
        </div>
      </div>
    </div>
</div>
{{-- End Modal Stok --}}

                    
                @endforeach                
            </tbody>
        </table>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Obat</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                                            
                    <form action="/medicines" method="post" class="mb-3">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('name')
                                is-invalid
                            @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">    
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control @error('slug')
                            is-invalid
                        @enderror" id="slug" name="slug" required value="{{ old('slug') }}" >    
                        @error('slug')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>         --}}
                        <div class="mb-3">
                            <label for="category_id" class="form-label">Jenis Obat</label>
                            <select class="form-select @error('category_id') is-invalid @enderror" name="category_id">
                                @foreach ($categories as $category)     
                                    @if (old('category_id') == $category->id)
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>                                               
                                    @else                        
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif               
                                @endforeach
                              </select>
                              @error('category_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>    
                        <div class="mb-3">
                            <label for="dosis" class="form-label">Dosis</label>
                            <input type="text" class="form-control @error('dosis')
                                is-invalid
                            @enderror" id="dosis" name="dosis" required autofocus value="{{ old('dosis') }}">    
                            @error('dosis')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>   
                        <div class="mb-3">
                            <label for="stock" class="form-label">stock</label>
                            <input type="number" class="form-control @error('stock')
                                is-invalid
                            @enderror" id="stock" name="stock" required autofocus value="{{ old('stock') }}">    
                            @error('stock')
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

  {{-- <script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    name.addEventListener('change', function () {
        fetch('/medicines/checkSlug?name=' + name.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
</script> --}}
@endsection