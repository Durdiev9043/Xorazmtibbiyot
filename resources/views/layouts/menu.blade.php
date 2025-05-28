
<?php

$categories = \App\Models\Category::all();
?>


<ul class="page-header__menu reset-list">
    @foreach($categories as $category)
     <li class="page-header__menu-item" style="font-size: 11px !important;">
         <a href="{{ route('cat',$category->id) }}" class="menu-link" style="color:#455d9b !important;">
             {{ $category->name_uz }}
         </a>
{{--         @if($category->subcategories->count())--}}
{{--             <ul class="dropdown-menu " >--}}
{{--                 @foreach($category->subcategories as $subcategory)--}}
{{--                     <li><a class="dropdown-item" href="#">{{ $subcategory->name_uz }}</a></li>--}}
{{--                 @endforeach--}}
{{--             </ul>--}}
{{--         @endif--}}
     </li>
    @endforeach
</ul>
