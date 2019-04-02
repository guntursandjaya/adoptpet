@extends('layouts.app')

@section('content')
    <h3>Welcome To Online Adoption</h3>
    @if(count($pets) > 0)
        @foreach($pets as $pet)
            <div class = "well">
                <div class = "row">
                    <div class = "col-md-4 col-sm-4">
                        <img style ="width:100%" src="/storage/cover_images/{{$pet->cover_image}}">
                    </div>
                    <div class = "col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$pet->id}}">{{$pet->name}}</a></h3>
                            <small> By {{$pet-> user ->name}}</small>
                            <p><small> Price : {{$pet-> price}}</small></p>
                    </div>
                </div>
            </div>
        @endforeach
    @else
            <p> No Pets Found </p>
    @endif
@endsection