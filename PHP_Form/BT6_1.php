<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phép tính</title>
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
        <form action="BT6_2.php" method="post">
          <table>
            <tr>
                <td colspan="2" style="text-align: center; color:blue; font-weight: bold; padding: 10px;">
                    PHÉP TÍNH TRÊN HAI SỐ
                </td>
            </tr>
            <tr>
                <td style="color:brown;">Chọn phép tính:</td>
                <td style="color:red;">
                    <input type="radio" name="chon" value="cộng" checked> Cộng
                    <input type="radio" name="chon" value="trừ"> Trừ
                    <input type="radio" name="chon" value="nhân"> Nhân
                    <input type="radio" name="chon" value="chia"> Chia
                </td>
            </tr>
            <tr>
                <td style="color:blue;">Số thứ nhất:</td>
                <td><input type="text" name="sothunhat" value="<?php echo isset($_POST["sothunhat"]) ? $_POST["sothunhat"] : "";?>"></td>
            </tr>
            <tr>
                <td style="color:blue;">Số thứ nhì:</td>
                <td><input type="text" name="sothunhi" value="<?php echo isset($_POST["sothunhi"]) ? $_POST["sothunhi"] : "";?>"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <input type="submit" name="btn" class="btn-button" value="Tính">
                </td>
            </tr>
        </table> 
   </form>
  </div>
</body>
</html>
