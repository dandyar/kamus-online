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
                            
                            <ul class="list-group">
                                <li class="list-group-item"><a href="<?php echo site_url('member') ?>">Home</a></li>
                                <li class="list-group-item"><a href="<?php echo site_url('') ?>">Lihat Data</a></li>
                                <li class="list-group-item"><a href="#cek-profil">Profile</a></li>
                                <li class="list-group-item"><a href="<?php echo site_url('member/logout') ?>">Log Out</a></li>
                            </ul>
			</div>
			<div class="col-md-8">
				<h2 style="margin: 0; padding: 0;">Hasil Pencarian</h2>
                                <?php
                                    // List up all results.
                                    foreach ($results as $val)
                                    { ?>
                                        <b> <?php echo $val['kata'];?> &mdash;</b>
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