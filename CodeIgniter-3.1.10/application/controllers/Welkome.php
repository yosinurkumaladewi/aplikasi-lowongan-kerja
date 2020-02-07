<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
class Welkome extends CI_Controller {
 
	public function __construct() { 
                parent::__construct(); 
                
                require APPPATH.'libraries/phpmailer/src/Exception.php';
                require APPPATH.'libraries/phpmailer/src/PHPMailer.php';
                require APPPATH.'libraries/phpmailer/src/SMTP.php';
                 
                    }
                    function index() 
                    {

                    echo !extension_loaded('openssl') ? "not available" : "available";
 
                        // PHPMailer object
                     $response = false;
                     $mail = new PHPMailer();
                   
            
                    // SMTP configuration
                    $mail->isSMTP();
                    $mail->Host     = 'localhost'; //sesuaikan sesuai nama domain hosting/server yang digunakan
                    $mail->SMTPAuth = false;
                    $mail->Username = 'yosinurkumala2003@gmail.com'; // user email
                    $mail->Password = '2003yosinurkumaladewi'; // password email
                    $mail->SMTPAutoTLS = 'false';
                    $mail->Port     = 25;
            
                    $mail->setFrom('yosinurkumala2003@gmail.com', ''); // user email
                    $mail->addReplyTo('yosinurkumala2003@gmail.com', ''); //user email
            
                    // Add a recipient
                    $mail->addAddress('permanen29@gmail.com'); //email tujuan pengiriman email
            
                    // Email subject
                    $mail->Subject = 'SMTP Codeigniter'; //subject email
            
                    // Set email format to HTML
                    $mail->isHTML(true);
            
                    // Email body content
                    $mailContent = "&lt;h1>SMTP Codeigniterr&lt;/h1>
                        &lt;p>Laporan email SMTP Codeigniter.&lt;/p>"; // isi email
                    $mail->Body = $mailContent;
            
                    // Send email
                    if(!$mail->send()){
                        echo 'Message could not be sent.';
                        echo 'Mailer Error: ' . $mail->ErrorInfo;
                    }else{
                        echo 'Message has been sent';
                    }
                }
 
}