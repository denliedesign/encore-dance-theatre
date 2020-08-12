@extends('layouts.app')
@section('title', 'Encore Dance Theatre | Class Prices & Studio Policies')
@section('description', '')
@section('content')

    <div class="container">
        <h1 class="head-white py-4" style="text-decoration: underline;"><a href="/images/prices.pdf" class="text-dark" target="_blank">Class Prices & Studio Policies</a></h1>
        <div class="row">
            <div class="col-sm">
                <img src="/images/prices-1.jpg" alt="encore class prices" class="img-fluid">
                <img src="/images/prices-2.jpg" alt="encore studio policies" class="img-fluid mt-4">
            </div>
        </div>

        <a href="https://app.thestudiodirector.com/encoredancetheatreofs/portal.sd?page=Login" target="_blank" style="text-decoration: none;"><button class="btn btn-lg btn-danger my-4" style="margin: 0 auto; display: block;">REGISTER NOW!</button></a>
    </div>

@endsection
