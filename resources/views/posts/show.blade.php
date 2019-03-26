@extends('layouts.app')

@section('content')
    <h1>{{$pet->name}}</h1>
    <div>
        <p> Gender : {{$pet -> gender }} </p>
        <p> Vaccine : {{$pet -> Vaccine}} </p>
        <p> Shelter : {{$pet -> user_id}}</p>
        <p> Price : {{$pet -> price}} </p>
    
    </div>
    <a href="/posts/{{$pet->id}}/edit" class = "btn btn-default" > Edit </a>

    {!!Form::open(['action' => ['PostsController@destroy', $pet->id, 'method' => 'POST', 'class' => 'pull-right']])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

@endsection 