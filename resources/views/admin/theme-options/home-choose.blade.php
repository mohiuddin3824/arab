@php 
    $SiteIdentity = App\Models\SiteIdentity::first();
@endphp
@extends('admin.admin-master')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdn.tiny.cloud/1/r24p9oqicwy6ccj2ntw3q6u2jal1ex8hzk0fpu8qj7ys77ob/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
   

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
                                    <li class="breadcrumb-item" aria-current="page">{{ __('Why Choose Us') }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mt-3">
                <div class="col-12">
                    <!-- /.box-header -->
                    <form class="forms-sample" action="{{route('home.chooses.update', $chooses->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$chooses->id}}">
                        <div class="card">
                            <div class="card-header">
                                <h2>{{__('Why Choose Us')}}</h2>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="choose_sec_title">{{ __('Section Title') }}</label>
                                    <input type="text" class="form-control" value="{{$chooses->choose_sec_title}}" name="choose_sec_title">
                                </div>

                                <div class="form-group">
                                    <label for="description">{{ __('Section Description') }}</label>
                                    <textarea name="description" class="aboutEditor"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $chooses->description }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="choose_sec_img">{{ __('Section Image') }}</label>
                                    <input type="file" class="form-control" id="choosImg" name="choose_sec_img">
                                    <input type="hidden" name="oldimage" value="{{ $chooses->choose_sec_img }}">
                                </div>
                                <div class="form-group" style="width:200px; height:200px;">
                                    <img src="{{ asset($chooses->choose_sec_img) }}" class="img-thumbnail"
                                        id="secImg" alt="{{$chooses->section_one_title}}">
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



            $('#choosImg').change(function() {

                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#secImg').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });

            tinymce.init({
            selector: 'textarea.aboutEditor',
            height: 400,
            menubar: true,
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
	        "searchreplace wordcount visualblocks visualchars code fullscreen",
	        "insertdatetime media nonbreaking save table contextmenu directionality",
	        "emoticons template paste textcolor colorpicker textpattern imagetools"
            ],
            
            
            toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | forecolor backcolor emoticons | print preview media | code fullscreen",
	    
	    a11y_advanced_options: true,
	     image_title: true,
		  /* enable automatic uploads of images represented by blob or data URIs*/
		  automatic_uploads: true,
		  /*
		    URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
		    images_upload_url: 'postAcceptor.php',
		    here we add custom filepicker only to Image dialog
		  */
		  file_picker_types: 'file image media',
		  image_uploadtab: true,
		  image_advtab: true,
		  image_caption: true,
		  images_upload_credentials: true,
		  /* and here's our custom image picker*/
		  file_picker_callback: function (cb, value, meta) {
		    var input = document.createElement('input');
		    input.setAttribute('type', 'file');
		    input.setAttribute('accept', 'image/*');
		
		    /*
		      Note: In modern browsers input[type="file"] is functional without
		      even adding it to the DOM, but that might not be the case in some older
		      or quirky browsers like IE, so you might want to add it to the DOM
		      just in case, and visually hide it. And do not forget do remove it
		      once you do not need it anymore.
		    */
		
		    input.onchange = function () {
		      var file = this.files[0];
		
		      var reader = new FileReader();
		      reader.onload = function () {
		        /*
		          Note: Now we need to register the blob in TinyMCEs image blob
		          registry. In the next release this part hopefully won't be
		          necessary, as we are looking to handle it internally.
		        */
		        var id = 'blobid' + (new Date()).getTime();
		        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
		        var base64 = reader.result.split(',')[1];
		        var blobInfo = blobCache.create(id, file, base64);
		        blobCache.add(blobInfo);
		
		        /* call the callback and populate the Title field with the file name */
		        cb(blobInfo.blobUri(), { title: file.name });
		      };
		      reader.readAsDataURL(file);
		    };
		
		    input.click();
		  },
	    content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
            
            

        });
    </script>

@endsection
