<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel </title>
    <base href="{{asset('')}}">  
    {{ Html::style('/clients/css/font.css') }}
    {{ Html::style('/clients/css/font1.css') }}
    {{ Html::style('/clients/css/bootstrap.min.css') }}
    
    {{ Html::script('js/app.js')}} 
    {{ Html::style('css/app.css')}}
    {{ Html::style('clients/css/font-awesome.min.css') }}
    {{ Html::style('clients/css/style.css') }}
    {{ Html::style('clients/css/animate.css') }}
    {{ Html::style('clients/css/huong-style.css') }}
    {{ Html::style('clients/vendors/colorbox/example3/colorbox.css') }}
    {{ Html::style('clients/rs-plugin/css/responsive.css') }}
    {{ Html::style('clients/rs-plugin/css/settings.css') }}


</head>
<body>
    @include('common.errors');
    @include('clients.header')
    <div class="rev-slider">
        @yield('content');
    </div>
    @include('clients.footer')

    <!-- include js files -->
    {{ Html::script('clients/js/jquery.js')}}
    {{ Html::script('clients/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js')}}
    {{ Html::script('clients/vendors/bxslider/jquery.bxslider.min.js"')}}
    {{ Html::script('clients/vendors/colorbox/jquery.colorbox-min.js')}}
    {{ Html::script('clients/vendors/animo/Animo.js')}}
    {{ Html::script('clients/vendors/dug/dug.js')}}
    {{ Html::script('clients/js/scripts.min.js')}}
    {{ Html::script('clients/rs-plugin/js/jquery.themepunch.tools.min.js')}}
    {{ Html::script('clients/rs-plugin/js/jquery.themepunch.revolution.min.js')}}
    {{ Html::script('clients/js/waypoints.min.js')}}
    {{ Html::script('clients/js/wow.min.js')}}
    
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    
    <!--customjs-->
    {{ Html::script('clients/js/custom2.js')}}
    
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
