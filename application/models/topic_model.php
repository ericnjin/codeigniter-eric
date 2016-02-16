<?php
class Topic_model extends CI_Model{
	function __construct(){

			parent::__construct();
	}

	function gets(){

		//$query =  $this->db->query("SELECT * FROM topic");

		$query = $this->db->get_compiled_select('topic');
		$query =  $this->db->query($query);

		
		return $query->result(); 
		//return $this->db->query("SELECT * FROM topic")->result();
	}


	function get($topic_id){
		//echo "I am here";
		//return $this->db->get_where('topic', array('id'=>$topic_id))->row();
		$sql = "select id, title, description, created from topic where id = ?";	
		//$query = $this->db->query($sql, array('id'=>100));
		$query = $this->db->query($sql, array('id'=>$topic_id));
		//$query = $this->db->query("SELECT * FROM topic WHERE id=".$topic_id);

		// if ($query->num_rows() == 1)
		if ($query->num_rows() > 0){
			echo "Success..!!!";
			return $query->row();
		} else {
			echo "Not success ..";
			//echo $query->num_rows(); == 0
			//redirect() 
			return 0; // Has keys 'code' and 'message'
		}
		
		//$query->free_result(); // The $query result object will no longer be available

		
	}




}
?>
