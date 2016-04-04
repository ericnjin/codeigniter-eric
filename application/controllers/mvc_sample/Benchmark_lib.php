<?php
class Benchmark_lib extends MY_Controller {
	function __construct() {
		parent::__construct();
	}
	
	function index() {
		$this->benchmark->mark('code_start');
		$sum = 0;
		for($i=1; $i <= 1000; $i++) $sum += $i;
		$this->benchmark->mark('code_end');
		
		$data['code'] = $this->benchmark->elapsed_time('code_start', 'code_end');
		//echo $this->benchmark->elapsed_time('code_start', 'code_end');
		
		$this->benchmark->mark('dog');
		$sum = 0;
		for($i=1; $i <= 1000; $i++) $sum += $i;

		$this->benchmark->mark('cat');
		$sum = 0;
		for($i=1; $i <= 1000; $i++) $sum += $i;
		
		$this->benchmark->mark('bird');
		$sum = 0;
		for($i=1; $i <= 1000; $i++) $sum += $i;
		
		$data['dog_cat'] =  $this->benchmark->elapsed_time('dog', 'cat');
		$data['cat_bird'] = $this->benchmark->elapsed_time('cat', 'bird');
		$data['dog_bird'] = $this->benchmark->elapsed_time('dog', 'bird');

		// echo "<br>";
		// echo $this->benchmark->elapsed_time('dog', 'cat');
		// echo "<br>";
		// echo $this->benchmark->elapsed_time('cat', 'bird');
		// echo "<br>";
		// echo $this->benchmark->elapsed_time('dog', 'bird');

		//$this->_footer();
 		//$this->load->view('mvc_sample/benchmark_lib_sample', $data);
 		$this->load->view('mvc_sample/header');
 		//$this->load->view('mvc_sample/test_view', $data);
 		$this->load->view('mvc_sample/test_view2', $data);
 		
 		$this->load->view('mvc_sample/footer');
		//$this->_footer();
	}
}

