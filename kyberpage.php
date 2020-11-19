<!DOCTYPE html>
<html lang="ru-RU" class="no-js no-svg">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>
    <title>Киберспорт &#8212;</title>

    <script>
        window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/zakharov2.zzz.com.ua\/wprs\/wordpress\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.5.3"}};
        !function(e,a,t){var r,n,o,i,p=a.createElement("canvas"),s=p.getContext&&p.getContext("2d");function c(e,t){var a=String.fromCharCode;s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,e),0,0);var r=p.toDataURL();return s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,t),0,0),r===p.toDataURL()}function l(e){if(!s||!s.fillText)return!1;switch(s.textBaseline="top",s.font="600 32px Arial",e){case"flag":return!c([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])&&(!c([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!c([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]));case"emoji":return!c([55357,56424,8205,55356,57212],[55357,56424,8203,55356,57212])}return!1}function d(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(i=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},o=0;o<i.length;o++)t.supports[i[o]]=l(i[o]),t.supports.everything=t.supports.everything&&t.supports[i[o]],"flag"!==i[o]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[i[o]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(r=t.source||{}).concatemoji?d(r.concatemoji):r.wpemoji&&r.twemoji&&(d(r.twemoji),d(r.wpemoji)))}(window,document,window._wpemojiSettings);
    </script>
    <style>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' href='style.css' media='all' />

</head>

<body class="page-template-default page page-id-31 wp-embed-responsive has-header-image page-two-column colors-light">
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">Перейти к содержимому</a>

    <header id="masthead" class="site-header" role="banner">

        <div class="custom-header">

            <div class="custom-header-media">
                <div id="wp-custom-header" class="wp-custom-header"><img src="imges/back.jpg" width="2000" height="1200" alt="gamerule1" srcset="imges/back.jpg 2000w, imges/back.jpg 300w, imges/back.jpg 1024w, imges/back.jpg 768w, imges/back.jpg 1536w" sizes="100vw" /></div>
            </div>
            <div style="display: block; padding: 5% 0; z-index: 3; position: relative;"></div>

        </div>

        <div class="navigation-top">
            <div class="wrap">
                <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Верхнее меню">
                    <button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
                        <svg class="icon icon-bars" aria-hidden="true" role="img"> <use href="#icon-bars" xlink:href="#icon-bars"></use> </svg><svg class="icon icon-close" aria-hidden="true" role="img"> <use href="#icon-close" xlink:href="#icon-close"></use> </svg>Меню	</button>

                    <div class="menu-sc2-container"><ul id="top-menu" class="menu"><li id="menu-item-15" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-15"><a href="/">Главная</a></li>
                            <li id="menu-item-13" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13"><a href="newspage.php">Новости</a></li>
                            <li id="menu-item-33" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-31 current_page_item menu-item-33"><a href="kyberpage.php" aria-current="page">Киберспорт</a></li>
                            <li style="float: right;" class="menu-item menu-item-type-post_type menu-item-object-page"><div style="width: auto; height: auto; border: 1px solid black;">
                                    <?php
                                    if(isset($_COOKIE['userregisterd']))
                                        echo '<a href="enter.php?out=1">'.$_COOKIE['userregisterd'].'</a>';
                                    else
                                        echo '<a href="enter.php">'.'Войти'.'</a>';
                                    ?>
                                </div></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="toshare.php">Поделиться</a></li>
                        </ul></div>
                </nav><!-- #site-navigation -->
            </div><!-- .wrap -->
        </div><!-- .navigation-top -->

    </header><!-- #masthead -->


    <div class="site-content-contain">
        <div id="content" class="site-content">

            <div class="wrap">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">


                        <article id="post-31" class="post-31 page type-page status-publish hentry">
                            <header class="entry-header">
                                <h1 class="entry-title">Киберспорт</h1>			</header><!-- .entry-header -->
                            <div class="entry-content">

                                <figure class="wp-block-image size-large"><img loading="lazy" width="840" height="473" src="imges/wcs.jpg" alt="" class="wp-image-49" srcset="imges/wcs.jpg 840w, imges/wcs.jpg 300w, imges/wcs.jpg 768w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px" /></figure>



                                <p style="font-size: 22px;">Новый фонд WCS составит  1млрд долларов в 2021 году!</p>



                                <p></p>
                            </div>
                        </article>

                    </main>
                </div>
            </div>


        </div>

        <footer id="colophon" class="site-footer" role="contentinfo">
            <div class="wrap">


            </div><!-- .wrap -->
        </footer><!-- #colophon -->
    </div><!-- .site-content-contain -->
</div><!-- #page -->
<script id='twentyseventeen-skip-link-focus-fix-js-extra'>
    var twentyseventeenScreenReaderText = {"quote":"<svg class=\"icon icon-quote-right\" aria-hidden=\"true\" role=\"img\"> <use href=\"#icon-quote-right\" xlink:href=\"#icon-quote-right\"><\/use> <\/svg>","expand":"\u0420\u0430\u0441\u043a\u0440\u044b\u0442\u044c \u0434\u043e\u0447\u0435\u0440\u043d\u0435\u0435 \u043c\u0435\u043d\u044e","collapse":"\u0421\u0432\u0435\u0440\u043d\u0443\u0442\u044c \u0434\u043e\u0447\u0435\u0440\u043d\u0435\u0435 \u043c\u0435\u043d\u044e","icon":"<svg class=\"icon icon-angle-down\" aria-hidden=\"true\" role=\"img\"> <use href=\"#icon-angle-down\" xlink:href=\"#icon-angle-down\"><\/use> <span class=\"svg-fallback icon-angle-down\"><\/span><\/svg>"};
</script>



<!--<div class="cumf_bt_form_wrapper" style="display:none">-->
<!--    <form id="contact_us_mail_feedback" action="/oldTi9QvqM6ytokU9Q8ylQq" method="post">-->
<!--        <fieldset>-->
<!--          Form Name -->
<!--            <legend>Contact Us</legend>-->
<!--           Text input-->
<!--            <div class="cumf_bt_form-group">-->
<!--                <label class="col-md-4 cumf_bt_control-label" for="cumf_bt_name">name</label>-->
<!--                <div class="col-md-4">-->
<!--                    <input id="cumf_bt_name" name="cumf_bt_name" type="text" placeholder="your name" class="cumf_bt_form-control cumf_bt_input-md-->
<!--" required="1"/>-->
<!--                    <span class="cumf_bt_help-block">Please enter your name</span>-->
<!--                </div>-->
<!--            </div>-->
<!--           Text input-->
<!--            <div class="cumf_bt_form-group">-->
<!--                <label class="col-md-4 cumf_bt_control-label" for="cumf_bt_email">your email</label>-->
<!--                <div class="col-md-4">-->
<!--                    <input id="cumf_bt_email" name="cumf_bt_email" type="text" placeholder="enter your email" class="cumf_bt_form-control cumf_bt-->
<!--_input-md" required="1"/>-->
<!--                    <span class="cumf_bt_help-block">please enter your email</span>-->
<!--                </div>-->
<!--            </div>-->
<!--          Textarea -->
<!--            <div class="cumf_bt_form-group">-->
<!--                <label class="col-md-4 cumf_bt_control-label" for="cumf_bt_message">your message</label>-->
<!--                <div class="col-md-4">-->
<!--                    <textarea class="cumf_bt_form-control" id="cumf_bt_message" name="cumf_bt_message">Message goes here</textarea>-->
<!--                </div>-->
<!--            </div>-->
<!--            <input type="submit" id="cumf_bt_submit" value="Send"/>-->
<!--        </fieldset>-->
<!--    </form>-->
<!--</div>-->
</body>
</html>
<!-- zzz </body><!-->
