<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pet;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
            
        ]);

        $pets = new Pet;
        $pets -> name = $request -> input('name');
        $pets -> gender = $request -> input('gender');
        $pets -> vaccine = $request -> input('vaccine');
        //$pets -> shelter_id = $request -> input('shelter_id');
        $pets -> price = $request -> input('price');
        $pets -> user_id = auth()->user()->id;
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
        $post = pet::find($id);
        $post->delete();
        return redirect('/posts') -> with('success', 'Post Removed');
    }
}
