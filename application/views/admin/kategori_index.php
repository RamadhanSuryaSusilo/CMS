<div id="menghilang">
	<?= $this->session->flashdata('alert'); ?>
</div>
<div class="col-md-12 col-sm-12 col-xs-12">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
		<span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>Tambah kategori</Details>
	</button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<form action="<?= site_url('admin/kategori/simpan') ?>" method="post">
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title" id="exampleModalLongTitle">Tambah kategori</h2>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="control-label col-md-3 col-sm-3 col-xs-3">Nama kategori</div>
						<div class="col-md-5 col-sm-9 col-xs-9">
							<input type="text" class="form-control" placeholder="nama" name="nama_kategori" required>
							<span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">keluar</button>
					<button type="Submit" class="btn btn-primary">Simpan</button>
				</div>
			</div>
		</form>
	</div>
</div>
<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
		<div class="x_title">
			<h2>kategori konten</h2>
			<ul class="nav navbar-right panel_toolbox">
				<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li></a>
			</ul>
			<div class="clearfix">
			</div>
		</div>
		<div class="x_content">
			<div class="table-responsive">
				<table class="table table-striped jambo_table bulk_action">
					<thead>
						<th>
						<th class="column-title">No </th>
						<th class="column-title">Nama kategori konten</th>
						<th class="column-title no-link last"><span class="nobr">Action</span>
						</th>
					</thead>
					<tbody>
						<?php $no=1; foreach($kategori as $ayah) { ?>
						<tr class="odd pointer">
							<td class="a-center">
							<td><?= $no; ?></td>
			</div>
			<td><?= $ayah['nama_kategori'] ?></td>
			<td>
				<a class="btn btn-sm btn-danger" onClick="return confirm('anda yakin akan menghapus akun ini ?')"
					href="<?= base_url('admin/kategori/delete_data/'.$ayah['id_kategori']);?>">
					<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
				</a>
				<button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
					data-target="#edit<?= $ayah['id_kategori'] ?>">
					<span class="glyphicon glyphicon-retweet" aria-hidden="true"></span></Details>
				</button>
				<div class="modal fade" id="edit<?= $ayah['id_kategori'] ?>" tabindex="-1" role="dialog"
					aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<form action="<?= site_url('admin/kategori/update') ?>" method="post">
							<input type="hidden" name="id_kategori" value="<?= $ayah['id_kategori'] ?>">
							<div class="modal-content">
								<div class="modal-header">
									<h2 class="modal-title" id="exampleModalLongTitle">Ganti Kategori</h2>
									<button type="button" class="close" data-dismiss="modal"
										aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="control-label col-md-3">Nama kategori konten</div>
										<div class="col-md-5 col-sm-9 col-xs-9">
											<input type="text" class="form-control" value="<?= $ayah['nama_kategori'] ?>"
												name="nama_kategori">
											<span class="fa fa-user form-control-feedback right"
												aria-hidden="true"></span>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">keluar</button>
									<button type="Submit" class="btn btn-primary">Simpan</button>
								</div>
							</div>
						</form>
					</div>
			</td>
			</tr>
			<?php $no++;} ?>
			</tbody>
			</table>
		</div>
	</div>
</div>
</div>
</div>
