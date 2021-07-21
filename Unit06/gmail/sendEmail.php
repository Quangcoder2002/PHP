<?php
use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	function send_email($email_recive,$name,$contents,$subject){
		// Khai báo thư viên phpmailer
				require 'PHPMailer/src/Exception.php';
				require 'PHPMailer/src/PHPMailer.php';
				require 'PHPMailer/src/SMTP.php';
        // Khai báo tạo PHPMailer
        $mail = new PHPMailer();
        //Khai báo gửi mail bằng SMTP
        $mail->IsSMTP();
        //Tắt mở kiểm tra lỗi trả về, chấp nhận các giá trị 0 1 2
        // 0 = off không thông báo bất kì gì, tốt nhất nên dùng khi đã hoàn thành.
        // 1 = Thông báo lỗi ở client
        // 2 = Thông báo lỗi cả client và lỗi ở server
        // To load the French version
        $mail->setLanguage('vi', '/optional/path/to/language/directory/');
        $mail->SMTPDebug  = 0;
				$mail->SMTPOptions = array (
		        'ssl' => array(
	        	'verify_peer'  => false,
	        	'verify_peer_name'  => false,
	        	'allow_self_signed' => true)
				);
        $mail->CharSet="UTF-8";
        $mail->Debugoutput = "html"; // Lỗi trả về hiển thị với cấu trúc HTML
        $mail->Host       = "smtp.gmail.com"; //host smtp để gửi mail
        $mail->Port       = 587; // cổng để gửi mail
        $mail->SMTPSecure = "tls"; //Phương thức mã hóa thư - ssl hoặc tls
        $mail->SMTPAuth   = true; //Xác thực SMTP
        $mail->Username   = "vntth12@gmail.com"; // Tên đăng nhập tài khoản Gmail
        $mail->Password   = "Q26012002"; //Mật khẩu của gmail
        $mail->SetFrom("vntth12@gmail.com", "QUANG"); // Thông tin người gửi
        $mail->AddReplyTo("vntth12@gmail.com","QUANG");// Ấn định email sẽ nhận khi người dùng reply lại.
        $mail->AddAddress($email_recive, $name);//Email của người nhận
        //$mail->AddCC($email_recive, $name);//Email của người nhận
        $mail->Subject = $subject; //Tiêu đề của thư
        $mail->MsgHTML($contents); //Nội dung của bức thư.
         //$mail->MsgHTML(file_get_contents("email-template.html"), dirname(__FILE__));
        // Gửi thư với tập tin html
        $mail->Body = "<h1><br>Tiêu đê: $subject</h1><h3>Tôi là: $name  <br>Lời nhắn: $contents</h3>";//Nội dung rút gọn hiển thị bên ngoài thư mục thư.
        //$mail->AddAttachment("images/attact-tui.gif");//Tập tin cần attach

        //Tiến hành gửi email và kiểm tra lỗi
        if(!$mail->Send()) {
					return false;
        } else {
					return true;
        }
	}
	session_start();
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $check = send_email($email,$name,$message,$subject);
	if ($check) {
		$_SESSION['products'] = '
		 toast({
					title: "Thành công!",
					message: "Gửi mail thành công.",
					type: "success",
					duration: 5000
				});';
	}else {
		$_SESSION['products'] = '
		toast({
					title: "Thất bại",
					message: "Gửi mail thất bại.",
					type: "error",
					duration: 5000
				});';
	}

}
header('Location: index.php');
?>
