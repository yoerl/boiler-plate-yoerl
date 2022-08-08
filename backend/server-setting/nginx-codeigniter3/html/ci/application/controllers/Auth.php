<?php

	
	/**
	 * http://codeigniter/index.php/auth
	 * http://codeigniter/index.php/auth/index
	 * http://codeigniter/index.php/auth/home
	 * 
	 */

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

	public function index()
	{
		
		// $this->load->model('Main_model');
		// $this->Main_model->test();
        $result['query'] = $this->db->query('select * from alio')->result_array();
        //  foreach ($result as $item) {
		// 	$data = $item['company'].'<br>';
        //  }

		// $data['query']=$result;
		$this->load->view('page_home',$result);


	}

	public function home()
	{
		$this->load->view('page_home');
	}
}
