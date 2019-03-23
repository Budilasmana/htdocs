<?php 
 
class m_login extends CI_Model{	
	function cek_login($username,$password){		
	$periksa = $this->db->get_where('admin', array('Username'=>$username, 'Password'=>$password));

	if($periksa->num_rows()>0){
		return 1;
	}else{
		return 0;
	}
	}	
}