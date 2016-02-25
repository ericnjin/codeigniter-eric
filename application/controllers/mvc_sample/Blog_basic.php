<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 블로그 기본 Controller
 *
 * Created on 2014. 10. 20.
 * @author 불의회상(hoksi2k@hanmail.net)
 * @version 1.0
 */
class Blog_basic extends CI_Controller {
    public function __construct() {
        parent::__construct();
        echo("ddddddddddddddddddddddddddd...111111111");
        $this->load->helper('url');
        $this->load->model('mvc_sample/blog_basic_model');
 		$this->load->database();
	    }
      
    public function index() {
        $data = array(
            'blogs' => $this->blog_basic_model->blog_basic()
        );
         
        $this->load->view('mvc_sample/blog_basic', $data);
    }
     
    public function post() {
        $data = array(
            'title' => strip_tags($this->input->post('title', TRUE)),
            'content' => strip_tags($this->input->post('content', TRUE))
        );
         
        if($data['title'] != '' && $data['content'] != '') {
            $this->blog_basic_model->insert($data);
        }
         
        redirect(site_url('mvc_sample/blog_basic'));
    }
}