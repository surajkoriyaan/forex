@include('header')
@if(Session::has('message'))
<script>
    alert("{{ Session::get('message') }}");
</script>
@endif

<div class="content">
                  <div class="breadcrumbs fw-breadcrumbs top-smpar smpar fl-wrap">
                      <div class="container">
                          <div class="breadcrumbs-list">
                              <a href="#">Home</a><a href="#">Signal Provider</a><a href="#">{{$data->fname . " ". $data->lname}}</a>
                          </div>
                          <div class="show-more-snopt smact"><i class="fal fa-ellipsis-v"></i></div>
                          <div class="show-more-snopt-tooltip">
                              <a href="#sec15" class="custom-scroll-link"> <i class="fas fa-comment-alt"></i> Write a review</a>
                              <a href="#"> <i class="fas fa-exclamation-triangle"></i> Report </a>
                          </div>
                          <a class="print-btn tolt" href="javascript:window.print()" data-microtip-position="bottom"  data-tooltip="Print"><i class="fas fa-print"></i></a>
                          <a class="compare-top-btn tolt" data-microtip-position="bottom"  data-tooltip="Compare" href="#"><i class="fas fa-random"></i></a>
                          <div class="like-btn"><i class="fas fa-heart"></i> Save</div>
                      </div>
                  </div>
                  <div class="gray-bg small-padding fl-wrap">
                      <div class="container">
                          <div class="row">
                            <div class="col-md-4">
                                <!--box-widget-->
                                <div class="box-widget fl-wrap">
                                    <div class="profile-widget">
                                        <div class="profile-widget-header color-bg smpar fl-wrap">
                                            <div class="pwh_bg"></div>
                                            <div class="box-widget-menu-btn smact"><i class="far fa-ellipsis-h"></i></div>
                                            <div class="show-more-snopt-tooltip bxwt">
                                                <a href="#"> <i class="fas fa-comment-alt"></i> Write a review</a>
                                                <a href="#"> <i class="fas fa-exclamation-triangle"></i> Report </a>
                                            </div>
                                            <div class="profile-widget-card">
                                                <div class="profile-widget-image">
                                                    <img src="{{asset('uploads/signal_provider/logo/'.$data->logo)}}" alt="">
                                                </div>
                                                <div class="profile-widget-header-title">
                                                    <h4><a href="#">{{$data->fname . " ". $data->lname}}</a></h4>
                                                    <div class="clearfix"></div>
                                                    <div class="clearfix"></div>
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-widget-content fl-wrap">
                                            <div class="contats-list fl-wrap">
                                                <ul class="no-list-style">
                                                    <li><span><i class="fal fa-phone"></i> Phone :</span> <a href="#">{{$data->country_code . " ". $data->mobileno}}</a></li>
                                                    <li><span><i class="fal fa-phone"></i> Whatsapp No :</span> <a href="#">{{$data->whatsappno}}</a></li>
                                                    <li><span><i class="fal fa-envelope"></i> Mail :</span> <a href="#">{{$data->email}}</a></li>
                                                    <li><span><i class="fal fa-browser"></i> D O B :</span> <a href="#">{{$data->dob}}</a></li>
                                                    <li><span><i class="fal fa-browser"></i> Gender :</span> <a href="#">{{$data->gender}}</a></li>
                                                    <li><span><i class="fal fa-browser"></i> City :</span> <a href="#">{{$data->city}}</a></li>
                                                    <li><span><i class="fal fa-browser"></i> Country :</span> <a href="#">{{$data->country}}</a></li>
                                                    <li><span><i class="fal fa-browser"></i> Company :</span> <a href="#">{{$data->company_name}}</a></li>
                                                </ul>
                                            </div>
                                            <div class="profile-widget-footer fl-wrap">
                                                <a href="#" class="btn float-btn color-bg small-btn">Details</a>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                                <!--box-widget end -->
                            </div>
                              <!--  listing-single content -->
                              <div class="col-md-8">
                                  <div class="list-single-main-wrapper fl-wrap" style="padding-left: 0px;">
                                      <!--  scroll-nav-wrap -->

                                      <!--  scroll-nav-wrap end-->
                                      <!--  list-single-opt_header-->
                                      <div class="list-single-opt_header fl-wrap">
                                          <ul class="list-single-opt_header_cat">
                                              <li><a href="#" class="cat-opt blue-bg">Details</a></li>

                                          </ul>
                                          <div class="share-holder hid-share">
                                              <a href="#" class="share-btn showshare sfcs">  <i class="fas fa-share-alt"></i>  Share   </a>
                                              <div class="share-container  isShare"></div>
                                          </div>
                                      </div>
                                      <!--  list-single-opt_header end -->
                                      <!--  list-single-header-item-->
                                      <div class="list-single-header-item  fl-wrap" id="sec1">
                                          <div class="row">
                                              <div class="col-md-8">
                                                  <h1>{{$data->fname . " ". $data->lname}}<span class="verified-badge tolt" data-microtip-position="bottom"  data-tooltip="Verified"><i class="fas fa-check"></i></span></h1>
                                                  <div class="geodir-category-location fl-wrap">
                                                      @if($data->address !='')
                                                        <a href="#"><span>{!! $data->address !!}</span> </a>
                                                        @endif  
                                                      <div class="listing-rating card-popup-rainingvis" data-starrating2="4"><span class="re_stars-title">Good</span></div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="list-single-main-container fl-wrap">
                                          <!-- list-single-main-item -->
                                          @if($data->description !='')
                                            <div class="list-single-main-item fl-wrap" style="overflow-x: scroll">
                                              
                                              <div class="list-single-main-item-title">
                                                  <h3>Description</h3>
                                              </div>
                                             <div class="list-single-main-item_content fl-wrap">
                                                 {!! $data->description !!}
                                             </div>
                                          </div>
                                            @endif
                                          
                                          <!-- list-single-main-item end -->
                                          <!-- list-single-main-item -->
                                          @if($data->services !='')
                                            <div class="list-single-main-item fl-wrap" id="sec2" style="overflow-x: scroll">
                                              <div class="list-single-main-item-title">
                                                  <h3>Services</h3>
                                              </div>
                                              <div class="list-single-main-item_content fl-wrap">
                                                  {!! $data->services !!}
                                              </div>
                                          </div>
                                            @endif
                                          
                                          <!-- list-single-main-item end -->
                                          <!--   list-single-main-item -->
                                          <div class="list-single-main-item fl-wrap" id="sec3" style="overflow-x: scroll">
                                              <div class="list-single-main-item-title fl-wrap" style="margin-bottom: 0px">
                                                  <h3>Signal Details</h3>
                                              </div>
                                              <!--   rooms-container -->
                                              <div class="rooms-container fl-wrap">
                                                  <table class="table">
                                                    <thead>
                                                    <tr>
                                                      <th scope="col">Price</th>
                                                      <th scope="col">{{$data->price}}</th>
                                                    </tr>
                                                    <tr>
                                                      <th scope="col">Signal Frequency</th>
                                                      <th scope="col">{{$data->signal_frequency}}</th>
                                                    </tr>
                                                     <tr>
                                                      <th scope="col">Signal Provider Via</th>
                                                      <th scope="col">{{$data->signal_provider_via}}</th>
                                                    </tr>
                                                     <tr>
                                                      <th scope="col">Trading Stratergy</th>
                                                      <th scope="col">{!! $data->trading_stratergy !!}</th>
                                                    </tr>
                                                    </thead>
                                                    </table>
                                              </div>
                                              <!--   rooms-container end -->
                                          </div>
                                          <div class="list-single-main-media fl-wrap">
                                            <div class="single-slider-wrapper carousel-wrap fl-wrap">
                                                <div class="slider-for fl-wrap carousel lightgallery"  >
                                                    <!--  slick-slide-item -->
                                                    @php 
                                                $imgarr=explode(",",$data->image_gallery);
                                                $img_c=count($imgarr);
                                                @endphp
                                                @for($i=0;$i<$img_c;$i++)
                                                <div class="slick-slide-item">
                                                        <div class="box-item">
                                                            <a href="{{asset('uploads/signal_provider/image_gallery/'.$imgarr[$i])}}" class="gal-link popup-image"><i class="fal fa-search"  ></i></a>
                                                            <img src="{{asset('uploads/signal_provider/image_gallery/'.$imgarr[$i])}}" alt="">
                                                        </div>
                                                    </div>
                                                @endfor
                                                </div>
                                                <div class="swiper-button-prev ssw-btn"><i class="fas fa-caret-left"></i></div>
                                                <div class="swiper-button-next ssw-btn"><i class="fas fa-caret-right"></i></div>
                                            </div>
                                            <div class="single-slider-wrapper fl-wrap">
                                                <div class="slider-nav fl-wrap">
                                                    @php 
                                                $imgarr=explode(",",$data->image_gallery);
                                                $img_c=count($imgarr);
                                                @endphp
                                                @for($i=0;$i<$img_c;$i++)
                                                 <div class="slick-slide-item"><img src="{{asset('uploads/signal_provider/image_gallery/'.$imgarr[$i])}}" style="height:200px" alt=""></div>
                                                @endfor
                                                </div>
                                            </div>
                                        </div>
                                          <div class="list-single-main-item fl-wrap" id="sec4">
                                              <div class="list-single-main-item-title">
                                                  <h3>Video Gallery</h3>
                                              </div>
                                              <div class="list-single-main-item_content fl-wrap">
                                                @if($data->video_gallery!='')
                                                  <div class="video-box fl-wrap">
                                                      <img src="{{asset('uploads/signal_provider/logo/'.$data->logo)}}" class="respimg" alt="">
                                                      <a class="video-box-btn image-popup color-bg" href="{{$data->video_gallery}}"><i class="fas fa-play"></i></a>
                                                  </div>
                                                  @endif
                                              </div>
                                          </div>
                                          
                                      </div>
                                  </div>
                              </div>
                              <!-- listing-single content end-->
                              <!-- sidebar -->
                              <!--  sidebar end-->
                          </div>

                      </div>
                  </div>
              </div>
@include('footer')
