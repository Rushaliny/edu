<x-app-layoute>




    @section('main-content')
   		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h3 class="page-title">Create Questions</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="ti-home"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">QUESTIONS</li>
								<li class="breadcrumb-item active" aria-current="page">Create Questions</li>
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
					  <h4 class="box-title">About Questions</h4>
					</div>
				  <div class="box-body">
					<form action="{{ route('admin.question.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $question->id }}">
						<div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
									<div class="form-group">
									  <label class="fw-700 fs-16 form-label">Past Paper Name</label>
									  <input type="text" name="paper_name" value="{{ $paper->paper_name }}" class="form-control" readonly placeholder="Past Paper Name">
                                      <input type="hidden" name="paperID" value="{{ $paper->id }}">
									</div>
								</div>
                                <div class="col-md-6">
									<div class="form-group">
									  <label class="fw-700 fs-16 form-label">Questions Number</label>
									  <input type="tel" name="question_number" value="{{ $question->question_number }}" required class="form-control" placeholder="Questions Number">
									</div>
								</div>
                            </div>
							<div class="row">
								<!--/span-->
								<div class="col-md-12">
									<h4 class="box-title mt-20">Upload Questions Image</h4>
									<div class="product-imgs text-start" >
										<img id="image_user" src="{{ url("$question->question_image") }}" alt="" style="width: 1650px;height: 300px;" >
										<div class="input-group my-3">
										  <label class="input-group-text btn-primary" for="inputGroupFile01">Upload Anonther Image</label>
										  <input onchange="doAfterSelectImage(this)" name="question_image"  accept=".jpg,.jpeg,.png"  type="file"  class="form-control" id="inputGroupFile01">
										</div>
                                        @error('question_image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
									</div>
								</div>
							</div>
							<!--/row-->
							<!--/row-->
							<div class="row">

								<!--/span-->
								<div class="col-md-6">
									<div class="form-group">
										<label class="fw-700 fs-16 form-label">Correct Answer</label>
										<div class="radio-list">
											<label class="radio-inline p-0 me-10 mb-4">
												<div class="radio radio-info">
													<input type="radio" @if($question->answer == 1) @checked(true) @endif  name="answer" id="radio1" value="1">
                                                    <label for="radio1">1</label>
												</div>
											</label>

											<label class="radio-inline p-0 me-10 mb-4">
												<div class="radio radio-info">
													<input type="radio" name="answer" @if($question->answer == 2) @checked(true) @endif id="radio2" value="2">
													<label for="radio2">2</label>
												</div>
											</label>

                                            <label class="radio-inline p-0 me-10 mb-4">
												<div class="radio radio-info">
													<input type="radio" name="answer" @if($question->answer == 3) @checked(true) @endif id="radio3" value="3">
													<label for="radio3">3</label>
												</div>
											</label>

                                            <label class="radio-inline p-0 me-10 mb-4">
												<div class="radio radio-info">
													<input type="radio" name="answer" @if($question->answer == 4) @checked(true) @endif id="radio4" value="4">
													<label for="radio4">4</label>
												</div>
											</label>
										</div>
									</div>
								</div>
								<!--/span-->
							</div>
							<!--/row-->


						</div>
						<div class="form-actions mt-10">
							<button type="submit"  name="button" value="save" class="btn btn-primary"> <i class="fa fa-check"></i> Save Changes</button>
							<a href="{{ url()->previous() }}"  class="btn btn-danger">Cancel</a>
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
