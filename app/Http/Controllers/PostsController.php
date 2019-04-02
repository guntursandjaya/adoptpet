<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Pet;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]);
    }
    public function index()
    {
        $pets = Pet::all();
        return view('posts.index')->with('pets',$pets);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'gender' => 'required',
            'vaccine' => 'required',
            'price' => 'required',
            'cover_imgae' => 'image|nullable|max:1999'
            
        ]);

        // Handle File Upload
        if ($request->hasFile('cover_image')){
            // Get Filename With the Extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // get ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('cover_image')-> storeAs('public/cover_images',$fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        

        // Create Post
        $pets = new Pet;
        $pets -> name = $request -> input('name');
        $pets -> gender = $request -> input('gender');
        $pets -> vaccine = $request -> input('vaccine');
        //$pets -> shelter_id = $request -> input('shelter_id');
        $pets -> price = $request -> input('price');
        $pets -> user_id = auth()->user()->id;
        $pets -> cover_image = $fileNameToStore;
        $pets -> save();

        
        return redirect('/posts')-> with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pets = pet::find($id);
        return view('posts.show')->with('pet',$pets);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pets = pet::find($id);
        if(auth()->user()->id !== $pets->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }
        return view('posts.edit')->with('pet',$pets);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'gender' => 'required',
            'vaccine' => 'required',
            'price' => 'required',
            
        ]);

        if($request->hasFile('cover_image')){
            // Get File Name with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get Just extentsion
            $extension = $request->file('cover_image') -> getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image') -> storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $pets = Pet::find($id);
        $pets -> name = $request -> input('name');
        $pets -> gender = $request -> input('gender');
        $pets -> vaccine = $request -> input('vaccine');
        
        $pets -> price = $request -> input('price');
        
        $pets -> save();

        return redirect('/posts') -> with('success', 'Post Updated');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pets = pet::find($id);
        
        // Check for Correct User
        if(auth()->user()->id !== $pets->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }

        if($pets->cover_image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/cover_images/'.$pets->cover_image);
        }

        $pets->delete();
        return redirect('/posts') -> with('success', 'Pet Removed');
    }
}
