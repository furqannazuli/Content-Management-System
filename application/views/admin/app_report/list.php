<p>
    <a href="<?php echo base_url('admin/app_report/tambah') ?>" class="btn btn-primary">
    <i class="fa fa-plus"></i> Tambah Data</a>
</p>

<?php
// Notifikasi
if($this->session->flashdata('sukses')){
	echo '<div class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
}

// Error
echo validation_errors('<div class="alert alert-success">','</div>');
?>

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
        <th>#</th>
        <th>Hari</th>
        <th>Aplikasi</th>
        <th>Keterangan</th>
    </tr>
</thead>
<tbody>
<?php $i=1; foreach((array) $app_report as $app_report){ ?>
    <tr class="odd gradeX">
        <td><?php echo $i ?></td>
        <td><?php echo $app_report['hari'] ?></td>
        <td><?php echo $app_report['aplikasi'] ?></td>  
        <td><?php echo $app_report['keterangan'] ?></td>       
        <td style="text-align: center;">
            <a href="<?php echo base_url('admin/app_report/edit/'.$app_report['id']) ?>"class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
            <a href="<?php echo base_url('admin/app_report/delete/'.$app_report['id']) ?>"class="btn btn-danger btn-sm" onClick="return confirm('Yakin ingin menghapus user ini?')"><i class="fa fa-trash-o"></i></a>
        </td>
    </tr>
<?php $i++;} ?>
</tbody>
</table>