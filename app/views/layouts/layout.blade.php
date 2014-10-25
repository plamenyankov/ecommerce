<!doctype html>
<html lang="en">
<head>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="{{ URL::asset('bower_components/foundation/js/foundation.min.js') }}"></script>
    {{ HTML::style('css/app.css') }}
    {{ HTML::style('css/foundation-icons.css') }}
    <meta charset="UTF-8">
    <title>Frendy</title>
</head>
<body>
<div class="row-custom show-for-large-only">Поръчки: 1-800-0000 | Ймейл: office@shop.com</div>
<div class="sticky">
<nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
        <li class="name">
           <a href="#" id="logo"> {{HTML::image("img/turtile.png",'logo')}}</a>
        </li>
        <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>

    <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right">

            <li class="has-dropdown"><a href="#"><i class="step fi-torso size-18"></i></a>
                <ul class="dropdown">
                    <li><a href="#">Sign In</a></li>
                    <li><a href="#">Sign Up</a></li>
            </ul>
        </li>
            <li class="has-dropdown"><a href="#"><i class="step fi-shopping-cart size-18"></i></a>
                <ul class="dropdown">
                    <li><a href="#">Плати</a></li>
                    <li><a href="#">Виж количка</a></li>
                </ul>
            </li>
            <li class=""><a href="#"><i class="step fi-heart size-18"></i></a></li>
        </ul>

        <!-- Left Nav Section -->
        <ul class="left">
            <li><a href="#"><i class="fa fa-calendar-o nav-font-icon"></i>Днес</a></li>
            <li><a href="#"><i class="step fi-male-female size-18 mr-5"></i>Мода</a></li>
            <li><a href="#"><i class="fa fa-futbol-o nav-font-icon"></i>Спортни</a></li>
            <li><a href="#"><i class="step fi-monitor size-18 mr-5"></i>Електроника</a></li>
            <li><a href="#"><i class="step fi-mountains size-18 mr-5"></i>Почивки</a></li>
            <li><a href="#"><i class="step fi-page-edit size-18 mr-5"></i>Публикувай</a></li>

        </ul>
    </section>
</nav>
</div>

    <div class="slider show-for-medium-up">
        <div class="slider-h1">Пазарувай с <span>Frendy</span></div>
        <div class="slider-h3">Проверете нашите изгодни дневни предложения</div>
        <a href="#" class="btn-shop"><button class="slider-btn"><i class="step fi-shopping-cart size-18 mr-5"></i>Пазарувай</button></a>

    </div>
<div class="show-for-medium-up">
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">

            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
            <li class="toggle-topbar "><a href="#"> <i class="step fi-magnifying-glass size-20 mr-5"></i><span>Търси</span></a></li>
        </ul>

        <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
                <li><input type="text"/></li>
                <li><a href="#" class="button"><i class="step fi-magnifying-glass size-20"></i></a></li>

            </ul>

            <!-- Left Nav Section -->
            <ul class="left">
                <li ><select class="nav-select" name="category" id="">
                        <option value="" selected>Категория</option>
                        <option value="">дрехи</option>
                        <option value="">дрехи</option>
                        <option value="">дрехи</option>
                </select></li>
            </ul>
        </section>
    </nav>
</div>
<div class="row">
    <div class="small-text-center title-home-category column small-12">Оферти За Деня</div>
</div>
<div class="row-offers">
<div class="panel-offers column">
    <div class="medium-6 small-12 large-3 columns">
<div class="offer">
            <div class="center offer-info-top">Macbook Pro</div>
            <div class="center offer-label">
                <div class="left">-70%</div>
                <div class="right-label">234лв</div>
            </div>
            <div class="img-holder"><a href="#">{{HTML::image('img/product.gif','iphone')}}</a></div>
        </div>
<div class="offer-info-bt"><div class="left">
                <a href="#"><i class="fa fi-shopping-cart size-16"></i><span class="offer-shopping-info">(12)</span></a>
                <a href="#"><i class="fa fi-heart size-16"></i><span class="offer-shopping-info">(48)</span></a>
                <a href="#"><i class="fa fi-eye large"></i><span class="offer-shopping-info">(312)</span></a>
                <span class="offer-rating"><i class="fi-star"></i><i class="fi-star"></i><i class="fi-star"></i><i
                        class="fi-star"></i><i class="fi-star"></i></span><span class="offer-shopping-info">(98%)</span>
            </div><div class="right"><i class="fa fi-list"></i></div></div>
<div class="additional-info">
    <ul class="adi-img">
        <li>{{HTML::image('img/product.gif','iphone')}}</li>
        <li>{{HTML::image('img/macbook.png','iphone')}}</li>
        <li>{{HTML::image('img/product.gif','iphone')}}</li>
        <li>{{HTML::image('img/macbook.png','iphone')}}</li>
    </ul>
    <div class="offer-text-desc">
        <h4>MacBook Pro</h4>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aspernatur assumenda, corporis, dolor
            dolore enim iste magni quas qui sapiente sed sint, unde! Blanditiis cum et molestias, nobis quibusdam vero.
    </div>
    <button class="alert tiny button">Виж Повече</button>
</div>
    </div>
    <div class="medium-6 small-12 large-3 columns">
        <div class="offer">
            <div class="center offer-info-top">Macbook Pro</div>
            <div class="center offer-label">
                <div class="left">-70%</div>
                <div class="right-label">234лв</div>
            </div>
            <div class="img-holder"><a href="#">{{HTML::image('img/product.gif','iphone')}}</a></div>
        </div>
        <div class="offer-info-bt"><div class="left">
                <a href="#"><i class="fa fi-shopping-cart size-16"></i><span class="offer-shopping-info">(12)</span></a>
                <a href="#"><i class="fa fi-heart size-16"></i><span class="offer-shopping-info">(48)</span></a>
                <a href="#"><i class="fa fi-eye large"></i><span class="offer-shopping-info">(312)</span></a>
                <span class="offer-rating"><i class="fi-star"></i><i class="fi-star"></i><i class="fi-star"></i><i
                        class="fi-star"></i><i class="fi-star"></i></span><span class="offer-shopping-info">(98%)</span>
            </div><div class="right"><i class="fa fi-list"></i></div></div>
        <div class="additional-info">
            <ul class="adi-img">
                <li>{{HTML::image('img/product.gif','iphone')}}</li>
                <li>{{HTML::image('img/macbook.png','iphone')}}</li>
                <li>{{HTML::image('img/product.gif','iphone')}}</li>
                <li>{{HTML::image('img/macbook.png','iphone')}}</li>
            </ul>
            <div class="offer-text-desc">
                <h4>MacBook Pro</h4>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aspernatur assumenda, corporis, dolor
                dolore enim iste magni quas qui sapiente sed sint, unde! Blanditiis cum et molestias, nobis quibusdam vero.
            </div>
            <button class="alert tiny button">Виж Повече</button>
        </div>
    </div>
    <div class="medium-6 small-12 large-3 columns">
        <div class="offer">
            <div class="center offer-info-top">Macbook Pro</div>
            <div class="center offer-label">
                <div class="left">-70%</div>
                <div class="right-label">234лв</div>
            </div>
            <div class="img-holder"><a href="#">{{HTML::image('img/product.gif','iphone')}}</a></div>
        </div>
        <div class="offer-info-bt"><div class="left">
                <a href="#"><i class="fa fi-shopping-cart size-16"></i><span class="offer-shopping-info">(12)</span></a>
                <a href="#"><i class="fa fi-heart size-16"></i><span class="offer-shopping-info">(48)</span></a>
                <a href="#"><i class="fa fi-eye large"></i><span class="offer-shopping-info">(312)</span></a>
                <span class="offer-rating"><i class="fi-star"></i><i class="fi-star"></i><i class="fi-star"></i><i
                        class="fi-star"></i><i class="fi-star"></i></span><span class="offer-shopping-info">(98%)</span>
            </div><div class="right"><i class="fa fi-list"></i></div></div>
        <div class="additional-info">
            <ul class="adi-img">
                <li>{{HTML::image('img/product.gif','iphone')}}</li>
                <li>{{HTML::image('img/macbook.png','iphone')}}</li>
                <li>{{HTML::image('img/product.gif','iphone')}}</li>
                <li>{{HTML::image('img/macbook.png','iphone')}}</li>
            </ul>
            <div class="offer-text-desc">
                <h4>MacBook Pro</h4>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aspernatur assumenda, corporis, dolor
                dolore enim iste magni quas qui sapiente sed sint, unde! Blanditiis cum et molestias, nobis quibusdam vero.
            </div>
            <button class="alert tiny button">Виж Повече</button>
        </div>
    </div>
    <div class="medium-6 small-12 large-3 columns">
        <div class="offer">
            <div class="center offer-info-top">Macbook Pro</div>
            <div class="center offer-label">
                <div class="left">-70%</div>
                <div class="right-label">234лв</div>
            </div>
            <div class="img-holder"><a href="#">{{HTML::image('img/product.gif','iphone')}}</a></div>
        </div>
        <div class="offer-info-bt"><div class="left">
                <a href="#"><i class="fa fi-shopping-cart size-16"></i><span class="offer-shopping-info">(12)</span></a>
                <a href="#"><i class="fa fi-heart size-16"></i><span class="offer-shopping-info">(48)</span></a>
                <a href="#"><i class="fa fi-eye large"></i><span class="offer-shopping-info">(312)</span></a>
                <span class="offer-rating"><i class="fi-star"></i><i class="fi-star"></i><i class="fi-star"></i><i
                        class="fi-star"></i><i class="fi-star"></i></span><span class="offer-shopping-info">(98%)</span>
            </div><div class="right"><i class="fa fi-list"></i></div></div>
        <div class="additional-info">
            <ul class="adi-img">
                <li>{{HTML::image('img/product.gif','iphone')}}</li>
                <li>{{HTML::image('img/macbook.png','iphone')}}</li>
                <li>{{HTML::image('img/product.gif','iphone')}}</li>
                <li>{{HTML::image('img/macbook.png','iphone')}}</li>
            </ul>
            <div class="offer-text-desc">
                <h4>MacBook Pro</h4>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aspernatur assumenda, corporis, dolor
                dolore enim iste magni quas qui sapiente sed sint, unde! Blanditiis cum et molestias, nobis quibusdam vero.
            </div>
            <button class="alert tiny button">Виж Повече</button>
        </div>
    </div>
</div>
</div>
<div class="row">
    <div class="small-text-center title-home-category column small-12">Препоръчано За Вас</div>
</div>
<div class="row-offers">
    <div class="panel-offers column">
        <div class="medium-6 small-12 large-3 columns">
            <div class="offer">
                <div class="center offer-info-top">Macbook Pro</div>
                <div class="center offer-label">
                    <div class="left">-70%</div>
                    <div class="right-label">234лв</div>
                </div>
                <div class="img-holder"><a href="#">{{HTML::image('img/product.gif','iphone')}}</a></div>
            </div>
            <div class="offer-info-bt"><div class="left">
                    <a href="#"><i class="fa fi-shopping-cart size-16"></i><span class="offer-shopping-info">(12)</span></a>
                    <a href="#"><i class="fa fi-heart size-16"></i><span class="offer-shopping-info">(48)</span></a>
                    <a href="#"><i class="fa fi-eye large"></i><span class="offer-shopping-info">(312)</span></a>
                <span class="offer-rating"><i class="fi-star"></i><i class="fi-star"></i><i class="fi-star"></i><i
                        class="fi-star"></i><i class="fi-star"></i></span><span class="offer-shopping-info">(98%)</span>
                </div><div class="right"><i class="fa fi-list"></i></div></div>
            <div class="additional-info">
                <ul class="adi-img">
                    <li>{{HTML::image('img/product.gif','iphone')}}</li>
                    <li>{{HTML::image('img/macbook.png','iphone')}}</li>
                    <li>{{HTML::image('img/product.gif','iphone')}}</li>
                    <li>{{HTML::image('img/macbook.png','iphone')}}</li>
                </ul>
                <div class="offer-text-desc">
                    <h4>MacBook Pro</h4>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aspernatur assumenda, corporis, dolor
                    dolore enim iste magni quas qui sapiente sed sint, unde! Blanditiis cum et molestias, nobis quibusdam vero.
                </div>
                <button class="alert tiny button">Виж Повече</button>
            </div>
        </div>
        <div class="medium-6 small-12 large-3 columns">
            <div class="offer">
                <div class="center offer-info-top">Macbook Pro</div>
                <div class="center offer-label">
                    <div class="left">-70%</div>
                    <div class="right-label">234лв</div>
                </div>
                <div class="img-holder"><a href="#">{{HTML::image('img/product.gif','iphone')}}</a></div>
            </div>
            <div class="offer-info-bt"><div class="left">
                    <a href="#"><i class="fa fi-shopping-cart size-16"></i><span class="offer-shopping-info">(12)</span></a>
                    <a href="#"><i class="fa fi-heart size-16"></i><span class="offer-shopping-info">(48)</span></a>
                    <a href="#"><i class="fa fi-eye large"></i><span class="offer-shopping-info">(312)</span></a>
                <span class="offer-rating"><i class="fi-star"></i><i class="fi-star"></i><i class="fi-star"></i><i
                        class="fi-star"></i><i class="fi-star"></i></span><span class="offer-shopping-info">(98%)</span>
                </div><div class="right"><i class="fa fi-list"></i></div></div>
            <div class="additional-info">
                <ul class="adi-img">
                    <li>{{HTML::image('img/product.gif','iphone')}}</li>
                    <li>{{HTML::image('img/macbook.png','iphone')}}</li>
                    <li>{{HTML::image('img/product.gif','iphone')}}</li>
                    <li>{{HTML::image('img/macbook.png','iphone')}}</li>
                </ul>
                <div class="offer-text-desc">
                    <h4>MacBook Pro</h4>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aspernatur assumenda, corporis, dolor
                    dolore enim iste magni quas qui sapiente sed sint, unde! Blanditiis cum et molestias, nobis quibusdam vero.
                </div>
                <button class="alert tiny button">Виж Повече</button>
            </div>
        </div>
        <div class="medium-6 small-12 large-3 columns">
            <div class="offer">
                <div class="center offer-info-top">Macbook Pro</div>
                <div class="center offer-label">
                    <div class="left">-70%</div>
                    <div class="right-label">234лв</div>
                </div>
                <div class="img-holder"><a href="#">{{HTML::image('img/product.gif','iphone')}}</a></div>
            </div>
            <div class="offer-info-bt"><div class="left">
                    <a href="#"><i class="fa fi-shopping-cart size-16"></i><span class="offer-shopping-info">(12)</span></a>
                    <a href="#"><i class="fa fi-heart size-16"></i><span class="offer-shopping-info">(48)</span></a>
                    <a href="#"><i class="fa fi-eye large"></i><span class="offer-shopping-info">(312)</span></a>
                <span class="offer-rating"><i class="fi-star"></i><i class="fi-star"></i><i class="fi-star"></i><i
                        class="fi-star"></i><i class="fi-star"></i></span><span class="offer-shopping-info">(98%)</span>
                </div><div class="right"><i class="fa fi-list"></i></div></div>
            <div class="additional-info">
                <ul class="adi-img">
                    <li>{{HTML::image('img/product.gif','iphone')}}</li>
                    <li>{{HTML::image('img/macbook.png','iphone')}}</li>
                    <li>{{HTML::image('img/product.gif','iphone')}}</li>
                    <li>{{HTML::image('img/macbook.png','iphone')}}</li>
                </ul>
                <div class="offer-text-desc">
                    <h4>MacBook Pro</h4>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aspernatur assumenda, corporis, dolor
                    dolore enim iste magni quas qui sapiente sed sint, unde! Blanditiis cum et molestias, nobis quibusdam vero.
                </div>
                <button class="alert tiny button">Виж Повече</button>
            </div>
        </div>
        <div class="medium-6 small-12 large-3 columns">
            <div class="offer">
                <div class="center offer-info-top">Macbook Pro</div>
                <div class="center offer-label">
                    <div class="left">-70%</div>
                    <div class="right-label">234лв</div>
                </div>
                <div class="img-holder"><a href="#">{{HTML::image('img/product.gif','iphone')}}</a></div>
            </div>
            <div class="offer-info-bt"><div class="left">
                    <a href="#"><i class="fa fi-shopping-cart size-16"></i><span class="offer-shopping-info">(12)</span></a>
                    <a href="#"><i class="fa fi-heart size-16"></i><span class="offer-shopping-info">(48)</span></a>
                    <a href="#"><i class="fa fi-eye large"></i><span class="offer-shopping-info">(312)</span></a>
                <span class="offer-rating"><i class="fi-star"></i><i class="fi-star"></i><i class="fi-star"></i><i
                        class="fi-star"></i><i class="fi-star"></i></span><span class="offer-shopping-info">(98%)</span>
                </div><div class="right"><i class="fa fi-list"></i></div></div>
            <div class="additional-info">
                <ul class="adi-img">
                    <li>{{HTML::image('img/product.gif','iphone')}}</li>
                    <li>{{HTML::image('img/macbook.png','iphone')}}</li>
                    <li>{{HTML::image('img/product.gif','iphone')}}</li>
                    <li>{{HTML::image('img/macbook.png','iphone')}}</li>
                </ul>
                <div class="offer-text-desc">
                    <h4>MacBook Pro</h4>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aspernatur assumenda, corporis, dolor
                    dolore enim iste magni quas qui sapiente sed sint, unde! Blanditiis cum et molestias, nobis quibusdam vero.
                </div>
                <button class="alert tiny button">Виж Повече</button>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    $(document).foundation().foundation('joyride', 'start');
    $('.adi-img li img').on('click',function(){
        var src = $(this).context.src;
        $(this).closest('.columns').find('.offer>.img-holder>a>img').attr('src',src);
    });
    $('.offer-info-bt .right .fi-list').on('click',function(){
        var main = $(this).closest('.columns');
            main.find('.offer-info-top').toggle();
            main.find('.additional-info').toggle();
            main.find('.offer-info-bt').toggleClass('offer-info-bt-open');
            main.find('.offer-info-bt .offer-rating').toggle();
            main.find('.offer-info-bt .offer-shopping-info').toggle();
            main.toggleClass('light-up');

        if(main.siblings().hasClass('light-up')){
            main.siblings('.light-up').find('.offer-info-top').show();
            main.siblings('.light-up').find('.additional-info').hide();
            main.siblings('.light-up').find('.offer-info-bt').toggleClass('offer-info-bt-open');
            main.siblings('.light-up').find('.offer-info-bt .offer-shopping-info').toggle();
            main.siblings('.light-up').find('.offer-info-bt .offer-rating').toggle();
        }
        main.siblings().removeClass('light-up');
        $('.additional-info li').on('click',function(){
            $(this).css('border','1px solid #4e4e4e')
                   .siblings().css('border','none');
        })
    })

</script>
</html>