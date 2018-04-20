<?php /* Template Name: Sentences */ ?>
<?php get_header();?>

<section>
    <div class="container">
        <div class="row">
            <div class="row">
               
               <div class="col-sm-3">
               
                 <h2 style="margin-top:0;"># Nổi bật </h2>
  <ul class="list-group sidebar-blog" >
    <?php
	$args=array(
	'post_type' => 'sentence',
	'orderby' => 'ID',
	'order'   => 'DESC',
	'post__in' => array('985'),
	'posts_per_page'=>5
);
	$query = new WP_Query( $args);
?>
    <?php if ( $query->have_posts() ) : ?>
    <?php while ( $query->have_posts() ) : $query->the_post();?>
    <li class="list-group-item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?>
      </a>
    </li>
    <?php endwhile; ?>
    <?php  wp_reset_query(); ?>
    <?php  endif; ?>
  </ul>
  
               <hr/>
               
               
           
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
               
               
                <div class="col-sm-7">
                    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; $args = array('post_type' => 'sentence',  'orderby' => 'ID', 'order'   => 'DESC', 'paged' => $paged, 'posts_per_page'=>20); query_posts($args);?>
                    <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                    
                   <!-- note -->
                   
                   <article class="article-item col-sm-12" id="<?php the_ID(); ?>">
  <div class="article-info" style="padding-left:15px;border-left:2px solid #337ab7;margin-top:10px;">
    
    <a href="<?php the_permalink(); ?>" style="text-decoration:none;"><?php the_title(); ?></a>
    
    
    
       <div class="con_senten" style="margin-top:0px; line-height:160%; margin-top:10px;">
    
    <?php  the_content(); ?>
    </div>
  

     <span class="label label-success">
      <?php the_author(); ?>
      </span>  <br>
<br>

  
  </div>
  <hr style="border-color:#d2e9f9; margin:0;">
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

<?php get_footer(); ?>
