<div class="container mt-4">
	<div class="card text-center">
	  <div class="card-header">
	    Detail Mahasiswa
	  </div>
	  <div class="card-body">
	    <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
	    <p class="card-text"><?= $data['mhs']['nim']; ?></p>
	    <p class="card-text"><?= $data['mhs']['jurusan']; ?></p>
	    <p class="card-text"><?= $data['mhs']['email']; ?></p>
	    <a href="<?= BASEURL; ?>/Mahasiswa" class="btn btn-primary">Kembali</a>
	  </div>
	  <div class="card-footer text-muted">
	    2 days ago
	  </div>
	</div>
</div>