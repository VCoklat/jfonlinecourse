<?php
 require_once('check.php');
 require_once('header.php');
 require_once('nav.php');
 $menu =$_GET['menu'];
 switch ($menu) {
    case "participant":
		require_once('pages/participant/participant.php');
        break;
    case "bahasa":
		require_once('pages/bahasa/bahasa.php');
        break; 
    case "test":
		require_once('pages/placement_test/index.php');
        break; 
    case "delete_test":
		require_once('pages/placement_test/delete.php');
        break;     
    case "edit_test":
		require_once('pages/placement_test/edit.php');
        break;
    case "add_test":
		require_once('pages/placement_test/add.php');
        break;         
	case "parameter":
		require_once('pages/parameter/parameter.php');
        break;
    case "edit":
		require_once('pages/materi/edit.php');
        break;  
    case "add":
		require_once('pages/materi/add.php');
        break;   
    case "materi":
		require_once('pages/materi/materi.php');
        break;   
        
    case "edit_latihan":
		require_once('pages/latihan/edit.php');
        break;  
    case "add_latihan":
		require_once('pages/latihan/add.php');
        break;   
    case "latihan":
		require_once('pages/latihan/latihan.php');
        break;     
    
     case "edit_exam":
		require_once('pages/exam/edit.php');
        break;  
    case "add_exam":
		require_once('pages/exam/add.php');
        break;   
    case "exam":
		require_once('pages/exam/exam.php');
        break;       
    
    case "delete":
		require_once('pages/materi/delete.php');
        break;     
    case "materi":
		require_once('pages/materi/materi.php');
        break;    
    case "testimoni":
		require_once('pages/parameter/testimoni.php');
        break;    
        
    case "team":
		require_once('pages/parameter/team.php');
        break;        
    case "paket":
		require_once('pages/parameter/paket.php');
        break;        
    case "profile":
		require_once('pages/profile/profile.php');
        break;
    case "activate":
		require_once('pages/participant/update.php');
        break; 
    case "delete":
		require_once('pages/participant/delete.php');
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
