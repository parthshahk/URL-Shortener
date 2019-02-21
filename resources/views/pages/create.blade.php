@extends('layouts/app')

@section('content')

    <div class="container">
        <br>
        <div class="row">
            <div class="col-sm text-center">
                <h3>Create Link</h3>
            </div>
        </div>

        {!! Form::open(['action' => 'UrlsController@store', 'method' => 'POST']) !!}
        
            <div class="form-group">
                {{Form::label('url', 'URL')}}
                {{Form::text('url', '', ['class' => 'form-control', 'placeholder' => 'Enter URL'])}}
            </div>

            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

        {!! Form::close() !!}

    </div>

     

@endsection