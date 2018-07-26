<div id="bg-form-edit">
    <div id="form-edit">
        <form action="http://localhost/kamus-online/index.php/input_data/proses_edit_data" method="post" class="form-horizontal">
            <div class="form-group">
                <label style="text-align: left;" class="control-label col-md-3" for="kata">Kata</label>
                <div class="col-md-9">
                    <textarea class="form-control" name="kata" id="kata"><?php echo $edit_kosakata->kata; ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label style="text-align: left;" class="col-md-3" for="keterangan">Keterangan</label>
                <div class="col-md-9">
                    <textarea class="form-control" id="keterangan" name="keterangan"><?php echo $edit_kosakata->keterangan; ?></textarea>
                </div>
            </div>
            <div class="col-md-12" style="text-align: right;">
                <input type="hidden" name="id" value="<?php echo $edit_kosakata->id; ?>">
                <input type="submit" class="btn btn-primary" value="Perbarui">
                <a href="<?php echo site_url('input_data/ubah_data'); ?>" class="btn btn-danger">Batal</a>
            </div>
        </form>
    </div>
</div>