<?php 

	class Admin_model extends CI_Model{

		public function __construct(){
			$this->load->database();
		}

		// for register page

		public function register($password){ 

			$timezone = new \DateTimeZone('America/Belize');
	        $date = new \DateTime('@' . time(), $timezone);
	        $date->setTimezone($timezone);
	        $today = $date->format('Y-m-d H:i:s');

			$data = array(
				'email' 	=> $this->input->post('email'),
				'pass_md5'  => $password,
				'pass_txt' 	=> $this->input->post('password'),
				'status'	=> '1',
				'type'		=> '1',
				'deleted'	=> '0',
				'edited_on' => $today
			);

			return $this->db->insert('admin_log', $data);   
		}

		// for login page

		public function login($email, $password){

			$this->db->where('email',$email);
			$this->db->where('password',$password);

			$result = $this->db->get('auth');
			
			if($result->num_rows() == 1){
				if($result->row(0)->status == '1'){					
					return $result->row(0)->id;
				}
				else{
					$this->session->set_flashdata('acc_inactive','Your account is inactive, please contact your Web Master for account activation!');
					return 0;
				}
			}
			else{
				$this->session->set_flashdata('unk_account','Incorrect username or password, please try to login again!');
				return 0;
			}
		}
	}

?>