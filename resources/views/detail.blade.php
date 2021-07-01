@extends('layouts.mainlayout')

<!-- Header -->
@section('header')
@include('layouts.partials.header')
@endsection

<!--============================= BOOKING =============================-->
@section('content')
<div>
    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <a href="images/reserve-slide2.jpg" class="grid image-link">
                    <img src="images/reserve-slide2.jpg" class="img-fluid" alt="#">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="images/reserve-slide1.jpg" class="grid image-link">
                    <img src="images/reserve-slide1.jpg" class="img-fluid" alt="#">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="images/reserve-slide3.jpg" class="grid image-link">
                    <img src="images/reserve-slide3.jpg" class="img-fluid" alt="#">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="images/reserve-slide1.jpg" class="grid image-link">
                    <img src="images/reserve-slide1.jpg" class="img-fluid" alt="#">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="images/reserve-slide2.jpg" class="grid image-link">
                    <img src="images/reserve-slide2.jpg" class="img-fluid" alt="#">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="images/reserve-slide3.jpg" class="grid image-link">
                    <img src="images/reserve-slide3.jpg" class="img-fluid" alt="#">
                </a>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
    </div>
</div>
<!--//END BOOKING -->
<!--============================= RESERVE A SEAT =============================-->
<section class="reserve-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5>Tasty Hand-Pulled Noodles</h5>
                <p><span>$$$</span>$$</p>
                <p class="reserve-description">Innovative cooking, paired with fine wines in a modern setting.</p>
            </div>
            <div class="col-md-6">
                <div class="reserve-seat-block">
                    <div class="reserve-rating">
                        <span>9.5</span>
                    </div>
                    <div class="review-btn">
                        <a href="#" class="btn btn-outline-danger">WRITE A REVIEW</a>
                        <span>34 reviews</span>
                    </div>
                    <div class="reserve-btn">
                        <div class="featured-btn-wrap">
                            <a href="#" class="btn btn-danger">RESERVE A SEAT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//END RESERVE A SEAT -->
<!--============================= BOOKING DETAILS =============================-->
<section class="light-bg booking-details_wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-8 responsive-wrap">
                <div class="booking-checkbox_wrap">
                    <div class="booking-checkbox">
                        <p>Tasty Hand-Pulled Noodles is a 1950s style diner located in Madison, Wisconsin. Opened in 1946 by Mickey Weidman, and located just across the street from Camp Randall Stadium, it has become a popular game day tradition amongst
                            many Badger fans. The diner is well known for its breakfast selections, especially the Scrambler, which is a large mound of potatoes, eggs, cheese, gravy, and a patrons’ choice of other toppings.</p>
                        <p>Mickies has also been featured on “Todd’s Taste of the Town” during one of ESPN’s college football broadcasts. We are one of the best Chinese restaurants in the New York, New York area. We have been recognized for our outstanding
                            Chinese & Asian cuisine, excellent Chinese menu, and great restaurant specials. We are one of the best Chinese restaurants in the New York, New York area. We have been recognized for our outstanding Chinese & Asian cuisine,
                            excellent Chinese menu, and great restaurant specials.</p>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="custom-checkbox">
                    <span class="ti-check-box"></span>
                    <span class="custom-control-description">Bike Parking</span>
                  </label> </div>
                        <div class="col-md-4">
                            <label class="custom-checkbox">
                   <span class="ti-check-box"></span>
                   <span class="custom-control-description">Wireless Internet  </span>
                 </label>
                        </div>
                        <div class="col-md-4">
                            <label class="custom-checkbox">
                 <span class="ti-check-box"></span>
                 <span class="custom-control-description">Smoking Allowed  </span>
               </label> </div>
                        <div class="col-md-4">
                            <label class="custom-checkbox">
                <span class="ti-check-box"></span>
                <span class="custom-control-description">Street Parking</span>
              </label>
                        </div>
                        <div class="col-md-4">
                            <label class="custom-checkbox">
               <span class="ti-check-box"></span>
               <span class="custom-control-description">Special</span>
             </label> </div>
                        <div class="col-md-4">
                            <label class="custom-checkbox">
              <span class="ti-check-box"></span>
              <span class="custom-control-description">Accepts Credit cards</span>
            </label>
                        </div>
                    </div>
                </div>
                <div class="booking-checkbox_wrap mt-4">
                    <h5>34 Reviews</h5>
                    <hr>
                    <div class="customer-review_wrap">
                        <div class="customer-img">
                            <img src="images/customer-img1.jpg" class="img-fluid" alt="#">
                            <p>Amanda G</p>
                            <span>35 Reviews</span>
                        </div>
                        <div class="customer-content-wrap">
                            <div class="customer-content">
                                <div class="customer-review">
                                    <h6>Best noodles in the Newyork city</h6>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span class="round-icon-blank"></span>
                                    <p>Reviewed 2 days ago</p>
                                </div>
                                <div class="customer-rating">8.0</div>
                            </div>
                            <p class="customer-text">I love the noodles here but it is so rare that I get to come here. Tasty Hand-Pulled Noodles is the best type of whole in the wall restaurant. The staff are really nice, and you should be seated quickly. I usually get the
                                hand pulled noodles in a soup. House Special #1 is amazing and the lamb noodles are also great. If you want your noodles a little chewier, get the knife cut noodles, which are also amazing. Their dumplings are great
                                dipped in their chili sauce.
                            </p>
                            <p class="customer-text">I love how you can see into the kitchen and watch them make the noodles and you can definitely tell that this is a family run establishment. The prices are are great with one dish maybe being $9. You just have to remember
                                to bring cash.
                            </p>
                            <ul>
                                <li><img src="images/review-img1.jpg" class="img-fluid" alt="#"></li>
                                <li><img src="images/review-img2.jpg" class="img-fluid" alt="#"></li>
                                <li><img src="images/review-img3.jpg" class="img-fluid" alt="#"></li>
                            </ul>
                            <span>28 people marked this review as helpful</span>
                            <a href="#"><span class="icon-like"></span>Helpful</a>
                        </div>
                    </div>
                    <hr>
                    <div class="customer-review_wrap">
                        <div class="customer-img">
                            <img src="images/customer-img2.jpg" class="img-fluid" alt="#">
                            <p>Kevin W</p>
                            <span>17 Reviews</span>
                        </div>
                        <div class="customer-content-wrap">
                            <div class="customer-content">
                                <div class="customer-review">
                                    <h6>A hole-in-the-wall old school shop.</h6>
                                    <span class="customer-rating-red"></span>
                                    <span class="round-icon-blank"></span>
                                    <span class="round-icon-blank"></span>
                                    <span class="round-icon-blank"></span>
                                    <span class="round-icon-blank"></span>
                                    <p>Reviewed 3 months ago</p>
                                </div>
                                <div class="customer-rating customer-rating-red">2.0</div>
                            </div>
                            <p class="customer-text">The dumplings were so greasy...the pan-fried shrimp noodles were the same. So much oil and grease it was difficult to eat. The shrimp noodles only come with 3 shrimp (luckily the dish itself is cheap) </p>
                            <p class="customer-text">The beef noodle soup was okay. I added black vinegar into the broth to give it some extra flavor. The soup has bok choy which I liked - it's a nice textural element. The shop itself is really unclean (which is the case
                                in many restaurants in Chinatown) They don't wipe down the tables after customers have eaten. If you peak into the kitchen many of their supplies are on the ground which is unsettling... </p>
                            <span>10 people marked this review as helpful</span>
                            <a href="#"><span class="icon-like"></span>Helpful</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 responsive-wrap">
                <div class="contact-info">
                    <img src="images/map.jpg" class="img-fluid" alt="#">
                    <div class="address">
                        <span class="icon-location-pin"></span>
                        <p> Doyers St<br> New York, NY 10013<br> b/t Division St & St James Pl <br> Chinatown, Civic Center</p>
                    </div>
                    <div class="address">
                        <span class="icon-screen-smartphone"></span>
                        <p> +44 20 7336 8898</p>
                    </div>
                    <div class="address">
                        <span class="icon-link"></span>
                        <p>https://burgerandlobster.com</p>
                    </div>
                    <div class="address">
                        <span class="icon-clock"></span>
                        <p>Mon - Sun 09:30 am - 05:30 pm <br>
                            <span class="open-now">OPEN NOW</span></p>
                    </div>
                    <a href="#" class="btn btn-outline-danger btn-contact">SEND A MESSAGE</a>
                </div>
                <div class="follow">
                    <div class="follow-img">
                        <img src="images/follow-img.jpg" class="img-fluid" alt="#">
                        <h6>Christine Evans</h6>
                        <span>New York</span>
                    </div>
                    <ul class="social-counts">
                        <li>
                            <h6>26</h6>
                            <span>Listings</span>
                        </li>
                        <li>
                            <h6>326</h6>
                            <span>Followers</span>
                        </li>
                        <li>
                            <h6>12</h6>
                            <span>Followers</span>
                        </li>
                    </ul>
                    <a href="#">FOLLOW</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//END BOOKING DETAILS -->
@endsection
