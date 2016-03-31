<?php
class Cart_lib extends CI_Controller {
	function __construct() {
		parent::__construct();

		// Cart Lib load
		$this->load->library('cart');
		// Url Helper load
		$this->load->helper('url');
		// Form Helper load
		$this->load->helper('form');
	}
	
	function index() {

		$this->load->view('mvc_sample/header');
 		$this->load->view('mvc_sample/cart_lib_sample');
 		$this->load->view('mvc_sample/footer');	
	}
	
	// Cart Add
	function add() {
		$cart_data = array(
			'id'		=> $this->input->post('id'),
			'qty'		=> $this->input->post('qty'),
			'price'		=> $this->input->post('price'),
			'name'		=> $this->input->post('name'),
			'options'	=> array(
				'Size' => $this->input->post('size'), 
				'Color' => $this->input->post('color')
			)
		);
		
		$this->cart->insert($cart_data);
		$this->_go_cart();
	}

	// Cart Update
	function update() {
		$cart_data = array();
		$qty = $this->input->post('qty');
		$rowid = $this->input->post('rowid');
		$del = $this->input->post('del');
		
		for($i=0; $i < count($del); $i++) {
			$qty[$del[$i]] = 0;
		}
		
		for($i=0; $i < count($rowid); $i++) {
			$cart_data[$i] = array('qty' => $qty[$i], 'rowid' => $rowid[$i]);
		}
		
		$this->cart->update($cart_data);
		$this->_go_cart();
	}
	
	// Cart Destory
	function destroy() {
		$this->cart->destroy();
		$this->_go_cart();
	}
	
	// Display Cart
	function _go_cart() {
		redirect('cart_lib');
	}
}
