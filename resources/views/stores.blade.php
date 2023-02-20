@extends('layouts.app')

@section('seo')
<title>E Commerce All Stores</title>
<meta name="keywords" content="E Commerce shopping stores, E Commerce keywords" />
<meta name="description" content="E Commerce shopping stores, E Commerce description" />
@endsection

@section('content')
<section class="stores_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="breadcrumbs_dark">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="store_main-title">
                  <h2 class="store_title sl_page">All Stores</h2>
                  <ul class="store_breadcrumbs store_list">
                    <li><a href="{{ route('web.coupon') }}">Home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>All Stores</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
</section>

<!----alphabet sorting card---->
<section class="sorting_store">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="store_head">
          <div class="store_head-item ">
            <h4 class="str_head-heading">Choose An Alphabet!</h4>
            <div class="alphabet_letter-container">
              <?php $activeClass = (!isset($_GET['search'])) ? 'active' : ''; ?>
              <a href="{{ url('stores') }}" class="alphabets_items {{ $activeClass }}">All Stores</a>

              <?php
              foreach (range('a', 'z') as $column) {
                $activeClass = (isset($_GET['search']) && $_GET['search'] == $column) ? 'active' : '';
              ?>
                <a href="{{ url('stores?search=') }}{{ $column }}" class="alphabets_items {{ $activeClass }}"> {{ $column }} </a>
              <?php } ?>
              <?php $activeClass = (isset($_GET['search']) && $_GET['search'] == "0-9") ? 'active' : ''; ?>
              <a href="{{ url('stores?search=') }}0-9" class="alphabets_items {{$activeClass}}">0 - 9</a>
            </div>
          </div>
          <div class="store_head-item">
            <h2 class="store_heading">Browse All Stores by A to Z</h2>
            <p class="store_text">Browse all stores alphabetically. We've collected voucher codes and offers for all these great Stores.</p>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="all_stores-lists">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="all_store">

          <div class="sec_st-head alphabets_items">Stores From

            <?php
            if (!isset($_GET['search'])) {
              echo "All";
            }
            if (isset($_GET['search']) && $_GET['search'] == "0-9") {
              echo "0 - 9";
            }
            foreach (range('a', 'z') as $column) {
              if (isset($_GET['search']) && $_GET['search'] == $column) {
                echo $column;
              }
            }
            ?>

          </div>
          <div class="store_grid-container">

            @foreach($record as $data)
            
            
            <div class="store_container"><a href="{{ url('stores/' .$data->slug) }}" class="stlist_grid-item">
              <div class="image">
                <img class="lazy" src="{{ asset('images/' . $data->image) }}">
              </div>
              <div class="content">
                <h2>{{ $data->name }}</h2>
                <p>{{ $data->coupon_count }} Offers</p>
              </div>
            </a></div>
            
            @endforeach

            

            @if ($record->count() == 0)
            <span>No Stores Found.</span>
            @endif

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
