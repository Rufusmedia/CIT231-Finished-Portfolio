<?php get_header(); ?>



    <div class="main">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
          <?php if(has_post_thumbnail()): ?>
            <section class="feature">
              <?php the_post_thumbnail('full') ?>
            </section><!--/.feature-->
          <?php endif; ?>
          <section class="text">
            <?php the_content(); ?>
            <?php the_field('page_subtitle'); ?>
          </section><!--/.feature-->
        </article>
      <?php endwhile; endif; ?>


		<?php 
        
        $posts = get_field('cta_chooser', 'options');
        
        if( $posts ): ?>
            <div class="cta row">
            <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                <?php setup_postdata($post); ?>
                <div class="col-1-3">
                    <a href="<?php the_permalink(); ?>">
                    	<?php the_post_thumbnail('medium'); ?>
                    </a>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </div><!--/.col-1-3-->
            <?php endforeach; ?>
            </div><!--/.cta-->
            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>


<?php get_footer(); ?>