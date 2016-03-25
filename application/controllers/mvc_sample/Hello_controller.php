
<?php
class Hello_controller extends CI_Controller{
	function index($name = 'Controller'){
	//function _remap($name = 'world'){
		echo("Eric...".$name." !!!!");

		$this->load->model('mvc_sample/Hello_m', 'EricModel');
		//echo  $this->Hello_m->get_name();
		echo  $this->EricModel->get_name()."..";

		//$this->load->view('mvc_sample/Hello_view');

		$data['todo_list'] = array('task1', 'task2', 'task3');
		$data['title'] = 'Rambo';
		$data['heading'] =" To be or ot to be";	
		$this->load->view('mvc_sample/test_view', $data);


		$this->benchmark->mark('code_start'); //---------------

// Some code happens here

		$prefs = array(
		        'start_day'    => 'saturday',
		        'month_type'   => 'long',
		        'day_type'     => 'short'
		);

		$this->load->library('calendar', $prefs);

		echo $this->calendar->generate();



		$this->benchmark->mark('code_end'); //--------------------------

		echo $this->benchmark->elapsed_time('code_start', 'code_end');

		//echo $this->benchmark->memory_usage();



		

	}




}
