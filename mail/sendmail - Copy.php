<?php
include("class.phpmailer.php");
// require_once(dirname(__FILE__)."/class.phpmailer.php"); // Khai báo thư viên phpmailer
// info mail
 $admin_mail = "gifuvnit.minhsi@gmail.com"; // it.hoangsi@gmail.com
 $title_mail = $_POST["hs_title_mail"]; // Ex : Công ty TNHH Gifu Kogyo Viet Nam
 $smtp_username_mail = "authentication.smtp.mail@gmail.com";
 $smtp_password_mail = "u+J%E^9!hx?p";
 $redirect_success = $_POST["hs_redirect_success"]; 
 $redirect_fail = $_POST["hs_redirect_fail"]; 
 $alt_mail ="Có liên hệ mới từ khách hàng"; // Nội dung rút gọn bên ngoài thư, ex : Có liên hệ mới từ khách hàng
 
// if (isset($_POST["hs_name"])) {$name =  $_POST["hs_name"];}
// if (isset($_POST["hs_email"])) {$email =  $_POST["hs_email"];}
// if (isset($_POST["hs_tel"])) {$tel =  $_POST["hs_tel"];}
// if (isset($_POST["hs_message"])) {$message =  $_POST["hs_message"];}
// end info mail
 
$mail = new PHPMailer(); // Khai báo tạo PHPMailer
$mail->IsSMTP(); //Khai báo gửi mail bằng SMTP
//Tắt mở kiểm tra lỗi trả về, chấp nhận các giá trị 0 1 2
// 0 = off không thông báo bất kì gì, tốt nhất nên dùng khi đã hoàn thành.
// 1 = Thông báo lỗi ở client
// 2 = Thông báo lỗi cả client và lỗi ở server
$mail->SMTPDebug  = 2;
$mail->Debugoutput = "html"; // Lỗi trả về hiển thị với cấu trúc HTML
$mail->Host       = "smtp.gmail.com"; //host smtp để gửi mail
$mail->Port       = 465; // cổng để gửi mail
$mail->SMTPSecure = "ssl"; //Phương thức mã hóa thư - ssl hoặc tls
$mail->SMTPAuth   = true; //Xác thực SMTP
$mail->Username   = $smtp_username_mail; // Tên đăng nhập tài khoản Gmail
$mail->Password   = $smtp_password_mail; //Mật khẩu của gmail
$mail->SetFrom($admin_mail, $title_mail ); // Thông tin người gửi
$mail->AddReplyTo($admin_mail);// Ấn định email sẽ nhận khi người dùng reply lại.
$mail->AddAddress($admin_mail);//Email của người nhận
$mail->Subject = $title_mail; //Tiêu đề của thư
$mail->MsgHTML("lorem"); //Nội dung của bức thư.
// $mail->MsgHTML(file_get_contents("template-email/email-template.php"), dirname(__FILE__)); // Gửi thư với tập tin html
$mail->AltBody = $alt_mail;//Nội dung rút gọn hiển thị bên ngoài thư mục thư.
// $mail->AddAttachment("images/attact-tui.gif");//Tập tin cần attach
 
//Tiến hành gửi email và kiểm tra lỗi
if(!$mail->Send()) {
  echo $mail->ErrorInfo;
  /* echo "<script>confirm('Có lỗi khi gửi mail, xin vui lòng thử lại !');</script>";*/
} else {
  /* echo "<script>confirm('Đã gửi mail thành công !');</script>"; */
}