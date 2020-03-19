<?php
    
 require_once('check.php');
 $db->orderBy("urutan","Desc");
 $db->where("id_bahasa", $_SESSION["bahasa"] );
 $member = $db->get('materi');
 $db->disconnect();
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       	Materi
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Materi</h3>
              <div class="pull-right box-tools">
                 <a href="menu.php?menu=add" ><button type="button" class="btn btn-info btn-sm">
                  Add New</button></a> 
                </div>  
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Judul</th>
                  <th>Link</th>
                  <th>Urutan</th>
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
                  <td><?php echo $members['name']?></td>
                  <td><?php echo $members['link']?></td>
                  <td><?php echo $members['urutan']?></td>
                  <td> <a href="menu.php?menu=edit&id_edit=<?php echo $members['id']?>"><i class="menu-icon fa fa-edit" title="Edit Data Ini?" ></i></a>
                  </td>
                </tr>	
				<?php
					}	
				?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Judul</th>
                  <th>Link</th>
                  <th>Urutan</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
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