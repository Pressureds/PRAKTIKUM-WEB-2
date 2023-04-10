<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<form action="" method="GET">
        <label for="input">Jumlah Peserta : </label>
        <input type="text" name="peserta"/><br>
        <button type = "submit">Cetak</button>
    </form>
    <?php 
    if(isset($_GET['peserta'])){
        $input = ($_GET)['peserta'];
        $i = 1;
        while ($i <= $input) {
            if ($i % 2 == 0) {
                echo "<h2><font color='green'>Peserta Ke-$i</font></br>";
            } else {
                echo "<h2><font color='red'>Peserta Ke-$i</font></br>";
            }
        $i++;
        }
    }
    ?>    
</html>
