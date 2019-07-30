@extends('layouts.frontend')

@section('content')

  <div class="main gap">

      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <div class="row">
              <div class="noticeBoard gap">
                  <div class="notice-board-bg">
                    @foreach ($notices as $notice)
                        <h2 class="noticeTitle">{{ $notice->section_title }}</h2>
                    @endforeach


                      <ul>
                        @foreach ($noticedetails as $noticedetail)
                          <li><a href="{{ url('notice-details/'.$noticedetail->id) }}" title="Permanent Link to ই-জিপি দরপত্রের ইলেকট্রনিক লটারী প্রসঙ্গে।">
                                  {{ $noticedetail->notice_title }}।</a>
                          </li>
                        @endforeach


                      </ul>
                      <div class="clear"></div>
                      <a class="all" href="?page_id=239">সকল</a>
                  </div>
              </div>
          </div>
          <div class="clear"></div>
          <div class="row">
              <div class="newsMarquee gap">
                  <!-- <span class="news">News </span>
                          <span class="newsBar">
                              <div id="example">

                                                              </div>
                          </span> -->
                  <span style="float: left; display: block; width: 80%;">
                      <script type="text/javascript">
                          jQuery(document).ready(function() {
                              jQuery("#smoothticker25").inewsticker({
                                  speed: 2000,
                                  effect: "slide",
                                  font_size: 13,
                                  color: "#000",
                                  font_family: "arial",
                                  dir: "ltr",
                                  delay_after: 1000,
                              });
                          });

                      </script>
                      <div id="tp_ticker" style="background-color:;"><strong style="background-color:#333333">খবর</strong>
                          <ul id="smoothticker25">
                          @foreach ($newses as $news)
                                <li><a style="color:#444" href="{{ url('news-details/'.$news->id) }}">{{ $news->title }}</a></li>
                          @endforeach


                          </ul>
                      </div>
                  </span>
                  <span style="float: right; display: block; width: 10%;"><a class="all allNews" href="?page_id=250">সকল</a></span>
              </div>
          </div>
          <div class="clear"></div>
          <div class="homeSixBlock">
              <div class="row">
                @foreach ($services as $service)
                  <div class="block gap">
                      <h2 class="widget-title">{{ $service->heading }}</h2>
                      <ul class="dpe-flexible-posts">
                          <li id="post-43" class="post-43 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized category--">
                              <a href="{{ url('service-details1/'.$service->id) }}">
                                  <img width="135" height="115" src="{{ asset($service->image) }}" class="attachment-medium wp-post-image" alt="seba" />
                                  <div class="title">{{ $service->title1 }}</div>
                              </a>
                          </li>
                          <li id="post-44" class="post-44 post type-post status-publish format-standard hentry category-uncategorized category--">
                              <a href="{{ $service->link2 }}">
                                  <div class="title">{{ $service->title2 }}</div>
                              </a>
                          </li>
                          <li id="post-45" class="post-45 post type-post status-publish format-standard hentry category-uncategorized category--">
                              <a href="{{ $service->link3 }}">
                                  <div class="title">{{ $service->title3 }}</div>
                              </a>
                          </li>
                      </ul><!-- .dpe-flexible-posts -->
                  </div>
                @endforeach


              </div>
          </div>
          <div class="clear"></div>
          <div class="row">
              <div class="videoGallery gap">
                  <h5 class="videoGallery">ভিডিও গ্যালারী </h5>

                    <div class="header_video">
                        <!-- THE YOUTUBE PLAYER -->
                        <div class="vid-container gap">
                            <iframe id="vid_frame" src="{{ $fstvideo->link }}" frameborder="0" width="560" height="315"></iframe>

                        </div>

                        <!-- THE PLAYLIST -->
                        <div class="vid-list-container">
                          @foreach ($videos as $video)
                            <div class="vid-list">
                                <div class="vid-item" onClick="document.getElementById('vid_frame').src='{{ $video->link }}'">
                                    <div class="thumb"><img width="212px" height="196px" src="{{ asset($video->image) }}"></div>
                                    <div class="desc">{{ $video->title }}</div>
                                    <br>
                                </div>

                            </div>
                            @endforeach
                        </div>

                        <!-- LEFT AND RIGHT ARROWS -->
                        <div class="arrows">
                            <div class="arrow-left"><i class="fa fa-chevron-left fa-lg"></i></div>
                            <div class="arrow-right"><i class="fa fa-chevron-right fa-lg"></i></div>
                        </div>
                    </div>


              </div>
          </div>
          <div class="clear"></div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 minus15Padding">
        @foreach ($chiefs as $chief)
          <div class="execphpwidget">
              <div class="rightBarBlock">
                  <h5 class="rightBarTitle">{{ $chief->heading }}</h5>
                  <img width="180px" height="180px"src="{{ asset($chief->image) }}" alt="director">
                  <span class="widgetMiddle">
                    {{ $chief->name }}
                      <br>
                      <a href="{{ url('/management-details/'.$chief->id) }}">বিস্তারিত </a>
                  </span>
              </div>
          </div>
        @endforeach


          <div class="clear"></div>
          @foreach ($forms as $form)
            <h2 class="widget-title">{{ $form->heading }}</h2>
            <div class="textwidget">
                <ul class="dpe-flexible-posts">
                    <li><a href="http://www.cga.gov.bd/pdf/forms/blank_challan.pdf" target="_blank">{{ $form->title1 }}</a></li>
                    <li><a href="http://www.dip.gov.bd/sites/default/files/MRP%20Application%20Form-combined1%2028-10-10.pdf" target="_blank">{{ $form->title2 }}</a></li>

                </ul>
            </div>
          @endforeach
          @foreach ($esebas as $eseba)
            <h2 class="widget-title">{{ $eseba->heading }} </h2>
            <div class="textwidget">
                <ul class="dpe-flexible-posts">
                    <li><a href="http://bris.lgd.gov.bd/pub/" target="_blank">{{ $eseba->title1 }}</a></li>
                    <li><a href="https://www.esheba.cnsbd.com/" target="_blank"> {{ $eseba->title2 }}</a></li>
                    <li><a href="http://www.passport.gov.bd/" target="_blank"> {{ $eseba->title3 }}</a></li>
                    <li><a href="http://secure.incometax.gov.bd/TINHome" target="_blank">{{ $eseba->title4 }}</a></li>
                </ul>
            </div>
          @endforeach

          @foreach ($ilinks as $ilink)
            <h2 class="widget-title">{{ $ilink->heading }} </h2>
            <div class="textwidget">
                <ul class="dpe-flexible-posts">
                    <li><a href="http://www.bangladesh.gov.bd/www.bangladesh.gov.bd/index16f0.html?q=bn" target="_blank">{{ $ilink->title1 }}</a></li>
                    <li><a href="http://www.lgd.gov.bd/" target="_blank">{{ $ilink->title2 }}</a></li>
                    <li><a href="http://www.mopa.gov.bd/" target="_blank">{{ $ilink->title3 }}</a></li>
                    <li><a href="http://www.cptu.gov.bd/" target="_blank">{{ $ilink->title4 }}</a></li>
                </ul>
            </div>
          @endforeach

          <h2 class="widget-title">মোট পরিদর্শক</h2>
          <link rel='stylesheet' type='text/css' href='{{ url('frontend_assets/css/default.css') }}' />
          <div id='mvcwid' style='font-size:2; text-align:;color:;'>
              <div id="mvccount"><img src='http://www.zpdhaka.org/wp-content/plugins/mechanic-visitor-counter/styles//0.gif' alt='0'><img src='http://www.zpdhaka.org/wp-content/plugins/mechanic-visitor-counter/styles//4.gif' alt='4'><img src='http://www.zpdhaka.org/wp-content/plugins/mechanic-visitor-counter/styles//1.gif' alt='1'><img src='http://www.zpdhaka.org/wp-content/plugins/mechanic-visitor-counter/styles//4.gif' alt='4'><img src='http://www.zpdhaka.org/wp-content/plugins/mechanic-visitor-counter/styles//9.gif' alt='9'><img src='http://www.zpdhaka.org/wp-content/plugins/mechanic-visitor-counter/styles//7.gif' alt='7'></div>
              <div id="mvctable">
                  <table width='100%'>
                      <tr>
                          <td style='font-size:2; text-align:;color:;'><img src='{{ url('frontend_assets/img/mvcvisit.png') }}'> Visit Today : 20</td>
                      </tr>
                      <tr>
                          <td style='font-size:2; text-align:;color:;'><img src='{{ url('frontend_assets/img/mvcmonth.png') }}'> This Month : 911</td>
                      </tr>
                      <tr>
                          <td style='font-size:2; text-align:;color:;'><img src='{{ url('frontend_assets/img/mvctotalhits.png') }}'> Total Hits : 313474</td>
                      </tr>
                  </table>
              </div>

              <div id="mvccredit">plugins by <a href="http://www.adityasubawa.com" title="Bali web Design" target="_blank">Bali Web Design</a></div>

          </div>

          <div class="clear"></div>
          <div class="visitorCounter"></div>
          <div class="clear"></div>
      </div>

  </div>
  <div class="clear"></div>
  <div class="footer">
      <script type='text/javascript' src='{{ url('frontend_assets/js/jquery.form.min.js') }}'></script>
      <script type='text/javascript'>
          /* <![CDATA[ */
          var _wpcf7 = {
              "loaderUrl": "{{ url('frontend_assets/img/ajax-loader.gif') }}",
              "sending": "Sending ..."
          };
          /* ]]> */

      </script>
      <script type='text/javascript' src='{{ url('frontend_assets/js/scripts.js') }}'></script>

      <div class="row">
          <section class="bottom_block">
              <div class="bot_col col-lg-3 col-md-3 col-sm-12 col-xs-12 minus15Padding" id="">
                @foreach ($abouts as $about)
                  <li id="execphp-6" class="widget widget_execphp">
                      <h3 class="widget-title">{{ $about->heading }}</h3>
                      <div class="execphpwidget">
                          <ul class="list2">
                              <li><a href="#">{{ $about->title1 }}</a></li>
     <li><a href="#">{{ $about->title2 }} </a> </li> <li><a href="#">{{ $about->title3 }} </a></li>
                              <li><a href="#">{{ $about->title4 }}</a></li>
                              <li><a href="#">{{ $about->title5 }}</a></li>
                              <li><a href="#">{{ $about->title6 }}</a></li>
                              <li><a href="#">{{ $about->title7 }}</a></li>
                          </ul>
                      </div>
                  </li>
                @endforeach


              </div>
              <div class="bot_col col-lg-3 col-md-3 col-sm-12 col-xs-12" id="">
                  <li id="execphp-7" class="widget widget_execphp">
                    @foreach ($committees as $committee)
                      <h3 class="widget-title">{{ $committee->heading }}</h3>
                    @endforeach

                      <div class="execphpwidget">
                          <ul class="list2">
                            @foreach ($clinks as $clink)
                  <li><a href="{{ $clink->link }}" target="_blank">{{ $clink->title }}</a></li>
                            @endforeach


                          </ul>

                      </div>
                  </li>

              </div>
              <div class="bot_col col-lg-3 col-md-3 col-sm-12 col-xs-12" id="">
                  <li id="execphp-8" class="widget widget_execphp">
                    @foreach ($budgets as $budget)
                      <h3 class="widget-title">{{ $budget->heading }}</h3>
                    @endforeach

                      <div class="execphpwidget">
                          <ul class="list2">
                            @foreach ($budgetlinks as $budgetlink)
                                <li><a href="{{ $budgetlink->link }}" target="_blank">{{ $budgetlink->title }}</a></li>
                            @endforeach


                          </ul>

                      </div>
                  </li>
              </div>
              <div class="bot_col col-lg-3 col-md-3 col-sm-12 col-xs-12" id="">
                  <li id="execphp-9" class="widget widget_execphp">
                    @foreach ($projects as $project)
                      <h3 class="widget-title">{{ $project->heading }}</h3>
                    @endforeach

                      <div class="execphpwidget">
                          <ul class="list2">
                            @foreach ($plinks as $plink)
                              <li><a href="{{ $plink->link }}" target="_blank">{{ $plink->title }}</a></li>

                            @endforeach

                          </ul>

                      </div>
                  </li>


              </div>
          </section>
      </div>
      <div class="clear"></div>
      <div class="row">
          <div class="borderBottom"></div>
      </div>
      <div class="clear"></div>
  </div>
  <div class="clear"></div>
  <div class="row">
      <div class="bottomFooter">

          <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
              <div class="footNav">
                  <div class="menu-footer-menu-container">
                      <ul id="menu-footer-menu" class="">
                        @foreach ($footerones as $footerone)
                            <li id="menu-item-496" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-496"><a href="{{ $footerone->link }}">{{ $footerone->title }}</a></li>
                        @endforeach


                      </ul>
                  </div>
                  <!-- <ul>
                          <li><a href="http://ghorashalpourashava.org/?page_id=471">অভিযোগ ও অনুসন্ধান</a></li>
                          <li><a href="#">সাইট ম্যাপ</a></li>
                          <li><a href="http://ghorashalpourashava.org/?page_id=255">ফিডব্যাক ফরম</a></li>
                          <li><a href="/?page_id=416">ওয়েব এডমিন</a></li>

                      </ul> -->
                  <p>সাইটটি শেষ হাল-নাগাদ করা হয়েছে:
                      <!--  ২০১৫-০৭-৩০; ১৯:০২:৫৩ --> &nbsp; 15-07-2019 02:12:40</p>
              </div>
              <div class="clear"></div>
              <!-- <p>কারিগরি সহায়তায়ঃ এফ এল আই টি</p>
                  <p>০১৯৪৮২৬৩৩৫৮ / ০১৭২৯৭২৪২৩২</p> -->


          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">

              <li id="execphp-5" class="widget widget_execphp">
                  <div class="execphpwidget">
                      <ul class="bottomSocial">
                          <li>সামাজিক যোগাযোগ</li>
                          @foreach ($footersocials as $footersocial)
                              <li><a href="{{ $footersocial->link }}"></a></li>
                          @endforeach


                  </div>
              </li>

              <div class="clear"></div>
              <div class="textwidget">
                @foreach ($footerbottoms as $footerbottom)
                  <p class="bottomFootP">{{ $footerbottom->title }}</p>
                @endforeach

              </div>

          </div>
      </div>
  </div>
  <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
  </div>
@endsection
