@extends('layouts.app_error')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-danger">Error</div>

                <div class="panel-body">
                  <b> {{ $exception->getMessage() }} </b>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
