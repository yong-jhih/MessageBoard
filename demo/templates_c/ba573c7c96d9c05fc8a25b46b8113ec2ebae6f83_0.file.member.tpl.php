<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-10 07:02:20
  from 'C:\xampp\htdocs\coding\MessageBoard\demo\templates\member.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb78adcaf26e7_80282709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba573c7c96d9c05fc8a25b46b8113ec2ebae6f83' => 
    array (
      0 => 'C:\\xampp\\htdocs\\coding\\MessageBoard\\demo\\templates\\member.tpl',
      1 => 1589086259,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb78adcaf26e7_80282709 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php if ($_smarty_tpl->tpl_vars['permission']->value == '1') {?>會員中心<?php } elseif ($_smarty_tpl->tpl_vars['permission']->value == '0') {?>管理中心<?php }?></title>
    <?php echo '<script'; ?>
 src="js/jquery-3.4.1.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="../bootstrap-4.4.1-dist\css\bootstrap.css">
    <?php echo '<script'; ?>
 src="../bootstrap-4.4.1-dist\js\bootstrap.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"><?php echo '</script'; ?>
>
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
                    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['member']->value[4];?>
" Name="oldPath" hidden>
                </form>
                <?php if ($_smarty_tpl->tpl_vars['member']->value[4]) {?>
                <img id="preview_progressbarTW_img" src="<?php echo $_smarty_tpl->tpl_vars['member']->value[4];?>
" style="width:300px;height:auto">
                    <form method="POST" action="modifyFace.php">
                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['member']->value[4];?>
" Name="oldPath" hidden>
                        <input type="text" value="delete" Name="way" hidden>
                        <button type="submit" class="btn btn-primary" style="margin-top:10px">刪除</button>
                    </form>
                <?php } else { ?>
                    <img id="preview_progressbarTW_img" src="#" style="width:300px;height:auto;display:none">
                <?php }?>     
            </div>

                        <form method="POST" action="modifyMember.php">
                <div class="col-md-9 mb-3">
                    <label for="validationServer01">帳號</label>
                    <input type="text" class="form-control" id="validationServer01" name="memberAC" id="newAC" readonly value="<?php echo $_smarty_tpl->tpl_vars['member']->value[0];?>
">
                </div>
                <div class="col-md-9 mb-3">
                    <label for="validationServer02">密碼</label>
                    <input type="password" class="form-control" id="validationServer02" name="memberPW" onblur="checkPW()" required placeholder="<?php echo $_smarty_tpl->tpl_vars['member']->value[1];?>
">
                    <h6 style="visibility: hidden" id="checkPW">.</h6>
                </div>
                <div class="col-md-9 mb-3">
                    <label for="validationServer03">確認密碼</label>
                    <input type="password" class="form-control" id="validationServer03" onblur="reCheckPW()" required>
                    <h6 style="visibility: hidden" id="reCheckPW">.</h6>
                </div>
                <div class="col-md-9 mb-3">
                    <label for="validationServer04">暱稱</label>
                    <input type="text" class="form-control" id="validationServer04" name="memberName" onblur="checkName()" value="<?php echo $_smarty_tpl->tpl_vars['member']->value[2];?>
" required>
                    <h6 style="visibility: hidden" id="checkName">.</h6>
                </div>
                <div class="col-md-9 mb-3">
                    <label for="validationServer05">電子信箱</label>
                    <input type="text" class="form-control" id="validationServer05" name="memberMail" onblur="checkMail()" value="<?php echo $_smarty_tpl->tpl_vars['member']->value[3];?>
" required>
                    <h6 style="visibility: hidden" id="checkMail">.</h6>
                </div>
                <div style="margin:15px" onmouseover="McheckForm()">
                    <button class="btn btn-primary" type="submit" style="margin-right:10px" id="submitBtn" disabled>修改</button>
                </div>
            </form>
        </div>

                <div class="col-md-9" style="position:relative;display:inline-block;margin-top:20px">
            <h4><?php if ($_smarty_tpl->tpl_vars['permission']->value == '1') {?>我的留言<?php } elseif ($_smarty_tpl->tpl_vars['permission']->value == '0') {?>所有留言列表<?php }?></h4>
            <table class="table">
                <thead>
                    <tr>
                        <?php if ($_smarty_tpl->tpl_vars['permission']->value == '0') {?><th scope="col">發文者</th><?php }?>
                        <th scope="col">主題</th>
                        <th scope="col">時間</th>
                        <th scope="col" class='content' style="overflow:hidden">內容</th>
                        <th scope="col">修改</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post_array']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
                    <tr>
                        <?php if ($_smarty_tpl->tpl_vars['permission']->value == '0') {?><th scope="row"><?php echo $_smarty_tpl->tpl_vars['post']->value['memberName'];?>
</th><?php }?>
                        <th scope="row"><?php echo $_smarty_tpl->tpl_vars['post']->value['subject'];?>
</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['post']->value['date'];?>
</td>
                        <td class='content' style="overflow:hidden">
                            <form action='modifyContent.php' method='POST'>
                            <input type='hidden' name='contentID' value="<?php echo $_smarty_tpl->tpl_vars['post']->value['postID'];?>
">
                            <input type='text' name='content' id="<?php echo $_smarty_tpl->tpl_vars['post']->value['postID'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
">
                        </td>
                        <td>
                            <button type='submit' class="btn btn-outline-primary">修改內容</button>
                            </form><button class="btn btn-outline-warning" onclick='Delete(<?php echo $_smarty_tpl->tpl_vars['post']->value['postID'];?>
)'>刪除</button>
                        </td>
                    </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
                            <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
?>
                        <li class="page-item"><a class="page-link" href="?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                  
                    </ul>
                <nav>
        </div>
        <?php echo '<script'; ?>
 src="js/check.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>

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
        <?php echo '</script'; ?>
>
    </div>
</body>
</html><?php }
}
