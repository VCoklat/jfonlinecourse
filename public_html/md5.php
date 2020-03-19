<?php
//echo md5("12345");}

$original = 'いぬやさ dibaca?';
$converted = iconv('UTF-8', 'UTF-16LE', $original);
for ($i = 0; $i < strlen($converted); $i += 2) {
        $codeUnit = ord($converted[$i]) + (ord($converted[$i+1]) << 8);
        //echo $codeUnit. PHP_EOL;
        if($codeUnit>127)
    {
      $bstr = $bstr.'&#'.$codeUnit.';';
    }
    else
    {
      $bstr = $bstr.chr($codeUnit);
    }
}
   echo $bstr;
?>