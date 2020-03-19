<?php
		if(!empty($_REQUEST['email'])) {
			$email=$_REQUEST['email'];
			//echo $email;
		}
		if(!empty($_REQUEST['phone'])) {
			$phone=$_REQUEST['phone'];
			//echo $password;
		}
	
		if(!empty($_REQUEST['name'])) {
			$name=$_REQUEST['name'];
		}
		
		if(!empty($_REQUEST['paket'])) {
			$paket=$_REQUEST['paket'];
		}

$servername = "srv55";
$username = "u6510106_admin";
$password = "jfonline2019";
$dbname = "u6510106_data";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO member (name, wa, email,paket)
VALUES ('$name', '$phone', '$email', '$paket')";

if ($conn->query($sql) === TRUE) {
    $from="info@jfonlinecourse.com";// this is the sender's Email address
// About Query
$queryAbout = 'SELECT * FROM paket where id='.$paket;
$resultAbout = mysqli_query($conn, $queryAbout);
$about = mysqli_fetch_assoc($resultAbout);

            $subject="Petunjuk Cara Membayar";
            $ph_number="Halo ".$name.",

Berikut data pembelian anda
Nama ".$name."
Paket ".$about['nama']."
Total Biaya *".$about['biaya']."
*JIKA INGIN REQUEST 1ON1 JUGA BISA, NAMUN HARGA DITAMBAH 25RB CONTOH: MAU MILIH PAKET BASIC 1ON1 HARGANYA MENJADI 125RB
*JIKA INGIN REQUEST JADWAL (HANYA BERLAKU UNTUK PAKET BASIC) JUGA BISA, HARGA DITAMBAH 100RB CONTOH: BASIC 1ON1 REQUEST JADWAL JADI 225RB

Selanjutnya silahkan transfer ke bank atau pulsa dibawah ini

Rekening BCA:
229-174-3406 a/n Jessica

Rekening BRI:
0397-0101-2934-509 a/n Jessica

Rekening Mandiri:
122-00075-18486 a/n Jessica

Pulsa XL:
081919901199

GO-PAY:
081919901199

OVO:
081919901199

Silahkan kontak via WhatsApp ke:
081919072596

Atau chat otomatis ke WA, klik disini 
 
https://api.whatsapp.com/send?phone=6281919072596&text=Daftar%20JF%20Korean%20Course%0A%0ANama%20lengkap%20%3A%0ABayar%20ke%20JF%20KC%20via%20%3A%20BCA/Mandiri/BRI/Pulsa%20XL/GoPay/OVO%20%0ATransfer%20atas%20nama%20%3A%20(jika%20via%20pulsa%20abaikan%20saja)%0APaket%20%3A%0AJadwal%20%3A%20A%20/%20B%0AGrup%20%3A%20Reguler%20/%201on1%0AGrup%20Belajar%20%3A%20LINE%20/%20WA%20(Jika%20punya%20LINE%20lbh%20direkomendasikan)%0ABukti%20Pembayaran%20%3A%20berupa%20foto%20/%20ss

Setelah konfirmasi bukti pembayaran, kami akan memberikan link grupnya

Selamat bergabung dan siap untuk belajar bersama kami ^_^";
            $headers="From:".$from;
            mail($email,$subject,$ph_number,$headers);
			die(); 
	
}else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
<!--<p class="content-desc fadeInDown contentAnimated finishAnimated" data-animation="true" data-animation-type="fadeInDown" style="color:#FFF">-->
<!--  <center><h2>JADWAL KELAS PRIVAT ONLINE JF KOREAN COURSE</h2></center>-->
<!--<br>-->

<!--<p class="kiri"><h3>Basic Korean Course</h3>-->
										
<!--<li>Jadwal A:</li> -->
<!--Senin, Rabu, Jumat jam 20.00-22.00 WIB-->

<!--<li>Jadwal B: </li>-->
<!--Selasa, Kamis, Jumat jam 20.00-22.00 WIB-->

<!--<p>-->
<!--<h3>Beginner, Intermediate, dan Advanced Korean Course</h3>-->

<!--</p>-->
<!--<li>Jadwal A:</li> -->
<!--Senin, Rabu, Jumat 19.30-21.30 WIB-->

<!--<li>Jadwal B: </li>-->
<!--Senin, Selasa, Kamis 20.00-22.00 WIB-->

<!--<br>-->
<!--<center><h3>Kelas dimulai tanggal 6 Mei 2019<h3></center>-->

<!-- <br>                      -->
<!-- <p>-->
<!--<center><h1>METODE / SISTEM BELAJAR DI JF KOREAN COURSE</h1>></center>-->
<!-- <center><a href="http://line.me/R/home/public/post?id=jby25651&postId=1149360684804082526">Metode Belajar</a></center>-->
<!--</p>-->
                        
						
			
