<div
      class="headers-ScrollTop tem59-header-top-scroll show-full"
      widget-style="display"
    >
      <div class="tem59-header">
        <div
          class="header59 clearfix tem59-header-donghua"
          widget-style="color"
          style="color: rgb(34, 38, 41)"
        >
          <div
            class="header59_bg noScrollMove"
            widget-style="background"
            style="
              background-position: 0% 0%;
              background-color: rgb(255, 255, 255);
              background-size: auto;
              background-repeat: repeat;
            "
          ></div>

          <div class="icon clearfix">
            <div class="Languag_one">
              <span class="">
                {{-- <img src="/assets/img/flags/{{ app()->getlocale() }}.png"/> --}}
                <img src="{{asset('img/flags/'.app()->getlocale().'.png')}}"/>
              </span>
              <ul class="language bg-color-F news_lang lanlist">
                <li data-lan="ru">
                  <a href="/locale/uz">
                    {{-- <div class="flag20 news_toggle _flag-ru"></div> --}}
                    <img
                      src="{{asset('img/flags/uz.png')}}"
                    />O'zbekcha
                  </a>
                </li>
                <li data-lan="pt">
                  <a href="/locale/ru">
                    {{-- <div class="flag20 news_toggle _flag-pt"></div> --}}
                    <img
                      src="{{asset('img/flags/ru.png')}}"
                    />Русский
                  </a>
                </li>
                <li data-lan="fr">
                  <a href="/locale/en">
                    {{-- <div class="flag20 news_toggle _flag-fr"></div> --}}
                    <img
                      src="{{asset('img/flags/en.png')}}"
                    />English
                  </a>
                </li>
              </ul>
            </div>
            <div class="fangda" widget-style="search">
              <span class="icon-search2"></span>
              <form
                action="https://www.xprintertech.com/search/index/"
                method="post"
                class="search2_form bg-color border-color"
              >
                <input
                  type="text"
                  name="searchname"
                  placeholder="Search"
                  required=""
                  autocomplete="off"
                />
                <div class="header_search_select">
                  <ul></ul>
                </div>
                <button class="input-group-btn icon-search2"></button>
                <span class="icon-clear searchbox"></span>
              </form>
            </div>
            <div class="add-jia">
              <section
                template-edit="block.block_desc"
                template-sign="co_tmall1"
              >
                <p>
                  <span style="color: #0061a5"
                    ><span style="font-size: 12px"
                      ><img
                        alt=""
                        src="{{asset('img/logo.png')}}"
                        style="width: 16px; height: 16px"
                      />&nbsp;{{$contact->phone}}</span
                    ></span
                  >
                </p>
              </section>
            </div>
          </div>
          <span class="icon-list switch"></span>
          <div class="bg_dong_f container">
            <div class="clearfix">
              {{-- <h5 class="pull-right search_box" widget-style="search">
                <form
                  action="https://www.xprintertech.com/search/index/"
                  method="post"
                  class="search_form"
                >
                  <input
                    type="text"
                    name="searchname"
                    placeholder="Search"
                    required=""
                    autocomplete="off"
                  />
                  <div class="header_search_select">
                    <ul></ul>
                  </div>
                  <button class="input-group-btn icon-search2"></button>
                </form>
              </h5> --}}
              <div class="logo clearfix pull-left">
                <div class="fl">
                  <a href="/" widget-action="logo">
                    <img
                      src="{{asset('img/logo.png')}}"
                      alt="Logo | Xprinter Group - xprintertech.com"
                    />
                  </a>
                </div>
              </div>
              <div class="navigation_0 pull-right">
                <div class="left bg-color font-color-F">
                  <span class="icon-keyboard_arrow_left"></span>
                </div>
                <div class="right bg-color font-color-F">
                  <span class="icon-keyboard_arrow_right"></span>
                </div>
                <div class="navhidd">
                  <div class="navigation clearfix" nav-action="edit">
                    <div
                      nav-action="static"
                      class="ul_xu active font-color-gray-level-F font-color-gray-level-F-a bg-color"
                    >
                      <a href="/">{{__('app.h_home')}}</a>
                    </div>
                    <div role="presentation" class="ul_xu">
                      <a href="#" nav-id="1">{{__('app.h_product')}}</a>
                      <span class="icon-keyboard_arrow_down _span"></span>
                      <span class="kong-span"></span>
                      <ul class="_ul bg-color-F">
                        @isset($sub_category)
                        @foreach($sub_category as $cate)
                        <li class="ul_xu">
                          <a href="{{route('printers',$cate->id)}}" nav-id="87"
                            >{{name($cate)}}</a
                          >
                        </li>
                        
                        @endforeach
                        @endisset
                      </ul>
                    </div>
                    <div role="presentation" class="ul_xu">
                      <a href="{{route('news-us')}}" nav-id="8"
                        >{{__('app.h_news')}}</a
                      >
                    </div>
                    <div role="presentation" class="ul_xu">
                      <a href="{{route('about-us')}}" nav-id="8"
                        >{{__('app.h_about')}}</a
                      >
                    </div>
                    <div role="presentation" class="ul_xu">
                      <a href="{{route('contact-us')}}" nav-id="20">{{__('app.h_contact')}}</a>
                    </div>
                    <div role="presentation" class="ul_xu" id="theme-switcher">
                      <a style="display: flex; align-items: center;">

                        <svg viewBox="0 0 24 24" focusable="false" class="chakra-icon css-onkibi icon-dark" aria-hidden="true"><path fill="currentColor" d="M21.4,13.7C20.6,13.9,19.8,14,19,14c-5,0-9-4-9-9c0-0.8,0.1-1.6,0.3-2.4c0.1-0.3,0-0.7-0.3-1 c-0.3-0.3-0.6-0.4-1-0.3C4.3,2.7,1,7.1,1,12c0,6.1,4.9,11,11,11c4.9,0,9.3-3.3,10.6-8.1c0.1-0.3,0-0.7-0.3-1 C22.1,13.7,21.7,13.6,21.4,13.7z"></path></svg>

                        <svg viewBox="0 0 24 24" focusable="false" class="chakra-icon css-onkibi icon-light" aria-hidden="true"><g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor"><circle cx="12" cy="12" r="5"></circle><path d="M12 1v2"></path><path d="M12 21v2"></path><path d="M4.22 4.22l1.42 1.42"></path><path d="M18.36 18.36l1.42 1.42"></path><path d="M1 12h2"></path><path d="M21 12h2"></path><path d="M4.22 19.78l1.42-1.42"></path><path d="M18.36 5.64l1.42-1.42"></path></g></svg>

                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>