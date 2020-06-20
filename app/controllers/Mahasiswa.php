<?php  

class Mahasiswa extends Controller{

	public function index()
	{
		$data['judul'] = 'Daftar Mahasiswa';
		$data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
 		$this->view('templates/header', $data);
		$this->view('mahasiswa/index', $data);
		$this->view('templates/footer');
		$this->view('mahasiswa/modals');
		$this->view('templates/closing');
	}

	public function cari()
	{
		$data['judul'] = 'Daftar Mahasiswa';
		$data['mhs'] = $this->model('Mahasiswa_model')->cariMahasiswa();
 		$this->view('templates/header', $data);
		$this->view('mahasiswa/index', $data);
		$this->view('templates/footer');
		$this->view('mahasiswa/modals');
		$this->view('templates/closing');
	}

	public function detail($id)
	{
		$data['judul'] = 'Detail Mahasiswa';
		$data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
 		$this->view('templates/header', $data);
		$this->view('mahasiswa/detail', $data);
		$this->view('templates/footer');
		$this->view('templates/closing');
	}

	public function tambah()
	{
		if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
			Flasher::setFlash('berhasil', 'ditambahkan', 'success');
			header('Location: '. BASEURL . '/Mahasiswa' );
			exit;
		}else{
			Flasher::setFlash('gagal', 'ditambahkan', 'danger');
			header('Location: '. BASEURL . '/Mahasiswa' );
			exit;
		}
	}

	public function hapus()
	{
		if ($this->model('Mahasiswa_model')->hapusDataMahasiswa($_POST) > 0) {
			Flasher::setFlash('berhasil', 'dihapus', 'success');
			header('Location: '. BASEURL . '/Mahasiswa' );
			exit;
		}else{
			Flasher::setFlash('gagal', 'dihapus', 'danger');
			header('Location: '. BASEURL . '/Mahasiswa' );
			exit;
		}
	}

	public function getUbah()
	{
		echo json_encode($this->model("Mahasiswa_model")->getMahasiswaById($_POST['id']));

	}

	public function ubah()
	{
		if ($this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST) > 0) {
			Flasher::setFlash('berhasil', 'diubah', 'success');
			header('Location: '. BASEURL . '/Mahasiswa' );
			exit;
		}else{
			Flasher::setFlash('gagal', 'diubah', 'danger');
			header('Location: '. BASEURL . '/Mahasiswa' );
			exit;
		}
	}
}

?>