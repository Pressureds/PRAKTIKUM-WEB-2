<?php
    //Konstanta untuk nilai tetap
    $tinggiPrisma = 5.4;
    $tinggiSegitiga = 12;
    $panjangAlas = 7.9;

    //Rumus menghitung luas alas prisma 
    $luasAlas = 1/2 * $panjangAlas * $tinggiSegitiga;
    
    //Rumus menghitung volume prisma alas segitiga
    $volPrisma = $luasAlas * $tinggiPrisma;

    //Untuk mencetak output dengan 3 desimal dibelakang koma
    echo number_format($volPrisma, 3)." m3";
    ?>