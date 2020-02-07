<?php 
/**
 * 
 */
class control extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mdl');
		
	}
	function index()
	{
		$this->load->view('login');

	 }
	 function login()
	 {
		$username = $this->input->post('username');
		$password= $this->input->post('password');
		$data = array('username'=>$username);

		$log=$this->mdl->cek_login($data);
		if ($log->num_rows(0))

		{
			foreach ($log->result_array() as $data ) {
				$this->session->set_userdata($data);
				if(md5($password)==$data['password']){
					if($data['level']=='1'){
						echo "Anda Adalah SuperAdmin";
					}else if($data['level']=='2'){
						echo "Anda Adalah Perusahaan";
					}else{
						redirect(base_url('index.php/control/user/'));
					}
				}else{
					echo "password salah";
				}
				}

			}else{
				echo "username salah";
			}
			
		}
		public function user()
		{
			$data['user']=$this->mdl->pelamar()->result();
			$this->load->view('muncul',$data);

			
		}

}


 ?>