<?php include 'header.php'; ?>
<?php include 'connect.php'; ?>
<?php
// Truy vấn
$sql = "SELECT * FROM football_news WHERE  type = 1 ORDER BY created_at DESC LIMIT 5";
$sql_news_latest = "SELECT * FROM football_news WHERE  type = 0 ORDER BY created_at DESC LIMIT 10";
$result = $conn->query($sql);
$result_news_latest = $conn->query($sql_news_latest);

?>
<main>
    <div class="container">
        <div class="hot_news">
            <div class="box1">
                <?php
                if ($result->num_rows > 0) {
                    $count = 0;
                    while ($row = $result->fetch_assoc() ) {
                        $count++;
                        echo "<div>
                                <img width='100%' src='{$row['path_image']}'>
                                <a href='detail_news.php?id={$row['id']}'><h5 class='limited-text'>{$row['name']}</h5></a>
                            </div>";
                        if($count >=2){
                            break;
                        }
                    }
                } else {
                    echo "<div>No data found</div>";
                }
                ?>
            </div>
            <div class="box2">
                <?php
                if ($result->num_rows > 0) {
                    $count1 = 0;
                    while ($row1 = $result->fetch_assoc() ) {
                        $count1++;
                        if($count1 == 1){
                            echo "<div>
                                    <img width='100%' class='img-center' src='{$row1['path_image']}'>
                                    <a href='detail_news.php?id={$row1['id']}'><h3 class='limited-text'>{$row1['name']}</h3></a>
                                </div>";
                            break;
                        }
                    }
                } else {
                    echo "<div>No data found</div>";
                }
                ?>
            </div>
            <div class="box1" style="margin-left: 16px">
                <?php
                if ($result->num_rows > 0) {
                    $count2 = 0;
                    while ($row2 = $result->fetch_assoc() ) {
                        echo "<div>
                                <img width='100%' src='{$row2['path_image']}'>
                                <a href='detail_news.php?id={$row2['id']}'><h5 class='limited-text'>{$row2['name']}</h5></a>
                            </div>";
                    }
                } else {
                    echo "<div>No data found</div>";
                }
                ?>
            </div>
        </div>
        <div class="news_latest">
            <h2>Tin bóng đá mới nhất</h2>
            <div>
                <?php
                if ($result_news_latest->num_rows > 0) {
                    while ($row4 = $result_news_latest->fetch_assoc() ) {
                        echo "<div class='box_news'>
                                <img width='255' height='170' src='{$row4['path_image']}'>
                                <div class='title_news'>
                                    <a href='detail_news.php?id={$row4['id']}'><h4>{$row4['name']}</h4></h5></a>
                                    <span>{$row4['title']}</span>
                                </div>
                        </div>";
                    }
                } else {
                    echo "<div>No data found</div>";
                }
                ?>
            </div>
        </div>
        <div>Tinh nang A</div>
        <div>Tinh nang B</div>
    </div>
</main>
<?php include 'footer.php'; ?>

<style>
    .container{
        /*display: flex;*/
        margin-left: 15%;
        margin-right: 15%;
    }
    .hot_news{
        display: flex;
    }
    .box1{
        width: 20%;
        padding-right: 16px;
    }
    .box2{
        width: 50%;
        padding: 0 16px;
    }
    .box1 h5{
        margin-top: 8px;
        line-height: 20px;

    }
    .limited-text {
        display: -webkit-box;       /* Tạo box linh hoạt */
        -webkit-line-clamp: 2;      /* Giới hạn hiển thị 2 dòng */
        -webkit-box-orient: vertical; /* Định hướng box theo chiều dọc */
        overflow: hidden;           /* Ẩn phần văn bản thừa */
        text-overflow: ellipsis;    /* Thêm dấu "..." nếu bị cắt */
    }
    .box_news{
        display: flex;
        margin-bottom: 24px;

    }
    .title_news{
        padding-left: 32px;
    }
    .title_news h4{
        margin-top: 0;
    }
    .news_latest h2{
        margin-top: 30px;
        font-size: 22px;
        font-family: "Century Schoolbook";
        text-transform: uppercase;
        color: #51AE5A;
    }
    .container a{
        text-decoration: none;
        font-family: Arial, sans-serif;
    }
</style>

