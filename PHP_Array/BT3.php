<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài Tập 3 - XỬ LÝ MẢNG</title>
</head>
<style>
    *{
        padding: 0px;
        margin: 0px;
        box-sizing: border-box;
    }
    body{
        font-size: 17px;
        background-color:#b0faf0;
    }
    .container{
         display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }
     tr,td{
        width:30%;
       padding: 10px;
    }
    table{
        width: 600px;
         border-collapse: collapse;
         background-color: white;
    }
    .title{
    background-color : #769af5;
    font-size: 25px;
    font-weight: bold;
    text-align: center;
    color: white;
    }
      input[type=text]{  
        width:300px;
    padding: 3px;
    font-size: 15px;
    border:1px solid ;
 }
  input[type=submit]{
     width: 50%;
        padding-block: 5px;
        padding-inline: 5px;
        background-color: #fdf7b8;
        border: 1px solid;
  }
</style>
<body>
    <?php
    if(isset($_POST["btn"])){
             $n = $_POST["n"];
               function taomang($n){
                $mang = [];
                for($i = 0; $i < $n; $i++){
                     $mang[$i] = rand(0, 20);
                }
                return $mang;
             }
    function xuatmang($mang){
        return implode(" ",$mang);
    }
   function timmax($mang){
    $max = $mang[0]; 
    foreach($mang as $value){
        if($value > $max){
            $max = $value;
        }
    }
    return $max;
}

function timmin($mang){
    $min = $mang[0]; 
    foreach($mang as $value){
        if($value < $min){
            $min = $value;
        }
    }
    return $min;
}
    function tinhtong($mang){
        $sum = 0;
        foreach($mang as $value){
            $sum = $sum + $value;
        }
        return $sum;
    }
        if(filter_var($n, FILTER_VALIDATE_INT)&& $n > 0){
            $mang = taomang($n);
            $chuoimang =  xuatmang($mang);
            $tong = tinhtong($mang);
            $max = timmax($mang);
            $min = timmin($mang);
        }else{
            $chuoimang = "Không hợp lệ.(Yêu cầu nhập n > 0)";
        }
        }
    ?>
    <div class="container">
        <form action="BT3.php" method="post">
        <table>
            <tr>
                <td colspan="2" class="title">PHÁT SINH MẢNG VÀ TÍNH TOÁN</td>
            </tr>
            <tr>
                <td >Nhập số phần tử:</td>
                <td><input type="text" style="width:70%;"  name="n" value="<?php echo isset($_POST["n"]) ? $_POST["n"] : "";?>"></td>
            </tr>
            <tr style="margin-top: 20px;">
                <td ></td>
                <td ><input type="submit" name="btn"   value="Phát sinh và tính toán"></td>
            </tr>
            <tr>
                <td>Mảng:</td>
                <td><input type="text" name="Mang" style="background-color: #facacc;" value="<?php echo isset($chuoimang)? $chuoimang :""; ?>"></td>
            </tr>
            <tr>
                <td>GTLN (MAX) trong mảng:</td>
                <td><input type="text" name="Max" style="width:40%; background-color: #facacc;" value ="<?php echo isset($max) ? $max : ""; ?>"></td>
            </tr>
            <tr>
                <td>GTNN (MIN) trong mảng:</td>
                <td><input type="text" name="Min" style="width:40%; background-color: #facacc;" value="<?php echo isset($min) ? $min : ""; ?>" ></td>
            </tr>
            <tr>
                <td>Tổng mảng:</td>
                <td><input type="text" name="tong" style="width:40%; background-color: #facacc;" value="<?php echo isset($tong) ? $tong : ""; ?>"></td>
            </tr>
             <tr style="background-color: white;">
                    <td colspan="2" align="center" style="padding-right: 27px;">(<span style="color: red;">Ghi chú:</span>Các phần tử trong mảng sẽ có giá trị từ 0 đến 20) </td>
                </tr>
        </table>
    </form>
    </div>
</body>
</html>
