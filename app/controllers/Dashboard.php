<?php 

/**
 * 
 */
class Dashboard extends Controller
{
	public function index()
	{
        $data['judul'] = 'Dashboard';
        
		$this->view('templates/header', $data);
		$this->view('templates/topbar');
		$this->view('templates/sidebar');
		$this->view('dashboard/index', $data);
		$this->view('templates/footer');
	}
}