<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
    <form action="" method="GET">
        <label for="nilai">Nilai: </label>
        <input type="text" name="nilai"> <br>
        <button type="submit" name="submit" >konversi</button>       
    </form>
    <br>
    <?php
        if(isset($_GET["submit"]) && isset($_GET["nilai"])) {
            $nilai = $_GET["nilai"];
            $nilaiOutput = "";

            if($nilai == 0) {
                $nilaiOutput = "Nol";
                echo "<h1> Hasil: " .$nilaiOutput. "</h1>";
            } elseif($nilai > 0 && $nilai < 10) {
                $nilaiOutput = "Satuan";
                echo "<h1> Hasil: " .$nilaiOutput. "</h1>";
            } elseif($nilai > 10 && $nilai < 20) {
                $nilaiOutput = "Belasan". "</h1>";
                echo "<h1> Hasil: " .$nilaiOutput;
            } elseif($nilai >= 20 && $nilai < 100) {
                $nilaiOutput = "Puluhan". "</h1>";
                echo "<h1> Hasil: " .$nilaiOutput;
            } elseif($nilai >= 100 && $nilai < 1000) {
                $nilaiOutput = "Ratusan". "</h1>";
                echo "<h1> Hasil: " .$nilaiOutput;
            } else {
                $nilaiOutput = "Anda Menginput Melebihi Limit Bilangan";
                echo "<h1> Hasil: " .$nilaiOutput. "</h1>";
            }
        }
    ?>
</html>