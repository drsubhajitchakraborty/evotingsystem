<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('welcome');
	}

	public function check()
	{
		$epic=$this->input->post('epic');
		
		$_SESSION['epic']=$epic;
	
		$data['epic']= $epic;
	
		$this->load->model('Welcome_model');
		$this->Welcome_model->search($data);

	}

	public function home()
	{
		$this->load->view('evm');
	}

	public function error()
	{
		$data['error']="<h3>This Epic Number is not in our record !!</h3>";
		$this->load->view('welcome',$data);
	}

	public function invaild()
	{
	      $data['blank']="<h3>Please Enter Epic Number !!</h3>";
		  $this->load->view('welcome',$data);
	}

	public function vote()
	{
		
		$value="Done";
		$data=[ "vote"=> $value ];
		$name = array (

			'nam'=>$this->input->post('select')

		);

		$this->load->model('Welcome_model');
		$this->Welcome_model->votecount($name);
		$this->Welcome_model->insert($data);
		$this->load->view('confrim');


	}

	public function admin()
	{
		$this->load->view('admin');
	}

	public function contact()
	{
		$this->load->view('contact');
	}

	public function registration()
	{
		$this->load->view('registration');
	}

	public function result()
	{
		$this->load->view('result');
	}

	public function developer()
	{
		$this->load->view('subhajitchakraborty');
	}


}
?>
