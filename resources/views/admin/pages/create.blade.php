@php

$SiteIdentity = App\Models\SiteIdentity::first();

@endphp
@extends('admin.admin-master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdn.tiny.cloud/1/r24p9oqicwy6ccj2ntw3q6u2jal1ex8hzk0fpu8qj7ys77ob/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
            
                <div class="row mt-3">
                    <div class="col-12">

                        <div class="card box-shadowed">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-8">
                                        <h2>{{ __('Add New Page') }}</h2>
                                    </div>
                                    <div class="col-4 text-right">
                                        <a href="{{route('all.pages')}}" class="btn btn-success">{{ __('Page list') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->


                        <form action="{{route('store.page')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="row mt-3">
                                <div class="col-md-9">
                                    
                                    <div class="card">
                                        <div class="card-body"> 
                                                              
                                            <div class="form-group">
                                                <label for="title">{{ __('Page Title') }}</label>
                                                <input type="text" class="form-control" name="title" placeholder="Page Title">
                                                @error('title')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            
                                            <div class="form-group">
                                                <textarea id="pageEditor" name="description" rows="20" cols="80">

                                                </textarea>
                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            
                                            
                                            
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-md-3">
                                    
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>{{ __('Add Page Image') }}</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <input type="file" name="image" id="pageimage">

                                            </div>

                                            <div class="form-group">
                                                <img src="{{asset('backend/images/news/news.jpg')}}" class="img-thumbnail" id="pageThmb" alt="add post thumbnail">
                                            </div>
                                            
                                            
                                        </div>

                                        
                                    </div>
                                    <div class="card mt-3">
                                        <div class="card-body text-center">
                                            <input type="submit" class="btn btn-lg btn-success" style="font-size: 20px" value="{{__('Publish')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        


                        <!-- /.box -->
                    </div>
                </div>


    <script type="text/javascript">
        $(document).ready(function() {

            $('#pageimage').change(function() {

                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#pageThmb').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });

            tinymce.init({
            selector: 'textarea#pageEditor',
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
