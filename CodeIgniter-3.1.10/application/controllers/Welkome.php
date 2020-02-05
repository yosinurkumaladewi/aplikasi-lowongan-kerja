<?php 
/**
 * 
 */
class Welkome extends CI_Controller {


    public function index()
    {
        $this->load->library("phpmailer_library");
        $objMail = $this->phpmailer_library->load();
    }
}


 ?>