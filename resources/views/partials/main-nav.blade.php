<nav class="navigation bg-color-2">
    <div class="container">
        <ul class="menu">
            <li class="menu-item-has-children has-mega-menu {{ $activePage == 'Home' ? 'active' : '' }}"><a
                    class="nav-link {{ $activePage == 'Home' ? 'active' : '' }}" href="{{ route('welcome') }}">Home</a>
            </li>
            <li class="menu-item-has-children has-mega-menu {{ $activePage == 'Shop View' ? 'active' : '' }}"><a
                    class="nav-link {{ $activePage == 'Shop View' ? 'active' : '' }}" href="{{ route('shop') }}">Shop</a>
            </li>
            <li class="menu-item-has-children has-mega-menu"><a class="nav-link" href="{{route('blog')}}">Blog</a></li>
            <li class="menu-item-has-children has-mega-menu"><a class="nav-link" href="javascript:void(0);">Brand</a>
                <div class="mega-menu mega-brand">
                    <div class="mega-anchor"></div>
                    <div class="brand-box">
                        <div class="brand__title">FEATURED BRAND</div>
                        <div class="row">
                            <div class="col-4"><a href="{{ route('shop') }}"><img
                                        src="/assets/img/brand/brand_themeforest.jpg" alt="alt" /></a></div>
                            <div class="col-4"><a href="{{ route('shop') }}"><img
                                        src="/assets/img/brand/brand_envato.jpg" alt="alt" /></a></div>
                            <div class="col-4"><a href="{{ route('shop') }}"><img
                                        src="/assets/img/brand/brand_codecanyon.jpg" alt="alt" /></a></div>
                            <div class="col-4"><a href="{{ route('shop') }}"><img
                                        src="/assets/img/brand/brand_cudicjungle.jpg" alt="alt" /></a></div>
                            <div class="col-4"><a href="{{ route('shop') }}"><img
                                        src="/assets/img/brand/brand_videohive.jpg" alt="alt" /></a></div>
                            <div class="col-4"><a href="{{ route('shop') }}"><img
                                        src="/assets/img/brand/brand_photodune.jpg" alt="alt" /></a></div>
                            <div class="col-4"><a href="{{ route('shop') }}"><img
                                        src="/assets/img/brand/brand_evatotuts.jpg" alt="alt" /></a></div>
                            <div class="col-4"><a href="{{ route('shop') }}"><img
                                        src="/assets/img/brand/brand_3docean.jpg" alt="alt" /></a></div>
                            <div class="col-4"><a href="{{ route('shop') }}"><img
                                        src="/assets/img/brand/microlancer.jpg" alt="alt" /></a></div>
                        </div><a class="brand__link" href="shop-all-brands.html">See all brands<i
                                class="icon-chevron-right"></i></a>
                    </div>
                    <div class="brand__promotion"><a href="flash-sale.html"><img src="/assets/img/brand/brand_01.jpg"
                                alt="alt" /></a></div>
                    <div class="brand__promotion"><a href="flash-sale.html"><img src="/assets/img/brand/brand_02.jpg"
                                alt="alt" /></a></div>
                </div>
            </li>
            <li class="menu-item-has-children has-mega-menu"><a class="nav-link" href="flash-sale.html">Flash Sale</a>
            </li>
        </ul>
        <div class="navigation-text">
            <ul class="menu">
                <li class="menu-item-has-children has-mega-menu"><a class="nav-link" href="javascript:void(0);">Your
                        Recent Viewed</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                    <div class="mega-menu recent-view">
                        <div class="mega-anchor"></div>
                        <div class="container">
                            <div class="slick-many-item"><a class="recent-item" href="{{route('welcome')}}"><img
                                        src="/assets/img/products/01-Fresh/01_1a.jpg" alt="alt" /></a><a
                                    class="recent-item" href="{{route('welcome')}}"><img
                                        src="/assets/img/products/01-Fresh/01_2a.jpg" alt="alt" /></a><a
                                    class="recent-item" href="{{route('welcome')}}"><img
                                        src="/assets/img/products/01-Fresh/01_30a.jpg" alt="alt" /></a><a
                                    class="recent-item" href="{{route('welcome')}}"><img
                                        src="/assets/img/products/01-Fresh/01_10a.jpg" alt="alt" /></a><a
                                    class="recent-item" href="{{route('welcome')}}"><img
                                        src="/assets/img/products/01-Fresh/01_18a.jpg" alt="alt" /></a><a
                                    class="recent-item" href="{{route('welcome')}}"><img
                                        src="/assets/img/products/01-Fresh/01_28b.jpg" alt="alt" /></a><a
                                    class="recent-item" href="{{route('welcome')}}"><img
                                        src="/assets/img/products/01-Fresh/01_16a.jpg" alt="alt" /></a><a
                                    class="recent-item" href="{{route('welcome')}}"><img
                                        src="/assets/img/products/01-Fresh/01_31a.jpg" alt="alt" /></a><a
                                    class="recent-item" href="{{route('welcome')}}"><img
                                        src="/assets/img/products/01-Fresh/01_15a.jpg" alt="alt" /></a><a
                                    class="recent-item" href="{{route('welcome')}}"><img
                                        src="/assets/img/products/01-Fresh/01_5a.jpg" alt="alt" /></a><a
                                    class="recent-item" href="{{route('welcome')}}"><img
                                        src="/assets/img/products/01-Fresh/01_32a.jpg" alt="alt" /></a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
