@extends('layout')

@section('page-content')
    <br>
    <br>
    <form action="/books" method="post">
        @csrf

        <div class="mb-3">
          <label  class="form-label">Title</label>
          <input type="text" name="title" class="form-control" value="{{ old('title') }}">
          @error('title')
         <div class="text-danger">{{ $message }}</div>
        @enderror
        </div>

        <div class="mb-3">
            <label  class="form-label">Author</label>
            <input type="text" name="author" class="form-control" value="{{ old('author') }}">
            @error('author')
           <div class="text-danger">{{ $message }}</div>
          @enderror
          </div>

          <div class="mb-3">
            <label  class="form-label">ISBN</label>
            <input type="text" name="isbn" class="form-control" value="{{ old('isbn') }}">
            @error('isbn')
           <div class="text-danger">{{ $message }}</div>
          @enderror
          </div>

          <div class="mb-3">
            <label  class="form-label">Stock</label>
            <input type="text" name="stock" class="form-control" value="{{ old('stock') }}">
            @error('stock')
           <div class="text-danger">{{ $message }}</div>
          @enderror
          </div>

          <div class="mb-3">
            <label  class="form-label">Price</label>
            <input type="text" name="price" class="form-control" value="{{ old('price') }}">
            @error('price')
           <div class="text-danger">{{ $message }}</div>
          @enderror
          </div>

         
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

@endsection
