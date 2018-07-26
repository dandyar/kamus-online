<div class="container">
	<div id="content">
		<div class="row">
			<div class="col-md-4" style="border-right: 1px solid #ccc; height: 420px;" >
                            <form action="<?php echo site_url('home/pencarian_lv1');; ?>" method="post" style="margin-bottom: 8px;">
					<div class="form-group" style="width: 100%; overflow: hidden;">
						<input type="text" name="search" class="form-control" placeholder="Cari Kata ..." style="width: 285px; float: left; margin-right: 5px;">
						<input type="submit" name="submit" value="Cari" class="btn btn-primary">
					</div>

                            </form>
			</div>
			<div class="col-md-8">
				<h2 style="margin: 0; padding: 0;">Hasil Pencarian</h2>
                                <?php
                                    // List up all results.
                                    foreach ($results as $val)
                                    { ?>
                                        <b><?php echo $val['kata'];?> &mdash;</b>
                                        <?php echo $val['keterangan']."<br>"; ?>
                                <?php } ?>
			</div>
		</div>
	</div>
	</div>
<div id="cek-profil">
    <div class="mypopup">
        <div class="mypopup-header"></div>
        <div class="mypopup-content">
            <center>
                <table class="table table-bordered">
                    <tr>
                        <td>ID</td>
                        <td><?php echo $id; ?></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><?php echo $nama_pengguna; ?></td>
                    </tr>
                    <tr>
                        <td>Level</td>
                        <td><?php echo $lv; ?></td>
                    </tr>
                </table>
            </center>
        </div>
        <div class="mypopup-footer">
            <a href="#" class="btn btn-primary">Tutup</a>
        </div>
    </div>
</div>