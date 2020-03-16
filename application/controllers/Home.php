<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('product_model');
	}
	
	public function index()
	{
		$data['title'] = "Blogger";
		$this->load->view('header',$data);
		$this->load->view('banner');
		$this->load->view('home');
		$this->load->view('footer');
	}
	public function about()
	{   
		$data['title'] = "About";
		$this->load->view('header',$data);
		$this->load->view('about');
		$this->load->view('footer');
	}
	public function contact()
	{   
		$data['title'] = "Contact";
		$this->load->view('header',$data);
		$this->load->view('contact');
		$this->load->view('footer');
	}
	public function blog()
	{   
		$data['title'] = "Blog";
		$this->load->view('header',$data);
		$this->load->view('blog/bloglist');
		$this->load->view('footer');
	}
	public function blog_detail()
	{   
		$data['title'] = "Blog Detail";
		$this->load->view('header',$data);
		$this->load->view('blog/blog_detail');
		$this->load->view('footer');
	}
	public function login()
	{   
		$data['title'] = "Login";
		$this->load->view('header',$data);
		$this->load->view('admin/login');
		$this->load->view('footer');
	}
}
