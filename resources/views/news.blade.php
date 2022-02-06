@extends('layouts.app')
@section('title', 'Encore Dance Theatre | In the News')
@section('description', '')
@section('content')

    <h1 class="head-white py-4">Encore Dance Theatre in the News</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm" id="animate-news-1">
                <div>
                    <img src="/images/city-of-sunrise-cultural-festival.jpeg" alt="cultural festival dancers" class="img-fluid">
                </div>
                <div class="mt-3">
                    <h2 style="text-decoration: underline;">SAWGRASS SUN</h2>
                    <img src="images/Traveling-Tutus.jpg" alt="" class="img-fluid mb-2" style="max-height: 302.4px;">
                    <p class="pb-2" style="font-size: 1.25em">
                        <a style="text-decoration: underline;" href="https://encoredancetheatre.com/images/Traveling-Tutus.pdf" target="_blank">Teen ambassadors help tutus travel around the world</a>
                        <br>
                        <small class="text-muted">March 27 - April 2, 2019</small>
                    </p>
                </div>
            </div>
            <div class="col-sm" id="animate-news-2">
                <h2 style="text-decoration: underline;">SUNSENTINEL</h2>
                <div>
                    <img src="images/sun-sentinel-dance-news.jpg" alt="" class="img-fluid mb-2" style="max-height: 302.4px;">
                    <p class="pb-2" style="font-size: 1.25em">
                        <a style="text-decoration: underline;" href="https://www.sun-sentinel.com/community/sawgrass-sun/fl-cn-dance-studios-online-classes-20200402-ephkjui2snekfgpcqro5xjhpya-story.html" target="_blank">Dancing through the pandemic: Studios pivot to keep teaching</a>
                        <br>
                        <small class="text-muted">April 02, 2020</small>
                    </p>
                </div>
                <div class="mt-3">
                    <img src="images/encore-dance-parade.jpg" alt="" class="img-fluid mb-2" style="max-height: 302.4px;">
                    <p class="pb-2" style="font-size: 1.25em">
                        <a style="text-decoration: underline;" href="https://www.sun-sentinel.com/local/broward/sunrise/fl-cn-sunrise-encore-dance-macy-s-parade-20181116-story.html" target="_blank">Rehearsals, Broadway on the schedule for Sunrise dancers performing in Macy's Thanksgiving Day Parade</a>
                        <br>
                        <small class="text-muted">November 20, 2018</small>
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
