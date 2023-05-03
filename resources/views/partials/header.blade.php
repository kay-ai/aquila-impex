<header class="header">
    <div class="ps-top-bar">
        <div class="container">
            <div class="top-bar">
                <div class="top-bar__left">
                    <ul class="nav-top">
                        <li class="nav-top-item"><a class="nav-top-link" href="#">Sell on AquilaImpex.</a></li>
                        <li class="nav-top-item"><a class="nav-top-link text-success" href="#">Register Now</a></li>
                    </ul>
                </div>
                <div class="top-bar__right">
                    <ul class="nav-top">
                        <li class="nav-top-item contact"><a class="nav-top-link" href="tel:970978-6290"> <i class="icon-telephone"></i><span>Hotline:</span><span class="text-success font-bold">+234 814-632-4110</span></a></li>
                        {{-- <li class="nav-top-item"><a class="nav-top-link" href="order-tracking.html">Order Tracking</a></li> --}}
                        <li class="nav-top-item languages"><a class="nav-top-link" href="javascript:void(0);"> <span class="current-languages">English</span><i class="icon-chevron-down"></i></a>
                            <div class="select--dropdown">
                                <ul class="select-languages">
                                    <li class="active language-item" data-value="English"><a href="javascript:void(0);">English</a></li>
                                    <li class="language-item" data-value="Brunei"><a href="javascript:void(0);">Brunei</a></li>
                                    <li class="language-item" data-value="Armenia"><a href="javascript:void(0);">Armenia</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-top-item currency"><a class="nav-top-link" href="javascript:void(0);"> <span class="current-currency">USD</span><i class="icon-chevron-down"></i></a>
                            <div class="select--dropdown">
                                <ul class="select-currency">
                                    <li class="active currency-item" data-value="USD"><a href="javascript:void(0);">NGN</a></li>
                                    <li class="currency-item" data-value="VND"><a href="javascript:void(0);">USD</a></li>
                                    <li class="currency-item" data-value="EUR"><a href="javascript:void(0);">EUR</a></li>
                                </ul>
                            </div>
                        </li>
                        @auth
                        <li class="nav-top-item account"><a class="nav-top-link" href="javascript:void(0);"> <i class="icon-user"></i>Hi! <span class="font-bold">Jonhnathan</span></a>
                            <div class="account--dropdown">
                                <div class="account-anchor">
                                    <div class="triangle"></div>
                                </div>
                                <div class="account__content">
                                    <ul class="account-list">
                                        <li class="title-item"><a href="javascript:void(0);">My Account</a></li>
                                        <li><a href="#">Dasdboard</a></li>
                                        <li><a href="#">Account Setting</a></li>
                                        <li><a href="{{route('shop-cart')}}">Orders</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="#">Shipping Address</a></li>
                                    </ul>
                                    <hr>
                                    <ul class="account-list">
                                        <li class="title-item"><a href="javascript:void(0);">Vendor Settings</a></li>
                                        <li><a href="#">Dasdboard</a></li>
                                        <li><a href="#">Products</a></li>
                                        <li><a href="{{route('shop-cart')}}">Orders</a></li>
                                        <li><a href="#">Settings</a></li>
                                        <li><a href="vendor-store.html">View Store</a></li>
                                    </ul>
                                    <hr><a class="account-logout" href="#"><i class="icon-exit-left"></i>Log out</a>
                                </div>
                            </div>
                        </li>
                        @endauth
                        @guest
                        <li class="nav-top-item account"><a class="nav-top-link" href="{{route('login')}}">Login</a></li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-header--center header--mobile">
        <div class="container">
            <div class="header-inner">
                <div class="header-inner__left">
                    <button class="navbar-toggler"><i class="icon-menu"></i></button>
                </div>
                <div class="header-inner__center"><a class="logo open" href="{{route('welcome')}}">Aquila<span class="text-black">Impex.</span></a></div>
                <div class="header-inner__right">
                    <button class="button-icon icon-sm search-mobile"><i class="icon-magnifier"></i></button>
                </div>
            </div>
        </div>
    </div>
    <section class="ps-header--center header-desktop">
        <div class="container">
            <div class="header-inner">
                <div class="header-inner__left"><a class="logo" href="{{route('welcome')}}">Aquila<span class="text-color-2">Impex.</span></a>
                    <ul class="menu">
                        <li class="menu-item-has-children has-mega-menu">
                            <button class="category-toggler"><i class="icon-menu"></i></button>
                            <div class="mega-menu mega-menu-category">
                                <ul class="menu--mobile menu--horizontal">
                                    <li class="daily-deals category-item"><a href="flash-sale.html">Daily Deals</a></li>
                                    <li class="category-item"><a href="{{route('shop-categories')}}">Top Promotions</a></li>
                                    <li class="category-item"><a class="active" href="{{route('shop-categories')}}">New Arrivals</a></li>
                                    <li class="has-mega-menu category-item"><a href="javascript:void(0);">Fresh</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                                        <div class="mega-menu">
                                            <div class="mega-anchor"></div>
                                            <div class="mega-menu__column">
                                                <h4>Fruit<span class="sub-toggle"></span></h4>
                                                <ul class="sub-menu--mega">
                                                    <li><a href="{{route('shop')}}">Apples</a></li>
                                                    <li><a href="{{route('shop')}}">Bananas</a></li>
                                                    <li><a href="{{route('shop')}}">Berries</a></li>
                                                    <li><a href="{{route('shop')}}">Oranges & Easy Peelers</a></li>
                                                    <li><a href="{{route('shop')}}">Grapes</a></li>
                                                    <li><a href="{{route('shop')}}">Lemons & Limes</a></li>
                                                    <li><a href="{{route('shop')}}">Peaches & Nectarines</a></li>
                                                    <li><a href="{{route('shop')}}">Pears</a></li>
                                                    <li><a href="{{route('shop')}}">Melon</a></li>
                                                    <li><a href="{{route('shop')}}">Avocados</a></li>
                                                    <li><a href="{{route('shop')}}">Plums & Apricots</a></li>
                                                    <li class="see-all"><a href="{{route('shop')}}">See all products <i class='icon-chevron-right'></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="mega-menu__column">
                                                <h4>Vegetables<span class="sub-toggle"></span></h4>
                                                <ul class="sub-menu--mega">
                                                    <li><a href="{{route('shop')}}">Potatoes</a></li>
                                                    <li><a href="{{route('shop')}}">Carrots & Root Vegetables</a></li>
                                                    <li><a href="{{route('shop')}}">Broccoli & Cauliflower</a></li>
                                                    <li><a href="{{route('shop')}}">Cabbage, Spinach & Greens</a></li>
                                                    <li><a href="{{route('shop')}}">Onions, Leeks & Garlic</a></li>
                                                    <li><a href="{{route('shop')}}">Mushrooms</a></li>
                                                    <li><a href="{{route('shop')}}">Tomatoes</a></li>
                                                    <li><a href="{{route('shop')}}">Beans, Peas & Sweetcom</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="has-mega-menu category-item"><a href="javascript:void(0);">Food Cupboard</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                                        <div class="mega-menu">
                                            <div class="mega-anchor"></div>
                                            <div class="mega-menu__column">
                                                <h4>Crisps, Snacks &amp; Nuts<span class="sub-toggle"></span></h4>
                                                <ul class="sub-menu--mega">
                                                    <li><a href="{{route('shop')}}">Crisps & Popcorn</a></li>
                                                    <li><a href="{{route('shop')}}">Nuts & Seeds</a></li>
                                                    <li><a href="{{route('shop')}}">Lighter Options</a></li>
                                                    <li><a href="{{route('shop')}}">Cereal Bars</a></li>
                                                    <li><a href="{{route('shop')}}">Breadsticks & Pretzels</a></li>
                                                    <li><a href="{{route('shop')}}">Fruit Snacking</a></li>
                                                    <li><a href="{{route('shop')}}">Rice & Corn Cakes</a></li>
                                                    <li><a href="{{route('shop')}}">Protein & Energy Snacks</a></li>
                                                    <li><a href="{{route('shop')}}">Toddler Snacks</a></li>
                                                    <li><a href="{{route('shop')}}">Meat Snacks</a></li>
                                                    <li><a href="{{route('shop')}}">Beans</a></li>
                                                    <li><a href="{{route('shop')}}">Lentils</a></li>
                                                    <li><a href="{{route('shop')}}">Chickpeas</a></li>
                                                    <li class="see-all"><a href="{{route('shop')}}">See all products <i class='icon-chevron-right'></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="mega-menu__column">
                                                <h4>Tins &amp; Cans<span class="sub-toggle"></span></h4>
                                                <ul class="sub-menu--mega">
                                                    <li><a href="{{route('shop')}}">Tomatoes</a></li>
                                                    <li><a href="{{route('shop')}}">Baked Beans, Spaghetti</a></li>
                                                    <li><a href="{{route('shop')}}">Fish</a></li>
                                                    <li><a href="{{route('shop')}}">Beans & Pulses</a></li>
                                                    <li><a href="{{route('shop')}}">Fruit</a></li>
                                                    <li><a href="{{route('shop')}}">Caconut Milk & Cream</a></li>
                                                    <li><a href="{{route('shop')}}">Lighter Options</a></li>
                                                    <li><a href="{{route('shop')}}">Olives</a></li>
                                                    <li><a href="{{route('shop')}}">Sweetcorn</a></li>
                                                    <li><a href="{{route('shop')}}">Carrots</a></li>
                                                    <li><a href="{{route('shop')}}">Peas</a></li>
                                                    <li><a href="{{route('shop')}}">Mixed Vegetables</a></li>
                                                </ul>
                                            </div>
                                            <div class="mega-menu__column"><a class="mega-menu__thumbnail" href="flash-sale.html"><img src="/assets/img/promotion/mega_food.jpg" alt="alt" /></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="category-item"><a href="{{route('shop-categories')}}">Bakery</a></li>
                                    <li class="category-item"><a href="{{route('shop-categories')}}">Frozen Foods</a></li>
                                    <li class="has-mega-menu category-item"><a href="javascript:void(0);">Ready Meals</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                                        <div class="mega-menu">
                                            <div class="mega-anchor"></div>
                                            <div class="mega-menu__column">
                                                <h4>Ready Meals<span class="sub-toggle"></span></h4>
                                                <ul class="sub-menu--mega">
                                                    <li><a href="#">Meals for 1</a></li>
                                                    <li><a href="#">Meals for 2</a></li>
                                                    <li><a href="#">Indian</a></li>
                                                    <li><a href="#">Italian</a></li>
                                                    <li><a href="#">Chinese</a></li>
                                                    <li><a href="#">Traditional British</a></li>
                                                    <li><a href="#">Thai & Oriental</a></li>
                                                    <li><a href="#">Mediterrancan & Moroccan</a></li>
                                                    <li><a href="#">Mexican & Caribbean</a></li>
                                                    <li><a href="#">Lighter Meals</a></li>
                                                    <li><a href="#">Lunch & Veg Pots</a></li>
                                                    <li class="see-all"><a href="#">See all products <i class='icon-chevron-right'></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="mega-menu__column">
                                                <h4>Salad &amp; Herbs<span class="sub-toggle"></span></h4>
                                                <ul class="sub-menu--mega">
                                                    <li><a href="#">Salad Bags</a></li>
                                                    <li><a href="#">Cucumber</a></li>
                                                    <li><a href="#">Tomatoes</a></li>
                                                    <li><a href="#">Lettuce</a></li>
                                                    <li><a href="#">Lunch Salad Bowls</a></li>
                                                    <li><a href="#">Fresh Herbs</a></li>
                                                    <li><a href="#">Avccados</a></li>
                                                    <li><a href="#">Peppers</a></li>
                                                    <li><a href="#">Coleslaw & Potato Salad</a></li>
                                                    <li><a href="#">Spring Onions</a></li>
                                                    <li><a href="#">Chili, Ginger & Ganic</a></li>
                                                </ul>
                                            </div>
                                            <div class="mega-menu__column"><a class="mega-menu__thumbnail" href="flash-sale.html"><img src="/assets/img/promotion/mega_ready.jpg" alt="alt" /></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="category-item"><a href="{{route('shop-categories')}}">Drinks, Tea & Coffee</a></li>
                                    <li class="category-item"><a href="{{route('shop-categories')}}">Beer, Wine & Spirits</a></li>
                                    <li class="category-item"><a href="{{route('shop-categories')}}">Baby & Child</a></li>
                                    <li class="category-item"><a href="{{route('shop-categories')}}">Kitchen & Dining</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="header-inner__center">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="header-search-select"><span class="current">All<i class="icon-chevron-down"></i></span>
                                <ul class="list">
                                    <li class="category-option active" data-value="option"><a href="javascript:void(0);">All</a></li>
                                    <li class="category-option"><a>Fresh</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                                        <ul>
                                            <li><a href="#">Meat & Poultry</a></li>
                                            <li><a href="#">Fruit</a></li>
                                            <li><a href="#">Vegetables</a></li>
                                            <li><a href="#">Milks, Butter & Eggs</a></li>
                                            <li><a href="#">Fish</a></li>
                                            <li><a href="#">Frozen</a></li>
                                            <li><a href="#">Cheese</a></li>
                                            <li><a href="#">Pasta & Sauce</a></li>
                                        </ul>
                                    </li>
                                    <li class="category-option"><a>Food Cupboard</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                                        <ul>
                                            <li><a href="#">Crisps, Snacks & Nuts</a></li>
                                            <li><a href="#">Breakfast Cereals</a></li>
                                            <li><a href="#">Tins & Cans</a></li>
                                            <li><a href="#">Chocolate & Sweets</a></li>
                                        </ul>
                                    </li>
                                    <li class="category-option" data-value="Bakery"><a href="javascript:void(0);">Bakery</a></li>
                                    <li class="category-option" data-value="Drinks, Tea &amp; Coffee"><a href="javascript:void(0);">Drinks, Tea &amp; Coffee</a></li>
                                    <li class="category-option" data-value="Frozen Foods"><a href="javascript:void(0);">Frozen Foods</a></li>
                                    <li class="category-option"><a>Ready Meals</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                                        <ul>
                                            <li><a href="#">Traditional British</a></li>
                                            <li><a href="#">Indian</a></li>
                                            <li><a href="#">Italian</a></li>
                                            <li><a href="#">Chinese</a></li>
                                        </ul>
                                    </li>
                                    <li class="category-option" data-value="Beer, Wine &amp; Spirits"><a href="javascript:void(0);">Beer, Wine &amp; Spirits</a></li>
                                    <li class="category-option" data-value="Baby &amp; Child"><a href="javascript:void(0);">Baby &amp; Child</a></li>
                                    <li class="category-option" data-value="Kitchen &amp; Dining"><a href="javascript:void(0);">Kitchen &amp; Dining</a></li>
                                </ul>
                            </div><i class="icon-magnifier search"></i>
                        </div>
                        <input class="form-control input-search" placeholder="I'm searchching for...">
                        <div class="input-group-append">
                            <button class="btn">Search</button>
                        </div>
                    </div>
                    <div class="trending-search">
                        <ul class="list-trending">
                            <li class="title"><a>Trending search: </a></li>
                            <li class="trending-item"><a href="#">meat</a></li>
                            <li class="trending-item"><a href="#">fruit</a></li>
                            <li class="trending-item"><a href="#">vegetables</a></li>
                            <li class="trending-item"><a href="#">salad</a></li>
                            <li class="trending-item"><a href="#">yoghurts</a></li>
                            <li class="trending-item"><a href="#">apple</a></li>
                        </ul>
                    </div>
                    <div class="result-search">
                        <ul class="list-result">
                            <li class="cart-item">
                                <div class="ps-product--mini-cart"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_18a.jpg" alt="alt" /></a>
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
                                <div class="ps-product--mini-cart"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_16a.jpg" alt="alt" /></a>
                                    <div class="ps-product__content"><a class="ps-product__name" href="{{route('product-view')}}">Avocado <u>Organic</u> Hass Large</a>
                                        <p class="ps-product__meta"> <span class="ps-product__price">$12.90</span>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-item">
                                <div class="ps-product--mini-cart"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_32a.jpg" alt="alt" /></a>
                                    <div class="ps-product__content"><a class="ps-product__name" href="{{route('product-view')}}">Tailgater Ham <u>Organic</u> Sandwich</a>
                                        <p class="ps-product__meta"> <span class="ps-product__price">$33.49</span>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-item">
                                <div class="ps-product--mini-cart"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_6a.jpg" alt="alt" /></a>
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
                                <div class="ps-product--mini-cart"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_22a.jpg" alt="alt" /></a>
                                    <div class="ps-product__content"><a class="ps-product__name" href="{{route('product-view')}}">Extreme <u>Organic</u> Light Can</a>
                                        <p class="ps-product__meta"> <span class="ps-product__price">$12.99</span>
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header-inner__right">
                    <button class="button-icon icon-md"><i class="icon-repeat"></i></button><a class="button-icon icon-md" href="wishlist.html"><i class="icon-heart"></i><span class="badge bg-warning">2</span></a>
                    <div class="button-icon btn-cart-header"><i class="icon-cart icon-shop5"></i><span class="badge bg-warning">3</span>
                        <div class="mini-cart">
                            <div class="mini-cart--content">
                                <div class="mini-cart--overlay"></div>
                                <div class="mini-cart--slidebar cart--box">
                                    <div class="mini-cart__header">
                                        <div class="cart-header-title">
                                            <h5>Shopping Cart(3)</h5><a class="close-cart" href="javascript:void(0);"><i class="icon-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="mini-cart__products">
                                        <div class="out-box-cart">
                                            <div class="triangle-box">
                                                <div class="triangle"></div>
                                            </div>
                                        </div>
                                        <ul class="list-cart">
                                            <li class="cart-item">
                                                <div class="ps-product--mini-cart"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_18a.jpg" alt="alt" /></a>
                                                    <div class="ps-product__content"><a class="ps-product__name" href="{{route('product-view')}}">Extreme Budweiser Light Can</a>
                                                        <p class="ps-product__unit">500g</p>
                                                        <p class="ps-product__meta"> <span class="ps-product__price">$3.90</span><span class="ps-product__quantity">(x1)</span>
                                                        </p>
                                                    </div>
                                                    <div class="ps-product__remove"><i class="icon-trash2"></i></div>
                                                </div>
                                            </li>
                                            <li class="cart-item">
                                                <div class="ps-product--mini-cart"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_31a.jpg" alt="alt" /></a>
                                                    <div class="ps-product__content"><a class="ps-product__name" href="{{route('product-view')}}">Honest Organic Still Lemonade</a>
                                                        <p class="ps-product__unit">100g</p>
                                                        <p class="ps-product__meta"> <span class="ps-product__price-sale">$5.99</span><span class="ps-product__is-sale">$8.99</span><span class="quantity">(x1)</span>
                                                        </p>
                                                    </div>
                                                    <div class="ps-product__remove"><i class="icon-trash2"></i></div>
                                                </div>
                                            </li>
                                            <li class="cart-item">
                                                <div class="ps-product--mini-cart"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_16a.jpg" alt="alt" /></a>
                                                    <div class="ps-product__content"><a class="ps-product__name" href="{{route('product-view')}}">Matures Own 100% Wheat</a>
                                                        <p class="ps-product__unit">1.5L</p>
                                                        <p class="ps-product__meta"> <span class="ps-product__price">$12.90</span><span class="ps-product__quantity">(x1)</span>
                                                        </p>
                                                    </div>
                                                    <div class="ps-product__remove"><i class="icon-trash2"></i></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mini-cart__footer row">
                                        <div class="col-6 title">TOTAL</div>
                                        <div class="col-6 text-right total">$29.98</div>
                                        <div class="col-12 d-flex"><a class="view-cart" href="{{route('shop-cart')}}">View cart</a><a class="checkout" href="{{route('checkout')}}">Checkout</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.main-nav')
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
                        <div class="ps-product--mini-cart"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_18a.jpg" alt="alt" /></a>
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
                        <div class="ps-product--mini-cart"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_16a.jpg" alt="alt" /></a>
                            <div class="ps-product__content"><a class="ps-product__name" href="{{route('product-view')}}">Avocado <u>Organic</u> Hass Large</a>
                                <p class="ps-product__meta"> <span class="ps-product__price">$12.90</span>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="cart-item">
                        <div class="ps-product--mini-cart"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_32a.jpg" alt="alt" /></a>
                            <div class="ps-product__content"><a class="ps-product__name" href="{{route('product-view')}}">Tailgater Ham <u>Organic</u> Sandwich</a>
                                <p class="ps-product__meta"> <span class="ps-product__price">$33.49</span>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="cart-item">
                        <div class="ps-product--mini-cart"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_6a.jpg" alt="alt" /></a>
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
                        <div class="ps-product--mini-cart"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_22a.jpg" alt="alt" /></a>
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
