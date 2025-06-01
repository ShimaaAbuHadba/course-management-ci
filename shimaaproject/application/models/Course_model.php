<?php 

class Course_model extends CI_Model
{
    public function getCourse(){
        $query = $this->db->get('course_tb');
        return $query->result();

    }
    public function get_Course_id($id){
        $this->db->where('c_id',$id);
        $query = $this->db->get('course_tb');
        return $query->result();

    }
    public function getCourse_id($id){
        $this->db->where('c_id',$id);
        $query = $this->db->get('course_tb');
        return $query->row();

    }

    
    public function insert($data){
        $this->db->insert('course_tb',$data);
        return true ;
    }
    public function update($id,$data){
        $this->db->where('c_id',$id);
        $query = $this->db->update('course_tb',$data);
        return true;

    }

    public function delete($id){
        $this->db->where('c_id',$id);
        $this->db->delete('course_tb');
        return true;

    }
    public function delete_all() {
        if ($this->input->post('confirm') === 'yes') {
            // Proceed with deletion
            $this->db->empty_table('course_tb');
            return true;
        } else {
            // Not confirmed
            return false;
        }
    }
}
    



?>