@extends('layout')

@section('page-content')
    <br>
    <br>
    <h1 style="text-align: center">Book Details</h1>
    <p class="mr-5"></p>
    <a href=" {{route('index') }}" class="btn btn-danger">Back</a>
    <table class="table table-striped">
        <p class="mt-4"></p>
    <tr>
        <th>Book Id</th>
        <td>{{ $book->id }}</td>
    </tr>
    <tr>
        <th>Book Title</th>
        <td>{{ $book->title }}</td>
    </tr>

    <tr>
        <th>Author</th>
        <td>{{ $book->author }}</td>
    </tr>

    <tr>
        <th>ISBN</th>
        <td>{{ $book->isbn }}</td>
    </tr>

    <tr>
        <th>Stock</th>
        <td>{{ $book->stock }}</td>

    </tr>

    <tr>
        <th>Price</th>
        <td>{{ $book->price }}</td>
    </tr>

    <tr>
        <th>Created At</th>
        <td>{{ $book->created_at }}</td>
    </tr>

    <tr>
        <th>Updated At</th>
        <td>{{ $book->updated_at }}</td>
    </tr>
   </table>
@endsection
