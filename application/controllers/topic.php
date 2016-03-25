<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Topic extends MY_Controller  {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('topic_model');

        $this->load->helper('form');
        //$this->session->sess_destroy();

       
    }
    function index(){
        // $this->load->view('head');
        // $topics = $this->topic_model->gets();
        // $this->load->view('topic_list', array('topics'=>$topics));
        $this->_head();
        $this->_sidebar();
        
        $this->load->view('main');
        //$this->load->view('footer');
        $this->_footer();
    }
    function get($id){
        // $this->load->view('head');
        // $topics = $this->topic_model->gets();
        // $this->load->view('topic_list', array('topics'=>$topics));
        log_message('debug', 'get 호출');
        $this->_head();
        $this->_sidebar();
        
        $this->load->helper('url','HTML', 'korean');
        $topic = $this->topic_model->get($id);
        if(empty($topic)){
            log_message('debug', '토픽값이 업엇당계...:ㅂ' );
            show_error('OOP ...토픽값이 업엇당!!!');
        }

        $this->load->view('get', array('topic'=>$topic));
        //$this->load->view('footer');
        $this->_footer();
    }

    function add(){

        if(!$this->session->userdata('is_login'))
        {
            //$this->session->sess_destroy();
            //echo("before redirec...");
            $this->load->helper('url');
            redirect('/auth/login?returnURL='.rawurlencode(site_url('/topic/add')));
            
        }else{


        }

        
        $this->_head();
        $this->_sidebar();

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
                //send mails to users
                $this->load->model('user_model');
                $users = $this->user_model->gets();

                $this->load->library('email');
                $this->email->initialize(array( 'mailtype' => 'html'));

        

                //$this->load->helper('url');
                foreach($users as $myuser){
                    //var_dump($myuser);
                    $this->email->from('erkim@ines.co.kr', 'Eric Y. Kim');
                    $this->email->to($myuser->email);

                    $this->email->subject('새로운 글이 등록되었습니다');
                    $this->email->message('<a href="'.site_url('/topic/get/'.$topic_id).'">'.$this->input->post('title').'</a>'); 

                    $this->email->send();
                }

                
                $topic = $this->topic_model->get($topic_id);
                $this->load->view('get', array('topic'=>$topic));
                //$this->load->view('footer');
                //$this->_footer();
                //redirect('/topic/get/'.$topic_id);
        }
        

        // $this->load->helper('url','HTML', 'korean');
        // $topic = $this->topic_model->get($id);
        // $this->load->view('get', array('topic'=>$topic));
        
        //$this->load->view('footer');
        $this->_footer();
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
        $this->_sidebar();
        $this->load->view('upload_form');
        //$this->load->view('footer');
        $this->_footer();

    }

    

   
}
?>
    