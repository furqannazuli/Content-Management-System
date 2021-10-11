<p>
    <a href="<?php echo base_url('admin/data_warehouse/tambah') ?>" class="btn btn-primary">
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
        <th>Judul</th>
        <th>Konten</th>
    </tr>
</thead>
<tbody>
<?php $i=1; foreach((array) $data_warehouse as $data_warehouse){ ?>
    <tr class="odd gradeX">
        <td><?php echo $i ?></td>
        <td><?php echo $data_warehouse['title'] ?></td>        
        <td><?php echo $data_warehouse['konten'] ?></td>        
        <td style="text-align: center;">
            <a href="<?php echo base_url('admin/data_warehouse/edit/'.$data_warehouse['id']) ?>"class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
            <a href="<?php echo base_url('admin/data_warehouse/delete/'.$data_warehouse['id']) ?>"class="btn btn-danger btn-sm" onClick="return confirm('Yakin ingin menghapus user ini?')"><i class="fa fa-trash-o"></i></a>
        </td>
    </tr>
<?php $i++;} ?>
</tbody>
</table>