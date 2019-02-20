@extends('layouts/app')

@section('content')

    <div class="container">
        <br><br>
        <div class="row">
            <div class="col-sm text-center">
                <h2>My URLs</h2>
            </div>
        </div>
        
        @if(count($urls) > 0)
            <br>
            
            <div class="row">

                @foreach($urls as $url)

                    <div class="col-sm col-md-6">
                        <div class="card">
                            
                            <div class="card-body">
                                <a href="{{config('app.url')}}/u/{{$url->source}}" target="_BLANK" id="cb{{$url->source}}"><h5 class="card-title">{{config('app.url')}}/u/{{$url->source}}</h5></a>
                                <p class="card-text">{{$url->destination}}</p>
                                <a href="#" class="btn btn-primary" data-clipboard-target="#cb{{$url->source}}">Copy To Clipboard</a>
                            </div>

                        </div>
                    </div>
                      
                @endforeach

            </div>

        @else
            <div class="row">

                <div class="col-sm text-center"><br><br>
                    <p class="lead text-danger">No URLs Found!</p>
                </div>
                
            </div>
            @endif
        
    </div>

@endsection