<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
	  	<div class="multinav">
		  <div class="multinav-scroll" style="height: 100%;">
			  <!-- sidebar menu-->
			  <ul class="sidebar-menu" data-widget="tree">
				<li class="header">Dashboard </li>
				<li class="">
				  <a href="{{ route('admin.dashboard') }}">
					<i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
					<span>Dashboard</span>
				  </a>
				</li>


                <li class="header">Papers & Questions</li>
				<li class="">
				  <a href="{{ route('student.paper.list') }}">
					<i class="icon-File"><span class="path1"></span><span class="path2"></span></i>
					<span>Papers List</span>
				  </a>
				</li>

                <li class="">
                    <a href="{{ route('admin.paper.list') }}">
                      <i class="icon-File"><span class="path1"></span><span class="path2"></span></i>
                      <span>My Attems</span>
                    </a>
                  </li>

                <li class="header">Settings</li>
				<li class="">
				  <a href="{{ route('admin.profile') }}">
					<i class="icon-Chat-locked"><span class="path1"></span><span class="path2"></span></i>
					<span>Profile Settings</span>
				  </a>
				</li>
			  </ul>
		  </div>
		</div>
    </section>
	<div class="sidebar-footer">
		<a href="{{ route('admin.profile') }}" class="link" data-bs-toggle="tooltip" title="Settings"><span class="icon-Settings-2"></span></a>

		<a href="{{ route('admin.logout') }}" class="link" data-bs-toggle="tooltip" title="Logout"><span class="icon-Lock-overturning"><span class="path1"></span><span class="path2"></span></span></a>
	</div>
  </aside>
