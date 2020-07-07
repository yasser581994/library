<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;
use App\Author;
class BookController extends Controller
{
    public function index()
    {
       $books = Book::orderBy('id','DESC')->paginate(3);
       return view('books.index', [
           'books' => $books

       ]);



    
    }
    public function latest()
    {
        $books = Book::orderBy('id', 'DESC')->take(3)->get();
        return view('books.latest',[
               
            'books' => $books

        ]);
    }



    public function show($id)
    {
        $book = Book::find($id);
        
        return view('books.show',[

            'book' => $book
        ]);
    }



    public function search($word)
    {
         $books = Book::where('name', 'LIKE', "%$word%")->get();

         return view('books.search',[

            'books' => $books

         ]);
    }

    //create

    public function create()
    {
        $authors = Author::select('id','name')->get();
        return view('books.create',[
            'authors' => $authors
        ]);
    }



    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string|max:100',
            'desc'=>'required|string',
            'img'=>'required|image',
            'price'=>'required|numeric',
            'author_id'=>'required|exists:authors,id'
        ]);

        $img = $request->img;
        $ext = $img->getClientOriginalExtension();  
        $name = uniqid() . ".$ext";
        $img->move( public_path('uploads') , $name);


        Book::create([
            'name' => $request->name,
            'desc' => $request->desc,
            'img' => $name,
            'price' => $request->price,
            'author_id' => $request->author_id,
            
        ]);

        return redirect( route('allBooks'));
    } 
    

    //update

    public function edit($id)
    {
         $book = Book::find($id);
         $authors = Author::select('id','name')->get();


         return view('books.edit',[
            'book' => $book,
            'authors' => $authors

         ]);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name'=>'required|string|max:100',
            'desc'=>'required|string',
            'img'=>'nullable|image',
            'price'=>'required|numeric',
            'author_id'=>'required|exists:authors,id'
        ]);

        $book = Book::find($id);
        $name = $book->img;   

        if($request->hasFile('img'))
        {
            if($name !== null)
        unlink(public_path("uploads/$name"));
        
        $img = $request->img;
        $ext = $img->getClientOriginalExtension();  
        $name = uniqid() . ".$ext";
        $img->move( public_path('uploads') , $name);
        }

        Book::find($id)->update([
            'name' => $request->name,
            //'desc' => $request->desc,
            'img' => $name,
            'price' => $request->price,
            'author_id' => $request->author_id,
        ]);

        return redirect( route('allBooks'));
    }

    public function delete($id)
    {
        $book = Book::find($id);
        $name = $book->img;

        if($name !== null)
        unlink(public_path("uploads/$name"));
        
        $book->delete();

        return back();
    }
}
