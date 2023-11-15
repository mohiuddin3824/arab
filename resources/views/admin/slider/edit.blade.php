
@extends('admin.admin-master')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <!-- Content Header (Page header) -->
    <div class=" card content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto card-body">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <h3 class="page-title mb-2">{{__('Author Name')}}</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">{{ __('Edit Slider') }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
       
                        <div class="text-right">
                            <a href="{{ route('all.sliders') }}" class="btn btn-success">{{__('All Sliders')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-12">
                

            <form class="forms-sample" action="{{route('update.slider')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$editSlider->id}}">
                
                <div class="row">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="slider_title">{{ __('Slider Title') }}</label>
                                            <input type="text" class="form-control" name="slider_title" value="{{$editSlider->slider_title}}">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="slider_caption">{{__('Slider Caption')}}</label>
                                            <textarea name="slider_caption" class="form-control" id="slider_caption" cols="30" rows="5">{{$editSlider->slider_caption}}</textarea>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="slider_btn_text">{{__('Slider Button Text')}}</label>
                                            <input type="text" name="slider_btn_text" class="form-control" value="{{$editSlider->slider_btn_text}}">
                                         
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="slider_btn_link">{{__('Button Link')}}</label>
                                            <input type="text" name="slider_btn_link" class="form-control" value="{{$editSlider->slider_btn_link}}">
                                            
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="slider_video_link">{{__('Video Link')}}</label>
                                            <input type="text" name="slider_video_link" value="{{$editSlider->slider_video_link}}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        
                        <div class="card">
                            <div class="card-header">
                                <h3>{{__('Slider Image')}}</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="file" name="slider_photo" id="image">
                                    <input type="hidden" name="oldimage" value="{{ $editSlider->slider_photo }}">

                                </div>

                                <div class="form-group">
                                    <img src="{{asset($editSlider->slider_photo)}}" class="img-thumbnail" id="memthumb" alt="{{$editSlider->slider_title}}">
                                </div>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <input type="submit" class="btn btn-primary " value="{{ __('Update Slider') }}">
                        </div>
                    </div>
                </div>
                
                
                
            </form>
                
        </div>
    </div>
        
    <script type="text/javascript">
        $(document).ready(function() {

            $('#image').change(function() {

                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#sliderThumb').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });

        });
    </script>



@endsection
