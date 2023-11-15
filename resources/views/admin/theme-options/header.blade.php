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
                                    <li class="breadcrumb-item" aria-current="page">{{ __('Top Header Settings') }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            
                <div class="row mt-3">
                    <div class="col-12">
                        <!-- /.box-header -->
                        <form class="forms-sample" action="{{route('header.update', $data->id)}}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$data->id}}">
                            <div class="card">
                                
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="top_mobile_text">{{ __('Header Mobile Text') }}</label>
                                        <input type="text" class="form-control" value="{{$data->top_mobile_text}}" name="top_mobile_text">
                                    </div>

                                    <div class="form-group">
                                        <label for="top_mobile_no">{{ __('Header Mobile Number') }}</label>
                                        <input type="text" class="form-control" value="{{$data->top_mobile_no}}" name="top_mobile_no">
                                    </div>

                                    <div class="form-group">
                                        <label for="top_email_text">{{ __('Header Email Text') }}</label>
                                        <input type="text" class="form-control" value="{{$data->top_email_text}}" name="top_email_text">
                                    </div>

                                    <div class="form-group">
                                        <label for="top_email">{{ __('Header Email') }}</label>
                                        <input type="text" class="form-control" value="{{$data->top_email}}" name="top_email">
                                    </div>

                                    <div class="form-group">
                                        <label for="top_open_text">{{ __('Office Time Text') }}</label>
                                        <input type="text" class="form-control" value="{{$data->top_open_text}}" name="top_open_text">
                                    </div>

                                    <div class="form-group">
                                        <label for="top_open_time">{{ __('Office Time') }}</label>
                                        <input type="text" class="form-control" value="{{$data->top_open_time}}" name="top_open_time">
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
