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
	 		$this->load->model('mdl_petugas');
	 		$this->load->model('mdl_perusahaan');
	 		$this->load->model('mdl_pelamar');
		}
		function index()
		{
			//$this->load->view('login');
			$data['user']=$this->mdl->pelamar()->result();
			$this->load->view('muncul',$data);
		}
		public function login()
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
							redirect(base_url('index.php/control/user/'));
						}else if($data['level']=='2'){
						 redirect(base_url('index.php/control/home_perusahaan'));
						}else{
							redirect(base_url('index.php/control/home_lamar'));
						}
					}else{
						$this->session->set_flashdata(array(
							'pesan' => 'password salah',
							'type' => 'danger',
						));
						redirect(base_url('index.php/kontrol/login'));
					}
				}
			}else{
				$this->session->set_flashdata(array(
					'pesan' => 'username salah',
					'type' => 'danger',
				));
				redirect(base_url('index.php/kontrol/login'));
			}
		}
		public function user()
		{
			$data['user']=$this->mdl->pelamar()->result();
			$this->load->view('muncul',$data);
		
		}
		public function home_lamar()
		{
			$this->load->view('home_lamar');
		}

		public function lowongan_lamar()
		{
			// Konten setiap lowongan (bukan CRUD)
			$this->load->view('lowongan_lamar');
		}

		public function profil_lamar()
		{
			// Detail Profil Pelamar yang login
			// Bisa diedit
			$this->load->view('profil_lamar');
		}

		public function home_perusahaan()
		{
			// Total Lowongan yang dipunyai
			// Total Lamaran yang masuk
			// Total Lamaran yang masuk per hari ini
			$this->load->view('home_perusahaan');
		}

		public function lowongan_perusahaan()
		{
			// CRUD Lowongan yang dimiliki perusahaan tersebut
			$this->load->view('lowongan_perusahaan');
		}

		public function lamaran_perusahaan()
		{
			// CRUD Lamaran Masuk ke lowongan yang dimiliki perusahaan tersebut
			$this->load->view('lamaran_perusahaan');
		}

		public function profil_perusahaan()
		{
			// Detail Profil Perusahaan Yang Login
			// Bisa diedit
			$this->load->view('profil_perusahaan');
		}

		public function ssp_unit()
		{
			$sql_details = $this->mdl->get_sql_details();

			$table = 'user';
			$primarykey = 'id_user';
			$columns = array(
				array ('db'=>'id_user','dt'=>0),
			    array ('db'=>'username','dt'=>1),
				array( 'db'=>'level','dt'=>2),
				array( 'db'=>'password','dt'=>3),
				array( 'db'=>'email','dt'=>4),
				array('db'=>'id_user','dt'=>5,
					'formatter'=>function($d,$row){
						return '<a href="javascript:void(0);"   class ="detail_record btn btn-success btn-xs btn-flat"
						title="DETAIL" data-id_user="'.$d.'"  data-toggle="modal" data-target="#detail'.$d.'"><i class="fa fa-search"></i></a>
							<a href="javascript:void(0);"  class="edit_record btn btn-warning btn-xs btn-flat"
						title="EDIT" data-id_user="'.$d.'"   data-toggle="modal" data-target="#edit'.$d.'"><i class="fa fa-edit"></i></a>
							<a href="javascript:void(0);"  data-toggle="modal" data-target="#hapus'.$d.'" class="hapus_record btn btn-danger btn-xs btn-flat"
							title="HAPUS" data-id_user="'.$d.'"><i class="fa fa-trash"></i></a>';
					})
			);
			require 'DataTables/ssp.class.php';
			echo json_encode(
				SSP::simple($_GET,$sql_details,$table,$primarykey,$columns)
			);
		}

		public function home()
		{
			$data['user']=$this->mdl->pelamar()->result();
			$this->load->view('muncul',$data);
		}
		
		public function ssp_pelamar()
		{
			$sql_details = $this->mdl->get_sql_details();

			$table = 'data_pelamar';
			$primarykey = 'id_pelamar';
			$columns = array(
				array ('db'=>'id_pelamar','dt'=>0),
				array ('db'=>'nama','dt'=>1),
				array( 'db'=>'alamat','dt'=>2),
				array( 'db'=>'jenis_kelamin','dt'=>3),
				array( 'db'=>'id_user','dt'=>4),
				array( 'db'=>'email','dt'=>5),
				array( 'db'=>'no_hp','dt'=>6),
				array('db'=>'id_pelamar','dt'=>7,
					'formatter'=>function($d,$row){
						return '<a href="javascript:void(0);"   class ="detail_record btn btn-success btn-xs btn-flat"
						title="DETAIL" data-id_user="'.$d.'"  data-toggle="modal" data-target="#detail'.$d.'"><i class="fa fa-search"></i></a>
							<a href="javascript:void(0);"  class="edit_record btn btn-warning btn-xs btn-flat"
						title="EDIT" data-id_user="'.$d.'"   data-toggle="modal" data-target="#edit'.$d.'"><i class="fa fa-edit"></i></a>
								<a href="javascript:void(0);"  data-toggle="modal" data-target="#hapus'.$d.'" class="hapus_record btn btn-danger btn-xs btn-flat"
							title="HAPUS" data-id_user="'.$d.'"><i class="fa fa-trash"></i></a>';
					})
			);
			require 'DataTables/ssp.class.php';
			echo json_encode(
				SSP::simple($_GET,$sql_details,$table,$primarykey,$columns)
			);
		}
		function plmar()
		{
			$data['data_pelamar']=$this->mdl_pelamar->awal()->result();
			$this->load->view('data_pelamar',$data);
		}
		public function ssp_perusahaan()
		{
			$sql_details = $this->mdl->get_sql_details();

			$table = 'data_perusahaan';
			$primarykey = 'id_perusahaan';
			$columns = array(
				array ('db'=>'id_perusahaan','dt'=>0),
				array ('db'=>'nama','dt'=>1),
				array( 'db'=>'alamat','dt'=>2),
				array( 'db'=>'jenis_lowongan','dt'=>3),
				array( 'db'=>'no_hp','dt'=>4),
				array( 'db'=>'email','dt'=>5),
				array( 'db'=>'id_user','dt'=>6),
				array('db'=>'id_perusahaan','dt'=>7,
					'formatter'=>function($d,$row){
						return '<a href="javascript:void(0);"   class ="detail_record btn btn-success btn-xs btn-flat"
						title="DETAIL" data-id_user="'.$d.'"  data-toggle="modal" data-target="#detail'.$d.'"><i class="fa fa-search"></i></a>
							<a href="javascript:void(0);"  class="edit_record btn btn-warning btn-xs btn-flat"
						title="EDIT" data-id_user="'.$d.'"   data-toggle="modal" data-target="#edit'.$d.'"><i class="fa fa-edit"></i></a>
							<a href="javascript:void(0);"  data-toggle="modal" data-target="#hapus'.$d.'" class="hapus_record btn btn-danger btn-xs btn-flat"
							title="HAPUS" data-id_user="'.$d.'"><i class="fa fa-trash"></i></a>';
					})
			);
			require 'DataTables/ssp.class.php';
			echo json_encode(
				SSP::simple($_GET,$sql_details,$table,$primarykey,$columns)
			);
		}
		public function show_perusahaan()
		{
			$data['data_perusahaan']=$this->mdl_perusahaan->awal()->result();
			$this->load->view('data_perusahaan',$data);
		}

		public function jenis_lowongan()
		{
			$this->load->view('jenis_lowongan');
		}

		public function profil_admin()
		{
			$this->load->view('profil_admin');
		}
}
?>