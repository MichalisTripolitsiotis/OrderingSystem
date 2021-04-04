 <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
     <div class="filter-widget">
         <h4 class="fw-title">Categories</h4>
         <ul class="filter-catagories">
             @if (!empty($categories))
                 @forelse($categories as $category)
                     <li class="active">
                         <a href="{{ route('client.show', $category->id) }}">{{ $category->name }}</a>
                     </li>
                 @empty
                     <li>No Categories</li>
             @endforelse
             @endif
         </ul>
     </div>
 </div>
