<?php get_header();?>

<?php if ( get_post_type() == 'post' ) { ?>
    <section>
  <div class="container">
    <div class="row">
        <div class="row">
      <?php get_sidebar('left'); ?>
      <div class="col-sm-7">
        <h1 style="line-height: 140%;
    border: none;
    padding: 0;
    font-weight: bold; margin-top:0;"># <?php echo single_cat_title( '', false  ); ?></h1>
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
<?php } elseif ( get_post_type() == 'note' ) { ?>
	<section>
    <div class="container">
        <div class="row">
            <div class="row">
               
               <div class="col-sm-2">
               
           
<div class=" tagclouds" style="margin-bottom:20px;display:block;">
<?php
$args_terms = array( 
	'taxonomy' => 'note_tag',
	'hide_empty' => 0
); 
$terms = get_terms( $args_terms ); if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
	foreach ( $terms as $term ) { ?>
        <a href="<?php echo esc_url(get_term_link($term));?>" >
		   <?php echo $term->name; ?>
		  
		</a>  
    <?php }
} ?>
<div class="clearfix"></div>
</div>
               </div>
               
               
                <div class="col-sm-8">
                 <h1 style="line-height: 140%;
    border: none;
    padding: 0;
    font-weight: lighter; margin-top:0;"># <?php echo single_cat_title( '', false  ); ?></h1>
    <hr style="margin-top:0;">
                 <?php if ( have_posts() ) :  ?>
        <?php while ( have_posts() ) : the_post(); ?>
                    
                   <!-- note -->
                   
                   <article class="article-item col-sm-3" id="<?php the_ID(); ?>">
  <div class="article-info" style="padding-left:15px;border-left:2px solid #337ab7;margin-top:10px;">
    
    <a href="<?php the_permalink(); ?>" style="text-decoration:none;cursor:default;"><?php the_title(); ?></a>
    
    
    
       <div class="content-blog" style="margin-top:0px;">
    <?php  the_content(); ?>
    </div>
  
  </div>
  <hr style="border-color:#d2e9f9">
</article>

                   
                   <!-- end note -->
                    
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


<?php } elseif ( get_post_type() == 'sentence' ) { ?>
	<section>
    <div class="container">
        <div class="row">
            <div class="row">
               
               <div class="col-sm-2">
               
           
<div class=" tagclouds" style="margin-bottom:20px;display:block;">
<?php
$args_terms = array( 
	'taxonomy' => 'tu-khoa',
	'hide_empty' => 0
); 
$terms = get_terms( $args_terms ); if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
	foreach ( $terms as $term ) { ?>
        <a href="<?php echo esc_url(get_term_link($term));?>" >
		   <?php echo $term->name; ?>
		  
		</a>  
    <?php }
} ?>
<div class="clearfix"></div>
</div>
               </div>
               
               
                <div class="col-sm-8">
                 <h1 style="line-height: 140%;
    border: none;
    padding: 0;
    font-weight: lighter; margin-top:0;"># <?php echo single_cat_title( '', false  ); ?></h1>
    <hr style="margin-top:0;">
                 <?php if ( have_posts() ) :  ?>
        <?php while ( have_posts() ) : the_post(); ?>
                    
                   <!-- note -->
                   
                   <article class="article-item col-sm-12" id="<?php the_ID(); ?>">
  <div class="article-info" style="padding-left:15px;border-left:2px solid #337ab7;margin-top:10px;">
    
    <a href="<?php the_permalink(); ?>" style="text-decoration:none;cursor:default;"><?php the_title(); ?></a>
    
    
    
       <div class="con_senten" style="margin-top:0px; line-height:160%; margin-top:10px;">
    <?php  the_content(); ?>
  
    </div>
        <span class="label label-success">
      <?php the_author(); ?>
      </span>  <br>
<br>
  
  </div>
  <hr style="border-color:#d2e9f9">
</article>

                   
                   <!-- end note -->
                    
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

<?php } ?>






<?php get_footer(); ?>
