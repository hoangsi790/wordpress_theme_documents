<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */


// info mail
 $admin_mail = "gifuvnit.minhsi@gmail.com"; // it.hoangsi@gmail.com
 $title_mail = $_POST["hs_title_mail"]; // Ex : Công ty TNHH Gifu Kogyo Viet Nam
 $smtp_username_mail = "authentication.smtp.mail@gmail.com";
 $smtp_password_mail = "u+J%E^9!hx?p";
 $redirect_success = $_POST["hs_redirect_success"]; 
 $redirect_fail = $_POST["hs_redirect_fail"]; 
 $alt_mail ="Có liên hệ mới từ khách hàng "; // Nội dung rút gọn bên ngoài thư, ex : Có liên hệ mới từ khách hàng
 
 if (isset($_POST["hs_name"])) {$name =  $_POST["hs_name"];}
 if (isset($_POST["hs_email"])) {$email =  $_POST["hs_email"];}
 if (isset($_POST["hs_tel"])) {$tel =  $_POST["hs_tel"];}
 if (isset($_POST["hs_message"])) {$message =  $_POST["hs_message"];}
// end info mail




//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Asian/Ho_Chi_Minh');

require 'PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = $smtp_username_mail;

//Password to use for SMTP authentication
$mail->Password = $smtp_password_mail;

//Set who the message is to be sent from
$mail->setFrom($admin_mail, $name);

$mail->CharSet = 'utf-8';

$mail->FromName   = $name;

//Set an alternative reply-to address
$mail->addReplyTo($admin_mail, $title_mail);

//Set who the message is to be sent to
$mail->addAddress($admin_mail, $title_mail);

//Set the subject line
$mail->Subject    = $alt_mail.$name.' ['.$email.']';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('email-template.php'), dirname(__FILE__));

//Replace the plain text body with one created manually
$mail->AltBody = $alt_mail;

//Attach an image file
// $mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if(!$mail->Send()) { ?>
<script>
if (confirm("Có lỗi khi gửi mail, xin vui lòng thử lại !")) {
	document.location.href = "<?php echo $redirect_fail; ?>";
}
</script>
<?php } else { ?>
<script>
if (confirm("Đã gửi mail thành công !")) {
	document.location.href = "<?php echo $redirect_success; ?>";
}
</script>
<?php }