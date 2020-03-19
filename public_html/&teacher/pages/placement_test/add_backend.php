 <?php
require_once('../../check_update.php');
$soal =bahasa($_POST['soal']);
$a=bahasa($_POST['a']);
$b=bahasa($_POST['b']);
$c=bahasa($_POST['c']);
$d=bahasa($_POST['d']);
$id_bahasa=($_POST['bahasa']);
$jawaban=($_POST['jawaban']);

            $data = Array(
                'soal' => $soal,
                'id_bahasa' => $id_bahasa,
                'jawaban' => $jawaban,
                'pilihan_a' => $a,
                'pilihan_b' => $b,
                'pilihan_c' => $c,
                'pilihan_d' => $d,
            );
            //echo $image->getError();
     
if ($db->insert('placement_test', $data)) {
    header("Location: /../&teacher/menu.php?menu=test&status=1");
    die();
} else {
    echo 'update failed: ' . $db->getLastError();
} 