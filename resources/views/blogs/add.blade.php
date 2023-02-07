@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('cropper/jquery.awesome-cropper.css') }}">

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
          <!-- <form role="form">
            <input id="sample_input" type="hidden" name="test[image]">
          </form> -->
          <div class="form-group">
            <label for="blog_image">Blog Image</label>
            
            

            <input type="file" class="form-control" id="blog_image" name="blog_image" class="form-control">
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
<script src="{{ asset('cropper/build/jquery.awesome-cropper.js') }}"></script> 
<script src="{{ asset('cropper/components/imgareaselect/scripts/jquery.imgareaselect.js') }}"></script>
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
<script>
  $(function() {
    //Initialize Select2 Elements
    $('.select2').select2();
  });
</script>
<script>
$(document).ready(function () {
  
$('#sample_input').awesomeCropper({ 
width: 150, 
height: 150, 
debug: false
});
});
</script>
@endsection