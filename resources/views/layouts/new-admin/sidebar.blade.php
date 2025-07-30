<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
  <div class="sidebar-header">
    <div>
      <img src="{{custom_asset('/new-admin/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
    </div>
    <div>
      <h4 class="logo-text">Digirush Solutions</h4>
    </div>
    <div class="toggle-icon ms-auto"><i class="bi bi-chevron-double-left"></i>
    </div>
  </div>
  <!--navigation-->
  <ul class="metismenu" id="menu">
    <li>
      <a href="javascript:void(0);" class="has-arrow">
        <div class="parent-icon"><i class="bi bi-house-door"></i>
        </div>
        <div class="menu-title">Dashboard</div>
      </a>
      <ul>

        <li> <a href="{{ route('admin.new_dashboard') }}"><i class="bi bi-arrow-right-short"></i>Dashboard</a></li>
      </ul>
    </li>

    <li class="menu-label">Pages</li>
    <li>
      <a class="has-arrow" href="javascript:void('0');">
        <div class="parent-icon"><i class="bi bi-lock"></i>
        </div>
        <div class="menu-title">Blogs</div>
      </a>
      <ul>
        <li> <a href="{{ route('admin.blog') }}"><i class="bi bi-arrow-right-short"></i>Blog List</a></li>
        <li> <a href="{{ route('blog-category') }}"><i class="bi bi-arrow-right-short"></i>Blog Category</a>
        </li>

      </ul>
    </li>

    <li>
      <a class="has-arrow" href="javascript:void(0);">
        <div class="parent-icon"><i class="bi bi-file-earmark-break"></i>
        </div>
        <div class="menu-title">Inqueries Home</div>
      </a>
      <ul>
        <li> <a href="{{ route('general-index') }}"><i class="bi bi-arrow-right-short"></i>Contact Form1</a></li>
        <li> <a href="{{ route('home-index') }}"><i class="bi bi-arrow-right-short"></i>Contact Form2</a></li>

      </ul>
    </li>
    <li>
      <a href="{{url('index')}}">
        <div class="parent-icon"><i class="bi bi-bag-check"></i>
        </div>
        <div class="menu-title">Seo management</div>
      </a>
    </li>

    <li>
      <a class="has-arrow" href="javascript:void(0);">
        <div class="parent-icon"><i class="fadeIn animated bx bx-home-heart"></i>
        </div>
        <div class="menu-title">Landing Leads</div>
      </a>
      <ul>
        <li> <a href="{{ route('seo-manage-index') }}"><i class="bi bi-arrow-right-short"></i>Seo Leads</a></li>
        <li> <a href="{{ route('home-manage-index') }}"><i class="bi bi-arrow-right-short"></i>Digital web leads</a>
        </li>


      </ul>
    </li>
    <li>
      <a href="{{url('index_us')}}">
        <div class="parent-icon"><i class="bi bi-bag-check"></i>
        </div>
        <div class="menu-title">US Landing Leads</div>
      </a>
    </li>
    <li>
      <a href="{{route('contact-index')}}">
        <div class="parent-icon"><i class="bi bi-person-check"></i>
        </div>
        <div class="menu-title">Contact Management</div>
      </a>
    </li>
    <li>
      <a href="{{url('index_hire')}}">
        <div class="parent-icon"><i class="lni lni-harddrive"></i>
        </div>
        <div class="menu-title">Hire Devlopers leads</div>
      </a>
    </li>
    <li>
      <a href="{{ route('header.index') }}">
        <div class="parent-icon"><i class="lni lni-arrows-horizontal"></i>
        </div>
        <div class="menu-title">Header</div>
      </a>
    </li>
    <li>
      <a href="{{ route('dynamic.index') }}">
        <div class="parent-icon"><i class="lni lni-page-break"></i>
        </div>
        <div class="menu-title">Dynamic Pages</div>
      </a>
    </li>
    <li>
      <a href="{{route('metaPage')}}">
        <div class="parent-icon"><i class="bi bi-gear-fill"></i>
        </div>
        <div class="menu-title">Setting</div>
      </a>
    </li>

    <li>
      <a href="{{route('logout')}}">
        <div class="parent-icon"><i class="bi bi-lock-fill"></i>
        </div>
        <div class="menu-title">Logout</div>
      </a>
    </li>



  </ul>
  <!--end navigation-->
</aside>
<!--end sidebar -->