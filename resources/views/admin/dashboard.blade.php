<x-app-layoute>


    @section('main-content')
    <section class="content">
        <div class="row">
            <div class="col-xl-8 col-12">
                <div class="box bg-primary-light">
                    <div class="box-body d-flex px-0">
                        <div class="flex-grow-1 p-30 flex-grow-1 bg-img dask-bg bg-none-md" style="background-position: right bottom; background-size: auto 100%; background-image: url(https://eduadmin-template.multipurposethemes.com/bs5/images/svg-icon/color-svg/custom-1.svg)">
                            <div class="row">
                                <div class="col-12 col-xl-7">
                                    <h2>Welcome back, <strong>{{ auth()->user()->full_name }}!</strong></h2>

                                    @if($new_users->count()>0)
                                    <p class="text-dark my-10 fs-16">
                                        <strong class="text-warning">{{ $new_users->count() }}</strong> New members joined this month.
                                    </p>
                                    <p class="text-dark my-10 fs-16">
                                        Success rate is <strong class="text-warning">very good!</strong>
                                    </p>
                                    @endif
                                </div>
                                <div class="col-12 col-xl-5"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <a href="#" class="box pull-up">
                            <div class="box-body">
                                <div class="d-flex align-items-center">
                                    <div class="icon bg-primary-light rounded-circle w-60 h-60 text-center l-h-80">
                                        <span class="fs-30 icon-User"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                                    </div>
                                    <div class="ms-15">
                                        <h5 class="mb-0">Students</h5>
                                        <p class="text-fade fs-12 mb-0">Total Students</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-20">
                                    <div class="w-p70">
                                        <div class="progress progress-sm mb-0">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div>{{ $users->count() }}</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-12">
                        <a href="#" class="box pull-up">
                            <div class="box-body">
                                <div class="d-flex align-items-center">
                                    <div class="icon bg-primary-light rounded-circle w-60 h-60 text-center l-h-80">
                                        <span class="fs-30 icon-Article"><span class="path1"></span><span class="path2"></span></span>
                                    </div>
                                    <div class="ms-15">
                                        <h5 class="mb-0">Papers</h5>
                                        <p class="text-fade fs-12 mb-0">Total past papers</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-20">
                                    <div class="w-p70">
                                        <div class="progress progress-sm mb-0">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div>{{ $papers }}</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-12">
                        <a href="#" class="box pull-up">
                            <div class="box-body">
                                <div class="d-flex align-items-center">
                                    <div class="icon bg-primary-light rounded-circle w-60 h-60 text-center l-h-80">
                                        <span class="fs-30 icon-Book"><span class="path1"></span><span class="path2"></span></span>
                                    </div>
                                    <div class="ms-15">
                                        <h5 class="mb-0">Subjects</h5>
                                        <p class="text-fade fs-12 mb-0">Total subjects</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-20">
                                    <div class="w-p70">
                                        <div class="progress progress-sm mb-0">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div>1</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-xl-6">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Newly Enrolled Students </h4>
                                <ul class="box-controls pull-right d-md-flex d-none">
                                <li class="dropdown">
                                    <button class="btn btn-primary px-10 " data-bs-toggle="dropdown" href="#">Date</button>
                                </li>
                                </ul>
                            </div>
                            <div class="box-body">
                                @if ($users->count())

                                @foreach ($users->take(5) as $user)
                                <div class="d-flex align-items-center mb-30 gap-items-3 justify-content-between">
                                    <div class="d-flex align-items-center fw-500">
                                        <div class="me-15 w-50 d-table">
                                            <img src="{{ asset('admin_assets/images/avatar/avatar-1.png') }}" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
                                        </div>
                                        <div>
                                            <a href="#" class="text-dark hover-primary mb-5 d-block fs-16">{{ $user->full_name }}</a>
                                            <div class="w-200">
                                                <div class="progress progress-sm mb-0">
                                                    <div class="progress-bar progress-bar-primary progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <h5 class="fw-600 mb-0 badge badge-pill badge-primary">{{ date('d,M', strtotime(strval( $user->created_at ))) }}</h5>
                                    </div>
                                </div>
                                @endforeach

                                @else
                                <div class="d-flex align-items-center mb-30 gap-items-3 justify-content-between">
                                    <div class="d-flex align-items-center fw-500">

                                        <div>
                                            <a href="#" class="text-dark hover-primary mb-5 d-block fs-16">🙁 No Data Fount</a>

                                        </div>
                                    </div>

                                </div>
                                @endif


                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="box">
                            <div class="box-body">
                                <h4 class="box-title">Line Chart</h4>
                                <div id="line-chart"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-4 col-12">
                <div class="box">
                    <div class="box-body">
                        <div class="box no-shadow mb-0">
                            <div class="box-body px-0 pt-0">
                                <div id="calendar" class="dask evt-cal min-h-400"></div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>

        </div>
    </section>
    @endsection

    @push('script')
    	<!-- Vendor JS -->

	<script src="{{ asset('admin_assets/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>
	<script src="{{ asset('admin_assets/assets/vendor_components/moment/min/moment.min.js') }}"></script>
	<script src="{{ asset('admin_assets/assets/vendor_components/fullcalendar/fullcalendar.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/vendor_components/raphael/raphael.min.js') }}"></script>


	<!-- EduAdmin App -->
	<script src="{{ asset('admin_assets/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('admin_assets/js/pages/c3-line.js') }}"></script>
	<script src="{{ asset('admin_assets/js/pages/calendar.js') }}"></script>

    @endpush
</x-app-layoute>
