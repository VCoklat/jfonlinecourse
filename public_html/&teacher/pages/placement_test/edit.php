<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"><?php
$status=$_GET['status'];
		if ($status==1){			
?>		
<div class="callout callout-success">
                <h4>Success</h4>

                <p>Question has been saved</p>
              </div>
<?php
		}
?>		
		
      <h1>
        Edit Question
      </h1>
<?php
    $id=$_GET['id_edit'];
    $latihan = $db->where ("id", $id)->getOne("placement_test");
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
              <h3 class="box-title">New Question</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" enctype="multipart/form-data" action="pages/placement_test/edit_backend.php">
               <div class="box-body">
                <div class="form-group">
                  <label>Soal</label><br>
                  <textarea name="soal"rows="4" cols="50"><?php echo $latihan['soal']?></textarea>
                </div>
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <div class="form-group">
                  <label>Pilihan A</label>
                  <input type="text" class="form-control" placeholder="" name="a" value="<?php echo $latihan['pilihan_a']?>">
                </div>
            <div class="form-group">
                  <label>Pilihan B</label>
                  <input type="text" class="form-control" placeholder="" name="b" value="<?php echo $latihan['pilihan_b']?>">
                </div>
            <div class="form-group">
                  <label>Pilihan C</label>
                  <input type="text" class="form-control" placeholder="" name="c" value="<?php echo $latihan['pilihan_c']?>">
                </div>
            <div class="form-group">
                  <label>Pilihan D</label>
                  <input type="text" class="form-control" placeholder="" name="d" value="<?php echo $latihan['pilihan_d']?>">
                </div>    
            <div class="form-group">
                  <label>Kunci Jawaban</label>
                  <select class="form-control" name="jawaban">
                    <option value="a" <?php if($latihan['jawaban']=='a') echo "selected"?>>A</option>
                    <option value="b" <?php if($latihan['jawaban']=='b') echo "selected"?>>B</option>
                    <option value="c" <?php if($latihan['jawaban']=='c') echo "selected"?>>C</option>
                    <option value="d" <?php if($latihan['jawaban']=='d') echo "selected"?>>D</option>
                  </select>
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