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
 		$config=[
 			'mailtype'=>'html',
 			'charset'=>'utf-8',
 			'protocol'=>'smtp',
 			'smtp-host'=>'smtp.gmail.com',
 			'smtp-user'=>'yosinurkumala2003@gmail.com',
 			'smtp-pass'=>'2003yosinurkumala',
 			'smtp-crypto'=>'ssl',
 			'smtp-port'=>465,
 			'crlf'=>"\r\n",
 			'newline'=>"\r\n"

 		];
 		$this->load->library('email',$config);
 		$this->email->set_newline("\r\n");
 		$this->email->from('yosinurkumala2003@gmail.com','Yosi');
 		$this->email->to('ningmell8367@gmail.com');
 		$this->email->subject('silakan coba login');
 		$this->email->message('karepmu');

 		$tes=$this->email->send();
 		if($tes){
 			echo "success";
 		}else{
 			echo("gagal");
 		}

 	}
 	
 }
 ?>