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
                        <h4>social icon</h4>
                        <div class="abu_wrpr social">
                            @if ($settings->facebook_account_linik)
                            <a href="{{ $settings->facebook_account_linik }}" class="au_item">
                                <div class="icon fb">
                                    <i class="fab fa-facebook-f"></i>
                                </div>
                                Facebook
                            </a>
                            @endif

                            @if ($settings->instagram_account_link)
                            <a href="{{ $settings->instagram_account_link }}" class="au_item">
                                <div class="icon insta">
                                    <i class="fab fa-instagram"></i>
                                </div>
                                Instagram
                            </a>
                            @endif

                            @if ($settings->google_plus_account_link)
                            <a href="{{ $settings->google_plus_account_link }}" class="au_item">
                                <div class="icon google_plus">
                                    <i class="fab fa-google-plus-g"></i>
                                </div>
                                Google+
                            </a>
                            @endif

                            @if ($settings->pinterest_account_link)
                            <a href="{{ $settings->pinterest_account_link }}" class="au_item">
                                <div class="icon pt">
                                    <i class="fab fa-pinterest"></i>
                                </div>
                                Pinterest
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection