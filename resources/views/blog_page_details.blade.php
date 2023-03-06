@extends('layouts.app_blog')

@section('seo')
<title>{{ $record->title }}</title>
<meta name="keywords" content="{{ $record->meta ? $record->meta->meta_keywords : '' }}" />
<meta name="description" content="{{ $record->meta ? $record->meta->meta_description : '' }}" />
@endsection

@section('content')

<!---- About us container -->
<section class="about_us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about_us-wrapper" style="padding: 30px 0;">
                    <div class="au-details">
                        {!! $record->long_description !!}
                    </div>

                    <div class="au_sidebar">
                        <h4>Pages</h4>
                        <div class="abu_wrpr">
                            @foreach ($footer_pages as $page)
                                @if ($page->type == 0 && $page->parent_id != 0)
                                    <a class="abu_item {{ Request::is('page/' . $page->slug) ? 'active' : '' }}" href="{{ route('blog.page_detail', $page->slug) }}">{{ $page->name }} </a>
                                @endif
                            @endforeach
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection