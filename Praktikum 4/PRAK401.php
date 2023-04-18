<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table, tr, td{
            border: solid 1px black;
            text-align: center;
            border-collapse: collapse;
        }
    </style>
</head>
<body>

     <form action="" method="post">
        <label>Panjang : </label>
        <input type="text" name="panjang"><br>
        <label>Lebar : </label>
        <input type="text" name="lebar"><br>
        <label>Nilai : </label>
        <input type="text" name="nilai"><br>
        <input type="submit" name="cetak" value="cetak">
    </form>

    <?php
    $panjang = NULL;
    $lebar = NULL;
    $nilai = NULL;

    if (isset($_POST["cetak"])){
    $panjang = $_POST['panjang'];
                $lebar = $_POST['lebar'];
                $input = $_POST['nilai'];
                $nilai = explode(" ", $input);
                $k = 0;
                if($panjang*$lebar == count($nilai))
                {
                for($i = 0; $i < $panjang; $i++)
                {
                    echo "<table>";
                    echo "<tr>";
                    for($j = 0; $j < $lebar; $j++)
                    {
                        echo "<td>".$nilai[$k]."</td>";
                        $k++;
                    }
                    echo "</tr>";
                    echo "</table>";
                }
                }
                else
                {
                    echo "Panjang nilai tidak dengan ukuran matriks";
                }
            }
            ?>
</body>
</html>