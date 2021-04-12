<?php

class Students extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(['session','form_validation']);
        $this->load->helper(['url']);
        $this->load->model('Student');
    }

    public function login(){
        if($this->session->userdata('user')){
            redirect(base_url().'students/profile');
        }
        $this->load->view('_partials/header');
        $this->load->view('students/login');
        $this->load->view('_partials/footer');
    }

    public function register(){
        $this->form_validation->set_rules($this->rules_register());

        if($this->form_validation->run() == FALSE){
            $errors =  $this->form_validation->error_array();
            foreach($errors as $key=>$value){
                $this->session->set_flashdata($key.'_error',$value);
            }
            redirect(base_url());
        }else{
            $student = $this->Student->find_by_email($this->input->post('email'));
            if($student){
                $this->session->set_flashdata('email_error','Email Already Exist');
                redirect(base_url());
            }

            
            $this->Student->create($_POST);
            $this->session->set_flashdata('success','Registered Successfully');
            redirect(base_url());
        }

    }

    public function login_proccess(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $student = $this->Student->find_by_email($email);

        if($student){
            
            $hashPassword = md5($student->salt.$password);

            if($hashPassword == $student->password){

                $student->info = $this->Student->get_user_info($student->id);
                $this->session->set_userdata('user',$student);

                redirect(base_url().'students/profile');

            }else{
                $this->session->set_flashdata('login_error','Invalid Email or Password');
                redirect(base_url());
            }


            redirect(base_url());
        }else{
            $this->session->set_flashdata('login_error','Invalid Email or Password');
            redirect(base_url());
        }

      
    }

    public function profile(){
        if(!$this->session->userdata('user')){
            redirect(base_url());
        }
        $this->load->view('_partials/header');
        $this->load->view('students/profile');
        $this->load->view('_partials/footer');
    }

    public function logout(){
        $this->session->unset_userdata('user');
        redirect(base_url());
    }

    public function rules_register(){
        return array(
            array(
                'field'=>'email',
                'label'=>'email',
                'rules'=>'required|valid_email'
            ),
            array(
                'field'=>'first_name',
                'label'=>'First Name',
                'rules'=>'required'
            ),
            array(
                'field'=>'last_name',
                'label'=>'Last Name',
                'rules'=>'required'
            ),
            array(
                'field'=>'password',
                'label'=>'Password',
                'rules'=>'required|min_length[8]'
            ),
            array(
                'field'=>'confirm_password',
                'label'=>'Confirm Password',
                'rules'=>'required|matches[password]'
            )
        );
    }
}