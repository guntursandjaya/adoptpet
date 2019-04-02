@extends('layouts.app')

@section('content')
    <h1>{{$pet->name}}</h1>
    <div>
        <img style ="width:100%" src="/storage/cover_images/{{$pet->cover_image}}">
        <p> Gender : {{$pet -> gender }} </p>
        <p> Vaccine : {{$pet -> Vaccine}} </p>
        <p> Shelter : {{$pet -> user -> name}}</p>
        <p> Price : {{$pet -> price}} </p>
    
    </div>
    @if(!auth::guest())
        @if(auth::user()->id == $pet->user_id)
            <a href="/posts/{{$pet->id}}/edit" class = "btn btn-default" > Edit </a>
            
                {!!Form::open(['action' => ['PostsController@destroy', $pet->id, 'method' => 'POST', 'class' => 'pull-right']])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        @endif
    @endif
@endsection 