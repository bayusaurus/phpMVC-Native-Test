<?php  

class Home extends Controller
{
	function index()
	{
		$data['judul'] = 'Home';
		$data['nama'] = 'Bayu';
		$this->view('templates/header', $data);
		$this->view('home/index', $data);
		$this->view('templates/footer');
		$this->view('templates/closing');
	}
}

?>