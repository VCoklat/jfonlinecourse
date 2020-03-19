  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
	<h1>
        Materi Korea Beginner
      </h1>
    </section>
<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
<div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box box-warning box-solid">
            <!-- /.box-header -->
            <div class="box-body">
                <?php
 $db->where("id_paket",'5');
 $materies = $db->get('materi');
 if ($db->count > 0)
    foreach ($materies as $materi) {
 
                ?>
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo $materi['name']; ?></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" ><a href="menu.php?menu=material_detail&id=<?php echo $materi['id']; ?>"><i class="fa fa-search"></i></a>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <?php
            }
            ?>
            </div>
            <!-- /.box-body -->
          </div>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
    </div>
</section>    
</div>