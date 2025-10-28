<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <style>
         *{
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }
       
            body {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100vh;
         background: linear-gradient(to right, #f7dcaa, #d8758e);
    }
    a{
        text-decoration: none !important;
        color: #fff !important;
        font-size: 20px !important;
        font-weight: 600 !important;
    }
    a:hover{
        color: red !important;
    }
        nav ul {
            display: flex;
              justify-content: center;
            align-items: center;
            list-style-type: none;
            padding: 0;
        }
        nav ul li {
            display: inline-block;
            margin-right: 10px;
            margin: 0px 15px;
        }
        nav ul li a {
            text-decoration: none;
            color: blue;
        }
        nav ul li a:hover {
            text-decoration: underline;
        }
        main {
            margin-top: 20px;
        }
    </style>
</head>
<body>
 <div class="container">
      <nav>
        <ul>
            <li><a href="index.php?page=trangchu">Trang chủ</a></li>
            <li><a href="index.php?page=gioithieu">Giới thiệu</a></li>
            <li><a href="index.php?page=tintuc">Tin tức</a></li>
            <li><a href="index.php?page=lienhe">Liên hệ</a></li>
            <li><a href="index.php?page=diendan">Diễn đàn</a></li>
        </ul>
    </nav>
    <main>
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            include "$page.php";
        } else {
            include "trangchu.php";
        }
        ?>
    </main>
 </div>
</body>
</html>