<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-04 07:25:51
  from 'C:\xampp\htdocs\coding\guestbook\demo\templates\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e390e6f3c8a27_24251309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb179ef5a467c51874b32e0bae4d205d129391e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\coding\\guestbook\\demo\\templates\\search.tpl',
      1 => 1580797548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e390e6f3c8a27_24251309 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '13177412285e390e6f394a63_42874123';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>搜尋</title>
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
    <style>
        .content {
            width: 200px;
        }
    </style>
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
    
        <?php if ($_smarty_tpl->tpl_vars['records']->value) {?>
        <p>查詢結果:共有<?php echo $_smarty_tpl->tpl_vars['records']->value;?>
筆資料</p>
        <div>
            <div>
            <h4>留言列表</h4>
                <table class="table" style="text-align:center">
                    <thead>
                        <tr>
                            <th scope="col" style="width:100px">前往</th>
                            <th scope="col" style="width:100px">留言者</th>
                            <th scope="col" style="width:100px">主題</th>
                            <th scope="col" style="width:100px">時間</th>
                            <th scope="col" style="width:50%;overflow:hidden">內容</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post_array']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
                        <tr>
                        <form action="index.php" method="POST">
                            <input type="text" name="postID" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['postID'];?>
" hidden>
                            <input type="text" name="subID" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['subID'];?>
" hidden>
                            <input type="text" name="type" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['type'];?>
" hidden>
                            <td><button type="submit" class="btn btn-outline-success my-2 my-sm-0">前往</button></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['post']->value['memberName'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['post']->value['subject'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['post']->value['date'];?>
</td>
                            <td class='content text-break' style="overflow:hidden"><?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
</td>
                        </form>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php } else { ?>
        <p>查無結果:請重新確認查詢資料</p>
    <?php }?>
</body>
</html><?php }
}
