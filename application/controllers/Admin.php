<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
	}
	
	public function index()
	{
		$data['title'] = "Login";
		$this->load->view('header',$data);
		$this->load->view('admin/login');
		$this->load->view('footer');
	}
	
	public function AdminDashboard(){
		if(!$this->session->userdata('id')) return redirect('admin');
		$data['title']='Dashboard';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/dashborad');
		$this->load->view('footer');
	}
	public function adminlogin(){
		
		$data['title'] = "Login";
		$this->form_validation->set_rules('username', 'User Name', 'trim|required');
		$this->form_validation->set_rules('password', 'Password','trim|required');
		if($this->form_validation->run() == false){
			/*$response = array(
                'status' => 'error',
                'message' => validation_errors()
            );*/
						//echo '<pre>';print_r($response);die;
			$this->load->view('header',$data);
			$this->load->view('admin/login',$data);
			$this->load->view('footer');


		}else{
			
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user = $this->Admin_model->login($username,$password);
			//echo '<pre>';print_r($user->username);die;
			if($user){
				$this->session->set_userdata('username',$user->username);
				$this->session->set_userdata('id',$user->id);

				/*$data['title']='Dashboard';
				$this->load->view('admin/header',$data);
				$this->load->view('admin/dashboard');
				$this->load->view('footer');*/
					return redirect('admin/AdminDashboard');

			}else{
			$this->load->view('header',$data);
			$this->load->view('admin/login',$data);
			$this->load->view('footer');				
			}
			//$this->AdminDashboard($data);

		}	
		
	}
	
	
	public function admin_bloglist(){
		$data['title'] = "Admin Blog";
		$this->load->view('admin/header',$data);
		
				
		$limit = 2;
		$offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		
		$config['base_url'] = site_url('products/index_ajax/');
		//$config['total_rows'] = $this->Admin_model->get_Blogs($limit, $offset, $search, $count=true);
		$config['per_page'] = $limit;
		$config['uri_segment'] = 3;
		$config['num_links'] = 3;
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li><a href="" class="current_page">';
		$config['cur_tag_close'] = '</a></li>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = 'Previous';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		
		$this->pagination->initialize($config);

		//$data['blogs'] = $this->Admin_model->get_Blogs($limit, $offset, $search, $count=false);

		$data['pagelinks'] = $this->pagination->create_links();
		
		$this->load->view('admin/admin_bloglist', $data);
		$this->load->view('footer');
	}
	
	
	
	public function add_blog(){
		$data['title'] = "Add Blog";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/add_blog', $data);
		$this->load->view('footer');
		
	}
	
	public function logout(){
		$this->session->unset_userdata('id');
		return redirect('admin');
	}
	
}
