<?php   defined('BASEPATH') OR exit('No direct script access allowed');
 /**
  * 
  */
 class send_email extends CI_controller
 {
 	
 	public function __construct()
 	{
 		parent::__construct();
 
 	}
 	public function index()

 	{
 		$config=Array(
 			'protocol'		=>'smtp',
 			'smtp_host'		=>'smtp.googlemail.com',
 			'smtp_port'		=>465,
 			'smtp_user'		=>'yosinurkumala2003@gmail.com',
 			'smtp_pass'		=>'2003yosinurkumala',
 			'mailtype'		=>'html',
 			'charset'		=>'utf-8',
 			// 'smtp_crypto'	=>'ssl',
 			// 'crlf'			=>"\r\n"
 		);

 		$this->load->library('email',$config);
 		$this->email->set_newline("\r\n");
 		$this->email->from('yosinurkumala2003@gmail.com','Yosi');
 		$this->email->to('yosinurkumala2003@gmail.com');
 		$this->email->subject('silakan coba login');
 		$this->email->message('karepmu');

 		$tes = $this->email->send();
 		if($tes){
 			echo "success";
 		}else{
 			show_error($this->email->print_debugger());
 		}

 	}
 	
 }
 ?>