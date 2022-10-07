@extends('user.app')
@section('content')
<div template-layout="5" style="padding-bottom: 0px">
    <div
      layout-id="5"
      layout-path="bread/public_bread_27"
      class="tem27-bread content-left"
      style="padding: 0"
      layout-style="align[13]"
    >
      <link template-css="layout" rel="stylesheet" type="text/css" />
      <div func-id="5" config_cms_number="" cms-sort="list-block">
        <!-- CUSTOM 0/PICTURE/PUBLIC_BREAD_PICTURE_1:2119 BEGIN -->
        <a href="javascript:;">
          <div
            class="image"
            bgimg
            lazy-src="{{asset('uploads/'.$about[0]->image)}}"

          >
            
          </div>
        </a>

        <!-- CUSTOM 0/PICTURE/PUBLIC_BREAD_PICTURE_1:2119 END -->
      </div>
      <div func-id="5">
        <!-- CUSTOM 0/BREAD/PUBLIC_BREAD_27:['{d}'] BEGIN -->
        <div
          class="item wow animated fadeInUp animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated"
          module-style="background-color animated color"
          data-state="no_hide"
          data-posi="static"
          style="padding-top: 10px; padding-bottom: 10px; visibility: visible"
        >
          <div class="container" id="b_5eb90541239c51">
            <div class="col-sm-5 col-xs-12 left">
              <div class="title">
                <h1 class="normal">
                  <!-- TOPIC_NAME BEGIN-->{{__('app.h_about')}}
                  <!-- TOPIC_NAME END-->
                </h1>
              </div>
            </div>
            <!-- STATIC BEGIN -->
            <input
              type="hidden"
              module-setting="title"
              module-tips="当前页面标题"
              module-value="select::{'show':'显示','hide':'隐藏'}"
            />
            <input
              type="hidden"
              module-setting="padding"
              module-tips="面包屑上下间距"
              value="10px"
            />
            <input
              type="hidden"
              module-setting="posi"
              module-tips="文字定位"
              value="static"
              module-value="select::{'posi':'是','static':'否'}"
            />
            <input
              type="hidden"
              module-setting="hd"
              module-tips="不同分辨率下隐藏"
              value="no_hide"
              module-value="select::{'big':'ipad (≤768px)','middle':'大屏手机 (≤480px)','small':'小屏手机 (≤360px)','no_hide':'不隐藏'}"
            />
            <!-- STATIC END -->
          </div>
        </div>
        <script></script>
        <!-- CUSTOM 0/BREAD/PUBLIC_BREAD_27:['{d}'] END -->
      </div>
    </div>
  </div>
  <div template-layout="13" style="padding-bottom: 0px">
    <div
      layout-id="13"
      layout-path="onepage/public_onepage_1"
      class="tem01-category_desc"
    >
      <div class="container">
        <!-- CUSTOM 0/CATEGORY_DESC/PUBLIC_CATEGORY_DESC_1:['{d}'] BEGIN -->
        <!-- data-category_desc -->
        <div data-content="category_desc" class="description"></div>

        <script type="text/javascript"></script>
        <!-- data-category_desc -->

        <!-- CUSTOM 0/CATEGORY_DESC/PUBLIC_CATEGORY_DESC_1:['{d}'] END -->
      </div>
    </div>
    <div
      layout-id="1"
      layout-style="align[13]"
      class="tem24-brand-story content-right content-section"
      layout-path="brand_story/public_brand_story_24"
      layout-class="shape/brand_story"
    >
      <link template-css="layout" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" />
      <div class="container">
        <div class="row wrap flexBoxWrap">
          <div
            class="col-md-6 col-xs-12"
            template-module="1"
            module-path="picture/public_picture_409"
          >
            <div func-id="1" config_cms_number="" cms-sort="list-block">
              <!-- CUSTOM 0/PICTURE/PUBLIC_PICTURE_409:2122 BEGIN -->
              <div
                class="animated fadeInUp picture wow animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated"
                module-style="animated"
                style="visibility: visible"
              >
                <div class="txt" id="c_5eb9054124ca03">
                  <div class="items">
                    <div class="swiper-container">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <a href="javascript:;" class="image">
                            <img
                              src="{{asset('uploads/'.$about[0]->image)}}"
                              alt="Company Profile"
                              class="swiper-lazy"
                            />
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- STATIC BEGIN -->
                  <input
                    type="hidden"
                    module-setting="effect"
                    module-tips="切换效果"
                    value="slide"
                    module-value="select::{'slide':'位移切入','fade':'淡入','cube':'方块','coverflow':'3d流'}"
                  />
                  <input
                    type="hidden"
                    module-setting="autoplay"
                    module-tips="自动轮播/ms"
                    value="0"
                  />
                  <input
                    type="hidden"
                    module-setting="loop"
                    module-tips="循环播放"
                    value="false"
                    module-value="select::{'true':'是','false':'否'}"
                  />
                  <input
                    type="hidden"
                    module-setting="dots"
                    module-tips="分页器"
                    value="true"
                    module-value="select::{'true':'显示','false':'隐藏'}"
                  />
                  <input
                    type="hidden"
                    module-setting="arrow"
                    module-tips="箭头样式"
                    value="hide"
                    module-value="select::{'icon-trending_neutral':'样式1','icon-arrow_forward':'样式2','icon-gengduo1':'样式3','icon-keyboard_arrow_right':'样式4','hide':'隐藏'}"
                  />
                  <!-- STATIC END -->
                </div>
              </div>
              <script></script>
              <script></script>

              <!-- CUSTOM 0/PICTURE/PUBLIC_PICTURE_409:2122 END -->
            </div>
          </div>
          <div
            class="col-md-6 col-xs-12"
            template-module="1"
            module-path="text/public_text_31"
          >
            <div func-id="1">
              <!-- CUSTOM 0/TEXT/PUBLIC_TEXT_31:429 BEGIN -->
              <!-- tem06-irregular -->
              <div
                class="tem06-irregular-text wow animated fadeInUp animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated"
                module-style="animated"
                style="visibility: visible"
              >
                <div class="h2 bg-color-after font-color-gray-level-3 title">
                  <section module-edit="block.block_name">
                    <div
                      class="h2 bg-color-after font-color-gray-level-3 title"
                    >
                      <p>
                        <span style="font-size: 28px">{{title($about[0])}}</span>
                      </p>
                    </div>
                  </section>
                </div>
                <div class="text description">
                  <section module-edit="block.block_desc">
                    <p>
                        {{desc($about[0])}}
                    </p>
                  </section>
                  <div
              func-id="1"
              cms-sort="list-video"
              config_cms_number=""
            >
              <!-- CUSTOM 0/VIDEO/PUBLIC_VIDEO_6:2045 BEGIN -->
              <!-- tem04-video -->
              <video width="400px"
                controls
                src="{{asset('uploads/'.$about[0]->video)}}"
                poster="{{asset('uploads/'.$about[0]->image)}}"
              ></video>
              <!-- CUSTOM 0/VIDEO/PUBLIC_VIDEO_6:2045 END -->
            </div>
                </div>
              </div>
              <!-- tem06-irregular -->
              <script type="text/javascript"></script>
              <!-- CUSTOM 0/TEXT/PUBLIC_TEXT_31:429 END -->
            </div>
          </div>
          
          <div class="clearfix"></div>
        </div>
      </div>

      
    </div>
    
    <div
      layout-id="1"
      class="titlebar tem01-title title-section noScrollMove full-screen-spacing"
      layout-path="title/public_title_1"
      layout-class="shape/title"
      style="
        background-color: rgb(245, 245, 245);
        background-size: cover;
        background-repeat: no-repeat;
        padding: 20px 0px 0px;
        background-position: 50% 50%;
      "
    >
      <div class="container mobile-pdlr0 full-screen">
        <div func-id="1">
          <!-- CUSTOM 0/TITLE/PUBLIC_TITLE_1:431 BEGIN -->
          <!--tem01-title-->
          <div class="tem01-title tem01-list-title tem00-list-title">
            <link template-css="layout" rel="stylesheet" type="text/css" />

            <div
              class="title-header wow animated fadeInUp animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated"
              module-style="animated"
              style="visibility: visible"
            >
              <div class="title" data-content="title">
                <section module-edit="block.block_name">
                  <p><span style="font-size: 36px">{{__('app.culture')}} </span></p>
                </section>
              </div>
              <div class="subtitle wow animated fadeInUp">
                <section module-edit="block.block_desc"></section>
              </div>
            </div>
            <div class="more border-color-a">
              <a href="javascript:;" block-edit="link">More</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <!--tem01-title-->
          <!-- CUSTOM 0/TITLE/PUBLIC_TITLE_1:431 END -->
        </div>
      </div>
      
    </div>
    <div
      layout-id="1"
      class="content-left noScrollMove tem86-service darker"
      layout-style="align[13]"
      layout-path="service/public_service_86"
      layout-class="shape/service"
      style="
        background-color: rgb(245, 245, 245);
        background-size: cover;
        background-repeat: no-repeat;
        padding: 37.55px 0px;
        background-position: 50% 50%;
      "
    >
      <link template-css="layout" rel="stylesheet" type="text/css" />
      <div
        class="container flexBoxWrap"
        template-module="1"
        module-path="service/public_service_86"
      >
      @isset($text)
          <div
          class="animated col-lg-4 col-md-4 col-sm-4 col-xs-12 fadeInUp item wow animated animated"
          layout-style="animated column"
          func-id="1"
          style="visibility: visible"
        >
          <div class="box">
            <div class="title">
              <section module-edit="block.block_name">
                <p>
                  <span style="color: #0061a3"><strong>1.</strong></span>
                </p>
              </section>
            </div>
            <div class="description">
              <section module-edit="block.block_desc">
                <p>
                  <span style="color: #0061a3"
                    ><span style="font-size: 22px"
                      ><strong>{{name($text[5])}}</strong></span
                    ></span
                  >
                </p>

                <p>
                    {{desc($text[5])}}&nbsp;
                </p>
              </section>
            </div>
          </div>
        </div>
        <div
          class="animated col-lg-4 col-md-4 col-sm-4 col-xs-12 fadeInUp item wow animated animated"
          layout-style="animated column"
          func-id="1"
          style="visibility: visible"
        >
          <div class="box">
            <div class="title">
              <section module-edit="block.block_name">
                <p>
                  <span style="color: #0061a3"><strong>1.</strong></span>
                </p>
              </section>
            </div>
            <div class="description">
              <section module-edit="block.block_desc">
                <p>
                  <span style="color: #0061a3"
                    ><span style="font-size: 22px"
                      ><strong>{{name($text[6])}}</strong></span
                    ></span
                  >
                </p>

                <p>
                    {{desc($text[6])}}&nbsp;
                </p>
              </section>
            </div>
          </div>
        </div>
        <div
          class="animated col-lg-4 col-md-4 col-sm-4 col-xs-12 fadeInUp item wow animated animated"
          layout-style="animated column"
          func-id="1"
          style="visibility: visible"
        >
          <div class="box">
            <div class="title">
              <section module-edit="block.block_name">
                <p>
                  <span style="color: #0061a3"><strong>1.</strong></span>
                </p>
              </section>
            </div>
            <div class="description">
              <section module-edit="block.block_desc">
                <p>
                  <span style="color: #0061a3"
                    ><span style="font-size: 22px"
                      ><strong>{{name($text[7])}}</strong></span
                    ></span
                  >
                </p>

                <p>
                    {{desc($text[7])}}&nbsp;
                </p>
              </section>
            </div>
          </div>
        </div>
      @endisset
        
      </div>
      
    </div>
    <div
      layout-id="1"
      class="tem217-irregular content-section noScrollMove full-screen-spacing"
      layout-path="irregular/public_irregular_217"
      layout-class="shape/irregular"
      style="
        background-color: rgba(0, 0, 0, 0);
        background-size: cover;
        background-repeat: no-repeat;
        padding: 40px 0px;
        background-position: 50% 50%;
      "
    >
      <link template-css="layout" rel="stylesheet" type="text/css" />
    </div>
  </div>
@endsection