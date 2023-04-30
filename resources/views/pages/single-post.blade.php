@extends('layouts.app', [$activePage = 'Single Post'])

@section('main')
    <main class="no-main">
        <section class="section--single-post ps-page--business">
            <div class="blog__content post__category">
                <div class="container">
                    <div class="blog__list">
                        <ul class="blog__type">
                            <li><a href="javascript:void(0);">All</a></li>
                            <li><a href="javascript:void(0);">Shopping</a></li>
                            <li><a href="javascript:void(0);">Store updates</a></li>
                            <li><a href="javascript:void(0);">recipes</a></li>
                            <li class="active"><a href="javascript:void(0);">news</a></li>
                            <li><a href="javascript:void(0);">Foods</a></li>
                            <li><a href="javascript:void(0);">Family</a></li>
                            <li><a href="javascript:void(0);">House</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="post__header">
                    <div class="ps-breadcrumb">
                        <div class="container">
                            <ul class="ps-breadcrumb__list">
                                <li class="active"><a href="{{route('welcome')}}">Home</a></li>
                                <li class="active"><a href="javascript:void(0);">Recipes</a></li>
                            </ul>
                        </div>
                    </div>
                    <h2 class="post__title">Chicken Makhani with Basmati Rice and Garlic and Coriander Naan</h2>
                    <div class="post__archives"><span class="archive__item blog__type"><i class="icon-folder"></i>RECIPES</span><span class="archive__item"><i class="icon-bubbles"></i>15 comments</span><span class="archive__item">Mar 23, 2020 by <span class="blog__auth">Serena</span></span>
                        <div class="ps-social--share"><a class="ps-social__icon facebook" href="#"><i class="fa fa-thumbs-up"></i><span>Like</span><span class="ps-social__number">0</span></a><a class="ps-social__icon facebook" href="#"><i class="fa fa-facebook-square"></i><span>Like</span><span class="ps-social__number">0</span></a><a class="ps-social__icon twitter" href="#"><i class="fa fa-twitter"></i><span>Like</span></a><a class="ps-social__icon" href="#"><i class="fa fa-plus-square"></i><span>Like</span></a></div>
                    </div>
                </div>
                <div class="post__slide">
                    <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-item-xl="1" data-owl-duration="1000" data-owl-mousedrag="on">
                        <div class="image-item"><img src="/assets/img/blogs/post_banner.jpg" alt="alt" /></div>
                        <div class="image-item"><img src="/assets/img/blogs/post_banner.jpg" alt="alt" /></div>
                    </div>
                </div>
                <div class="post__content">
                    <div class="post__blog">
                        <p class="font-bold">Here's a superb scratch dish, and an introduction into the fine art of curry making. Juicy chunks of chicken fried with your own masala then simmered to perfection and finished with double cream and coriander. Served with our own naan.</p>
                        <p class="first-letter">Most Mughlai and Punjabi restaurants will serve you a plate of this goodness as do dhabas and street vendors. I could devour into an entire dish all by myself. Soft roomali rotis, naan or flaky parathas scooping up the thick spiced gravy of butter chicken along with succulent morsels of tandoori chicken with charred edges brings sheer delight with every mouthful. The heat/ spice of the dish combines with the rich gravy and slight sweetness that make it very hard to resist.</p>
                        <p>With most dishes that have found memories it's the taste that lingers on even years later. <b>Cooking Butter Chicken</b> at home has always for me been about getting the flavours just right and like I knew they should taste. This recipe is one that I can say is an absolute hit every single time with family and friends. There's no calorie counting here I can tell you that now! There's a copious quantity of butter (after all it is butter chicken!), cream and honey. But I assure you it's worth every spoonfull.</p>
                        <p class="title-blog">Research to understand the Chicken Makhani</p>
                        <p>The checken is marinated & grilled before adding it to the makhani sauce. Tandoori chicken pieces added to the sauce enhance the flavour of the overall dish. Follow my recipe for <span class='text-success'>Tandoori Chicken</span> and can even be done a few hours in advance. Once the chicken is cooked set aside and procees to make the makhani sauce below. Fenugreek leaf powder is available at Asian stores or you can even grind dried fenugreek leaves.</p>
                        <p>Butter chicken or murgh makhani or Chicken makhani is a dish, originating from the Indian subcontinent in which the chicken is spiced up eith tomato sauce. Butter chicken is one of the most delicious, popular and lip-smacking dishes that's been loved by many across the word. Served with kulcha or naan is a delight wich most Indians love during their weekend restaurant visits.</p>
                        <p class="title-blog">Basic preparation of Chicken</p>
                        <p>Chicken is marinated for several hours in a dahi (Yogurt), lemon juice, and spice mixture. The spices mainly include garam masala, pepper, coriander, cumin, ginger, garlic, turmeric, and chili. The chicken is usually cooled in a traditional clay oven (also known as tandoor), but maybe roasted, grilled, or pan-fried. It is served in a mild curry sauce that includes butter. There are many variations on the spicing and composition of the sauce.</p>
                        <p>Spices include cloves, cinnamon, coriander, pepper, cardamom, cumin and fenugreek (kasuri methi). Cashew paste is also used as a thickening agent. Garnishes can include butter, coriander, cream, green chilies and fenugreek. Without butter you simply can't have butter chicken. So after adding the apices and tomato sauce, adding more heavy cream and butter is a must. I know it's a high-calorie meal wich is a full-fat dairy meal, buttery, creamy, spiced up with sauce. But let me tell you once in a week or so it's perfectly fine. Forget everything on that day and just enjoy this delicious authentic butter chicken recipe.</p>
                    </div><img src="/assets/img/blogs/post_video.jpg" alt>
                    <p class="name-image">Chicken is marinated for several hours in a dahi (yogurt), lemon juice, and spice mixture.</p>
                    <div class="post__blog">
                        <h4 class="title-blog">Fully recipes directions</h4>
                        <p>It is one of the most loved chicken dishes in India. A quick 40-minute butter chicken recipe which is creamy and fully packed with flavors. Usually, it is served with a naan roti or long grain basmati rice. This recipe will it self produce an adequate amount of sauce but if you want more sauce then add some more tomato sauce or cream. Though it will enhance the flavor but adding it in more amount can even make it worse. So be careful!</p>
                        <div class="row m-0">
                            <div class="col-12 col-lg-4 p-0">
                                <div class="box--icon">
                                    <div class="block__icon"><i class="icon-clock"></i></div>
                                    <div class="block__content">
                                        <p> <span class="title__block">prep: </span>10 mins</p>
                                        <p> <span class="title__block">cook: </span>3 hrs - 4 hrs</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 p-0">
                                <div class="box--icon">
                                    <div class="block__icon"><i class="icon-chef"></i></div>
                                    <div class="block__content">
                                        <p><span class="title__block">difficulties</span></p>
                                        <p>normal</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 p-0">
                                <div class="box--icon">
                                    <div class="block__icon"><i class="icon-dinner2"></i></div>
                                    <div class="block__content">
                                        <p><span class="title__block">serves 2 or 4 with</span></p>
                                        <p>other meals food</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="title__3nd">Ingredients</h4>
                        <ul class="ps-list--rectangle">
                            <li> <span><i class="icon-square"></i></span>750g <span class='text-success'>chicken breast</span></li>
                            <li> <span><i class="icon-square"></i></span>50g <span class='text-success'>butter</span></li>
                            <li> <span><i class="icon-square"></i></span>1 tin chopped <span class='text-success'>tomatoes</span></li>
                            <li> <span><i class="icon-square"></i></span>1 onion</li>
                            <li> <span><i class="icon-square"></i></span>2 <span class='text-success'>garlic clove</span></li>
                            <li> <span><i class="icon-square"></i></span>2 tsp chili powder</li>
                            <li> <span><i class="icon-square"></i></span>2 tsp ginger, ground</li>
                            <li> <span><i class="icon-square"></i></span>3 tsp turmeric, ground</li>
                            <li> <span><i class="icon-square"></i></span>1 <span class='text-success'>lemon</span></li>
                            <li> <span><i class="icon-square"></i></span>300g <span class='text-success'>basmati rice</span></li>
                        </ul>
                        <h4 class="title__3nd">Instructions</h4>
                        <ul class="ps-list--number">
                            <li>Preheat oven to 375 degrees. In a skillet melt a few tablespoons of butter over medium heat. Stir in garlic and onion and cook slowly about 15 miniutes unti the onion caramelizes to a dark brown.</li>
                            <li>In a saucepon over medium-high melt the remaining butter heat along with the heavy crea, tomato sauce, cayenne pepper, salt and garam masala. Reduce heat to medium-low and simmer for 30 minutes, stirning occasionally. Then stir in carameized onions.</li>
                            <li>In the meantime toss the cubed chicken breast with vegetable oil untill coated and season with tandcori masala.</li>
                            <li>On a preheated oven bake chicken for 12 minutes until no longerr pink in the center. Now, add the chicken to the sauce and simmer for 5 more minutes.</li>
                            <li>Garnish with cilantro and serve with naan or rice.</li>
                        </ul>
                        <h4 class="title__3nd">Nutrition Facts</h4>
                        <ul class="ps-list--vertical">
                            <li>Per Serving: <span>367</span> calories;</li>
                            <li>26.2g fat;</li>
                            <li><span>5.7g</span> Carbohydrates;</li>
                            <li><span>2.30g</span> protein;</li>
                            <li><span>81mg</span> cholesterol;</li>
                            <li><span>64mg</span> sodium.</li>
                        </ul>
                    </div><img src="/assets/img/blogs/post_quote.jpg" alt>
                    <div class="post__blog">
                        <div class="post__tags"><span class="tags__title">Tags: </span>
                            <ul>
                                <li>Organic</li>
                                <li>organic food</li>
                                <li>meat</li>
                                <li>pick fruit</li>
                                <li>most expensive fruit</li>
                                <li>fruit cutting</li>
                            </ul>
                        </div>
                        <div class="post__auth">
                            <div class="auth__avatar"><img src="/assets/img/blogs/post_auth.png" alt></div>
                            <div class="auth__content">
                                <h4 class="auth__name">Serena</h4>
                                <p class="auth__des">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himeraeos. Cras egestas, libero euporta tristique, neque dui volutpat augue. Lorem ipsum dolar sit, consectetur adipiscing elit.</p>
                                <div class="auth__social"><a class="icon_social facebook" href="#"><i class="fa fa-facebook-f"></i></a><a class="icon_social twitter" href="#"><i class="fa fa-twitter"></i></a><a class="icon_social google" href="#"><i class="fa fa-google-plus"></i></a><a class="icon_social youtube" href="#"><i class="fa fa-youtube"></i></a><a class="icon_social wifi" href="#"><i class="fa fa-wifi"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="post__continue">
                        <div class="post__prev">
                            <p> <i class="icon-arrow-left"></i>PREVIOUS POST</p>
                            <div class="post__name"><i class="icon-arrow-left"></i>Forget Food: 10 Reasons Why You No Longer Need It</div>
                        </div>
                        <div class="post_next">
                            <P>NEXT POST<i class="icon-arrow-right"></i></P>
                            <div class="post__name">Think You're Cut Out for Doing Food? Take This Quiz<i class="icon-arrow-right"></i></div>
                        </div>
                    </div>
                    <div class="post__related">
                        <h4 class="title-blog">Related Posts</h4>
                        <div class="related__carousel">
                            <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="2" data-owl-item-lg="4" data-owl-item-xl="4" data-owl-duration="1000" data-owl-mousedrag="on">
                                <div class="ps-post--related">
                                    <div class="post__img"><a href="{{route('blog')}}"><img src="/assets/img/blogs/blog_default_2.jpg" alt="alt" /></a></div>
                                    <div class="post__content">
                                        <div class="post__archives"><a class="archive__item post__type" href="vendor-store.html"><i class="icon-folder"></i>Foods</a><span class="archive__item"><i class="icon-bubbles"></i>13</span></div><a class="post__title" href="{{route('blog')}}">The Evolution of Food</a>
                                        <p class="post__des">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                                    </div>
                                </div>
                                <div class="ps-post--related">
                                    <div class="post__img"><a href="{{route('blog')}}"><img src="/assets/img/blogs/blog_default_1.jpg" alt="alt" /></a></div>
                                    <div class="post__content">
                                        <div class="post__archives"><a class="archive__item post__type" href="vendor-store.html"><i class="icon-folder"></i>Shopping</a><span class="archive__item"><i class="icon-bubbles"></i>24</span></div><a class="post__title" href="{{route('blog')}}">Forget Food: 10 Reasons Why You No Longer Need It</a>
                                        <p class="post__des">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                                    </div>
                                </div>
                                <div class="ps-post--related">
                                    <div class="post__img"><a href="{{route('blog')}}"><img src="/assets/img/blogs/blog_default_5.jpg" alt="alt" /></a></div>
                                    <div class="post__content">
                                        <div class="post__archives"><a class="archive__item post__type" href="vendor-store.html"><i class="icon-folder"></i>Family</a><span class="archive__item"><i class="icon-bubbles"></i>214</span></div><a class="post__title" href="{{route('blog')}}">The Biggest Problem With Food, And How You Can Fix It</a>
                                        <p class="post__des">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                                    </div>
                                </div>
                                <div class="ps-post--related">
                                    <div class="post__img"><a href="{{route('blog')}}"><img src="/assets/img/blogs/blog_default_7.jpg" alt="alt" /></a></div>
                                    <div class="post__content">
                                        <div class="post__archives"><a class="archive__item post__type" href="vendor-store.html"><i class="icon-folder"></i>Foods, Family</a><span class="archive__item"><i class="icon-bubbles"></i>35</span></div><a class="post__title" href="{{route('blog')}}">15 Surprising Stats About Food</a>
                                        <p class="post__des">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                                    </div>
                                </div>
                                <div class="ps-post--related">
                                    <div class="post__img"><a href="{{route('blog')}}"><img src="/assets/img/blogs/blog_default_8.jpg" alt="alt" /></a></div>
                                    <div class="post__content">
                                        <div class="post__archives"><a class="archive__item post__type" href="vendor-store.html"><i class="icon-folder"></i>Family</a><span class="archive__item"><i class="icon-bubbles"></i>0</span></div><a class="post__title" href="{{route('blog')}}">Think You're Cut Out for Doing Food? Take This Quiz</a>
                                        <p class="post__des">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                                    </div>
                                </div>
                                <div class="ps-post--related">
                                    <div class="post__img"><a href="{{route('blog')}}"><img src="/assets/img/blogs/blog_default_9.jpg" alt="alt" /></a></div>
                                    <div class="post__content">
                                        <div class="post__archives"><a class="archive__item post__type" href="vendor-store.html"><i class="icon-folder"></i>Store updates</a><span class="archive__item"><i class="icon-bubbles"></i>8</span></div><a class="post__title" href="{{route('blog')}}">10 Things Everyone Hates About Food</a>
                                        <p class="post__des">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ps--comments">
                <div class="container">
                    <h5 class="comment__title">5 Comments</h5>
                    <ul class="comment__list">
                        <li class="comment__item">
                            <div class="item__avatar"><img src="/assets/img/blogs/comment_avatar1.png" alt="alt" /></div>
                            <div class="item__content">
                                <div class="item__name">Carmen Merav</div>
                                <div class="item__date">- June 14, 2020</div>
                                <p class="item__des">I have gotten at least 50 timest 50 times the value from AquilaImpex. I would like to personally thank you for your outstanding product. AquilaImpex is great. It's exactly what I've been looking for.</p><a href="javascript:void(0);">REPLY </a>
                                <ul class="comment__list comment__sub">
                                    <li class="comment__item">
                                        <div class="item__avatar"><img src="/assets/img/blogs/comment_no_avatar.png" alt="alt" /></div>
                                        <div class="item__content">
                                            <div class="item__name">Paula Jordyn</div>
                                            <div class="item__date">- June 25, 2020</div>
                                            <p class="item__des">If you aren't sure, always go for AquilaImpex. We're loving it. AquilaImpex impressed me on multiple levels</p><a href="javascript:void(0);">REPLY</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="comment__item">
                            <div class="item__avatar"><img src="/assets/img/blogs/comment_avatar2.png" alt="alt" /></div>
                            <div class="item__content">
                                <div class="item__name">Abbey Vasu</div>
                                <div class="item__date">- June 14, 2020</div>
                                <p class="item__des">AquilaImpex is great. AquilaImpex is the most valuable business resource we have EVER purchased. I have gotten at least 50 times the value from AquilaImpex. I just can't get enough of AquilaImpex. I want to get a T-Shirt with AquilaImpex on it so I can show it off to everyone.</p><a href="javascript:void(0);">REPLY </a>
                            </div>
                        </li>
                        <li class="comment__item">
                            <div class="item__avatar"><img src="/assets/img/blogs/comment_no_avatar.png" alt="alt" /></div>
                            <div class="item__content">
                                <div class="item__name">Avimelekh Tecla</div>
                                <div class="item__date">- June 10, 2020</div>
                                <p class="item__des">If you aren't sure, always go for AquilaImpex. Not able to tell you how happy I am with AquilaImpex. Definitely worth the investment. We've used AquilaImpex foor the last five years.</p><a href="javascript:void(0);">REPLY </a>
                            </div>
                        </li>
                        <li class="comment__item">
                            <div class="item__avatar"><img src="/assets/img/blogs/comment_no_avatar.png" alt="alt" /></div>
                            <div class="item__content">
                                <div class="item__name">Poornima Jayda</div>
                                <div class="item__date">- May 14, 2020</div>
                                <p class="item__des">If you aren't sure, always go for AquilaImpex. We're loving it. AquilaImpex impressed me on multiple levels</p><a href="javascript:void(0);">REPLY </a>
                            </div>
                        </li>
                    </ul>
                    <h5 class="comment__title">Leave A Reply</h5>
                    <p class="comment__des">Your email will not be published. All fields are required.</p>
                    <form>
                        <div class="form-row">
                            <div class="col-12 form-group--block">
                                <textarea class="form-control" placeholder="Content"></textarea>
                            </div>
                            <div class="col-12 col-lg-4 form-group--block pt-4">
                                <input class="form-control" type="text" placeholder="Name">
                            </div>
                            <div class="col-12 col-lg-4 form-group--block pt-4">
                                <input class="form-control" type="email" placeholder="Email">
                            </div>
                            <div class="col-12 col-lg-4 form-group--block pt-4">
                                <input class="form-control" type="text" placeholder="Website">
                            </div>
                            <div class="col-12 col-lg-4 form-group--block">
                                <button class="btn ps-button">Post Comment</button>
                            </div>
                        </div>
                    </form>
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
