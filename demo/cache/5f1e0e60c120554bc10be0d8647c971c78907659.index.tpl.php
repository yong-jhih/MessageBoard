<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-20 08:51:46
  from 'C:\xampp\htdocs\coding\guestbook\demo\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4e3a92c6e2e3_85153718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb7bda8a00003dcb36a0b75bc0c0724146a12f94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\coding\\guestbook\\demo\\templates\\index.tpl',
      1 => 1580869928,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_5e4e3a92c6e2e3_85153718 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>guestbook</title>
    <script src="js/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="../bootstrap-4.4.1-dist\css\bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
</head>
<body>
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">會員登入</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="checkpwd.php">
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">帳號</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="staticEmail" name="memberAC" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">密碼</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword" name="memberPW" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
                            <button type="submit" class="btn btn-primary">登入</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <hr>
        <div class="container">
        <div class="accordion" id="accordionExample">
                                            <div class="card">
                    <div class="card-header" id="headingOne" style="block-inline">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse125" aria-expanded="true" aria-controls="collapse125">
                                <h4>123</h4>
                            </button>
                        </h2>
                        <div>
                            <div style="text-align:right">Sarah princess  於  2020-02-04 07:19:59  發表</div>
                        </div>
                    </div>
                                        <div id="collapse125" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body" style="display:flex">
                                                                                        <div class="col-sm-12" style="height:300px;padding:10px;overflow:scroll">
                                    <h5 style="margin:0px">
                                                                                                                <img src="upload/5320200130090400123.jpg" style="width:auto;height:30px" title="Sarah princess"> said:
                                                                        <p class="text-break mt-1">123<p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                    </div>
                                                <div style="text-align:center">
                            <form action="reply.php" method="post">
                                <div>
                                                                        <input type="text" class="col-sm-11" name="reply" disabled required>
                                                                        <button type="submit" class='btn btn-outline-primary' style="margin-left:10px;margin-bottom:10px">submit</button>
                                </div>
                                <input type='text' name='subID' value="125" hidden>
                                <input type='text' name='subject' value="RE.123" hidden>
                            </form>
                        </div>
                    </div>
                </div>
                                            <div class="card">
                    <div class="card-header" id="headingOne" style="block-inline">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse124" aria-expanded="true" aria-controls="collapse124">
                                <h4>123</h4>
                            </button>
                        </h2>
                        <div>
                            <div style="text-align:right">Sarah princess  於  2020-02-04 07:19:40  發表</div>
                        </div>
                    </div>
                                        <div id="collapse124" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body" style="display:flex">
                                                                                        <div class="col-sm-12" style="height:300px;padding:10px;overflow:scroll">
                                    <h5 style="margin:0px">
                                                                                                                <img src="upload/5320200130090400123.jpg" style="width:auto;height:30px" title="Sarah princess"> said:
                                                                        <p class="text-break mt-1">2133333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333
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
1<p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                    </div>
                                                <div style="text-align:center">
                            <form action="reply.php" method="post">
                                <div>
                                                                        <input type="text" class="col-sm-11" name="reply" disabled required>
                                                                        <button type="submit" class='btn btn-outline-primary' style="margin-left:10px;margin-bottom:10px">submit</button>
                                </div>
                                <input type='text' name='subID' value="124" hidden>
                                <input type='text' name='subject' value="RE.123" hidden>
                            </form>
                        </div>
                    </div>
                </div>
                                            <div class="card">
                    <div class="card-header" id="headingOne" style="block-inline">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse123" aria-expanded="true" aria-controls="collapse123">
                                <h4>sfbsfbsfb</h4>
                            </button>
                        </h2>
                        <div>
                            <div style="text-align:right">GM  於  2020-01-20 04:37:35  發表</div>
                        </div>
                    </div>
                                        <div id="collapse123" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body" style="display:flex">
                                                                                        <div class="col-sm-12" style="height:300px;padding:10px;overflow:scroll">
                                    <h5 style="margin:0px">
                                                                                                                <img src="upload/020200117044845GM.png" style="width:auto;height:30px" title="GM"> said:
                                                                        <p class="text-break mt-1">sfbsbsbs<p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                    </div>
                                                <div style="text-align:center">
                            <form action="reply.php" method="post">
                                <div>
                                                                        <input type="text" class="col-sm-11" name="reply" disabled required>
                                                                        <button type="submit" class='btn btn-outline-primary' style="margin-left:10px;margin-bottom:10px">submit</button>
                                </div>
                                <input type='text' name='subID' value="123" hidden>
                                <input type='text' name='subject' value="RE.sfbsfbsfb" hidden>
                            </form>
                        </div>
                    </div>
                </div>
                                            <div class="card">
                    <div class="card-header" id="headingOne" style="block-inline">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse122" aria-expanded="true" aria-controls="collapse122">
                                <h4>strhsrsrt</h4>
                            </button>
                        </h2>
                        <div>
                            <div style="text-align:right">GM  於  2020-01-20 04:31:01  發表</div>
                        </div>
                    </div>
                                        <div id="collapse122" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body" style="display:flex">
                                                                                        <div class="col-sm-12" style="height:300px;padding:10px;overflow:scroll">
                                    <h5 style="margin:0px">
                                                                                                                <img src="upload/020200117044845GM.png" style="width:auto;height:30px" title="GM"> said:
                                                                        <p class="text-break mt-1">strhrsthsrth<p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                    </div>
                                                <div style="text-align:center">
                            <form action="reply.php" method="post">
                                <div>
                                                                        <input type="text" class="col-sm-11" name="reply" disabled required>
                                                                        <button type="submit" class='btn btn-outline-primary' style="margin-left:10px;margin-bottom:10px">submit</button>
                                </div>
                                <input type='text' name='subID' value="122" hidden>
                                <input type='text' name='subject' value="RE.strhsrsrt" hidden>
                            </form>
                        </div>
                    </div>
                </div>
                                            <div class="card">
                    <div class="card-header" id="headingOne" style="block-inline">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse121" aria-expanded="true" aria-controls="collapse121">
                                <h4>rtshtrsrh</h4>
                            </button>
                        </h2>
                        <div>
                            <div style="text-align:right">GM  於  2020-01-20 04:30:50  發表</div>
                        </div>
                    </div>
                                        <div id="collapse121" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body" style="display:flex">
                                                                                        <div class="col-sm-12" style="height:300px;padding:10px;overflow:scroll">
                                    <h5 style="margin:0px">
                                                                                                                <img src="upload/020200117044845GM.png" style="width:auto;height:30px" title="GM"> said:
                                                                        <p class="text-break mt-1">strhrthsrth<p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                    </div>
                                                <div style="text-align:center">
                            <form action="reply.php" method="post">
                                <div>
                                                                        <input type="text" class="col-sm-11" name="reply" disabled required>
                                                                        <button type="submit" class='btn btn-outline-primary' style="margin-left:10px;margin-bottom:10px">submit</button>
                                </div>
                                <input type='text' name='subID' value="121" hidden>
                                <input type='text' name='subject' value="RE.rtshtrsrh" hidden>
                            </form>
                        </div>
                    </div>
                </div>
                    </div>
                <nav aria-label="Page navigation example">
            <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="?page=1">1</a></li>
                                    <li class="page-item"><a class="page-link" href="?page=2">2</a></li>
                                    <li class="page-item"><a class="page-link" href="?page=3">3</a></li>
                                  
            </ul>
        <nav>
    </div>

        <div class="container">
        <table style="width:100%;margin:auto">
            <tr style="background-color:#0084CA;text-align:center">
                <td colspan="2">
                    <h5 style="color:#FFFFFF" id="enter">請在此輸入新的留言</h5>
                </td>
            </tr>
            <tr style="background-color:#D9F2FF;text-align:center">
                <td width="10%">發文者</td>
                    <td width='85%'><input class="form-control" id='author' name='author' readonly type='text' size='50'></td>
            </tr>
            <form name="myForm" method="post" action="post.php" enctype="multipart/form-data">
                <tr style="background-color:#84D7FF;text-align:center">
                    <td width="10%">主題</td>
                    <td width="85%"><input class="form-control" id='subject' name="subject" type="text" size="50"></td>
                </tr>
                <tr style="background-color:#D9F2FF;text-align:center">
                    <td width="10%">內容</td>
                    <td width="85%"><textarea class="form-control" id='content' name="content" cols="50" rows="5"></textarea></td>
                </tr>
                <tr style="background-color:#84D7FF;">
                    <td width="10%">上傳圖片</td>
                    <td width="85%"><input id='img' name="img" type="file" accept=".image,.jpg,.jpeg,.png,.gif"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center;padding:10px">
                        <input type="button" value="張貼留言" class='btn btn-outline-primary' onClick="checkForm()">
                        <input type="reset" class='btn btn-outline-primary' value="重新輸入">
                    </td>
                </tr>
            </form>
        </table>
    </div>
    
    <script type="text/javascript">
        let passed ;
        let cookie = document.cookie.split(" ") ;
        if(cookie.length>1){
            passed = true ;
            var memberName = cookie[1].split("=")[1].replace("+"," ");
            document.getElementById('author').value = memberName.substring(0,memberName.length-1) ;
        }else{
            passed = false ;
        }
        function checkMember() {
            document.getElementById('author').disabled = !passed;
            document.getElementById('subject').disabled = !passed;
            document.getElementById('content').disabled = !passed;
            document.getElementById('enter').innerHTML = passed ? "請在此輸入新的留言" : "如要留言請先登入會員";
        }checkMember();
        function checkForm() {
            if (document.myForm.author.value.length == 0) {
                alert("請留名字");
            } else if (document.myForm.subject.value.length == 0) {
                alert("請給主題");
            } else if (document.myForm.content.value.length == 0) {
                alert("請給內容");
            } else {
                myForm.submit();
            }
        }
    </script>

</body>
</html><?php }
}
