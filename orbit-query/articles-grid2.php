<ul id="<?php _e( $atts['id'] );?>" data-target="<?php _e('li.orbit-article');?>" data-url="<?php _e( $atts['url'] );?>" class="article-list two-list list-unstyled">
  <?php while( $this->query->have_posts() ) : $this->query->the_post();?>
	<li class="orbit-article"><?php get_template_part( 'partials/content', 'article' );?></li>
  <?php endwhile;?>
</ul>

<!-- To use the template add the shortcode given below-->

<!-- [orbit_query style="grid2" post_type="post" posts_per_page="-1"] -->
