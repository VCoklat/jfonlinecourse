<style type="text/css">
.gallery img {
    width: 20%;
    height: auto;
    border-radius: 5px;
    cursor: pointer;
    transition: .3s;
	margin: 5px;
}
.gallery a, .gallery a:focus, .gallery a:active{ outline:none;}
</style>

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

                <p>Paket has been added</p>
              </div>
<?php
		}
?>		
      <h1>
        Paket
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
              <h3 class="box-title">Paket</h3>
            </div>
            <!-- /.box-header -->
            <div class="gallery">
            <?php
            // Include database configuration file
            $testimonies = $db->get('program');
            
           foreach($testimonies as $testimony){
                    $imageURL = "/&admin/pages/parameter/".$testimony["gambar"];
            ?>
                <a href="<?php echo $imageURL; ?>" data-fancybox="gallery" data-caption="Program" >
                    <img src="<?php echo $imageURL; ?>" alt="" />
                </a>
            <?php 
            } 
            ?>
        </div>


            <!-- form start -->
            <form role="form" method="POST" enctype="multipart/form-data" action="pages/parameter/paket_upload.php">

                <div class="form-group">
                  <label for="exampleInputFile">Add Program</label>
                   <input type="hidden" name="MAX_FILE_SIZE" value="10000000"/>
					  <input type="file" name="pictures" accept="image/*"/>
					  <p class="help-block">File type : png, jpeg, jpg.</p>	
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

<!-- jQuery library -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  
  <!-- Fancybox CSS library -->
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css">
<script type="text/javascript">
    $("[data-fancybox]").fancybox({ });
</script>

<!-- Fancybox JS library -->
<script type="text/javascript" src="/fancybox/jquery.fancybox-1.3.4.pack.js"></script>