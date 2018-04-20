<?php /* Template Name: Home */ ?>
<?php get_header();?>
<section>
    <div class="container">
        <div class="row">
            <div class="row">
                 <?php get_sidebar('left'); ?>
                <div class="col-sm-7">
                    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; $args = array('post_type' => 'post', 'cat' => -1,  'orderby' => 'date', 'order'   => 'DESC', 'paged' => $paged); query_posts($args);?>
                    <?php if ( have_posts() ) : ?>
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
