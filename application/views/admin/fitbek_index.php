<div id="menghilang">
	<?= $this->session->flashdata('alert'); ?>
</div>
<div class="col-md-12 col-sm-12 col-xs-12">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
		<span class="fa fa-trash" aria-hidden="true"></span> Hapus saran</Details>
	</button>
</div>
<!-- Modal -->
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
						<th class="column-title">nama </th>
						<th class="column-title">email </th>
						<th class="column-title">tanggal</th>
						<th class="column-title">Saran</th>
						<th class="column-title no-link last"><span class="nobr">Action</span>
						</th>
					</thead>
					<tbody>
						<?php $no=1; foreach($saran as $ayah) { ?>
						<tr class="odd pointer">
							<td class="a-center ">
			</div>
			<td><?= $ayah['nama'] ?></td>
			<td><?= $ayah['email'] ?></td>
			<td><?= $ayah['tanggal'] ?></td>
			<td data-toggle="modal" data-target="#exampleModalCenter<?= $ayah['id_saran'] ?>"
				class="fa fa-search"> Lihat saran</td>
			<td>
				<a class="btn btn-sm btn-danger" onClick="return confirm('anda yakin akan menghapus saran ini ?')"
					href="<?= base_url('admin/fitbek/delete/'.$ayah['id_saran']);?>">
					<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
				</a>
				<div class="modal fade" id="exampleModalCenter<?= $ayah['id_saran'] ?>" tabindex="-1" role="dialog"
					aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-body">
									<div class="row">
										<textarea class="form-control" name="isi_saran" rows="5"
											required=""><?= $ayah['isi_saran'] ?></textarea>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary" data-dismiss="modal">keluar</button>
								</div>
							</div>
					</div>
				</div>
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
										href="<?= base_url('admin/fitbek/delete_all/') ?>">hapus</a></button>
							</div>
						</div>
					</div>
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
