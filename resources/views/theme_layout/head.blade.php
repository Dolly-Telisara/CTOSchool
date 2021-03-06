<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <!-- Google font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme_files/css/library/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme_files/css/library/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme_files/css/library/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme_files/css/md-font.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme_files/css/style.css') }}">
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <!-- <title>CTOschool</title> -->
    <title>
        @section('title')
        @show
    </title>

</head>