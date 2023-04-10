<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="" method="POST">
        <label for="input">Batas Bawah : </label>
        <input type="number" name="bawah"/><br>
        <label for="input">Batas Atas : </label>
        <input type="number" name="atas"/><br>
        <input type="submit" name="submit" value="Cetak"></br>
    </form></br>
</body>
<?php 
if (isset($_POST['submit'])) {
    $bawah = $_POST['bawah'];
    $atas = $_POST['atas'];
    $i = $bawah;
    do {
        if (($i + 7) % 5 == 0) {
            echo "<img src='starimg.png' width='15px' height='15px'>";
        } else {
            echo $i;
        }
        echo "&nbsp";
        $i++;
    } while ($i <= $atas);
}
?>
</html>
