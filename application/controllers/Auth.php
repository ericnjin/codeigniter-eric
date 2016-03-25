<?php
class Auth extends MY_Controller  {
    function __construct()
    {
        parent::__construct();
    }

    function login(){
    	echo "Hello Auth....";

        //$this->load->view('head');
        $this->_head();
        //$this->load->view('login');
        $this->load->view('login', array('returnURL'=>$this->input->get('returnURL')));     

        //$this->load->view('footer');

        $this->_footer();

    }

    function logout(){
        $this->session->sess_destroy();
        $this->load->helper('url');
        redirect('/');
    }

    function register(){

        //echo "register test";
        $this->load->helper('form');
        $this->_head();
        //$this->load->view('login');

        $this->load->library('form_validation');

        // $this->form_validation->set_rules('email', '이메일 주소', 'required|valid_email|is_unique[user.email]');
        // $this->form_validation->set_rules('nickname', '닉네임', 'required|min_length[5]|max_length[20]');
        // $this->form_validation->set_rules('password', '비밀번호', 'required|min_length[6]|max_length[30]|matches[re_password]');
        $this->form_validation->set_rules('email', '이메일 주소', 'required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('nickname', '닉네임', 'required');
        $this->form_validation->set_rules('password', '비밀번호', 'required');
        $this->form_validation->set_rules('re_password', '비밀번호 확인', 'required');

        if($this->form_validation->run()  == false) {
            $this->load->view('register');
        } else {
            //Insert into DB
            //echo "Hi~~";
            if(!function_exists('password_hash')){
                $this->load->helper('password');  //load password_helper.php    
            }
            
            $hash = password_hash($this->input->post('password'), PASSWORD_BCRYPT);

            $this->load->model('user_model');
            $ret = $this->user_model->add(array(
                'email' => $this->input->post('email'),
                //'password' => $this->input->post('password'),
                'password' => $hash,
                'nickname' => $this->input->post('nickname')
            )); 

            if($ret){
                $this->session->set_flashdata('message', '회원가입에 성공했습니다.');
                $this->load->helper('url');
                redirect('/');
            } else {
                echo "What the hell ? DB error??";
            }
            
        }

        
        $this->_footer();
    }


    function authentication(){

    	//$authentication = $this->config->item('authentication');
        $this->load->model('user_model');
        $user = $this->user_model->getByEmail(array(
                'email' => $this->input->post('email')  
            ));

    	if( $this->input->post('email') == $user->email && 
            password_verify($this->input->post('password'), $user->password)
    		//$this->input->post('password') == $user->password
    		){
    		echo "'Success Login//";
    		//set_userdata ==> is_login, true
    		$this->session->set_userdata('is_login', true);

    	    //helper('url');
    	    $this->load->helper('url');
            $returnURL = $this->input->get('returnURL');
            if($returnURL === false){
                $returnURL = '/';
            }
            redirect($returnURL);
    		
    		//redirect ('topic/add')
    		//redirect('topic/add', 'reflesh');
            //redirect('/');


    	}
    		
    	else{
    		echo "'NOT Success !!!//";
    		//set_flash
    		$this->session->set_flashdata('message', 'Login Failed..');  //Codeigniter 기능 
    		$this->load->helper('url');
    		
    		//redirect ('topic/add')
    		redirect('auth/login', 'reflesh');

    	}
    }

}