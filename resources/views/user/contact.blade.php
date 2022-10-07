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
      <div func-id="5" cms-sort="list-block">
        <!-- CUSTOM 0/PICTURE/PUBLIC_PICTURE_P26:2058 BEGIN -->

        <div
          class="animated fadeInUp images wow animated animated animated animated animated animated animated animated animated"
          module-style="animated"
          style="visibility: visible"
        >
          <img
            src="{{asset('img/'.$contact->image)}}"
            alt=""
          />
        </div>

        <!-- CUSTOM 0/PICTURE/PUBLIC_PICTURE_P26:2058 END -->
      </div>
      <div func-id="5">
        <!-- CUSTOM 0/BREAD/PUBLIC_BREAD_27:['{d}'] BEGIN -->
        <div
          class="item wow animated fadeInUp animated animated animated animated animated animated animated animated animated animated animated animated animated animated"
          module-style="background-color animated color"
          data-state="no_hide"
          data-posi="static"
          style="padding-top: 10px; padding-bottom: 10px; visibility: visible"
        >
          <div class="container" id="b_5d2fd183bc0ef1">
           
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
      class="tem36-contact content-section darker"
      style="background-color: #f9f9f9"
      id="tem36-contact"
      layout-path="contact/public_contact_36"
      layout-class="shape/contact"
    >
      <link template-css="layout" rel="stylesheet" type="text/css" />
      <div class="container">
        <div class="wrap">
          <div class="col-lg-4 col-md-4">
            <div
              class="L-text"
              template-module="1"
              module-path="text/public_text_204"
            >
              <div func-id="1" config_cms_number="">
                <!-- CUSTOM 0/TEXT/PUBLIC_TEXT_204:2127 BEGIN -->
                <div class="box">
                  <div class="h3 title">
                    <section module-edit="block.block_name">
                      <p>
                        <span style="font-size: 20px"
                          ><strong>CONTACT US</strong></span
                        >
                      </p>
                    </section>
                  </div>
                  <div class="item">
                    <a
                      href="javascript:;"
                      class="animated clearfix fadeInUp wow animated"
                      module-style="animated color border-color"
                      style="
                        color: rgb(102, 102, 102);
                        border-color: rgb(204, 204, 204);
                        visibility: visible;
                      "
                    >
                      <div class="icon">
                        <span class="icon-local_phone"></span>
                      </div>
                      <div class="description">Tel：{{$contact->phone}}</div>
                    </a>
                  </div>
                  <div class="item">
                    <a
                      href="javascript:;"
                      class="animated clearfix fadeInUp wow animated"
                      module-style="animated color border-color"
                      style="
                        color: rgb(102, 102, 102);
                        border-color: rgb(204, 204, 204);
                        visibility: visible;
                      "
                    >
                      <div class="icon">
                        <span class="icon-uniE63B"></span>
                      </div>
                      <div class="description">
                        E-mail：{{$contact->email}}
                      </div>
                    </a>
                  </div>
                  <div class="item">
                    <a
                      href="javascript:;"
                      class="animated clearfix fadeInUp wow animated"
                      module-style="animated color border-color"
                      style="
                        color: rgb(102, 102, 102);
                        border-color: rgb(204, 204, 204);
                        visibility: visible;
                      "
                    >
                      <div class="icon">
                        <span class="icon-placeholder"></span>
                      </div>
                      <div class="description">
                        {{$contact->adress}}
                      </div>
                    </a>
                  </div>
                </div>
                <!-- CUSTOM 0/TEXT/PUBLIC_TEXT_204:2127 END -->
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-8">
            <div func-id="1">
              <!-- CUSTOM 0/CONTACT/PUBLIC_CONTACT_34:['{d}'] BEGIN -->
              <div
                class="contact-form wow animated fadeInUp animated animated animated"
                module-style="animated"
                style="visibility: visible"
              >
                <form
                  action="https://www.xprintertech.com/inquire/list"
                  method="post"
                  data-fields="form_5d2fd183c7ff24"
                >
                  <input
                    type="hidden"
                    name="pages"
                    value=""
                    class="pages_5d2fd183c7ff24"
                  />
                  <div class="h3 title">
                    <section module-edit="block.block_name">
                      ABOUT YOU
                    </section>
                  </div>

                  <div
                    class="form-group has-feedback"
                    module-style="color border-color background-color"
                  >
                    <label for="">Name</label>
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      placeholder="Name"
                      required
                    />
                  </div>
                  <div
                    class="form-group has-feedback"
                    module-style="color border-color background-color"
                  >
                    <label for="">E-mail</label>
                    <input
                      type="email"
                      name="email"
                      class="form-control"
                      required
                      placeholder="E-mail"
                    />
                  </div>
                  <div
                    class="form-group has-feedback"
                    module-style="color border-color background-color"
                  >
                    <label for="">Company Name</label>
                    <input
                      type="text"
                      name="companyname"
                      class="form-control"
                      placeholder="Company Name"
                    />
                  </div>
                  <div
                    class="form-group has-feedback"
                    module-style="color border-color background-color"
                  >
                    <label for="">Content</label>
                    <textarea
                      name="contents"
                      rows="4"
                      class="form-control"
                      required
                      placeholder="Content"
                    ></textarea>
                  </div>
                  <script type="text/javascript"></script>
                  <div class="submit">
                    <input name="idType" type="hidden" value="0" />
                    <button class="btn btn-primary" type="submit">
                      Send Inquiry Now
                    </button>
                  </div>
                </form>
              </div>
              <script type="text/javascript"></script>
              <!-- CUSTOM 0/CONTACT/PUBLIC_CONTACT_34:['{d}'] END -->
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
@endsection