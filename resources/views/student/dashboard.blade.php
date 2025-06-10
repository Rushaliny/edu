<x-student-layout>


    @section('main-content')

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
</x-student-layout>
