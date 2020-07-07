<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    public function index()
    {
       $authors = Author::orderBy('id','DESC')->paginate(3);
       return view('authors.index', [
           'authors' => $authors

       ]);



    
    }
    public function latest()
    {
        $authors = Author::orderBy('id', 'DESC')->take(3)->get();
        return view('authors.latest',[
               
            'authors' => $authors

        ]);
    }



    public function show($id)
    {
        $author = Author::find($id);
        
        return view('authors.show',[

            'author' => $author
        ]);
    }



    public function search($word)
    {
         $authors = Author::where('name', 'LIKE', "%$word%")->get();

         return view('authors.search',[

            'authors' => $authors

         ]);
    }

    //create

    public function create()
    {
        return view('authors.create');
    }



    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string|max:100',
            'bio'=>'required|string',
            'img'=>'required|image'
        ]);

        $img = $request->img;
        $ext = $img->getClientOriginalExtension();  
        $name = uniqid() . ".$ext";
        $img->move( public_path('uploads') , $name);


        Author::create([
            'name' => $request->name,
            'bio' => $request->bio,
            'img' => $name,
        ]);

        return redirect( route('allAuthors'));
    } 


    //update

    public function edit($id)
    {
         $author = Author::find($id);

         return view('authors.edit',[

            'author' => $author

         ]);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name'=>'required|string|max:100',
            'bio'=>'required|string',
            'img'=>'nullable|image'
        ]);

        $author = Author::find($id);
        $name = $author->img;   
        
        $img = $request->img;
        $ext = $img->getClientOriginalExtension();  
        $name = uniqid() . ".$ext";
        $img->move( public_path('uploads') , $name);
 

        Author::find($id)->update([
            'name' =>$request->name,
            'bio' => $request->bio,
            'img' =>$name,
        ]);

        return redirect( route('allAuthors'));
    }

    public function delete($id)
    {
        $author = Author::find($id);
        $name = $author->img;

  
        if($name !== null)
        {
          unlink(public_path("uploads/$name"));
        }
        
        $author->delete();

        return back();
    }
}
