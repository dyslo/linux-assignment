<!DOCTYPE html>
<html>
    <head>
        <title>회원관리 서비스</title>
        <link rel="stylesheet" href="../styles/layout.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
    <body>
        <div id="container">
            <h1 class="title">회원관리 서비스</h1>
            <button id="back">뒤로</button>
            <div id="search-container">
                <input onKeyUp="fetch_data()" type="text" id="search-query" name="query" placeholder="검색어를 입력하세요.">
                <table id="search-result">
                    <thead>
                        <th>아이디</th>
                        <th>이름</th>
                        <th>나이</th>
                        <th>성별</th>
                    </thead>
                    <tbody id="result">
                        <tr>
                            <td colspan="4">검색어를 입력해 주세요.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <script type="text/javascript">
            function fetch_data() {
                var query = $("input#search-query").val();
                var search_result = $("#search-result #result");
                search_result.empty();
                if (query === "") return;
                $.ajax({
                    url: "/search/request.php?query=" + String(query),
                    method: "GET",
                    dataType: "json"
                }).done(function(res) {
                    search_result.empty();
                    if(res.length === 0) {
                        var dom = "<tr><td colspan='4'>회원이 없습니다.</td></tr>";
                        search_result.append(dom);
                        return;
                    } else {
                        res.forEach((e) => {
                            var dom = "<tr><td>" + String(e.id) + "</td>" + "<td>" + String(e.name) + "<td>" + String(e.age) + "세</td>" + "<td>" + String(e.gender) + "</td></tr>"; 
                            search_result.append(dom);
                        })
                    }
                })
            }
        </script>
        <script>
            var el = document.querySelector("button#back");
            el.addEventListener("click", function(event) {
                history.back();
            });
        </script>
    </body>
</html>
