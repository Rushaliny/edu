<x-app-layoute>

    @section('main-content')
        <!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h3 class="page-title">Profile</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Home</li>
								<li class="breadcrumb-item active" aria-current="page">Profile</li>
							</ol>
						</nav>
					</div>
				</div>

			</div>
		</div>

		<!-- Main content -->
		<section class="content">

		  <div class="row">
            <div class="col-12 col-lg-5 col-xl-4">
                <div class="box box-widget widget-user">
                   <!-- Add the bg color to the header using any of the bg-* classes -->
                   <div class="widget-user-header bg-img bbsr-0 bber-0" style="background: url('{{ asset('admin_assets/images/gallery/full/10.jpg') }}') center center;" data-overlay="5">
                     <h3 class="widget-user-username text-white">{{ $user->full_name }}</h3>
                     <h6 class="widget-user-desc text-white">Super Admin</h6>
                   </div>
                   <div class="widget-user-image">
                     <img class="rounded-circle" src="{{ asset('admin_assets/images/user3-128x128.jpg') }}" alt="User Avatar">
                   </div>
                   <div class="box-footer">
                     <div class="row">
                        <div class="col-12">
                            <div>
                                <p>Email :<span class="text-gray ps-10">{{ $user->email }}</span> </p>
                                <p>Phone :<span class="text-gray ps-10">{{ $user->par_number }}</span></p>
                            </div>
                        </div>
                       <!-- /.col -->
                     </div>
                     <!-- /.row -->
                   </div>
                 </div>
             </div>
			<div class="col-12 col-lg-7 col-xl-8">

			  <div class="nav-tabs-custom">
				<ul class="nav nav-tabs">
				  <li><a href="#settings" class="active" data-bs-toggle="tab">Change Profile</a></li>
				</ul>

				<div class="tab-content">
				  <div class=" active tab-pane" id="settings">
					<div class="box no-shadow">
						<form class="form-horizontal form-element col-12" method="post" action="{{ route('admin.profile.update') }}">
                            @csrf
						  <div class="form-group row">
							<label for="inputName" class="col-sm-2 form-label">Name</label>

							<div class="col-sm-10">
							  <input type="text" name="full_name" class="form-control" id="inputName" value="{{ $user->full_name }}" placeholder="Name">
							</div>
						  </div>
						  <div class="form-group row">
							<label for="inputEmail" class="col-sm-2 form-label">Email</label>

							<div class="col-sm-10">
							  <input type="email" name="email" class="form-control" id="inputEmail" value="{{ $user->email }}" placeholder="Email">
							</div>
						  </div>
						  <div class="form-group row">
							<label for="inputPhone" class="col-sm-2 form-label">Phone</label>

							<div class="col-sm-10">
							  <input type="tel" name="par_number" class="form-control" id="inputPhone" value="{{ $user->par_number }}" placeholder="Phone">
							</div>
						  </div>

						  <div class="form-group row">
							<div class="ms-auto col-sm-10">
							  <button type="submit" class="btn btn-success">Submit</button>
							</div>
						  </div>
						</form>

                        <div class="form-group row">
							<div class="ms-auto col-sm-10">
							  <div class="checkbox">
								<input type="checkbox" id="basic_checkbox_1" >
								<label for="basic_checkbox_1"> Change my password</label>
							  </div>
							</div>
						</div>
						<form class="form-horizontal form-element col-12 show-password d-none" method="post" action="{{ route('admin.profile.password') }}">
                            @csrf
						  <div class="form-group row">
							<label for="inputName" class="col-sm-2 form-label">Old Password</label>

							<div class="col-sm-6">
							  <input type="password" name="old_password" value="{{ old('old_password') }}" required class="form-control" id="inputName" >
                              @error('old_password') <span class="text-danger">{{ $message }}</span> @enderror

                            </div>
						  </div>
						  <div class="form-group row">
							<label for="inputnew" class="col-sm-2 form-label">New Password</label>

							<div class="col-sm-6">
							  <input type="password" name="password" value="{{ old('password') }}" required class="form-control" id="inputnew" >
                              @error('password') <span class="text-danger">{{ $message }}</span> @enderror
							</div>
						  </div>
						  <div class="form-group row">
							<label for="inputPhone" class="col-sm-2 form-label">Confirm Password</label>

							<div class="col-sm-6">
							  <input type="password" name="password_confirmation" class="form-control"  required id="inputPhone" value="{{old('password_confirmation')}}" >
                              @error('password_confirmation') <span class="text-danger">{{ $message }}</span> @enderror
							</div>
						  </div>

						  <div class="form-group row">
							<div class="ms-auto col-sm-10">
							  <button type="submit" class="btn btn-success">Submit</button>
							</div>
						  </div>
						</form>
					</div>
				  </div>
				  <!-- /.tab-pane -->
				</div>
				<!-- /.tab-content -->
			  </div>
			  <!-- /.nav-tabs-custom -->
			</div>
			<!-- /.col -->



		  </div>
		  <!-- /.row -->

		</section>
		<!-- /.content -->
    @endsection

	@push('script')
		<script>
            $(document).on('click','#basic_checkbox_1',function(e){
                        $('#basic_checkbox_1:checked').each(function(){
                            $('.show-password').removeClass('d-none');
                        });
                        $('#basic_checkbox_1:checkbox:not(:checked)').each(function(){
                            $('.show-password').addClass('d-none');
                        });
                    });
		</script>
	@endpush

</x-app-layoute>
