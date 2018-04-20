<?php /* Template Name: Accounts */ ?>
<?php get_header();?>
<style>
.alert p, .alert {font-size:14px;}
.alert { color: #000; box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.2), 0 1px 5px 0 rgba(0,0,0,0.12) !important; border: none; }
.alert p strong:first-child { text-transform: uppercase; font-size:13px;}
.alert-warning { background: #FFF2B5; }
#info hr { margin: 5px 0; border-color: #a9932e !important; }
</style>
<section>
    <div class="container">
        <div class="row">
            <div class="row">
                 
                <div class="col-sm-10">
                <?php if ( have_posts() ) :  ?>
<?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; ?>
    <?php  wp_reset_query(); ?>
<?php  endif; ?>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
