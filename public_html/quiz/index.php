<!DOCTYPE html>
<html lang="en" >

<head>
    <?php $id_bahasa=$_GET['id']; 
    $servername = "srv55";
$username = "u6510106_admin";
$password = "jfonline2019";
$dbname = "u6510106_data";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
  <meta charset="UTF-8">
  <title>Placement Test <?php 
                        $queryTestimoni = "SELECT nama FROM master_bahasa where id='$id_bahasa' LIMIT 1";
$resultTestimoni = mysqli_query($conn, $queryTestimoni);
	while ($row = mysqli_fetch_assoc($resultTestimoni)) {
	    $nama_bahasa= $row['nama'];
	}?> </title>
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <!--- Based on "Simple JavaScript Quiz" tutorial by Eduonix Learning Solutions --->

<div id="container">
  <header>
    <h1>Placement Test <?php echo $nama_bahasa ?></h1>
    <p>Test your knowledge in <strong><?php echo $nama_bahasa ?> Language</strong></p>
  </header>
  <section>
    <form name="quizForm" >
        <?php
         $queryTestimoni = "SELECT * FROM placement_test where id_bahasa='$id_bahasa'";
$resultTestimoni = mysqli_query($conn, $queryTestimoni);
$i=0;
	while ($row = mysqli_fetch_assoc($resultTestimoni)) {
	    $i++;
	    $jawaban[]=$row['jawaban'];
        ?>
      <h3><?php echo $i?>. <?php echo $row['soal']?></h3>
      <input type="radio" name="q<?php echo $i?>" value="a" id="q<?php echo $i?>a">a. <?php echo $row['pilihan_a']?><br>
      <input type="radio" name="q<?php echo $i?>" value="b" id="q<?php echo $i?>b">b.  <?php echo $row['pilihan_b']?><br>
      <input type="radio" name="q<?php echo $i?>" value="c" id="q<?php echo $i?>c">c. <?php echo $row['pilihan_c']?><br>
      <input type="radio" name="q<?php echo $i?>" value="d" id="q<?php echo $i?>d">d.  <?php echo $row['pilihan_d']?><br>
<?php
	}?>
	
      <br><br>
      <input type="submit" value="Submit Answers">
    </form>
    <div id="results"></div>
  </section>
</div>
  
  

    <script>
        var formElement = document.forms['quizForm'];

formElement.onsubmit = function submitAnswers(){
	var total = <?php echo $i?>;
	var score = 0;
	
	
	// Set Correct Answers
	var answers = [];
	var skor = [];
	var paket = [];
	var id_paket = [];
	// Get User Input
	<?php for($x = 1; $x <= $i;$x++){ ?>
	    var q<?php echo $x ?> = document.forms["quizForm"]["q<?php echo $x?>"].value
	     answers.push("<?php echo $jawaban[$x-1] ?>"); 
	<?php }?>
	// Validation
	for(i = 1; i <= total;i++){
		if(eval('q'+i) === null || eval('q'+i) === ''){
			alert('You missed question '+ i);
			return false;
		}
	}
	
	// Check Answers
	for(i = 1; i <= total;i++){
		if(eval('q'+i) === answers[i - 1]){
			score++;
		}
	}
	
	// Display Results
	var results = document.getElementById('results');
	<?php
	
	 $queryTestimoni = "SELECT * FROM `paket` where id_bahasa='$id_bahasa' ORDER BY nilai ASC";
$resultTestimoni = mysqli_query($conn, $queryTestimoni);
$i=0;
	while ($row = mysqli_fetch_assoc($resultTestimoni)) {
	 ?>
	 paket.push("<?php echo $row['nama']?>"); 
	 skor.push("<?php echo $row['nilai']?>"); 
	 id_paket.push("<?php echo $row['id']?>"); 
	 <?php
	}
	?>
	for (var i = 0; i < skor.length; i++) {
            if(skor[i]>=score){
                results.innerHTML = '<h3>You scored <span>'+score+'</span> out of <span>'+total+'. Course suit You is </span> <a href="../register.php?id=<?php echo $id_bahasa?>&paket='+id_paket[i]+'">Click Here</a></h3>';
            }
 }

	
	
	return false;
}
    </script>




</body>

</html>
