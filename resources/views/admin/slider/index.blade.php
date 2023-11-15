@extends('admin.admin-master')
@section('admin')

    
    <div class="row">
        <div class="col-12">

            <div class="box">
                <div class="box-header with-border">
                    <div class="row">
                        <div class="col-6 text-left">
                            <h3>{{__('Homepage Slider Management')}}</h3>
                        </div>
                        <div class="col-6 text-right">
                        <a href="{{ route('create.slider') }}"
                                class="btn btn-success">{{ __('Add New Slider') }}</a>
                        <a class="btn btn-danger"
                                href="{{ route('trashed.slider') }}">{{ __('Trashed Sliders') }}</a>
                            
                            
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-bordered " style="width:100%">

                            <thead>
                                <tr>
                                    <th> {{ __('SL') }} </th>
                                    <th>{{ __('Slider Title') }} </th>
                                    <th> {{ __('Slider Photo') }} </th>
                                    <th> {{ __('Created By') }} </th>
                                    <th> {{ __('Action') }} </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($sliders->count())
                                    @foreach ($sliders as $key => $item)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td> {{ $item->slider_title }} </td>
                                            <td>
                                                @if ($item->slider_photo)
                                                    <img src="{{asset($item->slider_photo)}}" alt="{{$item->slider_title}}" style="width:100px; height:100px;">
                                                @else
                                                    <img src="{{asset('backend/images/trophy.png')}}" alt="{{$item->slider_title}}" style="width:100px; height:100px;">

                                                @endif
                                            </td>
                                            <td>{{ $item->user->name }}</td>

                                            <td>
                                                <a href="{{ route('edit.slider',$item->id) }}" class="btn btn-info"><span class="fa-solid fa-pen-to-square"></span></a>
                                                <a href="{{route('trash.slider',$item->id)}}" class="btn btn-danger"><span class="fa-solid fa-trash-can"></span></a>
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
