<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Bài tập- Điểm Đại Học</title>
</head>
<style>
        *{
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }
        body{
            font-family: Arial, sans-serif;
            background-color: rgb(255, 226, 198);;
        }
        .container{
            width: 300px;
            margin: 50px auto;
             width: fit-content;
        padding: 10px;
        border-radius: 15px;
        align-items: center;
        }
        form{
            width:500px;
            background-color: #ffe6f0; 
        }
        table{
            width:500px;
              border-collapse: collapse;
              
        }
        .title{
            font-size: 18px;
            font-weight: bold;
            background-color: #e75480; 
            color: white;
            text-align: center;
            padding: 10px;
        }
        tr,td{
            padding: 10px;
        }
        input[type="text"]{
            width: 95%;
            padding: 3px;
            font-size: 15px;
        }
        button{
            background-color: #d9d9d9;
            border: 1px solid #999;
            padding: 5px 10px;
        }
        button:hover{
            background-color: #c0c0c0;
        }
        
        input[name="Ketqua"] {
        background-color: #fffacd;
        }
       .btn-submit{
        background-color: #f6f4f4;
        margin-right: 30px;
       }

    </style>
<body>
    <?php
   if(isset($_POST['btn'])){
    $toan = $_POST['Toan'];
    $ly = $_POST['Ly'];
    $hoa = $_POST['Hoa'];
    $diemchuan = $_POST['Diemchuan'];
    $tongdiem = $_POST['Tongdiem'];
    $ketqua = $_POST['Ketqua'];
    if(is_numeric($toan) and is_numeric($ly) and is_numeric($hoa)){
        $tongdiem = ($toan + $ly + $hoa);
        if($toan > 0 and $ly > 0 and $hoa > 0  and $toan <= 10 and $ly <= 10 and $hoa <= 10  and $tongdiem >= $diemchuan){
            $ketqua = "Đậu";
        }else{
            $ketqua = "Rớt";
        }
    }else{
        $ketqua = $tongdiem = "Không hợp lệ";
    }
   } 
?>
   <div class="container">
    <form action="BT4.php" method="post">
        <table>
            <tr>
                <th colspan="2" class="title">KẾT QUẢ THI ĐẠI HỌC</th>
            </tr>
           <tr>
            <td>Toán:</td>
            <td><input type="text" name="Toan" value="<?php echo isset($_POST['Toan']) ? $_POST['Toan'] : "";?>"></td>
           </tr>
           <tr>
            <td>Lý:</td>
            <td><input type="text" name="Ly" value="<?php echo isset($_POST['Ly']) ? $_POST['Ly'] : "";?>"></td>
           </tr>
           <tr>
            <td>Hoá:</td>
            <td><input type="text" name="Hoa" value="<?php echo isset($_POST['Hoa']) ? $_POST['Hoa'] : "";?>"></td>
           </tr>
           <tr>
            <td>Điểm chuẩn:</td>
            <td><input type="text" name="Diemchuan" value="<?php echo isset($_POST['Diemchuan']) ? $_POST['Diemchuan'] : "20";?>"></td>
           </tr>
           <tr>
            <td>Tổng điểm:</td>
            <td><input type="text" name="Tongdiem" value="<?php echo isset($tongdiem) ? $tongdiem : "";?>"></td>
           </tr>
           <tr>
            <td>Kết quả thi:</td>
            <td><input type="text" name="Ketqua" value="<?php echo isset($ketqua) ? $ketqua : "";?>"></td>
           </tr>
           <tr>
                 <td colspan="2" style="text-align:center">
        <button type="submit" class="btn-submit" name="btn">Xem kết quả</button>
    </td>
           </tr>
        </table>
    </form>
   </div>
</body>
</html>