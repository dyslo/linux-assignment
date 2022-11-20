<?php
    include "./lib/mysql.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>회원관리 서비스</title>
        <link rel="stylesheet" href="./styles/layout.css">
        <script>
            function clickHandler(id, method) {
                if (method === "modify") {
                    location.href = "/modify?id=" + String(id);
                } else if (method === "delete") {
                    location.href = "/delete?id=" + String(id);
                }
            }
        </script>
    </head>
    <body>
        <div id="container">
            <h1 class="title">회원관리 서비스</h1>
            <div id="tab-container">
                <a class="button" href="/add">회원추가</a>
                <a class="button" href="/search">회원검색</a>
            </div>
            <table id="user-list">
                <thead>
                    <th>아이디</th>
                    <th>이름</th>
                    <th width="40px">성별</th>
                    <th>나이</th>
                    <th>수정/삭제</th>
                </thead>
                <?php
                    $sql = "select * from users";
                    $results = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($results) == 0) {
                        echo '<tr>';
                        echo '<td colspan="5">회원이 없습니다.</td>';
                        echo '</tr>';
                        return;
                    }
                    while ($row = mysqli_fetch_array($results)) {
                        echo '<tr>';
                        echo '<td>'. $row["id"].'</td>';
                        echo '<td>'. $row["name"].'</td>';
                        echo '<td>'. $row["gender"].'</td>';
                        echo '<td>'. $row["age"].'세</td>';
                        echo '<td><button id="modify-btn" onclick="clickHandler('. $row["id"] .', \'modify\')">수정</button><button id="remove-btn" onclick="clickHandler('. $row["id"] .', \'delete\')">삭제</button></td>';
                    }
                ?>
            </table>
        </div>
    </body>
</html>