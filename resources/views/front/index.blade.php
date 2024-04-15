@extends('front.layout.master')
@section('title', 'Home')
@section('body')
 <!--Hero Section Begin-->
 <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="front/img/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span> Bag</span>
                            <h1>Black friday</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ad ullam eius incidunt consectetur laboriosam suscipit fugit. Distinctio magni beatae assumenda laborum sint excepturi repellat, veritatis nesciunt illo, amet corrupti.</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2> Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="front/img/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span> Bag</span>
                            <h1>Black friday</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ad ullam eius incidunt consectetur laboriosam suscipit fugit. Distinctio magni beatae assumenda laborum sint excepturi repellat, veritatis nesciunt illo, amet corrupti.</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2> Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
     <!--Hero Section End-->
    
    <!--Banner begin-->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="front/img/banner-1.jpg" alt="">
                    <div class="inner-text">
                        <h4>Men</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="front/img/banner-2.jpg" alt="">
                    <div class="inner-text">
                        <h4>Men</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="front/img/banner-3.jpg" alt="">
                    <div class="inner-text">
                        <h4>Men</h4>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!--Banner end-->

    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="front/img/products/women-large.jpg">
                        <h2>Women's</h2>
                        <a href="#">Discover More</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                    <ul> 
                            <li class="active item"data-tag="*" data-category="women">All</li>
                            <li class="item"data-tag=".Clothing" data-category="women">Clothings</li>
                            <li class="item"data-tag=".HandBag" data-category="women">HandBag</li>
                            <li class="item"data-tag=".Shoes" data-category="women">Shoes</li>
                            <li class="item"data-tag=".Accessories" data-category="women">Accessories</li>
                        </ul>
                    </div>
            
            
                <div class="product-slider owl-carousel women">
                    @foreach($featuredProducts['women'] as $product)
                        <div class="product-item item {{$product->tag}}">
                            <div class="pi-pic">
                                <img src="front/img/products/{{$product->productImages[0]->path}}" alt="">
                                @if ($product->discount != null)
                                    <div class="sale">Sale</div>
                                @endif
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                            <ul>
                                <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="shop/product/{{$product->id}}"> + Quick View</a></li>
                                <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                            </ul>
                            </div>
                            <div class="pi-text">
                                <div class="category-name">{{$product->tag}}</div>
                                <a href="shop/product/{{$product->id}}">
                                    <h5>{{$product->name}}</h5>
                                </a>
                                <div class="product-price">
                                    @if($product->discount != null)
                                        ${{$product->discount}}
                                        <span>{{$product->price}}</span>
                                    @else
                                        ${{$product->price}}
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                </div>
            </div>
            </div>
        </div>
    </section>

    <section class="deal-of-week set-bg spad" data-setbg="front/img/time-bg.jpg">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>Deal Of The Week</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium, omnis laboriosam. Explicabo totam deserunt iusto, beatae distinctio architecto nesciunt impedit, cumque, enim eius unde accusantium incidunt? Quod est tempora deserunt?</p>
                    <div class="product-price">
                        $35.00
                        <span>/HandBag</span>
                    </div>
                </div>
                <div class="countdown-timer" id="countdown>">
                    <div class="cd-item">
                        <span> 56</span>
                        <p>Days</p>
                    </div>
                    <div class="cd-item">
                        <span> 12</span>
                        <p>Hrs</p>
                    </div>
                    <div class="cd-item">
                        <span> 40</span>
                        <p>Mín</p>
                    </div>
                    <div class="cd-item">
                        <span> 52</span>
                        <p>Secs</p>
                    </div>
                </div>
                <a href="" class="primary-btn">Shop Now</a>
            </div>
        </div>
    </section>

    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 ">
                    <div class="filter-control">
                        <ul> 
                            <li class="active item"data-tag="*" data-category="men">All</li>
                            <li class="item"data-tag=".Clothing" data-category="men">Clothings</li>
                            <li class="item"data-tag=".HandBag" data-category="men">HandBag</li>
                            <li class="item"data-tag=".Shoes" data-category="men">Shoes</li>
                            <li class="item"data-tag=".Accessories" data-category="men">Accessories</li>
                        </ul>
                    </div>
            
            
                    <div class="product-slider owl-carousel men ">
                        @foreach($featuredProducts['men'] as $product)
                            <div class="product-item item {{$product->tag}}">
                                <div class="pi-pic">
                                    <img src="front/img/products/{{$product->productImages[0]->path}}" alt="">
                                    @if ($product->discount != null)
                                        <div class="sale">Sale</div>
                                    @endif
                                    <div class="icon">
                                        <i class="icon_heart_alt"></i>
                                    </div>
                                    <ul>
                                        <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                        <li class="quick-view"><a href="shop/product/{{$product->id}}"> + Quick View</a></li>
                                        <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="pi-text">
                                    <div class="category-name">{{$product->tag}}</div>
                                    <a href="shop/product/{{$product->id}}">
                                        <h5>{{$product->name}}</h5>
                                    </a>
                                    <div class="product-price">
                                        @if($product->discount != null)
                                            ${{$product->discount}}
                                            <span>{{$product->price}}</span>
                                        @else
                                            ${{$product->price}}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg" data-setbg="front/img/products/man-large.jpg">
                        <h2>Man's</h2>
                        <a href="#">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="instagram-photo">
        <div class="insta-item set-bg" data-setbg="front/img/insta-1.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">BlackCat </a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-2.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Collection </a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-3.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Collection </a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-4.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Collection </a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-5.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Collection </a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/insta-6.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Collection </a></h5>
            </div>
        </div>
    </div>

    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>From The Blog</h2>
                    </div>

                </div>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)  
                    <div class="col-lg-4 col-md-6">
                        <div class="single-latest-blog">
                            <img src="front/img/blog/{{$blog->image}}" alt="">
                            <div class="latest-text">
                                <div class="tag-list">
                                    <div class="tag-item">
                                        <i class="fa fa-calendar-o"></i>
                                        {{date('M d, Y', strtotime($blog->created_at))}}
                                    </div>
                                    <div class="tag-item">
                                        <i class="fa fa-comment-o"></i>
                                        {{count($blog->blogComments)}}
                                    </div>
                                </div>
                                <a href="">
                                    <h4>{{$blog->title}}</h4>
                                </a>
                                <p>{{$blog->subtitle}} </p>
                            </div>
                        
                        </div>
                        
                    </div>
                @endforeach
            </div>
            <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="front/img/icon-1.png">
                        </div>
                        <div class="sb-text">
                            <h6>FREE SHIPPING</h6>
                            <p>For all order over 99$</p>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="front/img/icon-2.png">
                            </div>
                            <div class="sb-text">
                                <h6>DELIVERY ON TIME</h6>
                                <p>If good have prolems</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                            <div class="single-benefit">
                                <div class="sb-icon">
                                    <img src="front/img/icon-3.png">
                                </div>
                                <div class="sb-text">
                                    <h6>SECURE PAYMENT</h6>
                                    <p>100% secure payment</p>
                                </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
    </section>

<div class="partner-logo">
    <div class="container">
        <div class="logo-carousel owl-carousel">
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="front/img/logo-carousel/logo-1.png">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="front/img/logo-carousel/logo-2.png">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="front/img/logo-carousel/logo-3.png">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="front/img/logo-carousel/logo-4.png">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="front/img/logo-carousel/logo-5.png">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection