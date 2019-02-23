<?php get_header();?>
    <div class="hero">
        <div class="wrap">
		<ul class="hero-list">
                <li class="hero-item hero-item__text">
                    <span class="hero-text__name">portfolio</span>
                    <span class="hero-text__about">gallery three</span>
                </li>
					<?php $args = array( 'post_type' => 'portfolio', 'posts_per_page' => 8 );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();				  
						  echo '<li class="hero-item">';
						  the_post_thumbnail('medium', array('class' => 'hero-item__image'));
						  echo '<div class="hero-item__hover">
								<ul class="icon-hover">
									<li><a href="#"><i class="fas fa-search-plus"></i></a></li>
									<li><a href=" ';
						  the_permalink();
						  echo '"><i class="far fa-hand-pointer"></i></a></li>
								</ul>
							</div>
						</li>';
									
						endwhile;
					?>
            </ul>
        </div>
    </div>
<?php get_footer();?>