<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-05 03:19:00
  from 'C:\xampp\htdocs\coding\guestbook\demo\templates\member.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e3a2614b6ce44_46046479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ec190940af17113a4b8ee97df997a666931477f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\coding\\guestbook\\demo\\templates\\member.tpl',
      1 => 1580796774,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_5e3a2614b6ce44_46046479 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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

                <div class="col-md-3 mb-3" style="position:relative;display:inline-block;margin-top:20px">

                        <div class="col-md-9 mb-3">
                大頭貼
                <form method="POST" action="modifyFace.php" enctype="multipart/form-data">
                    <input class="btn btn-outline-info" type="file" id="progressbarTWInput" accept="image/gif, image/jpeg, image/png" name="Face" style="margin-bottom:5px">
                    <button type="submit" class="btn btn-primary" style="margin-top:10px">修改</button>
                    <input type="text" value="change" Name="way" hidden>
                    <input type="text" value="upload/5320200130090400123.jpg" Name="oldPath" hidden>
                </form>
                                <img id="preview_progressbarTW_img" src="upload/5320200130090400123.jpg" style="width:300px;height:auto">
                    <form method="POST" action="modifyFace.php">
                        <input type="text" value="upload/5320200130090400123.jpg" Name="oldPath" hidden>
                        <input type="text" value="delete" Name="way" hidden>
                        <button type="submit" class="btn btn-primary" style="margin-top:10px">刪除</button>
                    </form>
                     
            </div>

                        <form method="POST" action="modifyMember.php">
                <div class="col-md-9 mb-3">
                    <label for="validationServer01">帳號</label>
                    <input type="text" class="form-control" id="validationServer01" name="memberAC" id="newAC" readonly value="abc123456">
                </div>
                <div class="col-md-9 mb-3">
                    <label for="validationServer02">密碼</label>
                    <input type="password" class="form-control" id="validationServer02" name="memberPW" onblur="checkPW()" required placeholder="*********">
                    <h6 style="visibility: hidden" id="checkPW">.</h6>
                </div>
                <div class="col-md-9 mb-3">
                    <label for="validationServer03">確認密碼</label>
                    <input type="password" class="form-control" id="validationServer03" onblur="reCheckPW()" required>
                    <h6 style="visibility: hidden" id="reCheckPW">.</h6>
                </div>
                <div class="col-md-9 mb-3">
                    <label for="validationServer04">暱稱</label>
                    <input type="text" class="form-control" id="validationServer04" name="memberName" onblur="checkName()" value="Sarah princess" required>
                    <h6 style="visibility: hidden" id="checkName">.</h6>
                </div>
                <div class="col-md-9 mb-3">
                    <label for="validationServer05">電子信箱</label>
                    <input type="text" class="form-control" id="validationServer05" name="memberMail" onblur="checkMail()" value="abc123456@aaa.bbb" required>
                    <h6 style="visibility: hidden" id="checkMail">.</h6>
                </div>
                <div style="margin:15px" onmouseover="McheckForm()">
                    <button class="btn btn-primary" type="submit" style="margin-right:10px" id="submitBtn" disabled>修改</button>
                </div>
            </form>
        </div>

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
                                        <tr>
                        <th scope="row">RE.大吉大利明天吃雞</th>
                        <td>2020-01-16 10:12:02</td>
                        <td class='content' style="overflow:hidden">
                            <form action='modifyContent.php' method='POST'>
                            <input type='hidden' name='contentID' value="106">
                            <input type='text' name='content' id="106" value="死肥豬一直吃">
                        </td>
                        <td>
                            <button type='submit' class="btn btn-outline-primary">修改內容</button>
                            </form><button class="btn btn-outline-warning" onclick='Delete(106)'>刪除</button>
                        </td>
                    </tr>
                                        <tr>
                        <th scope="row">今天天氣差</th>
                        <td>2020-01-17 02:51:59</td>
                        <td class='content' style="overflow:hidden">
                            <form action='modifyContent.php' method='POST'>
                            <input type='hidden' name='contentID' value="110">
                            <input type='text' name='content' id="110" value="哭哭">
                        </td>
                        <td>
                            <button type='submit' class="btn btn-outline-primary">修改內容</button>
                            </form><button class="btn btn-outline-warning" onclick='Delete(110)'>刪除</button>
                        </td>
                    </tr>
                                        <tr>
                        <th scope="row">RE.今天天氣差</th>
                        <td>2020-01-17 02:54:43</td>
                        <td class='content' style="overflow:hidden">
                            <form action='modifyContent.php' method='POST'>
                            <input type='hidden' name='contentID' value="112">
                            <input type='text' name='content' id="112" value="sad">
                        </td>
                        <td>
                            <button type='submit' class="btn btn-outline-primary">修改內容</button>
                            </form><button class="btn btn-outline-warning" onclick='Delete(112)'>刪除</button>
                        </td>
                    </tr>
                                        <tr>
                        <th scope="row">RE.123</th>
                        <td>2020-01-17 03:27:54</td>
                        <td class='content' style="overflow:hidden">
                            <form action='modifyContent.php' method='POST'>
                            <input type='hidden' name='contentID' value="117">
                            <input type='text' name='content' id="117" value="你真是讓我又愛又恨">
                        </td>
                        <td>
                            <button type='submit' class="btn btn-outline-primary">修改內容</button>
                            </form><button class="btn btn-outline-warning" onclick='Delete(117)'>刪除</button>
                        </td>
                    </tr>
                                        <tr>
                        <th scope="row">123</th>
                        <td>2020-02-04 07:19:40</td>
                        <td class='content' style="overflow:hidden">
                            <form action='modifyContent.php' method='POST'>
                            <input type='hidden' name='contentID' value="124">
                            <input type='text' name='content' id="124" value="2133333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333
2121321
21312323
32131321
2313213
12312313
12313
121
212
12
1
231
31
321
32
1">
                        </td>
                        <td>
                            <button type='submit' class="btn btn-outline-primary">修改內容</button>
                            </form><button class="btn btn-outline-warning" onclick='Delete(124)'>刪除</button>
                        </td>
                    </tr>
                                        <tr>
                        <th scope="row">123</th>
                        <td>2020-02-04 07:19:59</td>
                        <td class='content' style="overflow:hidden">
                            <form action='modifyContent.php' method='POST'>
                            <input type='hidden' name='contentID' value="125">
                            <input type='text' name='content' id="125" value="123">
                        </td>
                        <td>
                            <button type='submit' class="btn btn-outline-primary">修改內容</button>
                            </form><button class="btn btn-outline-warning" onclick='Delete(125)'>刪除</button>
                        </td>
                    </tr>
                                    </tbody>
            </table>
                            <nav aria-label="Page navigation example">
                    <ul class="pagination">
                                                <li class="page-item"><a class="page-link" href="?page=1">1</a></li>
                                          
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
</html><?php }
}
