<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_login extends CI_Model {
    
        public function login($username,$password)
        {
            $this->db->select('name,password,level');
            $this->db->from('user');
            $this->db->where('name',$username);
            $this->db->where('name', $password);
            $this->db->limit(1);

            $query= $this->db->get();
            if ($query->num_rows()==1) {
                return $query->result();
            } else {
                return false;
            }
            
        }
    
    }
    
    /* End of file Login_model.php */
    
?>