<?php include 'header.php'; ?>
<?php include 'connect.php'; ?>
<?php
// Truy vấn
$sql = "SELECT * FROM matchs  ORDER BY time_begin DESC";
$result = $conn->query($sql);

?>
<main>
    <div class="container">
        <h1>Lịch thi đấu bóng đá Ngoại hạng Anh 2024/2025 mới nhất</h1>
        <h4>Cập nhật lịch thi đấu bóng đá Ngoại Hạng Anh 2024/2025 bắt đầu diễn ra từ 8/2024 tới 5/2025.</h4>
        <div class="box_title">
            <div class="title_rank">Lịch thi đấu bóng đá mùa giải 2024/2025</div>
        </div>
        <h3>Lịch thi đấu Vòng 15</h3>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc() ) {
                $formatted = (new DateTime($row['time_begin']))->format('H:i d/m'); // Định dạng mới
                echo "
                <div class='score'>
                    <h4 style='padding-top: 3px'>{$formatted}</h4>
                    <div class='score_team'>
                        <div class='team_ab'>
                            <div class='common' style='padding-top: 4px; font-family: Arial'>{$row['team1']}</div>
                            <div class='common'>
                                <div class='point'>
                                    <div> vs </div></div>
                                </div>
                            <div class='common' style='padding-top: 4px; font-family: Arial'>{$row['team2']}</div>
                        </div>
                    </div>
                </div>
                ";
            }
        } else {
            echo "<div>No data found</div>";
        }
        ?>
    </div>
</main>
<?php include 'footer.php'; ?>

<style>
    .container{
        margin-left: 15%;
        margin-right: 15%;
    }
    .box_title{
        width: 80%;
        height: 60px;
        background-color: #40116b;
    }
    .title_rank{
        padding-top: 20px;
        color: white;
        font-size: 16px;
        padding-left: 30px;
        font-weight: 600;
    }
    .score{
        display: flex;
    }
    .score_team{
        margin-left: 10px;
        /*position: relative;*/
        width: 50%;
        justify-content: space-between; /* Cách đều các thẻ div con */
        align-items: center; /* Canh giữa theo chiều dọc */
    }
    .team_ab{
        padding-top: 20px;
        display: flex;
        justify-content: center; /* Cách đều các thẻ div con */
        align-items: center; /* Canh giữa theo chiều dọc */
    }
    .point{
        width: 60px;
        border: 1px solid #78b43d;
        border-radius: 15px;
        height: 25px;
        margin: 0 20px;
    }
    .common{
        display: flex;
        align-items: center;
        justify-content: center;
        width: 30%;
    }
    .point span{
        padding: 12px 0 0 12px;
    }
    .point div{
        padding: 4px 22px;
    }
</style>

