 <?php
require_once('../../check_update.php');
$email   = clean_email($_POST['email']);
$wa      = clean($_POST['wa']);
$address = clean($_POST['address']);
$phone_number = clean($_POST['phone_number']);
$visi = clean($_POST['visi']);
$latar = clean($_POST['latar']);


if (isset($_FILES['pictures'])) {
    
    $folderName         = "uploads";
    $optionalPermission = "rwx r-x r-x";
    $image              = new Bulletproof\Image($_FILES);
    $image->setLocation($folderName, $optionalPermission);
    if ($image["pictures"]) {
        $upload = $image->upload();
        
        if ($upload) {
            $picture = $upload->getFullPath(); // uploads/cat.gif
            $data    = Array(
                'email' => $email,
				'phone_number' => $phone_number,
				'wa' => $wa,
				'visi' => $visi,
				'latar' => $latar,
				'address' => $address,
                'logo' => $picture
            );
        } else {
            $data = Array(
                'email' => $email,
				'phone_number' => $phone_number,
				'wa' => $wa,
			    'visi' => $visi,
				'latar' => $latar,
				'address' => $address,
            );
            //echo $image->getError();
        }
    }
    
}
if ($db->update('parameter', $data)) {
    header("Location: /../&admin/menu.php?menu=parameter&status=1");
    die();
} else {
    echo 'update failed: ' . $db->getLastError();
} 