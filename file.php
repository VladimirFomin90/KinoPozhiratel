<?php 

// readfile('test.txt');

// $myText = "24.04.22 ливерпуль только что обыграл эвертон 2-0";

// $file = fopen("test.txt", "w+");

// fwrite($file, $myText);

// fclose($file);

// readfile('test.txt');


// $handle = fopen("test.txt", "r");

// if($handle) {
//     while (($line = fgets($handle)) !== false) {
//     echo $line;
//     }
//     fclose($handle);
// }

// $file = fopen("test2.txt", "w");
// fclose($file);

$file = file_get_contents('http://yandex.kz');
echo $file



?>