
@extends('admin.admin-master')
@php 
    $SiteIdentity = App\Models\SiteIdentity::first();
@endphp
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

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
                                    <li class="breadcrumb-item" aria-current="page">{{ __('Footer Settings') }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            
                <div class="row mt-3">
                    <div class="col-12">
                        <!-- /.box-header -->
                        <form class="forms-sample" action="{{route('footer.update', $footers->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$footers->id}}">
                            <div class="card">
                                <div class="card-header">
                                    <h2>{{__('Footer First Widget')}}</h2>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="footer_widget_one_title">{{ __('Foter First Widget Title') }}</label>
                                        <input type="text" class="form-control" value="{{$footers->footer_widget_one_title}}" name="footer_widget_one_title">
                                    </div>

                                    <div class="form-group">
                                        <label for="footer_logo">{{ __('Footer logo') }}</label>
                                        <input type="file" class="form-control" id="fLogo" name="footer_logo">
                                        <input type="hidden" name="oldimage" value="{{ $footers->footer_logo }}">
                                    </div>
                                    <div class="form-group" style="width:200px; height:200px;">
                                        <img src="{{ asset($footers->footer_logo) }}" class="img-thumbnail"
                                            id="footerLogo" alt="site logo">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="footer_about_desc">{{ __('Footer About Description') }}</label>
                                        <textarea name="footer_about_desc" id="some-footer_about_desc"
                                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $footers->footer_about_desc }}</textarea>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="card mt-3">
                                <div class="card-header">
                                    <h2>{{__('Footer Second Widget')}}</h2>
                                </div>
                                <div class="card-body">
                                    
                                    <div class="form-group">
                                        <label for="footer_widget_two_title">{{ __('Foter Second Widget Title') }}</label>
                                        <input type="text" class="form-control" value="{{$footers->footer_widget_two_title}}" name="footer_widget_two_title">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="footer_important_link1_text" value="{{ $footers->footer_important_link1_text }}" class="form-control mb-1">
                                        <input type="text" name="footer_important_link1" value="{{ $footers->footer_important_link1 }}" class="form-control">
                                        
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="footer_important_link2_text" value="{{ $footers->footer_important_link2_text }}" class="form-control mb-1">
                                        <input type="text" name="footer_important_link2" value="{{ $footers->footer_important_link2 }}" class="form-control">
                                        
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="text" name="footer_important_link3_text" value="{{ $footers->footer_important_link3_text }}" class="form-control mb-1">
                                        <input type="text" name="footer_important_link3" value="{{ $footers->footer_important_link3 }}" class="form-control">
                                        
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="footer_important_link4_text" value="{{ $footers->footer_important_link4_text }}" class="form-control mb-1">
                                        <input type="text" name="footer_important_link4" value="{{ $footers->footer_important_link4 }}" class="form-control">
                                        
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="footer_important_link5_text" value="{{ $footers->footer_important_link5_text }}" class="form-control mb-1">
                                        <input type="text" name="footer_important_link5" value="{{ $footers->footer_important_link5 }}" class="form-control">
                                        
                                    </div>


                                </div>
                            </div>

                            <div class="card mt-3">
                                <div class="card-header">
                                    <h2>{{__('Footer Third Widget')}}</h2>
                                </div>
                                <div class="card-body">
                                    
                                    <div class="form-group">
                                        <label for="footer_widget_three_title">{{ __('Foter Third Widget Title') }}</label>
                                        <input type="text" class="form-control" value="{{$footers->footer_widget_three_title}}" name="footer_widget_three_title">
                                    </div>

                                    <div class="form-group">
                                        <label for="footer_address">{{__('Footer Address')}}</label>
                                        <input type="text" class="form-control" value="{{$footers->footer_address}}" name="footer_address">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="footer_phone">{{__('Footer Phone')}}</label>
                                        <input type="text" class="form-control" value="{{$footers->footer_phone}}" name="footer_phone">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="footer_email">{{__('Footer Phone')}}</label>
                                        <input type="text" class="form-control" value="{{$footers->footer_email}}" name="footer_email">
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



            $('#fLogo').change(function() {

                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#footerLogo').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });
            
            

        });
    </script>

@endsection
