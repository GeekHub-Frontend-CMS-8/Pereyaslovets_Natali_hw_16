<?php get_header(); ?>

<section class="post">
    <div class="wrap">
        <div class="post-content">
			<div class="post-content__image">
				<?php the_post_thumbnail() ?>
			</div>
            <h1><?php single_post_title(''); ?></h1>
            <div class="post-info">
                <ul class="post-info__list">
                    <li class="post-info__item"><i class="far fa-calendar-alt post-info__icon"></i>02/03/2014</li>
                    <li class="post-info__item"><i class="fas fa-comment post-info__icon"></i>201</li>
                    <li class="post-info__item"><i class="fas fa-heart post-info__icon"></i>400</li>
                </ul>
            </div>
            <div class="post-text">
                <p class="post-text__p">				
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<!-- Цикл WordPress -->
						<?php the_content(); ?>
					<?php endwhile; else : ?>
						<p>Записей нет.</p>
					<?php endif; ?>
				</p>
            </div>
            <div class="share-block">
                <div class="share-list">
                    <ul class="share-item">
                        <li class="share-text share-li"><a href="">share</a></li>
                        <li class="share-li"><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li class="share-li"><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li class="share-li"><a href=""><i class="fab fa-pinterest-p"></i></a></li>
                    </ul>
                    <div class="share-item">
                        <i class="fas fa-check"></i>
                    </div>
                </div>
            </div>
            <p class="leave">10 comments</p>
            <div class="one-comm">
                <div class="comm">
                    <div class="comm-info">
                       <span class="comment-name">
                           Robert Smith
                       </span>
                        <p class="comments-date">
                            02 June 2014, 15:20
                        </p>
                    </div>
                    <div class="">
                        <a href="" class="reply">
                            <i class="fas fa-reply"></i><span>Reply</span>
                        </a>
                    </div>
                </div>
                <div class="comment comment-first">
                    <div>
                        <a href="" class="comment-ava">
                        <i class="fas fa-user-alt"></i>
                    </a>
                    </div>
                    <div class="comment-block">
                        <p class="comment-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque molestie, purus id mollis pharetra, lacus turpis dapibus magna, eget aliquam diam erat at velit.
                        </p>
                    </div>
                </div>
            </div>
            <div class="answer-comm">
                <div class="comm">
                    <div class="comm-info">
                       <span class="comment-name">
                           Greg Rouge
                       </span>
                        <p class="comments-date">
                            02 June 2014, 15:20
                        </p>
                    </div>
                    <div class="">
                        <a href="" class="reply">
                            <i class="fas fa-reply"></i><span>Reply</span>
                        </a>
                    </div>
                </div>
                <div class="comment comment-first__answer">
                    <div>
                        <a href="" class="comment-ava">
                            <i class="fas fa-user-alt"></i>
                        </a>
                    </div>
                    <div class="comment-block">
                        <p class="comment-text">
                            2Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque molestie, purus id mollis pharetra, lacus turpis dapibus magna, eget aliquam diam erat at velit.
                        </p>
                    </div>
                </div>
            </div>
            <div class="one-comm">
                <div class="comm">
                    <div class="comm-info">
                       <span class="comment-name">
                           Ely Grogoelar
                       </span>
                        <p class="comments-date">
                            02 June 2014, 15:20
                        </p>
                    </div>
                    <div class="">
                        <a href="" class="reply">
                            <i class="fas fa-reply"></i><span>Reply</span>
                        </a>
                    </div>
                </div>
                <div class="comment comment-first">
                    <div>
                        <a href="" class="comment-ava">
                            <i class="fas fa-user-alt"></i>
                        </a>
                    </div>
                    <div class="comment-block">
                        <p class="comment-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque molestie, purus id mollis pharetra, lacus turpis dapibus magna, eget aliquam diam erat at velit.
                        </p>
                    </div>
                </div>
            </div>
                <p class="leave">Leave a comment</p>
            <div class="container-form__form">
                <div class="contact-form__forms">
                    <div class="contact-form__fields">
                       <?php if (is_singular ('portfolio')) comments_template (); ?>
                    </div>
                </div>
            </div>
            <p class="text-after">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mattis semper nisl, vitae malesuada massa egestas a. Vestibulum vestibulum urna sapien, eu bibendum magna ornare non.</p>
        </div>
    </div>
</section>
<div class="informer">
    <div class="wrap">
        <div class="informer-list">
            <div class="informer-item inf">
                <img src="img/informer.png" alt="" class="informer-item__image">
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
				<?php the_widget('WP_Widget_Categories'); ?>
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

<?php get_footer();
