@extends('dashboard.layouts.main')

@section('container')
<div class="col-lg-7">
    <div class="card">
        <div class="card-header">
          New Medicine
        </div>
        <div class="card-body">                  
            <form action="/medicines" method="post" class="mb-3">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name')
                        is-invalid
                    @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">    
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control @error('slug')
                    is-invalid
                @enderror" id="slug" name="slug" required value="{{ old('slug') }}" readonly>    
                @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>        
                <div class="mb-3">
                    <label for="category_id" class="form-label">Category</label>
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
                {{-- <div class="mb-3">
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
                <div class="mb-3">
                    <label for="expired" class="form-label">expired</label>
                    <input type="date" class="form-control @error('expired')
                        is-invalid
                    @enderror" id="expired" name="expired" required autofocus value="{{ old('expired') }}">    
                    @error('expired')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div> --}}
                <button type="submit" class="btn btn-primary">Create Medicine</button>
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