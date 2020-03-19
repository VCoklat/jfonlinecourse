    <?php 
    require_once('../../check_update.php');
            $bahasa=$_POST['bahasa'];
  $list_paket = $db->where('id_bahasa', $bahasa)
  ->get("paket");
            foreach($list_paket as $paket) {
                $id=$paket['id'];
                $nilai= $_POST[$id];
                echo $nilai;
                $data = Array( 'nilai' => $nilai);
                if ($db->where('id',$id)->update('paket', $data)) {
    echo "Success";

} else {
    echo 'update failed: ' . $db->getLastError();
} 
}
  header("Location: /../&teacher/menu.php?menu=test&status=1");
    die();