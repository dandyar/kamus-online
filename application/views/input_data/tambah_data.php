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
			<h3 align="center" style="margin: 0 0 0 0;">Tambah Data</h3>
			<div class="msgArea">
			<?php if ($this->session->flashdata('msg')) {?>

    			<div id="msg"><p><?php echo $this->session->flashdata('msg'); ?></p></div>

			<?php }?>
			</div>
			<form action="input_data/tambah_data_aksi" method="post" class="form-horizontal">

				<div class="form-group">
					<label style="text-align: left;" class="control-label col-sm-2">Kata</label>
					<div class="col-sm-10">
						<input type="text" name="kata" class="form-control" placeholder="Masukan Kata"> 
					</div>
				</div>

				<div class="form-group">
					<label style="text-align: left;" class="control-label col-sm-2" for="keterangan">Keterangan</label>
					<div class="col-sm-10">
						<textarea name="keterangan" class="form-control" rows="6" id="keterangan" placeholder="Masukan Keterangan"></textarea>
					</div>
				</div>
				<div class="form-lower">
					<input type="submit" name="submit" value="Tambah" class="btn btn-primary" style="width: 75px;">
					<input type="reset" name="reset" value="Batal" class="btn btn-danger" style="width: 75px;">
				</div>
			</form>
		</div>
	</div>
</main>
</div>