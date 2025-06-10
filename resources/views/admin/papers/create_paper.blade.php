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
					<form action="{{ route('admin.paper.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
						<div class="form-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									  <label class="fw-700 fs-16 form-label">Past Paper Name</label>
									  <input type="text" name="paper_name" required class="form-control" placeholder="Past Paper Name">
									</div>
								</div>
								<!--/span-->
								<div class="col-md-6">
									<div class="form-group">
										<label class="fw-700 fs-16 form-label">Year</label>
										<select class="form-select" required name="year" data-placeholder="Choose a Year of Paper" tabindex="1">
                                            <option selected disabled value="">Choose a Year of Paper</option>
											<option value="2013">2013</option>
											<option value="2014">2014</option>
											<option value="2015">2015</option>
											<option value="2016">2016</option>
											<option value="2017">2017</option>
											<option value="2018">2018</option>
											<option value="2019">2019</option>
											<option value="2020">2020</option>
											<option value="2021">2021</option>
											<option value="2022">2022</option>
											<option value="2023">2023</option>
										</select>
									</div>
								</div>
								<!--/span-->
							</div>
							<!--/row-->
							<!--/row-->
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="fw-700 fs-16 form-label">Subject</label>
										<select class="form-select" name="subject" required data-placeholder="Choose a Subject" tabindex="1">
                                            <option selected disabled value="">Choose a Subject</option>
											<option value="Mathematics">Mathematics</option>
										</select>
									</div>
								</div>
								<!--/span-->
								<div class="col-md-6">
									<div class="form-group">
										<label class="fw-700 fs-16 form-label">Status</label>
										<div class="radio-list">
											<label class="radio-inline p-0 me-10">
												<div class="radio radio-info">
													<input type="radio" checked name="status" id="radio1" value="1">
													<label for="radio1">Published</label>
												</div>
											</label>
											<label class="radio-inline">
												<div class="radio radio-info">
													<input type="radio" name="status" id="radio2" value="0">
													<label for="radio2">Draft</label>
												</div>
											</label>
										</div>
									</div>
								</div>
								<!--/span-->
							</div>
							<!--/row-->
							<div class="row">
								<!--/span-->
								<div class="col-md-4">
									<h4 class="box-title mt-20">Upload Image</h4>
									<div class="product-img text-start">
										<img id="image_user" src="{{ asset('admin_assets/images/paper/sample_image.jpg') }}" alt="">
										<div class="input-group my-3">
										  <label class="input-group-text btn-primary" for="inputGroupFile01">Upload Anonther Image</label>
										  <input onchange="doAfterSelectImage(this)" name="image"  accept=".jpg,.jpeg,.png"  type="file" required class="form-control" id="inputGroupFile01">
										</div>
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
									</div>
								</div>
							</div>

						</div>
						<div class="form-actions mt-10">
							<button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> Save</button>
							<button type="button" class="btn btn-danger">Cancel</button>
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
        <script>
             function doAfterSelectImage(input) {
                readURL(input);
            }
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#image_user').attr('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
    @endpush
</x-app-layoute>
