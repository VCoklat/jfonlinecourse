<?php
function generateRandomString($length = 8) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$id=$_GET['delete'];

$email=$_GET['email'];
$pass=generateRandomString();
 $data = Array(
                'isDeleted' => '3',
                'password'=> md5($pass),
            );

$db->where('id', $id);
if ($db->update('member', $data)) {
    $from="info@jfonlinecourse.com";// this is the sender's Email address
            
            $subject="Pendaftaran telah dikonfirmasi";
            $ph_number="Terimakasih telah mendaftar di JFOnline Course. Pendaftaran anda telah dikonfirmasi dan anda dapat login di
            https://member.jfonlinecourse.com
            email=".$email."
            password=".$pass;
            $headers="From:".$from;
            mail($email,$subject,$ph_number,$headers);
    header("Location: /../&admin/menu.php?menu=participant&status=1");
    die();
} else {
    echo 'update failed: ' . $db->getLastError();
}             
?>