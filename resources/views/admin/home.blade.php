@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $userRole }} Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                  
                    <table class="table table-bordered">
                        <tr style="background: #7B3F00; color: white;">
                            <th>Id</th>
                            <th>Blog Name</th>
                            <th>Description</th>
                            <th> Author </th>
                            <th colspan=2> Actions </th>
                        </tr>
                        @foreach($blogData as $blog)
                        <tr style="background: black; color: white;">
                            <td>{{ $blog->id }}</td>
                            <td>{{ $blog->title }}</td>
                            <td>{{ $blog->description }}</td>
                            <td>{{ $blog->author }}</td>
                            <td><a href="#"> Edit </a></td>
                            <td><a href="#"> Delete </a></td>
                        </tr>
                         @endforeach
                    </table> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
