<?php

$connect = new mysqli("127.0.0.1","u6510106_admin","jfonline2019","u6510106_data");

if($connect){
}else{
	echo "Connection Failed";
	exit();
}

       $sql="UPDATE api SET status='0' ";
        $result=mysqli_query($connect,$sql);

