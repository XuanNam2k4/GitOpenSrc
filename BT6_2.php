<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết Qủa Phép Tính</title>
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
function cong($a,$b){return $a + $b;}
function tru($a,$b){  return $a - $b;}
function nhan($a,$b){return $a * $b;}
function chia($a,$b){ return round($a / $b,2);}

function kiemtraNumber(...$sos) {
    foreach ($sos as $so) {
        if (!is_numeric($so)) return false;
    }

    return true;
}
$pheptinh = "";
$result = "";
if(isset($_POST["btn"])){
      $sothu1 = $_POST["sothunhat"];
        $sothu2 = $_POST["sothunhi"];
        $cal = $_POST["chon"];
    if(kiemtraNumber($sothu1,$sothu2)){
    switch($cal){
        case "cộng": 
            $pheptinh = "Cộng";
            $result = cong($sothu1,$sothu2); break;
        case "trừ" :
            $pheptinh = "Trừ";
            $result = tru($sothu1,$sothu2); break;
        case "nhân":
            $pheptinh = "Nhân";
            $result = nhan($sothu1,$sothu2); break;
        case "chia": 
            $pheptinh = "Chia";
            if($sothu2 == 0){
                $result = "Không thể chia cho 0";
            } else {
                $result = chia($sothu1,$sothu2);
            }
            break;
        default: 
        $pheptinh = "Phép tính không hợp lệ";
        $result = "phép tính không hợp lệ"; break;
    }
    }else{
        $result = "Thông số không hợp lệ";
    }
} 

?>

    <div class="container">
     <table>
        <form action="BT6_2.php" method="post">
            <tr>
                <td style="text-align:center; color:blue; font-weight: bold;" colspan="2">PHÉP TÍNH TRÊN HAI SỐ</td>
            </tr>
        <tr>
            <td style="color:brown;">Chọn phép tính:</td>
            <td style="color: red; font-size: 20px;">
              <?php echo $pheptinh; ?>
            </td>
        </tr>
        <tr>
            <td style="color:blue;">Số 1:</td>
            <td><input type="text" name="sothunhat" value="<?php echo isset($_POST["sothunhat"]) ? $_POST["sothunhat"] : " ";?>"></td>
        </tr>
        <tr>
            <td style="color:blue;">Số 2:</td>
            <td><input type="text" name="sothunhi" value="<?php echo isset($_POST["sothunhi"]) ? $_POST["sothunhi"] : " ";?>"></td>
        </tr>
        <tr>
            <td style="color:blue;">Kết quả:</td>
            <td><input type="text" name="result" value="<?php echo isset($result) ? $result : " "?>"></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:center;">
                <a style=" margin-left: 20px; text-align:center; font-style: italic;"  href="javascript:window.history.back(-1);">Quay lại trang trước</a>
            </td>
        </tr>
   </form>
     </table> 
  </div>
</body>
</html>