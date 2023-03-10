@extends('layouts.admin')

@section('css')
  <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">

  <style>
    .error{
      color:red;
    }

    /* For Ckeditor */
    .ck-editor__editable_inline {
      min-height: 250px;
    }
  </style>

  <!-- CKEDITOR -->
  <!-- <script src="{{ asset('ckeditor/build/ckeditor.js') }}"></script> -->
  <script src="https://cdn.tiny.cloud/1/1qvedc8bwtfg6jqsy6i3g4tbrb6ga00kvjep7zztfu5sxlt8/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
@endsection

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="col-sm-4"></div>

            <div class="col-sm-4">
              <a href="{{ route('blogs.index') }}" class="btn btn-block btn-primary">View Blogs</a>
            </div>

          </div><!-- /.col -->

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
              <li class="breadcrumb-item">Add Blog</li>
            </ol>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!--main area -->
    <div class="container mt-4">
      @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
      @endif

      <div class="card">        
        <div class="card-body">
          <form name="add-blog" id="add-blog" method="post" enctype="multipart/form-data" action="{{ route('blogs.store')}}">
            @csrf

            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control" >
              @error('name')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" id="title" name="title" value="{{ old('title') }}" class="form-control" >
              @error('title')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
              <label for="short_description">Short Description</label>
              <input type="text" id="short_description" name="short_description" value="{{ old('short_description') }}" class="form-control" >
              @error('short_description')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
              <label for="long_description">Long Description</label>
              <textarea name="long_description" id="long_description" cols="30" rows="10" class="form-control">{{ old('long_description') }}</textarea>

              <script>
                      // ClassicEditor
                      //         .create( document.querySelector( '#long_description' ), {
                      //           ckfinder: {
                      //             uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',
                      //           },
                      //           fontSize: {
                      //             options: [
                      //               // '10pt', '12pt', '14pt', '16pt', '18pt', '24pt', '30pt', '36pt', '48pt', '60pt', '70pt', '84pt',
                      //               {
                      //                 title: 'xx-small',
                      //                 model: '5px'
                      //               },
                      //               {
                      //                 title: 'x-small',
                      //                 model: '7px'
                      //               },
                      //               {
                      //                 title: 'small',
                      //                 model: '11px'
                      //               },
                      //               {
                      //                 title: 'medium',
                      //                 model: '16px'
                      //               },
                      //               {
                      //                 title: 'large',
                      //                 model: '24px'
                      //               },
                      //               {
                      //                 title: 'x-large',
                      //                 model: '36px'
                      //               },
                      //               {
                      //                 title: 'xx-large',
                      //                 model: '54px'
                      //               }
                      //             ]
                      //           }
                      //         } )
                      //         .then( editor => {
                      //                 console.log( editor );
                      //         } )
                      //         .catch( error => {
                      //                 console.error( error );
                      //         } );

                      
                      // tinymce.init({
                      //   selector: 'textarea',
                      //   plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                      //   toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
                      // });

                      // const editor_config = {
                      //   path_absolute: "/",
                      //   selector: "textarea#long_description",
                      //   height: 500,
                      //   plugins: [
                      //     'advlist print preview hr',
                      //     'visualhars code fullscreen',
                      //     'insertdatetime nonbreaking contextmenu directionality',
                      //     'template paste textcolor colorpicker textpattern',
                      //     'anchor autolink charmap codesample emotions image link lists media searchreplace table visualblocks wordcount'
                      //   ],
                      //   toolbar: 'insertfile undo redo | blocks fontfamily fontsize | stylesheet | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
                      //   relative_urls: false,
                      //   images_upload_handler: function (blobInfo, success, failure) {
                      //     let xhr, formData;
                      //     xhr = new XMLHttpRequest();
                      //     xhr.withCredientials = false;
                      //     xhr.open('POST', '{{ route("admin.image_upload") }}');
                      //     let token = '{{ csrf_token() }}';
                      //     xhr.setRequestHeader("X-CSRF-Token", token);
                      //     xhr.onload = function() {
                      //       let json;
                      //       if (xhr.status != 200) {
                      //         failure('HTTP Error: ' + xhr.status);
                      //         return;
                      //       }
                      //       json = JSON.parse(xhr.responseText);

                      //       if (!json || typeof json.location != 'string') {
                      //         failure('Invalid JSON: ' + xhr.responseText);
                      //         return;
                      //       }
                      //       success(json.location);
                      //     };
                      //     formData = new FormData();
                      //     formData.append('file', blobInfo.blob(), blobInfo.filename());
                      //     xhr.send(formData);
                      //   }
                      // };

                      // tinymce.init(editor_config);

                      tinymce.init({
                        selector: 'textarea#long_description',
                        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
                      });
              </script>
              @error('long_description')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
              <label for="reading_time">Reading Time</label>
              <input type="text" id="reading_time" name="reading_time" value="{{ old('reading_time') }}" class="form-control" >
              @error('reading_time')<div class="error">{{ $message }}</div>@enderror
            </div>


            <div class="form-group">
              <label>Select Tag </label>
                <select name="tags[]" class="form-control select2" multiple="multiple">
                    @foreach ($tags as $tag)
                      <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>

          
            <div class="form-group">
              <label>Select Related Blog</label>
              <select name="related_blogs[]" class="form-control select2" multiple="multiple" data-placeholder="Select a Blog" >

                @foreach($blogs as $blog)
                  <option value={{ $blog->id }}>{!! Str::words( $blog->title, 5, ' ..') !!}</option>
                @endforeach

              </select>
            </div>

            <div class="form-group">
              <label for="blog_image">Blog Image</label>
              <input type="file" class="form-control" id="blog_image" name="blog_image" class="form-control" >
              @error('blog_image')<div class="error">{{ $message }}</div>@enderror
            </div>

            <hr>
            <h3>Seo Section </h3>

            <div class="form-group">
              <label for="meta_keywords">Meta Keywords</label>
              <input type="text" id="meta_keywords" name="meta_keywords" value="{{ old('meta_keywords') }}" class="form-control" placeholder="Enter minimum 3 characters and maximum 160 characters">
              @error('meta_keywords')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
              <label for="meta_description">Meta Description</label>
              <input type="text" id="meta_description" name="meta_description" value="{{ old('meta_description') }}" class="form-control" placeholder="Enter minimum 3 characters and maximum 160 characters">
              @error('meta_description')<div class="error">{{ $message }}</div>@enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div> 
    <!--close main area -->    
@endsection

@section('js')
  <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
  <script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2();      
    });
  </script>
@endsection