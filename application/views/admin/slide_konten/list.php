<p>
    <a href="<?php echo base_url('admin/slide_konten/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
</p>

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
        <th style="text-align: center;">#</th>
        <th style="text-align: center;">Judul</th>
        <th style="text-align: center;">Header</th>
        <th style="text-align: center; width: 20%;">Intro</th>
        <th style="text-align: center;">Manfaat Penggunaan</th>
        <th style="text-align: center; width: 30%;">Output</th>
        <th style="text-align: center;">Gambar</th>
        <th style="text-align: center;">Video</th>
    </tr>
</thead>
<tbody>
<?php $i=1; foreach((array) $slide_konten as $slide_konten){ ?>
    <tr class="odd gradeX">
        <td><?php echo $i ?></td>
        <td><?php echo $slide_konten['judul'] ?></td>
        <td><?php echo $slide_konten['header_title'] ?></td>
        <td><?php echo $slide_konten['pengertian'] ?></td>
        <td><?php echo $slide_konten['manfaat'] ?></td>
        <td><?php echo $slide_konten['output'] ?></td>        
        <td>
            <img src="<?php echo base_url('assets/upload/'.$slide_konten['gambar']) ?>" class="img img-responsive" width="60">
        </td>
        <td>
            <video controls width="60">
                <source src="<?php echo base_url('assets/upload/'.$slide_konten['video']) ?>" type="video/mp4" />
            </video>  
        </td>
        <td style="text-align: center;">
            <a href="<?php echo base_url('admin/slide_konten/edit/'.$slide_konten['id']) ?>"class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
            <a href="<?php echo base_url('admin/slide_konten/delete/'.$slide_konten['id']) ?>"class="btn btn-danger btn-sm" onClick="return confirm('Yakin ingin menghapus user ini?')"><i class="fa fa-trash-o"></i></a>
        </td>
    </tr>
<?php $i++;} ?>
</tbody>
</table>