<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form - Bài tập 8</title>
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
        border-radius: 15px;
        align-items: center;
    }

    form {
        background-color: white;
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
     <h3>Bạn đã nhập thành công,dưới đây là những thông tin bạn đã nhập</h3>
     <table>
            <tr>
                <td>Fullname: </td>
                <td>
                    <?php
                       echo !empty($_POST['fullname']) ? $_POST['fullname'] : "Không có";
                    ?>
                </td>
            </tr>
            <tr>
                <td>Address: </td>
                <td>
                    <?php
                    echo !empty($_POST['address']) ? $_POST['address'] : "Không có";
                    ?>
                </td>
            </tr>
            <tr>
                <td>Phone: </td>
                <td>
                     <?php
                    echo !empty($_POST['phone']) ? $_POST['phone'] : "Không có";
                    ?>
                </td>
            </tr>
            <tr>
                <td>Gender: </td>
                <td>
                     <?php
                    echo !empty($_POST['sex']) ? $_POST['sex'] : "Không có";
                    ?>
                </td>
            </tr>
            <tr>
                <td>Country: </td>
                <td>
                     <?php
                    echo !empty($_POST['country']) ? $_POST['country'] : "Không có";
                    ?>
                </td>
            </tr>
            <tr>
                    <td>Study:</td>
                    <td>
                        <?php
                        if (!empty($_POST["study"])) {
                            echo implode(", ", $_POST["study"]);
                        } else {
                            echo "Không có";
                        }
                        ?>
                    </td>
                </tr>
            <tr>
                <td>Note: </td>
                <td>
                     <?php
                    echo !empty($_POST['note']) ? $_POST['note'] : "Không có";
                    ?>
                </td>
            </tr>
     </table>
        </div>
</body>
</html>