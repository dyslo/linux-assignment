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
            <form id="add-form" action="/add/request.php" method="POST">
                <input type="text" name="id" placeholder="아이디 (8자)" autocomplete="off">
                <input type="password" name="pw" placeholder="비밀번호 (최소 6자)" autocomplete="off">
                <input type="text" name="name" placeholder="이름" autocomplete="off">
                <input type="text" name="age" placeholder="나이" autocomplete="off">
                <div id="sel-gender">
                    <div class="radio">
                        <input type="radio" id="radio-btn-1" name="gender" value="남자">
                        <label for="radio-btn-1">남자</label>
                    </div>
                    <div class="radio">
                        <input type="radio" id="radio-btn-2" name="gender" value="여자">
                        <label for="radio-btn-2">여자</label>
                    </div>
                </div>
                <button id="submit-btn" type="submit">등록</button>
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
