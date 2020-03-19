 <?php
require_once('../../check_update.php');


if (isset($_FILES['pictures'])) {
    
    $folderName         = "paket";
    $optionalPermission = "rwx r-x r-x";
    $image              = new Bulletproof\Image($_FILES);
    $image->setLocation($folderName, $optionalPermission);
    if ($image["pictures"]) {
        $upload = $image->upload();
        
        if ($upload) {
            $picture = $upload->getFullPath(); // uploads/cat.gif
            $data    = Array(
                'gambar' => $picture
            );
        }
    }
    
}
if ($db->insert('program', $data)) {
    header("Location: /../&admin/menu.php?menu=paket&status=1");
    die();
} else {
    echo 'insert failed: ' . $db->getLastError();
} 