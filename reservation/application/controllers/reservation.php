<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class reservation extends CI_Controller {
    
        public function __construct(){
            
            parent::__construct();
            // $this->load->database();
            $this->load->model('M_reservation');
            $this->load->library('form_validation');

            if($this->session->userdata('level')!="admin"){
                redirect('login','refresh');
            }
        }

        public function index()
        {
            $data['title']='reservation List';
            $data['reservation']=$this->M_reservation->getAll();
            if ($this->input->post('keyword')) {
                $data['reservation']=$this->M_reservation->search();
            }
            $this->load->view('template/header',$data);
            $this->load->view('reservation/index',$data);
          

        }

        public function AddData()
        {
            $data['title'] = "Add new reservation";
    
            $this->form_validation->set_rules('id','id', 'required');
            if($this->form_validation->run() == FALSE){
    
                $this->load->view('template/header', $data);
                $this->load->view('reservation/add');

            }else {
                $this->M_reservation->insert();
                $this->session->set_flashdata('flash-data', 'Added');
                redirect('reservation','refresh');
                
            } 
        }

        public function delete($id)
        {
            $this->M_reservation->delete($id);
            $this->session->set_flashdata('flash-data','deleted');
            redirect('reservation', 'refresh');
        }
    
        public function detail($id)
        {
            $data['title']='reservation Detail';
            $data['reservation']=$this->M_reservation->detail($id);
            $this->load->view('template/header', $data);
            $this->load->view('reservation/detail', $data);
         
        }

        public function edit($id){
            $data['title']='Edit reservation Data';
            $data['reservation']=$this->M_reservation->detail($id);

            $this->form_validation->set_rules('id','id', 'required');
            
            if ($this->form_validation->run()==false) {
                $this->load->view('template/header', $data);
                $this->load->view('reservation/edit', $data);
            }
            else{
                $this->M_reservation->modify();
                $this->session->set_flashdata('flash-data', 'edit it');
                redirect('reservation','refresh');
            }
        }
        public function pdf(){
            $this->load->library('pdf');
    
            $data['reservation']= $this->M_reservation->view();
            $this->load->library('pdf');
    
            $this->pdf->setPaper('A4', 'potrait');
            $this->pdf->filename = "List.pdf";
            $this->pdf->load_view('reservation/print', $data);
        }
    }
    
   
    
?>