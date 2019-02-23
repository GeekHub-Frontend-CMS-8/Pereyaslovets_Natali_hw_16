<?php
/* Template Name: Page Blog*/
?>

<?php get_header();?>

<section class="post">
    <div class="wrap">
            
			
			<?php 
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post(); 
						the_content();
					} // end while
				} // end if
?>
			
    </div>
</section>
<div class="informer">
    <div class="wrap">
        <div class="informer-list">
            <div class="informer-item inf">
                <img src="<?php bloginfo('template_url')?>/img/informer.png" alt="" class="informer-item__image">
                <div class="informer-item__about">
                    <span class="informer-item__about-text">fashion workshop</span>
                    <span class="informer-item__about-date">NOV 21-23</span>
                    <span class="informer-item__about-time">9:00am - 4:00pm</span>
                    <div class="informer-item__about__square">
                        rsvp
                    </div>
                </div>
            </div>
            <div class="informer-item inf">
                <h2>REcent post</h2>
                <ul class="recent-list">
                    <li class="recent-item">
                        <img src="<?php bloginfo('template_url')?>/img/recent_post1.png" alt="" class="recent-item__image">
                        <div class="recent-item__post">
                            <h3>New Gallery Set</h3>
                            <span class="recent-item__date">09.12.2014</span>
                            <p class="recent-item__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Quisque fringilla mi orci, ac venenatis ante venenatis eget.
                                <a href="" class="read-more">Read more</a>
                            </p>
                        </div>
                    </li>
                    <li class="recent-item">
                        <img src="<?php bloginfo('template_url')?>/img/recent_post2.png" alt="" class="recent-item__image">
                        <div class="recent-item__post">
                            <h3>wedding workshop</h3>
                            <span class="recent-item__date">09.12.2014</span>
                            <p class="recent-item__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Quisque fringilla mi orci, ac venenatis ante venenatis eget.<a href="" class="read-more">Read more</a>
                            </p>
                        </div>
                    </li>
                    <li class="recent-item">
                        <img src="<?php bloginfo('template_url')?>/img/recent_post3.png" alt="" class="recent-item__image">
                        <div class="recent-item__post">
                            <h3>Personal Project</h3>
                            <span class="recent-item__date">09.12.2014</span>
                            <p class="recent-item__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Quisque fringilla mi orci, ac venenatis ante venenatis eget.<a href="" class="read-more">Read more</a></p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="informer-item">
                <div class="info-square  contacts">
                    <div>
                        <img src="<?php bloginfo('template_url')?>/img/logo_black.png" alt="" class="logo-black">
                    </div>
                    <div class="soc-block">
                        <div class="phone-envelope">
                            <span class="phone"><i class="fas fa-phone-square ic"></i>+ 00 123 456 7890</span>
                            <span class="envelope"><i class="fas fa-envelope ic"></i>info@square.com</span>
                        </div>
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
                        </ul>
                    </div>
                </div>
                <div class="twitter-ico">
                    <a href="" class="header-socials__icon"><i class="fab fa-twitter tw"></i></a>
                </div>
                <p class="text-about">
                    Unerdwear cookie liquorice. Cake donut cupcake lollipop soufflé candy. Chocolate oat cake
                    <span class="cheesecake">@cheesecake</span> tootsie roll.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="partners">
    <div class="wrap">
        <ul class="partners-list">
            <li class="partners-item">
                <img src="<?php bloginfo('template_url')?>/img/phaseone_logo.png" alt="">
            </li>
            <li class="partners-item">
                <img src="<?php bloginfo('template_url')?>/img/manfrotto_logo.png" alt="">
            </li>
            <li class="partners-item">
                <img src="<?php bloginfo('template_url')?>/img/hasselblad.png" alt="">
            </li>
            <li class="partners-item">
                <img src="<?php bloginfo('template_url')?>/img/broncolor_logo.png" alt="">
            </li>
        </ul>
    </div>
</div>
<?php get_footer();?>