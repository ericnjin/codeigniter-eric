<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog_basic_model extends CI_Model {
    protected $tbl;
     
    public function __construct() {
        parent::__construct();
         
        // $this->load->database(); // Database Load
        $this->tbl = 'blog_basic';
        $this->pkey = 'blog_basic_id';   
    }
    
	public function blog_basic() {
		$len = 10;
		

        //Eric Modeified
        // $query = $this->db->get_compiled_select('blog_basic');
        // $query =  $this->db->query($query);  
        // return $query->result(); 

		
        return $this->db->order_by('created', 'description')->limit($len)->get($this->tbl)->result_array();
        //return $this->db->order_by('created')->limit($len)->get($this->tbl)->result_array();
	}
	
    public function insert($data) {
    	$this->db->set('created', 'now()', FALSE);
        $this->db->insert($this->tbl, $data);
		
		return $this->db->insert_id();
	}
}
