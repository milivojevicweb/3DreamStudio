<!DOCTYPE html>
<html itemscope="" itemtype="http://schema.org/WebPage" lang="sr">
    <head>

        <title>3DREAM | @yield('title') </title><!-- 35-65 characters-->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--70-320 characters.--><meta name="description" content="MARCO is one of the country’s most celebrated restaurants; the creation of leading Serbian restaurant group, Fink, and Executive Chef Marko Milivojevic.">
        <meta name="keywords" content="marco,menu,restaurant,food,dessert,drink">
        <meta name="author" content="Marko Milivojevic">
        <meta name="robots" content="index, follow">
        <link rel="icon" href="{{ asset('images/icon.ico')}}">

        <link rel="canonical" href="{{ url('/')}}" />

        <!-- og-->
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="MARCO RESTAURANT">
        <meta property="og:title" content="MARCO RESTAURANT | FOOD, DESSERT, DRINK" />
        <meta property="og:description" content="MARCO is one of the country’s most celebrated restaurants; the creation of leading Serbian restaurant group, Fink, and Executive Chef Marko Milivojevic." />
        <meta property="og:url" content="http://marco-restaurant.epizy.com//index.php" />
        <meta property="og:image" content="{{ asset('images/ogImage.png') }}">
        <meta property="og:locale" content="sr-RS">
        <meta property="og:country-name" content="sr">
        <!-- og-->
        <meta itemprop="name" content="MARCO RESTAURANT">
        <meta itemprop="image" content="{{ asset('images/ogImage.png') }}">
        <meta itemprop="url" content="http://marco-restaurant.epizy.com//index.php">
        <meta itemprop="description" content="MARCO is one of the country’s most celebrated restaurants; the creation of leading Serbian restaurant group, Fink, and Executive Chef Marko Milivojevic.">
        <meta itemprop="keywords" content="marco,menu,restaurant,food,dessert,drink">
        <!--twitter-->
        <meta name="twitter:card" content="Summary">
        <meta name="twitter:site" content="@marco">
        <meta name="twitter:creator" content="@marco">
        <meta name="twitter:title" content="MARCO RESTAURANT | FOOD, DESSERT, DRINK">
        <meta name="twitter:description" content="MARCO is one of the country’s most celebrated restaurants; the creation of leading Serbian restaurant group, Fink, and Executive Chef Marko Milivojevic.">
        <meta name="twitter:image" content="{{ asset('images/ogImage.png') }}">
        <!--twitter-->

        <link rel="apple-touch-icon" href="{{ asset('images/appleIcon.png')}}">
        <meta name="theme-color" content="#eeeeee"/>


        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>

    </head>

    <body>

        <div id="errrocontainer">
            <div class="mars"></div>
            <img src="https://assets.codepen.io/1538474/404.svg" alt="3dream" class="logo-404" />
            <img src="https://assets.codepen.io/1538474/meteor.svg" alt="3dream" class="meteor" />
            <p class="title">Ooo ne!</p>
            <p class="subtitle">
                Ova stranica ne postoji!
            </p>
            <div>
                <a class="btn-back" href="{{ url('/')}}">Početna strana</a>
            </div>
            <img src="https://assets.codepen.io/1538474/astronaut.svg" alt="3dream" class="astronaut" />
            <img src="https://assets.codepen.io/1538474/spaceship.svg" alt="3dream" class="spaceship" />
        </div>
    </body>
</html>
