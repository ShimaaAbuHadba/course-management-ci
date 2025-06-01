<?php 
   class Test extends CI_Controller {
  
      public function index($id=1) { 
         $this->load->model('Course_model');
		$data['course']=$this->Course_model->getCourse();
		$data['course_id']=$this->Course_model->getCourse_id($id);
         $this->load->view('header',$data);
      }
      public function course($id=1)
	{
		$this->load->model('Course_model');
		$data['course']=$this->Course_model->getCourse();
		$data['course_id']=$this->Course_model->getCourse_id($id);
		// var_dump($data['course']);
		$this->load->view('course',$data);
		
	}
   public function details_course($id=1)
	{
		$this->load->model('Course_model');
		$data['course_id']=$this->Course_model->get_Course_id($id);
		// var_dump($data['course']);
		$this->load->view('detailsCourse',$data);
		
	}
   public function displayy (){
      $this->load->model('Course_model');
		$data['c_name']=$this->input->post('name');
		$data['c_details']=$this->input->post('details');
		$insert = $this->Course_model->insert($data);
		if($insert)
		redirect('/Test/course','location');
		echo 'added successfully';
		

	}

   public function display(){   //insert
      // $data['courseinfo']=$this->Course_model->getCourse();
         $this->load->view('insertCourse');
      
   }
   
   public function edit_course($course_id) {
		// Load the order model
		$this->load->model('Course_model');
		
		// Get the item details using the model's function
		$data['course'] = $this->Course_model->getCourse_id($course_id);
		
		// Load the edit_item_view with the item details for editing
		$this->load->view('editCourse', $data);
	}

   public function update_course($course_id) {
      // Load the order model
      $this->load->model('Course_model');
      
      // Prepare the data to update
      $data = array(
          'c_name' => $this->input->post('name'),
          'c_details' => $this->input->post('details')
      );
      
      // Update the item's details using the model's function
      $update = $this->Course_model->update($course_id, $data);
      
      if ($update) {
         redirect('/Test/course','location'); // Redirect after update
      } else {
          echo 'Failed to update';
      }
  }

    
      public function delete_course($oid){
         $this->load->model('Course_model');
    $id = $oid;

    $delete = $this->Course_model->delete($id);
    if ($delete) {
        echo 'delete successfully';
		redirect('/Test/course','location');
		}else{
			echo 'failed';
    
}
	
}
public function confirm_delete_all() {
   $this->load->model('Course_model');
   if ($this->input->post('confirm') === 'yes') {
       $delete_result = $this->Course_model->delete_all();
       if ($delete_result) {
           echo 'All records deleted successfully.';
           redirect('/Test/course','location');
       } else {
           echo 'Error occurred while deleting records.';
       }
   } else {
       echo 'Deletion canceled.';
   }
}
   } 
?>
