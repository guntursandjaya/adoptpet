@extends('layouts.app')

@section('content')
    <h1>Pet Info</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST' , 'enctype' => 'multipart/form-data'])!!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
                {{Form::label('gender', 'Gender')}}
                {{Form::text('gender', '', ['class' => 'form-control', 'placeholder' => 'Gender'])}}
        </div>
        
        <div class="form-group">
                {{Form::label('vaccine', 'Vaccine')}}
                {{Form::text('vaccine', '', ['class' => 'form-control', 'placeholder' => 'Vaccine'])}}
        </div>

        <div class="form-group">
                {{Form::label('price', 'Price')}}
                {{Form::number('price', '', ['class' => 'form-control', 'placeholder' => 'Price'])}}
        </div>

        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
       

        {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
    {!! Form::close()!!}

@endsection