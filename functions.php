<?php
include('inc/sentences.php');
include('inc/notes.php');
include('inc/faq.php');


function enable_extended_upload ( $mime_types =array() ) {

   // The MIME types listed here will be allowed in the media library.
   // You can add as many MIME types as you want.
   $mime_types['exe']  = 'application/exe'; 

   return $mime_types;
} 
add_filter('upload_mimes', 'enable_extended_upload');



function custom_password_cookie_expiry( $expires ) {
    return 0;  // Make it a session cookie
}
add_filter( 'post_password_expires', 'custom_password_cookie_expiry' );

 function admin_style() {wp_enqueue_style('admin-styles', get_template_directory_uri().'/inc/admin.css');} add_action('admin_enqueue_scripts', 'admin_style');
 
 
 function the_title_trim($title) {

	$title = attribute_escape($title);

	$findthese = array(
		'#Bảo vệ:#',
		'#Riêng tư:#'
	);

	$replacewith = array(
		'', // What to replace "Protected:" with
		'' // What to replace "Private:" with
	);

	$title = preg_replace($findthese, $replacewith, $title);
	return $title;
}
add_filter('the_title', 'the_title_trim');




function vnkings_welcome() {
global $wp_meta_boxes;
wp_add_dashboard_widget('custom_help_widget', '<span style="color:red">Lưu ý đặc biệt</span>', 'vnkings_echotext');
}
function vnkings_echotext() { ?>
<p>Đối với các bài viết :</p>
<p>- Có nội dung liên quan tới bảo mật, server, khóa, mở cài đặt...<br>
- Có chứa các loại tài khoản</p>
<p><strong> Bắt buộc phải chọn chế độ đặt mật khẩu</strong>, mật khẩu quy định chung là:  P@ssw0rd!@#</p>
<?php }
add_action('wp_dashboard_setup', 'vnkings_welcome');