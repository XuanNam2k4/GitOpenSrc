
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Tiền Karaoke</title>
    <style>
        *{
            padding: 0px;
            margin:  0px;
            box-sizing: border-box;
        }
           body {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100vh;
        background-color: #b2dfdb;
       
    }
    table{
        width: 500px;
        border-collapse: collapse
    ;
    }
    .container {
        background-color: #03ccb8;
        align-items: center;
    }
    td,tr{
        padding: 10px;
    }
    .title{
        background-color: #22a699;
        color: white;
        font-size: 20px;
        font-weight: bold;
        padding: 10px 0px ;
    }
    
    input[type="submit"]{
        padding: 3px 7px;
        background-color: rgb(254, 254, 255);
        }
    input[name="Tien"] {
            background-color: #fff9c4; 
            border: 1px ;
        }
        input[type=text]{
            padding: 5px;
            width: 250px;
            font-size: 15px;
        }
        .money{
            margin-right: 120px;
        }
    </style>
<body>
     <?php
        if(isset($_POST["btn"])){
            $giobatdau = $_POST["batdau"];
            $gioketthuc = $_POST["ketthuc"];
            $tien =$_POST["Tien"];
            if (is_numeric($giobatdau) and is_numeric($gioketthuc)) {
             if ($gioketthuc > $giobatdau) {
            if ($gioketthuc >= 10 and $gioketthuc < 17 and $giobatdau >= 10 and $giobatdau < 17) {
                $tien = ($gioketthuc - $giobatdau) * 20000;
            } else if ($gioketthuc >= 17 and $gioketthuc < 24 and $giobatdau >= 17 and $giobatdau < 24) {
                $tien = ($gioketthuc - $giobatdau) * 45000;
            } else if ($gioketthuc > 17 and $gioketthuc <= 24 and $giobatdau >= 10 and $giobatdau < 17) {
                $tien = (17 - $giobatdau) * 20000 + ($gioketthuc - 17) * 45000;
            } else {
                $tien = "Thời gian không hợp lệ";
            }
        } else {
            $tien = "Giờ kết thúc lớn hơn giờ bắt đầu";
        }
    } else {
        $tien = "Thông số không hợp lệ";
    }
}
    ?>
    <div class="container">
        <form action="BT5.php" method="post">
        <table>
            <tr>
                <td style="text-align:center;" class="title" colspan="2">TÍNH TIỀN KARAOKE</td>
            </tr>
            <tr>
                <td class="add">Giờ bắt đầu:</td>
                <td class="add"><input type="text" name="batdau" value="<?php echo isset($_POST["batdau"]) ? $_POST["batdau"] : ""; ?>"> (h)</td>
            </tr>
            <tr>
                <td class="add">Giờ kết thúc:</td>
                <td class="add"><input type="text" name="ketthuc" value="<?php echo isset($_POST["ketthuc"]) ? $_POST["ketthuc"] : ""; ?>"> (h)</td>
            </tr>
            <tr>
                <td class="add">Tiền thanh toán:</td>
                <td class="add"><input type="text" name="Tien" value = "<?php echo isset($tien) ? $tien : ""; ?>"> (VNĐ)</td>
            </tr>
            <tr >
                <td style="text-align:center;" colspan="2">
                    <input type="submit" name="btn" class="money" value="Tính Tiền">
                </td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>