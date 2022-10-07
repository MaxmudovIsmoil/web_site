<div class="header">
    <div class="header-left">
       <a href="/dashboard" class="logo">
       <img src="{{asset('img/logo.png')}}" alt="Logo" />
       </a>
       <a href="/dashboard" class="logo logo-small">
       <img src="{{asset('img/logo.png')}}" alt="Logo" width="10" height="10" />
       </a>
    </div>
    <a href="javascript:void(0);" id="toggle_btn">  <i class="fas fa-bars"></i>
    </a>
    <a class="mobile_btn" id="mobile_btn">  <i class="fas fa-bars"></i>
    </a>
    <ul class="nav user-menu">
      <li class="nav-item dropdown has-arrow flag-nav mr-2">
         <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
         <img src="/assets/img/flags/{{ app()->getlocale() }}.png" alt="" width="32" height="32" class="rounded-circle" />
         </a>
         <div class="dropdown-menu dropdown-menu-right">
            {{-- <a href="/locale/en" class="dropdown-item">
            <img src="/assets/img/flags/us.png" alt="" height="16" /> English
            </a> --}}
            <a href="/locale/ru" class="dropdown-item">
            <img src="/assets/img/flags/ru.png" alt="" height="16" /> Русский
            </a>
            <a href="/locale/uz" class="dropdown-item">
            <img src="/assets/img/flags/uz.png" alt="" height="16" /> O'zbekcha
            </a>
            <a href="/locale/en" class="dropdown-item">
               <img src="/assets/img/flags/en.png" alt="" height="16" /> English
               </a>
         </div>
      </li>
       <li class="nav-link">
          <a href="{{route('logout')}}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="feather-power"></i>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
       </li>
    </ul>
 </div>