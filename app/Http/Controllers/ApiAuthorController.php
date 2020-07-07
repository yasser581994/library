<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Author;
use Illuminate\Support\Facades\Validator;

class ApiAuthorController extends Controller
{
    public function index()
    {
        $authors = Author::with('books')->get();

        return response()->json($authors);
    }


    public function show($id)
    {
        $author = Author::with('books')->find($id);
        
        return response()->json($author);
    }


    //create
    public function store(Request $request)
    {

        $vali = Validator::make($request->all(), [
            'name'=>'required|string|max:100',
            'bio'=>'required|string',
            'img'=>'required|image'
        ]);

        if($vali->fails())
        {
            return response()->json([
                'errors' => $vali->errors()
            ]);
        }
        $img = $request->img;
        $ext = $img->getClientOriginalExtension();  
        $name = uniqid() . ".$ext";
        $img->move( public_path('uploads') , $name);


      $author = Author::create([
            'name' => $request->name,
            'bio' => $request->bio,
            'img' => $name,
        ]);
       
        return response()->json([
            'author' =>   $author
        ]);
    }


    public function update($id, Request $request)
    {
        
        $vali = Validator::make($request->all(), [
            'name'=>'required|string|max:100',
            'bio'=>'required|string',
            'img'=>'nullable|image'
        ]);

        if($vali->fails())
        {
            return response()->json([
                'errors' => $vali->errors()
            ]);
        }

        $author = Author::find($id);
        $name = $author->img;   

        if($request->hasFile('img'))
        {
            if($name !== null)
            {
              unlink(public_path("uploads/$name"));
            }
        $img = $request->img;
        $ext = $img->getClientOriginalExtension();  
        $name = uniqid() . ".$ext";
        $img->move( public_path('uploads') , $name);
        }

        Author::find($id)->update([
            'name' =>$request->name,
            'bio' => $request->bio,
            'img' =>$name,
        ]);

         
        return response()->json([
            'author' =>   $author
        ]);
    }


    //delete

    public function delete($id)
    {
        $author = Author::find($id);
        $name = $author->img;

        if($name !== null)
        {
          unlink(public_path("uploads/$name"));
        }
         $author->delete();

        return response()->json([
            'success' => 'author is delete'
        ]);
    }
}
