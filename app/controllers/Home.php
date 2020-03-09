<?php 

/**
 * 
 */
class Home extends Controller
{
	public function index()
	{
        $data['judul'] = 'asd';
        
		// $this->view('templates/header', $data);
		// $this->view('templates/topbar');
		// $this->view('templates/sidebar');
		$this->view('frontend/index', $data);
		// $this->view('templates/footer');
	}
}