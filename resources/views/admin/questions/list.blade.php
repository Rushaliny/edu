<x-app-layoute>


    @section('main-content')
    <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
					<div class="box">
						<div class="box-header with-border">
							<h4 class="box-title"> 2019 Exam Paper Questions List</h4>
							<h6 class="box-subtitle">List of exam paper questions for students</h6>
						</div>


						<div class="box-body p-15">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label class="fw-700 fs-16 form-label">Past Paper Name</label>
                                          <input type="text"  value="{{ $paper->paper_name }}" readonly class="form-control" placeholder="Past Paper Name">
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label class="fw-700 fs-16 form-label">Year of Paper</label>
                                          <input type="text" value="{{ $paper->year }}" readonly class="form-control" placeholder="Year of Paper">
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
                                          <input type="text" value="{{ $paper->subject }}" readonly class="form-control" placeholder="Subject">
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label class="fw-700 fs-16 form-label">Status</label>
                                          <input type="text" @if( $paper->status == 1) value="Publish"  @else value="Draft"  @endif  readonly class="form-control" placeholder="Status">
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                            </div>
                            <div class="col-12">
                                <div class="bb-1 ">
                                  <div class="text-end pb-15">
                                    <a  href="{{ url()->previous() }}" class="btn btn-primary" > <span><i class="fa fa-arrow-left"></i> Back</span> </a>
                                    <a  href="{{ route('admin.question.add',$paper->id) }}" class="btn btn-primary" > <span><i class="fa-solid fa-plus"></i> Add New</span> </a>
                                </div>
                                </div>
                              </div>
                            <br>
							<div class="table-responsive">
								<table id="tickets" class="table mt-0 table-hover no-wrap" data-page-size="10">
									<thead>
										<tr>
											<th>No</th>
											<th>Answer</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
                                        @if ($questions->count())
                                            @foreach ($questions as  $question)
                                            <tr>

                                                <td>
                                                    <a href="javascript:void(0)">{{ $question->question_number }}</a>
                                                </td>
                                                <td>{{ $question->answer }}</td>
                                                <td>
                                                    <a href="{{ route('admin.question.edit',$question->id) }}" class="text-info" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="ti-pencil" aria-hidden="true"></i></a>
                                                    <a href="{{ route('admin.question.delete',$question->id) }}" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        @endif


									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>

    @endsection


    @push('script')
    <script src="{{ asset('admin_assets/assets/vendor_components/jquery.peity/jquery.peity.js') }}"></script>
	<script src="{{ asset('admin_assets/assets/vendor_components/datatable/datatables.min.js') }}"></script>
	<script src="{{ asset('admin_assets/js/pages/data-table.js') }}"></script>
	<script src="{{ asset('admin_assets/js/pages/app-ticket.js') }}"></script>
    @endpush
</x-app-layoute>
