@extends('master')
@section('isi')
    <div class="container-fluid pb-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"><span>Dashboard</span></li>
            </ol>
        </nav>
    </div>

    <div class="row g-4 mb-4">
        <div class="col-sm-6 col-xl-3">
            <div class="card text-white bg-primary">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                    <div>
                        <div class="fs-4 fw-semibold">
                            26K
                            <span class="fs-6 fw-normal">
                                (-12.4%
                                <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="var(--ci-primary-color, currentcolor)"
                                        d="m367.997 338.75-95.998 95.997V17.503h-32v417.242l-95.996-95.995-22.627 22.627L256 496l134.624-134.623z"
                                        class="ci-primary" />
                                </svg>
                                )
                            </span>
                        </div>
                        <div>Users</div>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="var(--ci-primary-color, currentcolor)"
                                    d="M256 144a64 64 0 1 0-64-64 64.07 64.07 0 0 0 64 64m0-96a32 32 0 1 1-32 32 32.036 32.036 0 0 1 32-32m0 320a64 64 0 1 0 64 64 64.07 64.07 0 0 0-64-64m0 96a32 32 0 1 1 32-32 32.036 32.036 0 0 1-32 32m0-272a64 64 0 1 0 64 64 64.07 64.07 0 0 0-64-64m0 96a32 32 0 1 1 32-32 32.036 32.036 0 0 1-32 32"
                                    class="ci-primary" />
                            </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <div class="c-chart-wrapper mt-3 mx-3" style="height: 70px">
                    <canvas class="chart" id="card-chart1" height="70"></canvas>
                </div>
            </div>
        </div>
        <!-- /.col-->
        <div class="col-sm-6 col-xl-3">
            <div class="card text-white bg-info">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                    <div>
                        <div class="fs-4 fw-semibold">
                            $6.200
                            <span class="fs-6 fw-normal">
                                (40.9%
                                <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="var(--ci-primary-color, currentcolor)"
                                        d="M390.624 150.625 256 16 121.376 150.625l22.628 22.627 95.997-95.998v417.982h32V77.257l95.995 95.995z"
                                        class="ci-primary" />
                                </svg>
                                )
                            </span>
                        </div>
                        <div>Income</div>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="var(--ci-primary-color, currentcolor)"
                                    d="M256 144a64 64 0 1 0-64-64 64.07 64.07 0 0 0 64 64m0-96a32 32 0 1 1-32 32 32.036 32.036 0 0 1 32-32m0 320a64 64 0 1 0 64 64 64.07 64.07 0 0 0-64-64m0 96a32 32 0 1 1 32-32 32.036 32.036 0 0 1-32 32m0-272a64 64 0 1 0 64 64 64.07 64.07 0 0 0-64-64m0 96a32 32 0 1 1 32-32 32.036 32.036 0 0 1-32 32"
                                    class="ci-primary" />
                            </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <div class="c-chart-wrapper mt-3 mx-3" style="height: 70px">
                    <canvas class="chart" id="card-chart2" height="70"></canvas>
                </div>
            </div>
        </div>
        <!-- /.col-->
        <div class="col-sm-6 col-xl-3">
            <div class="card text-white bg-warning">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                    <div>
                        <div class="fs-4 fw-semibold">
                            2.49%
                            <span class="fs-6 fw-normal">
                                (84.7%
                                <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="var(--ci-primary-color, currentcolor)"
                                        d="M390.624 150.625 256 16 121.376 150.625l22.628 22.627 95.997-95.998v417.982h32V77.257l95.995 95.995z"
                                        class="ci-primary" />
                                </svg>
                                )
                            </span>
                        </div>
                        <div>Conversion Rate</div>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="var(--ci-primary-color, currentcolor)"
                                    d="M256 144a64 64 0 1 0-64-64 64.07 64.07 0 0 0 64 64m0-96a32 32 0 1 1-32 32 32.036 32.036 0 0 1 32-32m0 320a64 64 0 1 0 64 64 64.07 64.07 0 0 0-64-64m0 96a32 32 0 1 1 32-32 32.036 32.036 0 0 1-32 32m0-272a64 64 0 1 0 64 64 64.07 64.07 0 0 0-64-64m0 96a32 32 0 1 1 32-32 32.036 32.036 0 0 1-32 32"
                                    class="ci-primary" />
                            </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <div class="c-chart-wrapper mt-3" style="height: 70px">
                    <canvas class="chart" id="card-chart3" height="70"></canvas>
                </div>
            </div>
        </div>
        <!-- /.col-->
        <div class="col-sm-6 col-xl-3">
            <div class="card text-white bg-danger">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                    <div>
                        <div class="fs-4 fw-semibold">
                            44K
                            <span class="fs-6 fw-normal">
                                (-23.6%
                                <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="var(--ci-primary-color, currentcolor)"
                                        d="m367.997 338.75-95.998 95.997V17.503h-32v417.242l-95.996-95.995-22.627 22.627L256 496l134.624-134.623z"
                                        class="ci-primary" />
                                </svg>
                                )
                            </span>
                        </div>
                        <div>Sessions</div>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="var(--ci-primary-color, currentcolor)"
                                    d="M256 144a64 64 0 1 0-64-64 64.07 64.07 0 0 0 64 64m0-96a32 32 0 1 1-32 32 32.036 32.036 0 0 1 32-32m0 320a64 64 0 1 0 64 64 64.07 64.07 0 0 0-64-64m0 96a32 32 0 1 1 32-32 32.036 32.036 0 0 1-32 32m0-272a64 64 0 1 0 64 64 64.07 64.07 0 0 0-64-64m0 96a32 32 0 1 1 32-32 32.036 32.036 0 0 1-32 32"
                                    class="ci-primary" />
                            </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <div class="c-chart-wrapper mt-3 mx-3" style="height: 70px">
                    <canvas class="chart" id="card-chart4" height="70"></canvas>
                </div>
            </div>
        </div>
        <!-- /.col-->
    </div>
    <!-- /.card-->
    <div class="row g-4 mb-4">
        <div class="col-sm-6 col-lg-4">
            <div class="card" style="--cui-card-cap-bg: #3b5998">
                <div class="card-header position-relative d-flex justify-content-center align-items-center">
                    <svg class="icon icon-3xl text-white my-4" xmlns="http://www.w3.org/2000/svg" width="32"
                        height="32" viewBox="0 0 32 32">
                        <path
                            d="m23.446 18 .889-5.791h-5.557V8.451c0-1.584.776-3.129 3.265-3.129h2.526V.392S22.277.001 20.085.001c-4.576 0-7.567 2.774-7.567 7.795v4.414H7.431v5.791h5.087v14h6.26v-14z" />
                    </svg>
                </div>
                <div class="card-body row text-center">
                    <div class="col">
                        <div class="fs-5 fw-semibold">89k</div>
                        <div class="text-uppercase text-body-secondary small">friends</div>
                    </div>
                    <div class="vr"></div>
                    <div class="col">
                        <div class="fs-5 fw-semibold">459</div>
                        <div class="text-uppercase text-body-secondary small">feeds</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col-->
        <div class="col-sm-6 col-lg-4">
            <div class="card" style="--cui-card-cap-bg: #ff0132">
                <div class="card-header position-relative d-flex justify-content-center align-items-center">
                    <svg class="icon icon-3xl text-white my-4" fill-rule="evenodd" clip-rule="evenodd"
                        image-rendering="optimizeQuality" shape-rendering="geometricPrecision"
                        text-rendering="geometricPrecision" viewbox="0 0 512 360.726">
                        <path fill="#fff"
                            d="M456.035 10.769c22.031 5.926 39.377 23.386 45.265 45.56C512 96.516 512 180.363 512 180.363s0 83.846-10.7 124.037c-5.888 22.17-23.234 39.631-45.265 45.559-39.928 10.767-200.034 10.767-200.034 10.767s-160.107 0-200.035-10.767C33.937 344.031 16.587 326.57 10.7 304.4 0 264.209 0 180.363 0 180.363S0 96.516 10.7 56.329c5.887-22.174 23.237-39.634 45.266-45.56C95.894 0 256.001 0 256.001 0s160.106 0 200.034 10.769m-252.398 245.72 133.818-76.122-133.818-76.131z">
                        </path>
                    </svg>
                </div>
                <div class="card-body row text-center">
                    <div class="col">
                        <div class="fs-5 fw-semibold">973k</div>
                        <div class="text-uppercase text-body-secondary small">subscribers</div>
                    </div>
                    <div class="vr"></div>
                    <div class="col">
                        <div class="fs-5 fw-semibold">1.792</div>
                        <div class="text-uppercase text-body-secondary small">new comments</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col-->
        <div class="col-sm-6 col-lg-4">
            <div class="card" style="--cui-card-cap-bg: #4875b4">
                <div class="card-header position-relative d-flex justify-content-center align-items-center">
                    <svg class="icon icon-3xl text-white my-4" xmlns="http://www.w3.org/2000/svg" width="32"
                        height="32" viewBox="0 0 32 32">
                        <path
                            d="M27.26 27.271h-4.733v-7.427c0-1.771-.037-4.047-2.475-4.047-2.468 0-2.844 1.921-2.844 3.916v7.557h-4.739V11.999h4.552v2.083h.061c.636-1.203 2.183-2.468 4.491-2.468 4.801 0 5.692 3.161 5.692 7.271v8.385zM7.115 9.912a2.75 2.75 0 0 1-2.751-2.756 2.753 2.753 0 1 1 2.751 2.756m2.374 17.359H4.74V12h4.749zM29.636 0H2.36C1.057 0 0 1.031 0 2.307v27.387c0 1.276 1.057 2.307 2.36 2.307h27.271c1.301 0 2.369-1.031 2.369-2.307V2.307C32 1.031 30.932 0 29.631 0z" />
                    </svg>
                </div>
                <div class="card-body row text-center">
                    <div class="col">
                        <div class="fs-5 fw-semibold">500+</div>
                        <div class="text-uppercase text-body-secondary small">contacts</div>
                    </div>
                    <div class="vr"></div>
                    <div class="col">
                        <div class="fs-5 fw-semibold">292</div>
                        <div class="text-uppercase text-body-secondary small">feeds</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
