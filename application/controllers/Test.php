<?php 
class Test extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

	function index(){
			//$this->load->view('mvc_sample/hello_view');
			echo("Eric...");
			
	}

	function urlgo(){

        //echo("redirec...");
       

echo("GG...in\n");
        //echo($this/auth/login");

        //$this->session->sess_destroy();
 		//$this->load->helper('url');
 		redirect('auth/login', 'reflesh');

echo("GG\n...out");
        //redirect("auth/login");
        //exit();

        //...http://localhost:8080/index.php/auth/login
		//echo(base_url());
        //redirect(base_url().'index.php/auth/login');
        //echo site_url('/auth/login');

        //echo(redirect('/auth/login'));
        //redirect('/auth/login', 'loaction');
        //redirect('http://www.yahoo.com');
        //redirect('/topic');

	}
}
?>