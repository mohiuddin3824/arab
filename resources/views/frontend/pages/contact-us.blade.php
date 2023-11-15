@extends('frontend.frontend-master')
@section('content')

    <div style="background-image:url('{{$contact->image}}');" class="login_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="login_title">{{$contact->title}}</h2>
                </div>
            </div>
        </div>
    </div>

    <section class="about_page_post">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="contact_form">
                        <form action="{{route('contact.store')}}" method="post" >
                            @csrf
                            <div class="form-group">
                                <label for="name">{{__('Your Name*')}}</label>
                                <input type="text" id="name" name="name" placeholder="Your name..">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">{{__('Write Your Email Address')}}</label>
                                <input type="email" id="email" name="email" placeholder="example: yourmail@gmail.com">
                                
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div> 

                            <div class="form-group">
                                <label for="subject">{{__('Subject')}}</label>
                                <input type="text" name="subject">
                                @error('subject')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="message">{{__('Your Message')}}</label>
                                <textarea id="message" name="message" placeholder="message" style="height:200px"></textarea>
                                @error('message')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                @if(session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>  
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                @endif
                            </div>
                            <input type="submit" value="{{__('Send Message')}}">
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="contact_details">
                        <div class="card">
                            <div class="card-body">
                                
                                <h2>{{$contactInfos->title}}</h2>
                                <p> <span ><i class="fa-solid fa-location-dot"></i></span> {{$contactInfos->location}} </p>
                                <p> <span><i class="fa-solid fa-phone-volume"></i></span> {{$contactInfos->phone}} </p>
                                <p> <span><i class="fa-regular fa-envelope"></i></span> {{$contactInfos->email}} </p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="google_map">
                       {!! $contactInfos->gmap !!} 
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection