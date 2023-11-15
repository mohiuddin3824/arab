@extends('frontend.frontend-master')
@section('content')

    <div style="background-image:url('{{$consPlanning->image}}');" class="login_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="login_title">{{$consPlanning->title}}</h2>
                </div>
            </div>
        </div>
    </div>

    <section class="privacy">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {!! $consPlanning->description !!}
                </div>
            </div>
        </div>
    </section>

@endsection