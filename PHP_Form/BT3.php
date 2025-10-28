<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập - Tiền Điện</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        height: 500px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgb(243, 231, 215);
    }
    .title{
        padding: 10px;
        text-align: center;
        font-size: 20px;
        font-weight: bold;
        background-color: rgb(228, 178, 111);
        color: rgb(83, 62, 10); 
    }
    td,tr{
        width:10%;
        padding: 7px;
    }
    table{
        width: 500px;
        background-color:lemonchiffon ;
        color:black;
        border-collapse: collapse;
    }
    .btn-button{
        padding: 5px 10px;
       margin-right: 80px;
       border: 1px solid;
        background-color: gainsboro;
    }
    input[type="text"]{
            padding: 5px;
            width: 200px;
            font-size: 15px;
        }
         .input1{
      background-color: #fef4f5;  
      border: 1px solid;
    }
</style>

<body>
    <?php
    if (isset($_POST['btn'])) {
        $old = $_POST['oldNum'];
        $new = $_POST['newNum'];
        $price = $_POST['Price'];
        $money = $_POST['Money'];
        if (is_numeric($old) and is_numeric($new) and $old > 0 and $new > 0) {
            $money = ($new - $old) * $price;
        } else {
            $money = "thông số không hợp lệ";
        }
    }
    ?>
   <div class="container">
     <form action="BT3.php" method="post">
        <table>
            <tr>
                <td colspan="2" class="title">THANH TOÁN TIỀN ĐIỆN</td>
            </tr>
            <tr>
                <td>Tên chủ hộ:</td>
                <td><input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ""; ?>">
                </td>
            </tr>
            <tr>
                <td>Chỉ số cũ:</td>
                <td><input type="text" name="oldNum"
                        value="<?php echo isset($_POST['oldNum']) ? $_POST['oldNum'] : ""; ?>">  (Kw)</td>
            </tr>
            <tr>
                <td>Chỉ số mới:</td>
                <td><input type="text" name="newNum"
                        value="<?php echo isset($_POST['newNum']) ? $_POST['newNum'] : ""; ?>">  (Kw)</td>
            </tr>
            <tr>
                <td>Đơn giá:</td>
                <td><input type="text" name="Price"
                        value="<?php echo isset($_POST['Price']) ? $_POST['Price'] : "2000"; ?>"> (VNĐ)</td>
            </tr>
            <tr>
                <td>Số tiền thanh toán:</td>
                <td><input type="text" name="Money" class="input1" value="<?php echo isset($money) ? $money : ""; ?>"> (VNĐ)</td>
            </tr>
            <tr style="text-align:center;">
                <td colspan="2"><button class="btn-button" type="submit" name="btn">Tính</button></td>
            </tr>
        </table>
    </form>
   </div>
</body>

</html>
