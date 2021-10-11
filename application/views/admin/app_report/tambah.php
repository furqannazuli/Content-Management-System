<?php
// Error
if(isset($error)){
	echo '<div class="alert alert-warning">';
	echo $error;
	echo '</div>';
}

// Validasi
echo validation_errors('<div class="alert alert-success">','</div>');

// Form
echo form_open_multipart('admin/app_report/tambah');
?>

<div class="col-md-12">
    <div class="form-group">
        <label>Hari</label>
        <select name="hari" class="form-control">
            <option value="monday">Monday</option>
            <option value="tuesday">Tuesday</option>
            <option value="wednesday">Wednesday</option>
            <option value="thrusday">Thrusday</option>
            <option value="friday">Friday</option>
        </select>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label>Aplikasi</label>
        <input type="text" name="aplikasi" placeholder="Aplikasi" value="<?php echo set_value('aplikasi') ?>" required class="form-control">
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label>Keterangan</label>
        <select name="keterangan" class="form-control">
            <option value="1">1 (Active)</option>
            <option value="2">2 (Maintenance)</option>
            <option value="3">3 (Off)</option>
        </select>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <input type="submit" name="submit" value="Simpan Data" class="btn btn-primary btn-lg">
        <input type="reset" name="reset" value="Reset" class="btn btn-default btn-lg">
    </div>
</div>
<?php echo form_close() ?>