<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ __('Dashboard') }}</title>
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('material') }}/img/apple-icon.png">
<link rel="icon" type="image/png" href="{{ asset('material') }}/img/favicon.png">
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<!-- CSS Files -->
<link href="{{ asset('material') }}/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
<!-- CSS Just for demo purpose, don't include it in your project -->
<link href="{{ asset('material') }}/demo/demo.css" rel="stylesheet" />
<link href="{{ asset('css/style.css') }}" rel="stylesheet" />
<link href="{{ asset('css/frontend.css') }}" rel="stylesheet" />
<link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />


<!--   Core JS Files   -->
<script src="{{ asset('material') }}/js/core/jquery.min.js"></script>

<script src="{{ asset('js/select2.min.js') }}" ></script>