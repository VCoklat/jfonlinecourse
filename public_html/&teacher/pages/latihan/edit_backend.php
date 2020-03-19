 <?php
require_once('../../check_update.php');
$name =($_POST['name']);
$link=($_POST['link']);
$urutan=($_POST['urutan']);
$paket=($_POST['paket']);
$id=$_POST['id'];

            $data = Array(
                'name' => $name,
                'link' => $link,
                'urutan' => $urutan,
                'id_paket' => $paket,
            );
            //echo $image->getError();
     
if ($db->where('id',$id)->update('latihan', $data)) {
    header("Location: /../&teacher/menu.php?menu=latihan&status=1");
    die();
} else {
    echo 'update failed: ' . $db->getLastError();
} 