@extends('layouts.app')

@section('content')
    <h3>Welcome To Online Adoption</h3>
    @if(count($pets) > 0)
        @foreach($pets as $pet)
            <div class='well'>
               <h3><a href="/posts/{{$pet->id}}">{{$pet->name}}</a></h3>
               <small> By {{$pet->name}}</small>
            </div>
        @endforeach
    @else
            <p> No Pets Found </p>
    @endif
@endsection