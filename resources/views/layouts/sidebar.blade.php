<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{ asset('assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text"> Digirush Solutions</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
				</div>
			 </div>
			<!--navigation-->
			<ul class="metismenu" id="menu">

                
				<li>
					<a href="{{ route('admin.dashboard') }}">
						<div class="parent-icon"><i class='bx bx-home-alt'></i>
						</div>
						<div class="menu-title"> Dashboard</div>
					</a>
				</li>
                <li class="menu-label">Pages</li>
				
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-cookie'></i>
						</div>
						<div class="menu-title"> Blogs</div>
					</a>
					<ul>
						<li> <a href="{{ route('admin.blog') }}"><i class='bx bx-radio-circle'></i>Blog List</a>
						</li>
						<!-- <li> <a href="#"><i class='bx bx-radio-circle'></i>Blog Category</a>
						</li> -->

					</ul>
				</li>
				
				<li>
					<a href="{{route('homePageSubmissions.index')}}">
						<div class="parent-icon"><i class="bx bx-cog"></i>
						</div>
						<div class="menu-title"> Home Page Form</div>
					</a>
				</li>
				
				<li>
					<a href="{{route('metaPage')}}">
						<div class="parent-icon"><i class="bx bx-cog"></i>
						</div>
						<div class="menu-title"> Setting</div>
					</a>
				</li>

				<li>
					<a href="{{ route('logout') }}">
						<div class="parent-icon"><i class="bx bx-log-out"></i>
						</div>
						<div class="menu-title"> Logout</div>
					</a>
				</li>
				
				
				
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->