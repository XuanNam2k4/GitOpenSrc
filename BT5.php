<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài Tập 5 - TỪ THAY THẾ </title>
</head>
<style>
    *{
        padding: 0px;
        margin: 0px;
        box-sizing: border-box;
    }
    body{
        font-size: 17px;
        background-color:#ffa8a7;
    }
    .container{
         display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }
    tr,td{
        padding: 10px;
    }
    table{
        width: 600px;
         background-color: #fed7f3;
         border-collapse: collapse;
    }
    .title{
    background-color :#9b0d73;
    font-size: 30px;
    font-weight: bold;
    text-align: center;
    color: white;
    }
    form{
        background-color: white;
    }
    .input1{
        width: 300px;
    }
    .input4,.input5{
        width: 300px;
       background-color:  #ffa4a3;
    }
    input[type=text]{  
    padding: 3px;
    font-size: 15px;
    border:1px solid ;
 }
  input[type=submit]{
     width: 20%;
        padding-block: 5px;
        padding-inline: 5px;
        background-color: #fdffca;
        cursor: pointer;
        border: 1px solid;
  }
</style>
<body>
    <?php
        if(isset($_POST["btn"])){
            $mang = explode(",",$_POST["new"]);
            $old  = $_POST["oldnew"];
            $newchange  = $_POST["change"];

            function Checkmang($mang){
            $dem = 0;
            for($i = 0; $i < count($mang); $i++){
                if(!is_numeric($mang[$i])){
                    $dem++;
                }
            }
            if($dem > 0) return 0;
            else return 1;
        }
        function CheckN($old){
            if(is_numeric($old)) return 1;
            else return 0;
        }
             function XuatMang($mang){
            return implode(" ",$mang);
        }
        function ThayThe($mang,$old,$newchange){
            $arr  = [];
            foreach($mang as $value){
                if($old  == $value){
                    $arr[]  = $newchange;
                }else{
                    $arr[]  = $value;
                }
            }
            return implode(" ",$arr);
        }
             if (Checkmang($mang) and count($mang) > 0 and CheckN($old) and CheckN($newchange)) {
        $inmang  = XuatMang($mang);
            $ketqua  = ThayThe($mang,$old,$newchange);
    } else {
        $ketqua = "Mảng số hoặc số nhập vào không hợp lệ";
    }
        }
    ?>
   <div class="container">
     <form action="BT5.php" method="post">
        <table>
            <tr>
                <td class="title" colspan="2">THAY THẾ</td>
            </tr>
            <tr>
                <td>Nhập các phần tử:</td>
                <td><input type="text" class="input1" name="new" value="<?php echo isset($_POST["new"]) ? $_POST["new"] : ""; ?>"></td>
            </tr>
            <tr>
                <td>Gía trị cần thay thế:</td>
                <td><input type="text" class="input2" name="oldnew" value="<?php echo isset($_POST["oldnew"]) ? $_POST["oldnew"] : ""; ?>"></td>
            </tr>
            <tr>
                <td>Gía trị thay thế:</td>
                <td><input type="text" class="input3" name="change" value="<?php echo isset($_POST["change"]) ? $_POST["change"] : ""; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btn" value="Thay thế"></td>
            </tr>
                <tr style="background-color: rgb(249, 249, 249);">
                    <td>Mảng cũ:</td>
                    <td><input type="text" class="input4" name="mangcu" value="<?php echo isset($inmang) ? $inmang : ""; ?>"></td>
                </tr>
                <tr style="background-color: rgb(249, 249, 249);">
                    <td>Mảng sau khi thay thế:</td>
                    <td><input type="text" class="input5" name="thaythe" value="<?php echo isset($ketqua) ? $ketqua : ""; ?>"></td>
                </tr>
                  <tr style="background-color: rgb(249, 249, 249);">
                    <td colspan="2" align="center">(<span style="color: red; font-weight: bold;"> Ghi chú:</span>Các phần tử trong mảng sẽ cách nhau bằng dấu ",") </td>
                </tr>
        </table>
    </form>
   </div>
</body>
</html>