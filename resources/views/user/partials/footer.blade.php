<div template-layout="6" style="padding-bottom: 0px">
    <div
      class="tem01-footer noScrollMove full-screen-spacing"
      layout-id="6"
      id="tem01-footer"
      layout-path="footer/public_footer_1"
      style="
        background-color: rgb(38, 38, 38);
        background-size: cover;
        background-repeat: no-repeat;
        padding: 2% 7%;
        background-position: 50% 50%;
      "
    >
      <link template-css="layout" rel="stylesheet" type="text/css" />
      <div class="tem01-footer-info slideanim">
        <div class="container full-screen">
          <div class="row">
            <div class="col-md-3 col-xs-6 tem01-footer-info-grid links">
              <div class="detail-share">
                <a
                  rel="nofollow"
                  href="https://www.facebook.com/Xprinterposkey"
                  target="_blank"
                  ><span class="fa icon-facebook"></span></a
                ><a rel="nofollow" href="index.html" target="_blank"
                  ><span class="fa icon-pinterest"></span></a
                ><a
                  rel="nofollow"
                  href="https://twitter.com/Xprintergroup"
                  target="_blank"
                  ><span class="fa icon-twitter4"></span></a
                ><a
                  rel="nofollow"
                  href="https://www.youtube.com/channel/UCi9UPJTIsrOGSHnLfNDFEgQ"
                  target="_blank"
                  ><span class="fa icon-youtube3"></span></a
                ><a
                  rel="nofollow"
                  href="https://web.skype.com"
                  target="_blank"
                  <span=""
                  class="fa icon-skype2"
                ></a
                ><a
                  rel="nofollow"
                  href="https://www.linkedin.com/company/xprinter-group"
                  target="_blank"
                  ><span class="fa icon-linkedin2"></span
                ></a>
              </div>
            </div>
            <div class="col-md-3 col-xs-6 links">
              <!-- CUSTOM 0/FOOTER/PUBLIC_FOOT_TEXT_2:408 BEGIN -->
              <!-- about us -->
              <div class="h4 title">
                <section module-edit="block.block_name">
                  <p>
                    <span style="color: #d3d3d3"
                      ><span style="font-size: 18px">About Us</span></span
                    >
                  </p>
                </section>
              </div>
              <section module-edit="block.block_desc">
                <ul class="description">
                  <li>
                    <span style="font-family: arial, helvetica, sans-serif"
                      ><a href="{{route('news-us')}}">{{__('app.h_news')}}</a></span
                    >
                  </li>
                  <li>
                    <span style="font-family: arial, helvetica, sans-serif"
                      ><a href="{{route('about-us')}}"
                        >{{__('app.h_about')}}</a
                      ></span
                    >
                  </li>
                </ul>
              </section>

              <!-- about us -->
              <!-- CUSTOM 0/FOOTER/PUBLIC_FOOT_TEXT_2:408 END -->
            </div>
            <div class="col-md-3 col-xs-12 links">
              <!-- CUSTOM 0/FOOTER/PUBLIC_FOOT_TEXT_3:409 BEGIN -->
              <!-- about us -->
              <div class="h4 title">
                <section module-edit="block.block_name">
                  <p>
                    <span style="color: #d3d3d3"
                      ><span style="font-size: 18px">Contact Us</span></span
                    >
                  </p>
                </section>
              </div>
              <section module-edit="block.block_desc">
                <div class="links-info description">
                  <span style="font-family: arial, helvetica, sans-serif"
                    >Contact :<br />
                    Tel : {{$contact->phone}}<br />
                    E-mail :&nbsp;<a href="mailto:overseas@xprinter.net"
                      >{{$contact->email}}</a
                    ><br />
                    {{$contact->adress}}</span
                  >
                </div>
              </section>

              <!-- about us -->
              <!-- CUSTOM 0/FOOTER/PUBLIC_FOOT_TEXT_3:409 END -->
            </div>
            <div class="col-md-3 col-xs-12">
              <!-- CUSTOM 0/FOOTER/PUBLIC_FOOT_FORM_1:410 BEGIN -->
              <div id="i_62908472f3be427">
                <!-- form -->
                <div class="h4 title">
                  <section module-edit="block.block_name">
                    <p>
                      <span style="color: #d3d3d3"
                        ><span style="font-size: 18px"
                          >Leave Us&nbsp; A Message</span
                        ></span
                      >
                    </p>
                  </section>
                </div>

                <div
                  data-fields="form"
                  id="inquire_form"
                  class="inquire_form bv-form form"
                  novalidate="novalidate"
                >
                  <input
                    type="hidden"
                    name="pages"
                    value=""
                    class="pages_62908472f3be427"
                  />
                  <div class="form-group">
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      placeholder="* Name"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <input
                      type="email"
                      name="email"
                      class="form-control"
                      placeholder="* E-mail"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <textarea
                      name="contents"
                      rows="1"
                      class="form-control"
                      placeholder="* Content"
                      required
                    ></textarea>
                  </div>
                  <div class="form-group">
                    <input name="idType" type="hidden" value="0" />
                    <button
                      class="btn btn-primary bg-color"
                      type="submit"
                      event-type="static"
                    >
                      Send Inquiry Now
                    </button>
                  </div>
                </div>
                <!-- form -->
                <script></script>
              </div>
              <!-- CUSTOM 0/FOOTER/PUBLIC_FOOT_FORM_1:410 END -->
              <div func-id="1">
                <!-- CUSTOM 0/FOOTER/PUBLIC_FOOT_MAP_1:['{d}'] BEGIN -->
                <!-- 站点地图 -->
                <div class="sitemap-link" module-style="color">
                  <a href="sitemap.html">
                    <span class="success-icon icon-position"></span>
                    Sitemap
                  </a>
                </div>
                <!-- 站点地图 -->
                <script type="text/javascript"></script>
                <!-- CUSTOM 0/FOOTER/PUBLIC_FOOT_MAP_1:['{d}'] END -->
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
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
  <!-- tem06-footer -->
  <div
    class="tem06-copyright noScrollMove"
    widget-style="background"
    style="
      background-position: 0% 0%;
      background-color: rgba(0, 0, 0, 0.9);
      background-size: auto;
      background-repeat: repeat;
    "
  >
    <link template-css="widget" rel="stylesheet" type="text/css" />
    <div class="container">
      <div class="row bottom">
        <!--版权-->
        {{-- <div class="copyright">
          <section
            template-edit="block.block_desc"
            template-sign="co_copyright"
          >
            <p>Copyright © 2022 Avtivepos | All Rights Reserved</p>
          </section>
        </div> --}}
        <div class="clearfix"></div>
        {{-- <div class="share-to">
          <a
            href="https://www.facebook.com/Xprinterposkey/"
            target="_blank"
            rel="nofollow"
          >
            <span class="fa icon-facebook"></span>
          </a>
          <a
            href="https://twitter.com/Xprintergroup"
            target="_blank"
            rel="nofollow"
          >
            <span class="fa icon-twitter4"></span>
          </a>
          <a
            href="https://www.youtube.com/channel/UCi9UPJTIsrOGSHnLfNDFEgQ"
            target="_blank"
            rel="nofollow"
          >
            <span class="fa icon-youtube3"></span>
          </a>
          <a
            href="https://www.linkedin.com/company/xprinter-group/"
            target="_blank"
            rel="nofollow"
          >
            <span class="fa icon-linkedin2"></span>
          </a>
          <a
            href="https://www.instagram.com/xprinter_tech/"
            target="_blank"
            rel="nofollow"
          >
            <span class="fa icon-instagram"></span>
          </a>
        </div> --}}
        <div
          data-content="create-app"
          class="tem-download-app col-sm-12 text-center"
        >
          <a
            href="index.html#"
            class="button-box border-color-hover border-color-hover-before bg-color-hover-before"
            data-toggle="modal"
            data-target="#download-app"
            onclick="downloadApp()"
            ><span class="icon-android mr5"></span
            ><span class="icon-apple mr15"></span>Get This APP</a
          >
        </div>
      </div>
    </div>
  </div>