@extends('layouts/app')

@section('content')

    <div class="jumbotron">

        <h1 class="display-4 text-center">URL Shortener</h1>
            <p class="lead text-center">Measure your links with URL Shortener, a simple link tracking platform.</p>
        <hr class="my-4">
        <br>
        <div class="container">

            <div class="row">
                <div class="col-sm col-12 text-center lead"><br>
                    <i class="fa fa-link jumbo-icon" aria-hidden="true"></i><br><br>
                    Shorten and optimize your links across devices, channels and platforms. Share them to get insights.
                </div>
                <div class="col-sm col-12 text-center lead"><br>
                    <i class="fa fa-line-chart jumbo-icon" aria-hidden="true"></i><br><br>
                    Track individual link analytics and measure usage in each location.
                </div>
                <div class="col-sm col-12 text-center lead"><br>
                    <i class="fa fa-refresh jumbo-icon" aria-hidden="true"></i><br><br>
                    Collect insights on your performance and optimize your marketing efforts to better fit your audience needs.
                </div>
            </div>
            <br><br><br>
            <div class="row">
                <div class="col-sm text-right">
                    <a href="/login" class="btn btn-primary btn-lg"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
                </div>

                <div class="col-sm">
                    <a href="/register" class="btn btn-success btn-lg"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a>
                </div>
            </div>

        </div>


    </div>

@endsection