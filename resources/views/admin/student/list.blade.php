<x-app-layoute>

    @section('main-content')
    		<!-- Main content -->
		<section class="content">
            <div class="row">
              <div class="col-xl-10 col-lg-9 col-12">
                  <div class="box">
                      <div class="box-header with-border">
                          <h4 class="box-title">Invoice List</h4>
                          <h6 class="box-subtitle">Export Invoice List to Copy, CSV, Excel, PDF & Print</h6>
                      </div>
                      <div class="box-body">
                          <div class="table-responsive">

                              <table id="example" class="table table-lg invoice-archive">
                                  <thead>
                                      <tr>
                                          <th>ID</th>
                                          <th>Date Join</th>
                                          <th>Name</th>
                                          <th>Email</th>
                                          <th>Parent Name</th>
                                          <th>Provinces</th>
                                          <th>Grade</th>
                                          <th class="text-center">Actions</th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                    @if ($users->count())
                                        @foreach ($users as $user )
                                        <tr>
                                            <td>{{ $user->reg_no }}</td>
                                            <td>{{ date('d,M Y', strtotime(strval( $user->created_at ))) }}</td>
                                            <td>
                                                <h6 class="mb-0">
                                                    <a href="#">{{ $user->full_name }}</a>
                                                </h6>
                                            </td>

                                            <td>
                                                {{ $user->email }}
                                            </td>
                                            <td>
                                             {{ $user->par_name }}
                                             </td>
                                              <td>
                                             {{ $user->provical }}
                                              </td>
                                            <td>
                                                <span class="badge badge-pill badge-success">{{ $user->grade }}</span>
                                            </td>

                                            <td class="text-center">
                                                <div class="list-icons d-inline-flex">
                                                    <a href="#" class="list-icons-item me-10" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                    <div class="list-icons-item dropdown">
                                                        <a href="#"  class="list-icons-item dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-file-text"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="{{ route('admin.student.edit',$user->id) }}"  class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
                                                            <a href="{{ route('admin.student.delete',$user->id) }}" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
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
              <div class="col-xl-2 col-lg-3 col-12">
                  <div class="box box-inverse box-success">
                    <div class="box-body">


                      <div class="text-center my-2">
                        <div class="fs-60">{{ $users->count() }}</div>
                        <span>Total Students</span>
                      </div>
                    </div>
                  </div>
                  <div class="box box-inverse box-primary">
                    <div class="box-body">
                      <div class="text-center my-2">
                        <div class="fs-60">{{ $new_users->count() }}</div>
                        <span>Newly Enrolled Students</span>
                      </div>
                    </div>
                  </div>

              </div>
            </div>
          </section>
          <!-- /.content -->

    @endsection


    @push('script')
	<script src="{{ asset('admin_assets/assets/vendor_components/datatable/datatables.min.js') }}"></script>
	<script src="{{ asset('admin_assets/js/pages/data-table.js') }}"></script>
    @endpush
</x-app-layoute>
