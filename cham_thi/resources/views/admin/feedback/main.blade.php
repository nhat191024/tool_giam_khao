@include('admin.feedback.header')
    <div class="w-100 vh-100 d-flex flex-column align-items-center p-5">
        <div class="w-100 h-100 bg-white border-radius mb-3 px-5 mt-3">
            <table class="table mt-5" id="score">
                <tbody>
                    @if ($diem != [])
                        @foreach ($diem as $item)
                            <tr>
                                <th scope="row">{{ $item->ten_doi }}</th>
                                <td><img src="{{url('img/red-heart_2764-fe0f.png')}}" style="width: 30px; height: 30px"
                                        class="mr-3" />{{ $item->sotim }}
                                </td>
                                <td><img src="{{url('img/images-removebg-preview.png')}}" style="width: 30px; height: 30px"
                                        class="mr-3" />{{ $item->sothuong }}</td>
                                <td><img src="{{url('img/grinning-face_1f600.png')}}" style="width: 30px; height: 30px"
                                        class="mr-3" />{{ $item->sohaha }}
                                </td>
                                <td><img src="{{url('img/face-with-open-mouth_1f62e.png')}}" style="width: 30px; height: 30px"
                                        class="mr-3" />{{ $item->sowow }}</td>
                                <td><img src="{{url('img/thumbs-up_1f44d.png')}}" style="width: 30px; height: 30px"
                                        class="mr-3" />{{ $item->solike }}
                                </td>
                                <td>Tổng điểm: {{ $item->tongso }}</td>
                            </tr>
                        @endforeach
                    @else
                        @foreach ($doiThi as $item)
                            <tr>
                                <th scope="row">{{ $item->ten_doi }}</th>
                                <td><img src="{{url('img/red-heart_2764-fe0f.png')}}" style="width: 30px; height: 30px"
                                        class="mr-3" />0
                                </td>
                                <td><img src="{{url('img/images-removebg-preview.png')}}" style="width: 30px; height: 30px"
                                        class="mr-3" />0</td>
                                <td><img src="{{url('img/grinning-face_1f600.png')}}" style="width: 30px; height: 30px"
                                        class="mr-3" />0
                                </td>
                                <td><img src="{{url('img/face-with-open-mouth_1f62e.png')}}" style="width: 30px; height: 30px"
                                        class="mr-3" />0</td>
                                <td><img src="{{url('img/thumbs-up_1f44d.png')}}" style="width: 30px; height: 30px"
                                        class="mr-3" />0
                                </td>
                                <td>Tổng điểm: 0</td>
                            </tr>
                        @endforeach
                    @endif

                </tbody>
            </table>
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


        function selectImage(image, id) {
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
