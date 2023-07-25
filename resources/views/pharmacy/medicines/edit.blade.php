@extends('dashboard.layouts.main')

@section('container')
<div class="col-lg-7 mt-3">
    <div class="card">
        <div class="card-header">
          Edit Medicine
        </div>
        <div class="card-body">                  
            <form action="/medicines/{{ $medicine->slug }}" method="post">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Obat</label>
                    <input type="text" class="form-control @error('name')
                        is-invalid
                    @enderror" id="name" name="name" required autofocus value="{{ old('name', $medicine->name) }}">    
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    {{-- <label for="slug" class="form-label">Slug</label> --}}
                    <input type="hidden" class="form-control @error('slug')
                    is-invalid
                @enderror" id="slug" name="slug" required value="{{ old('slug', $medicine->slug) }}">    
                @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>        
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
                <button type="submit" class="btn btn-primary">Edit Medicine</button>
            </form>
        </div>
    </div>
</div>

<script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    name.addEventListener('change', function () {
        fetch('/medicines/checkSlug?name=' + name.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
</script>
@endsection