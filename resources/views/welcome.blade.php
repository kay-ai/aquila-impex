@extends('layouts.app', [$activePage = 'Home'])

@section('main')
    <main class="no-main">
        <div class="section-slide--default">
            <div class="owl-carousel" data-owl-auto="false" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
                <div class="ps-banner"><img class="mobile-only" src="/assets/img/slider/home-1/slide_01_mobile.png" alt="alt" /><img class="desktop-only" src="/assets/img/slider/home-1/slide_01.png" alt="alt" />
                    <div class="ps-content">
                        <div class="container">
                            <div class="ps-content-box">
                                <div class="ps-title">AquilaImpex Organic Fruit & Vegetable Delivery <br/> <span class='text-danger'>Daily Offers.</span></div>
                                <div class="ps-subtitle">With our deverse range of <span class='text-success'>100% fresh</span> foods.</div>
                                <div class="ps-shopnow"> <a href="{{route('shop')}}">Shop Now<i class="icon-chevron-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ps-banner"><img class="mobile-only" src="/assets/img/slider/home-1/slide_02_mobile.png" alt="alt" /><img class="desktop-only" src="/assets/img/slider/home-1/slide_02.png" alt="alt" />
                    <div class="ps-content">
                        <div class="container">
                            <div class="ps-content-box">
                                <div class="ps-node"><span class='text-success'>NEW ARRIVALS</span></div>
                                <div class="ps-title">Whole Earth Organic Sparkling Lemonade.</div>
                                <div class="ps-subtitle">Made with nuatural ingredients</div>
                                <div class="ps-shopnow"> <a href="{{route('shop')}}">Shop Now<i class="icon-chevron-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ps-banner"><img class="mobile-only" src="/assets/img/slider/home-1/slide_03_mobile.png" alt="alt" /><img class="desktop-only" src="/assets/img/slider/home-1/slide_03.png" alt="alt" />
                    <div class="ps-content">
                        <div class="container">
                            <div class="ps-content-box">
                                <div class="ps-node"><span class='text-danger'>SALE UP TO 30%</span></div>
                                <div class="ps-title">Whole Earth Maple Frosted Organic Corn Flakes.</div>
                                <div class="ps-subtitle">Only from <br/> <span class='price'>$5.99</span></div>
                                <div class="ps-shopnow"> <a href="{{route('shop')}}">Shop Now<i class="icon-chevron-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-slide__footer">
                <div class="container">
                    <div class="row m-0">
                        <div class="col-4">
                            <p><b>Offers: AquilaImpex Organic Fruit & Vegies</b></p>
                        </div>
                        <div class="col-4">
                            <p>Whole Earth Organic Sparkling Lemonade</p>
                        </div>
                        <div class="col-4">
                            <p>Whole Earth Maple Frasted Organic Corn Flakes</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-promotion--default">
            <div class="container">
                <div class="row m-0">
                    <div class="col-6 col-lg-3"><a href="{{route('shop')}}"><img src="/assets/img/promotion/promotion_01.jpg" alt="alt" /></a></div>
                    <div class="col-6 col-lg-3"><a href="{{route('shop')}}"><img src="/assets/img/promotion/promotion_02.jpg" alt="alt" /></a></div>
                    <div class="col-6 col-lg-3"><a href="{{route('shop')}}"><img src="/assets/img/promotion/promotion_03.jpg" alt="alt" /></a></div>
                    <div class="col-6 col-lg-3"><a href="{{route('shop')}}"><img src="/assets/img/promotion/promotion_04.jpg" alt="alt" /></a></div>
                </div>
            </div>
        </div>
        <section class="section-featured--default ps-home--block">
            <div class="container">
                <div class="ps-block__header">
                    <h3 class="ps-block__title">Featured Categories</h3><a class="ps-block__view" href="{{route('shop-categories')}}">View all<i class="icon-chevron-right"></i></a>
                </div>
                <div class="featured--content">
                    <div class="featured__first">
                        <div class="ps-product--vertical"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_16a.jpg" alt="alt" /></a>
                            <div class="ps-product__content"><a class="ps-product__name" href="{{route('product-view')}}">Fresh</a>
                                <p class="ps-product__quantity">135 items</p>
                            </div>
                        </div>
                    </div>
                    <div class="featured__group">
                        <div class="row m-0">
                            @if ($featured_cat)
                                @foreach ($featured_cat as $cat)
                                    <div class="col-3 p-0">
                                        <div class="ps-product--vertical"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/storage/category/{{$cat->image}}" alt="alt" /></a>
                                            <div class="ps-product__content"><a class="ps-product__name" href="{{route('product-view')}}">{{$cat->name}}</a>
                                                <p class="ps-product__quantity">{{ $cat->product()->join('inventories', 'products.id', '=', 'inventories.product_id')->where('inventories.quantity', '>', 0)->count() }} items</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class="featured--content-mobile">
                    <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
                        <div class="product-slide"><a class="ps-product--vertical item-first" href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_16a.jpg" alt="alt" />
                                <div class="ps-product__content">
                                    <h5 class="ps-product__name">Fresh</h5>
                                    <p class="ps-product__quantity">135 items</p>
                                </div>
                            </a><a class="ps-product--vertical" href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/02-FoodCupboard/02_19a.jpg" alt="alt" />
                                <div class="ps-product__content">
                                    <h5 class="ps-product__name">Food Cupboard</h5>
                                    <p class="ps-product__quantity">34 items</p>
                                </div>
                            </a><a class="ps-product--vertical" href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/03-Bakery/03_6a.jpg" alt="alt" />
                                <div class="ps-product__content">
                                    <h5 class="ps-product__name">Barkery</h5>
                                    <p class="ps-product__quantity">27 items</p>
                                </div>
                            </a>
                        </div>
                        <div class="product-slide"><a class="ps-product--vertical" href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/05-ReadyMeals/05_2a.jpg" alt="alt" />
                                <div class="ps-product__content">
                                    <h5 class="ps-product__name">Ready Meals</h5>
                                    <p class="ps-product__quantity">13 items</p>
                                </div>
                            </a><a class="ps-product--vertical" href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/06-SoftDrinks-TeaCoffee/06_9a.jpg" alt="alt" />
                                <div class="ps-product__content">
                                    <h5 class="ps-product__name">Drinks, Tea & Coffee</h5>
                                    <p class="ps-product__quantity">42 items</p>
                                </div>
                            </a><a class="ps-product--vertical" href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/07-Beer-WineSpirits/07_1a.jpg" alt="alt" />
                                <div class="ps-product__content">
                                    <h5 class="ps-product__name">Beer, Wine & Spirits</h5>
                                    <p class="ps-product__quantity">54 items</p>
                                </div>
                            </a><a class="ps-product--vertical" href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/08-BabyChild/08_5a.jpg" alt="alt" />
                                <div class="ps-product__content">
                                    <h5 class="ps-product__name">Baby & Child</h5>
                                    <p class="ps-product__quantity">48 items</p>
                                </div>
                            </a>
                        </div>
                        <div class="product-slide"><a class="ps-product--vertical" href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/04-FrozenFoods/04_2a.jpg" alt="alt" />
                                <div class="ps-product__content">
                                    <h5 class="ps-product__name">Frozen Foods</h5>
                                    <p class="ps-product__quantity">44 items</p>
                                </div>
                            </a><a class="ps-product--vertical" href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/09-KitchenDining/09_11a.jpg" alt="alt" />
                                <div class="ps-product__content">
                                    <h5 class="ps-product__name">Kitchen & Dining</h5>
                                    <p class="ps-product__quantity">23 items</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @if ($flash_deal)
            <section class="section-flashdeal--default ps-home--block">
                <div class="container">
                    <div class="ps-block__header">
                        <h3 class="ps-block__title"><i class="icon-power"></i>Flash Deals <span class="ps-countdown"><span class="ps-countdown-end">Ends in: &nbsp;</span><span class="ps-countdown"><b class="hours">00</b> hours : <b class="minutes">12</b> mins : <b class="seconds">45</b> secs</span><span class="ps-countdown mobile"><b class="hours">00</b> h : <b class="minutes">12</b> m : <b class="seconds">45</b> s</span></span></h3><a class="ps-block__view" href="flash-sale.html">View all<i class="icon-chevron-right"></i></a>
                    </div>
                    <div class="flashdeal--content">
                        <div class="owl-carousel" data-owl-auto="false" data-owl-loop="false" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="6" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="6" data-owl-duration="1000" data-owl-mousedrag="on">
                            <div class="ps-product--standard"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_16a.jpg" alt="alt" /></a>
                                <div class="ps-product__content">
                                    <p class="ps-product-price-block"><span class="ps-product__sale">$2.90</span><span class="ps-product__price">$4.90</span><span class="ps-product__off">25% Off</span></p>
                                    <p class="ps-product__type"><i class="icon-store"></i>AquilaImpex</p><a href="{{route('product-view')}}">
                                        <h5 class="ps-product__name">Cornboat Holders</h5>
                                    </a>
                                    <p class="ps-product__unit">4 per pack</p>
                                    <div class="ps-product__rating">
                                        <select class="rating-stars">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select><span>(0) </span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="ps-product__sold">Sold: 0/40</p>
                                </div>
                                <div class="ps-product__footer">
                                    <div class="def-number-input number-input safari_only">
                                        <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                        <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                        <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                    </div>
                                    <div class="ps-product__total">Total: <span>$2.90</span>
                                    </div>
                                    <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                    <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                </div>
                            </div>
                            <div class="ps-product--standard"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_20a.jpg" alt="alt" /></a>
                                <div class="ps-product__content">
                                    <p class="ps-product-price-block"><span class="ps-product__sale">$1.49</span><span class="ps-product__price">$4.90</span><span class="ps-product__off">9% Off</span></p>
                                    <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p><a href="{{route('product-view')}}">
                                        <h5 class="ps-product__name">Saute Pan Silver</h5>
                                    </a>
                                    <p class="ps-product__unit">500ml</p>
                                    <div class="ps-product__rating">
                                        <select class="rating-stars">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3" selected="selected">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select><span>(7) </span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="ps-product__sold">Sold: 9/10</p>
                                </div>
                                <div class="ps-product__footer">
                                    <div class="def-number-input number-input safari_only">
                                        <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                        <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                        <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                    </div>
                                    <div class="ps-product__total">Total: <span>$1.49</span>
                                    </div>
                                    <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                    <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                </div>
                            </div>
                            <div class="ps-product--standard"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/07-Beer-WineSpirits/07_10a.jpg" alt="alt" /></a>
                                <div class="ps-product__content">
                                    <p class="ps-product-price-block"><span class="ps-product__sale">$3.99</span><span class="ps-product__price">$4.90</span><span class="ps-product__off">26% Off</span></p>
                                    <p class="ps-product__type"><i class="icon-store"></i>Nesco</p><a href="{{route('product-view')}}">
                                        <h5 class="ps-product__name">Crock Pot Slow Cooker</h5>
                                    </a>
                                    <p class="ps-product__unit">$ per pack</p>
                                    <div class="ps-product__rating">
                                        <select class="rating-stars">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select><span>(0) </span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="ps-product__sold">Sold: 20/40</p>
                                </div>
                                <div class="ps-product__footer">
                                    <div class="def-number-input number-input safari_only">
                                        <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                        <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                        <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                    </div>
                                    <div class="ps-product__total">Total: <span>$3.99</span>
                                    </div>
                                    <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                    <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                </div>
                            </div>
                            <div class="ps-product--standard"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_25a.jpg" alt="alt" /></a>
                                <div class="ps-product__content">
                                    <p class="ps-product-price-block"><span class="ps-product__sale">$5.99</span><span class="ps-product__price">$6.90</span><span class="ps-product__off">55% Off</span></p>
                                    <p class="ps-product__type"><i class="icon-store"></i>Karery</p><a href="{{route('product-view')}}">
                                        <h5 class="ps-product__name">Emoticon Cookie</h5>
                                    </a>
                                    <p class="ps-product__unit">330ml</p>
                                    <div class="ps-product__rating">
                                        <select class="rating-stars">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5" selected="selected">5</option>
                                        </select><span>(13) </span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="ps-product__sold">Sold: 5/20</p>
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
                            <div class="ps-product--standard"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_2a.jpg" alt="alt" /></a>
                                <div class="ps-product__content">
                                    <p class="ps-product-price-block"><span class="ps-product__sale">$3.99</span><span class="ps-product__price">$4.90</span><span class="ps-product__off">30% Off</span></p>
                                    <p class="ps-product__type"><i class="icon-store"></i>Karey Store</p><a href="{{route('product-view')}}">
                                        <h5 class="ps-product__name">Broccoli Crowns</h5>
                                    </a>
                                    <p class="ps-product__unit">4 per pack</p>
                                    <div class="ps-product__rating">
                                        <select class="rating-stars">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5" selected="selected">5</option>
                                        </select><span>(15) </span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="ps-product__sold">Sold: 0/10</p>
                                </div>
                                <div class="ps-product__footer">
                                    <div class="def-number-input number-input safari_only">
                                        <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                        <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                        <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                    </div>
                                    <div class="ps-product__total">Total: <span>$3.99</span>
                                    </div>
                                    <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                    <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                </div>
                            </div>
                            <div class="ps-product--standard"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/05-ReadyMeals/05_11a.jpg" alt="alt" /></a>
                                <div class="ps-product__content">
                                    <p class="ps-product-price-block"><span class="ps-product__sale">$3.39</span><span class="ps-product__price">$4.90</span><span class="ps-product__off">15% Off</span></p>
                                    <p class="ps-product__type"><i class="icon-store"></i>AquilaImpex</p><a href="{{route('product-view')}}">
                                        <h5 class="ps-product__name">Arla Organic Free Range Milk</h5>
                                    </a>
                                    <p class="ps-product__unit">1 per pack</p>
                                    <div class="ps-product__rating">
                                        <select class="rating-stars">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select><span>(0) </span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 10%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="ps-product__sold">Sold: 1/10</p>
                                </div>
                                <div class="ps-product__footer">
                                    <div class="def-number-input number-input safari_only">
                                        <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                        <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                        <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                    </div>
                                    <div class="ps-product__total">Total: <span>$3.39</span>
                                    </div>
                                    <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                    <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                </div>
                            </div>
                            <div class="ps-product--standard"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_20a.jpg" alt="alt" /></a>
                                <div class="ps-product__content">
                                    <p class="ps-product-price-block"><span class="ps-product__sale">$1.49</span><span class="ps-product__price">$4.90</span><span class="ps-product__off">9% Off</span></p>
                                    <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p><a href="{{route('product-view')}}">
                                        <h5 class="ps-product__name">Saute Pan Silver</h5>
                                    </a>
                                    <p class="ps-product__unit">500ml</p>
                                    <div class="ps-product__rating">
                                        <select class="rating-stars">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3" selected="selected">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select><span>(7) </span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="ps-product__sold">Sold: 9/10</p>
                                </div>
                                <div class="ps-product__footer">
                                    <div class="def-number-input number-input safari_only">
                                        <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                        <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                        <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                    </div>
                                    <div class="ps-product__total">Total: <span>$1.49</span>
                                    </div>
                                    <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                    <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        <section class="section-categories--default mt-55">
            <div class="container">
                <div class="categories--floating"><a class="floating-item" href="#freshFoodBlock"><i class="icon-apple"></i></a><a class="floating-item" href="#foodCupboardBlock"><i class="icon-ice-cream2"></i></a><a class="floating-item" href="#readyMealBlock"><i class="icon-platter"></i></a><a class="floating-item" href="#drinkTeaBlock"><i class="icon-glass2"></i></a><a class="floating-item" href="#kitchenBlock"><i class="icon-dinner"></i></a>
                </div>
                @if($featured_cat)
                    @foreach ($featured_cat as $cat)
                        <div class="categories--block">
                            <h3><a class="categories__title" id="{{$cat->name}}FoodBlock">{{$cat->name}}</a></h3>
                            <div class="categories__content">
                                <div class="categories__promotion">
                                    <div class="slick-single-item">
                                        <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail" src="/assets/img/promotion/kitchen_01.jpg" alt="alt" /></a></div>
                                        <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail" src="/assets/img/promotion/kitchen_02.jpg" alt="alt" /></a></div>
                                        <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail" src="/assets/img/promotion/kitchen_03.jpg" alt="alt" /></a></div>
                                    </div>
                                    <div class="row categories__list">
                                        <div class="col-6">
                                            <div class="categories__list-item"><a href="#"><b>Best Seller</b></a></div>
                                            <div class="categories__list-item"><a href="#">Meat & Poultry</a></div>
                                            <div class="categories__list-item"><a href="#">Fruit</a></div>
                                            <div class="categories__list-item"><a href="#">Vegetables</a></div>
                                            <div class="categories__list-item"><a href="#">Milk, Butter & Eggs</a></div>
                                            <div class="categories__list-item"><a href="#">Fish</a></div>
                                            <div class="categories__list-item"><a href="#">Frozen</a></div>
                                            <div class="categories__list-item"><a href="#">Cheese</a></div>
                                        </div>
                                        <div class="col-6">
                                            <div class="categories__list-item"><a href="#">Desserts</a></div>
                                            <div class="categories__list-item"><a href="#">Pasta & Sauce</a></div>
                                            <div class="categories__list-item"><a href="#">Ham, Deli & Dips</a></div>
                                            <div class="categories__list-item"><a href="#">Pizza</a></div>
                                            <div class="categories__list-item"><a href="#">Soups</a></div>
                                            <div class="categories__list-item"><a href="#">Accompaniments</a></div>
                                            <div class="categories__list-item"><a href="#">Vegetarian Foods</a></div>
                                        </div>
                                    </div>
                                    <div class="categories__footer"><a href="{{route('shop-categories')}}">
                                            <u>View all</u><i class="icon-chevron-right"></i></a></div>
                                </div>
                                <div class="categories__products">
                                    <div class="row m-0">
                                        @if(count($cat->product)>0)
                                            @foreach ($cat->product as $product)
                                            @php
                                                $image = $product->images()->first();
                                            @endphp
                                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                                    <div class="ps-product--standard"><a href="{{route('product.show', $product->slug)}}"><img class="ps-product__thumbnail" src="{{ $image ? Storage::url($image->path) : 'no-image.png' }}" alt="{{ $product->name }}" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__new">New </span>
                                                        <div class="ps-product__content">
                                                            <p class="ps-product__type"><i class="icon-store"></i>{{$product->inventory->vendor ?? ''}}</p>
                                                            <h5><a class="ps-product__name" href="{{route('product.show', $product->slug)}}">{{$product->name ?? ''}}</a></h5>
                                                            <p class="ps-product__unit">{{$product->inventory->unit ?? ''}}</p>
                                                            <div class="ps-product__rating">
                                                                <select class="rating-stars">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4" selected="selected">4</option>
                                                                    <option value="5">5</option>
                                                                </select><span>(6)</span>
                                                            </div>
                                                            <p class="ps-product-price-block">
                                                                <span class="ps-product__sale">&#8358;{{$product->price ?? '0'}}</span>
                                                                {{-- <span class="ps-product__price">&#8358;{{$product->price ?? '0'}}</span> --}}
                                                                {{-- <span class="ps-product__off">15% Off</span> --}}
                                                            </p>
                                                        </div>
                                                        <div class="ps-product__footer">
                                                            <div class="def-number-input number-input safari_only">
                                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                            </div>
                                                            <div class="ps-product__total">Total: <span>&#8358;{{$product->price ?? '0'}}</span>
                                                            </div>
                                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="col-md-12 text-center p-5 border">
                                                There are no Products in the <b>{{$cat->name}}</b> category
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </section>
        <section class="section-recommendations--default ps-home--block">
            <div class="container">
                <div class="ps-block__header mobile">
                    <h3 class="ps-block__title">Recommendations</h3>
                    <div class="ps-block__list">
                        <ul>
                            <li class="menu-item"><a href="{{route('shop-categories')}}">New Arrivals</a></li>
                            <li class="menu-item"><a href="{{route('shop-categories')}}">Best Selling</a></li>
                            <li class="menu-item"><a href="{{route('shop-categories')}}">Most Popular</a></li>
                            <li class="menu-item"><a href="{{route('shop-categories')}}">On Sales</a></li>
                            <li class="menu-item"><a href="{{route('shop-categories')}}">All</a></li>
                        </ul>
                    </div>
                </div>
                <div class="recommendations__content">
                    <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="3" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="3" data-owl-item-xl="3" data-owl-duration="1000" data-owl-mousedrag="on">
                        <div class="recommendation-carousel">
                            <div class="ps-product--vertical"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_31a.jpg" alt="alt" /></a>
                                <div class="ps-product__content">
                                    <h5><a class="ps-product__name" href="{{route('product-view')}}">Chicken Drums Jumbo Pk</a></h5>
                                    <p class="ps-product__unit">1kg</p>
                                    <p class="ps-product-price-block"><span class="ps-product__price-default">$13.99</span>
                                    </p>
                                </div>
                            </div>
                            <div class="ps-product--vertical"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_18a.jpg" alt="alt" /></a>
                                <div class="ps-product__content">
                                    <h5><a class="ps-product__name" href="{{route('product-view')}}">Grapes, Red Seedless</a></h5>
                                    <p class="ps-product__unit">100g</p>
                                    <p class="ps-product-price-block"><span class="ps-product__sale">$5.99</span><span class="ps-product__price">$11.90</span><span class="ps-product__off">20% Off</span>
                                    </p>
                                </div>
                            </div>
                            <div class="ps-product--vertical"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/07-Beer-WineSpirits/07_11a.jpg" alt="alt" /></a>
                                <div class="ps-product__content">
                                    <h5><a class="ps-product__name" href="{{route('product-view')}}">Honest Organic Still Beer</a></h5>
                                    <p class="ps-product__unit">4 per pack</p>
                                    <p class="ps-product-price-block"><span class="ps-product__price-default">$39.90</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="recommendation-carousel">
                            <div class="ps-product--vertical"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_27a.jpg" alt="alt" /></a>
                                <div class="ps-product__content">
                                    <h5><a class="ps-product__name" href="{{route('product-view')}}">British Organic Meat</a></h5>
                                    <p class="ps-product__unit">500g</p>
                                    <p class="ps-product-price-block"><span class="ps-product__sale">$3.99</span><span class="ps-product__price">$11.90</span><span class="ps-product__off">60% Off</span>
                                    </p>
                                </div>
                            </div>
                            <div class="ps-product--vertical"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_7a.jpg" alt="alt" /></a>
                                <div class="ps-product__content">
                                    <h5><a class="ps-product__name" href="{{route('product-view')}}">Duchy Lemonade</a></h5>
                                    <p class="ps-product__unit">100g</p>
                                    <p class="ps-product-price-block"><span class="ps-product__price-default">$4.49</span>
                                    </p>
                                </div>
                            </div>
                            <div class="ps-product--vertical"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/07-Beer-WineSpirits/07_8a.jpg" alt="alt" /></a>
                                <div class="ps-product__content">
                                    <h5><a class="ps-product__name" href="{{route('product-view')}}">Jacks Original Pepperoni</a></h5>
                                    <p class="ps-product__unit">750ml</p>
                                    <p class="ps-product-price-block"><span class="ps-product__sale">$5.99</span><span class="ps-product__price">$11.90</span><span class="ps-product__off">15% Off</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="recommendation-carousel">
                            <div class="ps-product--vertical"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_1a.jpg" alt="alt" /></a>
                                <div class="ps-product__content">
                                    <h5><a class="ps-product__name" href="{{route('product-view')}}">Corn Yellow Sweet</a></h5>
                                    <p class="ps-product__unit">4 per pack</p>
                                    <p class="ps-product-price-block"><span class="ps-product__price-default">$6.99</span>
                                    </p>
                                </div>
                            </div>
                            <div class="ps-product--vertical"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/07-Beer-WineSpirits/07_2a.jpg" alt="alt" /></a>
                                <div class="ps-product__content">
                                    <h5><a class="ps-product__name" href="{{route('product-view')}}">Extreme Budweiser Light Can</a></h5>
                                    <p class="ps-product__unit">330ml</p>
                                    <p class="ps-product-price-block"><span class="ps-product__sale">$5.99</span><span class="ps-product__price">$11.90</span><span class="ps-product__off">45% Off</span>
                                    </p>
                                </div>
                            </div>
                            <div class="ps-product--vertical"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/02-FoodCupboard/02_3a.jpg" alt="alt" /></a>
                                <div class="ps-product__content">
                                    <h5><a class="ps-product__name" href="{{route('product-view')}}">Large Green Bell Snack</a></h5>
                                    <p class="ps-product__unit">180g</p>
                                    <p class="ps-product-price-block"><span class="ps-product__sale">$9.99</span><span class="ps-product__price">$11.90</span><span class="ps-product__off">16% Off</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="recommendation-carousel">
                            <div class="ps-product--vertical"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_31a.jpg" alt="alt" /></a>
                                <div class="ps-product__content">
                                    <h5><a class="ps-product__name" href="{{route('product-view')}}">Chicken Drums Jumbo Pk</a></h5>
                                    <p class="ps-product__unit">1kg</p>
                                    <p class="ps-product-price-block"><span class="ps-product__price-default">$13.99</span>
                                    </p>
                                </div>
                            </div>
                            <div class="ps-product--vertical"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/01-Fresh/01_18a.jpg" alt="alt" /></a>
                                <div class="ps-product__content">
                                    <h5><a class="ps-product__name" href="{{route('product-view')}}">Grapes, Red Seedless</a></h5>
                                    <p class="ps-product__unit">100g</p>
                                    <p class="ps-product-price-block"><span class="ps-product__sale">$5.99</span><span class="ps-product__price">$11.90</span><span class="ps-product__off">20% Off</span>
                                    </p>
                                </div>
                            </div>
                            <div class="ps-product--vertical"><a href="{{route('product-view')}}"><img class="ps-product__thumbnail" src="/assets/img/products/07-Beer-WineSpirits/07_11a.jpg" alt="alt" /></a>
                                <div class="ps-product__content">
                                    <h5><a class="ps-product__name" href="{{route('product-view')}}">Honest Organic Still Beer</a></h5>
                                    <p class="ps-product__unit">4 per pack</p>
                                    <p class="ps-product-price-block"><span class="ps-product__price-default">$39.90</span>
                                    </p>
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
