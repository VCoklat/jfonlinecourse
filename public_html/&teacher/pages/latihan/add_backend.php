 <?php
require_once('../../check_update.php');
$name =($_POST['name']);
$link=($_POST['link']);
$urutan=($_POST['urutan']);
$paket=($_POST['paket']);
$id_bahasa=($_POST['id_bahasa']);


            $data = Array(
                'name' => $name,
                'link' => $link,
                'urutan' => $urutan,
                'id_paket' => $paket,
                'id_bahasa' => $id_bahasa,
            );
            //echo $image->getError();
     
if ($db->insert('latihan', $data)) {
    header("Location: /../&teacher/menu.php?menu=latihan&status=1");
    die();
} else {
    echo 'update failed: ' . $db->getLastError();
} 