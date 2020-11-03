<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';

    class Email{
        private $mail;
        
        public function __construct($host,$username,$senha,$name){
            try{
                $this->mail = new PHPMailer;
                //Server settings
                $this->mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
                $this->mail->isSMTP();                                            // Send using SMTP
                $this->mail->Host       = $host;                    // Set the SMTP server to send through
                $this->mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $this->mail->Username   = $username;                     // SMTP username
                $this->mail->Password   = $senha;//$senha;                               // SMTP password
                $this->mail->SMTPSecure = 'ssl';   // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $this->mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            
                //Recipients
                $this->mail->setFrom($username,$name);
                $this->mail->isHTML(true);                                  // Set email format to HTML
                $this->mail->CharSet = 'UTF-8';
            }catch(Exception $e){
                echo 'deu erro na funcao principal';
            }
        }

        public function addAddress($email,$nome){
            $this->mail->addAddress($email,$nome);
        }

        public function formatarEmail($info){
            $this->mail->Subject = $info['assunto'];
            $this->mail->Body    = $info['corpo'];
            $this->mail->AltBody = strip_tags($info['corpo']);
        }

        public function enviarEmail(){
            $this->mail->send();
            /*if($this->mail->send()){
                return true;
            }else{
                return false;
            }*/
        }
    }
?>