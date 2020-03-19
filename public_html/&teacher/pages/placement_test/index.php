<?php
    
 require_once('check.php');
 $db->where("id_bahasa", $_SESSION["bahasa"] );
 $member = $db->get('placement_test');
 $db->disconnect();
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       	Placement Test
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Placement Test</h3>
              <div class="pull-right box-tools">
                 <a href="menu.php?menu=add_test" ><button type="button" class="btn btn-info btn-sm">
                  Add New</button></a> 
                </div>  
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Soal</th>
                  <th>A</th>
                  <th>B</th>
                  <th>C</th>
                  <th>D</th>
                  <th>Jawaban</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
					$i=0;
					foreach ($member as $members) { 	
						$i++;
				?>
				<tr>
                  <td><?php echo $i?></td>
                  <td><?php echo $members['soal']?></td>
                  <td><?php echo $members['pilihan_a']?></td>
                  <td><?php echo $members['pilihan_b']?></td>
                  <td><?php echo $members['pilihan_c']?></td>
                  <td><?php echo $members['pilihan_d']?></td>
                  <td><?php echo $members['jawaban']?></td>
                  <td> <a href="menu.php?menu=edit_test&id_edit=<?php echo $members['id']?>"><i class="menu-icon fa fa-edit" title="Edit Data Ini?" ></i></a>
                   <a href="menu.php?menu=delete_test&id=<?php echo $members['id']?>"><i class="menu-icon fa fa-trash" title="Delete Data Ini?" ></i></a>
                  </td>
                </tr>	
				<?php
					}	
				?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Soal</th>
                  <th>A</th>
                  <th>B</th>
                  <th>C</th>
                  <th>D</th>
                  <th>Jawaban</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
           <div class="box">
            <div class="box-header">
              <h3 class="box-title">Requirement Score Placement Test</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" enctype="multipart/form-data" action="pages/placement_test/skor.php">
              <div class="box-body">
                  <?php 
            $bahasa=$_SESSION['bahasa'];
  $list_paket = $db->where('id_bahasa', $bahasa)
  ->get("paket");
            foreach($list_paket as $paket) {
                ?>
                <div class="form-group">
                   <input type="hidden" name="bahasa"value="<?php echo $bahasa?>">
            <div class="col-md-6">
                  <label>Minimal Jumlah Pertanyaan Benar Paket <?php echo $paket['nama']?></label>
                  </div>
        <div class="col-md-5"></div>
        <div class="col-md-1">
                  <input type="text" name="<?php echo $paket['id']?>" class="form-control" placeholder="0" value ="<?php echo $paket['nilai'] ?>">
                  </div>
                </div>
                <br>
                <br>
                <?php
            }
            ?>

              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>

              </div>
              </form>
          </div>
            <!-- /.box-body -->
          </div>
        </div>
        
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    
    
    <!-- /.content -->
  </div>