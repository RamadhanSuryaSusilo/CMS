<div id="menghilang">
	<?= $this->session->flashdata('alert'); ?>
</div>
<div class="col-md-12 col-sm-12 col-xs-12">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
		<span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>Tambah user</Details>
	</button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<form action="<?= site_url('admin/user/simpan') ?>" method="post">
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title" id="exampleModalLongTitle">Tambah user</h2>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="control-label col-md-3 col-sm-3 col-xs-3">Nama Lengkap</div>
						<div class="col-md-5 col-sm-9 col-xs-9">
							<input type="text" class="form-control" placeholder="nama" name="nama" required>
							<span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
						</div>
					</div>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="control-label col-md-3 col-sm-3 col-xs-3">Username</div>
							<div class="col-md-5 col-sm-9 col-xs-9">
								<input type="text" class="form-control" placeholder="username" name="username" required>
								<span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
							</div>
						</div>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="control-label col-md-3 col-sm-3 col-xs-3">Password</div>
							<div class="col-md-5 col-sm-9 col-xs-9">
								<input type="Password" class="form-control" placeholder="password" name="password"
									required>
								<span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
							</div>
						</div>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="control-label col-md-3 col-sm-3 col-xs-3">Level</div>
							<div class="col-md-5 col-sm-9 col-xs-9">
								<select name="level" class="form-control">
									<option value="Admin">Admin</option>
									<option value="Kontributor">Kontributor</option>
								</select>
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
			<h2>Data pengguna</h2>
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
						<th class="column-title">Username </th>
						<th class="column-title">Nama Lengkap</th>
						<th class="column-title">Level</th>
						<th class="column-title no-link last"><span class="nobr">Action</span>
						</th>
					</thead>
					<tbody>
						<?php $no=1; foreach($user as $ayah) { ?>
						<tr class="odd pointer">
							<td class="a-center ">
							<td><?= $no; ?></td>
			</div>
			<td><?= $ayah['username'] ?></td>
			<td><?= $ayah['nama'] ?></td>
			<td><?= $ayah['level'] ?></td>
			<td>
				<a class="btn btn-sm btn-danger" onClick="return confirm('anda yakin akan menghapus akun ini ?')"
					href="<?= base_url('admin/user/delete_data/'.$ayah['id_user']);?>">
					<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
				</a>
				<button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
					data-target="#edit<?= $ayah['id_user'] ?>">
					<span class="glyphicon glyphicon-retweet" aria-hidden="true"></span></Details>
				</button>
				<div class="modal fade" id="edit<?= $ayah['id_user'] ?>" tabindex="-1" role="dialog"
					aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<form action="<?= site_url('admin/user/update') ?>" method="post">
							<input type="hidden" name="id_user" value="<?= $ayah['id_user'] ?>">
							<div class="modal-content">
								<div class="modal-header">
									<h2 class="modal-title" id="exampleModalLongTitle">Ganti nama user</h2>
									<button type="button" class="close" data-dismiss="modal"
										aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="control-label col-md-3">Nama Lengkap</div>
										<div class="col-md-5 col-sm-9 col-xs-9">
											<input type="text" class="form-control" value="<?= $ayah['nama'] ?>"
												name="nama">
											<span class="fa fa-user form-control-feedback right"
												aria-hidden="true"></span>
										</div>
									</div>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="control-label col-md-3">Username</div>
										<div class="col-md-5 col-sm-9 col-xs-9">
											<input type="text" class="form-control" value="<?= $ayah['username'] ?>"
												name="username" readonly>
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
