<?php
    include "../lib/mysql.php";
    $id = $_GET["id"];

    $sql = "select * from users where id=". $id . ";";
    $results = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($results);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>회원관리 서비스</title> 
        <link rel="stylesheet" href="../styles/layout.css">
    </head>
    <body>
        <div id="container">
            <h1 class="title">회원관리 서비스</h1>
            <button id="back">뒤로</button>
            <form id="add-form" action="/modify/request.php" method="POST">
                <input type="text" name="id" class="disabled" value="<?php echo $row["id"] ?>" placeholder="아이디" autocomplete="off" readonly>
                <input type="password" name="pw" value="<?php echo $row["pw"]; ?>" placeholder="비밀번호 (최소 6자)" autocomplete="off">
                <input type="text" name="name" value="<?php echo $row["name"]; ?>" placeholder="이름" autocomplete="off">
                <input type="text" name="age" value="<?php echo $row["age"]; ?>" placeholder="나이" autocomplete="off">
                <div id="sel-gender">
                    <div class="radio">
                        <input type="radio" id="radio-btn-1" name="gender" value="남자" <?php if($row["gender"] == "남자") echo "checked" ?> >
                        <label for="radio-btn-1">남자</label>
                    </div>
                    <div class="radio">
                        <input type="radio" id="radio-btn-2" name="gender" value="여자" <?php if($row["gender"] == "여자") echo "checked" ?> >
                        <label for="radio-btn-2">여자</label>
                    </div>
                </div>
                <button id="submit-btn" type="submit">수정</button>
            </form>
        </div>
        <script>
            var el = document.querySelector("button#back");
            el.addEventListener("click", function(event) {
                history.back();
            });
        </script>
    </body>
</html>
