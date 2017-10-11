<?php


class Employee extends CI_Controller {

	
	public function index()
	{   
		$data['main_view'] = 'admin/employee_registration';
		$this->load->view('admin/layouts/main',$data);
	}
}
