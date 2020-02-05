<?php  

class Phpmailer_library
{
    public function __construct()
    {
        log_message('Debug', 'PHPMailer class is loaded.');
    }

    public function load()
    {
        require_once(APPPATH.'third_party/PHPmailer/src/PHPMailer.php');
        require_once(APPPATH.'third_party/PHPmailer/src/SMTP.php');
        $objMail = new PHPMailer\PHPMailer\PHPMailer();
        return $objMail;
    }
}

?>