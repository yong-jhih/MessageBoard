<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-09 08:51:17
  from 'C:\xampp\htdocs\coding\MessageBoard\demo\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb652e561a770_30586193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bec0dc7a25ba35355d3305d1bee384e0819c4b0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\coding\\MessageBoard\\demo\\templates\\index.tpl',
      1 => 1588350789,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb652e561a770_30586193 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>guestbook</title>
    <?php echo '<script'; ?>
 src="js/jquery-3.4.1.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="../bootstrap-4.4.1-dist\css\bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    <?php echo '</script'; ?>
>
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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post_array']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
                                <div class="card">
                    <div class="card-header" id="headingOne" style="block-inline">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $_smarty_tpl->tpl_vars['post']->value['postID'];?>
" aria-expanded="true" aria-controls="collapse<?php echo $_smarty_tpl->tpl_vars['post']->value['postID'];?>
">
                                <h4><?php echo $_smarty_tpl->tpl_vars['post']->value['subject'];?>
</h4>
                            </button>
                        </h2>
                        <div>
                            <div style="text-align:right"><?php echo $_smarty_tpl->tpl_vars['post']->value['memberName'];?>
  於  <?php echo $_smarty_tpl->tpl_vars['post']->value['date'];?>
  發表</div>
                        </div>
                    </div>
                                        <div id="collapse<?php echo $_smarty_tpl->tpl_vars['post']->value['postID'];?>
" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body" style="display:flex">
                                                        <?php if ($_smarty_tpl->tpl_vars['post']->value['img']) {?> 
                                <div class="col-sm-6" style="height:300px;"><img src="<?php echo $_smarty_tpl->tpl_vars['post']->value['img'];?>
" style="display: block;width: auto;height: 100%;" ></div>
                                <div class="col-sm-6" style="height:300px;padding:10px;margin-left:5px;overflow:scroll">
                                    <h5 style="margin:0px">
                                                                                <?php if ($_smarty_tpl->tpl_vars['post']->value['Face']) {?>
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['post']->value['Face'];?>
" style="width:auto;height:30px" title="<?php echo $_smarty_tpl->tpl_vars['post']->value['memberName'];?>
"> said:
                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->tpl_vars['post']->value['memberName'];?>
 said:
                                        <?php }?>
                                    </h5>
                                    <p class="text-break mt-1"><?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
<p>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reply_array']->value, 'reply');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['reply']->value) {
?>
                                                                                <?php if ($_smarty_tpl->tpl_vars['reply']->value['subID'] == $_smarty_tpl->tpl_vars['post']->value['postID']) {?>
                                            <h5 style="margin:0px">
                                            <?php if ($_smarty_tpl->tpl_vars['reply']->value['Face']) {?>
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['reply']->value['Face'];?>
" style="width:auto;height:30px" title="<?php echo $_smarty_tpl->tpl_vars['reply']->value['memberName'];?>
"> said:
                                            <?php } else { ?>
                                                <?php echo $_smarty_tpl->tpl_vars['reply']->value['memberName'];?>
 said:
                                            <?php }?>
                                            </h5>
                                            <p class="text-break mt-1"><?php echo $_smarty_tpl->tpl_vars['reply']->value['content'];?>
<p>
                                        <?php }?>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                                                        <?php } else { ?>
                                <div class="col-sm-12" style="height:300px;padding:10px;overflow:scroll">
                                    <h5 style="margin:0px">
                                                                        <?php if ($_smarty_tpl->tpl_vars['post']->value['Face']) {?>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['post']->value['Face'];?>
" style="width:auto;height:30px" title="<?php echo $_smarty_tpl->tpl_vars['post']->value['memberName'];?>
"> said:
                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->tpl_vars['post']->value['memberName'];?>
 said:
                                    <?php }?>
                                    <p class="text-break mt-1"><?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
<p>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reply_array']->value, 'reply');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['reply']->value) {
?>
                                        <?php if ($_smarty_tpl->tpl_vars['reply']->value['subID'] == $_smarty_tpl->tpl_vars['post']->value['postID']) {?>
                                            <h5 style="margin:0px">
                                                                                        <?php if ($_smarty_tpl->tpl_vars['reply']->value['Face']) {?>
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['reply']->value['Face'];?>
" style="width:auto;height:30px" title="<?php echo $_smarty_tpl->tpl_vars['reply']->value['memberName'];?>
"> said:
                                            <?php } else { ?>
                                                <?php echo $_smarty_tpl->tpl_vars['reply']->value['memberName'];?>
 said:
                                            <?php }?>
                                            </h5>
                                            <p class="text-break mt-1"><?php echo $_smarty_tpl->tpl_vars['reply']->value['content'];?>
<p>
                                        <?php }?>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            <?php }?>
                        </div>
                                                <div style="text-align:center">
                            <form action="reply.php" method="post">
                                <div>
                                    <?php if ($_smarty_tpl->tpl_vars['passed']->value) {?>
                                    <input type="text" class="col-sm-11" name="reply" required>
                                    <?php } else { ?>
                                    <input type="text" class="col-sm-11" name="reply" disabled required>
                                    <?php }?>
                                    <button type="submit" class='btn btn-outline-primary' style="margin-left:10px;margin-bottom:10px">submit</button>
                                </div>
                                <input type='text' name='subID' value="<?php echo $_smarty_tpl->tpl_vars['post']->value['postID'];?>
" hidden>
                                <input type='text' name='subject' value="RE.<?php echo $_smarty_tpl->tpl_vars['post']->value['subject'];?>
" hidden>
                            </form>
                        </div>
                    </div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
                <!-- <nav aria-label="Page navigation example">
            <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
                                  
            </ul>
        <nav> -->
    </div>

        <div class="container">
        <table style="width:100%;margin:auto">
            <tr style="background-color:#0084CA;text-align:center">
                <td colspan="2">
                    <h5 style="color:#FFFFFF" id="enter"><?php if ($_smarty_tpl->tpl_vars['passed']->value == true) {?>請在此輸入新的留言<?php } else { ?>請登入後留言<?php }?></h5>
                </td>
            </tr>
            <form name="myForm" method="POST" action="post.php" enctype="multipart/form-data">
                <tr style="background-color:#D9F2FF;text-align:center">
                    <td width="10%">發文者</td>
                        <td width='85%'><input class="form-control" id='author' name='author' readonly type='text' size='50' <?php if ($_smarty_tpl->tpl_vars['passed']->value != true) {?>disabled<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['passed']->value == true) {
echo $_smarty_tpl->tpl_vars['memberName']->value;
}?>"></td>
                </tr>
                <tr style="background-color:#84D7FF;text-align:center">
                    <td width="10%">主題</td>
                    <td width="85%"><input class="form-control" id='subject' name="subject" type="text" size="50" <?php if ($_smarty_tpl->tpl_vars['passed']->value != true) {?>disabled<?php }?>></td>
                </tr>
                <tr style="background-color:#D9F2FF;text-align:center">
                    <td width="10%">內容</td>
                    <td width="85%"><textarea class="form-control" id='content' name="content" cols="50" rows="5" <?php if ($_smarty_tpl->tpl_vars['passed']->value != true) {?>disabled<?php }?>></textarea></td>
                </tr>
                <tr style="background-color:#84D7FF;">
                    <td width="10%">上傳圖片</td>
                    <td width="85%"><input id='img' name="img" type="file" accept=".image,.jpg,.jpeg,.png,.gif" <?php if ($_smarty_tpl->tpl_vars['passed']->value != true) {?>disabled<?php }?>></td>
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
    
    <?php echo '<script'; ?>
 type="text/javascript">
        function checkForm() {
            if (document.getElementById('subject').value == '') {
                alert("請給主題");
            } else if (document.getElementById('content').value == '') {
                alert("請給內容");
            } else {
                myForm.submit();
            }
        }
    <?php echo '</script'; ?>
>

</body>
</html><?php }
}
