<script src="<?php echo base_url() ?>assets/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    file_browser_callback: function(field, url, type, win){
        tinyMCE.activeEditor.windowManager.open({
            file: '<?php echo base_url() ?>assets/kcfinder/browse.php?opener=tinymce4&field=' + field + '&type=' + type,
            title: 'KCFinder',
            width: 700,
            height: 500,
            inline: true,
            close_previous: false
        }, {
            window: win,
            input: field
        });
        return false;
    },
    selector: "#output",
    height: 150,
    toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | numlist outdent indent"
});
</script>

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
echo form_open_multipart('admin/slide_konten/update/'.$slide_konten->id);
?>

<div class="col-md-12">
    <div class="form-group form-group-lg">
        <label>Judul</label>
        <input type="text" name="judul" placeholder="Judul" value="<?php echo $slide_konten->judul ?>" required class="form-control">
    </div>
</div>
<div class="col-md-12">
    <div class="form-group form-group-lg">
        <label>Header</label>
        <input type="text" name="header_title" placeholder="Judul" value="<?php echo $slide_konten->header_title ?>" required class="form-control">
    </div>
</div>
<div class="col-md-12">
    <div class="form-group form-group-lg">
        <label>Pengertian Awal/Intro</label>
        <input type="text" name="pengertian" placeholder="Pengertian Awal/Intro" value="<?php echo $slide_konten->pengertian ?>" required class="form-control">
    </div>
</div>
<div class="col-md-12">
    <div class="form-group form-group-lg">
        <label>Manfaat Penggunaan</label>
        <input type="text" name="manfaat" placeholder="Manfaat Penggunaan" value="<?php echo $slide_konten->manfaat ?>" required class="form-control">
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label>Output</label>
        <textarea name="output" class="form-control" placeholder="Output" id="output"><?php echo $slide_konten->output ?></textarea>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group form-group-lg">
        <label>Upload gambar</label>
        <input type="file" name="gambar" class="form-control">
    </div>
</div>
<div class="col-md-6">
    <div class="form-group form-group-lg">
        <label>Upload video</label>
        <input type="file" name="video" class="form-control">
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <input type="submit" name="submit" value="Simpan Data" class="btn btn-primary btn-lg">
        <input type="reset" name="reset" value="Reset" class="btn btn-default btn-lg">
    </div>
</div>
<?php echo form_close() ?> 