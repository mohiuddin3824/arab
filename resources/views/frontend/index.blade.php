@extends('frontend.frontend-master')
@section('content')
    
    @if($sliers->count() > 0)
        <section class="slider">
            <div class="owl-carousel owl-theme">
                
                @foreach($sliers as $item)
                    <div class="item">
                        <img class="img-fluid" src="{{asset($item->slider_photo)}}" alt="{{$item->slider_title}}">
                        @if($item->slider_title || $item->slider_caption == !null)
                            <div class="slider_caption">
                                <h2>{{$item->slider_title}}</h2>
                                <p>{!! $item->slider_caption !!}</p>
                                @if($item->slider_btn_text == !null)
                                    <a href="{{$item->slider_btn_link}}" class="btn btn-success">{{$item->slider_btn_text}}</a>
                                @endif
                            </div>
                        @endif
                    </div>
                @endforeach
                
            </div>
        </section>
    @endif

    @if($services->count() > 0)
    <section class="service text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="abSectionTitle">{{$services->serve_sec_title}}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-3">
                    <div class="card">
                        <div class="card-body single_service">
                            <span><i class="{{$services->serve_icon_one}}"></i></span>
                            <h2>{{$services->serve_title_one}}</h2>
                            <p>{!! $services->serve_desc_one !!}</p>
                            <a href="{{$services->serve_btn_one_link}}" class="btn btn-success mt-1">{{$services->serve_btn_one_txt}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="card">
                        <div class="card-body single_service">
                            <span><i class="{{$services->serve_icon_two}}"></i></span>
                            <h2>{{$services->serve_title_two}}</h2>
                            <p>{!! $services->serve_desc_two !!}</p>
                            <a href="{{$services->serve_btn_two_link}}" class="btn btn-success mt-1">{{$services->serve_btn_two_txt}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="card">
                        <div class="card-body single_service">
                            <span><i class="{{$services->serve_icon_three}}"></i></span>
                            <h2>{{$services->serve_title_three}}</h2>
                            <p>{!! $services->serve_desc_three !!}</p>
                            <a href="{{$services->serve_btn_three_link}}" class="btn btn-success mt-1">{{$services->serve_btn_three_txt}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="card">
                        <div class="card-body single_service">
                            <span><i class="{{$services->serve_icon_four}}"></i></span>
                            <h2>{{$services->serve_title_four}}</h2>
                            <p>{!! $services->serve_desc_four !!}</p>
                            <a href="{{$services->serve_btn_four_link}}" class="btn btn-success mt-1">{{$services->serve_btn_four_txt}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    @if($choos->count() > 0)

        <section class="chooses">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="section_img">
                            <img src="{{$choos->choose_sec_img}}" class="img-fluid" alt="{{$choos->choose_sec_title}}">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="section_title">
                            <h2>{{$choos->choose_sec_title}}</h2>
                        </div>
                        <div class="choose_desc">
                            {!! $choos->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @endif



@endsection