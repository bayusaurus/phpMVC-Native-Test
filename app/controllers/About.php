<?php  

/**
 * 
 */
class About extends Controller
{
	public function index($nama = 'Bayu', $pekerjaan ='Bos Besar', $umur = 27)
	{
		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$data['umur'] = $umur;
		$data['judul'] = 'About';

		$this->view('templates/header', $data);
		$this->view('about/index', $data);
		$this->view('templates/footer');
		$this->view('templates/closing');
	}

	public function page()
	{
		$data['judul'] = 'Page';
		$this->view('templates/header', $data);
		$this->view('about/page');
		$this->view('templates/footer');
		$this->view('templates/closing');
	}
}

?>