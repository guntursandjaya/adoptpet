@extends('layouts.app')

@section('content')
    <h1>Pet Info</h1>
    {!! Form::open(['action' => ['PostsController@update', $pet->id], 'method' => 'POST'])!!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $pet->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
                {{Form::label('gender', 'Gender')}}
                {{Form::text('gender', $pet->gender, ['class' => 'form-control', 'placeholder' => 'Gender'])}}
        </div>
        
        <div class="form-group">
                {{Form::label('vaccine', 'Vaccine')}}
                {{Form::text('vaccine', $pet->Vaccine, ['class' => 'form-control', 'placeholder' => 'Vaccine'])}}
        </div>

        <div class="form-group">
                {{Form::label('price', 'Price')}}
                {{Form::number('price', $pet->price, ['class' => 'form-control', 'placeholder' => 'Price'])}}
        </div>

    

        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
    {!! Form::close()!!}

@endsection