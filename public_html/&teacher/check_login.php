<?php
require_once ('../function/db_connect.php');
require_once ('../function/secure.php');

// Get $id_token via HTTPS POST.
if(isset($_POST['email'])&&isset($_POST['password'])) {
  $email=clean_email($_POST['email']);
  $password=clean($_POST['password']); 	
  $db->where ('password', md5($password));
  $db->where ('email', $email); 
  $results = $db->get ('teacher');
  if ($db->count == 1){
      session_start();
      foreach ($results as $result){
      $_SESSION["name"] = $result['name'];
      $_SESSION["picture"] = $result['picture'];
      $_SESSION["email"] = $email;	
      $_SESSION["bahasa"] = $result['id_bahasa'];	
     header("Location: /&teacher/menu.php?menu=participant");	
      }
  }
} else {
	header("Location: /&teacher/index.php");
}

?>