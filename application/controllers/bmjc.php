<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BMJC extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('bmjc_mdl');
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
		$this->data['bmjc_list'] = $this->bmjc_mdl->getbmjclist(); 
		$this->load->view('bmjc_list',$this->data);
	}

	public function add_bmjc()
	{
		$this->load->view('add_bmjc');
	}

	public function edit_bmjc($id)
	{
		$this->data['bmjcarr'] = $this->bmjc_mdl->getbmjc($id);
		$this->load->view('edit_bmjc',$this->data);
	}

	public function add()
	{
		//添加新记录
		$bmjcarr = array(
				'time' => $this->input->post('time'),
				'department' => $this->input->post('department'),
				'people' => $this->input->post('people'),
				'ruleids' => $this->input->post('ruleids'),
				'detail' => $this->input->post('detail'),
				'status' => $this->input->post('status'),
				'remark' => $this->input->post('remark')
			);
		$this->bmjc_mdl->addbmjc($bmjcarr);
		redirect('bmjc');
	}

	public function edit()
	{
		//编辑
		$bmjcarr = array(
				'time' => $this->input->post('time'),
				'department' => $this->input->post('department'),
				'people' => $this->input->post('people'),
				'ruleids' => $this->input->post('ruleids'),
				'detail' => $this->input->post('detail'),
				'status' => $this->input->post('status'),
				'remark' => $this->input->post('remark')
			);
		$this->bmjc_mdl->updatebmjc($this->input->post('id'),$bmjcarr);
		redirect('bmjc');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */