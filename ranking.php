<?php include 'header.php'; ?>
<?php include 'connect.php'; ?>
<?php
// Truy vấn
$sql = "SELECT * FROM ranking  ORDER BY point DESC";
$result = $conn->query($sql);
?>

<main>
    <div class="container">
        <h1>Bảng xếp hạng bóng đá Ngoại hạng Anh 2024/2025 mới nhất</h1>
        <h4>Trân trọng giới thiệu tới độc giả bảng xếp hạng của giải NGOẠI HẠNG ANH mùa bóng 2024/2025.</h4>
        <div class="box_title">
            <div class="title_rank">Bảng xếp hạng bóng đá mùa giải 2024/2025</div>
        </div>
        <h3>Bảng xếp hạng vòng 15</h3>
        <div class="table-container">
            <table>
                <thead>
                <tr>
                    <th>TT</th>
                    <th>Đội</th>
                    <th>Trận</th>
                    <th>Thắng</th>
                    <th>Hoà</th>
                    <th>Thua</th>
                    <th>Bàn thắng</th>
                    <th>Bàn thua</th>
                    <th>Điểm</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc() ) {
                        echo "
                        <tr>
                            <td>{$row['id']}</td>
                            <td>{$row['team']}</td>
                            <td>{$row['number_match']}</td>
                            <td>{$row['win']}</td>
                            <td>{$row['draw']}</td>
                            <td>{$row['lose']}</td>
                            <td>{$row['goal']}</td>
                            <td>{$row['goal_conceded']}</td>
                            <td>{$row['point']}</td>
                        </tr>
                    ";
                    }
                } else {
                    echo "<tr>No data found</tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
<?php include 'footer.php'; ?>

<style>
    .container{
        /*display: flex;*/
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
    .table-container {
        max-width: 860px;
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    table {
        width: 100%;
        border-collapse: collapse;
        background-color: #ffffff;
    }
    thead {
        background-color: #c2bdbd;;
        color: #ffffff;
    }
    th, td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th {
        text-transform: uppercase;
        font-size: 14px;
        letter-spacing: 0.5px;
    }
    tbody tr:last-child td {
        border-bottom: none;
    }

</style>

