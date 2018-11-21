<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {


	public function reg()
	{
		$data = array(
			'suc_msg' => $this->session->flashdata('success')
		);
		$this->load->view('users/register', $data);
	}

	public function profile()
	{
		$checkMe = $this->session->userdata('currentuser');
		if(!$checkMe){
			redirect(base_url());
			exit();
		}
		$data = array(
			'cUser' => $this->session->userdata('currentuser')
		);
		$this->load->view('users/profile', $data);
	}




	public function login()
	{
		$data = array(
			'error_msg' => $this->session->flashdata('error_msg')
		);
		$this->load->view('users/login', $data);

	}


	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function process()
	{
		$this->form_validation->set_rules('form_name',    'Your Full Name', 'required|alpha');
		$this->form_validation->set_rules('form_password',      'Password', 'required|min_length[8]');
		$this->form_validation->set_rules('form_con_password', 'Password Confirmation', 'required|matches[form_password]');
		$this->form_validation->set_rules('form_email',       'Email', 'required|valid_email|is_unique[users.email]');


        if ($this->form_validation->run() == FALSE)
        {
							$this->session->set_flashdata('error', 'invalid data');
							$this->load->view('users/register');


        }
        else
        {

			$this->load->model('User');
			$data = array(
				'c_name'    => $this->input->post('form_name',true),
				'c_email'    => $this->input->post('form_email',true),
				'c_password'   => $this->input->post('form_password',true),
				'c_con_password' => $this->input->post('form_con_password',true),
			);
			$this->session->set_flashdata('success', 'Users successfully added. Thanks');
			$this->User->addUser( $data );
			redirect(base_url('register'));
        }
	}
	public function loginprocess()
	{
		// echo 'fk';
		// die();
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');

			// var_dump($_POST);
			// die();

        if ($this->form_validation->run() == FALSE)
        {
						$this->session->set_flashdata('faild', 'invalid data');
						$this->load->view('users/login');

        }
        else
        {
					$email = $this->input->post('email', true);
					$password = $this->input->post('password', true);
					$this->load->model('User');
					$result = $this->User->checkLog($email, $password);
					if($result){
						$this->session->set_userdata('currentuser', $result);
						redirect(base_url('profile'));
					}
					else{

							$this->session->set_flashdata('error_msg', 'User is not found');

							redirect(base_url());
					}


				}
	}


}
