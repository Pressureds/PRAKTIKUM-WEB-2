<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            td, table{
                border: 1px solid #000;
                padding : 5px;
                border-collapse : collapse;
            }
            th{
                border: 1px solid #000;
                padding : 5px;
                background-color: lightgrey;
            }
        </style>
    </head>
    <body>
    <table>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
                <th>Nilai Akhir</th>
                <th>Huruf</th>
            </tr>
        <?php
        $list = array(
            array("nama" => "Andi", "nim" => "2101001", "nilaiuts" => 87, "nilaiuas" => 65),
            array("nama" => "Budi", "nim" => "2101002", "nilaiuts" => 76, "nilaiuas" => 79),
            array("nama" => "Tono", "nim" => "2101003", "nilaiuts" => 50, "nilaiuas" => 41),
            array("nama" => "Jessica", "nim" => "2101004", "nilaiuts" => 60, "nilaiuas" => 75)
        );
        ?>
        
                <?php
                    echo "<tr>";
                for($a = 0; $a < count($list); $a++)
                {
                    echo "<td>".$list[$a]["nama"]."</td>";
                    echo "<td>".$list[$a]["nim"]."</td>";
                    echo "<td>".$list[$a]["nilaiuts"]."</td>";
                    echo "<td>".$list[$a]["nilaiuas"]."</td>";
                    echo "<td>".$list[$a]["nilaiakhir"] = (($list[$a]['nilaiuts'] * 0.4)+($list[$a]['nilaiuas'] * 0.6))."</td>";
                    if($list[$a]['nilaiakhir'] > 80)
                    {
                        echo "<td>".$list[$a]['huruf'] = 'A'."</td>";
                    }
                    elseif($list[$a]['nilaiakhir'] < 80 and $list[$a]['nilaiakhir'] >= 70)
                    {
                        echo "<td>".$list[$a]['huruf'] = 'B'."</td>";
                    }
                    elseif($list[$a]['nilaiakhir'] < 70 and $list[$a]['nilaiakhir'] >= 60)
                    {
                        echo "<td>".$list[$a]['huruf'] = 'C'."</td>";
                    }
                    elseif($list[$a]['nilaiakhir'] < 60 and $list[$a]['nilaiakhir'] >= 50)
                    {
                        echo "<td>".$list[$a]['huruf'] = 'D'."</td>";
                    }
                    else
                    {
                        echo "<td>".$list[$a]['huruf'] = 'E'."</td>";
                    }
                    echo "</tr>";
                }
                ?>
        </table>
</body>
</html>