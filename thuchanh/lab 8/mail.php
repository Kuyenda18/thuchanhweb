<?php
          require "PHPMailer-master/src/PHPMailer.php";  //nhúng thư viện vào để dùng, sửa lại đường dẫn cho đúng nếu bạn lưu vào chỗ khác
          require "PHPMailer-master/src/SMTP.php"; //nhúng thư viện vào để dùng
          require 'PHPMailer-master/src/Exception.php'; //nhúng thư viện vào để dùng
if (isset($_POST)) {
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);  //true: enables exceptions
    try {
      //  $mail->SMTPDebug = 2;  // 0,1,2: chế độ debug. khi mọi cấu hình đều tớt thì chỉnh lại 0 nhé
        $mail->isSMTP();
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $nguoigui = 'ngolequanvh@gmail.com';
        $matkhau = 'asdfsgd';
        $tennguoigui = 'Hoang Phat';
        <?php
        require "PHPMailer-master/src/PHPMailer.php";  //nhúng thư viện vào để dùng, sửa lại đường dẫn cho đúng nếu bạn lưu vào chỗ khác
        require "PHPMailer-master/src/SMTP.php"; //nhúng thư viện vào để dùng
        require 'PHPMailer-master/src/Exception.php'; //nhúng thư viện vào để dùng
if (isset($_POST)) {
  $mail = new PHPMailer\PHPMailer\PHPMailer(true);  //true: enables exceptions
  try {
    //  $mail->SMTPDebug = 2;  // 0,1,2: chế độ debug. khi mọi cấu hình đều tớt thì chỉnh lại 0 nhé
      $mail->isSMTP();
      $mail->CharSet  = "utf-8";
      $mail->Host = 'smtp.gmail.com';  //SMTP servers
      $mail->SMTPAuth = true; // Enable authentication
      $nguoigui = 'ngolequanvh@gmail.com';
      $matkhau = 'asdfsgd';
      $tennguoigui = 'le quan';
      if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile))
                    $mail->addAttachment($uploadfile, $_FILES['file']['name']);
                } 
                $mail->smtpConnect(array(
                        "ssl" => array(
                            "verify_peer" => false,
                            "verify_peer_name" => false,
                            "allow_self_signed" => true
                        )
                    ));
                if($mail->send())
                   {
                    header("Location:index.php");
                   }
            } catch (Exception $e) {
                echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
            }	
        }
        
        
