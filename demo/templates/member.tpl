<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>會員中心</title>
    <script src="js/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="../bootstrap-4.4.1-dist\css\bootstrap.css">
    <script src="../bootstrap-4.4.1-dist\js\bootstrap.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <style>
        .content {
            width: 200px;
        }
    </style>
</head>
<body>
    <div style="display:flex">

        {* 資料修改ok *}
        <div class="col-md-3 mb-3" style="position:relative;display:inline-block;margin-top:20px">

            {* 大頭貼 *}
            <div class="col-md-9 mb-3">
                大頭貼
                <form method="POST" action="modifyFace.php" enctype="multipart/form-data">
                    <input class="btn btn-outline-info" type="file" id="progressbarTWInput" accept="image/gif, image/jpeg, image/png" name="Face" style="margin-bottom:5px">
                    <button type="submit" class="btn btn-primary" style="margin-top:10px">修改</button>
                    <input type="text" value="change" Name="way" hidden>
                    <input type="text" value="{$member.4}" Name="oldPath" hidden>
                </form>
                {if $member.4}
                <img id="preview_progressbarTW_img" src="{$member.4}" style="width:300px;height:auto">
                    <form method="POST" action="modifyFace.php">
                        <input type="text" value="{$member.4}" Name="oldPath" hidden>
                        <input type="text" value="delete" Name="way" hidden>
                        <button type="submit" class="btn btn-primary" style="margin-top:10px">刪除</button>
                    </form>
                {else}
                    <img id="preview_progressbarTW_img" src="#" style="width:300px;height:auto;display:none">
                {/if}     
            </div>

            {* 基本資料ok *}
            <form method="POST" action="modifyMember.php">
                <div class="col-md-9 mb-3">
                    <label for="validationServer01">帳號</label>
                    <input type="text" class="form-control" id="validationServer01" name="memberAC" id="newAC" readonly value="{$member.0}">
                </div>
                <div class="col-md-9 mb-3">
                    <label for="validationServer02">密碼</label>
                    <input type="password" class="form-control" id="validationServer02" name="memberPW" onblur="checkPW()" required placeholder="{$member.1}">
                    <h6 style="visibility: hidden" id="checkPW">.</h6>
                </div>
                <div class="col-md-9 mb-3">
                    <label for="validationServer03">確認密碼</label>
                    <input type="password" class="form-control" id="validationServer03" onblur="reCheckPW()" required>
                    <h6 style="visibility: hidden" id="reCheckPW">.</h6>
                </div>
                <div class="col-md-9 mb-3">
                    <label for="validationServer04">暱稱</label>
                    <input type="text" class="form-control" id="validationServer04" name="memberName" onblur="checkName()" value="{$member.2}" required>
                    <h6 style="visibility: hidden" id="checkName">.</h6>
                </div>
                <div class="col-md-9 mb-3">
                    <label for="validationServer05">電子信箱</label>
                    <input type="text" class="form-control" id="validationServer05" name="memberMail" onblur="checkMail()" value="{$member.3}" required>
                    <h6 style="visibility: hidden" id="checkMail">.</h6>
                </div>
                <div style="margin:15px" onmouseover="McheckForm()">
                    <button class="btn btn-primary" type="submit" style="margin-right:10px" id="submitBtn" disabled>修改</button>
                </div>
            </form>
        </div>

        {* 文章列表ok *}
        <div class="col-md-9" style="position:relative;display:inline-block;margin-top:20px">
            <h4>我的留言</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">主題</th>
                        <th scope="col">時間</th>
                        <th scope="col" class='content' style="overflow:hidden">內容</th>
                        <th scope="col">修改</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach item=post from=$post_array}
                    <tr>
                        <th scope="row">{$post.subject}</th>
                        <td>{$post.date}</td>
                        <td class='content' style="overflow:hidden">
                            <form action='modifyContent.php' method='POST'>
                            <input type='hidden' name='contentID' value="{$post.postID}">
                            <input type='text' name='content' id="{$post.postID}" value="{$post.content}">
                        </td>
                        <td>
                            <button type='submit' class="btn btn-outline-primary">修改內容</button>
                            </form><button class="btn btn-outline-warning" onclick='Delete({$post.postID})'>刪除</button>
                        </td>
                    </tr>
                    {/foreach}
                </tbody>
            </table>
            {* 跳頁 *}
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        {foreach item=page from=$pages}
                        <li class="page-item"><a class="page-link" href="?page={$page}">{$page}</a></li>
                        {/foreach}                  
                    </ul>
                <nav>
        </div>
        <script src="js/check.js"></script>
        <script>

            $("#progressbarTWInput").change(function(){
                readURL(this);
            });

            function readURL(input){
                if(input.files && input.files[0]){
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $("#preview_progressbarTW_img").attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                    document.getElementById("preview_progressbarTW_img").style.display = "block" ;
                }
            }

            function Delete(deleteID) {
                $(document).ready(function() {
                    $.ajax({
                        async: true,
                        type: "POST",
                        url: "deleteContent.php",
                        dataType: "json",
                        data: {
                            'deleteID': deleteID
                        },
                        success: function(response) {
                            window.location = "member.php";
                        },
                        error: function() {
                            window.location = "member.php";
                        }
                    })
                });
            }
        </script>
    </div>
</body>
</html>