<?php
 require_once('check.php');
 $db->orderBy("id","Desc");
 $db->where("isDeleted","2");
 $member = $db->get('member');
 $db->disconnect();
 
 $db->orderBy("id","Desc");
 $db->where("isDeleted","3");
 $old = $db->get('member');
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       	Member
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">New Member</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Name</th>
                  <th>Paket</th>
                  <th>E-mail</th>
                  <th>WA</th>
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
                  <td><?php 
                  $db->where ("id", $members['paket']);
$user = $db->getOne ("paket");
echo $user['nama'];
                  
                  ?></td>
                  <td><?php echo $members['email']?></td>
                  <td><?php echo $members['wa']?></td>
				  <td><i class="menu-icon fa fa-check"  data-toggle="modal"  title="Terima Peserta Ini?" data-target="#modal-success<?php echo $members['id']?>"  title="Terima Peserta ini?"></i> &nbsp 
				        <i class="menu-icon fa fa-trash" data-toggle="modal"  title="Hapus Peserta Ini?" data-target="#modal-warning<?php echo $members['id']?>"></i></td>	
                </tr>	
				<?php
					}	
				?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Name</th>
                  <th>Paket</th>
                  <th>E-mail</th>
                  <th>WA</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Member</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Name</th>
                  <th>Paket</th>
                  <th>E-mail</th>
                  <th>WA</th>
                </tr>
                </thead>
                <tbody>
                <?php
					$i=0;
					foreach ($old as $members) { 	
						$i++;
				?>
				<tr>
                  <td><?php echo $i?></td>
                  <td><?php echo $members['name']?></td>
                  <td><?php
                  $db->where ("id", $members['paket']);
$user = $db->getOne ("paket");
echo $user['nama'];
                  
                  ?></td>
                  <td><?php echo $members['email']?></td>
                  <td><?php echo $members['wa']?></td>
                </tr>	
				<?php
					}	
				?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Name</th>
                  <th>Paket</th>
                  <th>E-mail</th>
                  <th>WA</th>
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
 <?php
					$i=0;
					foreach ($member as $members) { 	
						$i++;
				?>
				
<div class="modal modal-warning fade" id="modal-warning<?php echo $members['id']?>" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Are you sure to delete this member?</h4>
              </div>
              <div class="modal-body">
                <p><?php echo $members['name']?></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <a href="menu.php?menu=delete&delete=<?php echo $members['id']?>"> <button type="button" class="btn btn-outline">Save changes</button></a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        
<div class="modal modal-success fade" id="modal-success<?php echo $members['id'] ?>" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Are you sure to accept this member?</h4>
              </div>
              <div class="modal-body">
                <p><?php echo $members['name']?></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <a href="menu.php?menu=activate&delete=<?php echo $members['id']?>&email=<?php echo $members['email']?>"> <button type="button" class="btn btn-outline">Save changes</button></a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
              
<?php
					}
?>