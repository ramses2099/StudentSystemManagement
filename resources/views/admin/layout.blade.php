<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="{{url('/')}}/img/favicon.png">

    <title>@yield('title')</title>
   
    <link href="{{url('/')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('/')}}/css/bootstrap-theme.css" rel="stylesheet">
    <link href="{{url('/')}}/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="{{url('/')}}/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{url('/')}}/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="{{url('/')}}/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <link href="{{url('/')}}/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{url('/')}}/css/owl.carousel.css" type="text/css">
	<link href="{{url('/')}}/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
	<link rel="stylesheet" href="{{url('/')}}/css/fullcalendar.css">
	<link href="{{url('/')}}/css/widgets.css" rel="stylesheet">
    <link href="{{url('/')}}/css/style.css" rel="stylesheet">
    <link href="{{url('/')}}/css/style-responsive.css" rel="stylesheet" />
	<link href="{{url('/')}}/css/xcharts.min.css" rel=" stylesheet">	
	<link href="{{url('/')}}/css/jquery-ui-1.10.4.min.css" rel="stylesheet">

  </head>
  <body>
    <section id="container" class="">
        @if(Auth::guard('admin')->check())
            @include('admin.header.header')
            @include('admin.sidebar.sidebar')
            <section id="main-content">
                <section class="wrapper">
                    @yield('content')                
                </section>
            </section>
        @else
            @yield('content')
        @endif
    </section>
    <!-- javascripts -->
    <script src="{{url('/')}}/js/jquery.js"></script>
	<script src="{{url('/')}}/js/jquery-ui-1.10.4.min.js"></script>
    <script src="{{url('/')}}/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="{{url('/')}}/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="{{url('/')}}/js/bootstrap.min.js"></script>
    <script src="{{url('/')}}/js/jquery.scrollTo.min.js"></script>
    <script src="{{url('/')}}/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="{{url('/')}}/assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="{{url('/')}}/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="{{url('/')}}/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="{{url('/')}}/js/owl.carousel.js" ></script>
    <script src="{{url('/')}}/js/fullcalendar.min.js"></script> 
	<script src="{{url('/')}}/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <script src="{{url('/')}}/js/calendar-custom.js"></script>
	<script src="{{url('/')}}/js/jquery.rateit.min.js"></script>
    <script src="{{url('/')}}/js/jquery.customSelect.min.js" ></script>
	<script src="{{url('/')}}/assets/chart-master/Chart.js"></script>
    <script src="{{url('/')}}/js/scripts.js"></script>
    <script src="{{url('/')}}/js/sparkline-chart.js"></script>
    <script src="{{url('/')}}/js/easy-pie-chart.js"></script>
	<script src="{{url('/')}}/js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="{{url('/')}}/js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="{{url('/')}}/js/xcharts.min.js"></script>
	<script src="{{url('/')}}/js/jquery.autosize.min.js"></script>
	<script src="{{url('/')}}/js/jquery.placeholder.min.js"></script>
	<script src="{{url('/')}}/js/gdp-data.js"></script>	
	<script src="{{url('/')}}/js/morris.min.js"></script>
	<script src="{{url('/')}}/js/sparklines.js"></script>	
	<script src="{{url('/')}}/js/charts.js"></script>
	<script src="{{url('/')}}/js/jquery.slimscroll.min.js"></script>
  </body>
</html>