@extends('layout')

@section('page-content')
    <br>
    <br>
    <h1 style="text-align: center">Book Table</h1>

   <form action="{{ route('index') }}" method="get">
    @csrf
    <div class="row g-3">
        <div class="col-lg-8">
          <input type="text" class="form-control" name="search" placeholder="Search" value="{{ request('search') }}">
        </div>
        <div class="col-lg-2">
          <input type="submit" class="btn btn-primary" value="Search">
        </div>
        <div class="col-lg-2">
       <a href="{{ route('add') }}" class="btn btn-success" class="text-end">Add</a>
        <div>
            
        </div>
      </div>
   </form>
   
    <p class="mr-5"></p>
    <table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Author</th>
        <th>Stock</th>
        <th>Price</th>
        <th colspan="3" style="text-align: center">Actions</th>
    </tr>
    @foreach ($books as $book)
    <tr>
        <td>{{ $book->id }}</td>
        <td>{{ $book->title }}</td>
        <td>{{ $book->author }}</td>
        <td>{{ $book->stock }}</td>
        <td>{{ $book->price }}</td>
        <td><a href="{{ route("show",$book->id) }}" class="btn btn-success">Show</a></td>
        <td><a href="{{ route("edit",$book->id) }}" class="btn btn-primary">Edit</a></td>
        <td>
            <form action="/destroy" method="post" onclick="return confirm('Are you sure to delete')">
            @csrf
            @method('DELETE')
            <input type="hidden" name="id" value="{{ $book->id }}">
            <input type="submit" class="btn btn-danger" value="Delete">
            </form>
        </td>
    </tr>
        
    @endforeach
   </table>
   {{ $books->links() }};
@endsection
