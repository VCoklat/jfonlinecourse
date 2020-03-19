<?php
$id=$_GET['id'];    
  $info_bahasa = $db->where('id', $id)
  ->getOne ("master_bahasa");	
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"><?php
$status=$_GET['status'];
		if ($status==1){			
?>		
<div class="callout callout-success">
                <h4>Success</h4>

                <p> Parameter Bahasa <?php echo $info_bahasa['nama']; ?> has been saved</p>
              </div>
<?php
		}
?>		
		
      <h1>
        Parameter Bahasa <?php echo $info_bahasa['nama']; ?>
      </h1>
    </section>
<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
            <!-- /.box-header -->
            <?php 
            
  $list_paket = $db->where('id_bahasa', $id)
  ->get("paket");
            foreach($list_paket as $paket) {
            ?>
          <div class="box box-default collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Paket <?php echo $paket['nama']?></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
                    <form role="form" method="POST" enctype="multipart/form-data" action="pages/bahasa/backend.php">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama Paket</label>
                  <input type="text" name="name" class="form-control" placeholder="John Doe" value ="<?php echo $paket['nama']?>">
                </div>
                <div class="form-group">
                  <label>Biaya</label>
                  <input type="text" name="biaya" class="form-control" placeholder="100000" value ="<?php echo $paket['biaya']?>">
                </div>

              <input type="hidden" name ="id_paket" value="<?php echo $paket['id']?>">
              <input type="hidden" name ="id_bahasa" value="<?php echo $id?>">
 
            <div class="form-group">
                  <label>Link</label>
                  <input type="text" class="form-control" placeholder=" " name="link" value ="<?php echo $paket['link']?>">
                </div>
                <div class="form-group">
                  <label>Detail</label>
                  <textarea class="form-control" name="detail"rows="3" placeholder=""><?php echo $paket['detail']?></textarea>
                </div>


              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>

              </div>
              </form>
              
            </div>
            <!-- /.box-body -->
          </div>
          <?php }?>
          <!-- /.box -->
            <!-- form start -->
      
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->