<p>
    <a href="<?php echo base_url('admin/user/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah User</a>
</p>

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
        <th style="text-align: center;">#</th>
        <th style="text-align: center;">Nama</th>
        <th style="text-align: center;">Email</th>
        <th style="text-align: center;">Username</th>
        <th style="text-align: center;">Action</th>
    </tr>
</thead>
<tbody>
<?php $i=1; foreach($user as $user){ ?>
    <tr class="odd gradeX">
        <td style="text-align: center;"><?php echo $i ?></td>
        <td><?php echo $user->nama ?></td>
        <td><?php echo $user->email ?></td>
        <td><?php echo $user->username ?></td>
        <td style="text-align: center;">
            <a href="<?php echo base_url('admin/user/edit/'.$user->id_user) ?>"class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
            <a href="<?php echo base_url('admin/user/delete/'.$user->id_user) ?>"class="btn btn-danger btn-sm" onClick="return confirm('Yakin ingin menghapus user ini?')"><i class="fa fa-trash-o"></i></a>
        </td>
    </tr>
<?php $i++;} ?>
</tbody>
</table>