<?php
$id=$_GET['id'];
$db->where('id', $id);
if($db->delete('placement_test')) 
    header("Location: /../&teacher/menu.php?menu=test&status=1");

else {
    echo 'update failed: ' . $db->getLastError();
}             
?>