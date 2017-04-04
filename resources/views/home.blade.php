@extends('master')

@section('css')
    <link rel="stylesheet" href="{{ mix('front/css/home.css') }}">
@stop

@section('slideshow')
   @include('layout.slideshow')
@stop

@section('content')
        <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SALE PRODUCT -->
          <div class="col-md-12 sale-product">
            <h2>New Arrivals</h2>
            <div class="owl-carousel owl-carousel5">
              @foreach($products as $product)
                @include('layout.product')
              @endforeach
            </div>
          </div>
          <!-- END SALE PRODUCT -->
        </div>
        <!-- END SALE PRODUCT & NEW ARRIVALS -->

        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40 ">
        
          <!-- BEGIN categories -->
          @include('layout.categories')
          <!-- END categories -->

        </div>
        <!-- END SIDEBAR & CONTENT -->

@stop

@section('js')
    <script src="{{ mix('front/js/home.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            LayersliderInit.initLayerSlider();
            Layout.initImageZoom();
            Layout.initTouchspin();
            
            Layout.initFixHeaderWithPreHeader();
            Layout.initNavScrolling();
        });
    </script>
@stop
