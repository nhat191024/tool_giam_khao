<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Document</title>
    <!-- Custom fonts for this template -->
    <link href="{{ url('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ url('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Global custom styles -->
    <link rel="stylesheet" href="{{ url('css/app.css') }}">

    <!-- Custom styles for this page -->
    <link href="{{ url('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
</head>

<body class="bg-main">
    <div class="avatar">
        <p class=" text-white m-auto ">Vũ Chí Thành</p>
        <img src="{{url('img/Vu-Chi-Thanh.webp')}}" width="20%" class="avatarImg">
    </div>
    <div class="score-nav">
        <a href="{{route('diem.total_screen')}}" class="mr-3 text-white">Tổng Hợp</a>
        <a href="{{route('diem.add_screen')}}" class="text-white">Chấm Điểm</a>
    </div>
    <div class="logo">
        <img src="{{url('img/whiteLogo.png')}}" alt="" width="50%">
    </div>