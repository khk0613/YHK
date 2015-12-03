<?php 
    header('Content-Type: text/html; charset=utf-8');

    // phpinfo();
    
    $u_name = $_POST['u_name'];
    $u_company = $_POST['u_company'];
    $u_email = $_POST['u_email'];
    $u_phone = $_POST['u_phone'];
    $u_quotation = nl2br($_POST['u_quotation']);

    echo $u_name . '<br/>';
    echo $u_company . '<br/>';
    echo $u_email . '<br/>';
    echo $u_phone . '<br/>';
    echo $u_quotation . '<br/>';
    
    foreach($_REQUEST as $key => $value) {
        //echo $key." =================" .$value . "<br />";
        echo "<input type='hidden' name='".$key."' value='".$value."' />";
    }



        require 'PHPMailerAutoload.php';

        $mail = new PHPMailer;

        //$mail->SMTPDebug = 3;                               // Enable verbose debug output

        // $mail->isSMTP();                                      // Set mailer to use SMTP
        // $mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
        // $mail->SMTPAuth = true;                               // Enable SMTP authentication
        // $mail->Username = 'user@example.com';                 // SMTP username
        // $mail->Password = 'secret';                           // SMTP password
        // $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        // $mail->Port = 587;                                    // TCP port to connect to

        $mail->From = "{$u_email}";
        $mail->FromName = "{$u_name}";
        $mail->addAddress('sales@yhkkorea.com', 'YHK KOREA');     // Add a recipient
        $mail->addAddress('sales@yhkkorea.com');               // Name is optional
        $mail->addReplyTo('sales@yhkkorea.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = "안녕하세요, {$u_company}가 견적문의드립니다.";
        $mail->Body    = "이름 : {$u_name} <br /> 회사명 : {$u_company} <br /> 이메일 : {$u_email} <br /> 연락처 : {$u_phone} <br /><br /> {$u_quotation}";
        $mail->AltBody = "";

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
    
?>