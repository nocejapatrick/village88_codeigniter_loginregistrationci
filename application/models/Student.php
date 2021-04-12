<?php

class Student extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function create($arr){
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGGIJKLMNOPQRSTUVWXYZ';
        $salt = substr(str_shuffle($permitted_chars), 0, 10);
        $password = md5($salt.$arr['password']);
        
        $student = array(
            'email'=>$arr['email'],
            'password'=>$password,
            'salt'=>$salt
        );
        $this->db->insert('students',$student);
        $student_id = $this->db->insert_id();

        $student_info = array(
            'first_name'=>$arr['first_name'],
            'last_name'=>$arr['last_name'],
            'student_id'=>$student_id
        );
        $this->db->insert('students_info',$student_info);
    }

    public function find_by_email($str){
        return $this->db->get_where('students',['email'=>$str])->row();
    }

    public function get_user_info($id){
        return $this->db->get_where('students_info',['id'=>$id])->row();
    }
}