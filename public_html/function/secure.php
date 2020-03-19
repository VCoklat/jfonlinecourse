<?php
function clean($string) {
   $string = str_replace('"', '', $string); // Replaces all spaces with hyphens.

   return preg_replace('/[^A-Za-z0-9 .\-_]/', '', $string); // Removes special chars.
}
function clean_email($string) {
   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

   return preg_replace('/[^A-Za-z0-9@.\-_]/', '', $string); // Removes special chars.
}

function bahasa($original){
    $converted = iconv('UTF-8', 'UTF-16LE', $original);

    for ($i = 0; $i < strlen($converted); $i += 2) {
            $codeUnit = ord($converted[$i]) + (ord($converted[$i+1]) << 8);
            
            if($codeUnit>127)
        {
          $bstr = $bstr.'&#'.$codeUnit.';';
        }
        else
        {
           $bstr = $bstr.chr($codeUnit);
        }
    }
    return $bstr;
}
?>