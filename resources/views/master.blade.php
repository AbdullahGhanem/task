<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Soka</title>

	<link rel="shortcut icon" href="favicon.ico">

	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css"> 

	<link rel="stylesheet" href="{{ mix('front/css/front.css') }}">
	@yield('css')

</head>
<body class="ecommerce">
	<!-- BEGIN HEADER -->
	@include('layout.header')
	<!-- Header END -->

	@yield('slideshow')

	<div class="main">
		<div class="container">
			
			@yield('content')
		</div>
	</div>

	<!-- BEGIN PRE-FOOTER -->
	@include('layout.prefooter')
	<!-- END PRE-FOOTER -->

	<!-- BEGIN FOOTER -->
	@include('layout.footer')
	<!-- END FOOTER -->

	<script src="{{ mix('front/js/core.js') }}" type="text/javascript"></script>
	<script src="{{ mix('front/js/layout.js') }}" type="text/javascript"></script>


	{!! csrf_field() !!}
<script type="text/javascript">
      $(document).ready(function(){

      $('a.addCartButton').on('click', function(e){

        e.preventDefault();
        $button = $(this);
        var productId = $button.attr('product-id');
        
          $.ajax({
            url: '',
            type: 'post',
            dataType: 'json',
            data: {'productId': productId, _token: $('input[name=_token]').val()},
            beforeSend: function () {
            },
            success: function(data){

              var count = data[1];
              var total = data[2];

              $('a.top-cart-info-count').text( count + " items" );
              $('a.top-cart-info-value').text("$" + total );

            },
            error: function(data){
              alert(data);
            },
          }); 

        });
    });
</script>
	@yield('js')

</body>
</html>