<?php if(isset($_POST['submit'])) {

    if(!empty($_POST['uname']) && !empty($_POST['email']) && !empty($_POST['message'])) {

        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $subject = 'Сообщение обратной связи';
        $toName = '';   //  need adding
        $toEmail = '';  //  need adding

        require PHPMailer\PHPMailer\PHPMailer;
        require PHPMailer\PHPMailer\SMTP;
        require PHPMailer\PHPMailer\Exception;

        require 'vendor/autoload.php';

        $mail = new PHPMailer;

        try {
            //  Server settings
            $mail->CharSet = 'UTF-8';
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->SMTPAuth = true;

            //  SMTP server settings
            $mail->Host = "ssl://smtp.yandex.ru";
            $mail->Port = 465;
            $mail->Username = '';   //  need adding
            $mail->Password = '';   //  need adding

            //  Recipients
            $mail->setFrom($email, $uname);
            $mail->setAddress($toEmail, $toName);
            
            //  Content
            $mail->isHTML(true);
            $mail->Subject  = $subject;
            $mail->Body     = $message;

            $mail->send();

        } catch (Exception $e) {
            echo "Message could not be send. Mailer error: {$$mail->ErrorInfo}";
        }
    }
}
?>