<?php
class Auth extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function login(){
    	echo "Hello Auth....";

        $this->load->view('head');
        $this->load->view('login');
        $this->load->view('footer');

    }
    function authentication(){

    	$authentication = $this->config->item('authentication');

    	if( $this->input->post('id') == $authentication['id'] && 
    		$this->input->post('password') == $authentication['password'] 
    		){
    		echo "'Success Login//";
    		//set_userdata ==> is_login, true
    		$this->session->set_userdata('is_login', true);

    	    //helper('url');
    	    $this->load->helper('url');
    		
    		//redirect ('topic/add')
    		redirect('topic/add', 'reflesh');


    	}
    		
    	else{
    		echo "'NOT Success !!!//";
    		//set_flash
    		$this->session->set_flashdata('message', 'Login Failed..');
    		$this->load->helper('url');
    		
    		//redirect ('topic/add')
    		redirect('auth/login', 'reflesh');

    	}
    }

}