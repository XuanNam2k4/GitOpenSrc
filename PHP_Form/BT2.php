<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DT - CV Hình Tròn</title>
</head>
<style>
    .title{
        width: 100%;
         padding: 10px;
        text-align: center;
        font-size: 17px;
        font-weight: bold;
        background-color:#FFCC99;
         color: #cc000c;
        font-family: Verdana, Geneva, Tahoma, sans-serif;

    }
     body {
            background-color: lightyellow;
            
        }
     .container {
            left: 50%;
            top: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
        }
     form{
        background-color: #FFF2CC;
    }
    table{
        width: 400px;
          border-collapse: collapse;
    }
    .btn-button{
        padding: 3px 10px;
        margin-top: 7px;
    }
    tr,td{
        width:20%;
        padding: 7px;
    }
    input[type="text"]
    {
        width: 200px;
        height: 30px;
        border: 1px solid #ccc;
        padding-left: 10px;
        font-size: 15px;
    }
    .btn-button{
        padding: 5px 10px;
        margin-right: 70px;
        background-color: rgb(220, 220, 220);
        border: 1px solid;
    }
    .input1{
      background-color: #fef4f5;  
    }
     .input2{
      background-color: #fef4f5;  
    }
</style>
<body>
    <?php
        define("PI",3.14);
        if(isset($_POST['submit'])){
            $r = $_POST['bankinh'];
            $cv = $_POST['chuvi'];
            $dt = $_POST['dientich'];
            if(isset($r) and is_numeric($r) and $r > 0){
                $dt = round(PI * ($r *$r));
                $cv = round(PI * 2 * $r);
            }else{
                $dt = $cv = "thông số không hợp lệ";
            }
        }
    ?>
    <div class="container">
        <form action="BT2.php" method="post">
        <table>
            <tr>
                <td colspan="2" class="title">DIỆN TÍCH VÀ CHU VI HÌNH TRÒN</td>              
            </tr>
            <tr>
            <td>Bán kính:</td>
            <td><input type="text" name="bankinh"  value="<?php echo isset($_POST['bankinh']) ? $_POST['bankinh'] :""; ?>"></td>
            </tr>
            <tr>
                <td>Diện tích:</td>
                <td><input type="text" name="dientich" class="input1" value="<?php if(isset($dt)) echo $dt; ?>"></td>
            </tr>
            <tr>
                <td>Chu vi:</td>
                <td><input type="text" name="chuvi" class="input2"  value="<?php if(isset($cv)) echo $cv; ?>"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                <input type="submit" name="submit" value="Tính" class="btn-button">
            </td>       
            </tr>
        </table>
    </form>
    </div>
</body>
</html>
