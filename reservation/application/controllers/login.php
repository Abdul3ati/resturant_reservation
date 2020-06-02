<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class login extends CI_Controller {

        
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->helper('form');
            $this->load->model('M_login');
            
        }
        
    
        public function index()
        {
            $data['title'] ="login";
            $this->load->view('template/header_login', $data);
            $this->load->view('login/index');
            
            
        }

        public function proses_login(){
            $username=htmlspecialchars($this->input->post('uname1'));
            $username=htmlspecialchars($this->input->post('pwd1'));
    
            $username=$this->input->post('uname1');
            $password=$this->input ->post('pwd1');
    
            $ceklogin=$this->M_login->login($username,$password);
    
            if ($ceklogin) {
                foreach($ceklogin as $row){
                $this->session->set_userdata('user',$row->username);
                $this->session->set_userdata('level',$row->level);
            }
                if ($this->session->userdata('level')=="admin") {
                    redirect('reservation/');
    
                } elseif ($this->session->userdata('level')=="teacher") {
                    
                    redirect('dosen');
                }
                
            } else {
                
                redirect('login','refresh');
            }
            
        }

        public function logout()
        {
            $this->session->sess_destroy();
            redirect('login','refresh');
            
        }
        
    
    }
    
    /* End of file Login.php */
    
?>