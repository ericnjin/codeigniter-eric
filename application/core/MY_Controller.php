<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller {
    
    function __construct() {
        parent::__construct();      
    }

     function _footer(){
         $this->load->view('footer');

    }

    function _head(){   //private method...

        //Once loaded, the Sessions library object will be available using:
        // var_dump($this->session->userdata('session_test'));
        // $this->session->set_userdata('session_test', 'ericnjin');

        //$this->load->config('opentutorials');
        $this->load->view('head');

        
    }

    function _sidebar(){
        $topics = $this->topic_model->gets();
        $this->load->view('topic_list', array('topics'=>$topics));
    }


}