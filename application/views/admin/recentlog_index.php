<div id="menghilang">
	<?= $this->session->flashdata('alert'); ?>
</div>
<div class="col-md-12 col-sm-12 col-xs-12">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
		<span class="fa fa-trash" aria-hidden="true"></span> Hapus riwayat</Details>
	</button>
</div>
<!-- Modal -->
<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
		<div class="x_title">
			<h2>Aktivitas user</h2>
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
							<th class="column-title">no</th>
							<th class="column-title">Username</th>
							<th class="column-title">status</th>
							<th class="column-title">waktu</th>
							<th class="column-title">Tanggal</th>
							<th class="column-title no-link last"><span class="nobr">Aksi</span>
							</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach($recent as $ayah) { ?>
						<tr class="odd pointer">
							<td class="a-center ">
							<td><?= $no; ?></td>

			<td><?= $ayah['username'] ?></td>
			<td><?= $ayah['status'] ?></td>
			<td><?= $ayah['waktu'] ?></td>
			<td><?= $ayah['tanggal'] ?></td>
			<td>
				<a class="btn btn-sm btn-danger" onClick="return confirm('anda yakin akan menghapus akun ini ?')"
					href="<?= base_url('admin/recentlog/delete/'.$ayah['id_login']);?>">
					<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
				</a>
				
				<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
					aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
									<h4> hapus semua ? </h4>
								</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">batal</button>
								<button type="Submit" class="btn btn-danger"><a
										href="<?= base_url('admin/recentlog/delete_all/') ?>">hapus</a></button>
							</div>
						</div>
					</div>
				</div>
			</td>
			</tr>
			<?php  $no++; } ?>
			</tbody>
			</table>
		</div>
	</div>
</div>
</div>
</div>
