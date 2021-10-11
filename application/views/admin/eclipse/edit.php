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
    selector: "#konten",
    height: 150,
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
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
echo form_open_multipart('admin/eclipse/edit/'.$eclipse->id);
?>

<div class="col-md-12">
    <div class="form-group form-group-lg">
        <label>Judul Bab</label>
        <input type="text" name="judul_bab" placeholder="Judul Bab" value="<?php echo $eclipse->judul_bab ?>" required class="form-control">
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label>Konten</label>
        <textarea name="konten" class="form-control" placeholder="Konten" id="konten"><?php echo $eclipse->konten ?></textarea>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <input type="submit" name="submit" value="Simpan Data" class="btn btn-primary btn-lg">
        <input type="reset" name="reset" value="Reset" class="btn btn-default btn-lg">
    </div>
</div>
<?php echo form_close() ?> 