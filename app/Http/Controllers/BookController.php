<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $books= Book::query()
            ->where('title','like','%'.$request->search.'%')
             ->orwhere('author','like','%'.$request->search.'%')
            ->paginate(10);
            
        }
        else{
        $books = Book::paginate(10);
        }
        return view("books.index")->with("books",$books);
    }

    public function show($id){
        $book = Book::find($id);
        return view("books.show")->with("book",$book);
    }

    public function add(){
        return view("books.add");
    }

    public function store(Request $request)
   
    {
        $validated = $request->validate([
            'title' => 'required',
            'author'=>['required'],
            'isbn'=>['required','integer','digits:13'],
            'stock'=>['required','integer','min:0'],
            'price'=>['required','numeric','min:0'],
        ]);

        $book = new Book;
        $book->id = $request->id;
        $book->title = $request->title;
        $book->author = $request->author;
        $book->isbn = $request->isbn;
        $book->stock = $request->stock;
        $book->price = $request->price;
        $book->created_at = new \DateTime('now',new \DateTimeZone('Etc/GMT-6'));
        $book->updated_at = new \DateTime('now', new \DateTimeZone('Etc/GMT-6'));
        $book->save();
       return redirect(route('show',$book->id));
    }

    public function edit($id){
        $book = Book::find($id);
        return view("books.edit")->with("book",$book);
    }

    public function update(Request $request)
   
    {
        $validated = $request->validate([
            'title' => 'required',
            'author'=>['required'],
            'isbn'=>['required','integer','digits:13'],
            'stock'=>['required','integer','min:0'],
            'price'=>['required','numeric','min:0'],
        ]);

        $book = Book::findOrFail($request->id);
        $book->id = $request->id;
        $book->title = $request->title;
        $book->author = $request->author;
        $book->isbn = $request->isbn;
        $book->stock = $request->stock;
        $book->price = $request->price;
        $book->created_at = $request->created_at;
        $book->updated_at = new \DateTime('now', new \DateTimeZone('Etc/GMT-6'));
        $book->save();
       return redirect(route('index'));
    }

    public function destroy(Request $request){
        $book = Book::find($request->id);
        $book->delete();
        return redirect(route('index'));
    }

  
    
}
