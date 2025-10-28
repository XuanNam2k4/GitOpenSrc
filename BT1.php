<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài Tập 1 - SỐ TỰ NHIÊN</title>
</head>
<style>
     * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100vh;
        background: linear-gradient(to right, #a7f4a3, #75b2d8);
    }

    .container {
        width: fit-content;
        background-color: #ffffffff;
        padding: 30px;
        align-items: center;
    }
    .title{
        font-size: 20px;
        font-weight: bold; 
        color: red;
    }
    input[type=text]{
        padding: 3px;
        width:200px;
        font-size: 17px;
    }
    tr,td{
        padding: 7px 10px;
    }
    input[type=submit]{
        padding: 5px;
        font-size: 15px;
        background-color: rgb(248, 248, 194);
        border: 1px solid;
    }
</style>
<body>
  <div class="container">
    <form action="" method="post">
        <table>
            <tr>
                <td colspan="3" style="text-align: center;" class="title">NHẬP SỐ TỰ NHIÊN N</td>
            </tr>
            <tr>
                <td style="font-size: 17px;">Nhập n:</td>
                <td><input type="text" name="n" value="<?php echo isset($_POST["n"]) ? $_POST["n"]:""; ?>"></td>
                  <td><input type="submit" name="btn" value="Thực hiện"></td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_POST['btn'])){
            $n = $_POST['n'];

            if(!is_numeric($n) || $n <= 0){
                echo "<b>Hãy nhập số nguyên hợp lệ!</b>";
            } else {
                $mang = [];

                for($i=0; $i<$n; $i++){
                    $mang[] = rand(-50, 50); 
                }
                  
                echo "<b>Mảng phát sinh ngẫu nhiên:</b>" . implode(", ", $mang) . "<br>";

                $sochan = 0;
                foreach($mang as $value){
                    if($value % 2 == 0)
                         $sochan++;
                }
                echo "<b>Số lượng phần tử có giá trị chẵn:</b> $sochan <br>";

                $nhohon = 0;
                foreach($mang as $value){
                    if($value < 100) $nhohon++;
                }
                echo "<b>Số lượng phần tử nhỏ hơn 100:</b> $nhohon<br>";

                $tongam = 0;
                foreach($mang as $value){
                    if($value < 0) $tongam += $value;
                }
                echo "<b>Tổng các phần tử âm:</b> $tongam <br>";
                 echo "<b>In ra vị trí các phẩn tử có giá trị bằng 0: </b> <br>" ;
                $vitri0 = [];
                $g = 0;
                foreach($mang as $index => $value){
                    if($value == 0) $vitri0[$g++] = $index;
                }
                if(count($vitri0) > 0){
                    echo "<b>Vị trí các phần tử bằng 0: </b>" . implode(", ", $vitri0) . "<br>";
                } else {
                    echo "Không có <br>";
                }

                sort($mang);
                echo "<b>Mảng sau khi sắp xếp tăng dần:</b> " . implode(", ", $mang) . "<br>";
            }
        }
    ?>
  </div>
</body>
</html>
