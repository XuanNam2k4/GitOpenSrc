<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 1 : PHP</title>
    <style>
        table,
        tr,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <table>
        <?php
        echo "<tr>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<td>";
            echo "<b>Chuong" . $i . "</b>";
            echo "</td>";
        }
        echo "</tr>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 10; $j++) {
                $result = $i * $j;
                $color = ($result % 2 == 0) ? "red":"green";
                echo "<td style=' color: $color;'>";
                echo $i . "*" . $j . "=".$result;
                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>