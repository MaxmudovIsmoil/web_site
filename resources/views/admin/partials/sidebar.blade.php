<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
       <div id="sidebar-menu" class="sidebar-menu">
          <ul>
             {{-- <li class="menu-title">  <span>Main </span> --}}
             </li>
             <li class="{{ Request::is('dashboard*') ? 'active':''}}">  <a href="{{route('dashboard')}}"><i class="feather-home"></i><span>Dashboard </span></a>
             </li>
              <li class="{{ Request::is('category*') ? 'active':''}}"><a href="{{route('category.index')}}"><i class="feather-list"></i>  <span>{{ __('app.category') }} </span></a>
              <li class="{{ Request::is('sub-category*') ? 'active':''}}"><a href="{{route('sub-category.index')}}"><i class="feather-list"></i>  <span>{{ __('app.subcategory') }} </span></a>
               <li class="{{ Request::is('product*') ? 'active':''}}"><a href="{{route('product.index')}}"><i class="feather-list"></i>  <span>{{ __('app.product') }} </span></a>
              <li class="{{ Request::is('partner*') ? 'active':''}}"><a href="{{route('partner.index')}}"><i class="feather-list"></i>  <span>Partner  </span></a>
               <li class="{{ Request::is('news*') ? 'active':''}}"><a href="{{route('news.index')}}"><i class="feather-list"></i>  <span> {{ __('app.h_news') }}</span></a>
                  <li class="{{ Request::is('certifi*') ? 'active':''}}"><a href="{{route('certifi.index')}}"><i class="feather-list"></i>  <span>Certificat </span></a>
              <li class="{{ Request::is('text*') ? 'active':''}}"><a href="{{route('text.index')}}"><i class="feather-list"></i>  <span>Text </span></a>
             </li>
             <li class="submenu">
                <a href="#"><i class="feather-user"></i>  <span>Elements </span>  <span class="menu-arrow"></span></a>
                <ul style="display: none;">
                   <li><a href="{{route('slider.index')}}">Slider </a></li>
                   <li><a href="{{route('contact.index')}}">Contact </a></li>
                   <li><a href="{{route('about.index')}}">{{ __('app.h_about') }} </a></li>
                   <li><a href="{{route('section.index')}}">{{ __('app.action') }} </a></li>
                </ul>
             </li>
          </ul>
       </div>
    </div>
 </div>