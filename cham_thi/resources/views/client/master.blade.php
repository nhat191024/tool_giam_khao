<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>

    <title>FPOLY Hải Phòng</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ url('css/styles.css') }}"/>
</head>

<body>
<main>
    <nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong">
        <div class="container">
            <a class="navbar-brand mx-auto" href="#">
                <img src="{{ url('img/logo.png') }}" alt="" style="width: 200px"/>
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
                            <a href="{{ route('client.show', ['id' => $x->id]) }}" class="btn btn-hover color-4"
                               onclick="displayTeam('team-{{ $key + 1 }}')">
                                {{ $x->ten_doi }}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-9 col-md-9">

                <div class="card-box d-block" id="team-2">
                    <div class="front">
                        <img src="{{ url('img/') . '/' . $tenDoi['hinh_anh'] }}"/>
                        <div class="details">
                            <h2>{{ $tenDoi['ten_doi'] }}</h2>
                        </div>
                        <div class="emoji d-flex justify-content-around mb-2">
                            <div href="#" class="icon">
                                <img src="{{ url('img/red-heart_2764-fe0f.png') }}"
                                     style="width: 50px; height: 50px"/>
                                <span class="notification-badge badge badge-danger"
                                      id="so-tim">{{ $tongTim->sotim }}</span>
                            </div>
                            <div href="#" class="icon">
                                <img src="{{ url('img/images-removebg-preview.png') }}"
                                     style="width: 50px; height: 50px"/>
                                <span class="notification-badge badge badge-danger"
                                      id="so-thuong">{{ $tongTim->sothuong }}</span>
                            </div>
                            <div href="#" class="icon">
                                <img src="{{ url('img/grinning-face_1f600.png') }}"
                                     style="width: 50px; height: 50px"/>
                                <span class="notification-badge badge badge-danger"
                                      id="so-haha">{{ $tongTim->sohaha }}</span>
                            </div>
                            <div href="#" class="icon">
                                <img src="{{ url('img/face-with-open-mouth_1f62e.png') }}"
                                     style="width: 50px; height: 50px"/>
                                <span class="notification-badge badge badge-danger"
                                      id="so-wow">{{ $tongTim->sowow }}</span>
                            </div>
                            <div href="#" class="icon">
                                <img src="{{ url('img/thumbs-up_1f44d.png') }}"
                                     style="width: 50px; height: 50px"/>
                                <span class="notification-badge badge badge-danger"
                                      id="so-like">{{ $tongTim->solike }}</span>
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
                                            @foreach ($diem as $item)
                                                <tr class="" id="giam-khao-{{ $item->gk_id }}">
                                                    <td>
                                                        <h4 class="text-center mb-3">{{ $item->ho_ten }}</h4>
                                                        <div class="emoji d-flex justify-content-around mb-2">
                                                            <div href="#" class="icon">
                                                                <img src="{{ url('img/red-heart_2764-fe0f.png') }}"
                                                                     style="width: 28px; height: 28px"/>
                                                                <span
                                                                    class="notification-badge badge badge-danger sotim">{{ $item->sotim }}</span>
                                                            </div>
                                                            <div href="#" class="icon">
                                                                <img src="{{ url('img/images-removebg-preview.png') }}"
                                                                     style="width: 28px; height: 28px"/>
                                                                <span
                                                                    class="notification-badge badge badge-danger sothuong">{{ $item->sothuong }}</span>
                                                            </div>
                                                            <div href="#" class="icon">
                                                                <img src="{{ url('img/grinning-face_1f600.png') }}"
                                                                     style="width: 28px; height: 28px"/>
                                                                <span
                                                                    class="notification-badge badge badge-danger sohaha">{{ $item->sohaha }}</span>
                                                            </div>
                                                            <div href="#" class="icon">
                                                                <img
                                                                    src="{{ url('img/face-with-open-mouth_1f62e.png') }}"
                                                                    style="width: 28px; height: 28px"/>
                                                                <span
                                                                    class="notification-badge badge badge-danger sowow">{{ $item->sowow }}</span>
                                                            </div>
                                                            <div href="#" class="icon">
                                                                <img src="{{ url('img/thumbs-up_1f44d.png') }}"
                                                                     style="width: 28px; height: 28px"/>
                                                                <span
                                                                    class="notification-badge badge badge-danger solike">{{ $item->solike }}</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{ $item->ten_doi }}</td>
                                                    <td class="tongso">{{ $item->tongso }}</td>
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
            </div>
        </div>
    </div>
</main>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ mix('dist/main.js') }}"></script>
<script type="text/javascript">

    const id = @json(request()->id);

    window.Echo.channel(`reacted.${id}`)
        .listen('Reacted', (e) => {
            // console.log(e);

            const table = $('.table.table-striped tbody')

            const {
                diem,
                tongTim
            } = e.data;

            $('#so-tim').text(tongTim.sotim);
            $('#so-thuong').text(tongTim.sothuong);
            $('#so-haha').text(tongTim.sohaha);
            $('#so-wow').text(tongTim.sowow);
            $('#so-like').text(tongTim.solike);

            diem.forEach(item => {
                const giamKhaoTr = $(`#giam-khao-${item.gk_id}`);

                if (giamKhaoTr.length === 0) {
                    table.append(`
                        <tr class="" id="giam-khao-${item.gk_id}">
                            <td>
                                <h4 class="text-center mb-3">${item.ho_ten}</h4>
                                <div class="emoji d-flex justify-content-around mb-2">
                                    <div href="#" class="icon">
                                        <img src="{{ url('img/red-heart_2764-fe0f.png') }}"
                                             style="width: 28px; height: 28px"/>
                                        <span
                                            class="notification-badge badge badge-danger sotim">${item.sotim}</span>
                                    </div>
                                    <div href="#" class="icon">
                                        <img src="{{ url('img/images-removebg-preview.png') }}"
                                             style="width: 28px; height: 28px"/>
                                        <span
                                            class="notification-badge badge badge-danger sothuong">${item.sothuong}</span>
                                    </div>
                                    <div href="#" class="icon">
                                        <img src="{{ url('img/grinning-face_1f600.png') }}"
                                             style="width: 28px; height: 28px"/>
                                        <span
                                            class="notification-badge badge badge-danger sohaha">${item.sohaha}</span>
                                    </div>
                                    <div href="#" class="icon">
                                        <img
                                            src="{{ url('img/face-with-open-mouth_1f62e.png') }}"
                                            style="width: 28px; height: 28px"/>
                                        <span
                                            class="notification-badge badge badge-danger sowow">${item.sowow}</span>
                                    </div>
                                    <div href="#" class="icon">
                                        <img src="{{ url('img/thumbs-up_1f44d.png') }}"
                                             style="width: 28px; height: 28px"/>
                                        <span
                                            class="notification-badge badge badge-danger solike">${item.solike}</span>
                                    </div>
                                </div>
                            </td>
                            <td>${item.ten_doi}</td>
                            <td class="tongso">${item.tongso}</td>
                        </tr>
                    `);
                } else {
                    giamKhaoTr.find('.sotim').text(item.sotim);
                    giamKhaoTr.find('.sothuong').text(item.sothuong);
                    giamKhaoTr.find('.sohaha').text(item.sohaha);
                    giamKhaoTr.find('.sowow').text(item.sowow);
                    giamKhaoTr.find('.solike').text(item.solike);
                    giamKhaoTr.find('.tongso').text(item.tongso);
                }
            });
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
