<?php
$id=$_GET['delete'];
 $data = Array(
                'isDeleted' => '3',
            );

$db->where('id', $id);
if ($db->update('member', $data)) {
    header("Location: /../&admin/menu.php?menu=participant&status=1");
    die();
} else {
    echo 'update failed: ' . $db->getLastError();
}             
?>