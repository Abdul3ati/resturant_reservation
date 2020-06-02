<?php
defined('BASEPATH') OR exit('no direct script access allowed');
class M_reservation extends CI_Model{

    public function getAll()
    {
        return $this->db->get('reservation')->result_array();
    }

    public function insert()
    {
        $data=[
            "id"=>$this->input->post('id', true),
            "time"=>$this->input->post('time', true),
            "date"=>$this->input->post('date', true),
            "name"=>$this->input->post('name', true),
            "tlpnumber"=>$this->input->post('tlpnumber', true),
            "numberpeople"=>$this->input->post('numberpeople', true),
            "comments"=>$this->input->post('comments', true)
        ];
        $this->db->insert('reservation', $data);
    }

    public function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('reservation');
    }

    public function detail($id)
    {
        return $this->db->get_where('reservation',['id'=>$id])->row_array();
    }

    public function modify()
    {
        $data=[
            "id"=>$this->input->post('id', true),
            "time"=>$this->input->post('time', true),
            "date"=>$this->input->post('date', true),
            "name"=>$this->input->post('name', true),
            "tlpnumber"=>$this->input->post('tlpnumber', true),
            "numberpeople"=>$this->input->post('numberpeople', true),
            "comments"=>$this->input->post('comments', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('reservation', $data);
    }

    public function search()
    {
        $keyword=$this->input->post('keyword');
        $this->db->like('id',$keyword);
        return $this->db->get('reservation')->result_array();
    }

    public function datatables()
    {
        $query= $this->db->order_by('id','DESC')->get('reservation');
        return $query->result();
    }
    public function view(){
        $this->db->select('id,date,time,name,tlpnumber,numberpeople,comments');
        $query= $this->db->get('reservation');
        return $query->result();
    }
}
?>