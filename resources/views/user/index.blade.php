@extends('user.app')
@section('content')
    <div template-layout="1" style="padding-bottom: 0px">
      <div
        class="tem47-banner content-left full-screen-spacing"
        layout-id="1"
        layout-style="align[123]"
        layout-path="banner/public_banner_47"
      >
        <link template-css="layout" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" />
        <script></script>
        <div class="container full-screen mobile-pdlr0" @if($section[0]->best == '0') style="display:none;" @endif>
          <div func-id="1" config_cms_number="">
            <div class="tem47_banner_62d7c7b54dbd80">
              <div
                class="swiper-container-horizontal tem47-banner-con"
                module-style="color"
                style="color: rgb(255, 255, 255)"
              >
                <div class="swiper-wrapper">
                    @isset($slider)
                    @foreach($slider as $slide)
                  <div class="swiper-slide">
                    <img
                      src="{{asset('uploads/'.$slide->image)}}"
                      alt=""
                    />
                    <div class="text">
                      <div class="h1 title"></div>
                      <div class="h4 description">
                        <span class="span_txt"></span>
                      </div>
                    </div>
                    <a
                      href="xp-t451b.html"
                      class="cursor"
                      style="
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                      "
                    ></a>
                  </div>
                  @endforeach
                  @endisset
                </div>
                <!-- STATIC BEGIN -->
                <input
                  type="hidden"
                  module-setting="visible"
                  module-tips="是否显示按钮"
                  module-value="select::{'show':'显示','hide':'隐藏'}"
                  value="show"
                />
                <!-- STATIC END -->
                <div class="pagination_box">
                  <div class="swiper-pagination"></div>
                </div>
                <div class="progress_bar"></div>
              </div>
            </div>
            <script></script>

            <!-- CUSTOM 0/BANNER/PUBLIC_BANNER_48:2022 END -->
          </div>
        </div>
      </div>

      <div
      @if($section[1]->best == '0') style="display:none;" @endif
        layout-id="1"
        class="titlebar tem01-title title-section noScrollMove full-screen-spacing"
        layout-path="title/public_title_1"
        style="
          background-color: rgba(0, 0, 0, 0);
          background-size: cover;
          background-repeat: no-repeat;
          padding: 3% 0px 0px;
          background-position: 50% 50%;
        "
      >
        <div class="container mobile-pdlr0 full-screen">
          <div func-id="1">
            <!-- CUSTOM 0/TITLE/PUBLIC_TITLE_1:400 BEGIN -->
            <!--tem01-title-->
            <div class="tem01-title tem01-list-title tem00-list-title">
              <link template-css="layout" rel="stylesheet" type="text/css" />

              <div
                class="title-header wow animated fadeInUp animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated"
                module-style="animated"
                style="visibility: visible"
              >
                <div class="title" data-content="title">
                  <section module-edit="block.block_name">
                    <p>
                      <span style="color: #222629"
                        ><strong
                          ><span style="font-size: 36px;"
                            >{{__('app.popular')}}</span
                          ></strong
                        ></span
                      >
                    </p>
                  </section>
                </div>
                {{-- <div class="subtitle wow animated fadeInUp">
                  <section module-edit="block.block_desc">
                    <h1 class="editorh1">
                      <span style="color: #3e4245"
                        >Xprinter - The latest innovations and designs from
                        printer manufacturers will help to drive your business
                        into the future and beyond.</span
                      >
                    </h1>
                  </section>
                </div> --}}
              </div>
              <div class="more border-color-a">
                <a href="javascript:;" block-edit="link">More</a>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
      <div
      @if($section[1]->best == '0') style="display:none;" @endif
        layout-id="1"
        class="content-right full-screen-spacing noScrollMove tem257-irregular"
        layout-style="align[123]"
        layout-path="main_products/public_main_products_63"
        style="
          background-color: rgba(0, 0, 0, 0);
          background-size: cover;
          background-repeat: no-repeat;
          padding: 1% 7% 0%;
          background-position: 50% 50%;
        "
      >
        <link template-css="layout" rel="stylesheet" type="text/css" />
        <link template-css="layout" rel="stylesheet" type="text/css" />
      </div>
      <div
      @if($section[1]->best == '0') style="display:none;" @endif
        layout-id="1"
        class="tem23-pro content-section noScrollMove darker"
        layout-path="product/public_product_23"
        style="
          background-color: rgba(0, 0, 0, 0);
          background-size: cover;
          background-repeat: no-repeat;
          padding: 1% 6% 2%;
          background-position: 50% 50%;
        "
      >
        <link template-css="layout" rel="stylesheet" type="text/css" />
        <div class="container mobile-pdlr0">
          <div func-id="1" cms-sort="list-product" config_cms_number="">
            <!-- CUSTOM 0/PRODUCT/PUBLIC_PRODUCT_23:2006 BEGIN -->

            <div class="tem23-pro_gds">
              <div class="row clearboth">




               @isset($p_pop)
                @foreach($p_pop as $pop)
                <div
                  class="animated col-lg-2 col-md-4 col-sm-4 col-xs-4 diyCol fadeInUp wow animated"
                  module-style="animated column"
                  style="visibility: visible"
                >
                  <div
                    class="tem23-pro-item"
                    module-style="background-color"
                    style="background-color: rgba(0, 0, 0, 0)"
                  >
                    <div class="images">
                      <a href="{{route('product_single',$pop->id)}}">
                        <img
                          lazy-src="{{asset('uploads/'.$pop->image.'?imageView2/2/w/940/q/75')}}"
                          alt="{{$pop->madel}}"
                        />
                      </a>
                    </div>
                    <div class="h3 title font-color">
                      <a
                        module-style="color"
                        href="{{route('product_single',$pop->id)}}"
                        class=""
                        style="color: rgb(34, 38, 41)"
                      >
                      {{$pop->madel}}
                      </a>
                    </div>
                    <div
                      class="description pro-text"
                      module-style="color"
                      style="color: rgb(34, 38, 41)"
                    ></div>
                  </div>
                </div>

                @endforeach
                @endisset
                <div class="clearfix"></div>
              </div>
            </div>

            <!-- CUSTOM 0/PRODUCT/PUBLIC_PRODUCT_23:2006 END -->
          </div>
        </div>
      </div>
      <div
      @if($section[2]->best == '0') style="display:none;" @endif
        layout-id="1"
        class="bgFixed content-left content-section scrollMove tem49-service"
        layout-style="align[13]"
        style="
          background-color: rgb(0, 97, 165);
          background-size: inherit;
          background-repeat: no-repeat;
          padding: 3% 0px;
          background-position: 50% -14.2438px;
        "
        layout-path="service/public_service_49"
        data-scroll_range="0.4"
        bgimg="true"
        lazy-src="{{asset('admin/assets/img/15577090007575.webp')}}"
      >
        <link template-css="layout" rel="stylesheet" type="text/css" />
        <div class="container">
          <div class="row">
            <div
              class="col-lg-6 col-md-6 col-sm-12 col-xs-12 content-float"
            ></div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 content-float">
              <div func-id="1">
                <!-- CUSTOM 0/TEXT/PUBLIC_TEXT_T6:401 BEGIN -->
                <!--tem06-title-->
                <div class="tem06-list-title tem00-list-title">
                  <div
                    class="title-header wow animated fadeInUp animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated"
                    module-style="animated"
                    style="visibility: visible"
                  >
                    <div class="title" data-content="title">
                      <section module-edit="block.block_name">
                        <p>
                          <span style="color: #ffffff"
                            ><span style="font-size: 36px"
                              >{{name($text[2])}}</span
                            ></span
                          >
                        </p>
                      </section>
                    </div>
                    <div class="subtitle wow animated fadeInUp">
                      <section module-edit="block.block_desc">
                        <p>
                          <span
                            style="font-family: arial, helvetica, sans-serif"
                            ><span style="font-size: 14px"
                              ><span style="color: #ffffff"
                                >{{desc($text[2])}}</span
                              ></span
                            ></span
                          >
                        </p>
                      </section>
                    </div>
                  </div>
                </div>
                <!--tem06-title-->
                <!-- CUSTOM 0/TEXT/PUBLIC_TEXT_T6:401 END -->
              </div>
              <div
                template-module="1"
                class="clearfix"
                module-path="service/public_service_43"
              >
              @for ($i = 0; $i < 2; $i++)
              <div func-id="1" class="max-float">
                <!-- CUSTOM 0/SERVICE/PUBLIC_SERVICE_43:2007 BEGIN -->
                <div class="service-box">
                  <a
                    class="L-icon animated fadeInUp font-color wow animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated"
                    href="oem-odm-service.html"
                    module-style="animated color"
                    style="color: rgb(255, 255, 255); visibility: visible"
                    ><span class="icon-filter_{{$i+1}}"></span
                  ></a>
                  <div class="text">
                    <div class="h5 title">
                      <section module-edit="block.block_name">
                        <p>
                          <span style="color: #ffffff"
                            >{{name($text[$i])}}</span
                          >
                        </p>
                      </section>
                    </div>
                    <div class="description">
                      <section module-edit="block.block_desc">
                        <p>
                          <span style="color: #ffffff"
                            >{{desc($text[$i])}}</span
                          >
                        </p>
                      </section>
                    </div>
                  </div>
                </div>
                <!-- CUSTOM 0/SERVICE/PUBLIC_SERVICE_43:2007 END -->
              </div>
              @endfor

              </div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <div
      @if($section[3]->best == '0') style="display:none;" @endif
        layout-id="1"
        class="tem05-category_description content-section noScrollMove full-screen-spacing"
        style="
          background-repeat: repeat;
          padding: 4% 7% 3%;
          background-attachment: fixed;
          background-color: rgb(255, 255, 255);
          background-size: cover;
          background-position: 50% 50%;
        "
        layout-path="category_description/public_category_description_5"
        bgimg="true"
      >
        <link template-css="layout" rel="stylesheet" type="text/css" />
        <div class="container mobile-pdlr0 full-screen">
          <div class="row">
            <div
              class="animated box fadeInUp wow animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated"
              layout-style="animated"
              style="visibility: hidden"
            >
              <div func-id="1">
                <!-- CUSTOM 0/TEXT/PUBLIC_TEXT_T19:402 BEGIN -->
                <!--tem18-title-->

                <div
                  class="title-header wow animated fadeInUp animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated"
                  module-style="animated background-color"
                  style="visibility: hidden"
                >
                  {{-- <div class="title" data-content="title">
                    <section module-edit="block.block_name">
                      <p>
                        <span style="color: #222629"
                          ><strong
                            ><span style="font-size: 36px"
                              >Oxirgi mahsulotlar</span
                            ></strong
                          ></span
                        >
                      </p>
                    </section>
                  </div> --}}
                  {{-- <div class="description">
                    <section module-edit="block.block_desc">
                      <p>
                        <span style="color: #3e4245"
                          >I am sure you will be surprised with tons of ready
                          demos and<br />
                          elements included in the template.</span
                        >
                      </p>
                    </section>
                  </div> --}}
                </div>

                <!--tem18-title-->
                <!-- CUSTOM 0/TEXT/PUBLIC_TEXT_T19:402 END -->
              </div>
              <div class="row clearboth">
@foreach($product as $pro)
                <div
                  class="animated col-lg-2 col-md-4 col-sm-4 col-xs-4 diyCol fadeInUp wow animated"
                  module-style="animated column"
                  style="visibility: visible"
                >
                  <div
                    class="tem23-pro-item"
                    module-style="background-color"
                    style="background-color: rgba(0, 0, 0, 0)"
                  >
                    <div class="images">
                      <a href="{{route('product_single',$pro->id)}}">
                        <img
                          lazy-src="{{asset('uploads/'.$pro->image)}}"
                          alt="{{$pro->madel}}"
                        />
                      </a>
                    </div>
                    <div class="h3 title font-color">
                      <a
                        module-style="color"
                        href="{{route('product_single',$pro->id)}}"
                        class=""
                        style="color: rgb(34, 38, 41)"
                      >
                        {{$pro->madel}}
                      </a>
                    </div>
                    <div
                      class="description pro-text"
                      module-style="color"
                      style="color: rgb(34, 38, 41)"
                    ></div>
                  </div>
                </div>
@endforeach
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
      @if($section[4]->best == '0') style="display:none;" @endif
        layout-id="1"
        class="tem30-guide-language content-section noScrollMove bgFixed"
        style="
          background-size: inherit;
          background-color: rgb(0, 97, 163);
          background-repeat: no-repeat;
          padding: 6% 0px;
          background-position: 50% 50%;
        "
        layout-path="guide_language/public_guide_language_30"
        bgimg="true"
        lazy-src="https://img5541.weyesimg.com/uploads/www.xprintertech.com/images/15577089899037.jpg?imageView2/2/w/1440/format/webp/format/webp/format/webp/format/webp/format/webp"
      >
        <link template-css="layout" rel="stylesheet" type="text/css" />
        <div class="container" func-id="1">
          <!-- CUSTOM 0/GUIDE_LANGUAGE/PUBLIC_GUIDE_LANGUAGE_30:2015 BEGIN -->
          <div
            class="text wow animated fadeInUp animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated"
            module-style="animated"
            style="visibility: hidden"
          >
            <div class="title" module-style="color">
              <section module-edit="block.block_desc">
                <p>
                  <em
                    ><span style="font-size: 48px"
                      >{{desc($text[3])}}</span
                    ></em
                  >
                </p>
              </section>
            </div>
          </div>
          <!-- CUSTOM 0/GUIDE_LANGUAGE/PUBLIC_GUIDE_LANGUAGE_30:2015 END -->
        </div>
      </div>
      <div
      @if($section[5]->best == '0') style="display:none;" @endif
        layout-id="1"
        class="content-left content-section full-screen-spacing noScrollMove tem06-video"
        layout-style="align[13]"
        layout-path="video/public_video_6"
        style="
          background-color: rgba(0, 0, 0, 0);
          background-size: cover;
          background-repeat: no-repeat;
          padding: 3% 7% 1%;
          background-position: 50% 50%;
        "
      >
        <link template-css="layout" rel="stylesheet" type="text/css" />
        <div class="container full-screen">
          <div class="row flexBoxWrap">
            <div
              class="col-lg-6 col-md-6 col-sm-6 col-xs-12 content-float left"
              func-id="1"
            >
              <!-- CUSTOM 0/TEXT/PUBLIC_TEXT_4:404 BEGIN -->
              <!-- about us -->
              <div
                class="infobar wow animated fadeInUp animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated"
                module-style="animated"
                style="visibility: hidden"
              >
                <div class="h2 bg-color-after font-color-gray-level-0 title">
                  <section module-edit="block.block_name">
                    <p>
                      <span style="color: #222629"
                        ><strong
                          ><span style="font-size: 40px">{{__('app.h_about')}}</span></strong
                        ></span
                      >
                    </p>
                  </section>
                </div>
                <div class="about_text font-color-gray-level-6 description">
                  <section module-edit="block.block_desc">
                    <p style="text-align: justify">
                      <span style="color: #3e4245"
                        ><span style="font-size: 14px"
                          >&nbsp; &nbsp; {{desc($about)}}</span
                        ></span
                      >
                    </p>
                  </section>
                </div>
              </div>
              <!-- about us -->
              <!-- CUSTOM 0/TEXT/PUBLIC_TEXT_4:404 END -->
            </div>
            <div
              class="col-lg-6 col-md-6 col-sm-6 col-xs-12 content-float right"
              func-id="1"
              cms-sort="list-video"
              config_cms_number=""
            >
              <!-- CUSTOM 0/VIDEO/PUBLIC_VIDEO_6:2045 BEGIN -->
              <!-- tem04-video -->
              <video
                controls
                src="{{asset('uploads/'.$about->video)}}"
                poster="{{asset('uploads/'.$about->image)}}"
              ></video>
              <!-- CUSTOM 0/VIDEO/PUBLIC_VIDEO_6:2045 END -->
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <div class="darker" @if($section[6]->best == '0') style="display:none;" @endif class="title" data-content="title" align="center">
        <section module-edit="block.block_name">
          <p>
            <span style="color: #222629"
              ><strong
                ><span style="font-size: 36px"
                  >Partner</span
                ></strong
              ></span
            >
          </p>
        </section>
      </div>
      <div
      @if($section[6]->best == '0') style="display:none;" @endif
        layout-id="1"
        class="tem327-irregular tem256-irregular content-middle noScrollMove full-screen-spacing"
        layout-path="irregular/public_irregular_327"
        style="
          background-color: rgba(0, 0, 0, 0);
          background-size: cover;
          background-repeat: no-repeat;
          padding: 0% 7% 2%;
          background-position: 50% 50%;
        "
      >
        <link template-css="layout" rel="stylesheet" type="text/css" />
        <link template-css="layout" rel="stylesheet" type="text/css" />
        <link template-css="layout" rel="stylesheet" type="text/css" />
        <script type="text/javascript"></script>
        <div
          class="container full-screen"
          func-id="1"
          cms-sort="list-block"
          config_cms_number=""
        >
          <!-- CUSTOM 0/PICTURE/PUBLIC_PICTURE_306:2017 BEGIN -->
          <div id="i_62d7c7b566bf321">
            <div class="scrollBox">
              <ul class="clearfix" style="width: 1960.5px">
                @isset($partner)
                @foreach($partner as $part)
                <li class="swiper-slide" style="width: 332.75px">
                  <div
                    class="box"
                    module-style="background-color color"
                    style="
                      background-color: rgb(255, 255, 255);
                      color: rgb(51, 51, 51);
                    "
                  >
                    <div class="image">
                      <div class="icons">
                        <span
                          style="
                            color: rgb(255, 255, 255);
                            border-color: rgb(51, 51, 51);
                          "
                        >
                          <a class="icon-crop_free"></a>
                          @isset($part->website)
                          <a href="{{$part->website}}" class="icon-insert_link"></a>

                          @endisset
                        </span>
                      </div>
                      <img
                        alt="{{$part->name}}"
                        src="{{asset('uploads/'.$part->image)}}"
                      />
                    </div>
                    <div class="text">
                      <div class="title">{{$part->name}}</div>
                      <div class="description"></div>
                    </div>
                  </div>
                </li>
                @endforeach
                @endisset
              </ul>
            </div>
            <div
              class="swiper"
              module-style="border-color"
              style="border-color: rgba(0, 0, 0, 0.8)"
            ></div>
            <!-- STATIC BEGIN -->
            <input
              type="hidden"
              module-setting="column-lg"
              module-tips="列数 大屏幕 大桌面显示器 (≥1200px)"
              value="4"
            />
            <input
              type="hidden"
              module-setting="column-md"
              module-tips="列数 中等屏幕 桌面显示器 (≥992px)"
              value="2"
            />
            <input
              type="hidden"
              module-setting="column-sm"
              module-tips="列数 小屏幕 平板 (≥768px)"
              value="2"
            />
            <input
              type="hidden"
              module-setting="column-xs"
              module-tips="列数 超小屏幕 手机 (<768px)"
              value="1"
            />
            <input
              type="hidden"
              module-setting="speed"
              module-tips="速度"
              value="35"
            />
            <!-- STATIC END -->
            <script></script>
          </div>

          <!-- CUSTOM 0/PICTURE/PUBLIC_PICTURE_306:2017 END -->
        </div>
      </div>
      <div
      @if($section[7]->best == '0') style="display:none;" @endif
        layout-id="1"
        class="content-left content-section full-screen-spacing noScrollMove tem09-certified"
        layout-style="align[13]"
        layout-path="certified/public_certified_9"
        style="
          background-color: rgb(243, 244, 245);
          background-size: inherit;
          background-repeat: no-repeat;
          padding: 4% 7%;
          background-position: 50% 50%;
        "
        bgimg="true"
      >
        <link rel="stylesheet" />
        <link template-css="layout" rel="stylesheet" type="text/css" />
        <script></script>
        <div class="container mobile-pdlr0 full-screen">
          <div
            class="con"
            style="
              background-image: url('https://img5541.weyesimg.com/uploads/rsirawa8.allweyes.com/images/15457361703610.jpg');
            "
            layout-content="background-image"
          >
            <div func-id="1" cms-sort="list-block" config_cms_number="">
              <!-- CUSTOM 0/CERTIFIED/PUBLIC_CERTIFIED_9:2020 BEGIN -->
              <div class="tem09-certified_62d7c7b5686d222">
                <div
                  class="tem_con"
                  module-style="color"
                  style="color: rgb(255, 255, 255)"
                >
                  <div class="left">
                    <div class="l_img">
                      <div class="img">
                        <img
                          lazy-src=""
                          alt=""
                          src="https://img5541.weyesimg.com/uploads/www.xprintertech.com/images/15577094706604.jpg?imageView2/2/w/1920/q/75/format/webp"
                        />
                      </div>
                      <h3
                        class="bg-color title"
                        module-style="background-color"
                        style="background-color: rgb(0, 97, 163)"
                      >
                        FCC-of-barcode--printer
                      </h3>
                    </div>
                  </div>
                  <div class="right">
                    <div class="r_box">
                      <h2 class="title">
                        <section module-edit="block.block_name">
                          <p>
                            <strong
                              ><span style="font-size: 36px"
                                >{{name($text[4])}}</span
                              ></strong
                            >
                          </p>
                        </section>
                      </h2>
                      <div class="description">
                        <section module-edit="block.block_desc">
                          <p>
                            <span style="color: #3e4245"
                              ><span style="font-size: 14px"
                                >{{desc($text[4])}}&nbsp;</span
                              ></span
                            >
                          </p>
                        </section>
                      </div>
                      <div class="r_img">
                        <div class="img_con">
                          <ul>
                            @isset($certifi)
                            @foreach($certifi as $certif)
                            <li>
                              <div class="img">
                                <img
                                  alt="{{$certif->certifi}}"
                                  src="{{asset('uploads/'.$certif->image)}}"
                                />
                                <div class="img_bg">
                                  <span
                                    class="icon-search"
                                    style="left: 0px; top: 106px"
                                    ><i
                                      class="bg-color"
                                      module-style="background-color"
                                      style="background-color: rgb(0, 97, 163)"
                                    ></i
                                  ></span>
                                </div>
                              </div>
                              <h3 class="hide">{{$certif->certifi}}</h3>
                            </li>
                            @endforeach
                            @endisset
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="center_img swiper-container-horizontal">
                    <div
                      class="swiper-wrapper"
                      style="
                        transform: translate3d(-1519px, 0px, 0px);
                        transition-duration: 0ms;
                      "
                    >
                      <div
                        class="swiper-slide swiper-slide-duplicate swiper-slide-prev"
                        data-swiper-slide-index="8"
                        style="width: 1519px"
                      >
                        <div class="img_con">
                          <a href="certificate"
                            ><img
                              class="swiper-lazy"
                              data-src="https://img5541.weyesimg.com/uploads/www.xprintertech.com/images/15577095966525.jpg?imageView2/2/w/1920/q/75/format/webp"
                              alt="CE-EMC-of-76-series"
                          /></a>
                          <p class="title">CE-EMC-of-76-series</p>
                        </div>
                      </div>
                      <div
                        class="swiper-slide swiper-slide-active"
                        data-swiper-slide-index="0"
                        style="width: 1519px"
                      >
                        <div class="img_con">
                          <a href="certificate"
                            ><img
                              class="swiper-lazy swiper-lazy-loaded"
                              alt="FCC-of-barcode--printer"
                              src="https://img5541.weyesimg.com/uploads/www.xprintertech.com/images/15577094706604.jpg?imageView2/2/w/1920/q/75/format/webp"
                          /></a>
                          <p class="title">FCC-of-barcode--printer</p>
                        </div>
                      </div>
                      <div
                        class="swiper-slide swiper-slide-next"
                        data-swiper-slide-index="1"
                        style="width: 1519px"
                      >
                        <div class="img_con">
                          <a href="certificate"
                            ><img
                              class="swiper-lazy"
                              data-src="https://img5541.weyesimg.com/uploads/www.xprintertech.com/images/15577094905263.jpg?imageView2/2/w/1920/q/75/format/webp"
                              alt="FCC-VOC-of-76-series"
                          /></a>
                          <p class="title">FCC-VOC-of-76-series</p>
                        </div>
                      </div>
                      <div
                        class="swiper-slide"
                        data-swiper-slide-index="2"
                        style="width: 1519px"
                      >
                        <div class="img_con">
                          <a href="certificate"
                            ><img
                              class="swiper-lazy"
                              data-src="https://img5541.weyesimg.com/uploads/www.xprintertech.com/images/15577095031595.jpg?imageView2/2/w/1920/q/75/format/webp"
                              alt="CE-LVD-2-of-58-series"
                          /></a>
                          <p class="title">CE-LVD-2-of-58-series</p>
                        </div>
                      </div>
                      <div
                        class="swiper-slide"
                        data-swiper-slide-index="3"
                        style="width: 1519px"
                      >
                        <div class="img_con">
                          <a href="certificate"
                            ><img
                              class="swiper-lazy"
                              data-src="https://img5541.weyesimg.com/uploads/rsirawa8.allweyes.com/images/15457294337452.jpg?imageView2/2/w/1920/q/75/format/webp"
                              alt="CE-LVD-of-76-series"
                          /></a>
                          <p class="title">CE-LVD-of-76-series</p>
                        </div>
                      </div>
                      <div
                        class="swiper-slide"
                        data-swiper-slide-index="4"
                        style="width: 1519px"
                      >
                        <div class="img_con">
                          <a href="certificate"
                            ><img
                              class="swiper-lazy"
                              data-src="https://img5541.weyesimg.com/uploads/www.xprintertech.com/images/15577095405190.jpg?imageView2/2/w/1920/q/75/format/webp"
                              alt="CE-LVD--1-of-58-series"
                          /></a>
                          <p class="title">CE-LVD--1-of-58-series</p>
                        </div>
                      </div>
                      <div
                        class="swiper-slide"
                        data-swiper-slide-index="5"
                        style="width: 1519px"
                      >
                        <div class="img_con">
                          <a href="certificate"
                            ><img
                              class="swiper-lazy"
                              data-src="https://img5541.weyesimg.com/uploads/www.xprintertech.com/images/15577095543514.jpg?imageView2/2/w/1920/q/75/format/webp"
                              alt="CE-EMC-2-of-58-series"
                          /></a>
                          <p class="title">CE-EMC-2-of-58-series</p>
                        </div>
                      </div>
                      <div
                        class="swiper-slide"
                        data-swiper-slide-index="6"
                        style="width: 1519px"
                      >
                        <div class="img_con">
                          <a href="certificate"
                            ><img
                              class="swiper-lazy"
                              data-src="https://img5541.weyesimg.com/uploads/www.xprintertech.com/images/15577095688628.jpg?imageView2/2/w/1920/q/75/format/webp"
                              alt="CE-EMC-1-of-58-series"
                          /></a>
                          <p class="title">CE-EMC-1-of-58-series</p>
                        </div>
                      </div>
                      <div
                        class="swiper-slide"
                        data-swiper-slide-index="7"
                        style="width: 1519px"
                      >
                        <div class="img_con">
                          <a href="certificate"
                            ><img
                              class="swiper-lazy"
                              data-src="https://img5541.weyesimg.com/uploads/www.xprintertech.com/images/15577095854537.jpg?imageView2/2/w/1920/q/75/format/webp"
                              alt="CE-EMC-of-barcode-printer"
                          /></a>
                          <p class="title">CE-EMC-of-barcode-printer</p>
                        </div>
                      </div>
                      <div
                        class="swiper-slide swiper-slide-duplicate-prev"
                        data-swiper-slide-index="8"
                        style="width: 1519px"
                      >
                        <div class="img_con">
                          <a href="certificate"
                            ><img
                              class="swiper-lazy"
                              data-src="https://img5541.weyesimg.com/uploads/www.xprintertech.com/images/15577095966525.jpg?imageView2/2/w/1920/q/75/format/webp"
                              alt="CE-EMC-of-76-series"
                          /></a>
                          <p class="title">CE-EMC-of-76-series</p>
                        </div>
                      </div>
                      <div
                        class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                        data-swiper-slide-index="0"
                        style="width: 1519px"
                      >
                        <div class="img_con">
                          <a href="certificate"
                            ><img
                              class="swiper-lazy swiper-lazy-loaded"
                              alt="FCC-of-barcode--printer"
                              src="https://img5541.weyesimg.com/uploads/www.xprintertech.com/images/15577094706604.jpg?imageView2/2/w/1920/q/75/format/webp"
                          /></a>
                          <p class="title">FCC-of-barcode--printer</p>
                        </div>
                      </div>
                    </div>
                    <div class="img_left">
                      <span
                        class="glyphicon-chevron-left icon-keyboard_arrow_left"
                      ></span>
                    </div>
                    <div class="img_right">
                      <span
                        class="glyphicon-chevron-right icon-keyboard_arrow_right"
                      ></span>
                    </div>
                    <div class="icon-clear searchbox"></div>
                  </div>
                </div>
              </div>
              <script></script>
              <!-- CUSTOM 0/CERTIFIED/PUBLIC_CERTIFIED_9:2020 END -->
            </div>
          </div>
        </div>
      </div>
      <div
      @if($section[8]->best == '0') style="display:none;" @endif
        layout-id="1"
        class="titlebar tem01-title title-section noScrollMove full-screen-spacing"
        layout-path="title/public_title_1"
        style="
          background-color: rgba(0, 0, 0, 0);
          background-size: cover;
          background-repeat: no-repeat;
          padding: 3% 0px 0px;
          background-position: 50% 50%;
        "
      >
        <div class="container mobile-pdlr0 full-screen">
          <div func-id="1">
            <div class="tem01-title tem01-list-title tem00-list-title">
              <link template-css="layout" rel="stylesheet" type="text/css" />

              <div
                class="title-header wow animated fadeInUp animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated"
                module-style="animated"
                style="visibility: hidden"
              >
                <div class="title" data-content="title">
                  <section module-edit="block.block_name">
                    <p>
                      <strong><span style="font-size: 36px;text-transform: uppercase">{{__('app.h_news')}}</span></strong>
                    </p>
                  </section>
                </div>
                {{-- <div class="subtitle wow animated fadeInUp">
                  <section module-edit="block.block_desc">
                    <p>
                      <span style="color: #3e4245"
                        ><span style="font-family: arial, helvetica, sans-serif"
                          ><span style="font-size: 14px"
                            >Keep an eye on our latest news</span
                          ></span
                        ></span
                      >
                    </p>
                  </section>
                </div> --}}
              </div>
              {{-- <div class="more border-color-a">
                <a href="javascript:;" block-edit="link">More</a>
              </div>
              <div class="clearfix"></div> --}}
            </div>
            <!--tem01-title-->
            <!-- CUSTOM 0/TITLE/PUBLIC_TITLE_1:405 END -->
          </div>
        </div>
      </div>
      <div
      @if($section[8]->best == '0') style="display:none;" @endif
        layout-id="1"
        class="content-section tem47-news noScrollMove full-screen-spacing"
        layout-path="news/public_news_47"
        layout-class="shape/news"
        style="
          background-color: rgba(0, 0, 0, 0);
          background-size: cover;
          background-repeat: no-repeat;
          padding: 1% 7% 3%;
          background-position: 50% 50%;
        "
      >
        <link template-css="layout" rel="stylesheet" type="text/css" />
        <div class="container mobile-pdlr0 full-screen">
          <div
            class="row interval clearboth"
            func-id="1"
            cms-sort="list-product"
            config_cms_number=""
          >
            <!-- CUSTOM 0/NEWS/PUBLIC_NEWS_46:2093 BEGIN -->
            <div class="flexBoxWrap">

              @isset($news)
              @foreach($news as $new)
              <div
                class="animated col-lg-4 col-md-4 col-sm-4 col-xs-12 column fadeInUp wow animated animated animated animated"
                module-style="animated column"
                style="visibility: hidden"
              >
                <div
                  class="news-li"
                  module-style="color"
                  style="color: rgb(34, 38, 41)"
                >
                  <a href="{{route('news_single',$new->id)}}">
                    <div class="images">
                      <img
                        lazy-src="{{asset('uploads/'.$new->image)}}"
                        alt="New Retail Trend Driving Our Innovations in Euroshop 2020"
                      />
                    </div>
                    <div class="text">
                      <div class="title">
                        {{title($new)}}
                      </div>
                      {{-- <div class="time font-color">2019-11-15</div> --}}
                      <div class="description">
                        {{desc($new)}}
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              @endforeach
              @endisset
              <div class="clearfix"></div>
            </div>
            <!-- CUSTOM 0/NEWS/PUBLIC_NEWS_46:2093 END -->
          </div>
        </div>
      </div>
    </div>
    <div
      id="tcaptcha_transform_dy"
      style="
        opacity: 0;
        position: absolute;
        transition: opacity 0.3s linear 0s;
        top: -1e6px;
      "
    >
      <iframe
        id="tcaptcha_iframe_dy"
        frameborder="0"
        border="0"
        marginheight="0"
        marginwidth="0"
        scrolling="no"
        src=""
      ></iframe>
    </div>
    <div
      id="tcaptcha_transform_dy"
      style="
        opacity: 0;
        position: absolute;
        transition: opacity 0.3s linear 0s;
        top: -1e6px;
      "
    ></div>
    <div
      id="tcaptcha_transform_dy"
      style="
        opacity: 0;
        position: absolute;
        transition: opacity 0.3s linear 0s;
        top: -1e6px;
      "
    ></div>
    <div
      id="tcaptcha_transform_dy"
      style="
        opacity: 0;
        position: absolute;
        transition: opacity 0.3s linear 0s;
        top: -1e6px;
      "
    ></div>
    <div
      id="tcaptcha_transform_dy"
      style="
        opacity: 0;
        position: absolute;
        transition: opacity 0.3s linear 0s;
        top: -1e6px;
      "
    ></div>
    <div
      id="tcaptcha_transform_drag"
      style="
        opacity: 0;
        position: absolute;
        transition: opacity 0.3s linear 0s;
        top: -1e6px;
      "
    ></div>
    <div
      id="tcaptcha_transform_drag"
      style="
        opacity: 0;
        position: absolute;
        transition: opacity 0.3s linear 0s;
        top: -1e6px;
      "
    ></div>
    <div
      id="tcaptcha_transform_drag"
      style="
        opacity: 0;
        position: absolute;
        transition: opacity 0.3s linear 0s;
        top: -1e6px;
      "
    ></div>
@endsection