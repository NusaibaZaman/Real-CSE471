@extends('layout')
@section('title', 'Properties')
@section('body')
    @include('include.header')
    <section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url('home/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
                    <h1 class="mb-3 bread">Advertisements</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('welcome') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Properties <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section goto-here">
        <div class="container">
            <div class="row">
                @foreach($ads as $ad)
                    @if($ad->status == 'accepted')
                        <div class="col-md-4">
                            <div class="property-wrap ftco-animate">
                                <div class="img d-flex align-items-center justify-content-center" style="background-image: url('imager/{{ $ad->image }}');">
                                    <a href="properties-single.html" class="icon d-flex align-items-center justify-content-center btn-custom">
                                        <span class="ion-ios-link"></span>
                                    </a>
                                    <div class="list-agent d-flex align-items-center">
                                        <a href="#" class="agent-info d-flex align-items-center">
                                            <div class="img-2 rounded-circle" style="background-image: url('home/images/person_1.jpg');"></div>
                                            <h3 class="mb-0 ml-2">Avatar Aang</h3>
                                        </a>
                                        <div class="tooltip-wrap d-flex">
                                            <a href="#" class="icon-2 d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="top" title="Bookmark">
                                                <span class="ion-ios-heart"><i class="sr-only">Bookmark</i></span>
                                            </a>
                                            <a href="#" class="icon-2 d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="top" title="Compare">
                                                <span class="ion-ios-eye"><i class="sr-only">Compare</i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="text">
                                    <h3 class="mb-0"><a href="#">{{ $ad->name }}</a></h3>
                                    <span class=""><i class=""></i>{{ $ad->description }}</span>
                                    <ul class="property_list">
                                        <!-- Add any additional details here -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    @include('include.footer')
@endsection
