<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laravel </title>
	<!-- <base href="{{asset('')}}">  -->
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	
	{{ Html::script('js/app.js')}} 
	{{ Html::style('css/app.css')}}
	{{ Html::style('/Clients/css/font-awesome.min.css') }}
	{{ Html::style('/Clients/css/style.css') }}
	{{ Html::style('/Clients/css/animate.css') }}
	{{ Html::style('/Clients/css/huong-style.css') }}
	{{ Html::style('/Clients/vendors/colorbox/example3/colorbox.css') }}
	{{ Html::style('/Clients/rs-plugin/css/responsive.css') }}
	{{ Html::style('/Clients/rs-plugin/css/settings.css') }}


</head>
<body>
    @include('common.errors');
	@include('Clients.header')
	<div class="rev-slider">
    	@yield('content');
    </div>
	@include('Clients.footer')

	<!-- include js files -->
	{{ Html::script('Clients/js/jquery.js')}}
	{{ Html::script('Clients/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js')}}
	{{ Html::script('Clients/vendors/bxslider/jquery.bxslider.min.js"')}}
	{{ Html::script('Clients/vendors/colorbox/jquery.colorbox-min.js')}}
	{{ Html::script('Clients/vendors/animo/Animo.js')}}
	{{ Html::script('Clients/vendors/dug/dug.js')}}
	{{ Html::script('Clients/js/scripts.msin.js')}}
	{{ Html::script('Clients/rs-plugin/js/jquery.themepunch.tools.min.js')}}
	{{ Html::script('Clients/rs-plugin/js/jquery.themepunch.revolution.min.js')}}
	{{ Html::script('Clients/js/waypoints.min.js')}}
	{{ Html::script('Clients/js/wow.min.js')}}
	
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	
	<!--customjs-->
	{{ Html::script('Clients/js/custom2.js')}}
	
	<script>
	$(document).ready(function($) {    
		$(window).scroll(function(){
			if($(this).scrollTop()>150){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
		)
	})
	</script>
</body>
</html>
