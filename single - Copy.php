


<?php get_header();?>
<?php if ( get_post_type(  ) == 'post' ) { ?>
<section>
  <div class="container">
    <div class="row">
        <div class="row">
    
    
      <?php get_sidebar('left'); ?>
    
      <div class="col-sm-7">
        <?php if ( have_posts() ) :  ?>
        <?php while ( have_posts() ) : the_post(); ?>
       <article class="article-item" id="<?php the_ID(); ?>" style="margin-bottom:40px; min-height:139px;">
  <div class="article-info">
    <?php /*?><div class="article-datetime">
      <span>
      <?php the_time('d') ; ?>
      </span>
      <p>
        <?php the_time('m/Y') ; ?>
      </p>
      <div class="post_cat"><?php the_category( ' ' ); ?></div>
    </div><?php */?>
    
    
    
    
    
    
    <h1># <?php the_title(); ?></h1>
    <div class="article-terms">
    
    
    <i class="fa fa-calendar" aria-hidden="true"></i> <?php the_time('d/m/Y') ; ?> &nbsp; &nbsp;
    
    <i class="fa fa-align-left" aria-hidden="true"></i>
      <?php the_category( ', ' ); ?> &nbsp; &nbsp;
    
    
      <i class="fa fa-tags" aria-hidden="true"></i>
     <?php the_tags( '', ', ', '' ); ?> &nbsp; &nbsp;
      <i class="fa fa-user" aria-hidden="true"></i>
      <a href="javascript:void(0);">
      <?php the_author(); ?>
      </a>
      <hr>
    
      <div class="content-blog">
   <?php the_content(); ?>
  </div>
  
  <hr>
  <div class="wrapper-comment">
 
  </div>
  
  </div>

</article>

<?php $id_post = ''; $id_post =  get_the_ID(); ?>


<div class="related_post" >
<h2>Bài viết liên quan</h2>
<ul class="list-group sidebar-blog" style="padding-left:15px;">

<?php


$terms = get_the_terms($id_post, 'category' );
if ( $terms && ! is_wp_error( $terms ) ) :  
$arr_term = array();
foreach ( $terms as $term ) { ?>
        <?php $arr_term[] = $term->term_id; ?>
    <?php }
endif; ?>

    <?php 
	
	 $exclude = array(get_the_ID());

	$args=array(
	'post_type' => 'post', 
	'orderby' => 'rand', 
	'order'   => 'DESC', 
	'post__not_in'   => $exclude,
	'cat' =>  $arr_term,
	'posts_per_page'=>9);
	$query = new WP_Query( $args); 
?>
    <?php if ( $query->have_posts() ) : ?>
    <?php while ( $query->have_posts() ) : $query->the_post();?>
    <li class="list-group-item"># <a href="<?php the_permalink(); ?>"><?php the_title(); ?>
      </a>
    </li>
    <?php endwhile; ?>
    <?php  wp_reset_query(); ?>
    <?php  endif; ?>
  </ul>

</div>



<div class="related_post" >
<h2>Hỏi đáp liên quan</h2>
<ul class="list-group sidebar-blog" style="padding-left:15px;">
    <?php 
	$args=array(
	'post_type' => 'hoi-dap', 
	'orderby' => 'rand', 
	'order'   => 'DESC', 
	'posts_per_page'=>9);
	$query = new WP_Query( $args); 
?>
    <?php if ( $query->have_posts() ) : ?>
    <?php while ( $query->have_posts() ) : $query->the_post();?>
    <?php   $relationship_cats = get_field('relationship_cat'); 

if($relationship_cats ) {
	foreach ( $relationship_cats as $relationship_cat ) {     ?>
    

<?php $terms = get_the_terms( $id_post, 'category' ); if ( $terms && ! is_wp_error( $terms ) ) :  
foreach ( $terms as $term ) { ?>
        <?php if($relationship_cat==$term->term_id) { ?>
          <li class="list-group-item"># <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
          <?php } ?>
<?php } endif; ?>


    <?php }  } ?>
	
   
    
  
    <?php endwhile; ?>
    <?php  wp_reset_query(); ?>
    <?php  endif; ?>
  </ul>

</div>





        <?php endwhile; ?>
        <?php  wp_reset_query(); ?>
        <?php  endif; ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
  </div>
</section>
<?php } else if( get_post_type( get_the_ID() ) == 'note' ) { ?>
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
        <?php if ( have_posts() ) :  ?>
        <?php while ( have_posts() ) : the_post(); ?>
           <!-- note -->
                   
                   <article class="article-item col-sm-12" id="<?php the_ID(); ?>">
  <div class="article-info" style="padding-left:15px;border-left:2px solid #337ab7;margin-top:10px;">
    
    <a href="javascript:void(0);" style="text-decoration:none;cursor:default;"><?php the_title(); ?></a>
    
    
    
       <div class="content-blog" style="margin-top:0px;">
    <?php  the_content(); ?>
    </div>
  
  </div>
  <hr style="border-color:#d2e9f9">
</article>

                   
                   <!-- end note -->
                   
                  
        <?php endwhile; ?>
        <?php  wp_reset_query(); ?>
        <?php  endif; ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
  </div>
</section>
<?php } else if( get_post_type( get_the_ID() ) == 'sentence' ) { ?>
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
        <?php if ( have_posts() ) :  ?>
        <?php while ( have_posts() ) : the_post(); ?>
           <!-- note -->
                   
                   <article class="article-item col-sm-12" id="<?php the_ID(); ?>">
  <div class="article-info" style="padding-left:15px;border-left:2px solid #337ab7;margin-top:10px;">
    
    <a href="javascript:void(0);" style="text-decoration:none;cursor:default;"><?php the_title(); ?></a>
    
    
    
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
        <?php  wp_reset_query(); ?>
        <?php  endif; ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
  </div>
</section>
<?php } else if( get_post_type( get_the_ID() ) == 'hoi-dap' ) { ?>
<section>
  <div class="container">
    <div class="row">
        <div class="row">
    
    <div class="col-sm-3">
               
              <h2 style="margin-top:0;"># Hỏi đáp </h2>
<div style="margin-bottom:25px; padding-left:15px;border-left:2px solid #337ab7;margin-top:10px;"">
                           	 <?php
							 
							 $exclude = array(get_the_ID());
	$args=array(
	'post_type' => 'hoi-dap',
	'orderby' => 'ID',
	'order'   => 'DESC',
	'post__not_in'        => $exclude
);
	$query = new WP_Query( $args);
?>
    <?php if ( $query->have_posts() ) : ?>
    <?php while ( $query->have_posts() ) : $query->the_post();?>
                            <article style="margin-bottom:10px;"> <small><i class="fa fa-calendar" aria-hidden="true"></i> <?php the_time('d/m/Y') ; ?> - <strong><?php the_field('post_name'); ?></strong> đã đặt câu hỏi:<br>
<a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></small></article>
                            
                              <?php endwhile; ?>
    <?php  wp_reset_query(); ?>
    <?php  endif; ?>
                           
                           
                            </div>
                            
                            
                            
               </div>
      
    
      <div class="col-sm-7">
        <?php if ( have_posts() ) :  ?>
        <?php while ( have_posts() ) : the_post(); ?>
           <!-- note -->
                  
        
        
        <article class="article-item" id="<?php the_ID(); ?>">
  <div class="article-info" style="padding-left:15px;border-left:2px solid #337ab7;margin-top:10px;">

    <h2><?php the_title(); ?></h2>
    <span> <span class="label label-primary"><?php the_field('post_name'); ?> - <?php the_field('post_ip'); ?></span><small>&nbsp;&nbsp; đã hỏi vào lúc <?php the_time('d/m/Y g:i a') ; ?></small></span>
    
       <div class="content-blog" style="margin-top:10px; color:#222;font-size:13px;">
  <?php the_content(); ?>
    </div>
   <?php if(get_field('answer_faq')) { ?>
   
    <hr>
    <div style="padding-left:15px;margin-top:10px;font-size:13px;">
    <span class="label label-success" >Đã trả lời !</span>
<div style="margin-top:5px;">
    <?php the_field('answer_faq'); ?>
    </div>
    </div>
    
    <?php } else { ?>
      <div style="padding-left:15px;margin-top:10px;font-size:13px;">
     <span class="label label-warning" >Chưa trả lời !</span>
     </div>
    <?php } ?>
    
  </div>
  <hr style="border-color:#d2e9f9">
</article>


                   
                   <!-- end note -->
                   
                  
        <?php endwhile; ?>
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
