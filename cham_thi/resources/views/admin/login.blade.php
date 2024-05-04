<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Custom fonts for this template -->
    <link href="{{ url('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ url('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">

    <!-- Custom styles for this page -->
    <link href="{{ url('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<style>

</style>
<body class="bg-main vh-100 d-flex justify-content-center align-items-center ">
    <div class="form-login d-flex flex-column align-items-center ">
        <img src="img/FPT_Polytechnic.png" width="50%">
        <form class="w-100 mt-4">
            <div class="form-group">
                <label>Tài Khoản</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Đăng Nhập</button>
        </form>
    </div>
</body>

</html>
