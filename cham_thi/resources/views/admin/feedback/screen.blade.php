<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Custom fonts for this template -->
    <link href="{{ url('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ url('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ url('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <style>
        /* Hiệu ứng CSS */
        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.3);
            }

            100% {
                transform: scale(1);
            }
        }

        /* Thêm hiệu ứng CSS vào ảnh khi được chọn */
        .selected {
            animation: pulse 0.5s ease;
        }

        /* Tạo một class mới để loại bỏ hiệu ứng sau 1s */
        .reset-animation {
            animation: none !important;
        }

        .bg-orange {
            background-color: rgb(255, 140, 0);
        }

        .bg-main {
            background-color: #f8f6f6;
        }

        .border-radius {
            border-radius: 20px;
        }

        .avt1 {
            /* width: 20%; */
            margin: 5px 5px 0px 0px;
            right: 0%;
            position: absolute;
            display: flex;
            justify-content:  center;
            align-items: center
        }

        .avt2 {
            background-color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-left: 10px;
        }
    </style>
</head>

<body class="bg-main">
    <div class="avt1">
        <p>Vũ Trí Thành</p>
        <div class="avt2"></div>
    </div>
    <div class="w-100 vh-100 d-flex flex-column align-items-center p-5 ">
        <div class="w-100 h-75 bg-white border-radius mb-3 px-5">
            <table class="table mt-5">
                <tbody>
                    <tr>
                        <th scope="row">Đội 1</th>
                        <td><img src="img/red-heart_2764-fe0f.png" style="width: 30px; height: 30px" class="mr-3" />10
                        </td>
                        <td><img src="img/images-removebg-preview.png" style="width: 30px; height: 30px"
                                class="mr-3" />10</td>
                        <td><img src="img/grinning-face_1f600.png" style="width: 30px; height: 30px" class="mr-3" />10
                        </td>
                        <td><img src="img/face-with-open-mouth_1f62e.png" style="width: 30px; height: 30px"
                                class="mr-3" />10</td>
                        <td><img src="img/thumbs-up_1f44d.png" style="width: 30px; height: 30px" class="mr-3" />10
                        </td>
                        <td>Tổng điểm: 1000</td>
                    </tr>
                    <tr>
                        <th scope="row">Đội 2</th>
                        <td><img src="img/red-heart_2764-fe0f.png" style="width: 30px; height: 30px" class="mr-3" />10
                        </td>
                        <td><img src="img/images-removebg-preview.png" style="width: 30px; height: 30px"
                                class="mr-3" />10</td>
                        <td><img src="img/grinning-face_1f600.png" style="width: 30px; height: 30px" class="mr-3" />10
                        </td>
                        <td><img src="img/face-with-open-mouth_1f62e.png" style="width: 30px; height: 30px"
                                class="mr-3" />10</td>
                        <td><img src="img/thumbs-up_1f44d.png" style="width: 30px; height: 30px" class="mr-3" />10
                        </td>
                        <td>Tổng điểm: 1000</td>
                    </tr>
                    <tr>
                        <th scope="row">Đội 3</th>
                        <td><img src="img/red-heart_2764-fe0f.png" style="width: 30px; height: 30px" class="mr-3" />10
                        </td>
                        <td><img src="img/images-removebg-preview.png" style="width: 30px; height: 30px"
                                class="mr-3" />10</td>
                        <td><img src="img/grinning-face_1f600.png" style="width: 30px; height: 30px" class="mr-3" />10
                        </td>
                        <td><img src="img/face-with-open-mouth_1f62e.png" style="width: 30px; height: 30px"
                                class="mr-3" />10</td>
                        <td><img src="img/thumbs-up_1f44d.png" style="width: 30px; height: 30px" class="mr-3" />10
                        </td>
                        <td>Tổng điểm: 1000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="w-100 h-25 bg-white border-radius ">
            <div class="d-flex justify-content-center mt-4">
                <button class="btn bg-orange text-light fw-bold">Đội 1</button>
                <button class="btn bg-orange text-light fw-bold ml-4">Đội 1</button>
                <button class="btn bg-orange text-light fw-bold ml-4">Đội 1</button>
                <button class="btn bg-orange text-light fw-bold ml-4">Đội 1</button>
                <button class="btn bg-orange text-light fw-bold ml-4">Đội 1</button>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <img src="img/red-heart_2764-fe0f.png" onclick="selectImage(this)" style="width: 65px; height: 65px" />
                <img src="img/images-removebg-preview.png" onclick="selectImage(this)" style="width: 65px"
                    class="ml-3" />
                <img src="img/grinning-face_1f600.png" onclick="selectImage(this)" style="width: 65px" class="ml-3" />
                <img src="img/face-with-open-mouth_1f62e.png" onclick="selectImage(this)" style="width: 65px"
                    class="ml-3" />
                <img src="img/thumbs-up_1f44d.png" onclick="selectImage(this)" style="width: 65px" class="ml-3" />
            </div>
        </div>
    </div>
    {{-- <div class="w-100 vh-100 d-flex align-items-center  px-5">
        <div class="w-50 h-50 container border border-1 border-black mt-5 d-flex flex-column justify-content-center">
            <table class="table text-center table-borderless ">
                <thead>
                    <tr>
                        <th scope="col">Emoji </th>
                        <th scope="col">Số lần</th>
                        <th scope="col">Điểm</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="https://img.icons8.com/color/48/000000/happy.png" alt=""></td>
                        <td>10</td>
                        <td>300</td>
                    </tr>
                    <tr>
                        <td><img src="https://img.icons8.com/emoji/48/000000/smiling-face.png" alt=""></td>
                        <td>20</td>
                        <td>400</td>
                    </tr>
                    <tr>
                        <td><img src="https://img.icons8.com/color/48/000000/lol.png" alt=""></td>
                        <td>30</td>
                        <td>300</td>
                    </tr>
                    <tr>
                        <td><img src="https://img.icons8.com/fluent/48/000000/sad.png" alt=""></td>
                        <td>40</td>
                        <td>400</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div
            class="w-50 h-50 container d-flex flex-column justify-content-center align-items-center border border-1 border-black rounded-2 mt-5 ml-2 pt-2">
            <span class="text-center">
                Hướng dẫn sử dụng chọn đội sau đó chọn biểu tượng cảm xúc để chấm điểm cho đội đó
            </span>
            <div class="d-flex flex-row justify-content-center mx-2">
                <div class="row align-items-center">
                    <div class="col text-center">
                        <img width="70%" src="https://img.icons8.com/emoji/48/000000/angry-face-emoji--v2.png" />
                        <p class="mb-0">50 điểm</p>
                    </div>
                    <div class="col text-center">
                        <img width="70%" src="https://img.icons8.com/fluent/48/000000/sad.png" />
                        <p class="mb-0">40 điểm</p>
                    </div>
                    <div class="col text-center">
                        <img width="70%" src="https://img.icons8.com/color/48/000000/happy.png" />
                        <p class="mb-0">30 điểm</p>
                    </div>
                    <div class="col text-center">
                        <img width="70%" src="https://img.icons8.com/emoji/48/000000/smiling-face.png" />
                        <p class="mb-0">20 điểm</p>
                    </div>
                    <div class="col text-center">
                        <img width="70%" src="https://img.icons8.com/color/48/000000/lol.png" />
                        <p class="mb-0">10 điểm</p>
                    </div>
                </div>
            </div>
            <div class="w-100 mt-2 p-4 text-center">
                <h6>Mời giám khảo chọn đội thi</h6>
                <div class="d-flex justify-content-center mb-2">
                    <button class="btn btn-outline-dark ">Đội 1</button>
                    <button class="btn btn-outline-dark ml-2">Đội 2</button>
                    <button class="btn btn-outline-dark ml-2">Đội 3</button>
                    <button class="btn btn-outline-dark ml-2">Đội 4</button>
                </div>
                <h6 class="mb-0">Mời giám khảo chấm điểm cho đội thi</h6>
                <div class="d-flex flex-row justify-content-center mt-2">
                    <img src="https://img.icons8.com/emoji/48/000000/angry-face-emoji--v2.png"
                        onclick="selectImage(this)" />
                    <img src="https://img.icons8.com/fluent/48/000000/sad.png" onclick="selectImage(this)" />
                    <img src="https://img.icons8.com/color/48/000000/happy.png" onclick="selectImage(this)" />
                    <img src="https://img.icons8.com/emoji/48/000000/smiling-face.png" onclick="selectImage(this)" />
                    <img src="https://img.icons8.com/color/48/000000/lol.png" onclick="selectImage(this)" />
                </div>
            </div>
        </div>

    </div> --}}

    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ url('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ url('js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ url('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ url('js/demo/datatables-demo.js') }}"></script>

    <script>
        function selectImage(image) {
            // Xóa lớp 'selected' khỏi tất cả các ảnh
            var images = document.querySelectorAll('img');
            images.forEach(function(img) {
                img.classList.remove('selected');
                img.classList.add('reset-animation');
                setTimeout(function() {
                    img.classList.remove('reset-animation');
                }, 100); // Loại bỏ lớp 'reset-animation' sau 0.1s
            });

            // Thêm lớp 'selected' cho ảnh được nhấp vào
            image.classList.add('selected');
        }
    </script>
</body>

</html>
