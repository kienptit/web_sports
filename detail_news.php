<?php include 'header.php'; ?>
<?php include 'connect.php'; ?>
<?php
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
// Truy vấn
$sql = "SELECT * FROM football_news WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc()
?>
<main>
    <div class="container">
        <h1><?php echo $row['name'] ?></h1>
        <h4><?php echo $row['title'] ?></h4>
        <div class="image_detail">
            <img width="100%" height="100%"  src='<?php echo $row['path_image'] ?>'>
        </div>
        <div class="des"><?php echo $row['description'] ?></div>
    </div>
</main>
<?php include 'footer.php'; ?>

<style>
    .container{
        margin-left: 15%;
        margin-right: 15%;
    }
    .image_detail{
        width: 700px;
        height: 400px;
       margin: 0 auto;
    }
    .des{
        margin-top: 32px;
        font-family: Inter;
        font-size: 16px;
    }
</style>

