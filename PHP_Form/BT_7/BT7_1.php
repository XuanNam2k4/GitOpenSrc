<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BT7</title>
</head>
<style>
    *{
        padding: 0px;
        margin: 0px;
        box-sizing: border-box;
    }
    table{
        width: 500px;
        padding: 20px;
        background-color: azure;
    }
    body{
          display: flex;
        justify-content: center;
        align-items: center;
        width:100%;
        height: 100vh;
    }
   .container{
    font-size: 20px;
   }
   .tr,td{
    padding: 7px;
   }
   .btn-button{
    padding: 3px 10px;
   }
   input[type=text]{
            padding: 3px;
            width: 270px;
            font-size: 15px;
        }
        input[type=submit]{
            padding:5px 20px;
            margin-right: 60px;
            background-color: rgb(244, 244, 205);
            border: 1px solid;
        }
 </style>
<body>
    <div class="container">
     <table>
        <form action="BT7_2.php" method="post">
            <tr>
                <td colspan="2" style="text-align: center; color:blue; font-weight: bold; padding: 10px;">
                    PHÉP TÍNH TRÊN HAI SỐ
                </td>
            </tr> 
        <tr>
            <td style="color:brown;">Chọn phép tính:</td>
            <td style="color:red;">
                <input type="radio" name="oval" value="Cộng" checked> Cộng
                 <input type="radio" name="oval" value="Trừ"> Trừ
                  <input type="radio" name="oval" value="Nhân"> Nhân
                   <input type="radio" name="oval" value="Chia"> Chia
            </td>
        </tr>
        <tr>
            <td style="color:blue;">Số thứ nhất:</td>
            <td><input type="text" name="number1" value="<?php echo isset($_POST["number1"]) ? $_POST["number1"] : "";?>"></td>
        </tr>
        <tr>
            <td style="color:blue;">Số thứ nhì:</td>
            <td><input type="text" name="number2" value="<?php echo isset($_POST["number2"]) ? $_POST["number2"] : "";?>"></td>
        </tr>
        <tr>
            <td  colspan="2" style="text-align:center;"><input type="submit" name="btn" value="Tính"></td>
        </tr>
   </form>
     </table> 
  </div>
</body>
</html>
