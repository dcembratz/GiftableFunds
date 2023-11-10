<?php

    class Auth extends CI_Controller {

        public function login(){

			$email 	  = $this->input->post('email');
			//$password = $this->input->post('password');
			$password = md5($this->input->post('password'));

			
			$user_id = $this->admin_model->login($email, $password); 

			if($user_id){
				//create session
				$admin_data = array(
					'admin_id' => $user_id,
					'email' => $email,
					'logged_in' => true
				);

				$this->session->set_userdata($admin_data);

				//redirect to dashboard
				redirect('admin/orders');
			}
			else {
				redirect('admin/signin'); 
			}
		}

        public function logout(){
			$this->session->unset_userdata('admin_id');
			$this->session->unset_userdata('email');
			$this->session->unset_userdata('logged_in');

			$this->session->set_flashdata('admin_loggedout','You have been successfully logged out!');
			redirect('admin/signin');
		}	
    }
?>