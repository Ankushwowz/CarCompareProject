<?phpclass Email_model extends CI_Model{	function verifyAccount($userId){		$data = array( 'status' => 'A');		 $this->db->where('id', $userId);		return  $this->db->update('users', $data);	}	}?>