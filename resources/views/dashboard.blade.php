@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3> Your Pet List </h3>

                    @if(count($pets)>0)
                            <table class="table tabl-striped">
                                <tr>
                                    <th>Name</th><
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach($pets as $pet)
                                    <tr>
                                        <td>{{$pet -> name}}</td>
                                        <td><a href="/posts/{{$pet->id}}/edit" class ="btn btn-default"> Edit </a></td>
                                        <td>
                                            {!!Form::open(['action' => ['PostsController@destroy', $pet->id, 'method' => 'POST', 'class' => 'pull-right']])!!}
                                                {{Form::hidden('_method', 'DELETE')}}
                                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        
                                            {!!Form::close()!!}
                                        </td>
                                    </tr>
                                @endforeach     
                            </table>
                        @else
                            <p> You Have no Posts</p>
                        @endif
                    
                <a href="/posts/create" class="btn btn-primary"> Create Post </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
