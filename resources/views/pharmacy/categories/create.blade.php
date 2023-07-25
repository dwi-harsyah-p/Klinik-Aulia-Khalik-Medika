@extends('dashboard.layouts.main')

@section('container')
<div class="col-lg-7">
    <div class="card">
        <div class="card-header">
          New Category
        </div>
        <div class="card-body">                  
            <form action="/categories" method="post" class="mb-3">
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
                
                <button type="submit" class="btn btn-primary">Create Category Medicine</button>
            </form>
        </div>
    </div>
</div>

<script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    name.addEventListener('change', function () {
        fetch('/categories/checkSlug?name=' + name.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
</script>
@endsection