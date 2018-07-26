<div class="container">
    <div id="content">
	<div class="row">
            <div class="col-md-4" style="border-right: 1px solid #ccc; height: 420px;" >
                <form action="<?php echo site_url('home/pencarian_lv2'); ?>" method="post" style="margin-bottom: 8px;">
                    <div class="form-group" style="width: 100%; overflow: hidden;">
			<input type="text" name="search" class="form-control" placeholder="Cari Kata ..." style="width: 285px; float: left; margin-right: 5px;">
			<input type="submit" name="submit" value="Cari" class="btn btn-primary">
                    </div>
                </form>
                            
            </div>
            <div class="col-md-8">
                <table class="table table-striped">
                    <tr>
                        <th>Kata</th>
                        <th>Keterangan</th>
                    </tr>
                    <?php foreach ($kosakata as $row){?>
                    <tr>
                        <td> <?php echo $row->kata; ?></td>
                        <td><?php echo $row->keterangan; ?></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
	</div>
    </div>
</div>
<div id="cek-profil">
    <div class="mypopup">
        <div class="mypopup-header"></div>
        <div class="mypopup-content">
            <form action="<?php echo site_url('login/cek_login'); ?>" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div id="form-lower">
                    <input type="submit" class="btn btn-primary" name="submit" value="Masuk">
                    <a href="" class="btn btn-danger">Tutup</a>
                </div>
            </form>
        </div>
    </div>
</div>