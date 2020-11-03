<?php 
    namespace Models;

    class ContatoModel
    {
        public static function enviarFormulario(){
            $gmailUsuario = $_POST['email'];
            $nomeUsuario = $_POST['nome'];

            $mail = new \Email('smtp.gmail.com','empresafortestes@gmail.com','testandomarketing','Empresa');
            $mail->addAddress($gmailUsuario,$nomeUsuario);
            $mail->formatarEmail(array('assunto'=>'Mensagem de teste', 'corpo'=>'Esta é a mensagem que o usuário recebeu da empresa'));
            $mail->enviarEmail();
        }   
    }
    
?>