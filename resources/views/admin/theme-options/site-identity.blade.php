
@extends('admin.admin-master')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

            <!-- Content Header (Page header) -->
            <div class="card content-header">
                <div class="card-body d-flex align-items-center">
                    <div class="mr-auto">
                        <h2 class="page-title">{{$siteidentity->site_name}}</h2>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i
                                                class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">{{ __('website Identity Settings') }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mt-3">
                <div class="col-12">
                    <!-- /.box-header -->
                    <form class="forms-sample" action="{{route('site.identity.update', $siteidentity->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$siteidentity->id}}">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="site_name">{{ __('Website Name') }}</label>
                                    <input type="text" class="form-control" value="{{$siteidentity->site_name}}" name="site_name">
                                </div>

                                <div class="form-group">
                                    <label for="site_tag_line">{{ __('Website Tag line / Slogan') }}</label>
                                    <input type="text" class="form-control" value="{{$siteidentity->site_tag_line}}" name="site_tag_line">
                                </div>

                                <div class="form-group">
                                    <label for="site_logo">{{ __('Website logo') }}</label>
                                    <input type="file" class="form-control" id="sLogo" name="site_logo">
                                    <input type="hidden" name="oldimage" value="{{ $siteidentity->site_logo }}">
                                </div>
                                <div class="form-group" style="width:200px; height:200px;">
                                    <img src="{{ asset($siteidentity->site_logo) }}" class="img-thumbnail"
                                        id="siteLogo" alt="{{$siteidentity->site_name}}">
                                </div>

                                <div class="form-group">
                                    <label for="site_fav">{{ __('Website Icon') }}</label>
                                    <input type="file" class="form-control" id="fIcon" name="site_fav">
                                    <input type="hidden" name="oldicon" value="{{ $siteidentity->site_fav }}">
                                </div>
                                <div class="form-group" style="width:200px; height:200px;">
                                    <img src="{{ asset($siteidentity->site_fav) }}" class="img-thumbnail"
                                        id="siteIcon" alt="{{$siteidentity->site_name}}">
                                </div>
                                
                            </div>
                            <div class="card-footer">
                                <input type="submit" class="btn btn-primary mr-2" value="{{ __('Update') }}">
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>


    <script type="text/javascript">
        $(document).ready(function() {



            $('#sLogo').change(function() {

                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#siteLogo').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });
            
            $('#fIcon').change(function() {

                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#siteIcon').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });
            

        });
    </script>

@endsection
