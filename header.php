<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Web</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <div class="header-container">
        <div>
            <a href="index.php"><img class="logo" src="./resource/logo.png" alt=""></a>
        </div>
        <nav class="nav-box">
            <ul>
                <li><a class="active" href="index.php">Trang chủ</a></li>
                <li><a href="match_schedule.php">Lịch thi đấu</a></li>
                <li><a href="result.php">Kết quả thi đấu</a></li>
                <li><a href="ranking.php">Bảng xếp hạng</a></li>
            </ul>
        </nav>
    </div>
</header>
<style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #78b43d;
        font-size: 13px;
        text-transform: uppercase;
        font-weight: 600;
        font-family: serif;
    }

    li {
        float: left;
    }

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li a:hover {
        background-color: rgb(0, 0, 0, 30%);
    }

    header {
        background-color: #78b43d;
        padding: 10px;
    }

    .header-container{
        display: flex;
    }
    .logo{
        width: 90px;
        height: 55px;
    }

    .header-container {
        margin-left: 15%;
        display: flex;
        align-items: center;    /* Căn giữa theo chiều dọc */
        font-family: Arial, sans-serif;
    }

    .nav-box{
        margin-left: 300px;
    }
</style>