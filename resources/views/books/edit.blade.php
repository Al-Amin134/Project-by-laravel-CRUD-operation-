@extends('layout')

@section('page-content')
    <br>
    <br>
    <form action="/update" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $book->id }}">
        <div class="mb-3">
          <label  class="form-label">Title</label>
          <input type="text" name="title" class="form-control" value="{{ old('title',$book->title) }}">
          @error('title')
         <div class="text-danger">{{ $message }}</div>
        @enderror
        </div>

        <div class="mb-3">
            <label  class="form-label">Author</label>
            <input type="text" name="author" class="form-control" value="{{ old('author',$book->author) }}">
            @error('author')
           <div class="text-danger">{{ $message }}</div>
          @enderror
          </div>

          <div class="mb-3">
            <label  class="form-label">ISBN</label>
            <input type="text" name="isbn" class="form-control" value="{{ old('isbn',$book->isbn) }}">
            @error('isbn')
           <div class="text-danger">{{ $message }}</div>
          @enderror
          </div>

          <div class="mb-3">
            <label  class="form-label">Stock</label>
            <input type="text" name="stock" class="form-control" value="{{ old('stock',$book->stock) }}">
            @error('stock')
           <div class="text-danger">{{ $message }}</div>
          @enderror
          </div>

          <div class="mb-3">
            <label  class="form-label">Price</label>
            <input type="text" name="price" class="form-control" value="{{ old('price',$book->price) }}">
            @error('price')
           <div class="text-danger">{{ $message }}</div>
          @enderror
          </div>

         
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

@endsection
