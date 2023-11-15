@php

$SiteIdentity = App\Models\SiteIdentity::first();

@endphp
@extends('admin.admin-master')

@section('admin')

    <div class="card content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto card-body">
                <h3 class="page-title">{{$SiteIdentity->site_name}}</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">{{ __('All Pages') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">

            <div class="card">
                <div class="card-header with-border">
                    <div class="row">
                        <div class="col-6">
                            <a href="{{route('create.page')}}" class="btn btn-success">{{__('Add New Page')}}</a>
                        </div>
                        
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example5" class="table table-bordered table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>{{ __('Page id') }}</th>
                                    <th>{{ __('Page Title') }}</th>
                                    <th>{{ __('Page Slug') }}</th>
                                    <th>{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($pages->count())
                                @foreach ($pages as $item)                                                              
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->slug }}</td>
                                        <td>
                                            <a href="{{route('edit.page',$item->id)}}" class="btn btn-info"><span class="fa-solid fa-pen-to-square"></span></a>
                                            <a href="{{route('delete.page',$item->id)}}" class="btn btn-danger"><span class="fa-solid fa-trash-can"></span></a>
                                        </td>
                                    </tr>
                                @endforeach
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
                <!-- /.box -->      
        </div> 
    </div>


@endsection