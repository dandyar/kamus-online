<div class="container">
    <div id="loginMsg" class="alert alert-danger alert-dismissable fade in">
        <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Login Gagal! </strong>Username atau Password tidak terdaftar
    </div>

	<div id="content">
                
		<div class="row">
			<div class="col-md-4" style="border-right: 1px solid #ccc; height: 420px;" >
                <form action="<?php echo site_url('home/pencarian_lv2'); ?>" method="post">
					<div class="input-group">
                        <input class="form-control" type="text" name="search" placeholder="Cari Kata ...">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-primary">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </div>               
                    </div>
				</form>
			</div>
			<div class="col-md-8">
                                
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