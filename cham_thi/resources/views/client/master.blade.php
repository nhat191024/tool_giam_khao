<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <title>FPOLY Hải Phòng</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('css/styles.css') }}" />
</head>

<body>
    <main>
        <nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong">
            <div class="container">
                <a class="navbar-brand mx-auto" href="#">
                    <img src="{{ url('img/logo.png') }}" alt="" style="width: 200px" />
                </a>
            </div>
        </nav>

        <div id="all">
            <div id="container-rain-emoji">
                <div id="animate"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="row">
                        @foreach ($doiThi as $key => $x)
                            <div class="col-lg-12">
                                <button class="btn btn-hover color-4" onclick="displayTeam('team-{{ $key + 1 }}')">
                                    {{ $x->ten_doi }}
                                </button>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-9 col-md-9">
                    @foreach ($doiThi as $key => $x)
                        <div class="card-box d-block" id="team-{{ $key+1 }}">
                            <div class="front">
                                <img src="{{ url('img/profile-image.jpg') }}" />
                                <div class="details">
                                    <h2>{{ $x->ten_doi }}</h2>
                                </div>
                                <div class="emoji d-flex justify-content-around mb-2">
                                    <div href="#" class="icon">
                                        <img src="{{ url('img/red-heart_2764-fe0f.png') }}"
                                            style="width: 50px; height: 50px">
                                        <span class="notification-badge badge badge-danger">2</span>
                                    </div>
                                    <div href="#" class="icon">
                                        <img src="{{ url('img/images-removebg-preview.png') }}"
                                            style="width: 50px; height: 50px">
                                        <span class="notification-badge badge badge-danger">2</span>
                                    </div>
                                    <div href="#" class="icon">
                                        <img src="{{ url('img/grinning-face_1f600.png') }}"
                                            style="width: 50px; height: 50px">
                                        <span class="notification-badge badge badge-danger">2</span>
                                    </div>
                                    <div href="#" class="icon">
                                        <img src="{{ url('img/face-with-open-mouth_1f62e.png') }}"
                                            style="width: 50px; height: 50px">
                                        <span class="notification-badge badge badge-danger">2</span>
                                    </div>
                                    <div href="#" class="icon">
                                        <img src="{{ url('img/thumbs-up_1f44d.png') }}"
                                            style="width: 50px; height: 50px">
                                        <span class="notification-badge badge badge-danger">2</span>
                                    </div>
                                </div>
                            </div>
                            <div class="back">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Tên giám khảo</th>
                                                            <th scope="col">Đội Thi</th>
                                                            <th scope="col">Điểm thi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($giamKhao as $x)
                                                            <tr class="">
                                                                <td>
                                                                    <h4 class="text-center mb-3">{{ $x->ho_ten }}
                                                                    </h4>
                                                                    <div
                                                                        class="emoji d-flex justify-content-around mb-2">
                                                                        <div href="#" class="icon">
                                                                            <span>🥰</span>
                                                                            <span
                                                                                class="notification-badge badge badge-danger">2</span>
                                                                        </div>
                                                                        <div href="#" class="icon">
                                                                            <span>💖</span>
                                                                            <span
                                                                                class="notification-badge badge badge-danger">2</span>
                                                                        </div>
                                                                        <div href="#" class="icon">
                                                                            <span>👍</span>
                                                                            <span
                                                                                class="notification-badge badge badge-danger">2</span>
                                                                        </div>
                                                                        <div href="#" class="icon">
                                                                            <span>🤩 </span>
                                                                            <span
                                                                                class="notification-badge badge badge-danger">2</span>
                                                                        </div>
                                                                        <div href="#" class="icon">
                                                                            <span>😥</span>
                                                                            <span
                                                                                class="notification-badge badge badge-danger">2</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>Team CNTT 1</td>
                                                                <td>100</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- <div class="card-box d-none" id="team-2">
                        <div class="front">
                            <img src="profile-image.jpg" />
                            <div class="details">
                                <h2>Team CNTT 2</h2>
                            </div>
                            <div class="emoji d-flex justify-content-around mb-2">
                                <div href="#" class="icon">
                                    <span>🥰</span>
                                    <span class="notification-badge badge badge-danger">2</span>
                                </div>
                                <div href="#" class="icon">
                                    <span>💖</span>
                                    <span class="notification-badge badge badge-danger">2</span>
                                </div>
                                <div href="#" class="icon">
                                    <span>👍</span>
                                    <span class="notification-badge badge badge-danger">2</span>
                                </div>
                                <div href="#" class="icon">
                                    <span>🤩 </span>
                                    <span class="notification-badge badge badge-danger">2</span>
                                </div>
                                <div href="#" class="icon">
                                    <span>😥</span>
                                    <span class="notification-badge badge badge-danger">2</span>
                                </div>
                            </div>
                        </div>
                        <div class="back">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Tên giám khảo</th>
                                                        <th scope="col">Đội Thi</th>
                                                        <th scope="col">Điểm thi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="">
                                                        <td>
                                                            <h4 class="text-center mb-3">Vũ Chí Thành</h4>
                                                            <div class="emoji d-flex justify-content-around mb-2">
                                                                <div href="#" class="icon">
                                                                    <span>🥰</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>💖</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>👍</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>🤩 </span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>😥</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>Team CNTT 1</td>
                                                        <td>100</td>
                                                    </tr>

                                                    <tr class="">
                                                        <td>
                                                            <h4 class="text-center mb-3">
                                                                Phạm Thị Vân Anh
                                                            </h4>
                                                            <div class="emoji d-flex justify-content-around mb-2">
                                                                <div href="#" class="icon">
                                                                    <span>🥰</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>💖</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>👍</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>🤩 </span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>😥</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>Team CNTT 1</td>
                                                        <td>100</td>
                                                    </tr>

                                                    <tr class="">
                                                        <td>
                                                            <h4 class="text-center mb-3">Phạm Tuấn Anh</h4>
                                                            <div class="emoji d-flex justify-content-around mb-2">
                                                                <div href="#" class="icon">
                                                                    <span>🥰</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>💖</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>👍</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>🤩 </span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>😥</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>Team CNTT 1</td>
                                                        <td>100</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-box d-none" id="team-3">
                        <div class="front">
                            <img src="profile-image.jpg" />
                            <div class="details">
                                <h2>Team CNTT 3</h2>
                            </div>
                            <div class="emoji d-flex justify-content-around mb-2">
                                <div href="#" class="icon">
                                    <span>🥰</span>
                                    <span class="notification-badge badge badge-danger">2</span>
                                </div>
                                <div href="#" class="icon">
                                    <span>💖</span>
                                    <span class="notification-badge badge badge-danger">2</span>
                                </div>
                                <div href="#" class="icon">
                                    <span>👍</span>
                                    <span class="notification-badge badge badge-danger">2</span>
                                </div>
                                <div href="#" class="icon">
                                    <span>🤩 </span>
                                    <span class="notification-badge badge badge-danger">2</span>
                                </div>
                                <div href="#" class="icon">
                                    <span>😥</span>
                                    <span class="notification-badge badge badge-danger">2</span>
                                </div>
                            </div>
                        </div>
                        <div class="back">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Tên giám khảo</th>
                                                        <th scope="col">Đội Thi</th>
                                                        <th scope="col">Điểm thi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="">
                                                        <td>
                                                            <h4 class="text-center mb-3">Vũ Chí Thành</h4>
                                                            <div class="emoji d-flex justify-content-around mb-2">
                                                                <div href="#" class="icon">
                                                                    <span>🥰</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>💖</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>👍</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>🤩 </span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>😥</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>Team CNTT 1</td>
                                                        <td>100</td>
                                                    </tr>

                                                    <tr class="">
                                                        <td>
                                                            <h4 class="text-center mb-3">
                                                                Phạm Thị Vân Anh
                                                            </h4>
                                                            <div class="emoji d-flex justify-content-around mb-2">
                                                                <div href="#" class="icon">
                                                                    <span>🥰</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>💖</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>👍</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>🤩 </span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>😥</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>Team CNTT 1</td>
                                                        <td>100</td>
                                                    </tr>

                                                    <tr class="">
                                                        <td>
                                                            <h4 class="text-center mb-3">Phạm Tuấn Anh</h4>
                                                            <div class="emoji d-flex justify-content-around mb-2">
                                                                <div href="#" class="icon">
                                                                    <span>🥰</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>💖</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>👍</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>🤩 </span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>😥</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>Team CNTT 1</td>
                                                        <td>100</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-box d-none" id="team-4">
                        <div class="front">
                            <img src="profile-image.jpg" />
                            <div class="details">
                                <h2>Team CNTT 4</h2>
                            </div>
                            <div class="emoji d-flex justify-content-around mb-2">
                                <div href="#" class="icon">
                                    <span>🥰</span>
                                    <span class="notification-badge badge badge-danger">2</span>
                                </div>
                                <div href="#" class="icon">
                                    <span>💖</span>
                                    <span class="notification-badge badge badge-danger">2</span>
                                </div>
                                <div href="#" class="icon">
                                    <span>👍</span>
                                    <span class="notification-badge badge badge-danger">2</span>
                                </div>
                                <div href="#" class="icon">
                                    <span>🤩 </span>
                                    <span class="notification-badge badge badge-danger">2</span>
                                </div>
                                <div href="#" class="icon">
                                    <span>😥</span>
                                    <span class="notification-badge badge badge-danger">2</span>
                                </div>
                            </div>
                        </div>
                        <div class="back">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Tên giám khảo</th>
                                                        <th scope="col">Đội Thi</th>
                                                        <th scope="col">Điểm thi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="">
                                                        <td>
                                                            <h4 class="text-center mb-3">Vũ Chí Thành</h4>
                                                            <div class="emoji d-flex justify-content-around mb-2">
                                                                <div href="#" class="icon">
                                                                    <span>🥰</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>💖</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>👍</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>🤩 </span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>😥</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>Team CNTT 1</td>
                                                        <td>100</td>
                                                    </tr>

                                                    <tr class="">
                                                        <td>
                                                            <h4 class="text-center mb-3">
                                                                Phạm Thị Vân Anh
                                                            </h4>
                                                            <div class="emoji d-flex justify-content-around mb-2">
                                                                <div href="#" class="icon">
                                                                    <span>🥰</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>💖</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>👍</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>🤩 </span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>😥</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>Team CNTT 1</td>
                                                        <td>100</td>
                                                    </tr>

                                                    <tr class="">
                                                        <td>
                                                            <h4 class="text-center mb-3">Phạm Tuấn Anh</h4>
                                                            <div class="emoji d-flex justify-content-around mb-2">
                                                                <div href="#" class="icon">
                                                                    <span>🥰</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>💖</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>👍</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>🤩 </span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>😥</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>Team CNTT 1</td>
                                                        <td>100</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-box d-none" id="team-5">
                        <div class="front">
                            <img src="profile-image.jpg" />
                            <div class="details">
                                <h2>Team CNTT 5</h2>
                            </div>
                            <div class="emoji d-flex justify-content-around mb-2">
                                <div href="#" class="icon">
                                    <span>🥰</span>
                                    <span class="notification-badge badge badge-danger">2</span>
                                </div>
                                <div href="#" class="icon">
                                    <span>💖</span>
                                    <span class="notification-badge badge badge-danger">2</span>
                                </div>
                                <div href="#" class="icon">
                                    <span>👍</span>
                                    <span class="notification-badge badge badge-danger">2</span>
                                </div>
                                <div href="#" class="icon">
                                    <span>🤩 </span>
                                    <span class="notification-badge badge badge-danger">2</span>
                                </div>
                                <div href="#" class="icon">
                                    <span>😥</span>
                                    <span class="notification-badge badge badge-danger">2</span>
                                </div>
                            </div>
                        </div>
                        <div class="back">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Tên giám khảo</th>
                                                        <th scope="col">Đội Thi</th>
                                                        <th scope="col">Điểm thi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="">
                                                        <td>
                                                            <h4 class="text-center mb-3">Vũ Chí Thành</h4>
                                                            <div class="emoji d-flex justify-content-around mb-2">
                                                                <div href="#" class="icon">
                                                                    <span>🥰</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>💖</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>👍</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>🤩 </span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>😥</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>Team CNTT 1</td>
                                                        <td>100</td>
                                                    </tr>

                                                    <tr class="">
                                                        <td>
                                                            <h4 class="text-center mb-3">
                                                                Phạm Thị Vân Anh
                                                            </h4>
                                                            <div class="emoji d-flex justify-content-around mb-2">
                                                                <div href="#" class="icon">
                                                                    <span>🥰</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>💖</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>👍</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>🤩 </span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>😥</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>Team CNTT 1</td>
                                                        <td>100</td>
                                                    </tr>

                                                    <tr class="">
                                                        <td>
                                                            <h4 class="text-center mb-3">Phạm Tuấn Anh</h4>
                                                            <div class="emoji d-flex justify-content-around mb-2">
                                                                <div href="#" class="icon">
                                                                    <span>🥰</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>💖</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>👍</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>🤩 </span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                                <div href="#" class="icon">
                                                                    <span>😥</span>
                                                                    <span
                                                                        class="notification-badge badge badge-danger">2</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>Team CNTT 1</td>
                                                        <td>100</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ mix('dist/main.js') }}"></script>
    <script type="text/javascript">

        window.Echo.channel('reacted')
            .listen('Reacted', (e) => {
                console.log(e);
            });

        function displayTeam(id) {
            let cardBoxHide = document.querySelector(".d-block");
            if (cardBoxHide) {
                cardBoxHide.classList.remove("d-block");
                cardBoxHide.classList.add("d-none");
            }

            if (id) {
                let cardBoxDisplay = document.querySelector(`#${id}`);
                cardBoxDisplay.classList.add("d-block");
            }
        }

    </script>
    {{-- <script src="main.js"></script> --}}
</body>

</html>
