<?php session_start(); ?>
<?php /* Template Name: Hỏi đáp & tư vấn  */ ?>
<?php get_header(); ?>
<section>
    <div class="container">
        <div class="row">
            <div class="row">
                 <?php get_sidebar('left'); ?>
                <div class="col-sm-7">
          
         <div class="alert alert-success" role="alert"><a target="_blank" style="color:inherit;" href="<?php bloginfo( 'home' ); ?>/kaizen"><i class="fa fa-bar-chart" aria-hidden="true"></i> Xem thống kê của bộ phận <strong>Kaizen</strong></a></div>
          
          <hr>
          
                 <div class="faq ">
          
          
          
          
          
          
          <div class="row">
          <div class=" contact-form">
          
          
          
           
                  
         
          
          
          
          
            <form id="new_faq"  method="post" action="#">
            
            
                  <?php

									   $id_order =  mt_rand(11111111, 99999999);

									   $ngay_thang = '(Ngày '.get_the_time('d').' Tháng '.get_the_time('m').' Năm '.get_the_time('Y').' / '.get_the_time('g:i a').')';

									   ?>

                                            <input type="hidden" name="s_token" value="b3JkZXJfaWQ9NzkzNjd8dHlwZT1kZXZlbG9wZXJ8ZGF0ZT0yMDE2LTA0LTEyIDAyOjAyOjA5">

                                            <input type="hidden" name="s_mail_admin" value="<?php the_field('hs_email_faq', 'option'); ?>">
										<input type="hidden" name="s_ngay_thang" value="<?php echo $ngay_thang; ?>">
                                         <input type="hidden" name="s_theme_url" value="<?php echo get_template_directory_uri(); ?>">

                                            <input type="hidden" name="s_home_url" value="<?php bloginfo('home');?>">

            
            
                
                
                <div class="col-md-6 ">
                  
                    <div class="form-group">
                      <label class="info-title" >Họ và Tên <span style="color:#F00">*</span></label>
                      <input name="post_name" id="post_name" type="text" class="form-control unicase-form-control text-input" required>
                    </div>
                 
                </div>
                <div class="col-md-6">
                
                    <div class="form-group">
                    
                     <?php $ip = $_SERVER['REMOTE_ADDR'];

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } ?>
                      <label class="info-title">IP <span style="color:#F00">*</span></label>
                      <input name="post_ip" id="post_ip" type="text"  value="<?php echo $ip; ?>" class="form-control unicase-form-control text-input" readonly>
                    </div>
                 
                </div>
                
                
                
                
                
                <div class="col-md-12 ">
                  
                    <div class="form-group">
                      <label class="info-title" >Chủ đề hoặc mô tả  nội dung cần tư vấn <span style="color:#F00">*</span></label>
                      <input name="post_subject" id="post_subject" type="text" class="form-control unicase-form-control text-input" required>
                    </div>
                 
                </div>
                
                
                
                <div class="col-md-12">
                 
                    <div class="form-group">
                      <label class="info-title">Câu hỏi hoặc nội dung cần tư vấn <span style="color:#F00">*</span></label>
             
             
              <?php $post_obj = $wp_query->get_queried_object(); wp_editor( $post_obj->post_content, 'userpostcontent', array( 'textarea_name' => 'post_content' ));?>
             
                   <?php /*?>   <textarea rows="5"  name="post_content"  id="post_content"  class="form-control unicase-form-control" required style="resize:vertical;"></textarea><?php */?>

                         <input type="hidden" name="add_new_faq" value="post" >
  <?php wp_nonce_field( 'post_nonce', 'post_nonce_field' ); ?>
                    </div>
                  
                </div>
                  <div class="col-md-12">
                 
                    <div class="form-group">
                     <label> Vui lòng nhập câu trả lời bảo mật :  &nbsp; </label>
                    <input  style="width:70px;display:inline-block; text-align:center;"   class="form-control unicase-form-control text-input"  type="text" disabled="disabled" id="question_capcha"> &nbsp;=&nbsp; <input style="width:70px; display:inline-block;text-align:center;"  class="form-control unicase-form-control text-input"  type="text" id="answer_capcha" required>
            
                  </div>
                  
                </div>
                <div class="col-md-12 outer-bottom-small m-t-20">
                  <button type="submit"  class="btn-upper btn btn-danger checkout-page-button"><i class="fa fa-paper-plane"></i> Gửi câu hỏi</button>
                </div>
                </form>
                
                
                <?php if( $_SERVER['REQUEST_METHOD'] == 'POST' && !empty( $_POST['add_new_faq'] ) && isset( $_POST['post_nonce_field'] ) && wp_verify_nonce( $_POST['post_nonce_field'], 'post_nonce' )) {
if (isset($_POST['post_name'])) { $post_name = $_POST['post_name']; }
if (isset($_POST['post_subject'])) { $post_subject = $_POST['post_subject']; }

if (isset($_POST['post_ip'])) { $post_ip = $_POST['post_ip']; }

if (isset($_POST['post_content'])) { $post_content = $_POST['post_content'];} 
else {
    echo 'Vui lòng điền đầy đủ nội dung !';
}

$post = array(
    'post_title'    => wp_strip_all_tags($post_subject),
    'post_content'  => $post_content,
    'post_type' => 'hoi-dap',
	'post_status'   => 'publish'
);
$faq_post_id = wp_insert_post($post); 
add_post_meta($faq_post_id, 'post_name', $post_name, true);
  add_post_meta($faq_post_id, 'post_ip', $post_ip, true);
?>
<script>

if (confirm("Đặt câu hỏi thành công. Câu hỏi đang trong trạng thái chờ duyệt !!")) {	
	document.location.href = "<?php bloginfo( 'home' ); ?>/?page_id=61";
}
</script>
<?php } ?>
                
              </div>
               <div class="clearfix"></div>
            <div class="col-md-12">
              <hr>
            </div>
          </div>
          
          
          <?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
$args = array(	'paged' => $paged, 
				'post_type' => 'hoi-dap',
				'orderby' => 'ID', 
				'order'   => 'DESC', 
				'posts_per_page'=>5
); query_posts($args);?>
   <?php if ( have_posts() ) : ?>
   <?php while ( have_posts() ) : the_post(); ?>
          
        
        
        
        <article class="article-item" id="<?php the_ID(); ?>">
  <div class="article-info" style="padding-left:15px;border-left:2px solid #3498db;margin-top:10px;">

    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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

        
        

          
          <!-- end -->
          
   <?php endwhile; ?>
   <div class="wrap-pagi">
    <?php wp_pagenavi(); ?> 
</div>
   
	<?php  wp_reset_query(); ?>
<?php  endif; ?>
          
        </div>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>





















