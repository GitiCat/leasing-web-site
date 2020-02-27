<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';

    if(!empty($_POST['uname']) && !empty($_POST['email']) && !empty($_POST['message'])) {

        //  name sender [from POST]
        $uname = $_POST['uname'];
        //  email sender [from POST]
        $email = $_POST['email'];
        //  message sender [from POST]
        $message = $_POST['message'];

        $subject = 'Сообщение обратной связи';

        $fromEmail = 'site@mvs-finance.ru';  
        $fromName = $uname;
        
        $toName = 'MVC Finance info';
        $toEmail = 'info@mvs-finance.ru';

        // to: info@mvs-finance.ru
        // login: site@mvs-finance.ru
        // narod1012

        //  create new PhpMailer example
        $mail = new PHPMailer();

        try {
            //  Server settings
            $mail->CharSet = 'UTF-8';
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->SMTPAuth = true;

            //  SMTP server settings
            $mail->Host = "ssl://smtp.yandex.ru";
            $mail->Port = 465;
            $mail->Username = 'site@mvs-finance.ru';
            $mail->Password = 'narod1012';

            //  Recipients
            $mail->setFrom($fromEmail, $fromName);
            $mail->addAddress($toEmail, $toName);
            
            //  Content
            $mail->isHTML(true);
            $mail->Subject  = $subject;
            $mail->Body     = "
                <html>
                    <head></head>
                    <body>
                        <p>Сообщение от: ". $uname ."</p>
                        <p>Электронная почта: ". $email ."</p>
                        <p>Сообщение: ". $message ."</p>
                    </body>
                </html>
            ";

            $mail->send();

        } catch (Exception $e) {
            echo "Message could not be send. Mailer error: {$$mail->ErrorInfo}";
        }
    }
?>