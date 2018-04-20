<?php get_header();?>

<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-9">
        <h2>Kết quả tìm kiếm phù hợp với từ khóa : "<?php echo get_search_query(); ?>"</h2>
        <?php if ( have_posts() ) :  ?>
        <?php while ( have_posts() ) : the_post(); ?>
       
        <?php get_template_part( 'content', 'post' ); ?>
       
        <?php endwhile; ?>
        <div class="wrap-pagenavi">
          <?php wp_pagenavi(); ?>
        </div>
        <?php  wp_reset_query(); ?>
        <?php else:  echo '<h2>Xin lỗi, không có kết quả phù hợp với từ khóa "'.get_search_query().'"</h2>';   endif; ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>
