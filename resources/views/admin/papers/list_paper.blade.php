<x-app-layoute>


    @section('main-content')
    <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
					<div class="box">
						<div class="box-header with-border">
							<h4 class="box-title">Exam Papers List</h4>
							<h6 class="box-subtitle">List of exam papers for students</h6>
						</div>
						<div class="box-body p-15">
							<div class="table-responsive">
								<table id="tickets" class="table mt-0 table-hover no-wrap" data-page-size="10">
									<thead>
										<tr>
											<th>Paper Name</th>
											<th>Year</th>
											<th>Subject</th>
											<th>Questions Count</th>
											<th>Status</th>
											<th>Date</th>
											<th>Action</th>
                                            <th></th>
										</tr>
									</thead>
									<tbody>
                                        @if ($papers->count())
                                            @foreach ($papers as $paper )
                                            <tr>

                                                <td>
                                                    <a href="javascript:void(0)">{{ $paper->paper_name }}</a>
                                                </td>
                                                <td>{{ $paper->year }}</td>
                                                <td>{{ $paper->subject }}</td>
                                                <td>{{ $paper->questions->count() }}</td>

                                                <td>
                                                    @if ($paper->status == 1)
                                                    <span class="badge badge-info">Publish</span>
                                                    @else
                                                    <span class="badge badge-warning">Draft</span>
                                                    @endif
                                                </td>
                                                <td>{{ date('d,M Y', strtotime(strval( $paper->created_at ))) }}</td>
                                                <td>
                                                    <a href="{{ route('admin.paper.edit',$paper->id) }}" class="text-info" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="ti-pencil" aria-hidden="true"></i></a>
                                                    <a href="{{ route('admin.paper.delete',$paper->id) }}" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.question.list',$paper->id) }}" class="text-primary" data-bs-toggle="tooltip" data-bs-original-title="Add Questions"><i class="ti-plus" aria-hidden="true"></i></a>
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
