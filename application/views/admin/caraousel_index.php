<div id="menghilang">
	<?= $this->session->flashdata('alert'); ?>
</div>
<div class="col-md-12">
	<div class="x_panel">
		<form action="<?= base_url('admin/caraousel/simpan') ?>" method="post" enctype='multipart/form-data'>
			<h3 class="card-header">File input</h3>
			<div class="modal-body">
				<div class="row">
					<label class="control-label col-md-12">judul</label>
					<div class="col-md-12">
						<input type="text" class="form-control" placeholder="judul foto" name="judul" required>
						<span class="fa fa-newspaper-o form-control-feedback right" aria-hidden="true"></span>
					</div>
				</div>
			</div>
		<div class="modal-body">
				<label for="formFile" class="form-label">Pilih Foto dengan ukuran (1 : 3)</label>
				<input class="form-control" type="file" name="foto">
			</div>
		  <button type="Submit"  class="btn btn-primary">Simpan</button>
		</form>
		<?php foreach($caraousel as $ayah){ ?>
		<div class="modal-body col-mt-5">
			<img src="<?= base_url('assets/upload/caraousel/'.$ayah['foto']) ?>">
			<h4> judul : <?= $ayah['judul'] ?></h4>
			<a class="btn btn-sm btn-danger" onClick="return confirm('anda yakin akan menghapus foto ini ?')"
				href="<?= base_url('admin/caraousel/delete_data/'.$ayah['foto']);?>">
				<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
			</a>
		</div>
		<?php } ?>
