<?php  

class Phpmailer_lib
{
    public function __construct()
    {
        log_message('Debug', 'PHPMailer class is loaded.');
    }

    public function load()
    {
        require_once APPPATH.'third_party/PHPMailer/Exception.php';
        require_once(APPPATH.'third_party/PHPmailer/src/PHPMailer.php');
        require_once(APPPATH.'third_party/PHPmailer/src/SMTP.php');
        $mail = new PHPMailer();
        return $mail;
    }
}

?>