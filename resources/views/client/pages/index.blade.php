@extends('client.layouts.master')
@section('slide')
    @include('client.layouts.slide')
@endsection
@section('content')
<div class="promotion-area">
    <div class="container">
        <div class="row">
            <!-- single-promo start -->
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="single-promo">
                    <a href="#"><img src=" assets/client/img/promotion/1.jpg" alt="" /></a>
                </div>
            </div>
            <!-- single-promo end -->
            <!-- single-promo start -->
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="single-promo">
                    <a href="#"><img src=" assets/client/img/promotion/2.jpg" alt="" /></a>
                </div>
            </div>
            <!-- single-promo end -->
            <!-- single-promo start -->
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="single-promo">
                    <a href="#"><img src=" assets/client/img/promotion/3.jpg" alt="" /></a>
                </div>
            </div>
            <!-- single-promo end -->
        </div>
    </div>
</div>
<!-- promotion-area end -->
<!-- features-area start -->
<div class="features-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="section-heading">
                    <h3>Featured products</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="features-curosel">
                <!-- single-features start -->
                <div class="col-md-3">
                    <div class="single-features">
                        <div class="product-img">
                            <a href="#">
                                <img class="first-img" src=" assets/client/img/product/1.jpg" alt="" />
                                <img class="second-img" src=" assets/client/img/product/2.jpg" alt="" />
                            </a>
                            <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
                            <div class="action-buttons">
                                <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
                                <a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
                                <a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="pro-rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                            <h5><a href="#">Ornare sed consequat</a></h5>
                            <span class="pro-price">£515.00</span>
                        </div>
                    </div>
                </div>
                <!-- single-features end -->
                <!-- single-features start -->
                <div class="col-md-3">
                    <div class="single-features">
                        <span class="sale-text">Sale</span>
                        <div class="product-img">
                            <a href="#">
                                <img class="first-img" src=" assets/client/img/product/3.jpg" alt="" />
                                <img class="second-img" src=" assets/client/img/product/4.jpg" alt="" />
                            </a>
                            <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
                            <div class="action-buttons">
                                <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
                                <a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
                                <a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="pro-rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-o"></i></a>
                            </div>
                            <h5><a href="#">Etiam molestie</a></h5>
                            <span class="old-price">£230.00</span>
                            <span class="pro-price">£220.00</span>
                        </div>
                    </div>
                </div>
                <!-- single-features end -->
                <!-- single-features start -->
                <div class="col-md-3">
                    <div class="single-features">
                        <span class="sale-text">Sale</span>
                        <div class="product-img">
                            <a href="#">
                                <img class="first-img" src=" assets/client/img/product/5.jpg" alt="" />
                                <img class="second-img" src=" assets/client/img/product/6.jpg" alt="" />
                            </a>
                            <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
                            <div class="action-buttons">
                                <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
                                <a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
                                <a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="pro-rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                            <h5><a href="#">Aenean eu tristique</a></h5>
                            <span class="old-price">£80.00</span>
                            <span class="pro-price">£70.00</span>
                        </div>
                    </div>
                </div>
                <!-- single-features end -->
                <!-- single-features start -->
                <div class="col-md-3">
                    <div class="single-features">
                        <span class="sale-text">Sale</span>
                        <div class="product-img">
                            <a href="#">
                                <img class="first-img" src=" assets/client/img/product/7.jpg" alt="" />
                            </a>
                            <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
                            <div class="action-buttons">
                                <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
                                <a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
                                <a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="pro-rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-o"></i></a>
                            </div>
                            <h5><a href="#">Feugiat justo lacinia</a></h5>
                            <span class="old-price">£80.00</span>
                            <span class="pro-price">£70.00</span>
                        </div>
                    </div>
                </div>
                <!-- single-features end -->
                <!-- single-features start -->
                <div class="col-md-3">
                    <div class="single-features">
                        <div class="product-img">
                            <a href="#">
                                <img class="first-img" src=" assets/client/img/product/8.jpg" alt="" />
                            </a>
                            <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
                            <div class="action-buttons">
                                <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
                                <a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
                                <a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="pro-rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                            <h5><a href="#">Vulputate justo</a></h5>
                            <span class="pro-price">£90.00</span>
                        </div>
                    </div>
                </div>
                <!-- single-features end -->
                <!-- single-features start -->
                <div class="col-md-3">
                    <div class="single-features">
                        <span class="sale-text">Sale</span>
                        <div class="product-img">
                            <a href="#">
                                <img class="first-img" src=" assets/client/img/product/10.jpg" alt="" />
                                <img class="second-img" src=" assets/client/img/product/11.jpg" alt="" />
                            </a>
                            <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
                            <div class="action-buttons">
                                <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
                                <a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
                                <a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="pro-rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                            <h5><a href="#">Phasellus vel hendrerit</a></h5>
                            <span class="pro-price">£55.00</span>
                        </div>
                    </div>
                </div>
                <!-- single-features end -->
            </div>
        </div>
    </div>
</div>
<!-- features-area end -->
<!-- sale-product-area start -->
<div class="sale-product-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="sale-container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 hidden-sm">
                            <div class="sale-product-left">
                                <h2>Sale up to 30%off</h2>
                                <h3>Sale</h3>
                                <p>products</p>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <div class="sale-curosel1">
                                <div class="home-3-sale">
                                    <div class="sale-curosel">
                                        <!-- product start -->
                                        <div class="single-features">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="first-img" src=" assets/client/img/product/3.jpg" alt="" />
                                                    <img class="second-img" src=" assets/client/img/product/4.jpg" alt="" />
                                                </a>
                                                <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                <span class="sale-text">Sale</span>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                </div>
                                                <h5><a href="#">Etiam molestie</a></h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                                <span class="old-price">£230.00</span>
                                                <span class="pro-price">£220.00</span>
                                                <div class="timer">
                                                    <div data-countdown="2016/05/01"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product end -->
                                        <!-- product start -->
                                        <div class="single-features">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="first-img" src=" assets/client/img/product/5.jpg" alt="" />
                                                    <img class="second-img" src=" assets/client/img/product/6.jpg" alt="" />
                                                </a>
                                                <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                <span class="sale-text">Sale</span>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                </div>
                                                <h5><a href="#">Aenean eu tristique</a></h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                                <span class="old-price">£80.00</span>
                                                <span class="pro-price">£70.00</span>
                                                <div class="timer">
                                                    <div data-countdown="2016/04/01"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product end -->
                                        <!-- product start -->
                                        <div class="single-features">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="first-img" src=" assets/client/img/product/15.jpg" alt="" />
                                                    <img class="second-img" src=" assets/client/img/product/14.jpg" alt="" />
                                                </a>
                                                <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                <span class="sale-text">Sale</span>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                </div>
                                                <h5><a href="#">Elementum felis</a></h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                                <span class="old-price">£130.00</span>
                                                <span class="pro-price">£120.00</span>
                                                <div class="timer">
                                                    <div data-countdown="2016/02/01"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- sale-product-area end -->
<!-- category-area start -->
<div class="category-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="category-tab">
                    <div>
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">New arrivals</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">bestseller</a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Top Rated</a></li>
                      </ul>

                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <div class="row">
                                <div class="category-curosel-home-3">
                                    <div class="col-md-4">
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/10.jpg" alt="" />
                                                        <img class="second-img" src=" assets/client/img/product/11.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Phasellus vel hendrerit</a></h5>
                                                    <span class="pro-price">£55.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/8.jpg" alt="" />
                                                        <img class="second-img" src=" assets/client/img/product/13.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Etiam eu neque</a></h5>
                                                    <span class="old-price">£85.00</span>
                                                    <span class="pro-price">£80.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/14.jpg" alt="" />
                                                        <img class="second-img" src=" assets/client/img/product/15.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Elementum felis</a></h5>
                                                    <span class="old-price">£125.00</span>
                                                    <span class="pro-price">£120.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                    </div>
                                    <div class="col-md-4">
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/12.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Feugiat justo lacinia</a></h5>
                                                    <span class="pro-price">£515.00</span>
                                                    <span class="old-price">£230.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/3.jpg" alt="" />
                                                        <img class="second-img" src=" assets/client/img/product/4.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Etiam molestie</a></h5>
                                                    <span class="old-price">£230.00</span>
                                                    <span class="pro-price">£220.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/5.jpg" alt="" />
                                                        <img class="second-img" src=" assets/client/img/product/6.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Ornare sed consequat</a></h5>
                                                    <span class="old-price">£80.00</span>
                                                    <span class="pro-price">£70.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                    </div>
                                    <div class="col-md-4">
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/7.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Feugiat justo lacinia</a></h5>
                                                    <span class="old-price">£80.00</span>
                                                    <span class="pro-price">£70.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/14.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Eleifend arcu</a></h5>
                                                    <span class="pro-price">£80.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/16.jpg" alt="" />
                                                        <img class="second-img" src=" assets/client/img/product/17.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Congue lectus</a></h5>
                                                    <span class="old-price">£115.00</span>
                                                    <span class="pro-price">£105.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                    </div>
                                    <div class="col-md-4">
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/18.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Natoque penatibus</a></h5>
                                                    <span class="pro-price">£70.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/19.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Buscipit at magna</a></h5>
                                                    <span class="pro-price">£65.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/15.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Congue lectus</a></h5>
                                                    <span class="old-price">£115.00</span>
                                                    <span class="pro-price">£105.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">
                            <div class="row">
                                <div class="category-curosel-home-3">
                                    <div class="col-md-4">
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/7.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Feugiat justo lacinia</a></h5>
                                                    <span class="old-price">£80.00</span>
                                                    <span class="pro-price">£70.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/14.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Eleifend arcu</a></h5>
                                                    <span class="pro-price">£80.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/16.jpg" alt="" />
                                                        <img class="second-img" src=" assets/client/img/product/17.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Congue lectus</a></h5>
                                                    <span class="old-price">£115.00</span>
                                                    <span class="pro-price">£105.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                    </div>
                                    <div class="col-md-4">
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/18.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Natoque penatibus</a></h5>
                                                    <span class="pro-price">£70.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/19.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Buscipit at magna</a></h5>
                                                    <span class="pro-price">£65.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/15.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Congue lectus</a></h5>
                                                    <span class="old-price">£115.00</span>
                                                    <span class="pro-price">£105.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                    </div>
                                    <div class="col-md-4">
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/20.jpg" alt="" />
                                                        <img class="second-img" src=" assets/client/img/product/15.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Aliquam lobortis est</a></h5>
                                                    <span class="pro-price">£80.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/8.jpg" alt="" />
                                                        <img class="second-img" src=" assets/client/img/product/13.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Etiam eu neque</a></h5>
                                                    <span class="old-price">£85.00</span>
                                                    <span class="pro-price">£80.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/21.jpg" alt="" />
                                                        <img class="second-img" src=" assets/client/img/product/22.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Dignissim venenatis</a></h5>
                                                    <span class="old-price">£155.00</span>
                                                    <span class="pro-price">£120.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                    </div>
                                    <div class="col-md-4">
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/7.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Feugiat justo lacinia</a></h5>
                                                    <span class="pro-price">£515.00</span>
                                                    <span class="old-price">£230.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/3.jpg" alt="" />
                                                        <img class="second-img" src=" assets/client/img/product/4.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Etiam molestie</a></h5>
                                                    <span class="old-price">£230.00</span>
                                                    <span class="pro-price">£220.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/5.jpg" alt="" />
                                                        <img class="second-img" src=" assets/client/img/product/6.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Ornare sed consequat</a></h5>
                                                    <span class="old-price">£80.00</span>
                                                    <span class="pro-price">£70.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                    </div>
                                    <div class="col-md-4">
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/7.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Feugiat justo lacinia</a></h5>
                                                    <span class="old-price">£80.00</span>
                                                    <span class="pro-price">£70.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/14.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Eleifend arcu</a></h5>
                                                    <span class="pro-price">£80.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/16.jpg" alt="" />
                                                        <img class="second-img" src=" assets/client/img/product/17.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Congue lectus</a></h5>
                                                    <span class="old-price">£115.00</span>
                                                    <span class="pro-price">£105.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                    </div>
                                    <div class="col-md-4">
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/18.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Natoque penatibus</a></h5>
                                                    <span class="pro-price">£70.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/19.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Buscipit at magna</a></h5>
                                                    <span class="pro-price">£65.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/15.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Congue lectus</a></h5>
                                                    <span class="old-price">£115.00</span>
                                                    <span class="pro-price">£105.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="messages">
                            <div class="row">
                                <div class="category-curosel-home-3">
                                    <div class="col-md-4">
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/20.jpg" alt="" />
                                                        <img class="second-img" src=" assets/client/img/product/15.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Aliquam lobortis est</a></h5>
                                                    <span class="pro-price">£80.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/8.jpg" alt="" />
                                                        <img class="second-img" src=" assets/client/img/product/13.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Etiam eu neque</a></h5>
                                                    <span class="old-price">£85.00</span>
                                                    <span class="pro-price">£80.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/21.jpg" alt="" />
                                                        <img class="second-img" src=" assets/client/img/product/22.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Dignissim venenatis</a></h5>
                                                    <span class="old-price">£155.00</span>
                                                    <span class="pro-price">£120.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                    </div>
                                    <div class="col-md-4">
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/12.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Feugiat justo lacinia</a></h5>
                                                    <span class="pro-price">£515.00</span>
                                                    <span class="old-price">£230.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/3.jpg" alt="" />
                                                        <img class="second-img" src=" assets/client/img/product/4.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Etiam molestie</a></h5>
                                                    <span class="old-price">£230.00</span>
                                                    <span class="pro-price">£220.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/5.jpg" alt="" />
                                                        <img class="second-img" src=" assets/client/img/product/6.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Ornare sed consequat</a></h5>
                                                    <span class="old-price">£80.00</span>
                                                    <span class="pro-price">£70.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                    </div>
                                    <div class="col-md-4">
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/7.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Feugiat justo lacinia</a></h5>
                                                    <span class="old-price">£80.00</span>
                                                    <span class="pro-price">£70.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/14.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Eleifend arcu</a></h5>
                                                    <span class="pro-price">£80.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/16.jpg" alt="" />
                                                        <img class="second-img" src=" assets/client/img/product/17.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Congue lectus</a></h5>
                                                    <span class="old-price">£115.00</span>
                                                    <span class="pro-price">£105.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                    </div>
                                    <div class="col-md-4">
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/18.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Natoque penatibus</a></h5>
                                                    <span class="pro-price">£70.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/19.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Buscipit at magna</a></h5>
                                                    <span class="pro-price">£65.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                        <!-- single-category-tab start -->
                                        <div class="single-category-tab">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src=" assets/client/img/product/15.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Congue lectus</a></h5>
                                                    <span class="old-price">£115.00</span>
                                                    <span class="pro-price">£105.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-category-tab end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- category-area end -->
<!-- banner-area start -->
<div class="banner-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="single-banner banner-space">
                    <a href="#"><img src=" assets/client/img/banner/1.jpg" alt="" /></a>
                </div>
                <div class="single-banner">
                    <a href="#"><img src=" assets/client/img/banner/2.jpg" alt="" /></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="single-banner banner-space">
                    <a href="#"><img src=" assets/client/img/banner/3.jpg" alt="" /></a>
                </div>
                <div class="single-banner">
                    <a href="#"><img src=" assets/client/img/banner/4.jpg" alt="" /></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="single-banner banner-space">
                    <a href="#"><img src=" assets/client/img/banner/5.jpg" alt="" /></a>
                </div>
                <div class="single-banner">
                    <a href="#"><img src=" assets/client/img/banner/6.jpg" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner-area end -->
<!-- recent-post-area start -->
<div class="recent-post-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="section-heading">
                    <h3>Recent Posts</h3>
                </div>
                <div class="row">
                    <div class="recent-post-curosel-home-3">
                        <!-- recent-post start -->
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="recent-post">
                                <div class="post-thumb">
                                    <a href="#"><img src=" assets/client/img/blog/r1.jpg" alt="" /></a>
                                </div>
                                <div class="post-info">
                                    <span class="recent-post-date">March 10,2015</span>
                                    <h3><a href="#">Blog image post layout</a></h3>
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero</p>
                                    <a class="read-more" href="#">read more</a>
                                    <span class="recent-comment"><a href="#"><i class="fa fa-comment-o"></i> 0 comments</a></span>
                                </div>
                            </div>
                        </div>
                        <!-- recent-post start -->
                        <!-- recent-post start -->
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="recent-post">
                                <div class="post-thumb">
                                    <a href="#"><img src=" assets/client/img/blog/r2.jpg" alt="" /></a>
                                </div>
                                <div class="post-info">
                                    <span class="recent-post-date">December 1,2014</span>
                                    <h3><a href="#">Post in Gallery format</a></h3>
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero</p>
                                    <a class="read-more" href="#">read more</a>
                                    <span class="recent-comment"><a href="#"><i class="fa fa-comment-o"></i> 0 comments</a></span>
                                </div>
                            </div>
                        </div>
                        <!-- recent-post start -->
                        <!-- recent-post start -->
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="recent-post">
                                <div class="post-thumb">
                                    <a href="#"><img src=" assets/client/img/blog/r3.jpg" alt="" /></a>
                                </div>
                                <div class="post-info">
                                    <span class="recent-post-date">December 1,2014</span>
                                    <h3><a href="#">Blog image post layout</a></h3>
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero</p>
                                    <a class="read-more" href="#">read more</a>
                                    <span class="recent-comment"><a href="#"><i class="fa fa-comment-o"></i> 0 comments</a></span>
                                </div>
                            </div>
                        </div>
                        <!-- recent-post start -->
                        <!-- recent-post start -->
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="recent-post">
                                <div class="post-thumb">
                                    <a href="#"><img src=" assets/client/img/blog/r4.jpg" alt="" /></a>
                                </div>
                                <div class="post-info">
                                    <span class="recent-post-date">December 1,2014</span>
                                    <h3><a href="#">Post in Video format</a></h3>
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero</p>
                                    <a class="read-more" href="#">read more</a>
                                    <span class="recent-comment"><a href="#"><i class="fa fa-comment-o"></i> 0 comments</a></span>
                                </div>
                            </div>
                        </div>
                        <!-- recent-post start -->
                        <!-- recent-post start -->
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="recent-post">
                                <div class="post-thumb">
                                    <a href="#"><img src=" assets/client/img/blog/r5.jpg" alt="" /></a>
                                </div>
                                <div class="post-info">
                                    <span class="recent-post-date">December 1,2014</span>
                                    <h3><a href="#">Maecenas ultricies sed odio</a></h3>
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero</p>
                                    <a class="read-more" href="#">read more</a>
                                    <span class="recent-comment"><a href="#"><i class="fa fa-comment-o"></i> 0 comments</a></span>
                                </div>
                            </div>
                        </div>
                        <!-- recent-post start -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="section-heading">
                    <h3>TESTIMONIAL</h3>
                </div>
                <div class="testimonial">
                    <div class="single-testimonial">
                        <!-- testimonial-list start -->
                        <div class="testimonial-list">
                            <div class="test-content">
                                <span><i class="fa fa-quote-left"></i></span>
                                <p>Integer tincidunt nisi libero, sed aliquet ipsum fermentum eu. Duis porta egestas tellus sed vestibulum. Nam euismod elit id dolor aliquet, ut blandit massa egestas</p>
                            </div>
                            <div class="test-img">
                                <img src=" assets/client/img/testimonial/2.jpg" alt="" />
                                <div class="test-author">
                                    <span class="test-name">Katherine Sullivan</span>
                                    <span class="test-title">CEO of SunPark</span>
                                </div>
                            </div>
                        </div>
                        <!-- testimonial-list end -->
                        <!-- testimonial-list start -->
                        <div class="testimonial-list">
                            <div class="test-content">
                                <span><i class="fa fa-quote-left"></i></span>
                                <p>Etiam rhoncus congue arcu sed interdum. Cras dolor diam, accumsan eu aliquam eu, luctus vehicula velit. Nam eget tortor ut felis fermentum sodales ac eu lacus</p>
                            </div>
                            <div class="test-img">
                                <img src=" assets/client/img/testimonial/1.jpg" alt="" />
                                <div class="test-author">
                                    <span class="test-name">Elizabeth Taylor</span>
                                    <span class="test-title">Designer of BootExperts</span>
                                </div>
                            </div>
                        </div>
                        <!-- testimonial-list start -->

                        <!-- testimonial-list start -->
                        <div class="testimonial-list">
                            <div class="test-content">
                                <span><i class="fa fa-quote-left"></i></span>
                                <p>Proin varius erat sed nibh eleifend, scelerisque aliquam sapien malesuada. Donec at eros ex. Etiam tempus ornare nibh vel gravida</p>
                            </div>
                            <div class="test-img">
                                <img src=" assets/client/img/testimonial/2.jpg" alt="" />
                                <div class="test-author">
                                    <span class="test-name">Katherine Sullivan</span>
                                    <span class="test-title">Customer</span>
                                </div>
                            </div>
                        </div>
                        <!-- testimonial-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- recent-post-area end -->
<!-- brand-area start -->
<div class="brand-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h3>Logo brands</h3>
                </div>
            </div>
            <div class="clear"></div>
            <div class="brand-curosel">
                <!-- brand-img start -->
                <div class="col-md-3">
                    <div class="brand-img">
                        <a href="#"><img src=" assets/client/img/brand/1.jpg" alt="" /></a>
                    </div>
                </div>
                <!-- brand-img end -->
                <!-- brand-img start -->
                <div class="col-md-3">
                    <div class="brand-img">
                        <a href="#"><img src=" assets/client/img/brand/2.jpg" alt="" /></a>
                    </div>
                </div>
                <!-- brand-img end -->
                <!-- brand-img start -->
                <div class="col-md-3">
                    <div class="brand-img">
                        <a href="#"><img src=" assets/client/img/brand/3.jpg" alt="" /></a>
                    </div>
                </div>
                <!-- brand-img end -->
                <!-- brand-img start -->
                <div class="col-md-3">
                    <div class="brand-img">
                        <a href="#"><img src=" assets/client/img/brand/4.jpg" alt="" /></a>
                    </div>
                </div>
                <!-- brand-img end -->
                <!-- brand-img start -->
                <div class="col-md-3">
                    <div class="brand-img">
                        <a href="#"><img src=" assets/client/img/brand/1.jpg" alt="" /></a>
                    </div>
                </div>
                <!-- brand-img end -->
                <!-- brand-img start -->
                <div class="col-md-3">
                    <div class="brand-img">
                        <a href="#"><img src=" assets/client/img/brand/3.jpg" alt="" /></a>
                    </div>
                </div>
                <!-- brand-img end -->
            </div>
        </div>
    </div>
</div>
<!-- brand-area end -->
<!-- corporate-about-area start -->
<div class="corporate-about-area">
    <div class="container">
        <div class="row">
            <!-- single-corporate start -->
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="single-corporate">
                    <div class="corporate-icon">
                        <i class="fa fa-truck"></i>
                    </div>
                    <div class="corporate-text">
                        <h4>FREE SHIPPING & RETURN</h4>
                        <p>Free shipping on all orders over $99.</p>
                    </div>
                </div>
            </div>
            <!-- single-corporate end -->
            <!-- single-corporate start -->
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="single-corporate">
                    <div class="corporate-icon">
                        <i class="fa fa-usd"></i>
                    </div>
                    <div class="corporate-text">
                        <h4>MONEY BACK GUARANTEE</h4>
                        <p>100% money back guarantee.</p>
                    </div>
                </div>
            </div>
            <!-- single-corporate end -->
            <!-- single-corporate start -->
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="single-corporate">
                    <div class="corporate-icon">
                        <i class="fa fa-life-bouy"></i>
                    </div>
                    <div class="corporate-text">
                        <h4>ONLINE SUPPORT 24/7</h4>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
            </div>
            <!-- single-corporate end -->
        </div>
    </div>
</div>

@endsection
