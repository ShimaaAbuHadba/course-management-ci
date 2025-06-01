<?php
class User extends CI_Controller
{
    // function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('user_model');
    // }

    function add()
    {
        $this->load->model('User_model');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $mobile = $this->input->post('mobile');
            $address = $this->input->post('address');
            $data = array(
                'username' => $username,
                'email' => $email,
                'mobile' => $mobile,
                'address' => $address,
            );

            $status =  $this->User_model->insertUser($data);
            if ($status == true) {
                redirect(base_url('user/add'));
            } else {
                $this->load->view('user/add_user');
            }
        } else {
            $this->load->view('user/add_user');
        }
    }

    function index()
    {
        $this->load->model('User_model');
        $data['users'] = $this->User_model->getUsers();
        $this->load->view('user/index', $data);
    }

    function edit($id)
    {
        $this->load->model('User_model');
        $data['user'] = $this->User_model->getUser($id);
        $data['id']=$id;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $mobile = $this->input->post('mobile');
            $address = $this->input->post('address');
            $data = array(
                'username' => $username,
                'email' => $email,
                'mobile' => $mobile,
                'address' => $address,
            );

            $status =  $this->User_model->updateUser($data, $id);
            if ($status == true) {
                redirect(base_url('user/edit/'.$id));
            } else {
                $this->load->view('user/edit_user');
            }
        }

        $this->load->view('user/edit_user',$data);
    }

    function delete($id)
    {
        $this->load->model('User_model');
        if(is_numeric($id))
        {
            $status =$this->User_model->deleteUser($id);
            if ($status == true) {
                redirect(base_url('user/index/'));
            } else {
                redirect(base_url('user/index/'));
            }
        }
    }
}
