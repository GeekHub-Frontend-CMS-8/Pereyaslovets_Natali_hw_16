<?php get_header();?>
<div class="hero">
    <div class="wrap">
        <ul class="blog-list">
            <li class="blog-item">
                <?php $args = array( 'post_type' => 'blog', 'posts_per_page' => 6 );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();				  
						  echo '<li class="blog-item">';
						  the_post_thumbnail('medium', array('class' => 'blog-item__image'));
						  echo '<div class="blog-brief"><h4>';
						  the_title();
						  echo '</h4><p class="blog-text">';
						  the_excerpt();						  
						  echo '</p><a href="';
						  the_permalink();
						  echo '" class="blog-read__more"/>Read more</a><ul class="info-post__blog"><li class="info-post__blog--item"><i class="far fa-calendar-alt post-info__icon"></i>';
						  the_time('j m Y');						
                          echo '</li><li class="info-post__blog--item"><i class="fas fa-comment post-info__icon"></i>14</li>
                    </ul>
                </div>
            </li>';
						endwhile;
					?>
            </li>
        </ul>
    </div>
</div>
<?php get_footer();?>