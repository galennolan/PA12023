<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator di PHP</title>
</head>
<body>
    <?php
        //Deklarasi Variabel
        $nilai1 = 200;
        $nilai2 = 40;
        $teks1 = "LARAVEL";
        $teks2 = "laravel";


        //operator aritmatika + - * / % ** 
        $hasil = $nilai1 * $nilai2;
        echo "Hasil perkalian dari $nilai1 x $nilai2 adalah $hasil <br>";

        //Operator Perbandingan == != > <  >= <=  Boolean (True(1) dan False (0))
        $banding = $nilai1 > $nilai2;
        echo "Hasil dari perbandingan dua variabel adalah $banding<br>";

        //operator logika AND OR XOR !
        $logika = !($teks1 == $teks2);
        echo " !($teks1 == $teks2) adalah $logika ";

    ?>
</body>
</html>