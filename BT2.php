<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài Tập 2 - DÃY SỐ</title>
</head>
<style>
    *{
        padding: 0px;
        margin: 0px;
        box-sizing: border-box;
    }
    body{
        font-size: 17px;
        background-color:#e1fca2;
    }
    .container{
         display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }
     tr,td{
        width:50%;
       padding: 13px;
    }
    table{
         background-color: #faffdf;
         border-collapse: collapse;
    }
    .title{
    background-color :#fff41e;
    font-size: 20px;
    font-weight: bold;
    text-align: center;
    color: rgb(86, 86, 86);
    padding: 15px;
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
        background-color: #e5f56a;
        cursor: pointer;
        border: 1px solid;
  }
  .input1{
    background-color: #d5ffc0;
    color:red !important;
    border: 1px solid black !important;
    width:50% !important;
  }
</style>
<body>
    <?php
        if(isset($_POST["btn"])){
            $num = $_POST["number"];
            $mang = explode(",",$num);
            $ketqua = 0;
            $count = 0;
            foreach($mang as $key => $value){
                if(!is_numeric($mang[$key])){
                    $count++;
                }
            }
             if($count == 0){   
                 $ketqua = array_sum($mang);
        }else{
                $ketqua = "Gía trị không hợp lệ";
            }
        }
    ?>
   <div class="container">
     <form action="BT2.php" method="post">
        <table>
            <tr>
                <td colspan="3" class="title">NHẬP VÀ TÍNH TRÊN DÃY SỐ</td>
            </tr>
            <tr>
                <td>Nhập dãy số:</td>
                <td><input type="text" name="number" class="input2" value="<?php echo isset($_POST["number"]) ? $_POST["number"] : ""; ?>"></td>
                 <td style="color: red; font-weight: bold;">(*)</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btn" value="Tổng dãy số"></td>
            </tr>
            <tr>
                <td>Tổng dãy số:</td>
                <td><input type="text" class="input1" name="ketqua" value="<?php echo isset($ketqua) ? $ketqua : ""; ?>"></td>
            </tr>
            <tr>
                <td align="center" colspan="2" style="padding-left: 50px;"><span style="color: red; padding-right: 5px;">(*)</span>Các số được nhập cách nhau bằng dấu ","</td>
            </tr>
        </table>
    </form>
   </div>
</html>