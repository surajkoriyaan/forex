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
                              <a href="#">Home</a><a href="#">Forex Broker</a><a href="#">{{$data->name}}</a>
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
                                                    <img src="{{asset('uploads/broker/'.$data->logo)}}" alt="">
                                                </div>
                                                <div class="profile-widget-header-title">
                                                    <h4><a href="#">{{$data->name}}</a></h4>
                                                    <div class="clearfix"></div>
                                                    <div class="clearfix"></div>
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-widget-content fl-wrap">
                                            <div class="contats-list fl-wrap">
                                                <ul class="no-list-style">
                                                    <li><span><i class="fal fa-phone"></i> Phone :</span> <a href="#">{{$data->country_code}} <br> {{$data->mobileno}}</a></li>
                                                    <li><span><i class="fal fa-envelope"></i> Mail :</span> <a href="#">{{$data->email}}</a></li>
                                                    <li><span><i class="fal fa-browser"></i> Founded Year :</span> <a href="#">{{$data->founded_year}}</a></li>
                                                    <li><span><i class="fal fa-browser"></i> Regulations :</span> <a href="#">{{$data->regulations}}</a></li>
                                                    <li><span><i class="fal fa-browser"></i> Regulated By :</span> <a href="#">{{$data->regulated_by}}</a></li>

                                                    <li><span><i class="fal fa-browser"></i> Min Deposit :</span> <a href="#">{{$data->min_deposit}}</a></li>

                                                </ul>
                                            </div>
                                            <div class="profile-widget-footer fl-wrap">
                                                <a href="{{$data->website_url}}" class="btn float-btn color-bg small-btn">Create Account</a>
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
                                              <li><a href="{{$data->website_url}}" class="cat-opt color-bg">Create Account</a></li>
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
                                                  <h1>{{$data->name}}<span class="verified-badge tolt" data-microtip-position="bottom"  data-tooltip="Verified"><i class="fas fa-check"></i></span></h1>
                                                  <div class="geodir-category-location fl-wrap">
                                                      <a href="#"><span>{!! $data->address !!}</span> </a>
                                                      <div class="listing-rating card-popup-rainingvis" data-starrating2="4"><span class="re_stars-title">Good</span></div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="list-single-main-media fl-wrap">
                                          <div class="single-slider-wrapper carousel-wrap fl-wrap">
                                              <div class="slider-for fl-wrap carousel lightgallery"  >
                                                  <!--  slick-slide-item -->
                                                  <div class="slick-slide-item">
                                                      <div class="box-item">
                                                          <a href="{{asset('uploads/broker/'.$data->logo)}}" class="gal-link popup-image"><i class="fal fa-search"  ></i></a>
                                                          <img src="{{asset('uploads/broker/'.$data->logo)}}" style="height: 400px;" alt="">
                                                      </div>
                                                  </div>

                                              </div>
                                                  </div>

                                      </div>
                                      <div class="list-single-facts fl-wrap">
                                          <!-- inline-facts -->
                                          <div class="inline-facts-wrap">
                                              <div class="inline-facts">
                                                  <i class="fas fa-building"></i>
                                                  <h6>HEADQUARTERS</h6>
                                                  <span>{{$data->headquarters}}</span>
                                              </div>
                                          </div>
                                          <!-- inline-facts end -->
                                          <!-- inline-facts  -->
                                          <div class="inline-facts-wrap">
                                              <div class="inline-facts">
                                                  <i class="fal fa-users"></i>
                                                  <h6>MAX LEVERAGE</h6>
                                                  <span>{{$data->maxleverage}}</span>
                                              </div>
                                          </div>
                                          <!-- inline-facts end -->
                                          <!-- inline-facts -->
                                          <div class="inline-facts-wrap">
                                              <div class="inline-facts">
                                                  <i class="fas fa-city"></i>
                                                  <h6>City Name</h6>
                                                  <span>{{$data->city}}</span>
                                              </div>
                                          </div>
                                          <!-- inline-facts end -->
                                          <!-- inline-facts -->
                                          <div class="inline-facts-wrap">
                                              <div class="inline-facts">
                                                <i class="far fa-flag"></i>
                                                  <h6>COUNTRY NAME</h6>
                                                  <span>{{$data->country}}</span>
                                              </div>
                                          </div>
                                          <!-- inline-facts end -->
                                      </div>
                                      <div class="list-single-main-container fl-wrap">
                                          <!-- list-single-main-item -->
                                          <div class="list-single-main-item fl-wrap" style="overflow-x: scroll">
                                              <div class="list-single-main-item-title">
                                                  <h3>Account Types</h3>
                                              </div>
                                              <div class="list-single-main-item_content fl-wrap">
                                                @php
   $account_type=explode(",",$data->account_type);
   $mindeposit=explode(",",$data->mindeposit);
   $maxleverage_account=explode(",",$data->maxleverage_account);
   $minimum_trade_volume=explode(",",$data->minimum_trade_volume);
   $commission_acount=explode(",",$data->commission_acount);
   $spreads=explode(",",$data->spreads);
   $accountcurrencies=explode(",",$data->accountcurrencies);
   $trading_instruments=explode(",",$data->trading_instruments);
   $ea=explode(",",$data->ea);
   $hedging_allowed=explode(",",$data->hedging_allowed);
   $scaling_allowed=explode(",",$data->scaling_allowed);
   $islamic_account=explode(",",$data->islamic_account);
   $acc_count=count($account_type);
  @endphp
  <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  font-size: 15px;
}
</style>
  <table style="width:100%">
 <thead>
    <tr>
        <th scope="col" style="font-weight: 600">Account Type Name</th>
  @for($i=0;$i<$acc_count;$i++)
    <th scope="col" style="font-weight: 600">{{$account_type[$i]}}</th>
  @endfor
   </tr>
   <tr>
       <th scope="col">Min Deposit</th>
        @for($j=0;$j<$acc_count;$j++)
    <th scope="col">{{$mindeposit[$j]}}</th>
  @endfor
   </tr>
   <tr>
       <th scope="col">Max Leverage</th>
        @for($k=0;$k<$acc_count;$k++)
    <th scope="col">{{$maxleverage_account[$k]}}</th>
  @endfor
   </tr>
    <tr>
       <th scope="col">Minimum Trade Volume</th>
        @for($l=0;$l<$acc_count;$l++)
   <th scope="col">{{$minimum_trade_volume[$l]}}</th>
  @endfor
   </tr>
   <tr>
        <th scope="col">Commission</th>
        @for($m=0;$m<$acc_count;$m++)
  <th scope="col">{{$commission_acount[$m]}}</th>
  @endfor
   </tr>
    <tr>
         <th scope="col">Spread</th>
        @for($n=0;$n<$acc_count;$n++)
  <th scope="col">{{$spreads[$n]}}</th>
  @endfor
   </tr>
   <tr>
          <th scope="col">Account Currencies</th>
        @for($p=0;$p<$acc_count;$p++)
  <th scope="col">{{$accountcurrencies[$p]}}</th>
  @endfor
   </tr>
   <tr>
         <th scope="col">Trading Instruments</th>
        @for($q=0;$q<$acc_count;$q++)
 <th scope="col">{{$trading_instruments[$q]}}</th>
  @endfor
   </tr>
    <tr>
          <th scope="col">EA</th>
        @for($u=0;$u<$acc_count;$u++)
        <th scope="col">
        @if($ea[$u]=='yes')
        <i class="far fa-check mr-2 text-primary" style="color:green"></i> {{$ea[$u]}}
        @else
        <i class="far fa-times mr-2 text-danger" style="color:red"></i> {{$ea[$u]}}
        @endif
        </th>
  @endfor
   </tr>
    <tr>
          <th scope="col">Hedging</th>
        @for($v=0;$v<$acc_count;$v++)
        <th scope="col" >
        @if($hedging_allowed[$v]=='yes')
        <i class="far fa-check mr-2 text-primary" style="color:green"></i> {{$hedging_allowed[$v]}}
        @else
        <i class="far fa-times mr-2 text-danger" style="color:red"></i> {{$hedging_allowed[$v]}}
        @endif
    </th>
  @endfor
   </tr>
   <tr>
         <th scope="col">Scalping</th>
        @for($x=0;$x<$acc_count;$x++)
        <th scope="col" >
         @if($scaling_allowed[$x]=='yes')
        <i class="far fa-check mr-2 text-primary" style="color:green"></i> {{$scaling_allowed[$x]}}
        @else
        <i class="far fa-times mr-2 text-danger" style="color:red"></i> {{$scaling_allowed[$x]}}
        @endif
        </th>
  @endfor
   </tr>
   <tr>
         <th scope="col">Islamic Account</th>
        @for($z=0;$z<$acc_count;$z++)
        <th scope="col" >
        @if($islamic_account[$z]=='yes')
        <i class="far fa-check mr-2 text-primary" style="color:green"></i> {{$islamic_account[$z]}}
        @else
        <i class="far fa-times mr-2 text-danger" style="color:red"></i> {{$islamic_account[$z]}}
        @endif
        </th>
  @endfor
   </tr>
</thead>
</table>

                                              </div>
                                          </div>
                                          <!-- list-single-main-item end -->
                                          <!-- list-single-main-item -->
                                          <div class="list-single-main-item fl-wrap" id="sec2" style="overflow-x: scroll">
                                              <div class="list-single-main-item-title">
                                                  <h3>Deposit Method</h3>
                                              </div>
                                              <div class="list-single-main-item_content fl-wrap">
                                                  <div class="details-list">
                                                    @php
$deposit_method=explode(",",$data->deposit_method);
$commission=explode(",",$data->commission);
$exchange_rate=explode(",",$data->exchange_rate);
$processing_time=explode(",",$data->processing_time);
$deposit_count=count($deposit_method);
@endphp
<table style="width:100%">
<thead>
     <tr>
    <th scope="col" style="font-weight: 600">Deposit Method</th>
@for($a=0;$a<$deposit_count;$a++)
   <th scope="col" style="font-weight: 600">{{$deposit_method[$a]}}</th>
@endfor
</tr>
<tr>
    <th scope="col">Commission</th>
     @for($b=0;$b<$deposit_count;$b++)
   <th scope="col">{{$commission[$b]}}</th>
@endfor
</tr>
<tr>
    <th scope="col">Exchange Rate</th>
     @for($c=0;$c<$deposit_count;$c++)
    <th scope="col">{{$exchange_rate[$c]}}</th>
@endfor
</tr>
<tr>
   <th scope="col">Processing Time</th>
     @for($d=0;$d<$deposit_count;$d++)
    <th scope="col">{{$processing_time[$d]}}</th>
@endfor
</tr>
</thead>
</table>
                                                  </div>
                                              </div>
                                          </div>
                                          <!-- list-single-main-item end -->
                                          <!--   list-single-main-item -->
                                          <div class="list-single-main-item fl-wrap" id="sec3" style="overflow-x: scroll">
                                              <div class="list-single-main-item-title fl-wrap" style="margin-bottom: 0px">
                                                  <h3>Withdrawal</h3>
                                              </div>
                                              <!--   rooms-container -->
                                              <div class="rooms-container fl-wrap">
                                                @php
  $withdrawalmethod=explode(",",$data->withdrawalmethod);
  $withdrawal_comission=explode(",",$data->withdrawal_comission);
  $withdrawal_exchange_rate=explode(",",$data->withdrawal_exchange_rate);
  $withdrawal_processing_time=explode(",",$data->withdrawal_processing_time);
  $with_count=count($withdrawalmethod);
  @endphp
  <table style="width:100%">
   <thead>
        <tr>
       <th scope="col" style="font-weight: 600">Withdrawal Method</th>
  @for($aa=0;$aa<$with_count;$aa++)
      <th scope="col" style="font-weight: 600">{{$withdrawalmethod[$aa]}}</th>
  @endfor
  </tr>
  <tr>
       <th scope="col">Commission</th>
        @for($bb=0;$bb<$with_count;$bb++)
      <th scope="col">{{$withdrawal_comission[$bb]}}</th>
  @endfor
  </tr>
  <tr>
       <th scope="col">Exchange Rate</th>
        @for($cc=0;$cc<$with_count;$cc++)
       <th scope="col">{{$withdrawal_exchange_rate[$cc]}}</th>
  @endfor
  </tr>
  <tr>
      <th scope="col">Processing Time</th>
        @for($dd=0;$dd<$with_count;$dd++)
       <th scope="col">{{$withdrawal_processing_time[$dd]}}</th>
  @endfor
  </tr>
  </thead>
 </table>
                                              </div>
                                              <!--   rooms-container end -->
                                          </div>
                                          <div class="list-single-main-item fl-wrap">

  @if($data->trading_platrform!='')
  <div class="list-single-main-item-title fl-wrap">
<h3>Trading Platforms</h3></div>
<div class="list-single-main-item_content fl-wrap">
{!! $data->trading_platrform !!}
</div>
  @endif

@if($data->customer_support!='')
<div class="list-single-main-item-title fl-wrap">
<h3>Customer Support</h3></div>
<div class="list-single-main-item_content fl-wrap">
{!! $data->customer_support !!}
</div>
@endif
@if($data->education!='')
<div class="list-single-main-item-title fl-wrap">
<h3>Education</h3></div>
<div class="list-single-main-item_content fl-wrap">
{!! $data->education !!}
</div>
@endif
@if($data->awards!='')
<div class="list-single-main-item-title fl-wrap">
<h3>Awards</h3></div>
<div class="list-single-main-item_content fl-wrap">
{!! $data->awards !!}
</div>
@endif

@if($data->conclusion!='')
<div class="list-single-main-item-title fl-wrap">
<h3>Conclusion</h3></div>
<div class="list-single-main-item_content fl-wrap">
{!! $data->conclusion !!}
</div>
@endif

                                          </div>
                                          <!-- list-single-main-item end -->
                                          <!-- list-single-main-item -->
                                          <div class="list-single-main-item fl-wrap" id="sec4">
                                              <div class="list-single-main-item-title">
                                                  <h3>Video</h3>
                                              </div>
                                              <div class="list-single-main-item_content fl-wrap">
                                                @if($data->youtubevideo1!='')
                                                  <div class="video-box fl-wrap">
                                                      <img src="{{asset('uploads/broker/'.$data->logo)}}" class="respimg" alt="">
                                                      <a class="video-box-btn image-popup color-bg" href="{{$data->youtubevideo1}}"><i class="fas fa-play"></i></a>
                                                  </div>
                                                  @endif
                                                  @if($data->youtubevideo2 !='')
                                                  <div class="video-box fl-wrap">
                                                      <img src="{{asset('uploads/broker/'.$data->logo)}}" class="respimg" alt="">
                                                      <a class="video-box-btn image-popup color-bg" href="{{$data->youtubevideo2}}"><i class="fas fa-play"></i></a>
                                                  </div>
                                                  @endif
                                                  @if($data->youtubevideo3 !='')
                                                  <div class="video-box fl-wrap">
                                                      <img src="{{asset('uploads/broker/'.$data->logo)}}" class="respimg" alt="">
                                                      <a class="video-box-btn image-popup color-bg" href="{{$data->youtubevideo3}}"><i class="fas fa-play"></i></a>
                                                  </div>
                                                  @endif
                                              </div>
                                          </div>
                                          <!-- list-single-main-item end -->
                                          <!-- list-single-main-item -->
                                          <div class="list-single-main-item fl-wrap" id="sec6">
                                              <div class="list-single-main-item-title">
                                                  <h3>Reviews <span>@php
    echo count($reviewrating);
    @endphp</span></h3>
                                              </div>
                                              <div class="list-single-main-item_content fl-wrap">
                                                  <div class="reviews-comments-wrap fl-wrap">
                                                      <div class="review-total">
                                                          <span class="review-number blue-bg">4.0</span>
                                                          <div class="listing-rating card-popup-rainingvis" data-starrating2="4"><span class="re_stars-title">Good</span></div>
                                                      </div>
                                                      <!-- reviews-comments-item -->
                                                      @foreach($reviewrating as $reviewrat)
                                                      <div class="reviews-comments-item">
                                                          <div class="review-comments-avatar">
                                                              <img src="{{$reviewrat->avatar}}" alt="">
                                                          </div>
                                                          <div class="reviews-comments-item-text smpar">
                                                              <h4><a href="#">{{$reviewrat->name}}</a></h4>
                                                              <div class="listing-rating card-popup-rainingvis" data-starrating2="{{$reviewrat->rating}}"><span class="re_stars-title"></span></div>
                                                              <div class="clearfix"></div>
                                                              <p>" {{$reviewrat->comments}} "</p>
                                                              <div class="reviews-comments-item-date"><span class="reviews-comments-item-date-item"><i class="far fa-calendar-check"></i>{{$reviewrat->created_at}}</span>
                                                              </div>
                                                          </div>
                                                      </div>
                                                    @endforeach
                                                  </div>
                                              </div>
                                          </div>
                                          <!-- list-single-main-item end -->
                                          <!-- list-single-main-item -->
                                          <div class="list-single-main-item fl-wrap" id="sec15">
                                              <div class="list-single-main-item-title fl-wrap">
                                                  <h3>Add Your Review</h3>
                                              </div>
                                              <!-- Add Review Box -->
                                                <form action="{{url('review-rating')}}" method="post">
                                                  @csrf
<input type="hidden" name="typename" value="{{$data->name}}" />
                                              <div id="add-review" class="add-review-box">
                                                  <div class="leave-rating-wrap">
                                                      <span class="leave-rating-title">Your rating  for this listing : </span>
                                                      <div class="leave-rating">
                                                          <input type="radio"   data-ratingtext="Excellent"   name="rate" id="rating-1" value="1"/>
                                                          <label for="rating-1" class="fal fa-star"></label>
                                                          <input type="radio" data-ratingtext="Good" name="rate" id="rating-2" value="2"/>
                                                          <label for="rating-2" class="fal fa-star"></label>
                                                          <input type="radio" name="rate"  data-ratingtext="Average" id="rating-3" value="3"/>
                                                          <label for="rating-3" class="fal fa-star"></label>
                                                          <input type="radio" data-ratingtext="Fair" name="rate" id="rating-4" value="4"/>
                                                          <label for="rating-4" class="fal fa-star"></label>
                                                          <input type="radio" data-ratingtext="Very Bad "   name="rate" id="rating-5" value="5"/>
                                                          <label for="rating-5" class="fal fa-star"></label>
                                                      </div>
                                                      <div class="count-radio-wrapper">
                                                          <span id="count-checked-radio">Your Rating</span>
                                                      </div>
                                                  </div>
                                                  <!-- Review Comment -->
                                                      <fieldset>
                                                          <textarea name="message"  rows="8" placeholder="Your Review:" style="width: 100%"></textarea>
                                                      </fieldset>
                                                      @php
                                                        $gid=Session::get('googlename');
                                                        @endphp
                                                        @if($gid!='')
                                                      <button type="submit" class="btn big-btn color-bg float-btn">Submit Review <i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                                                      @else
                                                      <a href="{{url('login/google')}}" class="btn big-btn color-bg float-btn"><i class="fab fa-google" style="color:red"></i> Login With Google</a>
                                                       @endif
                                              </div>
                                              </form>
                                              <!-- Add Review Box / End -->
                                          </div>
                                          <!-- list-single-main-item end -->
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
