<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customer extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('reservation_model');
        $this->load->model('cetak_model');
        //$this->load->library('session');

        //validasi level
        // if($this->session->userdata('level') !="customer"){
        //     redirect('login','refresh');
        // }
    }
    public function index()
    {
        // $data = array(
        //     'title'=>'data reservation',
        //     'reservation'=>$this->reservation_model->datatables()
        // );
        $this->load->view('template/header');
        $this->load->view('reservation/index');
        // $this->load->view('template/footer_datatables_user');
    }

    public function tambah()
    {
        $data['title']='Form Mendaftarkan Data reservat';
        $data['numberpeople']=['1','2','3','4'];
        $this->set_rules('time','Time','required');
        $this->set_rules('date','Date','required');
        $this->set_rules('name','Name','required');
        $this->set_rules('tlpnumber','Nama','required|numeric');
        $this->set_rules('comments','Comments');
        

        if ($this->form_validation->run() == FALSE){
            $this->load->view('template/header_datatables_user', $data);
            $this->load->view('reservation/tambah', $data);
            $this->load->view('template/footer_datatables_user');
        } else {
            $this->reservation_model->tambahdatarsr();
            $this->session->set_flashdata('flash-data','added');
            redirect('customer','refresh');
        }
 
    }

}
?>