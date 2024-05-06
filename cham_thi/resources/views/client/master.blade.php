<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />

    <title>FPOLY Hải Phòng</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{url('css/styles.css')}}" />
  </head>
  <body>
    <main>
      <nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong">
        <div class="container">
          <a class="navbar-brand mx-auto" href="#">
            <img src="{{url('img/logo.png')}}" alt="" style="width: 200px" />
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
              <div class="col-lg-12">
                <button
                  class="btn btn-hover color-4"
                  onclick="displayTeam('team-1')"
                >
                  Đội 1
                </button>
              </div>

              <div class="col-lg-12 mt-3">
                <button
                  class="btn btn-hover color-4"
                  onclick="displayTeam('team-2')"
                >
                  Đội 2
                </button>
              </div>

              <div class="col-lg-12 mt-3">
                <button
                  class="btn btn-hover color-4"
                  onclick="displayTeam('team-3')"
                >
                  Đội 3
                </button>
              </div>

              <div class="col-lg-12 mt-3">
                <button
                  class="btn btn-hover color-4"
                  onclick="displayTeam('team-4')"
                >
                  Đội 4
                </button>
              </div>

              <div class="col-lg-12 mt-3">
                <button
                  class="btn btn-hover color-4"
                  onclick="displayTeam('team-5')"
                >
                  Đội 5
                </button>
              </div>
            </div>
          </div>

          <div class="col-lg-9 col-md-9">
            <div class="card-box d-block" id="team-1">
              <div class="front">
                <img src="{{url('img/profile-image.jpg')}}" />
                <div class="details">
                  <h2>Team CNTT 1</h2>
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
                                <div
                                  class="emoji d-flex justify-content-around mb-2"
                                >
                                  <div href="#" class="icon">
                                    <span>🥰</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>💖</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>👍</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>🤩 </span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>😥</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
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
                                <div
                                  class="emoji d-flex justify-content-around mb-2"
                                >
                                  <div href="#" class="icon">
                                    <span>🥰</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>💖</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>👍</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>🤩 </span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>😥</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                </div>
                              </td>
                              <td>Team CNTT 1</td>
                              <td>100</td>
                            </tr>

                            <tr class="">
                              <td>
                                <h4 class="text-center mb-3">Phạm Tuấn Anh</h4>
                                <div
                                  class="emoji d-flex justify-content-around mb-2"
                                >
                                  <div href="#" class="icon">
                                    <span>🥰</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>💖</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>👍</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>🤩 </span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>😥</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
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

            <div class="card-box d-none" id="team-2">
              <div class="front">
                <img src="{{url('img/profile-image.jpg')}}" />
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
                                <div
                                  class="emoji d-flex justify-content-around mb-2"
                                >
                                  <div href="#" class="icon">
                                    <span>🥰</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>💖</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>👍</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>🤩 </span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>😥</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
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
                                <div
                                  class="emoji d-flex justify-content-around mb-2"
                                >
                                  <div href="#" class="icon">
                                    <span>🥰</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>💖</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>👍</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>🤩 </span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>😥</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                </div>
                              </td>
                              <td>Team CNTT 1</td>
                              <td>100</td>
                            </tr>

                            <tr class="">
                              <td>
                                <h4 class="text-center mb-3">Phạm Tuấn Anh</h4>
                                <div
                                  class="emoji d-flex justify-content-around mb-2"
                                >
                                  <div href="#" class="icon">
                                    <span>🥰</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>💖</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>👍</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>🤩 </span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>😥</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
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
                <img src="{{url('img/profile-image.jpg')}}" />
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
                                <div
                                  class="emoji d-flex justify-content-around mb-2"
                                >
                                  <div href="#" class="icon">
                                    <span>🥰</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>💖</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>👍</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>🤩 </span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>😥</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
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
                                <div
                                  class="emoji d-flex justify-content-around mb-2"
                                >
                                  <div href="#" class="icon">
                                    <span>🥰</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>💖</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>👍</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>🤩 </span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>😥</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                </div>
                              </td>
                              <td>Team CNTT 1</td>
                              <td>100</td>
                            </tr>

                            <tr class="">
                              <td>
                                <h4 class="text-center mb-3">Phạm Tuấn Anh</h4>
                                <div
                                  class="emoji d-flex justify-content-around mb-2"
                                >
                                  <div href="#" class="icon">
                                    <span>🥰</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>💖</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>👍</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>🤩 </span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>😥</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
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
                <img src="{{url('img/profile-image.jpg')}}" />
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
                                <div
                                  class="emoji d-flex justify-content-around mb-2"
                                >
                                  <div href="#" class="icon">
                                    <span>🥰</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>💖</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>👍</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>🤩 </span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>😥</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
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
                                <div
                                  class="emoji d-flex justify-content-around mb-2"
                                >
                                  <div href="#" class="icon">
                                    <span>🥰</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>💖</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>👍</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>🤩 </span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>😥</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                </div>
                              </td>
                              <td>Team CNTT 1</td>
                              <td>100</td>
                            </tr>

                            <tr class="">
                              <td>
                                <h4 class="text-center mb-3">Phạm Tuấn Anh</h4>
                                <div
                                  class="emoji d-flex justify-content-around mb-2"
                                >
                                  <div href="#" class="icon">
                                    <span>🥰</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>💖</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>👍</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>🤩 </span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>😥</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
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
                <img src="{{url('img/profile-image.jpg')}}" />
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
                                <div
                                  class="emoji d-flex justify-content-around mb-2"
                                >
                                  <div href="#" class="icon">
                                    <span>🥰</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>💖</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>👍</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>🤩 </span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>😥</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
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
                                <div
                                  class="emoji d-flex justify-content-around mb-2"
                                >
                                  <div href="#" class="icon">
                                    <span>🥰</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>💖</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>👍</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>🤩 </span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>😥</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                </div>
                              </td>
                              <td>Team CNTT 1</td>
                              <td>100</td>
                            </tr>

                            <tr class="">
                              <td>
                                <h4 class="text-center mb-3">Phạm Tuấn Anh</h4>
                                <div
                                  class="emoji d-flex justify-content-around mb-2"
                                >
                                  <div href="#" class="icon">
                                    <span>🥰</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>💖</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>👍</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>🤩 </span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
                                  </div>
                                  <div href="#" class="icon">
                                    <span>😥</span>
                                    <span
                                      class="notification-badge badge badge-danger"
                                      >2</span
                                    >
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
          </div>
        </div>
      </div>
    </main>
    <script src="{{url('img/https://code')}}.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="{{url('img/https://cdn')}}.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
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
    <script src="{{url('img/main.js"></')}}script>
  </body>
</html>
