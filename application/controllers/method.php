<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Method extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('method_mdl');
	}
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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->data['result'] = $this->method_mdl->countPageNum($this->input->post('pageString')); 
		$this->load->view('method',$this->data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */