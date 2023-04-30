@extends('layouts.app', [$activePage = 'Shop View'])

@section('main')
    <main class="no-main">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="ps-breadcrumb__list">
                    <li class="active"><a href="{{route('welcome')}}">Home</a></li>
                    <li><a href="javascript:void(0);">Shop</a></li>
                </ul>
            </div>
        </div>
        <section class="section-shop">
            <div class="shop__header">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <div class="owl-carousel shop__header--carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-item-xl="1" data-owl-duration="1000" data-owl-mousedrag="on"><a href="{{route('shop-categories')}}"><img src="/assets/img/shop/shop-grid-side-01.jpg" alt></a><a href="{{route('shop-categories')}}"><img src="/assets/img/shop/shop-grid-side-02.jpg" alt></a><a href="{{route('shop-categories')}}"><img src="/assets/img/shop/shop-grid-side-03.jpg" alt></a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="shop__header__promo">
                                <div class="promo-item mb-2"><a href="shop-with-banner.html"><img src="/assets/img/shop/shop-grid-promo-01.jpg" alt></a></div>
                                <div class="promo-item"><a href="shop-all-brands.html"><img src="/assets/img/shop/shop-grid-promo-02.jpg" alt></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shop__header mobile">
                <div class="owl-carousel shop__header--carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-item-xl="1" data-owl-duration="1000" data-owl-mousedrag="on"><a href="{{route('shop-categories')}}"><img src="/assets/img/shop/shop-grid-mobile-side-1.jpg" alt></a><a href="{{route('shop-categories')}}"><img src="/assets/img/shop/shop-grid-mobile-side-2.jpg" alt></a><a href="{{route('shop-categories')}}"><img src="/assets/img/shop/shop-grid-mobile-side-3.jpg" alt></a>
                </div>
                <div class="container">
                    <div class="shop__header__promo">
                        <div class="promo-item"><a href="shop-with-banner.html"><img src="/assets/img/shop/shop-grid-mobile-promo-1.jpg" alt></a></div>
                        <div class="promo-item"><a href="shop-all-brands.html"><img src="/assets/img/shop/shop-grid-mobile-promo-2.jpg" alt></a></div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="shop__content">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <div class="ps-shop--sidebar">
                                <div class="sidebar__category">
                                    <div class="sidebar__title">ALL CATEGORIES</div>
                                    <ul class="menu--mobile">
                                        <li class="daily-deals category-item"><a href="flash-sale.html">Daily Deals</a></li>
                                        <li class="category-item"><a href="{{route('shop-categories')}}">Top Promotions</a></li>
                                        <li class="category-item"><a href="{{route('shop-categories')}}">New Arrivals</a></li>
                                        <li class="menu-item-has-children category-item"><a href="{{route('shop-categories')}}">Fresh</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('shop')}}">Meat & Poultry</a></li>
                                                <li><a href="{{route('shop')}}">Fruit</a></li>
                                                <li><a href="{{route('shop')}}">Vegetables</a></li>
                                                <li><a href="{{route('shop')}}">Milks, Butter & Eggs</a></li>
                                                <li><a href="{{route('shop')}}">Fish</a></li>
                                                <li><a href="{{route('shop')}}">Frozen</a></li>
                                                <li><a href="{{route('shop')}}">Cheese</a></li>
                                                <li><a href="{{route('shop')}}">Pasta & Sauce</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children category-item"><a href="{{route('shop-categories')}}">Food Cupboard</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('shop')}}">Crisps, Snacks & Nuts</a></li>
                                                <li><a href="{{route('shop')}}">Breakfast Cereals</a></li>
                                                <li><a href="{{route('shop')}}">Tins & Cans</a></li>
                                                <li><a href="{{route('shop')}}">Chocolate & Sweets</a></li>
                                            </ul>
                                        </li>
                                        <li class="category-item"><a href="{{route('shop-categories')}}">Bakery</a></li>
                                        <li class="category-item"><a href="{{route('shop-categories')}}">Frozen Foods</a></li>
                                        <li class="menu-item-has-children category-item"><a href="{{route('shop-categories')}}">Ready Meals</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('shop')}}">Traditional British</a></li>
                                                <li><a href="{{route('shop')}}">Indian</a></li>
                                                <li><a href="{{route('shop')}}">Italian</a></li>
                                                <li><a href="{{route('shop')}}">Chinese</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children category-item"><a href="{{route('shop-categories')}}">Drinks, Tea &amp; Coffee</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('shop')}}">Tea & Coffee</a></li>
                                                <li><a href="{{route('shop')}}">Hot Drinks</a></li>
                                                <li><a href="{{route('shop')}}">Fizzy Drinks</a></li>
                                                <li><a href="{{route('shop')}}">Water</a></li>
                                            </ul>
                                        </li>
                                        <li class="category-item"><a href="{{route('shop-categories')}}">Beer, Wine & Spirits</a></li>
                                        <li class="category-item"><a href="{{route('shop-categories')}}">Baby & Child</a></li>
                                        <li class="category-item"><a href="{{route('shop-categories')}}">Kitchen & Dining</a></li>
                                    </ul>
                                </div>
                                <div class="sidebar__sort">
                                    <div class="sidebar__block open">
                                        <div class="sidebar__title">BY BRANDS<span class="shop-widget-toggle"><i class="icon-minus"></i></span></div>
                                        <form action="#">
                                            <div class="input-group">
                                                <input class="form-control" type="text" placeholder="Search brand...">
                                                <div class="input-group-append"><i class="icon-magnifier"></i></div>
                                            </div>
                                        </form>
                                        <div class="brand__content">
                                            <ul>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="checkbox0" value="">
                                                        <label for="checkbox0"><img src="/assets/img/brand/brand_themeforest.jpg" alt><span>(39)</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="checkbox1" value="">
                                                        <label for="checkbox1"><img src="/assets/img/brand/brand_envato.jpg" alt><span>(146)</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="checkbox2" value="">
                                                        <label for="checkbox2"><img src="/assets/img/brand/brand_codecanyon.jpg" alt><span>(20)</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="checkbox3" value="">
                                                        <label for="checkbox3"><img src="/assets/img/brand/brand_cudicjungle.jpg" alt><span>(16)</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="checkbox4" value="">
                                                        <label for="checkbox4"><img src="/assets/img/brand/brand_videohive.jpg" alt><span>(50)</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="checkbox5" value="">
                                                        <label for="checkbox5"><img src="/assets/img/brand/brand_photodune.jpg" alt><span>(23)</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="checkbox6" value="">
                                                        <label for="checkbox6"><img src="/assets/img/brand/brand_evatotuts.jpg" alt><span>(11)</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="checkbox7" value="">
                                                        <label for="checkbox7"><img src="/assets/img/brand/brand_3docean.jpg" alt><span>(67)</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="checkbox8" value="">
                                                        <label for="checkbox8"><img src="/assets/img/brand/microlancer.jpg" alt><span>(34)</span></label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="sidebar__block open">
                                        <div class="sidebar__title">BY PRICE<span class="shop-widget-toggle"><i class="icon-minus"></i></span></div>
                                        <div class="block__content">
                                            <div class="block__price">
                                                <div id="slide-price"></div>
                                            </div>
                                            <div class="block__input">
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                                    <input class="form-control" type="text" id="input-with-keypress-0">
                                                </div>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                                    <input class="form-control" type="text" id="input-with-keypress-1">
                                                </div>
                                                <button>Go</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebar__block open">
                                        <div class="sidebar__title">AVG. REVIEW<span class="shop-widget-toggle"><i class="icon-minus"></i></span></div>
                                        <div class="block__content">
                                            <ul>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="avg5" value="">
                                                        <label for="rating5">
                                                            <select class="rating-stars" id="rating5">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5" selected="selected">5</option>
                                                            </select><span class="text-up">& Up</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="avg4" value="">
                                                        <label for="rating4">
                                                            <select class="rating-stars" id="rating4">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4" selected="selected">4</option>
                                                                <option value="5">5</option>
                                                            </select><span class="text-up">& Up</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="avg3" value="">
                                                        <label for="rating3">
                                                            <select class="rating-stars" id="rating3">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3" selected="selected">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select><span class="text-up">& Up</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="avg2" value="">
                                                        <label for="rating2">
                                                            <select class="rating-stars" id="rating2">
                                                                <option value="1">1</option>
                                                                <option value="2" selected="selected">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select><span class="text-up">& Up</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="avg1" value="">
                                                        <label for="rating1">
                                                            <select class="rating-stars" id="rating1">
                                                                <option value="1" selected="selected">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select><span class="text-up">& Up</span>
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="sidebar__block open">
                                        <div class="sidebar__title">SOLD BY<span class="shop-widget-toggle"><i class="icon-minus"></i></span></div>
                                        <div class="block__content">
                                            <ul>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="sold0" value="">
                                                        <label for="sold0">AquilaImpex<span>(55)</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="sold1" value="">
                                                        <label for="sold1">All Vendors<span>(223)</span></label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="sidebar__block open">
                                        <div class="sidebar__title">OPTIONS<span class="shop-widget-toggle"><i class="icon-minus"></i></span></div>
                                        <div class="block__content">
                                            <ul>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="option0" value="">
                                                        <label for="option0">On Sales<span>(145)</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="option1" value="">
                                                        <label for="option1">new<span>(43)</span></label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="sidebar__block open">
                                        <div class="sidebar__title">DIETARY & LIFESTYLE<span class="shop-widget-toggle"><i class="icon-minus"></i></span></div>
                                        <div class="block__content">
                                            <ul>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="life0" value="">
                                                        <label for="life0">Vegetarian<span>(23)</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="life1" value="">
                                                        <label for="life1">Vegan<span>(37)</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="life2" value="">
                                                        <label for="life2">Gluten Free<span>(114)</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="life3" value="">
                                                        <label for="life3">Milk Free<span>(50)</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="life4" value="">
                                                        <label for="life4">Fat Free<span>(24)</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="life5" value="">
                                                        <label for="life5">Organic<span>(18)</span></label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebar__product">
                                    <div class="sidebar__title">RECOMMENDATIONS</div>
                                    <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-item-xl="1" data-owl-duration="1000" data-owl-mousedrag="on">
                                        <div class="weidget-product-item">
                                            <div class="ps-product--vertical"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_18a.jpg" alt="alt" /></a>
                                                <div class="ps-product__content">
                                                    <h5><a class="ps-product__name" href="{{route('product-view')}}">Oniins, Green</a></h5>
                                                    <p class="ps-product__unit">300g</p>
                                                    <p class="ps-product-price-block"><span class="ps-product__sale">$6.90</span><span class="ps-product__price">$9.99</span><span class="ps-product__off">35% Off</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="ps-product--vertical"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_16a.jpg" alt="alt" /></a>
                                                <div class="ps-product__content">
                                                    <h5><a class="ps-product__name" href="{{route('product-view')}}">Broccoli Crowns</a></h5>
                                                    <p class="ps-product__unit">300g</p>
                                                    <p class="ps-product-price-block"><span class="ps-product__sale">$3.90</span><span class="ps-product__price">$9.99</span><span class="ps-product__off">35% Off</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="ps-product--vertical"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/02-FoodCupboard/02_11a.jpg" alt="alt" /></a>
                                                <div class="ps-product__content">
                                                    <h5><a class="ps-product__name" href="{{route('product-view')}}">Natures Own 100% Wheat</a></h5>
                                                    <p class="ps-product__unit">300g</p>
                                                    <p class="ps-product-price-block"><span class="ps-product__price-default">$12.00</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="ps-product--vertical"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_31a.jpg" alt="alt" /></a>
                                                <div class="ps-product__content">
                                                    <h5><a class="ps-product__name" href="{{route('product-view')}}">Pork Steak Jumbo Pack</a></h5>
                                                    <p class="ps-product__unit">1kg</p>
                                                    <p class="ps-product-price-block"><span class="ps-product__price-default">$6.99</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="weidget-product-item">
                                            <div class="ps-product--vertical"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_29a.jpg" alt="alt" /></a>
                                                <div class="ps-product__content">
                                                    <h5><a class="ps-product__name" href="{{route('product-view')}}">Michelob Ultra Cans</a></h5>
                                                    <p class="ps-product__unit">1.5L</p>
                                                    <p class="ps-product-price-block"><span class="ps-product__sale">$15.90</span><span class="ps-product__price">$20.00</span><span class="ps-product__off">23% Off</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="ps-product--vertical"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_12a.jpg" alt="alt" /></a>
                                                <div class="ps-product__content">
                                                    <h5><a class="ps-product__name" href="{{route('product-view')}}">Michelob Ultra Cans</a></h5>
                                                    <p class="ps-product__unit">500g</p>
                                                    <p class="ps-product-price-block"><span class="ps-product__sale">$8.90</span><span class="ps-product__price">$9.90</span><span class="ps-product__off">15% Off</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="ps-product--vertical"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_3a.jpg" alt="alt" /></a>
                                                <div class="ps-product__content">
                                                    <h5><a class="ps-product__name" href="{{route('product-view')}}">Morrisons The Best Beef</a></h5>
                                                    <p class="ps-product__unit">1.5L</p>
                                                    <p class="ps-product-price-block"><span class="ps-product__sale">$15.90</span><span class="ps-product__price">$20.00</span><span class="ps-product__off">82% Off</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="ps-product--vertical"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_15a.jpg" alt="alt" /></a>
                                                <div class="ps-product__content">
                                                    <h5><a class="ps-product__name" href="{{route('product-view')}}">Michelob Ultra Cans</a></h5>
                                                    <p class="ps-product__unit">300g</p>
                                                    <p class="ps-product-price-block"><span class="ps-product__price-default">$3.99</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9">
                            <div class="shop__block">
                                <div class="shop__block__header">
                                    <div class="block__title"> <i class="icon-chart-bars"></i>Top Featured Categories</div><a class="block__view" href="{{route('shop-categories')}}">View all<i class="icon-chevron-right"></i></a>
                                </div>
                                <div class="shop__block__content">
                                    <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="15000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="4" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="4" data-owl-duration="1000" data-owl-mousedrag="on">
                                        <div class="categogy-item"><img src="/assets/img/products/01-Fresh/01_16a.jpg" alt>
                                            <div class="categogy-name">fresh</div>
                                            <ul class="categogy-list">
                                                <li><a href="#">Meat &amp; Poultry</a></li>
                                                <li><a href="#">Fruit</a></li>
                                                <li><a href="#">Vegetables</a></li>
                                                <li><a href="#">Milks, Butter &amp; Eggs</a></li>
                                                <li><a href="#">Fish</a></li>
                                                <li><a href="#">Frozen</a></li>
                                                <li><a href="#">Cheese</a></li>
                                                <li><a href="#">Pasta &amp; Sauce</a></li>
                                            </ul><a class="block__view" href="{{route('shop-categories')}}">View all<i class="icon-chevron-right"></i></a>
                                        </div>
                                        <div class="categogy-item"><img src="/assets/img/products/02-FoodCupboard/02_19a.jpg" alt>
                                            <div class="categogy-name">Food cupboard</div>
                                            <ul class="categogy-list">
                                                <li><a href="#">Crisps, Snacks &amp; Nuts</a></li>
                                                <li><a href="#">Breakfast Cereals</a></li>
                                                <li><a href="#">Tins &amp; Cans</a></li>
                                                <li><a href="#">Chocolate &amp; Sweets</a></li>
                                            </ul><a class="block__view" href="{{route('shop-categories')}}">View all<i class="icon-chevron-right"></i></a>
                                        </div>
                                        <div class="categogy-item"><img src="/assets/img/products/06-SoftDrinks-TeaCoffee/06_9a.jpg" alt>
                                            <div class="categogy-name">drink, tea &amp; coffee</div>
                                            <ul class="categogy-list">
                                                <li><a href="#">Tea &amp; Coffee</a></li>
                                                <li><a href="#">Hot Drinks</a></li>
                                                <li><a href="#">Fizzy Drinks</a></li>
                                                <li><a href="#">Water</a></li>
                                            </ul><a class="block__view" href="{{route('shop-categories')}}">View all<i class="icon-chevron-right"></i></a>
                                        </div>
                                        <div class="categogy-item"><img src="/assets/img/products/05-ReadyMeals/05_2a.jpg" alt>
                                            <div class="categogy-name">ready meals</div>
                                            <ul class="categogy-list">
                                                <li><a href="#">Traditional British</a></li>
                                                <li><a href="#">Indian</a></li>
                                                <li><a href="#">Italian</a></li>
                                                <li><a href="#">Chinese</a></li>
                                            </ul><a class="block__view" href="{{route('shop-categories')}}">View all<i class="icon-chevron-right"></i></a>
                                        </div>
                                        <div class="categogy-item"><img src="/assets/img/products/03-Bakery/03_1a.jpg" alt>
                                            <div class="categogy-name">bakery</div>
                                            <ul class="categogy-list">
                                                <li><a href="#">Vanilla</a></li>
                                                <li><a href="#">Recipe</a></li>
                                                <li><a href="#">Chocochip</a></li>
                                                <li><a href="#">Desserts</a></li>
                                            </ul><a class="block__view" href="{{route('shop-categories')}}">View all<i class="icon-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop__block">
                                <div class="shop__block__header">
                                    <div class="block__title"> <i class="icon-tags"></i>AquilaImpex Daily Offers</div><a class="block__view" href="flash-sale.html">View all<i class="icon-chevron-right"></i></a>
                                </div>
                                <div class="shop__block__content ps-carousel__products">
                                    <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="4" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="4" data-owl-duration="1000" data-owl-mousedrag="on">
                                        <div class="ps-product--standard"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_1a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>AquilaImpex</p>
                                                <h5><a class="ps-product__name" href="{{route('product-view')}}">Corn, Yellow Sweet</a></h5>
                                                <p class="ps-product__unit">4 per pack</p>
                                                <div class="ps-product__rating">
                                                    <select class="rating-stars">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select><span>(0)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__price-default">$4.49</span>
                                                </p>
                                            </div>
                                            <div class="ps-product__footer">
                                                <div class="def-number-input number-input safari_only">
                                                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                    <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                </div>
                                                <div class="ps-product__total">Total: <span>$4.49</span>
                                                </div>
                                                <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                                <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                            </div>
                                        </div>
                                        <div class="ps-product--standard"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_18a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__new">New </span>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p>
                                                <h5><a class="ps-product__name" href="{{route('product-view')}}">Oniins, Green</a></h5>
                                                <p class="ps-product__unit">300g</p>
                                                <div class="ps-product__rating">
                                                    <select class="rating-stars">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4" selected="selected">4</option>
                                                        <option value="5">5</option>
                                                    </select><span>(2)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__sale">$6.90</span><span class="ps-product__price">$9.99</span><span class="ps-product__off">35% Off</span>
                                                </p>
                                            </div>
                                            <div class="ps-product__footer">
                                                <div class="def-number-input number-input safari_only">
                                                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                    <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                </div>
                                                <div class="ps-product__total">Total: <span>$6.90</span>
                                                </div>
                                                <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                                <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                            </div>
                                        </div>
                                        <div class="ps-product--standard"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_20a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__offbadge">45% Off </span>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>Aliso Farm</p>
                                                <h5><a class="ps-product__name" href="{{route('product-view')}}">Oranges, Valencia</a></h5>
                                                <p class="ps-product__unit">600ml</p>
                                                <div class="ps-product__rating">
                                                    <select class="rating-stars">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5" selected="selected">5</option>
                                                    </select><span>(5)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__sale">$4.99</span><span class="ps-product__price">$6.99</span>
                                                </p>
                                            </div>
                                            <div class="ps-product__footer">
                                                <div class="def-number-input number-input safari_only">
                                                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                    <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                </div>
                                                <div class="ps-product__total">Total: <span>$4.99</span>
                                                </div>
                                                <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                                <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                            </div>
                                        </div>
                                        <div class="ps-product--standard"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_37a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__offbadge">15% Off </span>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>Logiston</p>
                                                <h5><a class="ps-product__name" href="{{route('product-view')}}">Extreme Budweiser Light Can</a></h5>
                                                <p class="ps-product__unit">500g</p>
                                                <div class="ps-product__rating">
                                                    <select class="rating-stars">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select><span>(0)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__sale">$52.90</span><span class="ps-product__price">$68.99</span>
                                                </p>
                                            </div>
                                            <div class="ps-product__footer">
                                                <div class="def-number-input number-input safari_only">
                                                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                    <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                </div>
                                                <div class="ps-product__total">Total: <span>$52.90</span>
                                                </div>
                                                <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                                <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                            </div>
                                        </div>
                                        <div class="ps-product--standard"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_13a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>AquilaImpex</p>
                                                <h5><a class="ps-product__name" href="{{route('product-view')}}">Extreme Budweiser Light Can</a></h5>
                                                <p class="ps-product__unit">250g</p>
                                                <div class="ps-product__rating">
                                                    <select class="rating-stars">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5" selected="selected">5</option>
                                                    </select><span>(14)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__sale">$6.99</span><span class="ps-product__price">$12.00</span><span class="ps-product__off">45% Off</span>
                                                </p>
                                            </div>
                                            <div class="ps-product__footer">
                                                <div class="def-number-input number-input safari_only">
                                                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                    <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                </div>
                                                <div class="ps-product__total">Total: <span>$6.99</span>
                                                </div>
                                                <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                                <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop__block">
                                <div class="shop__block__header">
                                    <div class="block__title"> <i class="icon-star-half"></i>Monthly Best Sellers</div><a class="block__view" href="flash-sale.html">View all<i class="icon-chevron-right"></i></a>
                                </div>
                                <div class="shop__block__content ps-carousel__products">
                                    <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="13000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="4" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="4" data-owl-duration="1000" data-owl-mousedrag="on">
                                        <div class="ps-product--standard"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/02-FoodCupboard/02_1a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__offbadge">30% Off </span>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>AquilaImpex</p>
                                                <h5><a class="ps-product__name" href="{{route('product-view')}}">Natures Own 100% Wheat</a></h5>
                                                <p class="ps-product__unit">454g</p>
                                                <div class="ps-product__rating">
                                                    <select class="rating-stars">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select><span>(0)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__sale">$1.99</span><span class="ps-product__price">$2.99</span>
                                                </p>
                                            </div>
                                            <div class="ps-product__footer">
                                                <div class="def-number-input number-input safari_only">
                                                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                    <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                </div>
                                                <div class="ps-product__total">Total: <span>$1.99</span>
                                                </div>
                                                <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                                <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                            </div>
                                        </div>
                                        <div class="ps-product--standard"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/02-FoodCupboard/02_11a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>AquilaImpex</p>
                                                <h5><a class="ps-product__name" href="{{route('product-view')}}">Natures Own 100% Wheat</a></h5>
                                                <p class="ps-product__unit">300g</p>
                                                <div class="ps-product__rating">
                                                    <select class="rating-stars">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select><span>(0)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__price-default">$12.00</span>
                                                </p>
                                            </div>
                                            <div class="ps-product__footer">
                                                <div class="def-number-input number-input safari_only">
                                                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                    <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                </div>
                                                <div class="ps-product__total">Total: <span>$12.00</span>
                                                </div>
                                                <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                                <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                            </div>
                                        </div>
                                        <div class="ps-product--standard"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_29a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__offbadge">23% Off </span>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>AquilaImpex</p>
                                                <h5><a class="ps-product__name" href="{{route('product-view')}}">Michelob Ultra Cans</a></h5>
                                                <p class="ps-product__unit">1.5L</p>
                                                <div class="ps-product__rating">
                                                    <select class="rating-stars">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4" selected="selected">4</option>
                                                        <option value="5">5</option>
                                                    </select><span>(2)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__sale">$15.90</span><span class="ps-product__price">$20.00</span>
                                                </p>
                                            </div>
                                            <div class="ps-product__footer">
                                                <div class="def-number-input number-input safari_only">
                                                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                    <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                </div>
                                                <div class="ps-product__total">Total: <span>$15.90</span>
                                                </div>
                                                <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                                <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                            </div>
                                        </div>
                                        <div class="ps-product--standard"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_25a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__offbadge">55% Off </span>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>Karery</p>
                                                <h5><a class="ps-product__name" href="{{route('product-view')}}">Emoticon Cookie</a></h5>
                                                <p class="ps-product__unit">330ml</p>
                                                <div class="ps-product__rating">
                                                    <select class="rating-stars">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5" selected="selected">5</option>
                                                    </select><span>(13)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__sale">$5.99</span><span class="ps-product__price">$6.90</span>
                                                </p>
                                            </div>
                                            <div class="ps-product__footer">
                                                <div class="def-number-input number-input safari_only">
                                                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                    <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                </div>
                                                <div class="ps-product__total">Total: <span>$5.99</span>
                                                </div>
                                                <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                                <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                            </div>
                                        </div>
                                        <div class="ps-product--standard"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_31a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>AquilaImpex</p>
                                                <h5><a class="ps-product__name" href="{{route('product-view')}}">Pork Steak Jumbo Pack</a></h5>
                                                <p class="ps-product__unit">1kg</p>
                                                <div class="ps-product__rating">
                                                    <select class="rating-stars">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select><span>(0)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__price-default">$6.99</span>
                                                </p>
                                            </div>
                                            <div class="ps-product__footer">
                                                <div class="def-number-input number-input safari_only">
                                                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                    <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                </div>
                                                <div class="ps-product__total">Total: <span>$6.99</span>
                                                </div>
                                                <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                                <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><a class="ps-button shop__link" href="shop-view-listing.html">Shop all product<i class="icon-chevron-right"></i></a>
                            <div class="result__header">
                                <h4 class="title">29<span>Product Found</span></h4>
                                <div class="page">page
                                    <input type="text" value="1" disabled>of 3
                                </div>
                            </div>
                            <div class="filter__mobile">
                                <div class="viewtype--block">
                                    <div class="viewtype__sortby">
                                        <div class="select">
                                            <select class="single-select2-no-search" name="state">
                                                <option value="popularity" selected="selected">Sort by popularity</option>
                                                <option value="price">Sort by price</option>
                                                <option value="sale">Sort by sale of</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="viewtype__select"> <span class="text ps-mobile-filter"><i class="icon-equalizer"></i>Filter</span>
                                        <div class="type"><a href="{{route('shop')}}"><span class="active"><i class="icon-icons"></i></span></a><a href="shop-view-listing.html"><span><i class="icon-list4"></i></span></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="result__filter ps-mobile-result">
                                <h5>Your filters:</h5>
                                <ul>
                                    <li>Min: $15.00<i class="icon-cross"></i></li>
                                    <li>Max: $132.00<i class="icon-cross"></i></li>
                                    <li>FreshMarket<i class="icon-cross"></i></li>
                                    <li>Gluten Free<i class="icon-cross"></i></li>
                                    <li class="filter-clear">Clear all</li>
                                </ul>
                            </div>
                            <div class="result__sort">
                                <div class="viewtype--block">
                                    <div class="viewtype__sortby">
                                        <div class="select">
                                            <select class="single-select2-no-search" name="state">
                                                <option value="popularity" selected="selected">Sort by popularity</option>
                                                <option value="price">Sort by price</option>
                                                <option value="sale">Sort by sale of</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="viewtype__select"> <span class="text">View: </span>
                                        <div class="select">
                                            <select class="single-select2-no-search" name="state">
                                                <option value="25" selected="selected">25 per page</option>
                                                <option value="12">12 per page</option>
                                                <option value="5">5 per page</option>
                                            </select>
                                        </div>
                                        <div class="type"><a href="{{route('shop')}}"><span class="active"><i class="icon-icons"></i></span></a><a href="shop-view-extended.html"><span><i class="icon-grid3"></i></span></a><a href="shop-view-listing.html"><span><i class="icon-list4"></i></span></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="result__header mobile">
                                <h4 class="title">29<span>Product Found</span></h4>
                            </div>
                            <div class="result__content">
                                <div class="section-shop--grid">
                                    <div class="row m-0">
                                        <div class="col-6 col-md-4 col-lg-3 p-0">
                                            <div class="ps-product--standard"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/03-Bakery/03_1a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                                <div class="ps-product__content">
                                                    <p class="ps-product__type"><i class="icon-store"></i>Shannan Yu</p>
                                                    <h5><a class="ps-product__name" href="{{route('product-view')}}">Large Green Bell Pepper</a></h5>
                                                    <p class="ps-product__unit">250g</p>
                                                    <div class="ps-product__rating">
                                                        <select class="rating-stars">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4" selected="selected">4</option>
                                                            <option value="5">5</option>
                                                        </select><span>(2)</span>
                                                    </div>
                                                    <p class="ps-product-price-block"><span class="ps-product__price-default">$15.90</span>
                                                    </p>
                                                </div>
                                                <div class="ps-product__footer">
                                                    <div class="def-number-input number-input safari_only">
                                                        <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                        <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                        <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                    </div>
                                                    <div class="ps-product__total">Total: <span>$15.90</span>
                                                    </div>
                                                    <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                                    <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4 col-lg-3 p-0">
                                            <div class="ps-product--standard"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_38a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                                <div class="ps-product__content">
                                                    <p class="ps-product__type"><i class="icon-store"></i>Shannan Yu</p>
                                                    <h5><a class="ps-product__name" href="{{route('product-view')}}">Honest Organic Still Lemonade</a></h5>
                                                    <p class="ps-product__unit">1.5L</p>
                                                    <div class="ps-product__rating">
                                                        <select class="rating-stars">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5" selected="selected">5</option>
                                                        </select><span>(14)</span>
                                                    </div>
                                                    <p class="ps-product-price-block"><span class="ps-product__price-default">$6.99</span>
                                                    </p>
                                                </div>
                                                <div class="ps-product__footer">
                                                    <div class="def-number-input number-input safari_only">
                                                        <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                        <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                        <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                    </div>
                                                    <div class="ps-product__total">Total: <span>$6.99</span>
                                                    </div>
                                                    <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                                    <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4 col-lg-3 p-0">
                                            <div class="ps-product--standard"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/02-FoodCupboard/02_1a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__offbadge">30% Off </span>
                                                <div class="ps-product__content">
                                                    <p class="ps-product__type"><i class="icon-store"></i>AquilaImpex</p>
                                                    <h5><a class="ps-product__name" href="{{route('product-view')}}">Natures Own 100% Wheat</a></h5>
                                                    <p class="ps-product__unit">454g</p>
                                                    <div class="ps-product__rating">
                                                        <select class="rating-stars">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select><span>(0)</span>
                                                    </div>
                                                    <p class="ps-product-price-block"><span class="ps-product__sale">$1.99</span><span class="ps-product__price">$2.99</span>
                                                    </p>
                                                </div>
                                                <div class="ps-product__footer">
                                                    <div class="def-number-input number-input safari_only">
                                                        <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                        <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                        <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                    </div>
                                                    <div class="ps-product__total">Total: <span>$1.99</span>
                                                    </div>
                                                    <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                                    <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4 col-lg-3 p-0">
                                            <div class="ps-product--standard"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_16a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__offbadge">35% Off </span>
                                                <div class="ps-product__content">
                                                    <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                                    <h5><a class="ps-product__name" href="{{route('product-view')}}">Broccoli Crowns</a></h5>
                                                    <p class="ps-product__unit">300g</p>
                                                    <div class="ps-product__rating">
                                                        <select class="rating-stars">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5" selected="selected">5</option>
                                                        </select><span>(4)</span>
                                                    </div>
                                                    <p class="ps-product-price-block"><span class="ps-product__sale">$3.90</span><span class="ps-product__price">$9.99</span>
                                                    </p>
                                                </div>
                                                <div class="ps-product__footer">
                                                    <div class="def-number-input number-input safari_only">
                                                        <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                        <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                        <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                    </div>
                                                    <div class="ps-product__total">Total: <span>$3.90</span>
                                                    </div>
                                                    <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                                    <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4 col-lg-3 p-0">
                                            <div class="ps-product--standard"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/05-ReadyMeals/05_8a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__offbadge">46% Off </span>
                                                <div class="ps-product__content">
                                                    <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p>
                                                    <h5><a class="ps-product__name" href="{{route('product-view')}}">Rsr Potato Salad</a></h5>
                                                    <p class="ps-product__unit">545g</p>
                                                    <div class="ps-product__rating">
                                                        <select class="rating-stars">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4" selected="selected">4</option>
                                                            <option value="5">5</option>
                                                        </select><span>(2)</span>
                                                    </div>
                                                    <p class="ps-product-price-block"><span class="ps-product__sale">$15.90</span><span class="ps-product__price">$20.00</span>
                                                    </p>
                                                </div>
                                                <div class="ps-product__footer">
                                                    <div class="def-number-input number-input safari_only">
                                                        <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                        <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                        <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                    </div>
                                                    <div class="ps-product__total">Total: <span>$15.90</span>
                                                    </div>
                                                    <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                                    <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4 col-lg-3 p-0">
                                            <div class="ps-product--standard"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_9a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__offbadge">25% Off </span>
                                                <div class="ps-product__content">
                                                    <p class="ps-product__type"><i class="icon-store"></i>AquilaImpex</p>
                                                    <h5><a class="ps-product__name" href="{{route('product-view')}}">Tailgater Ham Sandwich</a></h5>
                                                    <p class="ps-product__unit">200g</p>
                                                    <div class="ps-product__rating">
                                                        <select class="rating-stars">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select><span>(0)</span>
                                                    </div>
                                                    <p class="ps-product-price-block"><span class="ps-product__price-default">$8.90</span>
                                                    </p>
                                                </div>
                                                <div class="ps-product__footer">
                                                    <div class="def-number-input number-input safari_only">
                                                        <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                        <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                        <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                    </div>
                                                    <div class="ps-product__total">Total: <span>$8.90</span>
                                                    </div>
                                                    <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                                    <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4 col-lg-3 p-0">
                                            <div class="ps-product--standard"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_22a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__new">New </span>
                                                <div class="ps-product__content">
                                                    <p class="ps-product__type"><i class="icon-store"></i>Shannan Yu</p>
                                                    <h5><a class="ps-product__name" href="{{route('product-view')}}">Bar S -Classic Bun Length Franks</a></h5>
                                                    <p class="ps-product__unit">454g</p>
                                                    <div class="ps-product__rating">
                                                        <select class="rating-stars">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select><span>(0)</span>
                                                    </div>
                                                    <p class="ps-product-price-block"><span class="ps-product__price-default">$14.99</span>
                                                    </p>
                                                </div>
                                                <div class="ps-product__footer">
                                                    <div class="def-number-input number-input safari_only">
                                                        <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                        <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                        <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                    </div>
                                                    <div class="ps-product__total">Total: <span>$14.99</span>
                                                    </div>
                                                    <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                                    <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4 col-lg-3 p-0">
                                            <div class="ps-product--standard"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_27a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__stock">Out of stock </span>
                                                <div class="ps-product__content">
                                                    <p class="ps-product__type"><i class="icon-store"></i>Shannan Yu</p>
                                                    <h5><a class="ps-product__name" href="{{route('product-view')}}">Fresh Organic Milk</a></h5>
                                                    <p class="ps-product__unit">100g</p>
                                                    <div class="ps-product__rating">
                                                        <select class="rating-stars">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3" selected="selected">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select><span>(6)</span>
                                                    </div>
                                                    <p class="ps-product-price-block"><span class="ps-product__price-default">$5.99</span>
                                                    </p>
                                                </div>
                                                <div class="ps-product__footer">
                                                    <div class="def-number-input number-input safari_only">
                                                        <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                        <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                        <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                    </div>
                                                    <div class="ps-product__total">Total: <span>$5.99</span>
                                                    </div>
                                                    <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                                    <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4 col-lg-3 p-0">
                                            <div class="ps-product--standard"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_32a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                                <div class="ps-product__content">
                                                    <p class="ps-product__type"><i class="icon-store"></i>Shannan Yu</p>
                                                    <h5><a class="ps-product__name" href="{{route('product-view')}}">Large Green Bell Pepper</a></h5>
                                                    <p class="ps-product__unit">250g</p>
                                                    <div class="ps-product__rating">
                                                        <select class="rating-stars">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4" selected="selected">4</option>
                                                            <option value="5">5</option>
                                                        </select><span>(2)</span>
                                                    </div>
                                                    <p class="ps-product-price-block"><span class="ps-product__price-default">$14.99</span>
                                                    </p>
                                                </div>
                                                <div class="ps-product__footer">
                                                    <div class="def-number-input number-input safari_only">
                                                        <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                        <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                        <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                    </div>
                                                    <div class="ps-product__total">Total: <span>$14.99</span>
                                                    </div>
                                                    <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                                    <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4 col-lg-3 p-0">
                                            <div class="ps-product--standard"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_6a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                                <div class="ps-product__content">
                                                    <p class="ps-product__type"><i class="icon-store"></i>AquilaImpex</p>
                                                    <h5><a class="ps-product__name" href="{{route('product-view')}}">Chicken Drums Jumbo Pk</a></h5>
                                                    <p class="ps-product__unit">100g</p>
                                                    <div class="ps-product__rating">
                                                        <select class="rating-stars">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3" selected="selected">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select><span>(6)</span>
                                                    </div>
                                                    <p class="ps-product-price-block"><span class="ps-product__sale">$44.99</span><span class="ps-product__price">$48.88</span><span class="ps-product__off"></span>
                                                    </p>
                                                </div>
                                                <div class="ps-product__footer">
                                                    <div class="def-number-input number-input safari_only">
                                                        <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                        <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                        <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                    </div>
                                                    <div class="ps-product__total">Total: <span>$44.99</span>
                                                    </div>
                                                    <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                                    <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4 col-lg-3 p-0">
                                            <div class="ps-product--standard"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_18a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__stock">Out of stock </span>
                                                <div class="ps-product__content">
                                                    <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p>
                                                    <h5><a class="ps-product__name" href="{{route('product-view')}}">Oniins, Green</a></h5>
                                                    <p class="ps-product__unit">300g</p>
                                                    <div class="ps-product__rating">
                                                        <select class="rating-stars">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4" selected="selected">4</option>
                                                            <option value="5">5</option>
                                                        </select><span>(2)</span>
                                                    </div>
                                                    <p class="ps-product-price-block"><span class="ps-product__sale">$6.90</span><span class="ps-product__price">$9.99</span><span class="ps-product__off">35% Off</span>
                                                    </p>
                                                </div>
                                                <div class="ps-product__footer">
                                                    <div class="def-number-input number-input safari_only">
                                                        <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                        <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                        <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                    </div>
                                                    <div class="ps-product__total">Total: <span>$6.90</span>
                                                    </div>
                                                    <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                                    <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4 col-lg-3 p-0">
                                            <div class="ps-product--standard"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/06-SoftDrinks-TeaCoffee/06_11a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__offbadge">25% Off </span>
                                                <div class="ps-product__content">
                                                    <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                                    <h5><a class="ps-product__name" href="{{route('product-view')}}">Broccoli Crowns</a></h5>
                                                    <p class="ps-product__unit">1 box</p>
                                                    <div class="ps-product__rating">
                                                        <select class="rating-stars">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4" selected="selected">4</option>
                                                            <option value="5">5</option>
                                                        </select><span>(4)</span>
                                                    </div>
                                                    <p class="ps-product-price-block"><span class="ps-product__sale">$9.99</span><span class="ps-product__price">$5.90</span>
                                                    </p>
                                                </div>
                                                <div class="ps-product__footer">
                                                    <div class="def-number-input number-input safari_only">
                                                        <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                        <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                        <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                    </div>
                                                    <div class="ps-product__total">Total: <span>$9.99</span>
                                                    </div>
                                                    <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                                    <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-pagination blog--pagination">
                                    <ul class="pagination">
                                        <li class="chevron"><a href="#"><i class="icon-chevron-left"></i></a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li class="chevron"><a href="#"><i class="icon-chevron-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-recent--default ps-home--block">
            <div class="container">
                <div class="ps-block__header">
                    <h3 class="ps-block__title">Your Recent Viewed</h3><a class="ps-block__view" href="{{route('shop-categories')}}">View all <i class="icon-chevron-right"></i></a>
                </div>
                <div class="recent__content">
                    <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="8" data-owl-item-xs="3" data-owl-item-sm="3" data-owl-item-md="5" data-owl-item-lg="8" data-owl-item-xl="8" data-owl-duration="1000" data-owl-mousedrag="on"><a class="recent-item" href="{{route('welcome')}}"><img src="/assets/img/products/01-Fresh/01_1a.jpg" alt="alt" /></a><a class="recent-item" href="{{route('welcome')}}"><img src="/assets/img/products/01-Fresh/01_2a.jpg" alt="alt" /></a><a class="recent-item" href="{{route('welcome')}}"><img src="/assets/img/products/01-Fresh/01_30a.jpg" alt="alt" /></a><a class="recent-item" href="{{route('welcome')}}"><img src="/assets/img/products/01-Fresh/01_10a.jpg" alt="alt" /></a><a class="recent-item" href="{{route('welcome')}}"><img src="/assets/img/products/01-Fresh/01_18a.jpg" alt="alt" /></a><a class="recent-item" href="{{route('welcome')}}"><img src="/assets/img/products/01-Fresh/01_28b.jpg" alt="alt" /></a><a class="recent-item" href="{{route('welcome')}}"><img src="/assets/img/products/01-Fresh/01_16a.jpg" alt="alt" /></a><a class="recent-item" href="{{route('welcome')}}"><img src="/assets/img/products/01-Fresh/01_31a.jpg" alt="alt" /></a><a class="recent-item" href="{{route('welcome')}}"><img src="/assets/img/products/01-Fresh/01_15a.jpg" alt="alt" /></a><a class="recent-item" href="{{route('welcome')}}"><img src="/assets/img/products/01-Fresh/01_5a.jpg" alt="alt" /></a><a class="recent-item" href="{{route('welcome')}}"><img src="/assets/img/products/01-Fresh/01_32a.jpg" alt="alt" /></a>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal fade" id="popupQuickview" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl ps-quickview">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid quickview-body">
                            <div class="row">
                                <div class="col-12 col-lg-5">
                                    <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-item-xl="1" data-owl-duration="1000" data-owl-mousedrag="on">
                                        <div class="quickview-carousel"><img class="carousel__thumbnail" src="/assets/img/products/01-Fresh/01_1a.jpg" alt="alt" /></div>
                                        <div class="quickview-carousel"><img class="carousel__thumbnail" src="/assets/img/products/01-Fresh/01_2a.jpg" alt="alt" /></div>
                                        <div class="quickview-carousel"><img class="carousel__thumbnail" src="/assets/img/products/01-Fresh/01_4a.jpg" alt="alt" /></div>
                                        <div class="quickview-carousel"><img class="carousel__thumbnail" src="/assets/img/products/01-Fresh/01_9a.jpg" alt="alt" /></div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div class="quickview__product">
                                        <div class="product__header">
                                            <div class="product__title">Hovis Farmhouse Soft White Bread</div>
                                            <div class="product__meta">
                                                <div class="product__rating">
                                                    <select class="rating-stars">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4" selected="selected">4</option>
                                                        <option value="5">5</option>
                                                    </select><span>4 customer reviews</span>
                                                </div>
                                                <div class="product__code"><span>SKU: </span>#VEG20938</div>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__price"><span class="sale">$5.49</span><span class="price">$6.90</span><span class="off">25% Off</span></div>
                                            <p class="product__unit">300g</p>
                                            <div class="alert__success">Availability: <span>34 in stock</span></div>
                                            <ul>
                                                <li>Type: Organic</li>
                                                <li>MFG: Jun 4, 2020</li>
                                                <li>LIFE: 30 days</li>
                                            </ul>
                                        </div>
                                        <div class="product__action">
                                            <label>Quantity: </label>
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <button class="btn product__addcart"> <i class="icon-cart"></i>Add to cart</button>
                                            <button class="btn button-icon icon-md"><i class="icon-repeat"></i></button>
                                            <button class="btn button-icon icon-md"><i class="icon-heart"></i></button>
                                        </div>
                                        <div class="product__footer">
                                            <div class="ps-social--share"><a class="ps-social__icon facebook" href="#"><i class="fa fa-thumbs-up"></i><span>Like</span><span class="ps-social__number">0</span></a><a class="ps-social__icon facebook" href="#"><i class="fa fa-facebook-square"></i><span>Like</span><span class="ps-social__number">0</span></a><a class="ps-social__icon twitter" href="#"><i class="fa fa-twitter"></i><span>Like</span></a><a class="ps-social__icon" href="#"><i class="fa fa-plus-square"></i><span>Like</span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="popupAddToCart" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl ps-addcart">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="alert__success"><i class="icon-checkmark-circle"></i> "Morrisons The Best Beef Topside" successfully added to you cart. <a href="{{route('shop-cart')}}">View cart(3)</a></div>
                            <hr>
                            <h3 class="cart__title">CUSTOMERS WHO BOUGHT THIS ALSO BOUGHT:</h3>
                            <div class="cart__content">
                                <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="4" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="2" data-owl-item-lg="4" data-owl-item-xl="4" data-owl-duration="1000" data-owl-mousedrag="on">
                                    <div class="cart-item">
                                        <div class="ps-product--standard"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_35a.jpg" alt="alt" /></a>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>AquilaImpex</p><a href="{{route('product-view')}}">
                                                    <h5 class="ps-product__name">Extreme Budweiser Light Can</h5>
                                                </a>
                                                <p class="ps-product__unit">500g</p>
                                                <div class="ps-product__rating">
                                                    <select class="rating-stars">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4" selected="selected">4</option>
                                                        <option value="5">5</option>
                                                    </select><span>(4)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__sale">$8.90</span><span class="ps-product__price">$9.90</span><span class="ps-product__off">15% Off</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-item">
                                        <div class="ps-product--standard"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_16a.jpg" alt="alt" /></a>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p><a href="{{route('product-view')}}">
                                                    <h5 class="ps-product__name">Honest Organic Still Lemonade</h5>
                                                </a>
                                                <p class="ps-product__unit">100g</p>
                                                <div class="ps-product__rating">
                                                    <select class="rating-stars">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5" selected="selected">5</option>
                                                    </select><span>(14)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__price-default">$1.99</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-item">
                                        <div class="ps-product--standard"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_12a.jpg" alt="alt" /></a>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>John Farm</p><a href="{{route('product-view')}}">
                                                    <h5 class="ps-product__name">Natures Own 100% Wheat</h5>
                                                </a>
                                                <p class="ps-product__unit">100g</p>
                                                <div class="ps-product__rating">
                                                    <select class="rating-stars">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select><span>(0)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__price-default">$4.49</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-item">
                                        <div class="ps-product--standard"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_15a.jpg" alt="alt" /></a>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>AquilaImpex</p><a href="{{route('product-view')}}">
                                                    <h5 class="ps-product__name">Avocado, Hass Large</h5>
                                                </a>
                                                <p class="ps-product__unit">300g</p>
                                                <div class="ps-product__rating">
                                                    <select class="rating-stars">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3" selected="selected">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select><span>(6)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__sale">$6.99</span><span class="ps-product__price">$9.90</span><span class="ps-product__off">25% Off</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-item">
                                        <div class="ps-product--standard"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/06-SoftDrinks-TeaCoffee/06_3a.jpg" alt="alt" /></a>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p><a href="{{route('product-view')}}">
                                                    <h5 class="ps-product__name">Kevita Kom Ginger</h5>
                                                </a>
                                                <p class="ps-product__unit">200g</p>
                                                <div class="ps-product__rating">
                                                    <select class="rating-stars">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4" selected="selected">4</option>
                                                        <option value="5">5</option>
                                                    </select><span>(6)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__sale">$4.90</span><span class="ps-product__price">$3.99</span><span class="ps-product__off">15% Off</span>
                                                </p>
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
    </main>
@endsection


