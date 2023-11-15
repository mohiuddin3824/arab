@extends('frontend.frontend-master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <div style="background-image:url('{{$allUsers->image}}');" class="login_banner users_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center ">
                    <div class="form-group">
                        <input type="search" name="search" id="search" class="forl-control" placeholder="Search User Data...">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="committee">
        <div class="container">
            <div class="row">
                
                
                <div class="col-md-12 col-sm-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Photo</th>
                                <th>email</th>
                                <th>mobile</th>
                                <th>Division</th>
                                <th>District</th>
                                <th>Blood Group</th>
                            </tr>
                        </thead>
                        <tbody class="allData">
                            @foreach($users as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>
                                @if ($item->profile_photo)
                                    <img src="{{asset($item->profile_photo)}}" alt="{{$item->name}}" style="widht:70px; height:70px">
                                @else
                                    <img src="{{asset('backend/images/avatar/avatar-6.png')}}" alt="{{$item->name}}" style="widht:70px; height:70px">

                                @endif
                                </td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->phone}}</td>
                                <td>@if($item->divisions == !NULL){{$item->divisions->division_name}}@endif</td>
                                <td>@if($item->districts == !NULL){{$item->districts->district_name}}@endif</td>
                                
                                <td>@if($item->bgroups == !NULL){{$item->bgroups->blood_group_name}}@endif</td>
                                
                            </tr>
                            @endforeach
                        </tbody>

                        <tbody id="Content" class="searchData">

                        </tbody>

                    </table>
                </div>

                
            </div>
        </div>
    </section>

    <script type="text/javascript">
        $(document).ready(function() {

            $('#search').on('keyup',function(){
                
                $value=$(this).val();

                if($value)
                {
                    $('.allData').hide();
                    $('.searchData').show();
                }
                else
                {
                    $('.allData').show();
                    $('.searchData').hide();
                }

                $.ajax({

                    type:'get',
                    url:'{{URL::to('search')}}',
                    data:{'search':$value},

                    success:function(data){
                        $('#Content').html(data);
                    }
                });

            });

        });
    </script>

@endsection