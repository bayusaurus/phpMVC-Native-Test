<!-- Modal TAMBAH DAN EDIT -->
<div class="modal fade" id="formTambahMahasiswa" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal-formMhs">
        <form action="<?= BASEURL; ?>/Mahasiswa/tambah" method="post">
          <input type="hidden" name="id" id="id">
    		  <div class="form-group">
    		    <label for="nama">Nama</label>
    		    <input type="text" class="form-control" id="nama" name="nama">
    		  </div>
    		  <div class="form-group">
    		    <label for="NIM">NIM</label>
    		    <input type="number" class="form-control" id="nim" name="nim">
    		  </div>
    		  <div class="form-group">
    		    <label for="Email">Email</label>
    		    <input type="email" class="form-control" id="email" name="email">
    		  </div>
    		  <div class="form-group">
    		  	<label for="jurusan">Jurusan</label>
    		    <select class="form-control" name="jurusan" id="jurusan">
      				<option value="Hubungan Internasional">Hubungan Internasional</option>
      				<option value="Teknik Informatika">Teknik Informatika</option>
      				<option value="Teknik Mesin">Teknik Mesin</option>
      				<option value="Arsitektur">Arsitektur</option>
      				<option value="Manajemen">Manajemen</option>
    		  	</select>
    		  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal HAPUS -->
<div class="modal fade" id="formHapusMahasiswa" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title text-white" id="judulModal">Hapus Data Mahasiswa</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal-hapus">
        <form action="<?= BASEURL; ?>/Mahasiswa/hapus" method="post">
		 <input type="hidden" name="id" id="id">
		 Apakah yakin ingin menghapus <span id="nama"><strong></strong></span> ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Hapus Data</button>
      </form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
$(function(){
  
  $(document).on("click", "#hapusMahasiswa", function () {
    var id = $(this).data('id');
    $("#modal-hapus #id").val(id);
    var nama = $(this).data('nama');
    $("#modal-hapus span strong").text(nama);
  });

  $(document).on("click", ".tampilModalUbah", function () {
    $('#judulModal').html('Ubah Data Mahasiswa');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('#modal-formMhs form').attr('action', 'http://localhost/phpmvc/public/Mahasiswa/ubah');
    
    var id = $(this).data('id');

    $.ajax({
      url: 'http://localhost/phpmvc/public/mahasiswa/getUbah',
      data: {id : id},
      method: 'post',
      dataType: 'json',
      success: function(data){
        $("#modal-formMhs #nama").val(data.nama);
        $("#modal-formMhs #nim").val(data.nim);
        $("#modal-formMhs #email").val(data.email);
        $("#modal-formMhs #jurusan").val(data.jurusan);
        $("#modal-formMhs #id").val(data.id);
      }
    });

  });

  $(document).on("click", ".tombolTambahData", function () {
    $('#judulModal').html('Tambah Data Mahasiswa');
    $('.modal-footer button[type=submit]').html('Tambah Data');
  });

});
</script>