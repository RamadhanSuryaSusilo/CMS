<div id="menghilang">
	<?= $this->session->flashdata('alert'); ?>
</div>
<form action="<?= base_url('admin/konfigurasi/update') ?>" method="post">
	<div class="modal-content">
		<div class="modal-header">
			<h2 class="modal-title" id="exampleModalLongTitle">Konfigurasi</h2>
		</div>
		<div class="modal-body">
			<div class="row">
				<label class="control-label col-md-3 ">judul Website</label>
				<div class="col-md-6 col-sm-9 col-xs-9">
					<input type="text" class="form-control" name="judul" value="<?= $config->judul_website; ?>">
					<span class="fa fa-paypal form-control-feedback right" aria-hidden="true"></span>
				</div>
			</div>
		</div>
		<div class="modal-body">
			<div class="row">
				<label class="col-md-3">Profile</label>
				<div class="col-md-6 col-sm-9 col-xs-9">
					<textarea name="profil_website" class="col-md-12"> <?= $config->profil_website; ?></textarea>
				</div>
			</div>
		</div>
        <div class="modal-body">
			<div class="row">
				<label class="control-label col-md-3 ">Facebook</label>
				<div class="col-md-6 col-sm-9 col-xs-9">
					<input type="text" class="form-control" name="facebook" value="<?= $config->facebook; ?>">
					<span class="fa fa-facebook-square form-control-feedback right" aria-hidden="true"></span>
				</div>
			</div>
		</div>
        <div class="modal-body">
			<div class="row">
				<label class="control-label col-md-3 ">Instagram</label>
				<div class="col-md-6 col-sm-9 col-xs-9">
					<input type="text" class="form-control" name="instagram" value="<?= $config->instagram; ?>">
					<span class="fa fa-instagram form-control-feedback right" aria-hidden="true"></span>
				</div>
			</div>
		</div>
        <div class="modal-body">
			<div class="row">
				<label class="control-label col-md-3 ">Email</label>
				<div class="col-md-6 col-sm-9 col-xs-9">
					<input type="email" class="form-control" name="email" value="<?= $config->email; ?>">
					<span class="fa fa-pencil form-control-feedback right" aria-hidden="true"></span>
				</div>
			</div>
		</div>
        <div class="modal-body">
			<div class="row">
				<label class="control-label col-md-3 ">Alamat</label>
				<div class="col-md-6 col-sm-9 col-xs-9">
					<input type="text" class="form-control" name="alamat" value="<?= $config->alamat; ?>">
					<span class="fa fa-map-marker form-control-feedback right" aria-hidden="true"></span>
				</div>
			</div>
		</div>
        <div class="modal-body">
			<div class="row">
				<label class="control-label col-md-3 ">Whatsaap</label>
				<div class="col-md-6 col-sm-9 col-xs-9">
					<input type="text" class="form-control" name="no_wa" value="<?= $config->no_wa; ?>">
					<span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button type="Submit" class="btn btn-primary">Simpan</button>
		</div>
	</div>
</form>
