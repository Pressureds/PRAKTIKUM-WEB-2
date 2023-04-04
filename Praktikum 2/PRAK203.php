<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="GET">
        <div class="mb-3">
            <label for="suhu" class="form-label">Nilai</label>
                <input type="text" id="suhu" name="input">
            <br>
            <label>Dari : </label>
            <br>
                <input type="radio" name="suhuAsal" id="suhuAsalCelcius" value="celcius">
            <label for="suhuAsalCelcius">Celcius</label>
            <br>
                <input type="radio" name="suhuAsal" id="suhuAsalFahrenheit" value="fahrenheit">
            <label for="suhuAsalFahrenheit">Fahrenheit</label>
            <br>
                <input type="radio" name="suhuAsal" id="suhuAsalReamur" value="reamur">
            <label for="suhuAsalReamur">Reamur</label>
            <br>
                <input type="radio" name="suhuAsal" id="suhuAsalKelvin" value="kelvin">
            <label for="suhuAsalKelvin">Kelvin</label>
            <br>
            <label>Ke :</label>
            <br>
                <input type="radio" name="suhuTujuan" id="suhuTujuanCelcius" value="celcius">
            <label for="suhuTujuanCelcius">Celcius</label>
            <br>
                <input type="radio" name="suhuTujuan" id="suhuTujuanFahrenheit" value="fahrenheit">
            <label for="suhuTujuanFahrenheit">Fahrenheit</label>
            <br>
                <input type="radio" name="suhuTujuan" id="suhuTujuanReamur" value="reamur">
            <label for="suhuTujuanReamur">Reamur</label>
            <br>
                <input type="radio" name="suhuTujuan" id="suhuTujuanKelvin" value="kelvin">
            <label for="suhuTujuanKelvin">Kelvin</label>
        </div>

        <div class="mb-3"> 
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
    <?php 
        if(isset($_GET['submit']) && isset($_GET['input']) && isset($_GET['suhuAsal']) && isset($_GET['suhuTujuan'])){
            $suhu = $_GET['input'];
            $suhuAsal = $_GET['suhuAsal'];
            $suhuTujuan = $_GET['suhuTujuan'];
            $satuan = strval($suhuTujuan);
            if($suhuAsal == "celcius" && $suhuTujuan == "fahrenheit"){
                $hasil = $suhu * (9/5) + 32;
            }else if($suhuAsal == "celcius" && $suhuTujuan == "reamur"){
                $hasil = $suhu * (4/5);
            }else if($suhuAsal == "celcius" && $suhuTujuan == "kelvin"){
                $hasil = $suhu + 273;
            }else if($suhuAsal == "fahrenheit" && $suhuTujuan == "celcius"){
                $hasil = $suhu * (5/9) - 32;
            }else if($suhuAsal == "fahrenheit" && $suhuTujuan == "reamur"){
                $hasil = $suhu * (4/9) - 32;
            }else if($suhuAsal == "fahrenheit" && $suhuTujuan == "kelvin"){
                $hasil = ($suhu - 32) * (5/9) + 273;
            }else if($suhuAsal == "reamur" && $suhuTujuan == "celcius"){
                $hasil = $suhu * (5/4);
            }else if($suhuAsal == "reamur" && $suhuTujuan == "fahrenheit"){
                $hasil = $suhu * (9/4) + 32;
            }else if($suhuAsal == "reamur" && $suhuTujuan == "kelvin"){
                $hasil = $suhu * (5/4) + 273;
            }else if($suhuAsal == "kelvin" && $suhuTujuan == "celcius"){
                $hasil = $suhu - 273;
            }else if($suhuAsal == "kelvin" && $suhuTujuan == "fahrenheit"){
                $hasil = ($suhu - 273) * (9/5) + 32;
            }else if($suhuAsal == "kelvin" && $suhuTujuan == "reamur"){
                $hasil = $suhu * (4/5) - 273;
            }else{
                $hasil = $suhu;
            }
            echo "<b>Hasil Konversi: $hasil &deg;</b>".strtoupper($suhuTujuan);
        }
    ?>
    </body>
</html>