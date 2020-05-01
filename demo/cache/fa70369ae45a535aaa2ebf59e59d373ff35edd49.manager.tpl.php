<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-04 07:12:35
  from 'C:\xampp\htdocs\coding\guestbook\demo\templates\manager.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e390b5380b457_11366919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b6b329ffce519dac003def6ef05f9a69a3e51a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\coding\\guestbook\\demo\\templates\\manager.tpl',
      1 => 1580796749,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_5e390b5380b457_11366919 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理中心</title>
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
                    <input type="text" value="upload/020200117044845GM.png" Name="oldPath" hidden>
                </form>
                                <img id="preview_progressbarTW_img" src="upload/020200117044845GM.png" style="width:300px;height:auto">
                    <form method="POST" action="modifyFace.php">
                        <input type="text" value="upload/020200117044845GM.png" Name="oldPath" hidden>
                        <input type="text" value="delete" Name="way" hidden>
                        <button type="submit" class="btn btn-primary" style="margin-top:10px">刪除</button>
                    </form>
                     
            </div>

                        <form method="POST" action="modifyMember.php">
                <div class="col-md-9 mb-3">
                    <label for="validationServer01">帳號</label>
                    <input type="text" class="form-control" id="validationServer01" name="memberAC" id="newAC" readonly value="GM123456">
                </div>
                <div class="col-md-9 mb-3">
                    <label for="validationServer02">密碼</label>
                    <input type="password" class="form-control" id="validationServer02" name="memberPW" onblur="checkPW()" required placeholder="********">
                    <h6 style="visibility: hidden" id="checkPW">.</h6>
                </div>
                <div class="col-md-9 mb-3">
                    <label for="validationServer03">確認密碼</label>
                    <input type="password" class="form-control" id="validationServer03" onblur="reCheckPW()" required>
                    <h6 style="visibility: hidden" id="reCheckPW">.</h6>
                </div>
                <div class="col-md-9 mb-3">
                    <label for="validationServer04">暱稱</label>
                    <input type="text" class="form-control" id="validationServer04" name="memberName" onblur="checkName()" value="GM" required>
                    <h6 style="visibility: hidden" id="checkName">.</h6>
                </div>
                <div class="col-md-9 mb-3">
                    <label for="validationServer05">電子信箱</label>
                    <input type="text" class="form-control" id="validationServer05" name="memberMail" onblur="checkMail()" value="GM123456@aaa.bbb" required>
                    <h6 style="visibility: hidden" id="checkMail">.</h6>
                </div>
                <div style="margin:15px" onmouseover="McheckForm()">
                    <button class="btn btn-primary" type="submit" style="margin-right:10px" id="submitBtn" disabled>修改</button>
                </div>
            </form>
        </div>

                <div class="col-md-9" style="position:relative;display:inline-block;margin-top:20px">
            <h4>所有留言列表</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">發文者</th>
                        <th scope="col">主題</th>
                        <th scope="col">時間</th>
                        <th scope="col" class='content' style="overflow:hidden">內容</th>
                        <th scope="col">修改</th>
                    </tr>
                </thead>
                <tbody>
                                        <tr>
                        <th scope="row">callmebaby</th>
                        <td>大吉大利明天吃雞</td>
                        <td>2020-01-16 17:37:10</td>
                        <td class='content' style="overflow:hidden">
                            <form action='modifyContent.php' method='POST'>
                            <input type='hidden' name='contentID' value="104">
                            <input type='text' name='content' id="104" value="吃">
                        </td>
                        <td>
                            <button type='submit' class="btn btn-outline-primary">修改內容</button>
                            </form><button class="btn btn-outline-warning" onclick='Delete(104)'>刪除</button>
                        </td>
                    </tr>
                                        <tr>
                        <th scope="row">Sarah princess</th>
                        <td>RE.大吉大利明天吃雞</td>
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
                        <th scope="row">GM</th>
                        <td>請勿人身攻擊</td>
                        <td>2020-01-16 10:13:10</td>
                        <td class='content' style="overflow:hidden">
                            <form action='modifyContent.php' method='POST'>
                            <input type='hidden' name='contentID' value="107">
                            <input type='text' name='content' id="107" value="小心ban你">
                        </td>
                        <td>
                            <button type='submit' class="btn btn-outline-primary">修改內容</button>
                            </form><button class="btn btn-outline-warning" onclick='Delete(107)'>刪除</button>
                        </td>
                    </tr>
                                        <tr>
                        <th scope="row">GM</th>
                        <td>RE.大吉大利明天吃雞</td>
                        <td>2020-01-16 10:13:29</td>
                        <td class='content' style="overflow:hidden">
                            <form action='modifyContent.php' method='POST'>
                            <input type='hidden' name='contentID' value="108">
                            <input type='text' name='content' id="108" value="請勿人身攻擊">
                        </td>
                        <td>
                            <button type='submit' class="btn btn-outline-primary">修改內容</button>
                            </form><button class="btn btn-outline-warning" onclick='Delete(108)'>刪除</button>
                        </td>
                    </tr>
                                        <tr>
                        <th scope="row">GM</th>
                        <td>號外號外</td>
                        <td>2020-01-16 10:40:08</td>
                        <td class='content' style="overflow:hidden">
                            <form action='modifyContent.php' method='POST'>
                            <input type='hidden' name='contentID' value="109">
                            <input type='text' name='content' id="109" value="即日起儲100 送1000
心動不如馬上行動">
                        </td>
                        <td>
                            <button type='submit' class="btn btn-outline-primary">修改內容</button>
                            </form><button class="btn btn-outline-warning" onclick='Delete(109)'>刪除</button>
                        </td>
                    </tr>
                                        <tr>
                        <th scope="row">Sarah princess</th>
                        <td>今天天氣差</td>
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
                        <th scope="row">callmebaby</th>
                        <td>RE.今天天氣差</td>
                        <td>2020-01-17 02:53:26</td>
                        <td class='content' style="overflow:hidden">
                            <form action='modifyContent.php' method='POST'>
                            <input type='hidden' name='contentID' value="111">
                            <input type='text' name='content' id="111" value="哭屁哭">
                        </td>
                        <td>
                            <button type='submit' class="btn btn-outline-primary">修改內容</button>
                            </form><button class="btn btn-outline-warning" onclick='Delete(111)'>刪除</button>
                        </td>
                    </tr>
                                        <tr>
                        <th scope="row">Sarah princess</th>
                        <td>RE.今天天氣差</td>
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
                        <th scope="row">callmebaby</th>
                        <td>嗐</td>
                        <td>2020-01-17 02:58:28</td>
                        <td class='content' style="overflow:hidden">
                            <form action='modifyContent.php' method='POST'>
                            <input type='hidden' name='contentID' value="113">
                            <input type='text' name='content' id="113" value="瞎">
                        </td>
                        <td>
                            <button type='submit' class="btn btn-outline-primary">修改內容</button>
                            </form><button class="btn btn-outline-warning" onclick='Delete(113)'>刪除</button>
                        </td>
                    </tr>
                                        <tr>
                        <th scope="row">callmebaby</th>
                        <td>RE.嗐</td>
                        <td>2020-01-17 02:58:45</td>
                        <td class='content' style="overflow:hidden">
                            <form action='modifyContent.php' method='POST'>
                            <input type='hidden' name='contentID' value="114">
                            <input type='text' name='content' id="114" value="真瞎">
                        </td>
                        <td>
                            <button type='submit' class="btn btn-outline-primary">修改內容</button>
                            </form><button class="btn btn-outline-warning" onclick='Delete(114)'>刪除</button>
                        </td>
                    </tr>
                                    </tbody>
            </table>
                            <nav aria-label="Page navigation example">
                    <ul class="pagination">
                                                <li class="page-item"><a class="page-link" href="?page=1">1</a></li>
                                                <li class="page-item"><a class="page-link" href="?page=2">2</a></li>
                                          
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
