<div class="container">
        <div class="alert alert-info alert-dimissable fade in">
        	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Login Berhasil!</strong> Anda masuk sebagai Admin
        </div>
	<div id="content">
                
		<div class="row">
			<div class="col-md-4" style="border-right: 1px solid #ccc; height: 420px;" >
                            <form action="<?php echo site_url('home/pencarian_lv1'); ?>" method="post" style="margin-bottom: 8px;">
					<div class="form-group" style="width: 100%; overflow: hidden;">
						<input type="text" name="search" class="form-control" placeholder="Cari Kata ..." style="width: 285px; float: left; margin-right: 5px;">
						<input type="submit" name="submit" value="Cari" class="btn btn-primary">
					</div>

                            </form>
			</div>
			<div class="col-md-8">
				<h2 style="margin: 0; padding: 0;"></h2>
                                
			</div>
		</div>
	</div>
	</div>