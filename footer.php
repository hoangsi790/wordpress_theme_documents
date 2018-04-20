<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="company">
          <a style="max-width:179px;display:block; font-size:24px;margin-bottom:15px;" href="<?php bloginfo( 'home' ); ?>" title="<?php bloginfo( 'name' ); ?>"># IT_Group</a>
        </div>
<p>Tổng hợp kiến thức từ dự án thực tế và sưu tầm.<br>Blog hoạt động như một website cung cấp, chia sẻ các kiến thức về Wordpress, Php, NodeJS, Laravel, ...<br>
Bộ phận IT luôn hoan nghênh và đón nhận các đóng góp của mọi người. Xin chân thành cảm ơn !</p>
      </div>
      <div class="col-sm-3">
        <h3>Tin tức mới</h3>
        <div class="footer_widget">
          <ul class="list-group nav-post">
            <?php
	$args=array(
	'post_type' => 'post',
	'orderby' => 'ID',
	'order'   => 'DESC',
	'cat' => 1,
	'posts_per_page'=>5);
	$query = new WP_Query( $args);
?>
            <?php if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post();?>
            <li class="list-group-item">
              <i class="fa fa-caret-right" aria-hidden="true" style="position:relative;top:2px;"></i>&nbsp;
              <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
              </a>
            </li>
            <?php endwhile; ?>
            <?php  wp_reset_query(); ?>
            <?php  endif; ?>
          </ul>
        </div>
      </div>
      <div class="col-sm-3">
        <h3>Bài viết gần đây</h3>
        <div class="footer_widget">
          <ul class="list-group nav-post">
            <?php
	$args=array(
	'post_type' => 'post',
	'orderby' => 'ID',
	'order'   => 'DESC',
	'cat' => -1,
	'posts_per_page'=>5);
	$query = new WP_Query( $args);
?>
            <?php if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post();?>
            <li class="list-group-item">
              <i class="fa fa-caret-right" aria-hidden="true" style="position:relative;top:2px;"></i>&nbsp;
              <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
              </a>
            </li>
            <?php endwhile; ?>
            <?php  wp_reset_query(); ?>
            <?php  endif; ?>
          </ul>
        </div>
      </div>
      <div class="col-sm-3">
        <h3>Thông tin liên hệ</h3>
        <div class="footer_widget">
          <p>Building 6A, Quang Trung Software City,<br>
            District 12, Ho Chi Minh City, VietNam<br>
            <br>
            Phone: <a href="mailto:it.it_group@gmail.com">xxxx-xxx-xxx</a> <br>
            Fax: <a href="mailto:it.it_group@gmail.com">xxxx-xxx-xxx</a> <br>
            <br>
            E-mail: <a href="mailto:it.it_group@gmail.com">it_group@gmail.com</a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <hr style="border-color: #4f4f4f;margin:10px 0;">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 copyright">
        <p>© Copyright
          <?php the_time('Y') ; ?>
          <a href="javascript:void(0);">
          Gifu Kogyo
          </a>
          . All Rights Reserved.</p>
      </div>
      <div class="col-sm-6 text-right"> <p>Xây dựng bởi <a href="http://www.hoangsi.com/" target="_blank">Hoang Si</a></p>  </div>
    </div>
  </div>
</footer>
<aside id="core-brain">
    <ul class="modules">
        
        <li class="backtop"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/backtop.png" alt="Về đầu trang"></li>
    </ul>
</aside>
<aside id="core-chat" class="core">
    <div class="chat-head"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/chat.png" alt="Chat với chúng tôi"> Chat với chúng tôi <span class="pull-right close-aside"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/close-aside.png" alt="Đóng cửa sổ"></span>
        <hr>
    </div>
    <div class="chatfacebook"> &nbsp;&nbsp; &nbsp; Đang cập nhật... </div>
</aside>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-ui.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.autocomplete.js"></script>
<script>



$(function(){
var currencies = [


<?php 	$args=array(	'post_type' => 'sentence', 	'orderby' => 'name', 	'order'   => 'DESC', 	'posts_per_page'=>-1);	$query = new WP_Query( $args); ?>
		<?php if ( $query->have_posts() ) : ?>
			<?php while ( $query->have_posts() ) : $query->the_post();?>
				{ value: '<?php the_title(); ?>', data: '<?php the_permalink(); ?>' },
			<?php endwhile; ?>
		
		<?php  wp_reset_query(); ?>
	<?php  endif; ?>
	
	

	
			
	
		<?php
$args_terms = array( 
	'taxonomy' => 'tu-khoa',
	'hide_empty' => 0
); 
$terms = get_terms( $args_terms ); if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
	foreach ( $terms as $term ) { ?>
		{ value: '<?php echo $term->name; ?>', data: '<?php echo esc_url(get_term_link($term));?>' },
  
      <?php } } ?>
  
  
	<?php 	$args=array(	'post_type' => 'hoi-dap', 	'orderby' => 'name', 	'order'   => 'DESC', 	'posts_per_page'=>-1);	$query = new WP_Query( $args); ?>
		<?php if ( $query->have_posts() ) : ?>
		
			<?php while ( $query->have_posts() ) : $query->the_post();?>
				{ value: '<?php the_field('post_name'); ?>', data: '<?php the_permalink(); ?>' },
			<?php endwhile; ?>
		<?php  wp_reset_query(); ?>
	<?php  endif; ?>


<?php 	$args=array(	'post_type' => 'note', 	'orderby' => 'name', 	'order'   => 'DESC', 	'posts_per_page'=>-1);	$query = new WP_Query( $args); ?>
		<?php if ( $query->have_posts() ) : ?>
			<?php while ( $query->have_posts() ) : $query->the_post();?>
				{ value: '<?php the_title(); ?>', data: '<?php the_permalink(); ?>' },
			<?php endwhile; ?>
			
		<?php  wp_reset_query(); ?>
	<?php  endif; ?>
	


			<?php
$args_terms = array( 
	'taxonomy' => 'note_tag',
	'hide_empty' => 0
); 
$terms = get_terms( $args_terms ); if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
	foreach ( $terms as $term ) { ?>
		{ value: '<?php echo $term->name; ?>', data: '<?php echo esc_url(get_term_link($term));?>' },
    <?php } } ?>
	
		



	<?php 	$args=array(	'post_type' => 'post', 	'orderby' => 'name', 	'order'   => 'DESC', 	'posts_per_page'=>-1);	$query = new WP_Query( $args); ?>
		<?php if ( $query->have_posts() ) : ?>
			<?php while ( $query->have_posts() ) : $query->the_post();?>
				{ value: '<?php the_title(); ?>', data: '<?php the_permalink(); ?>' },
			<?php endwhile; ?>
		<?php  wp_reset_query(); ?>
	<?php  endif; ?>




			<?php
$args_terms = array( 
	'taxonomy' => 'category',
	'hide_empty' => 0
); 
$terms = get_terms( $args_terms ); if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
	foreach ( $terms as $term ) { ?>
		{ value: '<?php echo $term->name; ?>', data: '<?php echo esc_url(get_term_link($term));?>' },
    <?php } } ?>
	
	
	
	
	
		<?php
$args_terms = array( 
	'taxonomy' => 'post_tag',
	'hide_empty' => 0
); 
$terms = get_terms( $args_terms ); if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
	foreach ( $terms as $term ) { ?>
		{ value: '<?php echo $term->name; ?>', data: '<?php echo esc_url(get_term_link($term));?>' },
    <?php } } ?>

		
	
];
$('#s').autocomplete({
	lookup: currencies,
	onSelect: function (suggestion) {
		var get_id = suggestion.data;
		window.location = get_id;
		}
	});
});  

</script>
<script>
	<?php if(is_page('61')) { ?>



	 var new_faq_capcha_n1 = Math.round(Math.random() * 10 + 1);

  var new_faq_capcha_n2 = Math.round(Math.random() * 10 + 1);

  $("#question_capcha").val(new_faq_capcha_n1 + " + " + new_faq_capcha_n2);

$('#new_faq').on("submit", function(e){



					if (eval($("#question_capcha").val()) != $("#answer_capcha").val()) {
					
						  $("#answer_capcha").focus();
					
						  alert('Bạn đã nhập sai câu trả lời bảo mật. Xin vui lòng kiểm tra lại !');
					
						  e.preventDefault();
					
						}
					
					else {
					
						$('.loading-checkout').show();
					
					   e.submit();
					
					
					
					}

});



	<?php } ?>
$('.backtop').click(function() { $('body,html').animate({scrollTop: 0}, 500); return false;}); // back top
</script>
<?php wp_footer(); ?>
</body></html>
