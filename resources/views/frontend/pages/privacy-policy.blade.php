@extends('frontend.frontend-master')
@section('content')

    <div style="background-image:url('{{$privacy->image}}');" class="login_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="login_title">{{$privacy->title}}</h2>
                </div>
            </div>
        </div>
    </div>

    <section class="privacy">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {!! $privacy->description !!}
                </div>
            </div>
        </div>
    </section>

@endsection