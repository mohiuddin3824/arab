@extends('frontend.frontend-master')
@section('content')

    <div style="background-image:url('{{$news->image}}');" class="login_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    
                </div>
            </div>
        </div>
    </div>


    @if($posts == !NULL)
    <section class="committee">
        <div class="container">
            <div class="row">
                
                @foreach($posts as $post)
                    <div class="col-12 mb-3">
                        <div class="card single_event">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12 col-md-4">
                                        <a href="#"><img class="img-fluid" src="{{asset($post->post_thumbnail)}}" alt="{{$post->post_title}}"></a>
                                    </div>
                                    <div class="col-sm-12 col-md-8">
                                        <h2><a href="#">{{$post->post_title}}</a></h2>
                                        <p class="mb-2"><span><i class="fa-solid fa-calendar-days"></i></span> <a href="#">{{__('Published : ')}} {{$post->created_at->format('jS M Y')}}</a> <span>||</span> <a href="#"> {{__('Updated:')}} {{$post->updated_at->format('jS M Y')}}</a></p>
                                        {!! Str::words($post->post_details, 40, ' ...') !!}
                                        <a href="#" class="btn btn-success details_btn">{{__('Details')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
                @endforeach
                
            </div>
        </div>
    </section>
    @endif

@endsection