<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <form action=" " method="POST"> 
            <!-- Form input data nama -->
            <label for="">Nama: 1</label>
                <input type="text" name="nama1">
                <br>
            <label for="">Nama: 2</label>
                <input type="text" name="nama2">
                <br>
            <label for="">Nama: 3</label>
                <input type="text" name="nama3">
                <br>
            <button type="submit" name="submit">Urutkan</button>
        </form>
        
        <?php
        if (isset ($_POST['submit'])) {
            //Untuk menerima data nama
            $nama1 = $_POST['nama1'];
            $nama2 = $_POST['nama2'];
            $nama3 = $_POST['nama3'];

            //Untuk pengurutan kondisional data nama
            if ($nama1 < $nama2 && $nama1 < $nama3) {       
                if ($nama2 < $nama3) {
                    echo "$nama1<br>";
                    echo "$nama2<br>";
                    echo "$nama3<br>";
                } else {
                    echo "$nama1<br>";
                    echo "$nama3<br>";
                    echo "$nama2<br>";
                }
            } else if ($nama2 < $nama1 && $nama2 < $nama3) {
                if ($nama1 < $nama3) {
                    echo "$nama2<br>";
                    echo "$nama1<br>";
                    echo "$nama3<br>";
                } else {
                    echo "$nama2<br>";
                    echo "$nama3<br>";
                    echo "$nama1<br>";
                }
            } else {
                if ($nama1 < $nama2) {
                    echo "$nama3<br>";
                    echo "$nama1<br>";
                    echo "$nama2<br>";
                } else {
                    echo "$nama3<br>";
                    echo "$nama2<br>";
                    echo "$nama1<br>";
                }
            }            
        }
        ?>
    </body>
</html>