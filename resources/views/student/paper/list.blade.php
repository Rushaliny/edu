<x-student-layout>

    @section('main-content')
            <!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h3 class="page-title">Past Papers</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="ti-home"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Past Papers</li>
								<li class="breadcrumb-item active" aria-current="page">List</li>
							</ol>
						</nav>
					</div>
				</div>

			</div>
		</div>

        <br>

		<!-- Main content -->
		<section class="content">
		  <!-- END Card with image -->

		  <!-- START Card With Image -->
		  <div class="row fx-element-overlay">

            @if ($papers->count())
                @foreach ($papers as $paper )
                <div class="col-md-12 col-lg-4">
                    <div class="box">
                      <div class="fx-card-item">
                          <div class="fx-card-avatar fx-overlay-1"> <img src="{{ url("$paper->image") }}" alt="user" style="    width: 100%;
                            height: 300px;">
                              <div class="fx-overlay">
                                  <ul class="fx-info">
                                      <li><a class="btn default btn-outline" href="{{ route('student.paper.exam',$paper->id) }}">Choose</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="fx-card-content">
                              <h3 class="box-title">{{ $paper->paper_name }}</h3> <small>{{ $paper->subject }}</small>
                              <br> </div>
                      </div>
                    </div>
                    <!-- /.box -->
                  </div>
                @endforeach
            @endif


		  </div>
		  <!-- /.row -->
		  <!-- END Card with image -->

		</section>
		<!-- /.content -->
    @endsection

    @push('script')
    	<!-- Vendor JS -->
        <script src="{{ asset('admin_assets/assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('admin_assets/assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js') }}"></script>
    @endpush
</x-student-layout>
