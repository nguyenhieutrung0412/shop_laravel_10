@extends('frontend.layouts.master')
@section('content')

                            <!--header middel--> 
                            <div class="header_middel">
                                <div class="row align-items-center">
                                    <div class="col-lg-3 col-md-3">
                                        <div class="logo">
                                            <a href="index.html"><img src="img\logo\logo.jpg.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9">
                                        <div class="header_right_info">
                                            <div class="search_bar">
                                                <form action="#">
                                                    <input placeholder="Search..." type="text">
                                                    <button type="submit"><i class="fa fa-search"></i></button>
                                                </form>
                                            </div>
                                            <div class="shopping_cart">
                                                <a href="#"><i class="fa fa-shopping-cart"></i> 2Items - $209.44 <i class="fa fa-angle-down"></i></a>

                                                <!--mini cart-->
                                                <div class="mini_cart">
                                                    <div class="cart_item">
                                                       <div class="cart_img">
                                                           <a href="#"><img src="img\cart\cart.jpg" alt=""></a>
                                                       </div>
                                                        <div class="cart_info">
                                                            <a href="#">lorem ipsum dolor</a>
                                                            <span class="cart_price">$115.00</span>
                                                            <span class="quantity">Qty: 1</span>
                                                        </div>
                                                        <div class="cart_remove">
                                                            <a title="Remove this item" href="#"><i class="fa fa-times-circle"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="cart_item">
                                                       <div class="cart_img">
                                                           <a href="#"><img src="img\cart\cart2.jpg" alt=""></a>
                                                       </div>
                                                        <div class="cart_info">
                                                            <a href="#">Quisque ornare dui</a>
                                                            <span class="cart_price">$105.00</span>
                                                            <span class="quantity">Qty: 1</span>
                                                        </div>
                                                        <div class="cart_remove">
                                                            <a title="Remove this item" href="#"><i class="fa fa-times-circle"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="shipping_price">
                                                        <span> Shipping </span>
                                                        <span>  $7.00  </span>
                                                    </div>
                                                    <div class="total_price">
                                                        <span> total </span>
                                                        <span class="prices">  $227.00  </span>
                                                    </div>
                                                    <div class="cart_button">
                                                        <a href="checkout.html"> Check out</a>
                                                    </div>
                                                </div>
                                                <!--mini cart end-->
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>     
                            <!--header middel end-->      
                            <div class="header_bottom">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="main_menu_inner">
                                            <div class="main_menu d-none d-lg-block">
                                                <nav>
                                                    <ul>
                                                            <li class="active"><a href="index.html">Home</a>
                                                                <div class="mega_menu jewelry">
                                                                    <div class="mega_items jewelry">
                                                                        <ul>
                                                                            <li><a href="index.html">Home 1</a></li>
                                                                            <li><a href="index-2.html">Home 2</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div> 
                                                            </li>
                                                            <li><a href="shop.html">shop</a>
                                                                <div class="mega_menu jewelry">
                                                                    <div class="mega_items jewelry">
                                                                        <ul>
                                                                            <li><a href="shop-list.html">shop list</a></li>
                                                                            <li><a href="shop-fullwidth.html">shop Full Width Grid</a></li>
                                                                            <li><a href="shop-fullwidth-list.html">shop Full Width list</a></li>
                                                                            <li><a href="shop-sidebar.html">shop Right Sidebar</a></li>
                                                                            <li><a href="shop-sidebar-list.html">shop list Right Sidebar</a></li>
                                                                            <li><a href="single-product.html">Product Details</a></li>
                                                                            <li><a href="single-product-sidebar.html">Product sidebar</a></li>
                                                                            <li><a href="single-product-video.html">Product Details video</a></li>
                                                                            <li><a href="single-product-gallery.html">Product Details Gallery</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>  
                                                            </li>
                                                            <li><a href="#">women</a>
                                                                <div class="mega_menu">
                                                                    <div class="mega_top fix">
                                                                        <div class="mega_items">
                                                                            <h3><a href="#">Accessories</a></h3>
                                                                            <ul>
                                                                                <li><a href="#">Cocktai</a></li>
                                                                                <li><a href="#">day</a></li>
                                                                                <li><a href="#">Evening</a></li>
                                                                                <li><a href="#">Sundresses</a></li>
                                                                                <li><a href="#">Belts</a></li>
                                                                                <li><a href="#">Sweets</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="mega_items">
                                                                            <h3><a href="#">HandBags</a></h3>
                                                                            <ul>
                                                                                <li><a href="#">Accessories</a></li>
                                                                                <li><a href="#">Hats and Gloves</a></li>
                                                                                <li><a href="#">Lifestyle</a></li>
                                                                                <li><a href="#">Bras</a></li>
                                                                                <li><a href="#">Scarves</a></li>
                                                                                <li><a href="#">Small Leathers</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="mega_items">
                                                                            <h3><a href="#">Tops</a></h3>
                                                                            <ul>
                                                                                <li><a href="#">Evening</a></li>
                                                                                <li><a href="#">Long Sleeved</a></li>
                                                                                <li><a href="#">Shrot Sleeved</a></li>
                                                                                <li><a href="#">Tanks and Camis</a></li>
                                                                                <li><a href="#">Sleeveless</a></li>
                                                                                <li><a href="#">Sleeveless</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mega_bottom fix">
                                                                        <div class="mega_thumb">
                                                                            <a href="#"><img src="img\banner\banner1.jpg" alt=""></a>
                                                                        </div>
                                                                        <div class="mega_thumb">
                                                                            <a href="#"><img src="img\banner\banner2.jpg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li><a href="#">men</a>
                                                                <div class="mega_menu">
                                                                    <div class="mega_top fix">
                                                                        <div class="mega_items">
                                                                            <h3><a href="#">Rings</a></h3>
                                                                            <ul>
                                                                                <li><a href="#">Platinum Rings</a></li>
                                                                                <li><a href="#">Gold Ring</a></li>
                                                                                <li><a href="#">Silver Ring</a></li>
                                                                                <li><a href="#">Tungsten Ring</a></li>
                                                                                <li><a href="#">Sweets</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="mega_items">
                                                                            <h3><a href="#">Bands</a></h3>
                                                                            <ul>
                                                                                <li><a href="#">Platinum Bands</a></li>
                                                                                <li><a href="#">Gold Bands</a></li>
                                                                                <li><a href="#">Silver Bands</a></li>
                                                                                <li><a href="#">Silver Bands</a></li>
                                                                                <li><a href="#">Sweets</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="mega_items">
                                                                            <a href="#"><img src="img\banner\banner3.jpg" alt=""></a>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </li>
                                                            <li><a href="#">pages</a>
                                                                <div class="mega_menu">
                                                                    <div class="mega_top fix">
                                                                        <div class="mega_items">
                                                                            <h3><a href="#">Column1</a></h3>
                                                                            <ul>
                                                                                <li><a href="portfolio.html">Portfolio</a></li>
                                                                                <li><a href="portfolio-details.html">single portfolio </a></li>
                                                                                <li><a href="about.html">About Us </a></li>
                                                                                <li><a href="about-2.html">About Us 2</a></li>
                                                                                <li><a href="services.html">Service </a></li>
                                                                                <li><a href="my-account.html">my account </a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="mega_items">
                                                                            <h3><a href="#">Column2</a></h3>
                                                                            <ul>
                                                                                <li><a href="blog.html">Blog </a></li>
                                                                                <li><a href="blog-details.html">Blog  Details </a></li>
                                                                                <li><a href="blog-fullwidth.html">Blog FullWidth</a></li>
                                                                                <li><a href="blog-sidebar.html">Blog  Sidebar</a></li>
                                                                                <li><a href="faq.html">Frequently Questions</a></li>
                                                                                <li><a href="404.html">404</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="mega_items">
                                                                            <h3><a href="#">Column3</a></h3>
                                                                            <ul>
                                                                                <li><a href="contact.html">Contact</a></li>
                                                                                <li><a href="cart.html">cart</a></li>
                                                                                <li><a href="checkout.html">Checkout  </a></li>
                                                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                                                <li><a href="login.html">Login</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            
                                                             <li><a href="blog.html">blog</a>
                                                                <div class="mega_menu jewelry">
                                                                    <div class="mega_items jewelry">
                                                                        <ul>
                                                                            <li><a href="blog-details.html">blog details</a></li>
                                                                            <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                                                            <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>  
                                                            </li>
                                                            <li><a href="contact.html">contact us</a></li>

                                                        </ul>
                                                </nav>
                                            </div>
                                            <div class="mobile-menu d-lg-none">
                                                    <nav>
                                                        <ul>
                                                            <li><a href="index.html">Home</a>
                                                                <div>
                                                                    <div>
                                                                        <ul>
                                                                            <li><a href="index.html">Home 1</a></li>
                                                                            <li><a href="index-2.html">Home 2</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div> 
                                                            </li>
                                                            <li><a href="shop.html">shop</a>
                                                                <div>
                                                                    <div>
                                                                        <ul>
                                                                            <li><a href="shop-list.html">shop list</a></li>
                                                                            <li><a href="shop-fullwidth.html">shop Full Width Grid</a></li>
                                                                            <li><a href="shop-fullwidth-list.html">shop Full Width list</a></li>
                                                                            <li><a href="shop-sidebar.html">shop Right Sidebar</a></li>
                                                                            <li><a href="shop-sidebar-list.html">shop list Right Sidebar</a></li>
                                                                            <li><a href="single-product.html">Product Details</a></li>
                                                                            <li><a href="single-product-sidebar.html">Product sidebar</a></li>
                                                                            <li><a href="single-product-video.html">Product Details video</a></li>
                                                                            <li><a href="single-product-gallery.html">Product Details Gallery</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>  
                                                            </li>
                                                            <li><a href="#">women</a>
                                                                <div>
                                                                    <div>
                                                                        <div>
                                                                            <h3><a href="#">Accessories</a></h3>
                                                                            <ul>
                                                                                <li><a href="#">Cocktai</a></li>
                                                                                <li><a href="#">day</a></li>
                                                                                <li><a href="#">Evening</a></li>
                                                                                <li><a href="#">Sundresses</a></li>
                                                                                <li><a href="#">Belts</a></li>
                                                                                <li><a href="#">Sweets</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div>
                                                                            <h3><a href="#">HandBags</a></h3>
                                                                            <ul>
                                                                                <li><a href="#">Accessories</a></li>
                                                                                <li><a href="#">Hats and Gloves</a></li>
                                                                                <li><a href="#">Lifestyle</a></li>
                                                                                <li><a href="#">Bras</a></li>
                                                                                <li><a href="#">Scarves</a></li>
                                                                                <li><a href="#">Small Leathers</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div>
                                                                            <h3><a href="#">Tops</a></h3>
                                                                            <ul>
                                                                                <li><a href="#">Evening</a></li>
                                                                                <li><a href="#">Long Sleeved</a></li>
                                                                                <li><a href="#">Shrot Sleeved</a></li>
                                                                                <li><a href="#">Tanks and Camis</a></li>
                                                                                <li><a href="#">Sleeveless</a></li>
                                                                                <li><a href="#">Sleeveless</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div>
                                                                            <a href="#"><img src="img\banner\banner1.jpg" alt=""></a>
                                                                        </div>
                                                                        <div>
                                                                            <a href="#"><img src="img\banner\banner2.jpg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li><a href="#">men</a>
                                                                <div>
                                                                    <div>
                                                                        <div>
                                                                            <h3><a href="#">Rings</a></h3>
                                                                            <ul>
                                                                                <li><a href="#">Platinum Rings</a></li>
                                                                                <li><a href="#">Gold Ring</a></li>
                                                                                <li><a href="#">Silver Ring</a></li>
                                                                                <li><a href="#">Tungsten Ring</a></li>
                                                                                <li><a href="#">Sweets</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div>
                                                                            <h3><a href="#">Bands</a></h3>
                                                                            <ul>
                                                                                <li><a href="#">Platinum Bands</a></li>
                                                                                <li><a href="#">Gold Bands</a></li>
                                                                                <li><a href="#">Silver Bands</a></li>
                                                                                <li><a href="#">Silver Bands</a></li>
                                                                                <li><a href="#">Sweets</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div>
                                                                            <a href="#"><img src="img\banner\banner3.jpg" alt=""></a>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </li>
                                                            <li><a href="#">pages</a>
                                                                <div>
                                                                    <div>
                                                                        <div>
                                                                            <h3><a href="#">Column1</a></h3>
                                                                            <ul>
                                                                                <li><a href="portfolio.html">Portfolio</a></li>
                                                                                <li><a href="portfolio-details.html">single portfolio </a></li>
                                                                                <li><a href="about.html">About Us </a></li>
                                                                                <li><a href="about-2.html">About Us 2</a></li>
                                                                                <li><a href="services.html">Service </a></li>
                                                                                <li><a href="my-account.html">my account </a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div>
                                                                            <h3><a href="#">Column2</a></h3>
                                                                            <ul>
                                                                                <li><a href="blog.html">Blog </a></li>
                                                                                <li><a href="blog-details.html">Blog  Details </a></li>
                                                                                <li><a href="blog-fullwidth.html">Blog FullWidth</a></li>
                                                                                <li><a href="blog-sidebar.html">Blog  Sidebar</a></li>
                                                                                <li><a href="faq.html">Frequently Questions</a></li>
                                                                                <li><a href="404.html">404</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div>
                                                                            <h3><a href="#">Column3</a></h3>
                                                                            <ul>
                                                                                <li><a href="contact.html">Contact</a></li>
                                                                                <li><a href="cart.html">cart</a></li>
                                                                                <li><a href="checkout.html">Checkout  </a></li>
                                                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                                                <li><a href="login.html">Login</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            
                                                            <li><a href="blog.html">blog</a>
                                                                <div>
                                                                    <div>
                                                                        <ul>
                                                                            <li><a href="blog-details.html">blog details</a></li>
                                                                            <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                                                            <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>  
                                                            </li>
                                                            <li><a href="contact.html">contact us</a></li>

                                                        </ul>
                                                    </nav>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--header end -->
                         <!--breadcrumbs area start-->
                        <div class="breadcrumbs_area">
                            <div class="row">
                                <div class="col-12">
                                    <div class="breadcrumb_content">
                                        <ul>
                                            <li><a href="index.html">home</a></li>
                                            <li><i class="fa fa-angle-right"></i></li>
                                            <li>services</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--breadcrumbs area end-->
                         <!--services img area-->
                           <div class="srrvices_gallery">
                                <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single_services">
                                                <div class="services_thumb">
                                                    <img src="img\services\service2.jpg" alt="">
                                                </div>
                                                <div class="services_content">
                                                   <h3>DESIGN THE COVER</h3>
                                                   <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.</p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single_services">
                                                <div class="services_thumb">
                                                    <img src="img\services\service1.jpg" alt="">
                                                </div>
                                                <div class="services_content">
                                                   <h3>DESIGN THE COVER</h3>
                                                   <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.</p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single_services">
                                                <div class="services_thumb">
                                                    <img src="img\services\service3.jpg" alt="">
                                                </div>
                                                <div class="services_content">
                                                   <h3>DESIGN THE COVER</h3>
                                                   <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                           </div>
                             <!--services img end-->

                             <!--our services area-->
                            <div class="our_services">
                                <div class="row">
                                        <div class="col-12">
                                            <div class="services_title">
                                                <h2>OUR SERVICES</h2>
                                                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore<br>
                                                    eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit..</p>
                                            </div>
                                        </div>
                                    </div>
                                <div class="row">
                                        <div class="col-lg-3 col-md-6">
                                            <div class="services_item">
                                                 <div class="services_icone">
                                                    <i class="fa fa-sliders" aria-hidden="true"></i>
                                                </div>
                                                <div class="services_desc">
                                                    <h3>BRANDING</h3>
                                                    <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="services_item">
                                                 <div class="services_icone">
                                                    <i class="fa fa-umbrella"></i>
                                                </div>
                                                <div class="services_desc">
                                                    <h3>WEB DESIGN</h3>

                                                    <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="services_item">
                                                 <div class="services_icone">

                                                    <i class="fa fa-camera"></i>

                                                </div>
                                                <div class="services_desc">
                                                    <h3>PHOTOGRAPHY</h3>

                                                    <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="services_item">
                                                 <div class="services_icone">
                                                    <i class="fa fa-cog"></i>
                                                </div>
                                                <div class="services_desc">
                                                    <h3>WEB DEVELOPMENT</h3>
                                                    <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="services_item">
                                                 <div class="services_icone">
                                                    <i class="fa fa-file-code-o" aria-hidden="true"></i>
                                                </div>
                                                <div class="services_desc">
                                                    <h3>CODING</h3>
                                                    <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="services_item">
                                                 <div class="services_icone">
                                                    <i class="fa fa-bar-chart" aria-hidden="true"></i>
                                                </div>
                                                <div class="services_desc">
                                                    <h3>MARKETING</h3>
                                                    <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="services_item">
                                                 <div class="services_icone">
                                                    <i class="fa fa-headphones"></i>
                                                </div>
                                                <div class="services_desc">
                                                    <h3>SUPPORT</h3>
                                                    <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="services_item">
                                                 <div class="services_icone">
                                                    <i class="fa fa-leaf"></i>
                                                </div>
                                                <div class="services_desc">
                                                    <h3>GRAPHIC DESIGN</h3>
                                                    <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                            </div>
                             <!--our services area end-->


                            <!--services section area-->
                            <div class="unlimited_services">
                                <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="services_section_thumb">
                                                <img src="img\services\service4.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="about_content">
                                                <h1>UNLIMITED IDEAS</h1>
                                                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. </p>
                                                <div class="view__work">
                                                    <a href="#">MORE INFO  <i class="fa fa-angle-right"></i></a>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                            </div> 
                            <!--services section end--> 

                             <!--price table area -->
                             <div class="priceing_table mb-35">
                                <div class="row">
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single_priceing">
                                                <div class="priceing_title">
                                                    <h1>Standard</h1>
                                                </div>
                                                <div class="priceing_list">
                                                    <h1><span>£19</span>/Month</h1>
                                                    <ul>
                                                        <li>2 GB Webspace</li>
                                                        <li>1 Domain</li>
                                                        <li>PHP 5 Enbled</li>
                                                        <li>24H – Support</li>
                                                    </ul>
                                                    <a href="#">purchase now </a>
                                                </div>       
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single_priceing">
                                                <div class="priceing_title">
                                                    <h1>Standard</h1>
                                                </div>
                                                <div class="priceing_list">
                                                    <h1><span>£19</span>/Month</h1>
                                                    <ul>
                                                        <li>2 GB Webspace</li>
                                                        <li>1 Domain</li>
                                                        <li>PHP 5 Enbled</li>
                                                        <li>24H – Support</li>
                                                    </ul>
                                                    <a class="list_button" href="#">purchase now </a>
                                                </div>       
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single_priceing">
                                                <div class="priceing_title">
                                                    <h1>Standard</h1>
                                                </div>
                                                <div class="priceing_list">
                                                    <h1><span>£19</span>/Month</h1>
                                                    <ul>
                                                        <li>2 GB Webspace</li>
                                                        <li>1 Domain</li>
                                                        <li>PHP 5 Enbled</li>
                                                        <li>24H – Support</li>
                                                    </ul>
                                                    <a href="#">purchase now </a>
                                                </div>       
                                            </div>
                                        </div>
                                       <div class="col-lg-3 col-md-6">
                                            <div class="single_priceing">
                                                <div class="priceing_title">
                                                    <h1>Standard</h1>
                                                </div>
                                                <div class="priceing_list">
                                                    <h1><span>£19</span>/Month</h1>
                                                    <ul>
                                                        <li>2 GB Webspace</li>
                                                        <li>1 Domain</li>
                                                        <li>PHP 5 Enbled</li>
                                                        <li>24H – Support</li>
                                                    </ul>
                                                    <a class="list_button" href="#">purchase now </a>
                                                </div>       
                                            </div>
                                        </div>
                                    </div>
                             </div>
                             <!--price table  end-->

                            <!--advantages wordpress -->
                            <div class="advantages_wordpress mb-35">
                                <div class="row align-items-center">
                                        <div class="col-lg-7 col-md-7 col-sm-12">
                                            <div class="advantages_content">
                                                <h3>Advantages of Mobilia WordPress theme</h3>
                                                <p>Build a professional website system and great user experience</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-12">
                                            <div class="advantages_button">
                                                <a href="#" title="MORE INFO ">MORE INFO <i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <!--advantages wordpress end-->
                        
                        <!--brand logo strat--> 
                        <div class="brand_logo brand_about">
                            <div class="block_title">
                                <h3>Brands</h3>
                            </div>
                            <div class="row">
                                <div class="brand_active owl-carousel">
                                    <div class="col-lg-2">
                                        <div class="single_brand">
                                            <a href="#"><img src="img\brand\brand1.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="single_brand">
                                            <a href="#"><img src="img\brand\brand2.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="single_brand">
                                            <a href="#"><img src="img\brand\brand3.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="single_brand">
                                            <a href="#"><img src="img\brand\brand4.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="single_brand">
                                            <a href="#"><img src="img\brand\brand5.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="single_brand">
                                            <a href="#"><img src="img\brand\brand6.jpg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>       
                        <!--brand logo end-->   
                    
@endsection