@extends('layouts.app')
@section('title', 'Home Page')

@section('content')
    <div id="carouselExampleCaptions" class="carousel slide">

        <div class="carousel-inner">

            @foreach($sliders as $key=>$sliderItem)
            <div class="carousel-item active">
                <img src="..." class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>{{$sliderItem->title}}</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
                @endforeach
            </div>


        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


@endsection