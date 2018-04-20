<div class="col-sm-3">
                    <div class="analytics">
                       <h2 style="margin-top:0;"># Tin tức & Thông báo&nbsp; <span class="label label-danger">news</span>
                       </h2>
                       <div style="margin-bottom:25px; padding-left:15px;border-left:2px solid #337ab7;margin-top:10px;"">
                           	 <?php
	$args=array(
	'post_type' => 'post',
	'orderby' => 'ID',
	'order'   => 'DESC',
	'cat' => 1,
	'posts_per_page'=>5
);
	$query = new WP_Query( $args);
?>
    <?php if ( $query->have_posts() ) : ?>
    <?php while ( $query->have_posts() ) : $query->the_post();?>
                            <article style="margin-bottom:10px;"> <small><i class="fa fa-calendar" aria-hidden="true"></i> <?php the_time('d/m/Y') ; ?> - <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> &nbsp;<img src="<?php echo get_template_directory_uri(); ?>/assets/images/hot.gif" alt="<?php bloginfo( 'name' ); ?>"></a></small></article>
                            
                              <?php endwhile; ?>
    <?php  wp_reset_query(); ?>
    <?php  endif; ?>
                           
                           
                            </div>
                            
                              </div>
                              
                              
                              
                              <div class="analytics">
                       <h2 style="margin-top:0;"># Quy chuẩn & Lưu ý&nbsp; <span class="label label-danger">Important</span>
                       </h2>
                       <div style="margin-bottom:25px; padding-left:15px;border-left:2px solid #337ab7;margin-top:10px;"">
                           	 <?php
	$args=array(
	'post_type' => 'post',
	'orderby' => 'ID',
	'order'   => 'DESC',
	'cat' => 450,
	'posts_per_page'=>9
);
	$query = new WP_Query( $args);
?>
    <?php if ( $query->have_posts() ) : ?>
    <?php while ( $query->have_posts() ) : $query->the_post();?>
                            <article style="margin-bottom:10px;"> <small># <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></small></article>
                            
                              <?php endwhile; ?>
    <?php  wp_reset_query(); ?>
    <?php  endif; ?>
                           
                           
                            </div>
                            
                              </div>
                              
                              
                            
                            
                              <h2 style="margin-top:0;"># Nổi bật</h2>
  <ul class="list-group sidebar-blog" >
    <?php
	$args=array(
	'post_type' => 'post',
	'orderby' => 'ID',
	'order'   => 'DESC',
	'post__in' => array('232', '483', '544',  '1078','1177','1418', '2207'),
	'posts_per_page'=>15
);
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
  
   <h2 style="margin-top:0;"># Mới cập nhật </h2>
  <ul class="list-group sidebar-blog" >
    <?php
	$args=array(
	'post_type' => 'post',
	'orderby' => 'date',
	'order'   => 'DESC',
	'posts_per_page'=>5

);
	$query = new WP_Query( $args);
?>
    <?php if ( $query->have_posts() ) : ?>
    <?php while ( $query->have_posts() ) : $query->the_post();?>
    <li class="list-group-item"><span class="label label-danger"><?php the_author(); ?></span> <small>vào ngày</small>  <span style="color:#333"><?php the_time('d/m/Y') ; ?> </span><small> lúc</small> <span style="color:#333"><?php the_time('H:i') ; ?> </span><small>đã viết</small> <a href="<?php the_permalink(); ?>"><?php the_title(); ?>
      </a>
    </li>
    <?php endwhile; ?>
    <?php  wp_reset_query(); ?>
    <?php  endif; ?>
  </ul>
  
                            
                            
                            
                            
                  


				
<?php /*?><h2># Từ khóa </h2>
<div class=" tagclouds" style="margin-bottom:20px;display:block;">
<?php
$args_terms = array( 
	'taxonomy' => 'post_tag',
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
</div><?php */?>

   <h2># Hỏi đáp </h2>
<div style="margin-bottom:25px; padding-left:15px;border-left:2px solid #337ab7;margin-top:10px;"">
                           	 <?php
							 
							
	$args=array(
	'post_type' => 'hoi-dap',
	'orderby' => 'ID',
	'order'   => 'DESC',
	'posts_per_page'=>5
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


          
                        <h2 style="margin-top:0;"># TOP tác giả &nbsp; <span class="label label-info">HOT</span>  <span class="label label-primary pull-right" style="text-transform:none;padding-top: 3px;">
						Có <?php $count_posts = wp_count_posts();
								 $published_posts = $count_posts->publish;
								 $private_posts = $count_posts->private;
								 $posts_all = $published_posts + $private_posts;
								 echo  $posts_all;
						?> bài viết
</span></h2>
                        
                        
<?php 
$count_posts = 0;
$count_posts_user = 0;
$count_posts = wp_count_posts(); if ( $count_posts ) {  $all_posts = $count_posts->publish; }
?>
                        
                   <?php

$arr_user = array();

$users = get_users( );
foreach ( $users as $user ) { 
$count_posts_user =0;
$count_posts_user = count_user_posts($user->ID);
$arr_user[$user->ID] = $count_posts_user;
}
arsort($arr_user);

foreach ( $arr_user as $key => $user ) { 

 $user_dislay_name = get_the_author_meta( 'display_name',  $key );
 $user_url = get_the_author_meta( 'user_login',  $key );

// $name_author = sanitize_title($user_dislay_name);

?>


                        <div  style="border-left:2px solid #337ab7; padding:0px 0 0 10px !important;margin-bottom:15px;"> <span><a style="font-size:14px;" href="<?php bloginfo( 'home' ); ?>/author/<?php echo $user_url; ?>"><?php echo $user_dislay_name; ?>
</a> <small >(<?php echo $user; ?> bài viết)</small></span>
                            <div class="progress"  style="height:5px;border-radius:0;">
                                <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $count_posts_user; ?>" aria-valuemin="0" aria-valuemax="<?php echo $all_posts; ?>" style="width: <?php echo ($user/$all_posts)*100; ?>%;"> <span class="sr-only">60% Complete</span> </div>
                            </div>
                        </div>
                       <?php }
					 
					 
					   ?>

                        
                 
                </div>