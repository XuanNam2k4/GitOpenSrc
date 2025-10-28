<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-Bài 8</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100vh;
        background: linear-gradient(to right, #d4f16d, #75d89e);
    }

    .container {
        width: fit-content;
        background-color: #ffffffff;
        padding: 10px;
        align-items: center;
    }

    form {
        background-color: white;
        border: 1px solid #ccc;
    }

    input[type=text],
    input[type=password] {
        width: 400px;
        height: 30px;
        border-radius: 5px;
        border: 1px solid #ccc;
        padding-left: 10px;
    }

    input[type=submit],
    input[type=reset] {
        width: 30%;
        padding-block: 5px;
        padding-inline: 10px;
        background-color: #d8ce41ff;
        cursor: pointer;
        border: none;
        border-radius: 5px;
    }

    select {
        width: 100%;
        padding-block: 5px;
        padding-inline: 10px;
    }

    table tr td {
        padding: 5px;
        margin: 5px;
    }
</style>
<body>
   <div class="container">
     <form action="config.php" method="post">
        <table>
            <tr >
                <td colspan="2" style="text-align: center; font-size: 20px; color: #333; font-weight: bold;">Enter Your Infomation</td>
            </tr>
            <tr>
                <td>Fullname: </td>
                <td><input type="text" name="fullname" value="<?php echo isset($_POST['fullname']) ? $_POST['fullname']:""; ?>"></td>
            </tr>
            <tr>
                <td>Address: </td>
                <td><input type="text" name="address" value="<?php echo isset($_POST['address']) ? $_POST['address']:""; ?>"></td>
            </tr>
            <tr>
                <td>Phone: </td>
                <td><input type="text" name="phone" value="<?php echo isset($_POST['phone']) ? $_POST['phone']:""; ?>"></td>
            </tr>
            <tr>
                <td>Gender: </td>
                <td>
                <input type="radio" name="sex" value="Nam">Nam
                <input type="radio" name="sex" value="Nữ">Nữ
                </td>
            </tr>
            <tr>
                <td>Country: </td>
                <td>
                   <select name="country" id="country">
                    <option value="Việt Nam">Việt Nam</option>
                    <option value="Mỹ">Mỹ</option>
                       <option value="Nhật">Nhật Bản</option>
                          <option value="Mỹ">Liên Bang Nga</option>
                             <option value="Mỹ">Pháp</option>
                   </select>
                </td>
            </tr>
             <tr>
                        <td>Study</td>
                        <td style="display: flex; justify-content: space-around; align-items: center;">
                            <label><input type="checkbox" name="study[]" value="PHP & MySQL"> PHP & MySQL</label>
                            <label><input type="checkbox" name="study[]" value="ASP.NET"> ASP.NET</label>
                            <label><input type="checkbox" name="study[]" value="CCNA"> CCNA</label>
                            <label><input type="checkbox" name="study[]" value="Security+"> Security+</label>
                        </td>
                    </tr>
            <tr>
                <td>Note: </td>
                <td>
                    <textarea name="note" id="note" cols="55" rows="5" value="<?php echo isset($_POST['note']) ? $_POST['note'] : ""; ?>"></textarea>                   
                    </textarea>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: center;">
                <input type="submit" name="btn" value="Gửi">
                <input type="reset" name="reset" value="Huỷ">
            </td>
            </tr>
        </table>
    </form>
   </div>
</body>
</html>
