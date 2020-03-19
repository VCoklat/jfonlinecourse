<?php
 require_once('check.php');
 require_once('header.php');
 require_once('nav.php');
 $menu =$_GET['menu'];
 switch ($menu) {
    case "exercise":
		require_once('pages/exercise/exercise.php');
        break;
	case "exam":
		require_once('pages/exam/exam.php');
        break;
    case "schedule":
		require_once('pages/schedule/schedule.php');
        break;    
    case "material_detail":
		require_once('pages/material/material_detail.php');
        break; 
    case "material":
		require_once('pages/material/material.php');
        break;     
    case "certificate":
		require_once('pages/certificate/certificate.php');
        break;        
    case "profile":
		require_once('pages/profile/profile.php');
        break;
 }
require_once('footer.php');
require_once('control_sidebar.php');
?>

  
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
