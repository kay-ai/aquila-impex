<header class="header">
    <nav class="ps-header--center header-desktop ps-header--business">
        <div class="header-inner">
            <div class="header-inner__left"><a class="logo" href="{{route('welcome')}}">Aquila<span class="text-3nd">Impex.</span></a></div>
            <div class="header-inner__center">
                <div class="ps-business--nav">
                    <ul class="menu">
                        <li class="menu-item-has-children has-mega-menu"><a class="nav-link" href="{{route('welcome')}}">Home</a></li>
                        <li class="menu-item-has-children has-mega-menu"><a class="nav-link" href="about-us.html">About Us</a></li>
                        <li class="menu-item-has-children has-mega-menu"><a class="nav-link" href="javascript:void(0);">Pages</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                            <div class="mega-menu">
                                <div class="mega-anchor"></div>
                                <div class="mega-menu__column">
                                    <h4>Page all<span class="sub-toggle"></span></h4>
                                    <ul class="sub-menu--mega">
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="faq.html">FAQs</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="menu-item-has-children has-mega-menu active"><a class="nav-link active" href="{{route('blog')}}">Blog</a>
                        </li>
                        <li class="menu-item-has-children has-mega-menu"><a class="nav-link" href="faq.html">FAQs</a></li>
                        <li class="menu-item-has-children has-mega-menu"><a class="nav-link" href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="header-inner__right">
                <div class="ps-header--contact">
                    <div class="ps-header__icon"><i class="icon-bubbles"></i></div>
                    <div class="ps-header__content">
                        <div class="ps-header__text">Hotline Support 24/7 </div>
                        <div class="ps-header__phone">(+1) 970 978-6290</div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="ps-header--center header--mobile">
        <div class="container">
            <div class="header-inner">
                <div class="header-inner__left"><a href="{{route('welcome')}}"><i class="icon-arrow-left back-home"></i></a></div>
                <div class="header-inner__center">
                    <p class="page-name">Blog & News</p>
                </div>
                <div class="header-inner__right">
                    <button class="button-icon icon-sm search-mobile"><i class="icon-magnifier"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-search--slidebar">
        <div class="mobile-search--content">
            <div class="mobile-search__header">
                <div class="mobile-search-box">
                    <div class="input-group">
                        <input class="form-control" placeholder="I'm shopping for..." id="inputSearchMobile">
                        <div class="input-group-append">
                            <button class="btn"> <i class="icon-magnifier"></i></button>
                        </div>
                    </div>
                    <button class="cancel-search"><i class="icon-cross"></i></button>
                </div>
            </div>
            <div class="mobile-search__trendding">
                <h5> <i class="icon-power"></i>Trending search</h5>
                <div class="trending-content">
                    <ul class="mobile-list-trending">
                        <li class="title"><a>Trending search: </a></li>
                        <li class="trending-item"><a href="#">meat</a></li>
                        <li class="trending-item"><a href="#">fruit</a></li>
                        <li class="trending-item"><a href="#">vegetables</a></li>
                        <li class="trending-item"><a href="#">salad</a></li>
                        <li class="trending-item"><a href="#">yoghurts</a></li>
                        <li class="trending-item"><a href="#">apple</a></li>
                    </ul>
                </div>
            </div>
            <div class="mobile-search__history">
                <h5> <i class="icon-history2"></i>History<a href="javascript:void(0);">Clear all</a></h5>
                <div class="history-content">
                    <ul class="history-list">
                        <li class="history-item"><a class="history-link" href="javascript:void(0);"> <span>apple</span><i class="icon-cross2"></i></a></li>
                        <li class="history-item"><a class="history-link" href="javascript:void(0);"> <span>organic fruit</span><i class="icon-cross2"></i></a></li>
                        <li class="history-item"><a class="history-link" href="javascript:void(0);"> <span>meat beef</span><i class="icon-cross2"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="mobile-search__result">
                <h5> <span class="number-result">5</span>search result</h5>
                <ul class="list-result">
                    <li class="cart-item">
                        <div class="ps-product--mini-cart"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="img/products/01-Fresh/01_18a.jpg" alt="alt" /></a>
                            <div class="ps-product__content"><a class="ps-product__name" href="{{route('product-view')}}"><u>Organic</u> Large Green Bell Pepper</a>
                                <p class="ps-product__rating">
                                    <select class="rating-stars">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3" selected="selected">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select><span>(5)</span>
                                </p>
                                <p class="ps-product__meta"> <span class="ps-product__price">$6.90</span>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="cart-item">
                        <div class="ps-product--mini-cart"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="img/products/01-Fresh/01_16a.jpg" alt="alt" /></a>
                            <div class="ps-product__content"><a class="ps-product__name" href="{{route('product-view')}}">Avocado <u>Organic</u> Hass Large</a>
                                <p class="ps-product__meta"> <span class="ps-product__price">$12.90</span>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="cart-item">
                        <div class="ps-product--mini-cart"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="img/products/01-Fresh/01_32a.jpg" alt="alt" /></a>
                            <div class="ps-product__content"><a class="ps-product__name" href="{{route('product-view')}}">Tailgater Ham <u>Organic</u> Sandwich</a>
                                <p class="ps-product__meta"> <span class="ps-product__price">$33.49</span>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="cart-item">
                        <div class="ps-product--mini-cart"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="img/products/01-Fresh/01_6a.jpg" alt="alt" /></a>
                            <div class="ps-product__content"><a class="ps-product__name" href="{{route('product-view')}}">Extreme <u>Organic</u> Light Can</a>
                                <p class="ps-product__rating">
                                    <select class="rating-stars">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4" selected="selected">4</option>
                                        <option value="5">5</option>
                                    </select><span>(16)</span>
                                </p>
                                <p class="ps-product__meta"> <span class="ps-product__price-sale">$4.99</span><span class="ps-product__is-sale">$8.99</span>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="cart-item">
                        <div class="ps-product--mini-cart"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="img/products/01-Fresh/01_22a.jpg" alt="alt" /></a>
                            <div class="ps-product__content"><a class="ps-product__name" href="{{route('product-view')}}">Extreme <u>Organic</u> Light Can</a>
                                <p class="ps-product__meta"> <span class="ps-product__price">$12.99</span>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
