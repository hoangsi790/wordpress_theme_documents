<?php get_header();?>
<section>
  <div class="container">
    <div class="row">
        <div class="row">
      <?php get_sidebar('left'); ?>
      <div class="col-sm-7">
        <h1 style="line-height: 140%;
    border: none;
    padding: 0;
    font-weight: bold; margin-top:0;"># <?php 
// Get current author.
$curauth = ( isset( $_GET['author_name'] ) ) ? get_user_by( 'slug', $author_name ) : get_userdata( intval($author ) );
?>

<?php echo $curauth->display_name; ?></h1>
    <hr style="margin-top:0;">
        <?php if ( have_posts() ) :  ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', 'post' ); ?>
        <?php endwhile; ?>
        <div class="wrap-pagenavi">
          <?php wp_pagenavi(); ?>
        </div>
        <?php  wp_reset_query(); ?>
        <?php  endif; ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
  </div>
</section>
<?php get_footer(); ?>