<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Topic extends CI_Controller  {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('topic_model');
        //$this->session->sess_destroy();

       
    }
    function index(){
        // $this->load->view('head');
        // $topics = $this->topic_model->gets();
        // $this->load->view('topic_list', array('topics'=>$topics));
        $this->_head();
        
        $this->load->view('main');
        $this->load->view('footer');
    }
    function get($id){
        // $this->load->view('head');
        // $topics = $this->topic_model->gets();
        // $this->load->view('topic_list', array('topics'=>$topics));
        log_message('debug', 'get 호출');
        $this->_head();
        
        $this->load->helper('url','HTML', 'korean');
        $topic = $this->topic_model->get($id);
        if(empty($topic)){
            log_message('debug', '토픽값이 업엇당계...:ㅂ' );
            show_error('OOP ...토픽값이 업엇당!!!');
        }

        $this->load->view('get', array('topic'=>$topic));
        $this->load->view('footer');
    }

    function add(){

        if(!$this->session->userdata('is_login'))
        {
            //$this->session->sess_destroy();
            echo("before redirec...");
                $this->load->helper('url');
             redirect('/auth/login');
            
        }else{


        }

        
        $this->_head();

        // echo $this->input->post('title');
        // echo $this->input->post('description');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', '제목', 'required');
        $this->form_validation->set_rules('description', '본문', 'required');

        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('add');
        }
        else
        {
                $topic_id=$this->topic_model->add($this->input->post('title'), $this->input->post('description'));
                //echo "Successss.";

                //$this->load->helper('url');

                //redirect('/topic/get/'.$topic_id);
                $topic = $this->topic_model->get($topic_id);
                $this->load->view('get', array('topic'=>$topic));
                $this->load->view('footer');

        
        }
        

        // $this->load->helper('url','HTML', 'korean');
        // $topic = $this->topic_model->get($id);
        // $this->load->view('get', array('topic'=>$topic));
        
        $this->load->view('footer');

    }

    function upload_receive_from_ckeditor(){
        // 사용자가 업로드 한 파일을 /static/user/ 디렉토리에 저장한다.
        $config['upload_path'] = './static/user';
        // git,jpg,png 파일만 업로드를 허용한다.
        $config['allowed_types'] = 'gif|jpg|png';
        // 허용되는 파일의 최대 사이즈
        $config['max_size'] = '100';
        // 이미지인 경우 허용되는 최대 폭
        $config['max_width']  = '1024';
        // 이미지인 경우 허용되는 최대 높이
        $config['max_height']  = '768';

        log_message('debug', '나는 get upload_receive_from_ckeditor()');

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload("upload"))
        {
            echo "<script>alert('업로드에 실패 했습니다. ".$this->upload->display_errors('','')."')</script>";
        }   
        else
        {
            $CKEditorFuncNum = $this->input->get('CKEditorFuncNum');
            $data = $this->upload->data();            
            $filename = $data['file_name'];
            
            $url = '/static/user/'.$filename;
            echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction('".$CKEditorFuncNum."', '".$url."', '전송에 성공 했습니다')</script>";         
        }

        // if ( ! $this->upload->do_upload('upload'))
        // {
        //         show_error('업로드 실패....??');
        //         $error = array('error' => $this->upload->display_errors());
        //         log_message('debug', var_export($error, 1));
                
                //echo $this->load->view('upload_form', $error);
        // }
        // else
        // {
        //         $data = array('upload_data' => $this->upload->data());

        //         echo "file load sucsssss....";
        //         var_dump($data);
        //         //$this->load->view('upload_success', $data);
        // }


    }
    function upload_receive(){
        // 사용자가 업로드 한 파일을 /static/user/ 디렉토리에 저장한다.
        $config['upload_path'] = './static/user';
        // git,jpg,png 파일만 업로드를 허용한다.
        $config['allowed_types'] = 'gif|jpg|png';
        // 허용되는 파일의 최대 사이즈
        $config['max_size'] = '100';
        // 이미지인 경우 허용되는 최대 폭
        $config['max_width']  = '1024';
        // 이미지인 경우 허용되는 최대 높이
        $config['max_height']  = '768';

        log_message('debug', '나는 get upload_receive()');

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('user_upload_file'))
        {
                show_error('업로드 실패....??');
                $error = array('error' => $this->upload->display_errors());
                log_message('debug', var_export($error, 1));
                
                //echo $this->load->view('upload_form', $error);
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());

                echo "file load sucsssss....";
                var_dump($data);
                //$this->load->view('upload_success', $data);
        }


    }

    function upload_form(){
        log_message('debug', 'get upload_form()');

        $this->_head();
        $this->load->view('upload_form');
        $this->load->view('footer');


    }

    function _head(){   //private method...

        //Once loaded, the Sessions library object will be available using:
        // var_dump($this->session->userdata('session_test'));
        // $this->session->set_userdata('session_test', 'ericnjin');

        //$this->load->config('opentutorials');
        $this->load->view('head');
        $topics = $this->topic_model->gets();
        $this->load->view('topic_list', array('topics'=>$topics));

    }
}
?>
