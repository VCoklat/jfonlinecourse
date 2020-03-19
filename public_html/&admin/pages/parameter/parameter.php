<?php
 $parameter = $db->getOne ("parameter");
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  
    <!-- Content Header (Page header) -->
    <section class="content-header">
		
<?php
$status=$_GET['status'];
		if ($status==1){			
?>		
<div class="callout callout-success">
                <h4>Success</h4>

                <p>Parameter has been saved</p>
              </div>
<?php
		}
?>		
      <h1>
        Site Settings
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
		
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Site Setting</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" enctype="multipart/form-data" action="pages/parameter/parameter_update.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="web_email_address">Web Email address</label>
                  <input type="email" class="form-control" name="email" placeholder="info@jfcourse.com" value=" <?php echo $parameter['email'];?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Logo</label>
                   <input type="hidden" name="MAX_FILE_SIZE" value="10000000"/>
					  <input type="file" name="pictures" accept="image/*"/>
					  <p class="help-block">File type : png, jpeg, jpg.</p>	
                </div>

            <div class="form-group">
                  <label>Phone Number</label>
                  <input type="text" class="form-control" placeholder="07171234567" name="phone_number" value="<?php echo $parameter['phone_number'];?>">
                </div>
			<div class="form-group">
                  <label>WA</label>
                  <input type="text" class="form-control" placeholder="081234567890" name="wa" value="<?php echo $parameter['wa'];?>">
                </div>	  
                <div class="form-group">
                  <label>Address</label>
                  <textarea class="form-control" rows="3" placeholder="Jl. sudirman No. 1, Jakarta Pusat, Jakarta" name="address"><?php echo $parameter['address'];?></textarea>
                </div>
            <!-- textarea -->
                <div class="form-group">
                  <label>Visi</label>
                  <textarea class="form-control" rows="3" placeholder="Visi" name="visi"><?php echo $parameter['visi'];?></textarea>
                </div>
                 <div class="form-group">
                  <label>Background</label>
                  <textarea class="form-control" rows="3" placeholder="Visi" name="latar"><?php echo $parameter['latar'];?></textarea>
                </div>

              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              </div>
            </form>

              </div>
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