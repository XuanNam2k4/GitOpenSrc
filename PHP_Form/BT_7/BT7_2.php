<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BT số 7 - Phép tính</title>
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
</style>
<body>
    <?php
 if (isset($_POST["btn"])) {
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    $oval = $_POST["oval"];
    function phepcong($a, $b)
    {
        return $a + $b;
    }

    function pheptru($a, $b)
    {
        return $a - $b;
    }

    function phepnhan($a, $b)
    {
        return $a * $b;
    }

    function phepchia($a, $b)
    {
        return $a / $b;
    }

    if (is_numeric($number1) and is_numeric($number2) and $number2 != 0) {
        switch ($oval) {
            case "Cộng":
                $result = phepcong($number1, $number2);
                break;
            case "Trừ":
                $result =  pheptru($number1, $number2);
                break;
            case "Nhân":
                $result =  phepnhan($number1, $number2);
                break;
               case "Chia":
                if ($number2 == 0) {
                    $result = "Không thể chia cho 0!";
                } else {
                    $result = round(phepchia($number1, $number2), 2);
                }
                break;
        }
    } else {
        $result = "Số nhập hoặc phép tính không hợp lệ";
        echo "<script>window.history.back();</script>";
        exit();
    }
}
?>
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
            <td  style="color: red; font-size: 20px;">
              <?php echo isset($oval) ? $oval : ""; ?>
            </td>
        </tr>
        <tr>
            <td style="color:blue;">Số thứ nhất:</td>
            <td><input type="text" name="number1" value="<?php echo isset($_POST["number1"]) ? $_POST["number1"] : " ";?>"></td>
        </tr>
        <tr>
            <td style="color:blue;">Số thứ nhì:</td>
            <td><input type="text" name="number2" value="<?php echo isset($_POST["number2"]) ? $_POST["number2"] : " ";?>"></td>
        </tr>
        <tr>
            <td style="color:blue;">Kết quả:</td>
            <td><input type="text" name="result" value="<?php echo isset($result) ? $result : ""?>"></td>
        </tr>
          <tr>
            <td colspan="2" style=" margin-left: 20px; text-align:center; font-style: italic;"  align="center"><a href="javascript:window.history.back(-1);">Trở về trang trước</a></td>
                </tr>
   </form>
     </table> 
  </div>
</body>
</html>
