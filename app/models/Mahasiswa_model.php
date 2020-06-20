<?php  

class Mahasiswa_model
{
	//database handler
	private $table = 'mahasiswa';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllMahasiswa()
	{	
		$this->db->query("SELECT * FROM ".$this->table);
		$this->db->execute();
		return $this->db->resultSet();
	}

	public function getMahasiswaById($id)
	{	
		$this->db->query('SELECT * FROM '. $this->table .' WHERE id=:id');
		$this->db->bind('id', $id);
		$this->db->execute();
		return $this->db->single();
	}

	public function tambahDataMahasiswa($data)
	{	
		$this->db->query('INSERT INTO '. $this->table ." VALUES ('', :nama, :nim, :email, :jurusan)");
		
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('nim', $data['nim']);
		$this->db->bind('jurusan', $data['jurusan']);
		
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function hapusDataMahasiswa($data)
	{	
		$this->db->query('DELETE FROM '. $this->table ." WHERE id = :id");
		
		$this->db->bind('id', $data['id']);
		
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function ubahDataMahasiswa($data)
	{	
		$this->db->query('UPDATE '. $this->table .' SET 
							nama = :nama,
							email = :email,
							nim = :nim,
							jurusan = :jurusan
						WHERE id = :id');
		
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('nim', $data['nim']);
		$this->db->bind('jurusan', $data['jurusan']);
		$this->db->bind('id', $data['id']);
		
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cariMahasiswa()
	{
		$keyword = $_POST['keyword'];
		$this->db->query('SELECT * FROM '. $this->table .'
						WHERE nama LIKE :keyword');
		
		$this->db->bind('keyword', "%$keyword%");
		
		$this->db->execute();

		return $this->db->resultSet();	
	}
}
?>
