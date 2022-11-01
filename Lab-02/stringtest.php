<?php
$oldtext = "Hello world";
$newtext = str_replace("world", "Phan Dac Hoa", $oldtext);

echo 'New text is: ' . $newtext . "\n";

for ($a = 0; $a < strlen($newtext); $a++) 
{
    if ($newtext[$a]!= ' ')
    echo $newtext[$a].' ';
}
?>