 <?php
require_once('../../check_update.php');
$biaya      = clean($_POST['biaya']);
$name    = clean($_POST['name']);
$id= clean($_POST['id_paket']);
$detail = clean($_POST['detail']);
$link = ($_POST['link']);
$bahasa =clean($_POST['id_bahasa']);
$skor = clean($_POST['skor']);

            $data = Array(
                'biaya' => $biaya,
                'detail' => $detail,
                'nama' => $name,
                'link' => $link,
                'nilai' => $skor
            );
            //echo $image->getError();
      
$db->where('id', $id);
if ($db->update('paket', $data)) {
    header("Location: /../&admin/menu.php?menu=bahasa&id=".$bahasa."&status=1");
    die();
} else {
    echo 'update failed: ' . $db->getLastError();
} 