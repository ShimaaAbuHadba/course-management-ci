<?php
class order_model extends CI_Model{
       public function get_order(){  // the same function in controller
           
            $query=$this->db->get('items_tb'); //table name
            return $query->result();
        }
        // public function insert_order($info){
        //     $data=array('order_name'=>$info[0],'order_description'=>$info[1]);
        //     $this->db->insert('orders',$data);


        // }
}
?>