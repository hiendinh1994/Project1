<?php 
/**
 * 
 */
class admin extends CI_Controller
{
	
	public function index()
	{
		$this->load->model('MCAD');
		$data = $this->MCAD->all();

		$this->load->view('clickanddrink/index', ['nuoc'=>$data]);

	}
}
 ?>