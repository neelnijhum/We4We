<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('inc/header');
		$this->load->view('pages/home');
		$this->load->view('inc/footer');

	}
	public function about()
	{
		$this->load->view('inc/header');
		$this->load->view('pages/about');
		$this->load->view('inc/footer');

	}
	public function contact()
	{
		$this->load->view('inc/header');
		$this->load->view('pages/contact');
		$this->load->view('inc/footer');

	}
	public function donators()
	{
		$this->load->view('inc/header');
		$this->load->view('pages/donators');
		$this->load->view('inc/footer');

	}
	public function donation()
	{
		$this->load->view('inc/header');
		$this->load->view('pages/donation');
		$this->load->view('inc/footer');

	}

	

	
	public function signup()
	{	
		
		$data['title']='Sign up';

		$this->form_validation->set_rules('name', 'name', 'required|regex_match[/^[a-zA-Z ]*$/]');
		$this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('mobile', 'mobile','required');
		$this->form_validation->set_rules('password', 'password', 'required|min_length[5]|max_length[10]');
		$this->form_validation->set_rules('c_password', 'confirm password', 'required|matches[password]');
		$this->form_validation->set_rules('address', 'address', 'required|regex_match[/^[a-zA-Z]/]');
		$this->form_validation->set_rules('date_of_birth', 'date_of_birth', 'required');
		$this->form_validation->set_rules('ngo_title', 'ngo_title', 'required');
		$this->form_validation->set_rules('ngo_description', 'ngo_description','required');
		$this->form_validation->set_rules('ngo_logo', 'ngo_logo','required');
		$this->form_validation->set_rules('district_id', 'district_id','required');
		
		
		
		
		
		
		
		
		
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('inc/header');
			$this->load->view('pages/signup',$data);
			$this->load->view('inc/footer');
		}
		else
		{
			
			$idata['name']=$this->input->post('name');
			$idata['email']=$this->input->post('email');
			$idata['mobile']=$this->input->post('mobile');
			$idata['Password']=$this->input->post('password');
			$idata['address']=$this->input->post('address');
			$idata['date_of_birth']=$this->input->post('date_of_birth');
			$idata['type']='user';
			$idata['ngo_title']=$this->input->post('ngo_title');
			
			$idata['ngo_description']=$this->input->post('ngo_description');
			$idata['ngo_logo']=$this->input->post('ngo_logo');
			$idata['district_id']=$this->input->post('district_id');
			
			
			
			

			$this->db->insert('user',$idata);

			$message='<div class="alert alert-success">Data Successfully Inserted</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}
	
	}
	public function login()
	{
		
	 	$this->form_validation->set_rules('email', 'email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'password', 'required|min_length[5]|max_length[10]');
		 
 
 
		if ($this->form_validation->run() == FALSE) {

		$this->load->view('inc/header');
		 $this->load->view('pages/login');
		 $this->load->view('inc/footer');

		}

		else {


			$result=$this->db->where('email',$this->input->post('email'))->where('password',$this->input->post('password'))->get('user')->result_array();

			if($result){


				
				$sdata['email']=$result[0]['email'];
				$sdata['password']=$result[0]['password'];
				
				
				$this->session->set_userdata($sdata);

				if($result[0]['type']=='admin'){

						redirect('Admin');

				}else{

					redirect('User');
				}

			
			}else{


			$message='<div class="alert alert-danger">Wrong Username or Password</div>';

			$this->session->set_flashdata('message',$message);


					redirect('Login');
			}
		}
	}
	      
}

	
	


