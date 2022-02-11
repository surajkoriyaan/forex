@include('header')
<style>
    .typeahead {
        top: 50px;
        left: 0px;
        padding-right: 90%;
        background-color: silver;
    }
    .typeahead li {
        width:200px;
        z-index: 8;
        background-color: #fff;
    }
</style>
<div class="content">
    <!--  section  -->
    <section class="no-padding-section">
        <div class="hero-slider-wrap carousel-wrap fl-wrap">
            <div class="hero-slider carousel" >
                <!-- hero-slider-item -->
                <div class="hero-slider-item hero-slider-item_first fl-wrap">
                    <div class="bg"  data-bg="{{asset('homeassets/images/slider/img1.jpg')}}" style="height: 100%;background-size: cover;background-repeat: no-repeat;"></div>
                </div>
                <div class="hero-slider-item hero-slider-item_first fl-wrap">
                    <div class="bg"  data-bg="{{asset('homeassets/images/slider/img2.jpg')}}" style="height: 100%;background-size: cover;background-repeat: no-repeat;"></div>
                </div>
                <div class="hero-slider-item hero-slider-item_first fl-wrap">
                    <div class="bg"  data-bg="{{asset('homeassets/images/slider/img3.jpg')}}" style="height: 100%;background-size: cover;background-repeat: no-repeat;"></div>
                </div>
                <!--  hero-slider-item end  -->

            </div>
            <div class="hs-btn hs-btn_prev color-bg swiper-button-prev"><i class="far fa-angle-left"></i></div>
            <div class="hs-btn hs-btn_next color-bg swiper-button-next"><i class="far fa-angle-right"></i></div>
        </div>
    </section>
    <!--  section  end-->

    <!-- breadcrumbs-->
    <div class="breadcrumbs fw-breadcrumbs sp-brd fl-wrap">
        <div class="container">
            <div class="breadcrumbs-list">
                <a href="#">Home</a><span>Best Forex Broker</span>
            </div>
            <div class="share-holder hid-share">
                <a href="#" class="share-btn showshare sfcs">  <i class="fas fa-share-alt"></i>  Share   </a>
                <div class="share-container  isShare"></div>
            </div>
        </div>
    </div>
    <section style="background-color: #d0deff;top: 0px;padding: 0px;">
                        <div class="container" style="">
                            <div class="hero-title hero-title_center">
                                <h2 style="font-size: 24px;color: currentColor">Search your broker or account manager and signal provider
                                </h2>
                            </div>
                            <div class="main-search-input-wrap shadow_msiw msiw-center">
                                <div class="main-search-input fl-wrap" style="margin-bottom: 15px;">
                                    <div class="main-search-input-item" style="width:100%">
                                        <input type="text" list="browsers" placeholder="type name?" id="search" name="search" class="form-control"/>
                                        <datalist id="browsers">
                                        </datalist>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
    <!-- breadcrumbs end -->
    <!-- section -->
    <section class="gray-bg small-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="section-title fl-wrap">
                        <h4>Verified Forex Bokers</h4>
                        <h2>Best Forex Borkers</h2>
                    </div>
                </div>
                <div class="col-md-8">
                </div>
            </div>
            <div class="clearfix"></div>
            <!-- grid-item-holder-->
            <div class="grid-item-holder gallery-items gisp fl-wrap">
                <!-- gallery-item-->
                @foreach($brokers as $broker)

                <div class="gallery-item for_sale">
                    <!-- listing-item -->
                    <div class="listing-item">
                        <article class="geodir-category-listing fl-wrap">
                            <div class="geodir-category-img fl-wrap">
                                <a href="{{url('broker-details/'.$broker->name)}}" class="geodir-category-img_item">
                                    <img src="{{asset('uploads/broker/'.$broker->logo)}}" style="height: 240px" alt="">
                                    <div class="overlay"></div>
                                </a>
                                <div class="geodir-category-location">
                                    <a href="#" class="single-map-item tolt" data-newlatitude="40.72956781" data-newlongitude="-73.99726866"   data-microtip-position="top-left" data-tooltip="Address"><i class="fas fa-map-marker-alt"></i>
                                       <span>
                                         @php
                                         $truncated = (strlen($broker->address) > 20) ? substr($broker->address, 0, 30) . '...' : $broker->address;
                                         echo $truncated;
                                         @endphp
                                       </span>
                                     </a>
                                </div>
                                <ul class="list-single-opt_header_cat">
                                    <li><a href="{{url('broker-details/'.$broker->name)}}" class="cat-opt blue-bg">View</a></li>
                                    <li><a href="{{$broker->website_url}}" class="cat-opt color-bg">Register</a></li>
                                </ul>
                                <a href="#" class="geodir_save-btn tolt" data-microtip-position="left" data-tooltip="Save"><span><i class="fal fa-heart"></i></span></a>
                                <a href="#" class="compare-btn tolt" data-microtip-position="left" data-tooltip="Share"><span><i class="fal fa-random"></i></span></a>

                            </div>
                            <div class="geodir-category-content fl-wrap">
                              <div class="card-verified tolt" data-microtip-position="left" data-tooltip="Verified"><i class="fal fa-user-check"></i></div>

                                <h3 class="title-sin_item"><a href="{{url('broker-details/'.$broker->name)}}">{{$broker->name}}</a></h3>
                                <div class="geodir-category-content_price">Initial Deposit : {{$broker->min_deposit}}</div>
                                <p>Tradable assets : {{$broker->trading_instruments}}</p>
                                <div class="geodir-category-footer fl-wrap">
                                    <a href="{{url('broker-details/'.$broker->name)}}" class="gcf-company"><img src="{{asset('homeassets/images/avatar/2.jpg')}}" alt=""><span>By Admin</span></a>
                                    <div class="listing-rating card-popup-rainingvis tolt" data-microtip-position="top" data-tooltip="Good" data-starrating2="4"></div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- listing-item end-->
                </div>

                @endforeach
            </div>
            <!-- grid-item-holder-->
            <a href="#" class="btn float-btn small-btn color-bg">View All Brokers</a>
        </div>
    </section>
    <!-- section end-->
    <!-- section -->
    <section>
        <div class="container">
            <!--about-wrap -->
            <div class="about-wrap">
                <div class="row">
                    <div class="col-md-5">
                        <div class="about-title ab-hero fl-wrap">
                            <h2>Scam Free Forex</h2>
                            <h4>Read all details carefully before trading.</h4>
                        </div>
                        <div class="services-opions fl-wrap">
                            <ul>
                                <li>
                                    <i class="fal fa-headset"></i>
                                    <h4>ABOUT US</h4>
                                    <p>Foreign exchange trading is the biggest exchange market. In shorts, foreign exchange is called forex. In India, only 2% of people know about forex trading. The rest of 98% people do not have any knowledge about this market. The stock market, foreign exchange, and cryptocurrency all are very risky and illegal according to them.</p>
                                </li>
                                <li>
                                    <i class="fal fa-users-cog"></i>
                                    <h4>IS FOREX TRADING RISKY?</h4>
                                    <p>Now, let us clear your vision of foreign exchange trading. First of all, it is not illegal. Foreign exchange means the exchange of foreign currencies. For example, one can exchange their US Dollars to Indian Rupee or in any other currency.</p>
                                </li>
                                <li>
                                    <i class="fal fa-phone-laptop"></i>
                                    <h4>READ FOREX TRADING PLATFORMS REVIEWS BEFORE OPENING ACCOUNT</h4>
                                    <p>It seems to be risky as profit and loss are concerned. But as we know everything in the world has its pros and cons. If you are a beginner in this market then you have to find a genuine broker. Best Forex Broker World (BFBW) is the online review website that reviews the brokers on their website.</p>
                                    <a href="#" class="btn float-btn small-btn color-bg">Read More</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-6">
                        <div class="about-img fl-wrap">
                            <img src="{{asset('homeassets/tradingimge/banner1.jpg')}}" style="height: 100%" class="respimg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- about-wrap end  -->
        </div>
    </section>
    <!-- section end-->
    <!-- section  -->
    <section class="hidden-section no-padding-section">
        <div class="half-carousel-wrap">
            <div class="half-carousel-title color-bg">
                <div class="half-carousel-title-item fl-wrap" style="top:50px;">
                    <h2 style="text-align: center">Forex Trading</h2>
                    <ul style="color: #ffff">
                      <li>The foreign exchange (also known as forex or FX) market is a global marketplace for exchanging national currencies.</li>
                      <li>Because of the worldwide reach of trade, commerce, and finance, forex markets tend to be the largest and most liquid asset markets in the world.</li>
                      <li>Currencies trade against each other as exchange rate pairs. For example, EUR/USD is a currency pair for trading the euro against the U.S. dollar.</li>
                      <li>Forex markets exist as spot (cash) markets as well as derivatives markets, offering forwards, futures, options, and currency swaps.</li>
                      <li>Market participants use forex to hedge against international currency and interest rate risk, to speculate on geopolitical events, and to diversify portfolios, among other reasons.</li>
                    </ul>
                </div>
                <div class="pwh_bg"></div>
            </div>
            <div class="half-carousel-conatiner">
                <div class="half-carousel fl-wrap full-height">
                    <!--slick-item -->
                    <div class="slick-item">
                        <div class="half-carousel-item fl-wrap">
                            <div class="bg-wrap bg-parallax-wrap-gradien">
                                <div class="bg"  data-bg="" style=" background-image: url({{asset('homeassets/tradingimge/img1.png')}});background-size: cover;background-repeat: no-repeat;height:100%; top:0%"></div>
                            </div>
                            <div class="half-carousel-content">
                                <h3><a href="#">Trade And Earn Money</a></h3>
                                <p>You can earn the interest rate differential between two currencies.</p>
                            </div>
                        </div>
                    </div>
                    <!--slick-item end -->
                    <!--slick-item -->
                    <div class="slick-item">
                        <div class="half-carousel-item fl-wrap">
                            <div class="bg-wrap bg-parallax-wrap-gradien">
                                <div class="bg"  data-bg="" style=" background-image: url({{asset('homeassets/tradingimge/img2.jpg')}});background-size: cover;background-repeat: no-repeat;height:100%; top:0%"></div>
                            </div>
                            <div class="half-carousel-content">
                                <h3><a href="#">Trade With Your Phone</a></h3>
                                <p>A user can buy and sell stocks, as well as manage his portfolio on his mobile phone, with the help of a multitude of apps and websites.</p>
                            </div>
                        </div>
                    </div>
                    <!--slick-item end -->
                    <!--slick-item -->
                    <div class="slick-item">
                        <div class="half-carousel-item fl-wrap">
                            <div class="bg-wrap bg-parallax-wrap-gradien">
                                <div class="bg"  data-bg="" style=" background-image: url({{asset('homeassets/tradingimge/img3.jpg')}});background-size: cover;background-repeat: no-repeat;height:100%; top:0%"></div>
                            </div>
                            <div class="half-carousel-content">
                                <h3><a href="#">Trade With Crypto-Currencies</a></h3>
                                <p>Cryptocurrency trading in the world involves buying and selling digital assets called cryptocurrencies. Examples of cryptocurrencies include Bitcoin, Ethereum and Litecoin among others.</p>
                            </div>
                        </div>
                    </div>
                    <!--slick-item end -->
                </div>
            </div>
        </div>
    </section>
    <!--section end-->
    <!-- section -->
    <section >
        <div class="container">
            <!-- section-title -->
            <div class="section-title st-center fl-wrap">
                <h4>Account Managers</h4>
                <h2>Meet Our Top Account Managers</h2>
            </div>
            <!-- section-title end -->
            <div class="clearfix"></div>
            <div class="listing-carousel-wrapper lc_hero carousel-wrap fl-wrap">
                <div class="listing-carousel carousel">
                    <!-- slick-slide-item -->
                    @foreach($accounts as $account)
                    <div class="slick-slide-item">
                        <!--  agent card item -->
                        <div class="listing-item">
                            <article class="geodir-category-listing fl-wrap">
                                <div class="geodir-category-img fl-wrap  agent_card">
                                    <a href="{{url('account-manager/'.$account->id.'/'.$account->first_name.'-'.$account->last_name)}}" class="geodir-category-img_item">
                                        <img src="{{asset('uploads/acount_manager/logo/'.$account->logo)}}" style="height: 240px;" alt="">
                                    </a>
                                    <div class="agent-card-social fl-wrap">
                                        <ul>
                                            <li><a href="{{$account->facebook_id}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="{{$account->linkedin_id}}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="{{$account->instagram_id}}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><span class="re_stars-title">Excellent</span></div>
                                </div>
                                <div class="geodir-category-content fl-wrap">
                                    <div class="card-verified tolt" data-microtip-position="left" data-tooltip="Verified"><i class="fal fa-user-check"></i></div>
                                    <div class="agent_card-title fl-wrap">
                                        <h4><a href="{{url('account-manager/'.$account->id.'/'.$account->first_name.'-'.$account->last_name)}}" >{{$account->first_name ." ". $account->last_name}}</a></h4>
                                        <h5><a href="{{url('account-manager/'.$account->id.'/'.$account->first_name.'-'.$account->last_name)}}">Minimum Equity : {{$account->minimum_equity}}</a></h5>
                                        <h5><a href="{{url('account-manager/'.$account->id.'/'.$account->first_name.'-'.$account->last_name)}}">Profit Sharing : {{$account->profit_sharing}}</a></h5>
                                    </div>
                                    <div class="geodir-category-footer fl-wrap">
                                        <a href="{{url('account-manager/'.$account->id.'/'.$account->first_name.'-'.$account->last_name)}}" class="btn float-btn color-bg small-btn">View Profile</a>
                                          </div>
                                </div>
                            </article>
                        </div>
                        <!--  agent card item end -->
                    </div>
                    <!-- slick-slide-item end-->
                    @endforeach
                </div>
                <div class="swiper-button-prev lc-wbtn lc-wbtn_prev"><i class="far fa-angle-left"></i></div>
                <div class="swiper-button-next lc-wbtn lc-wbtn_next"><i class="far fa-angle-right"></i></div>
            </div>
        </div>
    </section>
    <section style="padding-top: 10px;">
        <div class="container">
            <!-- section-title -->
            <div class="section-title st-center fl-wrap">
                <h4>Signal Providers</h4>
                <h2>Meet Our Top Signal Providers</h2>
            </div>
            <!-- section-title end -->
            <div class="clearfix"></div>
            <div class="listing-carousel-wrapper lc_hero carousel-wrap fl-wrap">
                <div class="listing-carousel carousel ">
                    <!-- slick-slide-item -->
                    @foreach($signalprovider as $signal)
                    <div class="slick-slide-item">
                        <!--  agent card item -->
                        <div class="listing-item">
                            <article class="geodir-category-listing fl-wrap">
                                <div class="geodir-category-img fl-wrap  agent_card">
                                    <a href="{{url('signal-provider/'.$signal->id.'/'.$signal->fname.'-'.$signal->lname)}}" class="geodir-category-img_item">
                                        <img src="{{asset('uploads/signal_provider/logo/'.$signal->logo)}}" style="height: 240px;" alt="">
                                    </a>
                                    <div class="agent-card-social fl-wrap">
                                        <ul>
                                            <li><a href="{{$signal->facebookid}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="{{$signal->linkedin}}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="{{$signal->instagramid}}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><span class="re_stars-title">Excellent</span></div>
                                </div>
                                <div class="geodir-category-content fl-wrap">
                                    <div class="card-verified tolt" data-microtip-position="left" data-tooltip="Verified"><i class="fal fa-user-check"></i></div>
                                    <div class="agent_card-title fl-wrap">
                                        <h4><a href="{{url('signal-provider/'.$signal->id.'/'.$signal->fname.'-'.$signal->lname)}}" >{{$signal->fname ." ". $signal->lname}}</a></h4>
                                        <h5><a href="{{url('signal-provider/'.$signal->id.'/'.$signal->fname.'-'.$signal->lname)}}">Signal Frequency : {{$signal->signal_frequency}}</a></h5>
                                        <h5><a href="{{url('signal-provider/'.$signal->id.'/'.$signal->fname.'-'.$signal->lname)}}">Price : {{$signal->price}}</a></h5>
                                    </div>
                                    <div class="geodir-category-footer fl-wrap">
                                        <a href="{{url('signal-provider/'.$signal->id.'/'.$signal->fname.'-'.$signal->lname)}}" class="btn float-btn color-bg small-btn">View Profile</a>
                                          </div>
                                </div>
                            </article>
                        </div>
                        <!--  agent card item end -->
                    </div>
                    <!-- slick-slide-item end-->
                    @endforeach
                </div>
                <div class="swiper-button-prev lc-wbtn lc-wbtn_prev"><i class="far fa-angle-left"></i></div>
                <div class="swiper-button-next lc-wbtn lc-wbtn_next"><i class="far fa-angle-right"></i></div>
            </div>
        </div>
    </section>
    <!-- section end-->
    <!-- section -->
    <section class="color-bg small-padding">
        <div class="container">
            <div class="main-facts fl-wrap">
                <!-- inline-facts  -->
                <div class="inline-facts-wrap">
                    <div class="inline-facts">
                        <div class="milestone-counter">
                            <div class="stats animaper">
                                <div class="num" data-content="0" data-num="578">0</div>
                            </div>
                        </div>
                        <h6>Users</h6>
                    </div>
                </div>
                <!-- inline-facts end -->
                <!-- inline-facts  -->
                <div class="inline-facts-wrap">
                    <div class="inline-facts">
                        <div class="milestone-counter">
                            <div class="stats animaper">
                                <div class="num" data-content="0" data-num="12168">0</div>
                            </div>
                        </div>
                        <h6>Brokers</h6>
                    </div>
                </div>
                <!-- inline-facts end -->
                <!-- inline-facts  -->
                <div class="inline-facts-wrap">
                    <div class="inline-facts">
                        <div class="milestone-counter">
                            <div class="stats animaper">
                                <div class="num" data-content="0" data-num="2172">0</div>
                            </div>
                        </div>
                        <h6>Account Managers</h6>
                    </div>
                </div>
                <!-- inline-facts end -->
                <!-- inline-facts  -->
                <div class="inline-facts-wrap">
                    <div class="inline-facts">
                        <div class="milestone-counter">
                            <div class="stats animaper">
                                <div class="num" data-content="0" data-num="732">0</div>
                            </div>
                        </div>
                        <h6>Signal Providers</h6>
                    </div>
                </div>
                <!-- inline-facts end -->
            </div>
        </div>
        <div class="svg-bg">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%"
                height="100%" viewBox="0 0 1600 900" preserveAspectRatio="xMidYMax slice">
                <defs>
                    <lineargradient id="bg">
                        <stop offset="0%" style="stop-color:rgba(255, 255, 255, 0.6)"></stop>
                        <stop offset="50%" style="stop-color:rgba(255, 255, 255, 0.1)"></stop>
                        <stop offset="100%" style="stop-color:rgba(255, 255, 255, 0.6)"></stop>
                    </lineargradient>
                    <path id="wave" stroke="url(#bg)" fill="none" d="M-363.852,502.589c0,0,236.988-41.997,505.475,0
                        s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z" />
                </defs>
                <g>
                    <use xlink:href="#wave">
                        <animatetransform attributeName="transform" attributeType="XML" type="translate" dur="10s" calcMode="spline"
                            values="270 230; -334 180; 270 230" keyTimes="0; .5; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                            repeatCount="indefinite" />
                    </use>
                    <use xlink:href="#wave">
                        <animatetransform attributeName="transform" attributeType="XML" type="translate" dur="8s" calcMode="spline"
                            values="-270 230;243 220;-270 230" keyTimes="0; .6; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                            repeatCount="indefinite" />
                    </use>
                    <use xlink:href="#wave">
                        <animatetransform attributeName="transform" attributeType="XML" type="translate" dur="6s" calcMode="spline"
                            values="0 230;-140 200;0 230" keyTimes="0; .4; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                            repeatCount="indefinite" />
                    </use>
                    <use xlink:href="#wave">
                        <animatetransform attributeName="transform" attributeType="XML" type="translate" dur="12s" calcMode="spline" values="0 240;140 200;0 230"
                            keyTimes="0; .4; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" />
                    </use>
                </g>
            </svg>
        </div>
    </section>
    <!-- section end-->
    <!-- section -->
    <section class="gray-bg ">
        <div class="container">
            <div class="section-title st-center fl-wrap">
                <h4>Testimonilas</h4>
                <h2>What Our Clients Say</h2>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="testimonials-slider-wrap">
            <div class="testimonials-slider">
                <!--slick-item -->
                <div class="slick-item">
                    <div class="text-carousel-item fl-wrap">
                        <div class="text-carousel-item-header fl-wrap">
                            <div class="popup-avatar"><img src="{{asset('homeassets/images/avatar/1.jpg')}}" alt=""></div>
                            <div class="review-owner fl-wrap">Jessie Wilcox</div>
                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                        </div>
                        <div class="text-carousel-content fl-wrap">
                            <p> "In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit, sed diam nonu mmy nibh euismod tincidunt ut laoreet dolore luptatum."</p>
                        </div>
                    </div>
                </div>
                <!--slick-item end -->
                <!--slick-item -->
                <div class="slick-item">
                    <div class="text-carousel-item fl-wrap">
                        <div class="text-carousel-item-header fl-wrap">
                            <div class="popup-avatar"><img src="{{asset('homeassets/images/avatar/2.jpg')}}" alt=""></div>
                            <div class="review-owner fl-wrap">Austin Harisson</div>
                            <div class="listing-rating card-popup-rainingvis" data-starrating2="4"> </div>
                        </div>
                        <div class="text-carousel-content fl-wrap">
                            <p> "Feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te odio dignissim qui blandit praesent blandit praesent luptatum zzril.Vulputate urna. Nulla tristique mi a massa convallis."</p>
                        </div>
                    </div>
                </div>
                <!--slick-item end -->
                <!--slick-item -->
                <div class="slick-item">
                    <div class="text-carousel-item fl-wrap">
                        <div class="text-carousel-item-header fl-wrap">
                            <div class="popup-avatar"><img src="{{asset('homeassets/images/avatar/3.jpg')}}" alt=""></div>
                            <div class="review-owner fl-wrap">Garry Colonsi</div>
                            <div class="listing-rating card-popup-rainingvis" data-starrating2="4"> </div>
                        </div>
                        <div class="text-carousel-content fl-wrap">
                            <p> "In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit, sed diam nonu mmy nibh euismod tincidunt ut laoreet dolore luptatum."</p>
                        </div>
                    </div>
                </div>
                <!--slick-item end -->
                <!--slick-item -->
                <div class="slick-item">
                    <div class="text-carousel-item fl-wrap">
                        <div class="text-carousel-item-header fl-wrap">
                            <div class="popup-avatar"><img src="{{asset('homeassets/images/avatar/4.jpg')}}" alt=""></div>
                            <div class="review-owner fl-wrap">Antony Moore</div>
                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                        </div>
                        <div class="text-carousel-content fl-wrap">
                            <p> "Feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te odio dignissim qui blandit praesent blandit praesent luptatum zzril.Vulputate urna. Nulla tristique mi a massa convallis."</p>
                        </div>
                    </div>
                </div>
                <!--slick-item end -->
            </div>
        </div>
    </section>
    <!-- section end-->
</div>

@include('footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

<script>
    $(document).ready(function(){
       $('#search').on('keyup',function(){
           var name=$(this).val();
           var _token   = $('meta[name="csrf-token"]').attr('content');
                  $.ajax({
                    type:"post",
                    url:"{{url('autocomplete-search')}}",
                    data:{name:name,_token:_token},
                    success:function(data){
                          $('#browsers').html(data);
                           console.log(data);
                        }
                 });

       });
       
      
    });
    $(document).ready(function(){
    $('input[name=search]').change(function(e){
    var relationshipTemp = $(this).val();    
       var _token   = $('meta[name="csrf-token"]').attr('content');
                  $.ajax({
                    type:"post",
                    url:"{{url('search-result')}}",
                    data:{relationshipTemp:relationshipTemp,_token:_token},
                    success:function(data){
                        //   $('#searchresult').html(data);
                        //   console.log(data);
                        var trainindIdArray = data.split(',');
                       // console.log(trainindIdArray[1]);
                        if(trainindIdArray[0]=='broker'){
                            //console.log('trytyryu');
                            window.location.href="broker-details/"+trainindIdArray[1];
                        }
                        // else if(){
                            
                        // }
                       // console.log(trainindIdArray);
                        }
                 });
    
    });
    });
    
    //  $(document).on('change','#browsers',function(){
    //       var result=$('#search').val();
    //       console.log(result);
    //   });
</script>


<!--<script type="text/javascript">-->
<!--        var route = "{{ url('autocomplete-search') }}";-->
<!--        $('#search').typeahead({-->
<!--            source: function (query, process) {-->
<!--                return $.get(route, {-->
<!--                    query: query-->
<!--                }, function (data) {-->
<!--                    return process(data);-->
<!--                });-->
<!--            }-->
<!--        });-->
<!--    </script>-->