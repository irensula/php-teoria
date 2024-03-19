<?php
          
    $text_1 = "Text_1";
    $text_2 = "Text_2";

    $file = fopen("memo.txt", "w");
    fwrite($file, $text_1);
    fclose($file);

    $file = fopen("memo.txt", "w");
    fwrite($file, $text_2);
    fclose($file);

    $file = fopen("memo.txt", "a");
    fwrite($file, $text_1);
    fclose($file);

    $file = fopen("memo.txt", "r") or die("Unable to open file!");
    $readFile = fread($file, filesize("memo.txt"));
    echo $readFile;
    
    // create file in specific  folder
    $text_3 = "Text_3";
    $createfile = fopen('./temp/'.'new.txt', 'w');
    fwrite($createfile, $text_3);
    fclose($file);
?>