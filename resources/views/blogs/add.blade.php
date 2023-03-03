@extends('layouts.admin')

@section('css')
    <!-- Css files-->
    
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('cropper/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('cropper/css/style-example.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('cropper/css/jquery.Jcrop.min.css') }}" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.4/cropper.min.css">
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
<style>
  .error {
    color: red;
  }
  

  /* For Ckeditor */
  .ck-editor__editable_inline {
    min-height: 250px;
  }
</style>

<!-- TinyMCE -->
<script src="{{ asset('tinymce/js/tinymce/tinymce.min.js') }}"></script>
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
            <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control">
            @error('name')<div class="error">{{ $message }}</div>@enderror
          </div>

          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" class="form-control">
            @error('title')<div class="error">{{ $message }}</div>@enderror
          </div>

          <div class="form-group">
            <label for="short_description">Short Description</label>
            <input type="text" id="short_description" name="short_description" value="{{ old('short_description') }}" class="form-control">
            @error('short_description')<div class="error">{{ $message }}</div>@enderror
          </div>

          <div class="form-group">
            <label for="long_description">Long Description</label>
            <textarea name="long_description" id="long_description" cols="30" rows="10" class="form-control">{{ old('long_description') }}</textarea>

            <script>
              tinymce.init({
                selector: 'textarea#long_description',
                height: 500,
                setup: function(editor) {
                  editor.on('init change', function() {
                    editor.save();
                  });
                },
                plugins: [
                  "advlist autolink lists link image charmap print preview anchor",
                  "searchreplace visualblocks code fullscreen",
                  "insertdatetime media table contextmenu paste imagetools"
                ],
                toolbar: "styleselect | fontselect | fontsizeselect | forecolor backcolor | bold italic underline subscript superscript | align | bullist numlist outdent indent | link image | print fullscreen undo redo",
                menubar: false,
                block_unsupported_drop: false,
                image_title: true,
                automatic_uploads: true,
                images_upload_url: '/upload_image',
                file_picker_types: 'image',
                file_picker_callback: function(cb, value, meta) {
                  var input = document.createElement('input');
                  input.setAttribute('type', 'file');
                  input.setAttribute('accept', 'image/*');
                  input.onchange = function() {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onload = function() {
                      var id = 'blobid' + (new Date()).getTime();
                      var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                      var base64 = reader.result.split(',')[1];
                      var blobInfo = blobCache.create(id, file, base64);
                      blobCache.add(blobInfo);
                      cb(blobInfo.blobUri(), {
                        title: file.name
                      });
                    };
                  };
                  input.click();
                }
              });
            </script>
            @error('long_description')<div class="error">{{ $message }}</div>@enderror
          </div>

          <div class="form-group">
            <label for="reading_time">Reading Time</label>
            <input type="text" id="reading_time" name="reading_time" value="{{ old('reading_time') }}" class="form-control">
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
            <label>Select Blog Category</label>
            <select name="parent_id" class="form-control">

              <option value="0">
                No Parent
              </option>

              @foreach($blog_categories as $blog_category)
              <option value="{{ $blog_category->id }}">
                {{ $blog_category->name }}
              </option>
              @endforeach

            </select>
          </div>


          <div class="form-group">
            <label>Select Related Blog</label>
            <select name="related_blogs[]" class="form-control select2" multiple="multiple" data-placeholder="Select a Blog">

              @foreach($blogs as $blog)
              <option value={{ $blog->id }}>{!! Str::words( $blog->title, 5, ' ..') !!}</option>
              @endforeach

            </select>
          </div>

          <hr>
          <h4>Display To</h4>
          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="radio" value="1" class="form-check-input" checked="checked" name="is_coupon_site">Coupon Site
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="radio" value=0 class="form-check-input" name="is_coupon_site">Blog Site
            </label>
          </div>
          <hr>
          <div class="form-group">
            <label for="blog_image">Blog Image (Recommend Size : 500 x 350)</label>
            <div class="box">
            <input type="file" id="file-input"/>
          </div>
          <!-- leftbox -->
          <div class="box-2">
              <div class="result"></div>
          </div>
          <!--rightbox-->
          <div class="box-2 img-result hide">
              <!-- result of crop -->
              <img class="cropped" id="img_crop" src="" alt="">
          </div>
          <!-- input file -->
          <div class="box">
              <div class="options hide">
                  <label> Width</label>
                  <input type="number" class="img-w" value="500" min="100" max="800" />
              </div>
              <!-- save btn -->
              <button class="btn btn-primary save hide" id="save">Crop Image</button>
          </div>
            <input type="hidden" id="blogimgsrc" name="blogimgsrc"  class="form-control">
            @error('blogimgsrc')<div class="error">{{ $message }}</div>@enderror

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


<!-- Js files-->
<!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="{{ asset('cropper/scripts/jquery.Jcrop.js') }}"></script>
<script type="text/javascript" src="{{ asset('cropper/scripts/jquery.SimpleCropper.js') }}"></script> -->
<script src="{{ asset('cropper/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/0.8.1/cropper.min.js"></script>
<!-- <script>
              // Init Simple Cropper
              $('.cropme').simpleCropper();
              
              $(".ok").click(function(){
                
                  setTimeout(function(){
                    $('#blogimgsrc').val($('.cropme img').attr('src'));
                  }, 1000);
              });
            </script> -->

            <script>
              $("#save").click(function(){
                
                setTimeout(function(){
                  $('#blogimgsrc').val($('#img_crop').attr('src'));
                }, 1000);
            });
            </script>
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
<script>
  $(function() {
    //Initialize Select2 Elements
    $('.select2').select2();
  });
</script>
@endsection