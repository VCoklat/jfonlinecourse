<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"><?php
$status=$_GET['status'];
		if ($status==1){			
?>		
<div class="callout callout-success">
                <h4>Success</h4>

                <p>New placement test question has been saved</p>
              </div>
<?php
		}
?>		
		
      <h1>
        New Question
      </h1>
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
            <form role="form" method="POST" enctype="multipart/form-data" action="pages/placement_test/add_backend.php">
              <div class="box-body">
                <div class="form-group">
                  <label>Soal</label><br>
                   <textarea name="soal"rows="4" cols="50"></textarea>
                </div>
            <input type="hidden" name="bahasa" value="<?php echo $_SESSION["bahasa"]?>">
            <div class="form-group">
                  <label>Pilihan A</label>
                  <input type="text" class="form-control" placeholder="" name="a" >
                </div>
            <div class="form-group">
                  <label>Pilihan B</label>
                  <input type="text" class="form-control" placeholder="" name="b" >
                </div>
            <div class="form-group">
                  <label>Pilihan C</label>
                  <input type="text" class="form-control" placeholder="" name="c" >
                </div>
            <div class="form-group">
                  <label>Pilihan D</label>
                  <input type="text" class="form-control" placeholder="" name="d" >
                </div>    
            <div class="form-group">
                  <label>Kunci Jawaban</label>
                  <select class="form-control" name="jawaban">
                    <option value="a">A</option>
                    <option value="b">B</option>
                    <option value="c">C</option>
                    <option value="d">D</option>
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