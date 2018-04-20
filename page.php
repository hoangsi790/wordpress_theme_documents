<?php get_header();?>

<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-9">
        <?php if ( have_posts() ) :  ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <h2>
          <?php the_title(); ?>
        </h2>
        <?php the_content();  ?>
        <?php endwhile; ?>
        <?php  wp_reset_query(); ?>
        <?php  endif; ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>
