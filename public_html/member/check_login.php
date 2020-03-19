<?php
require_once ('../function/db_connect.php');
require_once ('../function/secure.php');

// Get $id_token via HTTPS POST.
if(isset($_POST['email'])&&isset($_POST['password'])) {
  $email=clean_email($_POST['email']);
  $password=md5(clean($_POST['password'])); 	
  $params = Array('3', $email, $password);
  $results = $db->rawQuery("SELECT name, picture FROM member WHERE isDeleted = ? AND email = ? AND password = ? LIMIT 1", $params);

  if ($db->count == 1){
      foreach ($results as $result){
          session_start();
          $_SESSION["name"] = $result['name'];
          $_SESSION["picture"] = $result['picture'];
          $_SESSION["email"] = $email;	
          header("Location: menu.php?menu=profile");	
      }
  } else {
	header("Location: index.php");
}

      
} else {
	header("Location: index.php");
}

?>