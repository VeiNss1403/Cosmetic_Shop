@extends('front.layout.master')
@section('title', 'Shop')
@section('body')
    <!-- Start coding here -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.html"><i class="fa fa-home"></i>Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <section class="product-shop spad"> 
       <div class="container">
            <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                <div class="filter-widget">
                    <h4 class="fw-title">Categories</h4>
                    <ul class="filter-catagories">
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Men</a></li>
                    </ul>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Brand</h4>
                    <div class="fw-brand-check">
                        <div class="bc-item">
                            <label for="bc-calvin">
                                Calvin Kelein
                                <input type="checkbox" id="bc-calvin">
                                <span class="checkmark"></span>

                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-calvin">
                                Calvin Kelein
                                <input type="checkbox" id="bc-calvin">
                                <span class="checkmark"></span>

                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-calvin">
                                Calvin Kelein
                                <input type="checkbox" id="bc-calvin">
                                <span class="checkmark"></span>

                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-calvin">
                                Calvin Kelein
                                <input type="checkbox" id="bc-calvin">
                                <span class="checkmark"></span>

                            </label>
                        </div>
                        
                    </div>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Price</h4>
                    <div class="filter-range-wrap">
                        <div class="range-slider">
                            <div class="price-input">
                                <input type="text" id="minamount">
                                <input type="text" id="maxamount">
                            </div>

                        </div>
                        <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="33" data-max="98">
                            <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                        </div>
                    </div>
                    <a href="#" class="filter-btn">Filter</a>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Colror</h4>
                    <div class="fw-color-choose">
                        <div class="cs-item">
                            <input type="radio" id="cs-black">
                            <label for="cs-black" class="cs-black">Black</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-violet">
                            <label for="cs-violet" class="cs-violet">ioletV</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-blue">
                            <label for="cs-blue" class="cs-blue">Blue</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-yellow">
                            <label for="cs-yellow" class="cs-yellow">Yello</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-red">
                            <label for="cs-yellow" class="cs-yellow">Red</label>
                        </div>
                    </div>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Size</h4>
                    <div class="fw-size-choose">
                        <div class="cs-item">
                            <input type="radio" id="s-size">
                            <label for="s-size" class="s-size">S</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="s-size">
                            <label for="s-size" class="s-size">M</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="s-size">
                            <label for="s-size" class="s-size">L</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="s-size">
                            <label for="s-size" class="s-size">XL</label>
                        </div>
                    </div>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Tags</h4>
                    <div class="fw-tags">
                        <a href="#">Towle</a>
                        <a href="#">Towle</a>
                        <a href="#">Towle</a>
                        <a href="#">Towle</a>
                        <a href="#">Towle</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 order-1 order-lg-2">
               <div class="product-show-option">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <div class="select-option">
                            <select class="sorting">
                                <option value="">Default Sorting</option>
                            </select>
                            <select class="p-show">
                                <option value="">Show:</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 text-right">
                        <p> Show 01- 09 of 36 Product</p> 
                    </div>
                </div>
               </div>
               <div class="product-list">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="front/img/products/product-1.jpg" alt="">
                                <div class="sale pp-sale"> Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i  class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.html">+Quick View</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Towle</div>
                                <a href="#">
                                    <h5>Pure Pineapple</h5>
                                </a>
                                <div class="product-price">
                                    $14.00
                                    <span>$35.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="front/img/products/product-1.jpg" alt="">
                                <div class="sale pp-sale"> Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i  class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.html">+Quick View</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Towle</div>
                                <a href="#">
                                    <h5>Pure Pineapple</h5>
                                </a>
                                <div class=" product-price">
                                    $14.00
                                    <span>$35.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="front/img/products/product-1.jpg" alt="">
                                <div class="sale pp-sale"> Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i  class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.html">+Quick View</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Towle</div>
                                <a href="#">
                                    <h5>Pure Pineapple</h5>
                                </a>
                                <div class=" product-price">
                                    $14.00
                                    <span>$35.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="front/img/products/product-1.jpg" alt="">
                                <div class="sale pp-sale"> Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i  class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.html">+Quick View</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Towle</div>
                                <a href="#">
                                    <h5>Pure Pineapple</h5>
                                </a>
                                <div class=" product-price">
                                    $14.00
                                    <span>$35.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="front/img/products/product-1.jpg" alt="">
                                <div class="sale pp-sale"> Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i  class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.html">+Quick View</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Towle</div>
                                <a href="#">
                                    <h5>Pure Pineapple</h5>
                                </a>
                                <div class=" product-price">
                                    $14.00
                                    <span>$35.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="front/img/products/product-1.jpg" alt="">
                                <div class="sale pp-sale"> Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i  class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.html">+Quick View</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Towle</div>
                                <a href="#">
                                    <h5>Pure Pineapple</h5>
                                </a>
                                <div class=" product-price">
                                    $14.00
                                    <span>$35.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="front/img/products/product-1.jpg" alt="">
                                <div class="sale pp-sale"> Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i  class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.html">+Quick View</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Towle</div>
                                <a href="#">
                                    <h5>Pure Pineapple</h5>
                                </a>
                                <div class=" product-price">
                                    $14.00
                                    <span>$35.00</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
               </div>
               <div class="loading-more">
                <i class="icon-loading"></i>
                <a href="#">Loading More</a>
               </div>
            </div>
            </div>
        </div>
    </section>
@endsection
