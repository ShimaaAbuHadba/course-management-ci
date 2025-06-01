<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		// $this->load->view('welcome_message');
		
	}
	public function course($id=1)
	{
		$this->load->model('Course_model');
		$data['course']=$this->Course_model->getCourse();
		$data['course_id']=$this->Course_model->getCourse_id($id);
		// var_dump($data['course']);
		$this->load->view('course',$data);
		
	}
	// public function users()
	// {
		
	// 	$this->load->model('User_model'); // Load the model
	// 	$data['users']=$this->User_model->getUser();
	// 	$this->load->view('users',$data);
	// }
	// public function insert_user(){
	// 	$this->load->model('User_model'); // Load the model
	// 	$result=$this->User_model->insert_user($_POST['data']);
        
    // }
}
