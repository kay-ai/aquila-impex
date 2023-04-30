@extends('layouts.app', [$activePage = 'Blog'])

@section('main')
    <main class="no-main">
        <section class="section--blogDefault ps-page--business">
            <div class="container">
                <div class="blog--header">
                    <h2 class="page__title">Blog & News</h2>
                    <div class="ps-breadcrumb">
                        <div class="container">
                            <ul class="ps-breadcrumb__list">
                                <li class="active"><a href="{{route('welcome')}}">Home</a></li>
                                <li><a href="javascript:void(0);">Blog &amp; News</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-9">
                        <div class="blog__content">
                            <div class="row">
                                <div class="col-12 blog__first">
                                    <div class="blog--default">
                                        <div class="blog__img"><img src="/assets/img/blogs/blog_default_1.jpg" alt="alt" /></div>
                                        <div class="blog__archives"><span class="archive__item blog__type"><i class="icon-folder"></i>Shopping</span><span class="archive__item"><i class="icon-bubbles"></i>24</span><span class="archive__item">Apr 14, 2020 by <span class="blog__auth">Admin</span></span></div><a class="blog__title" href="{{route('blog-single')}}">Forget Food: 10 Reasons Why You No Longer Need It</a>
                                        <p class="blog__des">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="blog--default">
                                        <div class="blog__img"><img src="/assets/img/blogs/blog_default_2.jpg" alt="alt" /></div>
                                        <div class="blog__archives"><span class="archive__item blog__type"><i class="icon-folder"></i>Foods</span><span class="archive__item"><i class="icon-bubbles"></i>13</span><span class="archive__item">Apri 23, 2020 by <span class="blog__auth">Asima</span></span></div><a class="blog__title" href="{{route('blog-single')}}">The Evolution of Food</a>
                                        <p class="blog__des">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="blog--default">
                                        <div class="blog__img"><img src="/assets/img/blogs/blog_default_3.jpg" alt="alt" /></div>
                                        <div class="blog__archives"><span class="archive__item blog__type"><i class="icon-folder"></i>Foods, News</span><span class="archive__item"><i class="icon-bubbles"></i>4</span><span class="archive__item">Apri 23, 2020 by <span class="blog__auth">Tauno</span></span></div><a class="blog__title" href="{{route('blog-single')}}">The Intermediate Guide to Food</a>
                                        <p class="blog__des">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="blog--default">
                                        <div class="blog__img"><img src="/assets/img/blogs/blog_default_4.jpg" alt="alt" /></div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="blog--default">
                                        <div class="blog__img"><img src="/assets/img/blogs/blog_default_5.jpg" alt="alt" /></div>
                                        <div class="blog__archives"><span class="archive__item blog__type"><i class="icon-folder"></i>Family</span><span class="archive__item"><i class="icon-bubbles"></i>214</span><span class="archive__item">Mar 23, 2020 by <span class="blog__auth">Aleksandr</span></span></div><a class="blog__title" href="{{route('blog-single')}}">The Biggest Problem With Food, And How You Can Fix It</a>
                                        <p class="blog__des">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="blog--default">
                                        <div class="blog__img"><img src="/assets/img/blogs/blog_default_6.jpg" alt="alt" /></div>
                                        <div class="blog__archives"><span class="archive__item blog__type"><i class="icon-folder"></i>Recipes</span><span class="archive__item"><i class="icon-bubbles"></i>213</span><span class="archive__item">Mar 23, 2020 by <span class="blog__auth">Serena</span></span></div><a class="blog__title" href="{{route('blog-single')}}">Chicken Makhani with Basmati Rice and Garlic and Coriander Naan</a>
                                        <p class="blog__des">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="blog--default">
                                        <div class="blog__img"><img src="/assets/img/blogs/blog_default_7.jpg" alt="alt" /></div>
                                        <div class="blog__archives"><span class="archive__item blog__type"><i class="icon-folder"></i>Foods, Family</span><span class="archive__item"><i class="icon-bubbles"></i>35</span><span class="archive__item">Mar 22, 2020 by <span class="blog__auth">Valeria</span></span></div><a class="blog__title" href="{{route('blog-single')}}">15 Surprising Stats About Food</a>
                                        <p class="blog__des">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="blog--default">
                                        <div class="blog__img"><img src="/assets/img/blogs/blog_default_8.jpg" alt="alt" /></div>
                                        <div class="blog__archives"><span class="archive__item blog__type"><i class="icon-folder"></i>Family</span><span class="archive__item"><i class="icon-bubbles"></i>0</span><span class="archive__item">Mar 21, 2020 by <span class="blog__auth">Gregg</span></span></div><a class="blog__title" href="{{route('blog-single')}}">Think You're Cut Out for Doing Food? Take This Quiz</a>
                                        <p class="blog__des">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="blog--default">
                                        <div class="blog__img"><img src="/assets/img/blogs/blog_default_9.jpg" alt="alt" /></div>
                                        <div class="blog__archives"><span class="archive__item blog__type"><i class="icon-folder"></i>Store updates</span><span class="archive__item"><i class="icon-bubbles"></i>8</span><span class="archive__item">Mar 15, 2020 by <span class="blog__auth">Rien</span></span></div><a class="blog__title" href="{{route('blog-single')}}">10 Things Everyone Hates About Food</a>
                                        <p class="blog__des">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
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
                    <div class="col-12 col-lg-3">
                        <div class="blog--widget">
                            <div class="widget__search">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Search in post...">
                                    <div class="input-group-append"><i class="icon-magnifier"></i></div>
                                </div>
                            </div>
                            <div class="widget__category">
                                <div class="widget__title">CATEGORIES</div>
                                <ul class="category-list">
                                    <li><a href="{{route('shop-categories')}}"> <span class="name">Shopping</span><span class="number">5</span></a></li>
                                    <li><a href="{{route('shop-categories')}}"> <span class="name">Store Updates</span><span class="number">12</span></a></li>
                                    <li><a href="{{route('shop-categories')}}"> <span class="name">Recipes</span><span class="number">7</span></a></li>
                                    <li><a href="{{route('shop-categories')}}"> <span class="name">News</span><span class="number">3</span></a></li>
                                    <li><a href="{{route('shop-categories')}}"> <span class="name">Foods</span><span class="number">5</span></a></li>
                                    <li><a href="{{route('shop-categories')}}"> <span class="name">Family</span><span class="number">7</span></a></li>
                                    <li><a href="{{route('shop-categories')}}"> <span class="name">House</span><span class="number">16</span></a></li>
                                </ul>
                            </div>
                            <div class="widget__posts">
                                <div class="widget__title">LATEST POSTS</div>
                                <ul class="post-list">
                                    <li><a href="{{route('blog-single')}}"><img src="/assets/img/promotion/drink_tea_01.jpg" alt="alt" />
                                            <div class="post__content">
                                                <p class="post__date">May 15, 2020 by <span>admin</span></p>
                                                <h5 class="post__title">15 Surprising Stats About Food</h5>
                                            </div>
                                        </a></li>
                                    <li><a href="{{route('blog-single')}}"><img src="/assets/img/promotion/drink_tea_01.jpg" alt="alt" />
                                            <div class="post__content">
                                                <p class="post__date">Apr 12, 2020 by <span>gamez</span></p>
                                                <h5 class="post__title">The Worst Advice We've Ever Heard About Food</h5>
                                            </div>
                                        </a></li>
                                    <li><a href="{{route('blog-single')}}"><img src="/assets/img/promotion/drink_tea_01.jpg" alt="alt" />
                                            <div class="post__content">
                                                <p class="post__date">Mar 23, 2020 by <span>Tauno</span></p>
                                                <h5 class="post__title">The Intermediate Guide to Food</h5>
                                            </div>
                                        </a></li>
                                    <li><a href="{{route('blog-single')}}"><img src="/assets/img/promotion/drink_tea_01.jpg" alt="alt" />
                                            <div class="post__content">
                                                <p class="post__date">Mar 23, 2020 by <span>Tauno</span></p>
                                                <h5 class="post__title">5 Real-Life Lessons About Food</h5>
                                            </div>
                                        </a></li>
                                </ul>
                            </div>
                            <div class="widget__comments">
                                <div class="widget__title">RECENT COMMENTS</div>
                                <ul class="comment-list">
                                    <li><a href="#"><span class="name">Kenedya </span>on <span class="message">Extreme Organic Budweiser Light Can</span></a></li>
                                    <li><a href="#"><span class="name">Kerrysmith </span>on <span class="message">Avocado, Hass Large</span></a></li>
                                    <li><a href="#"><span class="name">John Doe </span>on <span class="message">Morrisons The Best Beef Topside</span></a></li>
                                    <li><a href="#"><span class="name">Mainguyen </span>on <span class="message">Honest Organic Still Lemonade</span></a></li>
                                </ul>
                            </div>
                            <div class="widget__tags">
                                <div class="widget__title">POPULAR TAGS</div>
                                <ul>
                                    <li><a href="#">organic</a></li>
                                    <li><a href="#">organic food</a></li>
                                    <li><a href="#">meat</a></li>
                                    <li><a href="#">pick fruit</a></li>
                                    <li><a href="#">most expensive fruit</a></li>
                                    <li><a href="#">fruit cutting</a></li>
                                    <li><a href="#">pick fruit</a></li>
                                </ul>
                            </div>
                            <div class="widget__archives">
                                <div class="widget__title">ARCHIVES</div>
                                <ul>
                                    <li><a href="#">December 2020</a></li>
                                    <li><a href="#">November 2020</a></li>
                                    <li><a href="#">October 2020</a></li>
                                </ul>
                            </div>
                            <div class="widget__archives">
                                <div class="widget__title">META</div>
                                <ul>
                                    <li><a href="#">Login </a></li>
                                    <li><a href="#">Entries RSS</a></li>
                                    <li><a href="#">Comments RSS</a></li>
                                    <li><a href="#">WordPress.org</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
