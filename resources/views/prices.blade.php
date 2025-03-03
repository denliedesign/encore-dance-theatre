@extends('layouts.app')
@section('title', 'Encore Dance Theatre | Class Prices & Studio Policies')
@section('description', '')
@section('content')

    <div class="container">
        <h1 class="head-white py-4" style="text-decoration: underline;"><a href="/images/prices.pdf" class="text-dark" target="_blank">Class Prices & Studio Policies</a></h1>
        <div class="row">
            <div class="col-sm">
                <div class="d-flex justify-content-center">
                    <img src="/images/pricing-24-25a.png" alt="encore class prices" class="img-fluid">
                </div>
                <div class="d-flex justify-content-center">
                    <img src="/images/pricing-24-25b.png" alt="encore studio policies" class="img-fluid mt-4">
                </div>
            </div>
        </div>

        <a href="https://app.thestudiodirector.com/encoredancetheatreofs/portal.sd?page=Login" target="_blank" style="text-decoration: none;"><button class="btn btn-lg btn-danger my-4" style="margin: 0 auto; display: block;">REGISTER NOW!</button></a>
    </div>

@endsection
