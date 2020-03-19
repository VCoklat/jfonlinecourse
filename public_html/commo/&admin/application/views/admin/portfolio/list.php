<p>
<a href="<?php echo base_url('admin/portfolio/tambah') ?>" class="btn btn-primary">
<i class="fa fa-plus"></i> Tambah Portfolio</a>
</p>

<?php
// Notifikasi
if($this->session->flashdata('sukses')) {
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
        <th>Gambar</th>
        <th>Judul Portfolio</th>
        <th>Kategori</th>
        <th>Status</th>
        <th>Referensi</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
<?php $i=1; foreach($portfolio as $portfolio) { ?>
    <tr class="odd gradeX">
        <td><?php echo $i ?></td>
        <td>
        <img src="<?php echo base_url('assets/upload/image/thumbs/'.$portfolio->gambar) ?>" class="img img-responsive" width="60">
        </td>
        <td><?php echo $portfolio->nama_portfolio ?></td>
        <td><?php echo $portfolio->nama_kategori_portfolio ?></td>
        <td><?php echo $portfolio->status_portfolio ?> </td>
        <td><?php echo $portfolio->keterangan ?> </td>
        <td>
        <a href="<?php echo base_url('admin/portfolio/edit/'.$portfolio->id_portfolio) ?>"class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
        
        <?php include('delete.php') ?>
        
        </td>
    </tr>
<?php $i++; } ?>
</tbody>
</table>