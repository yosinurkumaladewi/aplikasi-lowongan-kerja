  <?php /**
   * 
   */
  class mdl extends CI_Model
  {
    function reg()
    {
      return $this->db->get('user');
    }
    		
    
    function register($data_user)
    {
      $this->db->insert('user',$data_user);
    }
    function cek_login($data)
    {
    	$this->db->where($data);
    	return $this->db->get('user');
  }
  public function pelamar()
  {

  	return $this->db->get('user');
  }
  function get_sql_details()
  {
    return array(
      'user'=>'root',
      'pass'=>'',
      'db'=>'lowongan_kerja',
      'host'=>'localhost'
    );
    
    
  }
  

} 
?>