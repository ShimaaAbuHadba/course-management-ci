<?php 

class User_model extends CI_Model
{
    public function getUser(){
        $query = $this->db->get('users');
        return $query->result();

    }
    public function insert_user($info){
        $data=array('name'=>$info[0],'pass'=>$info[1]);
        $this->db->insert('users',$data);
    }
    
}



?>