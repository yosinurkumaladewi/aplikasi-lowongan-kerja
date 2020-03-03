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
		
	}
	function index()
	{
		//$this->load->view('login');
		$data['user']=$this->mdl->pelamar()->result();
		$this->load->view('muncul',$data);

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
						redirect(base_url('index.php/control/user/'));
					}else if($data['level']=='2'){
					 redirect(base_url('index.php/control/perusahaan_control'));
					}else{
						 redirect(base_url('index.php/control/lamar'));
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
		public function lamar()
		{
			$data['user']=$this->mdl->pelamar()->result();
			$this->load->view('pelamar',$data);
		}

		public function perusahaan_control()

		{
			$data['user']=$this->mdl->pelamar()->result();
			$this->load->view('perusahaan',$data);
		}

		public function ssp_unit()
		{
			$sql_details = $this->mdl->get_sql_details();

			$table = 'user';
			$primarykey = 'id_user';
			$columns = array(
				array ('db'=>'id_user','dt'=>0),
			     array ('db'=>'username','dt'=>1,
					//'formatter'=> function($d,$row){
						//if($d == "1"){
							//return "<small class ='label bg-green'>AVAILABLE</small>";
							//}//elseif ($d == "0"){
								//return "<small class ='label bg-green'>NONAVAILABLE</small>";
							//}//else{
								//return "<small class='label'>LAINNYA</small>";
							// }
					//}

			),
				array( 'db'=>'level','dt'=>2),
				array( 'db'=>'password','dt'=>3),
				array( 'db'=>'email','dt'=>4,
				//'formatter'=>function($d,$row){
					//return date('d-m-y ] H:i:s',strtotime($d0);}
				 

				 ),
				array('db'=>'id_user','dt'=>5,
					'formatter'=>function($d,$row){
						return '<a href="javascript:void(0);"   class ="detail_record btn btn-success btn-xs btn-flat"
						title="DETAIL" data-id_user="'.$d.'"  data-toggle="modal" data-target="#detail'.$d.'"><i class="fa fa-search"></i></a>
							<a href="javascript:void(0);"  class="edit_record btn btn-warning btn-xs btn-flat"
						title="EDIT" data-id_user="'.$d.'"   data-toggle="modal" data-target="#edit'.$d.'"><i class="fa fa-edit"></i></a>
							<a href="javascript:void(0);"  data-toggle="modal" data-target="#hapus'.$d.'" class="hapus_record btn btn-danger btn-xs btn-flat"
							title="HAPUS" data-id_user="'.$d.'"><i class="fa fa-trash"></i></a>';


					}
				

			)



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
		function contact()
		{
			$this->load->view('kontak');
		}
		public function ssp_pelamar()
		{
			$sql_details = $this->mdl->get_sql_details();

			$table = 'data_pelamar';
			$primarykey = 'id_pelamar';
			$columns = array(
				array ('db'=>'id_pelamar','dt'=>0),
				array ('db'=>'nama','dt'=>1,
					//'formatter'=> function($d,$row){
						//if($d == "1"){
							//return "<small class ='label bg-green'>AVAILABLE</small>";
							//}//elseif ($d == "0"){
								//return "<small class ='label bg-green'>NONAVAILABLE</small>";
							//}//else{
								//return "<small class='label'>LAINNYA</small>";
							//}
					//}

			),
				array( 'db'=>'alamat','dt'=>2),
				array( 'db'=>'jenis_kelamin','dt'=>3),
				
				array( 'db'=>'id_user','dt'=>4),
				array( 'db'=>'email','dt'=>5),
				array( 'db'=>'no_hp','dt'=>6),
				
				//'formatter'=>function($d,$row){
					//return date('d-m-y ] H:i:s',strtotime($d));
				 

				 
				array('db'=>'id_pelamar','dt'=>7,
					'formatter'=>function($d,$row){
						return '<a href="javascript:void(0);"   class ="detail_record btn btn-success btn-xs btn-flat"
						title="DETAIL" data-id_user="'.$d.'"  data-toggel="modal" data-target="#detail'.$d.'"><i class="fa fa-search"></i></a>
							<a href="javascript:void(0);"  class="edit_record btn btn-warning btn-xs btn-flat"
						title="EDIT" data-id_user="'.$d.'"   data-toggel="modal" data-target="#edit'.$d.'"><i class="fa fa-edit"></i></a>
							<a href="javascript:void(0);"  data-toggel="modal" data-target="#hapus" class="edit_record btn btn-danger btn-xs btn-flat"
							title="HAPUS" data-id_user="'.$d.'"><i class="fa fa-trash"></i></a>';


					}
				

			)



			);
			require 'DataTables/ssp.class.php';
			echo json_encode(
				SSP::simple($_GET,$sql_details,$table,$primarykey,$columns)
			);
		}
		function plmar()
		{
			//$data['data_pelamar']=$this->mdl->get_data_pelamar()->result()
			$this->load->view('data_pelamar');
		}
		public function ssp_perusahaan()
		{
			$sql_details = $this->mdl->get_sql_details();

			$table = 'data_perusahaan';
			$primarykey = 'id_perusahaan';
			$columns = array(
				array ('db'=>'id_perusahaan','dt'=>0),
				array ('db'=>'nama','dt'=>1,
					//'formatter'=> function($d,$row){
						//if($d == "1"){
							//return "<small class ='label bg-green'>AVAILABLE</small>";
							//}//elseif ($d == "0"){
								//return "<small class ='label bg-green'>NONAVAILABLE</small>";
							//}//else{
								//return "<small class='label'>LAINNYA</small>";
							//}
					//}

			),
				array( 'db'=>'alamat','dt'=>2),
				array( 'db'=>'jenis_lowongan','dt'=>3),
				array( 'db'=>'no_hp','dt'=>4),
			
				array( 'db'=>'email','dt'=>5),
			
				array( 'db'=>'id_user','dt'=>6),
				//'formatter'=>function($d,$row){
					//return date('d-m-y ] H:i:s',strtotime($d));
				 

			
				array('db'=>'id_perusahaan','dt'=>7,
					'formatter'=>function($d,$row){
						return '<a href="javascript:void(0);"   class ="detail_record btn btn-success btn-xs btn-flat"
						title="DETAIL" data-id_user="'.$d.'"  data-toggel="modal" data-target="#detail'.$d.'"><i class="fa fa-search"></i></a>
							<a href="javascript:void(0);"  class="edit_record btn btn-warning btn-xs btn-flat"
						title="EDIT" data-id_user="'.$d.'"   data-toggel="modal" data-target="#edit'.$d.'"><i class="fa fa-edit"></i></a>
							<a href="javascript:void(0);"  data-toggel="modal" data-target="#hapus" class="edit_record btn btn-danger btn-xs btn-flat"
							title="HAPUS" data-id_user="'.$d.'"><i class="fa fa-trash"></i></a>';


					}
				

			)



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

}


 ?>