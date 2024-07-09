<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="{{asset('admincss/img/avatar-6.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
        <h1 class="h5">Mark Stephen</h1>
        <p>Web Designer</p>
        </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
            <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}"><a href="{{ url('admin/dashboard') }}"> <i class="icon-home"></i>Home </a></li>

            <li class="{{ Request::is('view_category') ? 'active' : '' }}">
                <a href="{{ url('view_category') }}"> <i class="icon-grid"></i>Category 
                </a>
            </li>

            <li>
                <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse" class="{{ Request::is('add_product') || Request::is('view_product') ? '' : 'collapsed' }}"> <i class="icon-windows"></i>Products </a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled {{ Request::is('add_product') || Request::is('view_product') ? 'show' : '' }}">
                    <li class="{{ Request::is('add_product') ? 'active' : '' }}">
                        <a href="{{ url('add_product') }}">Add Product</a>
                    </li>
                    <li class="{{ Request::is('view_product') ? 'active' : '' }}">
                        <a href="{{ url('view_product') }}">View Product</a>
                    </li>
                </ul>
            </li>


            <li class="{{ Request::is('view_orders') ? 'active' : '' }}">
                <a href="{{ url('view_orders') }}"> <i class="icon-grid"></i>Orders
                </a>
            </li>


    </ul>
    </nav>