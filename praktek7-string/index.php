<?php

    // Single Quoted
    $data1 = 'Ini adalah String Single Quote';
    echo $data1.'<br>';

    // Double Quoted
    $data2 = "Ini adalah String Double Quote";
    echo $data2.'<br>';
    
    // Heredoc
    $data3 = <<<"str"
    Ini adalah String Menggunakan Heredoc
    str;
    echo $data3.'<br>';

    // Nowdoc
    $data4 = <<<'str'
    Ini adalah String Menggunakan Nowdoc
    str;
    echo $data4.'<br>';

    //Escape Caracter
    $data5 = "Ini adalah String \"Escape Caracter\" $data1";
    echo $data5.'<br>';

    //Escape Caracter singel quote
    $data5 = 'Ini adalah String "Escape Caracter" '. $data1;
    echo $data5.'<br>';
?>