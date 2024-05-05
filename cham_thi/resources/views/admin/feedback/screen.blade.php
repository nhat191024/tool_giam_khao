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

    <!-- Custom styles for this page -->
    <link href="{{ url('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
</head>

<body class="bg-main">
    <div class="avatar">
        <p class=" text-white m-auto ">Vũ Chí Thành</p>
        <img src="img/Vu-Chi-Thanh.webp" width="20%" class="avatarImg">
    </div>
    <div class="logo">
        <img src="img/whiteLogo.png" alt="" width="50%">
    </div>
    <div class="w-100 vh-100 d-flex flex-column align-items-center p-5">
        <div class="w-100 h-75 d-flex justify-content-center bg-white border-radius mb-3 mt-3">
            <div class="w-50 position-relative">
                <img src="img/Vu-Chi-Thanh.webp" class="team-avatar" width="100%">
                <div class="team-name text-center">
                    Công Nghệ Thông Tin
                </div>
            </div>
            <div class="w-50 d-flex justify-content-center align-items-center position-relative">
                <div>
                    <div class="d-flex justify-content-center mb-3 font-weight-bold font-size-20">
                        <p>
                            <img src="img/red-heart_2764-fe0f.png" style="width: 75px; height: 75px" class="mr-3" />
                            0
                        </p>
                        <p>
                            <img src="img/images-removebg-preview.png" style="width: 75px; height: 75px"
                                class="mx-3" />
                            0
                        </p>
                    </div>
                    <div class="d-flex font-weight-bold font-size-20">
                        <p>
                            <img src="img/grinning-face_1f600.png" style="width: 75px; height: 75px" class="mx-3" />
                            0
                        </p>
                        <p>
                            <img src="img/face-with-open-mouth_1f62e.png" style="width: 75px; height: 75px"
                                class="mx-3" />
                            0
                        </p>
                        <p>
                            <img src="img/thumbs-up_1f44d.png" style="width: 75px; height: 75px" class="mx-3" />
                            0
                        </p>
                    </div>
                </div>
                <div class="score">Điểm 1000</div>
            </div>
        </div>
        <div class="w-100 h-25 bg-white border-radius position-relative">
            <button class="btn tip-button" type="button" data-toggle="modal" data-target="#tip-modal">
                <img src="img/question-mark.png" alt="" width="100%">
            </button>
            <div class="d-flex justify-content-center mt-4">
                @foreach ($doiThi as $key => $item)
                    <button id="{{ $item['id'] }}"
                        class="{{ $key == 0 ? 'btn-warning' : 'btn-primary' }} btn doithi text-light fw-bold ml-2"
                        onclick="chonDoi(this)">{{ $item['ten_doi'] }}</button>
                @endforeach
            </div>
            <div class="d-flex justify-content-center mt-4">
                <img id="1" src="img/red-heart_2764-fe0f.png" onclick="selectImage(this, this.id)"
                    style="width: 65px; height: 65px" />
                <img id="2" src="img/images-removebg-preview.png" onclick="selectImage(this, this.id)"
                    style="width: 65px" class="ml-3" />
                <img id="3" src="img/grinning-face_1f600.png" onclick="selectImage(this, this.id)"
                    style="width: 65px" class="ml-3" />
                <img id="4" src="img/face-with-open-mouth_1f62e.png" onclick="selectImage(this, this.id)"
                    style="width: 65px" class="ml-3" />
                <img id="5" src="img/thumbs-up_1f44d.png" onclick="selectImage(this, this.id)"
                    style="width: 65px" class="ml-3" />
            </div>
        </div>
    </div>

    {{-- Modal Hướng Dẫn sử dụng --}}
    <div class="modal fade" id="tip-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tip-modal-label">Hướng Dẫn Sử Dụng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>1. Chọn đội thi mà bạn muốn gửi điểm</p>
                    <p>2. Nhấn vào biểu tượng để gửi điểm</p>
                    <p>3. Mỗi biểu tượng sẽ tương ứng với một số điểm nhất định</p>
                    <div class="d-flex justify-content-center">
                        <div class="d-flex flex-column align-items-center justify-content-center ">
                            <img src="img/red-heart_2764-fe0f.png" style="width: 40px; height: 40px">
                            <p>50</p>
                        </div>
                        <div class="d-flex flex-column align-items-center justify-content-center ml-3">
                            <img src="img/images-removebg-preview.png" style="width: 40px">
                            <p>40</p>
                        </div>
                        <div class="d-flex flex-column align-items-center justify-content-center ml-3">
                            <img src="img/grinning-face_1f600.png" style="width: 40px">
                            <p>30</p>
                        </div>
                        <div class="d-flex flex-column align-items-center justify-content-center ml-3">
                            <img src="img/face-with-open-mouth_1f62e.png" style="width: 40px">
                            <p>20</p>
                        </div>
                        <div class="d-flex flex-column align-items-center justify-content-center ml-3">
                            <img src="img/thumbs-up_1f44d.png" style="width: 40px">
                            <p>10</p>
                        </div>
                    </div>
                    <p>4. Có thể gửi điểm cho nhiều đội thi khác nhau</p>
                    <p>5. Có thể gửi điểm cho cùng một đội thi nhiều lần</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <audio id="audio" src="{{ url('audio/like.mp3') }}"></audio>
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
        var doiThi = document.querySelector('.doithi').id;

        function chonDoi(element) {
            // Đặt tất cả các nút về class 'btn-primary' và loại bỏ class 'btn-warning'
            document.querySelectorAll('.doithi').forEach(function(btn) {
                btn.classList.remove('btn-warning');
                btn.classList.add('btn-primary');
            });

            // Thêm class 'btn-warning' cho nút được nhấn và loại bỏ class 'btn-primary'
            element.classList.remove('btn-primary');
            element.classList.add('btn-warning');

            // Thêm hiệu ứng zoom in/out cho nút được nhấn
            element.classList.add('selectedBtn');
            setTimeout(function() {
                element.classList.remove('selectedBtn');
            }, 1000); // Loại bỏ lớp 'selected' sau 0.3s

            // Cập nhật biến 'doiThi' với id của nút được nhấn
            doiThi = element.id;
        }

        // Đảm bảo rằng mã này được đặt sau khi các nút đã được tải vào DOM


        var audio = document.getElementById("audio");

        function selectImage(image, id) {
            audio.currentTime = 0;
            audio.play();
            // Xóa lớp 'selected' khỏi tất cả các ảnh
            var images = document.querySelectorAll('img');
            images.forEach(function(img) {
                img.classList.remove('selected');
                img.classList.add('reset-animation');
                setTimeout(function() {
                    img.classList.remove('reset-animation');
                }, 100);
            });

            image.classList.add('selected');

            // Tạo một container mới để chứa hình ảnh và hiệu ứng +1
            var container = document.createElement('div');
            container.style.position = 'fixed';
            container.style.top = '45%';
            container.style.left = '45%';
            container.style.transform = 'translate(-50%, -50%)';
            container.style.display = 'flex';
            container.style.flexDirection = 'column';
            container.style.alignItems = 'center';
            container.style.justifyContent = 'center'; // Đảm bảo các items được căn giữa theo cả hai chiều
            container.style.animation = 'pop 0.5s forwards'; // Thêm animation pop cho container

            // Tạo một bản sao của hình ảnh và thêm vào container
            var imageClone = image.cloneNode(true);
            imageClone.style.width = '200px'; // Đặt kích thước cho hình ảnh
            imageClone.style.height = 'auto';
            container.appendChild(imageClone);

            // Tạo và thêm hiệu ứng +1 vào container
            var plusOne = document.createElement('div');
            plusOne.innerHTML = "+1";
            plusOne.style.color = 'red';
            plusOne.style.fontSize = '24px';
            container.appendChild(plusOne);

            document.body.appendChild(container);

            // Áp dụng hiệu ứng pop ngay lập tức
            container.style.animation = 'pop 0.5s forwards';

            // Áp dụng hiệu ứng shrink sau khi hiệu ứng pop hoàn tất
            setTimeout(function() {
                container.style.animation = 'shrink 0.5s forwards';
            }, 600); // Đặt thời gian chờ bằng với thời gian của animation pop

            // Xóa container sau khi hoàn thành hiệu ứng shrink
            setTimeout(function() {
                container.remove();
            }, 1000); // Thời gian này phải lớn hơn thời gian của animation shrink

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({

                type: "POST",
                url: "{{ route('diem.add_score') }}",
                data: {
                    doi_thi: doiThi,
                    icon_id: id,
                },
                success: function(response) {
                    updateTable(response.data);
                },
                error: function(response, status, error) {
                    var error_message = JSON.parse(response.responseText);
                    $('#message').text(error_message.message);
                    $('#message').show();
                }
            })

            console.log(id);
        }

        // Định nghĩa hàm updateTable để cập nhật bảng
        function updateTable(data) {
            // Xóa tất cả các dòng hiện có trong bảng
            $('#score tbody').empty();

            // Duyệt qua mỗi mục trong mảng dữ liệu từ phản hồi API
            $.each(data, function(index, item) {
                // Tạo một hàng mới cho mỗi mục dữ liệu
                var newRow = "<tr>" +
                    "<th scope='row'>" + item.ten_doi + "</th>" +
                    "<td><img src='img/red-heart_2764-fe0f.png' style='width: 30px; height: 30px' class='mr-3' />" +
                    item.sotim + "</td>" +
                    "<td><img src='img/images-removebg-preview.png' style='width: 30px; height: 30px' class='mr-3' />" +
                    item.sothuong + "</td>" +
                    "<td><img src='img/grinning-face_1f600.png' style='width: 30px; height: 30px' class='mr-3' />" +
                    item.sohaha + "</td>" +
                    "<td><img src='img/face-with-open-mouth_1f62e.png' style='width: 30px; height: 30px' class='mr-3' />" +
                    item.sowow + "</td>" +
                    "<td><img src='img/thumbs-up_1f44d.png' style='width: 30px; height: 30px' class='mr-3' />" +
                    item.solike + "</td>" +
                    "<td>Tổng điểm: " + item.tongso + "</td>" +
                    "</tr>";

                // Thêm hàng mới vào tbody của bảng
                $('#score tbody').append(newRow);
            });
        }

        // Định nghĩa keyframes cho animation pop
        var styleSheet = document.createElement('style')
        styleSheet.type = 'text/css'
        styleSheet.innerText = `
        @keyframes pop {
        0% { opacity: 0; transform: scale(0); }
        60% { opacity: 1; transform: scale(1.2); }
        100% { opacity: 1; transform: scale(1); }
        }
        @keyframes shrink {
            0% { transform: scale(1); opacity: 1; }
            100% { transform: scale(0); opacity: 0; }
        }`;
        document.head.appendChild(styleSheet);
    </script>
</body>

</html>
