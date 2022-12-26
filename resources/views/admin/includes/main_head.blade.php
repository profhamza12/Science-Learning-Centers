<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{__('admin.admin_title')}}</title>
<!-- Bootstrap  Framework -->
<link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
<!-- FontAwesome  Framework -->
<link rel="stylesheet" href="{{asset('admin/css/all.min.css')}}">
<!-- Calender  css -->
<link rel="stylesheet" href="{{asset('admin/css/calender.css')}}">
<!-- Custom  Style -->
<link rel="stylesheet" href="{{asset('admin/css/admin_style.css')}}">
<!-- if the current language is arabic: call arabic font and rtl style -->
@if(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() == "ar")
    <link rel="icon" href="{{asset('admin/fonts/DroidKufi/DroidKufi-Regular.ttf')}}">
    <link rel="stylesheet" href="{{asset('admin/css/style_rtl.css')}}">
@endif
<!-- if the current language is english: call english font and ltr style -->
@if(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() == "en")
    <link rel="icon" href="{{asset('admin/fonts/OpenSans/OpenSans.ttf')}}">
    <link rel="stylesheet" href="{{asset('admin/css/style_ltr.css')}}">
@endif
<link rel="icon" href="{{asset('admin/images/logo.jpg')}}">
