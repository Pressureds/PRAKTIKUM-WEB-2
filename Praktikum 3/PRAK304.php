<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        $star = NULL;
        $img = "starimg.png";
        if (isset($_POST['star'])) {
            $star = $_POST['star'];
        }
        if (isset($_POST['tambah'])) {
            $star++;
        }
        if (isset($_POST['kurang'])) {
            $star--;
        }
    ?>
    <?php if (!empty($star)) {
            echo "Jumlah Bintang : $star "; ?>
            <br>
    <?php } ?>

    <?php for ($i = 0; $i < $star; $i++) {
            echo '<img src=' . $img . ' width=100px height=100px>';
        }
    ?>

    <?php if ($star == 0): ?>
            <form action="" method="POST">
                Jumlah Bintang <input type="number" name="star" required><br>
                <button type="submit">Submit</button><br>
            </form>

    <?php endif;
        if ($star != 0): ?>
            <form action="" method="POST">
                <button name="tambah">Tambah</button>
                <input type='hidden' name='star' value='<?= $star; ?>' />
                <button name="kurang">Kurang</button>
            </form>
    <?php endif; ?>
</body>
</html>
