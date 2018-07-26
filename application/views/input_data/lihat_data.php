<div class="container">
<main>
	<div class="row">
		<div class="col-md-4">
			<ul class="list-group">
				<li class="list-group-item "><a href="<?php echo site_url('input_data'); ?>"><span class="glyphicon glyphicon-plus"></span>Tambah Data</a></li>
                <li class="list-group-item"><a href="<?php echo site_url('input_data/lihat_data'); ?>"><span class="glyphicon glyphicon-list"></span>Lihat Data</a></li>
			</ul>
                        <ul class="list-group">
                            <li class="list-group-item "><a href="<?php echo site_url('admin'); ?>"><span></span>Home</a></li>
			</ul>
		</div>
		<div class="col-md-8">
			<h3 align="center" style="margin: 0 0 30px 0;">Lihat Data</h3>
			<form>
			<table class="table table-striped" id="myTable">
				<tr>
					<th><input type="checkbox" id="checkAll" name="checkAll"></th>
					<th>Kata</th>
					<th>Keterangan</th>
					<th>Ubah</th>
					<th>Hapus</th>
				</tr>
				<?php
					foreach ($kosakata as $row){ ?>
				<tr>
					<td><input type="checkbox" name="msg[]" value="<?php echo $row->id; ?>"></td>
					<td> <?php echo $row->kata  ?> </td>
					<td> <?php echo $row->keterangan ?> </td>
					<td align="center"><a href="<?php echo site_url("input_data/edit_data/".$row->id); ?>"><span class="glyphicon glyphicon-pencil""></span></a></td>
					<td align="center"><a style="color: red;" href="<?php echo site_url('input_data/hapus/'.$row->id);?>"><span class="glyphicon glyphicon-trash"></span></a></td>
				</tr>
				<?php } ?>
			</table>
			</form>
			
		</div>
	</div>
</main>
</div>