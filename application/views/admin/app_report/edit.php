<?php
// Error
if (isset($error)) {
    echo '<div class="alert alert-warning">';
    echo $error;
    echo '</div>';
}

// Validasi
echo validation_errors('<div class="alert alert-success">', '</div>');

// Form
echo form_open_multipart('/admin/app_report/update/' . $app_report['id']);
?>

<div class="col-md-12">
    <div class="form-group">
        <label>Hari</label>
        <select name="hari" class="form-control">
            <option value="monday" <?php if ($app_report['hari'] == "monday") {
                                        echo "selected";
                                    } ?>>Monday</option>
            <option value="tuesday" <?php if ($app_report['hari'] == "tuesday") {
                                        echo "selected";
                                    } ?>>Tuesday</option>
            <option value="wednesday" <?php if ($app_report['hari'] == "wednesday") {
                                            echo "selected";
                                        } ?>>Wednesday</option>
            <option value="thrusday" <?php if ($app_report['hari'] == "thrusday") {
                                            echo "selected";
                                        } ?>>Thrusday</option>
            <option value="friday" <?php if ($app_report['hari'] == "friday") {
                                        echo "selected";
                                    } ?>>Friday</option>
        </select>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label>Aplikasi</label>
        <input type="text" name="aplikasi" placeholder="Aplikasi" value="<?php echo $app_report['aplikasi'] ?>" required class="form-control">
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label>Keterangan</label>
        <select name="keterangan" class="form-control">
            <option value="1" <?php if ($app_report['keterangan'] == "1") {
                                    echo "selected";
                                } ?>>1 (Active)</option>
            <option value="2" <?php if ($app_report['keterangan'] == "2") {
                                    echo "selected";
                                } ?>>2 (Maintenance)</option>
            <option value="3" <?php if ($app_report['keterangan'] == "3") {
                                    echo "selected";
                                } ?>>3 (Off)</option>
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