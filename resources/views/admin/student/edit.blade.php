<x-app-layoute>


    @section('main-content')
   		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h3 class="page-title">Create Paper</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="ti-home"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">PAPERS & QUESTIONS</li>
								<li class="breadcrumb-item active" aria-current="page">Create Paper</li>
							</ol>
						</nav>
					</div>
				</div>

			</div>
		</div>

		<!-- Main content -->
		<section class="content">

			<div class="row">
			  <div class="col-12">
				<div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">About Past Paper</h4>
					</div>
				  <div class="box-body">
					<form action="{{ route('admin.student.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
						<div class="form-body">
                            <input type="hidden" name="id" value="{{ $user->id }}">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									  <label class="fw-700 fs-16 form-label">ID</label>
									  <input type="text" name="reg_no"  value="{{ $user->reg_no }}" readonly required class="form-control" >
									</div>
								</div>
								<!--/span-->
                                <div class="col-md-6">
									<div class="form-group">
									  <label class="fw-700 fs-16 form-label">Full Name</label>
									  <input type="text" name="full_name"  value="{{ $user->full_name }}" placeholder="Full Name"  required class="form-control" >
									</div>
								</div>
								<!--/span-->
							</div>
							<!--/row-->
                            <div class="row">
                                <div class="col-md-6">
									<div class="form-group">
									  <label class="fw-700 fs-16 form-label">Last Name</label>
									  <input type="text" name="last_name"  value="{{ $user->last_name }}" required placeholder="Last Name" required class="form-control" >
									</div>
								</div>
								<!--/span-->
                                <div class="col-md-6">
									<div class="form-group">
									  <label class="fw-700 fs-16 form-label">School Name</label>
									  <input type="text" name="school_name"  value="{{ $user->school_name }}" placeholder="School Name"  required class="form-control" >
									</div>
								</div>
								<!--/span-->
                            </div>
							<!--/row-->
                            <div class="row">
                                <div class="col-md-6">
									<div class="form-group">
									  <label class="fw-700 fs-16 form-label">Email</label>
									  <input type="text" name="email"  value="{{ $user->email }}" required placeholder="Email" required class="form-control" >
									</div>
								</div>
								<!--/span-->
                                <div class="col-md-6">
									<div class="form-group">
									  <label class="fw-700 fs-16 form-label">Grade</label>
									  <input type="text" name="grade"  value="{{ $user->grade }}" placeholder="Grade"  required class="form-control" >
									</div>
								</div>
								<!--/span-->
                            </div>
							<!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="fw-700 fs-16 form-label">Provical</label>
                                        <select class="form-select" required name="provical" data-placeholder="Choose a Provical" tabindex="1">
                                            <option selected  value="{{ $user->provical }}">{{ $user->provical }}</option>
                                            <option value="Central">Central</option>
                                            <option value="Uva">Uva</option>
                                            <option value="Southern">Southern</option>
                                            <option value="Sabaragamuwa">Sabaragamuwa</option>
                                            <option value="Northern">Northern</option>
                                            <option value="North Western">North Western</option>
                                            <option value="North Central">North Central</option>
                                            <option value="Eastern">Eastern</option>
                                        </select>
                                    </div>
                                </div>
								<!--/span-->
                                <div class="col-md-6">
									<div class="form-group">
									  <label class="fw-700 fs-16 form-label">Parent/Guardian Name</label>
									  <input type="text" name="par_name"  value="{{ $user->par_name }}" placeholder="Parent/Guardian Name"  required class="form-control" >
									</div>
								</div>
								<!--/span-->
                            </div>
							<!--/row-->
                            <div class="row">
                                <div class="col-md-6">
									<div class="form-group">
									  <label class="fw-700 fs-16 form-label">Parent/Guardian Number</label>
									  <input type="text" name="par_number"  value="{{ $user->par_number }}" required placeholder="Parent/Guardian Number" required class="form-control" >
									</div>
								</div>
								<!--/span-->
                            </div>
							<!--/row-->

						</div>
						<div class="form-actions mt-10">
							<button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> Save</button>
							<a href="{{ url()->previous() }}" class="btn btn-danger">Cancel</a>
						</div>
					</form>
				  </div>
				</div>
			  </div>
		  </div>

		</section>
		<!-- /.content -->

    @endsection


    @push('script')

    @endpush
</x-app-layoute>
