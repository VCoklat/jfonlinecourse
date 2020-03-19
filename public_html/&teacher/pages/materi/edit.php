<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"><?php
$status=$_GET['status'];
		if ($status==1){			
?>		
<div class="callout callout-success">
                <h4>Success</h4>

                <p>Materi has been saved</p>
              </div>
<?php
		}
?>		
		
      <h1>
        Edit materi
      </h1>
<?php
    $id=$_GET['id_edit'];
    $materi = $db->where ("id", $id)->getOne("materi");
?>
    </section>
<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">New Materi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" enctype="multipart/form-data" action="pages/materi/edit_backend.php">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama Pelajaran</label>
                  <input type="text" name="name" class="form-control" placeholder="Kosakata Dasar" value ="<?php echo $materi['name']?>">
                </div>
 
            <div class="form-group">
                  <label>Link Materi</label>
                  <input type="text" class="form-control" placeholder="drive.google.com/" name="link" value ="<?php echo $materi['link']?>" >
                </div>
            <div class="form-group">
                  <label>Paket</label>
                  <select class="form-control" name="paket">
                <?php
 $db->where("id_bahasa", $_SESSION["bahasa"] );
 $member = $db->get('paket');
 $db->disconnect();
 
					foreach ($member as $members) { 	
						$i++;
                ?>
                
                    <option value="<?php echo $members['id']?>" <?php if($materi['id_paket']==$members['id']) echo "selected";?> ><?php echo $members['nama']?></option>
                    <?php
					}
                    ?>
                  </select>
                </div>    
                <input type="hidden" name="id" value="<?php echo $id?>">
                <div class="form-group">
                  <label>Urutan</label>
                  <input type="text" name="urutan" class="form-control" placeholder="1" value ="<?php echo $materi['urutan']?>">
                </div>                

              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
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