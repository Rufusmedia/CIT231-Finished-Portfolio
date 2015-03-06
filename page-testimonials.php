<?php get_header(); ?>

    <div class="main blogroll">
      <h1>My Testimonials</h1>
      
      
      
      
      <?php
	  	$args = array( 'post_type' => 'testimonials', 'posts_per_page' => -1 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <article>
            
                <section class="feature">
                  <img src="<?php the_field('testimonial_image') ?>" alt="A photo of someone.">
                </section><!--/.feature-->
              
              <section class="text">
                <h2><?php the_field('testimonial_name'); ?></h2>
            <div class="meta">Service Date: <?php the_field('testimonial_date'); ?></div><!-- /.meta -->
                <?php the_field('testimonial_text'); ?>
              </section><!--/.feature-->
            </article>
	  <?php endwhile; ?>

  

<?php get_footer(); ?>