<?php
// Session 
if($this->session->flashdata('sukses')){ 
	echo '<div class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
} 
// Error
echo validation_errors('<div class="alert alert-success">','</div>'); 
?>

<form action="<?php echo base_url('admin/dasbor/konfigurasi') ?>" method="post">

<input type="hidden" name="id_konfigurasi" value="<?php echo $site['id_konfigurasi'] ?>">

<div class="col-md-6">
	<h3>Basic information:</h3><hr>
    <div class="form-group">
    <label>Company name</label>
    <input type="text" name="namaweb" placeholder="Nama Perusahaan" value="<?php echo $site['namaweb'] ?>" required class="form-control">
    </div>
    
    <div class="form-group">
    <label>Company tagline/motto</label>
    <input type="text" name="tagline" placeholder="Company tagline/motto" value="<?php echo $site['tagline'] ?>" class="form-control">
    </div>

<div class="col-md-12">
	<input type="submit" name="submit" value="Save Configuration" class="btn btn-primary">
    <input type="reset" name="reset" value="Reset" class="btn btn-primary">
</div>

</form>