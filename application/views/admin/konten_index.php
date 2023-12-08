<div id="menghilang">
	<?= $this->session->flashdata('alert'); ?>
</div>
<div class="col-md-12 col-sm-12 col-xs-12">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
		<span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>Tambah konten</Details>
	</button>
</div> <br>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<form action="<?= base_url('admin/konten/simpan') ?>" method="post" enctype='multipart/form-data'>
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title" id="exampleModalLongTitle">Tambah konten</h2>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<label class="control-label col-md-3 ">judul</label>
						<div class="col-md-5 col-sm-9 col-xs-9">
							<input type="text" class="form-control" placeholder="judul" name="judul" required>
							<span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
						</div>
					</div>
				</div>
				<div class="modal-body">
					<div class="row">
						<label class="col-md-3 ">kategori</label>
						<div class="col-md-5">
							<select class="form-control" name="id_kategori">
								<?php foreach ($kategori as $ayah) { ?>
								<option value="<?= $ayah['id_kategori'] ?>"><?= $ayah['nama_kategori'] ?></option>
								<span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
								<?php } ?>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-body">
					<div class="row">
						<label class="col-md-3">keterangan</label>
						<div class="col-md-5 col-sm-9 col-xs-9">
							<textarea placeholder="keterangan" name="keterangan" class="col-md-12"></textarea>
						</div>
					</div>
				</div>
				<div class="modal-body">
					<div class="control-label col-md-3">foto</div>
					<label class="btn-upload" for="inputImage" title="Upload image file">
						<input type="file" class="sr-only" id="inputImage" name="file" accept="image/*">
						<span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="Import image">
							<span class="fa fa-upload"></span>
						</span>
					</label>
					<div class="col-md-5 col-sm-9 col-xs-9">
						<input type="file" name="foto" accept="image/png, image/jpeg">
					</div>
					<div class="row">
					</div>
					<div class="row">
					</div>
					<div class="row">
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
			<h2>Kategori konten</h2>
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
						<tr class="headings">
							<th>
								<div><input id="check-all" class="flat" style="position: absolute; opacity: 0;"><ins
										class="iCheck-helper"
										style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
								</div>
							</th>
							<th class="column-title">No </th>
							<th class="column-title">Judul</th>
							<th class="column-title">kategori konten</th>
							<th class="column-title">Tanggal</th>
							<th class="column-title">Nama</th>
							<th class="column-title">Foto</th>
							<th class="column-title no-link last"><span class="nobr">Aksi</span>
							</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach($konten as $ayah) { ?>
						<td class="a-center">
						<td><?= $no; ?></td>
						<td><?= $ayah['judul'] ?></td>
						<td><?=$ayah['nama_kategori']; ?></td>
						<td><?= $ayah['tanggal'] ?></td>
						<td><?= $ayah['nama'] ?></td>
						<td>
							<div class="fa-hover col-md-3 col-sm-4 col-xs-12">
								<a href="<?= base_url('assets/upload/konten/'.$ayah['foto']) ?>" target="_blank">
									<i class="fa fa-picture-o"></i></a>
							</div>
						<td>
							<a class="btn btn-sm btn-danger"
								onClick="return confirm('anda yakin akan menghapus akun ini ?')"
								href="<?= base_url('admin/konten/delete_data/'.$ayah['foto']);?>">
								<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
							</a>
							<button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
								data-target="#konten<?= $no; ?>">
								<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
								</Details>
							</button>
			</div>
			<!-- Modal -->
			<div class="modal fade" id="konten<?= $no; ?>" tabindex="-1" role="dialog"
				aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<form action="<?= base_url('admin/konten/update') ?>" method="post" enctype='multipart/form-data'>
						<input type="hidden" name="nama_foto" value="<?= $ayah['foto'] ?>">
						<div class="modal-content">
							<div class="modal-header">
								<h2 class="modal-title" id="exampleModalLongTitle"><?= $ayah['judul'] ?></h2>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<div class="row">
									<label class="control-label col-md-3 ">judul</label>
									<div class="col-md-5 col-sm-9 col-xs-9">
										<input type="text" class="form-control" value="<?= $ayah['judul'] ?>"
											name="judul">
										<span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
									</div>
								</div>
							</div>
							<div class="modal-body">
								<div class="row">
									<label class="col-md-3 col-sm-5 col-xs-9">kategori</label>
									<div class="col-md-5">
										<select class="form-control" name="id_kategori">
											<?php foreach ($kategori as $uu) { ?>
											<option <?php if($uu['id_kategori']==$ayah['id_kategori']){
																echo"selected";} ?> value="<?= $uu['id_kategori'] ?>">
												<?= $uu['nama_kategori'] ?></option>
											<span class="fa fa-user form-control-feedback right"
												aria-hidden="true"></span>
											<?php } ?>
										</select>
									</div>
								</div>
							</div>
							<div class="modal-body">
								<div class="row">
									<label class="col-md-3 col-sm-3 col-xs-3">keterangan</label>
									<div class="col-md-5 col-sm-9 col-xs-9">
										<textarea name="keterangan"
											class="col-md-12"><?= $ayah['keterangan'] ?></textarea>
									</div>
								</div>
							</div>
							<div class="modal-body">
								<div class="control-label col-md-3 col-sm-3 col-xs-3">foto</div>
								<label class="btn-upload" for="inputImage" title="Upload image file">
									<input type="file" class="sr-only" id="inputImage" name="file" accept="image/*">
									<span class="docs-tooltip" data-toggle="tooltip" title=""
										data-original-title="Import image">
										<span class="fa fa-upload"></span>
									</span>
								</label>
								<div class="col-md-5 col-sm-9 col-xs-9">
									<input type="file" name="foto" accept="image/png, image/jpeg">
								</div>
								<div class="row">
								</div>
								<div class="row">
								</div>
								<div class="row">
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
			</td>
			</tr>
			<?php $no++; } ?>
			</tbody>
			</table>
		</div>
	</div>
</div>
</div>
</div>
