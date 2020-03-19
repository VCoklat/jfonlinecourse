<p>
<a href="<?php echo base_url('admin/produk/tambah') ?>" class="btn btn-primary">
<i class="fa fa-plus"></i> Tambah Produk</a>
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
        <th>No</th>
        <th>Logo Klien</th>
        <th>Nama Klien</th>
        <th>Posisi Klient</th>
        <th>Review</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
<?php $i=1; foreach($produk as $produk) { ?>
    <tr class="odd gradeX">
        <td><?php echo $i ?></td>
        <td>
        <img src="<?php echo base_url('assets/upload/image/thumbs/'.$produk->gambar) ?>" class="img img-responsive" width="60">
        </td>
        <td><?php echo $produk->nama_produk ?></td>
        <td><?php echo $produk->harga ?></td>
        <td>
		<?php echo mb_strimwidth($produk->keterangan,0,50) ?> 
        </td>
        <td><?php echo $produk->status_produk ?></td>
        <td>
        <a href="<?php echo base_url('admin/produk/edit/'.$produk->id_produk) ?>"class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
        
        <?php include('delete.php') ?>
        
        </td>
    </tr>
<?php $i++; } ?>
</tbody>
</table>