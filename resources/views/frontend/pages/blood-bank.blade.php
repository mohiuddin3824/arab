@extends('frontend.frontend-master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <div style="background-image:url('{{$bloodBank->image}}');" class="login_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    
                </div>
            </div>
        </div>
    </div>


    <section class="committee">
        <div class="container">
            <div class="row">
                
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <select class="js-example-basic-single" name="division_id" style="width:100%; padding: 8px 2px;">
                            <option disabled selected>{{__('Select Division')}}</option>
                                @foreach ($allDivisions as $div)

                                    <option value="{{$div->id}}">{{$div->division_name}}</option>

                                @endforeach

                        </select>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <select class="js-example-basic-single" id="district_id" name="district_id" style="width:100%; padding:8px 2px;">
                        <option disabled selected>{{__('Select District')}}</option>
                    </select>
                </div>
                <div class="col-sm-12 col-md-3">
                    <select class="js-example-basic-single" name="blood_group" style="width:100%; padding: 8px 2px;">
                        <option disabled selected>{{__('Select Blood Group')}}</option>
                        @foreach ($bgroups as $item)

                            <option value="{{$item->id}}">{{$item->blood_group_name}}</option>

                        @endforeach

                    </select>
                </div>
                <div class="col-sm-12 col-md-2">
                    <input type="submit" class="btn btn-success" value="{{__('Search Blood')}}">
                </div>


                
            </div>
        </div>
    </section>

    <script type="text/javascript">
        $(document).ready(function() {

            //For Sub district
            $('select[name="division_id"]').on('change', function() {
                var division_id = $(this).val();
                if (division_id) {
                    $.ajax({
                        url: "{{ url('/get/district/') }}/" + division_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $("#district_id").empty();
                            $.each(data, function(key, value) {
                                $("#district_id").append('<option value="' + value.id +
                                    '">' + value.district_name + '</option>');
                            });
                        },

                    });
                } else {
                    alert('danger');
                }
            });

        });
    </script>

@endsection