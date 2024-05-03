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
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center">
        <div class="card mt-5 pb-5">
            <div class="text-center">
                Hướng dẫn sử dụng
            </div>
            <div class="d-flex flex-row justify-content-center mt-2">
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
                    {{-- <div class="col"> --}}
                    {{-- </div> --}}
                </div>
            </div>
            <div class="mt-2 p-4 text-center">
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
    </div>

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
