<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name') ?></title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed" rel="stylesheet">
    <link type="text/css" rel="StyleSheet" href="<?php bloginfo('stylesheet_url') ?>"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="  crossorigin="anonymous"></script>
	<?php wp_head();?>
</head>
<body>
<header id="myHeader">
    <div class="wrap">
        <div class="header-container">
            <div class="header__menu menu">
                <div class="topnav" id="openMenu">
                    <span class="topnav__item topnav__item--top"></span>
                    <span class="topnav__item topnav__item--middle"></span>
                    <span class="topnav__item topnav__item--bottom"></span>
                </div>
				<?php wp_nav_menu (array('theme_location'=>'menu', 'menu_class'=>'menu-list') ); ?>
                <!--<nav class="menu-list menu__menu-list" id="menu">
                    <ul class="menu-list__links">
                        <li class="menu-list__item"><a href="" class="link menu-list__link">Portfolio</a></li>
                        <li class="menu-list__item"><a href="" class="link menu-list__link">Clients</a></li>
                        <li class="menu-list__item"><a href="" class="link menu-list__link">News</a></li>
                        <li class="menu-list__item"><a href="" class="link menu-list__link">About me</a></li>
                        <li class="menu-list__item"><a href="" class="link menu-list__link">Contact</a></li>
                    </ul>
                </nav>-->
            </div>
			
            <img src="img/square_logo.png" alt="" class="header-logo">
            <ul class="header-socials soc">
                <li>
                    <a href="" class="header-socials__icon"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href="" class="header-socials__icon"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                    <a href="" class="header-socials__icon"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                    <a href="" class="header-socials__icon"><i class="fab fa-flickr"></i></a>
                </li>
                <li>
                    <a href="" class="header-socials__icon"><i class="fab fa-google-plus-g"></i></a>
                </li>
                <li>
                    <a href="" class="header-socials__icon"><i class="fas fa-envelope"></i></a>
                </li>
            </ul>
        </div>
    </div>
</header>