 <?php
require_once('../../check_update.php');


if (isset($_FILES['pictures'])) {
    
    $folderName         = "testimony";
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
if ($db->insert('testimoni', $data)) {
    header("Location: /../&admin/menu.php?menu=testimoni&status=1");
    die();
} else {
    echo 'update failed: ' . $db->getLastError();
} 