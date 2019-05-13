<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	/*public function __construct()
	{
		
	}*/
	public function index()
	{
		$this->load->model('MBook');
		$data = $this->MBook->all();

		$this->load->view('web/layout', ['book'=>$data, 'subview'=>'admin/subview_index']);
	}

	public function detail($id)
	{
		$this->load->model('MBook');
		$data = $this->MBook->row($id);
		$this->load->view('web/layout', ['data'=>$data, 'subview'=>'admin/subview_detail']);
	}
}
