<?php

    //set kelereng awal
    $kelerengBot  = 10;
    $kelerengUser = 10;

    //Deklasari
    $namaUser;
    $tebakanUser;
    $taruhanUser;
    $taruhanKelereng;
    $tebakanBot;

echo "\n";
    echo "Selamat Datang di SquidGame Kelereng \n"; 

    //Get userName
    echo  "Masukan nama anda : ";
    $namaUser  = trim(fgets(STDIN));
    echo  "\n";

    //Check if user fill name or not
    if($namaUser == TRUE){
        
        echo "Hai ".$namaUser." selamat bermain!";
        echo "\n";
        echo "Kelereng Bot  : ".$kelerengBot;
        echo "\n";
        echo "Kelereng Kamu : ".$kelerengUser;
        echo "\n";
        
        do{
            echo "\n";

            //Get Tebakan User
            echo "Masukan Tebakan (Ganjil/Genap) : ";
            $tebakanUser = strtolower(trim(fgets(STDIN)));
            
            //Get Taruhan User
            echo "Masukan Taruhan 1 - 10         : ";
            $taruhanUser = trim(fgets(STDIN));
            echo "\n";

            //Get Rand number for bot
            $taruhanKelereng = rand(1,$kelerengBot);
            
            //cek ganjil genap
            if($taruhanKelereng % 2 == 0 ){
                $tebakanBot = "genap";
            }else{
                $tebakanBot = "ganjil";
            }
?>
