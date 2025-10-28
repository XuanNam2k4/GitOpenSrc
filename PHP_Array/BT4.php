<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài Tập 4 - TÌM KIẾM</title>
</head>
<style>
    *{
        padding: 0px;
        margin: 0px;
        box-sizing: border-box;
    }
    body{
        font-size: 17px;
        background-color:#ece9e9;
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
         background-color: #dfffe2;
         border-collapse: collapse;
    }
    .title{
    background-color :#26c96f;
    font-size: 30px;
    font-weight: bold;
    text-align: center;
    color: white;
    }
     input[type=text]{  
    padding: 3px;
    font-size: 15px;
    border:1px solid ;
 }
  input[type=submit]{
     width: 30%;
        padding-block: 5px;
        padding-inline: 5px;
        background-color: #69bcff;
        border: 1px solid;
  }
  .input1{
        width: 400px;
    }
    .input2{
        width:30%;
    }
    .input3{
        width: 400px;
    }
    .input4{
         width: 400px;
        color: red;
        border: 1px solid black !important;
    }
</style>
<body>
    <?php    
        if(isset($_POST["btn"])){
            $n = $_POST["new"];
            $mang = explode(",",$n);
            $search = $_POST["newsearch"];
         
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
        function CheckN($search){
            if(is_numeric($search)) return 1;
            else return 0;
        }
        function timmang($n,$search){
            $tachmang = explode(",",$n);
             foreach($tachmang as $key => $giatri){
        if($giatri == $search){
            $key1 = $key + 1;
            return "Tìm thấy $search tại vị trí thứ $key1 của mảng";
        }
    }
    return "Không tìm thấy $search trong mảng";
            }

        if(Checkmang($mang) && count($mang) > 0 && CheckN($search)){
                   $ketqua = timmang($n,$search);
        }else{
            $ketqua  = "Mảng hoặc số nhập không hợp lệ";
        }
        }
    ?>
   <div class="container">
     <form action="BT4.php" method="post">
        <table>
            <tr>
                <td colspan="2" class="title">TÌM KIẾM</td>
            </tr>
            <tr>
                <td>Nhập mảng:</td>
                <td><input type="text" name="new" class="input1" value="<?php echo isset($_POST["new"]) ? $_POST["new"] : ""; ?>"></td>
            </tr>
            <tr>
                <td>Nhập số cần tìm:</td>
                <td><input type="text" name="newsearch" class="input2" value="<?php echo isset($_POST["newsearch"]) ? $_POST["newsearch"] : ""; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btn" value="Tìm kiếm"></td>               
            </tr>
            <tr>
                <td>Mảng:</td>
                <td><input type="text" name="mang" class="input3" value="<?php echo isset($mang) ? implode(", ",$mang) : ""; ?>"></td>
            </tr>
            <tr>
                <td>Kết quả tìm kiếm:</td>
                <td><input type="text" name="kq" class="input4" value="<?php echo isset($ketqua) ? $ketqua: ""; ?>"></td>
            </tr>
                <tr style="background-color: #33f088;">
                    <td colspan="2" align="center">(Các phần tử trong mảng sẽ cách nhau bằng dấu ",") </td>
                </tr>
        </table>
    </form>
   </div>
</body>
</html> 
