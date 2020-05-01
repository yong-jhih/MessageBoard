<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-01 14:29:15
  from 'C:\xampp\htdocs\coding\MessegeBoard\demo\templates\chat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eac161baf5319_09685927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aea10bbc37fd0ffde53fcca904fdb8588c55034f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\coding\\MessegeBoard\\demo\\templates\\chat.tpl',
      1 => 1581133379,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eac161baf5319_09685927 (Smarty_Internal_Template $_smarty_tpl) {
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
    </div>
    <?php echo '<script'; ?>
 type="text/javascript">
        let passed ;
        let cookie = document.cookie.split(" ") ;
        if(cookie.length>1){
            passed = true ;
            var memberName = cookie[1].split("=")[1].replace("+"," ");
            document.getElementById('author').value = memberName.substring(0,memberName.length-1) ;
        }else{
            passed = false ;
        }
    <?php echo '</script'; ?>
>

</body>
</html><?php }
}
