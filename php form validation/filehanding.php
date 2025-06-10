<?php
// touch('text.txt')
// echo realpath('text.txt');
// copy('test.txt' ,"abc.txt")
// unlink('test.txt')
// mkdir("test")
// mkdir('test.txt')
// rmdir('test.txt')


// $f = fopen("test.txt","a")
// $f = fopen("test.txt","r")
// furits($p,"Arti shrma");
// false($f);
// $f = fopen("test.txt","r");



// File open karna (read mode)
$filename = "text.txt";
if (file_exists($filename)) {
    $f = fopen($filename, "r");
    echo "File Size: " . filesize($filename) . " bytes<br>";

    // File read karna line by line
    while (!feof($f)) {
        echo fgets($f) . "<br>";
    }
    fclose($f);
    echo "File exists: yes";
} else {
    echo "File exists: no";
}
?>
