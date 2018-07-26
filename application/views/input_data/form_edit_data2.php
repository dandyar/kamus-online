<div class="container">
<main>
	<div class="row">
		<div class="col-md-4">
			<ul class="list-group">
                            <li class="list-group-item"><a href="<?php echo site_url('input_data'); ?>"><span class="glyphicon glyphicon-plus"></span>Tambah Data</a></li>
				<li class="list-group-item"><a href="ubah_data"><span class="glyphicon glyphicon-pencil"></span>Ubah Data</a></li>
				<li class="list-group-item"><a href="hapus_data"><span class="glyphicon glyphicon-trash"></span>Hapus Data</a></li>
				<li class="list-group-item"><a href="lihat_data"><span class="glyphicon glyphicon-list"></span>Lihat Data</a></li>
			</ul>
		</div>
		<div class="col-md-8">
			<h3 align="center" style="margin: 0 0 30px 0;">Ubah Data</h3>
				<table class="table table-striped">
				<tr>
					<th>Kata</th>
					<th>Keterangan</th>
					<th>Ubah</th>
				</tr>
				<?php
					foreach ($kosakata as $row){ ?>
				<tr>
					<td> <?php echo $row->kata  ?> </td>
					<td> <?php echo $row->keterangan ?> </td>
                                        <td><a href="<?php echo site_url("input_data/ubah_data/".$row->id); ?>"><span class="glyphicon glyphicon-pencil"></a></td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</div>
</main>
</div>