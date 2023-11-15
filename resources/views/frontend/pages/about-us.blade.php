@extends('frontend.frontend-master')
@section('content')

    <div style="background-image:url('{{$about->image}}');" class="login_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="login_title">{{$about->title}}</h2>
                </div>
            </div>
        </div>
    </div>

    <section class="aboutInfo">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h2>{{$abinfo->section_one_title}}</h2>
                    <p>{!! $abinfo->section_one_desc !!}</p>
                    <a href="{{$abinfo->section_one_btn_link}}" class="btn btn-success mt-3">{{$abinfo->section_one_btn_text}}</a>
                </div>
                <div class="col-6">
                    <img class="img-fluid" src="{{asset($abinfo->section_one_img)}}" alt="{{$abinfo->section_one_title}}">
                </div>
            </div>
        </div>
    </section>

    <section class="vision_mission">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="abSectionTitle">{{$abinfo->vision_title}}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    {!! $abinfo->vision !!}
                </div>
            </div>
        </div>
    </section>

    <section class="service text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="abSectionTitle">{{$abinfo->serve_sec_title}}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-3">
                    <div class="card">
                        <div class="card-body single_service">
                            <span><i class="{{$abinfo->serve_icon_one}}"></i></span>
                            <h2>{{$abinfo->serve_title_one}}</h2>
                            <p>{!! $abinfo->serve_desc_one !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="card">
                        <div class="card-body single_service">
                            <span><i class="{{$abinfo->serve_icon_two}}"></i></span>
                            <h2>{{$abinfo->serve_title_two}}</h2>
                            <p>{!! $abinfo->serve_desc_two !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="card">
                        <div class="card-body single_service">
                            <span><i class="{{$abinfo->serve_icon_three}}"></i></span>
                            <h2>{{$abinfo->serve_title_three}}</h2>
                            <p>{!! $abinfo->serve_desc_three !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="card">
                        <div class="card-body single_service">
                            <span><i class="{{$abinfo->serve_icon_four}}"></i></span>
                            <h2>{{$abinfo->serve_title_four}}</h2>
                            <p>{!! $abinfo->serve_desc_four !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="activities">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>{{$abinfo->activities_title}}</h2>
                    <p>{!! $abinfo->activities_description !!}</p>
                </div>
            </div>
        </div>
    </section>

@endsection