<div class="container mt-4">
	<div class="row">
		<div class="col-6">
			<!-- Button trigger modal -->
			<?php Flasher::flash(); ?>
			<button type="button" class="mb-3 btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formTambahMahasiswa">
				Tambah Data Mahasiswa
			</button>

			<div>
				<form action="<?= BASEURL; ?>/Mahasiswa/cari" method="post">
					<div class="input-group mb-3">
					  <input type="text" class="form-control" name="keyword" placeholder="cari mahasiswa..." aria-label="Recipient's username" aria-describedby="button-addon2" autocomplete="off">
					  <div class="input-group-append">
					    <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
					  </div>
					</div>
				</form>
			</div>

			<h3>Daftar Mahasiswa</h3>
			<ul class="list-group">
			<?php foreach ($data['mhs'] as $mhs): ?>
					<li class="list-group-item">
						<div class="d-flex bd-highlight">
							<div class="flex-grow-1 bd-highlight">
								<?= $mhs['nama']; ?> 	
							</div>
							<div class="bd-highlight">
								<span class="badge badge-success"><a class="text-white" href="<?= BASEURL; ?>/Mahasiswa/detail/<?= $mhs['id']; ?>">Detail</a></span>

								<span class="badge badge-warning"><a class="text-white tampilModalUbah" href="#" id="ubahMahasiswa" data-toggle="modal" data-target="#formTambahMahasiswa" data-id="<?= $mhs['id']; ?>">Ubah</a></span>

								<span class="badge badge-danger"><a class="text-white" href="" id='hapusMahasiswa' data-toggle="modal" data-target="#formHapusMahasiswa" data-id="<?= $mhs['id']; ?>" data-nama="<?= $mhs['nama']; ?>">Hapus</a></span>
							</div>
						</div>
					</li> 
			<?php endforeach ?>
			</ul>
		</div>
	</div>
</div>