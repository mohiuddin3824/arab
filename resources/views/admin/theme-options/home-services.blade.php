@php 
    $SiteIdentity = App\Models\SiteIdentity::first();
@endphp
@extends('admin.admin-master')

@section('admin')

            <!-- Content Header (Page header) -->
            <div class="card content-header">
                <div class="d-flex align-items-center">
                    <div class="mr-auto card-body">
                        <h2 class="page-title">{{$SiteIdentity->site_name}}</h2>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i
                                                class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">{{ __('Edit Home Page Services') }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            
                <div class="row mt-3">
                    <div class="col-12">
                        <!-- /.box-header -->
                        <form class="forms-sample" action="{{route('home.services.update', $hservices->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$hservices->id}}">
                            

                            <div class="card mt-3">
                                <div class="card-header">
                                    <h2>{{__('Home page services')}}</h2>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="serve_sec_title">{{ __('Section Title') }}</label>
                                        <input type="text" class="form-control" value="{{$hservices->serve_sec_title}}" name="serve_sec_title">
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <h2>{{ __('Service One') }}</h2>
                                                
                                                <label for="service_icon_one">{{__('Service Icon')}}</label>
                                                <input type="text" class="form-control mb-2" name="serve_icon_one" value="{{$hservices->serve_icon_one}}"> 
                                                
                                                <label for="service_title_one">{{__('Service Title')}}</label>                                           
                                                <input type="text" class="form-control mb-2" name="serve_title_one" value="{{$hservices->serve_title_one}}">
                                                
                                                <label for="service_desc_one">{{__('Service Short Description')}}</label> 
                                                <textarea name="serve_desc_one" class="form-control mb-2" id="" cols="30" rows="10">{{$hservices->serve_desc_one}}</textarea>

                                                <label for="serve_btn_one_txt">{{__('Service Button')}}</label>                                           
                                                <input type="text" class="form-control mb-2" name="serve_btn_one_txt" value="{{$hservices->serve_btn_one_txt}}"> 
                                                <input type="text" class="form-control mb-2" name="serve_btn_one_link" value="{{$hservices->serve_btn_one_link}}"> 
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <h2>{{ __('Service Two') }}</h2>
                                                
                                                <label for="service_icon_two">{{__('Service Icon')}}</label>
                                                <input type="text" class="form-control mb-2" name="serve_icon_two" value="{{$hservices->serve_icon_two}}"> 
                                                
                                                <label for="service_title_two">{{__('Service Title')}}</label>                                           
                                                <input type="text" class="form-control mb-2" name="serve_title_two" value="{{$hservices->serve_title_two}}"> 
                                                
                                                <label for="service_desc_two">{{__('Service Short Description')}}</label>
                                                <textarea name="serve_desc_two" class="form-control mb-2" id="serve_desc_two" cols="30" rows="10">{{$hservices->serve_desc_two}}</textarea>

                                                <label for="serve_btn_two_txt">{{__('Service Button')}}</label>                                           
                                                <input type="text" class="form-control mb-2" name="serve_btn_two_txt" value="{{$hservices->serve_btn_two_txt}}"> 
                                                <input type="text" class="form-control mb-2" name="serve_btn_two_link" value="{{$hservices->serve_btn_two_link}}"> 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <h2>{{ __('Service Three') }}</h2>
                                                
                                                <label for="service_icon_three">{{__('Service Icon')}}</label>
                                                <input type="text" class="form-control mb-2" name="serve_icon_three" value="{{$hservices->serve_icon_three}}">
                                                
                                                <label for="service_title_three">{{__('Service Title')}}</label>                                            
                                                <input type="text" class="form-control mb-2" name="serve_title_three" value="{{$hservices->serve_title_three}}">
                                                
                                                <label for="service_desc_three">{{__('Service Short Description')}}</label>  
                                                <textarea name="serve_desc_three" class="form-control mb-2" id="serve_desc_three" cols="30" rows="10">{{$hservices->serve_desc_three}}</textarea>

                                                <label for="serve_btn_three_txt">{{__('Service Button')}}</label>                                           
                                                <input type="text" class="form-control mb-2" name="serve_btn_three_txt" value="{{$hservices->serve_btn_three_txt}}"> 
                                                <input type="text" class="form-control mb-2" name="serve_btn_three_link" value="{{$hservices->serve_btn_three_link}}"> 
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <h2>{{ __('Service Four') }}</h2>
                                                
                                                <label for="service_icon_four">{{__('Service Icon')}}</label>
                                                <input type="text" class="form-control mb-2" name="serve_icon_four" value="{{$hservices->serve_icon_four}}">
                                                
                                                <label for="service_title_four">{{__('Service Title')}}</label>                                            
                                                <input type="text" class="form-control mb-2" name="serve_title_four" value="{{$hservices->serve_title_four}}">
                                                
                                                <label for="service_desc_four">{{__('Service Short Description')}}</label>  
                                                <textarea class="form-control mb-2" name="serve_desc_four" id="" cols="30" rows="10">{{$hservices->serve_desc_four}}</textarea>

                                                <label for="serve_btn_four_txt">{{__('Service Button')}}</label>                                           
                                                <input type="text" class="form-control mb-2" name="serve_btn_four_txt" value="{{$hservices->serve_btn_four_txt}}"> 
                                                <input type="text" class="form-control mb-2" name="serve_btn_four_link" value="{{$hservices->serve_btn_four_link}}"> 
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="card-footer">
                                    <input type="submit" class="btn btn-primary mr-2" value="{{ __('Update') }}">
                                </div>
                            </div>

                            
                        </form>
                    </div>
                </div>

@endsection
