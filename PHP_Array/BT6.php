<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài Tập 6 - SẮP XẾP MẢNG</title>
</head>
<style>
 *{
    padding: 0px;
    margin: 0px;
    box-sizing: border-box;
 }
 
.container{
      display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
 .title{
    background-color:rgb(68, 184, 158) ;
    font-size: 30px;
    font-weight: bold;
    text-align: center;
    color: white;
 }
 table{
    border-collapse: collapse;
    background-color: rgb(184, 225, 216);
    width: 600px;
 }
 tr,td{
    width: 150px;
    font-size: 17px;
     padding: 8px 10px;
 }

 input[type=text]{
    
    margin: 3px 0px;
    padding: 3px;
    font-size: 15px;
    border:1px solid ;
    width: 300px;
 }
 .input1{
background-color: rgb(219, 250, 240);
 }
 .input2{
background-color: rgb(219, 250, 240);
 }
  input[type=submit]{
    padding: 5px;
    width: 170px;
    border: 1px solid ;
    
    font-size: 15px;
    background-color: rgb(255, 246, 206);
    
  }
</style>
<body>
   <div class="container">
     <?php
     $result1 = $result2 = "";
        if(isset($_POST["btn"])){
            $n = $_POST["new"];
            $mang = explode(",",$n);
        
         
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

                 function hoanvi(&$a,&$b){
                $tmp = $a;
                $a = $b;
                $b = $tmp;
            }

            function SapTang($arr){
                for($i = 0; $i < count($arr)-1; $i++){
                    for($j = $i+1; $j < count($arr); $j++){
                        if($arr[$i] > $arr[$j]){
                            hoanvi($arr[$i],$arr[$j]);
                        }
                    }
                }
                $ketqua1 = implode(", ",$arr);
                return $ketqua1;
            }
            function SapGiam($arr){
                for($i = 0; $i < count($arr)-1; $i++){
                    for($j = $i + 1; $j < count($arr); $j++){
                        if($arr[$i] < $arr[$j]){
                            hoanvi($arr[$i],$arr[$j]);
                        }
                    }
                }
                $ketqua2 = implode(", ",$arr);
                return $ketqua2;
            }

            if(Checkmang($mang) && count($mang) > 0){
            $result1  = SapTang($mang);
            $result2  = SapGiam($mang);   
            }else{
                $result1  = $result2  = "Mảng nhập vào không hợp lệ";
            }
        }
    ?>
    <form action="BT6.php" method="post">
        <table>
            <tr>
                <td class="title" colspan="3">SẮP XẾP MẢNG</td>
            </tr>
            <tr>
                <td>Nhập mảng:</td>
                <td><input type="text" name="new" value="<?php echo isset($_POST["new"]) ? $_POST["new"] : ""; ?>"></td>
                <td style="color: red; font-weight: bold;">(*)</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btn" value="Sắp xếp tăng / giảm"></td>
            </tr>
            <tr>
                <td class="title-name" style="color: red; font-weight: bold;">Sau khi sắp xếp:</td>
            </tr>
            <tr>
                <td class="title-name">Tăng dần:</td>
                <td><input type="text" name="tangdan" class="input1" value="<?php echo isset($result1) ? $result1 : ""; ?>"></td>
            </tr>
            <tr>
                <td class="title-name">Giảm dần:</td>
                <td><input type="text" name="giamdan" class="input2" value="<?php echo isset($result2) ? $result2 : ""; ?>"></td>
            </tr>
              <tr>
                    <td colspan="2" align ="center"> <label for="" style="color: red; font-weight: bold;">(*)</label> Các số được nhập cách nhau bằng dấu "," </td>
               </tr>     
        </table>
    </form>
   </div>
</body>
</html>
