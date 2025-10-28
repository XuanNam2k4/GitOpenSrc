<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài Tập 7 - TÍNH NĂM ÂM LỊCH</title>
</head>
<style>
    *{
        padding: 0px;
        margin: 0px;
        box-sizing: border-box;
    }
    body{
        font-size: 20px;
        background-color:  rgb(255, 251, 245)
    }
    .title{
        text-align: center;
        font-size: 30px;
        font-weight: bold;
        background-color: rgb(118, 118, 255);
        color: white;
    }
    tr,td{
        padding: 7px;
    }
    .container{
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }
    table{
        background-color: rgb(196, 247, 247);
        border-collapse: collapse;
    }
    input[type="submit"] {
        background-color:  rgb(255, 251, 217);
        padding:  5px;
        border: 1px solid black;
        font-size: 17px;
        color: red;
    }
    .input1{
        border: 1px solid black;
        padding: 5px;
        font-size: 17px;
    }
    .input2{
        background-color: rgb(255, 251, 217);
        border: 1px solid black;
        padding: 5px;
        font-size: 17px;
        color: red;
    }
</style>
<body>
    <div class="container">
        <?php
         $hinh_anh = "";
        if(isset($_POST["btn"])){
             $dl = ($_POST["duonglich"]);
             $mang_can = array("Quý","Giáp","Ất","Bính","Đinh","Mậu","Kỷ","Canh","Tân","Nhâm");
            $mang_chi = array("Hợi","Tý","Sửu","Dần","Mão","Thìn","Tỵ","Ngọ","Mùi","Thân","Dậu","Tuất");
            $mang_hinh = array("hoi.jpg","chuot.jpg","suu.jpg","dan.jpg","meo.jpg","thin.jpg","ty.jpg","ngo.jpg","mui.jpg","than.jpg","dau.jpg","tuat.jpg");
             if((is_numeric($dl)) && $dl > 0){                      
            $nam = $dl - 3;
            $can = $nam % 10;
            $chi = $nam % 12;
            $nam_al =$mang_can[$can];
            $nam_al = $nam_al. " ". $mang_chi[$chi];
            $hinh = $mang_hinh[$chi];
            $hinh_anh = "<img src='images/$hinh' alt='' width='200px' height='200px'>";
             } else{
                 $nam_al = "Thông số không hợp lệ";
             }       
        }
    ?>
    <form action="BT7.php" method="post">
        <table>
            <tr>
                <td class="title" colspan="3">TÍNH NĂM ÂM LỊCH</td>
            </tr>
            <tr>
                <td style="text-align: center;">Năm dương lịch</td>
                <td></td>
                  <td style="text-align: center;">Năm âm lịch</td>
            </tr>
            <tr>
                <td><input type="text" class="input1" name="duonglich" value="<?php echo (isset($_POST["duonglich"])) ? $_POST["duonglich"] : ""; ?>"></td>
                <td style="text-align: center;"><input type="submit" name="btn" value="=>"></td>
                  <td><input type="text" class="input2" name="amlich" value="<?php echo isset($nam_al) ? $nam_al: ""; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><?php echo $hinh_anh; ?></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>
