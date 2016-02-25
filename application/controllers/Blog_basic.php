<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog_basic extends CI_Controller {
    public function __construct() {
        parent::__construct();
 
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('mvc_sample/blog_basic_model');
    }
     
    public function index() {
        $data = array(
            'blogs' => $this->blog_basic_model->blog_basic()
        );
        
        $this->load->view('mvc_sample/blog_basic', $data);
    }
    
    public function post() {

        echo(" post method");
        $data = array(
            'title' => strip_tags($this->input->post('title', TRUE)),
            'content' => strip_tags($this->input->post('content', TRUE))
        );
        
        if($data['title'] != '' && $data['content'] != '') {
            $this->blog_basic_model->insert($data);
        }
        
        redirect(site_url('blog_basic'));
    }
}
