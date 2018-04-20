<?php get_header();?>

<section>
  <div class="container">
   <div class="row">
   
    <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Tất cả</a></li>
    <li><a data-toggle="tab" href="#menu1">Đã xử lý</a></li>
    <li><a data-toggle="tab" href="#menu2" style="color:#F00;"> <strong>Chưa xử lý</strong> </a></li>
  
  </ul>
<style>.tab-pane {padding:15px 0;}</style>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <table class="table table-striped table-bordered">
     <tr>
        <th style="width:45px;">STT</th>
        <th>Vấn đề</th>
        <th>Người đặt vấn đề</th>
       
        <th>Trạng thái</th>
    </tr>
      <?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
$args = array(	'paged' => $paged, 
				'post_type' => 'hoi-dap',
				'orderby' => 'ID', 
				'order'   => 'DESC', 
				'posts_per_page'=>-1
); query_posts($args);?>
   <?php if ( have_posts() ) : ?>
   <?php $i = 1; while ( have_posts() ) : the_post(); ?>
    <tr>
        <td id="<?php the_ID(); ?>" class="text-center"><?php echo $i; ?></td>
        <td><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></td>
        <td><span> <span class="label label-primary"><?php the_field('post_name'); ?></span><br>
<code><?php the_field('post_ip'); ?></code> <small>&nbsp;&nbsp; đã hỏi vào lúc <strong><?php the_time('d/m/Y g:i a') ; ?></strong></small></span></td>
      
        <td> <?php if(get_field('answer_faq')) { ?>

    <div>
    <span class="label label-success" >Đã xử lý !</span>
    <br>

    <small>vào lúc <strong><?php the_modified_time('d/m/Y g:i a'); ?></strong></small>
    
    </div>
    
    <?php } else { ?>
      <div>  <span class="label label-danger" >Chưa xử lý !</span>  </div>
    <?php } ?></td>
    </tr>
       <?php $i++; endwhile; ?>
   <div class="wrap-pagi">
    <?php wp_pagenavi(); ?> 
</div>
   
	<?php  wp_reset_query(); ?>
<?php  endif; ?>

</table>
    </div>
    <div id="menu1" class="tab-pane fade">
     <table class="table table-striped table-bordered">
     <tr>
        <th style="width:45px;">STT</th>
        <th>Vấn đề</th>
        <th>Người đặt vấn đề</th>
       
        <th>Trạng thái</th>
    </tr>
      <?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
$args = array(	'paged' => $paged, 
				'post_type' => 'hoi-dap',
				'orderby' => 'ID', 
				'order'   => 'DESC', 
				'posts_per_page'=>-1
); query_posts($args);?>
   <?php if ( have_posts() ) : ?>
   <?php $i = 1; while ( have_posts() ) : the_post(); ?>
   
   <?php if(get_field('answer_faq')) { ?>
   
    <tr>
        <td id="<?php the_ID(); ?>" class="text-center"><?php echo $i; ?></td>
        <td><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></td>
        <td><span> <span class="label label-primary"><?php the_field('post_name'); ?></span><br>
<code><?php the_field('post_ip'); ?></code> <small>&nbsp;&nbsp; đã hỏi vào lúc <strong><?php the_time('d/m/Y g:i a') ; ?></strong></small></span></td>
      
        <td> <?php if(get_field('answer_faq')) { ?>

    <div>
    <span class="label label-success" >Đã xử lý !</span>
    <br>

    <small>vào lúc <strong><?php the_modified_time('d/m/Y g:i a'); ?></strong></small>
    
    </div>
    
    <?php } else { ?>
      <div>  <span class="label label-danger" >Chưa xử lý !</span>  </div>
    <?php } ?></td>
    </tr>
    
    <?php $i++; } ?>
       <?php  endwhile; ?>
   <div class="wrap-pagi">
    <?php wp_pagenavi(); ?> 
</div>
   
	<?php  wp_reset_query(); ?>
<?php  endif; ?>

</table>
    </div>
    <div id="menu2" class="tab-pane fade">
 
     <table class="table table-striped table-bordered">
     <tr>
        <th style="width:45px;">STT</th>
        <th>Vấn đề</th>
        <th>Người đặt vấn đề</th>
       
        <th>Trạng thái</th>
    </tr>
      <?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
$args = array(	'paged' => $paged, 
				'post_type' => 'hoi-dap',
				'orderby' => 'ID', 
				'order'   => 'DESC', 
				'posts_per_page'=>-1
); query_posts($args);?>
   <?php if ( have_posts() ) : ?>
   <?php $i = 1; while ( have_posts() ) : the_post(); ?>
   
   <?php if(!get_field('answer_faq')) { ?>
   
    <tr>
        <td id="<?php the_ID(); ?>" class="text-center"><?php echo $i; ?></td>
        <td><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></td>
        <td><span> <span class="label label-primary"><?php the_field('post_name'); ?></span><br>
<code><?php the_field('post_ip'); ?></code> <small>&nbsp;&nbsp; đã hỏi vào lúc <strong><?php the_time('d/m/Y g:i a') ; ?></strong></small></span></td>
      
        <td> <?php if(get_field('answer_faq')) { ?>

    <div>
    <span class="label label-success" >Đã xử lý !</span>
    <br>

    <small>vào lúc <strong><?php the_modified_time('d/m/Y g:i a'); ?></strong></small>
    
    </div>
    
    <?php } else { ?>
      <div>  <span class="label label-danger" >Chưa xử lý !</span>  </div>
    <?php } ?></td>
    </tr>
    
    <?php $i++; } ?>
       <?php  endwhile; ?>
   <div class="wrap-pagi">
    <?php wp_pagenavi(); ?> 
</div>
   
	<?php  wp_reset_query(); ?>
<?php  endif; ?>

</table>
    </div>
 
  </div>
   
   
   
   
   
   
     
     


          
          <!-- end -->
          


      </div>
  </div>
</section>
<?php get_footer(); ?>
