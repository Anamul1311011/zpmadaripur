@extends('layouts.frontend')

@section('content')

  <div class="main gap">

      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <div class="row">
          <div class="col-md-12">

            {{-- <h2>{{ $service_details1->title1 }}</h2> --}}
            <p>{{ $service_details1->detail1 }}</p>
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
          <link rel='stylesheet' type='text/css' href='http://www.zpdhaka.org/wp-content/plugins/mechanic-visitor-counter/styles/css/default.css' />
          <div id='mvcwid' style='font-size:2; text-align:;color:;'>
              <div id="mvccount"><img src='http://www.zpdhaka.org/wp-content/plugins/mechanic-visitor-counter/styles//0.gif' alt='0'><img src='http://www.zpdhaka.org/wp-content/plugins/mechanic-visitor-counter/styles//4.gif' alt='4'><img src='http://www.zpdhaka.org/wp-content/plugins/mechanic-visitor-counter/styles//1.gif' alt='1'><img src='http://www.zpdhaka.org/wp-content/plugins/mechanic-visitor-counter/styles//4.gif' alt='4'><img src='http://www.zpdhaka.org/wp-content/plugins/mechanic-visitor-counter/styles//9.gif' alt='9'><img src='http://www.zpdhaka.org/wp-content/plugins/mechanic-visitor-counter/styles//7.gif' alt='7'></div>
              <div id="mvctable">
                  <table width='100%'>
                      <tr>
                          <td style='font-size:2; text-align:;color:;'><img src='http://www.zpdhaka.org/wp-content/plugins/mechanic-visitor-counter/counter/mvcvisit.png'> Visit Today : 20</td>
                      </tr>
                      <tr>
                          <td style='font-size:2; text-align:;color:;'><img src='http://www.zpdhaka.org/wp-content/plugins/mechanic-visitor-counter/counter/mvcmonth.png'> This Month : 911</td>
                      </tr>
                      <tr>
                          <td style='font-size:2; text-align:;color:;'><img src='http://www.zpdhaka.org/wp-content/plugins/mechanic-visitor-counter/counter/mvctotalhits.png'> Total Hits : 313474</td>
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
      <script type='text/javascript' src='http://www.zpdhaka.org/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.51.0-2014.06.20'></script>
      <script type='text/javascript'>
          /* <![CDATA[ */
          var _wpcf7 = {
              "loaderUrl": "http:\/\/www.zpdhaka.org\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif",
              "sending": "Sending ..."
          };
          /* ]]> */

      </script>
      <script type='text/javascript' src='http://www.zpdhaka.org/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=4.2.2'></script>

      <div class="row">
          <section class="bottom_block">
              <div class="bot_col col-lg-3 col-md-3 col-sm-12 col-xs-12 minus15Padding" id="">
                @foreach ($abouts as $about)
                  <li id="execphp-6" class="widget widget_execphp">
                      <h3 class="widget-title">{{ $about->heading }}</h3>
                      <div class="execphpwidget">
                          <ul class="list2">
                              <li><a href=http://www.zpdhaka.org/?page_id=230 ">{{ $about->title1 }}</a></li>
     <li><a href=" http://www.zpdhaka.org/?page_id=739">{{ $about->title2 }} </a> </li> <li><a href="http://www.zpdhaka.org/?page_id=741">{{ $about->title3 }} </a></li>
                              <li><a href="http://www.zpdhaka.org/?page_id=228">{{ $about->title4 }}</a></li>
                              <li><a href="http://www.zpdhaka.org/?page_id=229">{{ $about->title5 }}</a></li>
                              <li><a href="http://www.zpdhaka.org/?page_id=743">{{ $about->title6 }}</a></li>
                              <li><a href="http://www.zpdhaka.org/?page_id=745">{{ $about->title7 }}</a></li>
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
                      <!--  ২০১৫-০৭-৩০; ১৯:০২:৫৩ --> &nbsp; 29-04-2019 05:12:40</p>
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
