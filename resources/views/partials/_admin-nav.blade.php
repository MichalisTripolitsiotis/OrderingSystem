 <nav class="col-1 col-md-2 d-none d-md-block bg-dark sidebar">
     <div class="sidebar-sticky">
         <ul class="nav flex-column nav-pills">
             <li class="nav-item">
                 <a href="{{ route('admin.index') }}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                     <span data-feather=" home"></span>
                     Dashboard
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="#">
                     <span data-feather="layers"></span>
                     Orders
                 </a>
             </li>
             <li class="nav-item">
                 <a href="{{ route('categories.index') }}"
                     class="nav-link {{ request()->is('admin/categories') ? 'active' : '' }}">
                     <span data-feather="home"></span>
                     Categories
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="#">
                     <span data-feather="shopping-cart"></span>
                     Products
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="#">
                     <span data-feather="users"></span>
                     Users
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="#">
                     <span data-feather="bar-chart-2"></span>
                     Reports
                 </a>
             </li>
         </ul>
     </div>
 </nav>
