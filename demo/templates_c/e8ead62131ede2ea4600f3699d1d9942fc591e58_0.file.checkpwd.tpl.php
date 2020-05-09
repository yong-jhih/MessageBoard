<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-09 08:53:33
  from 'C:\xampp\htdocs\coding\MessageBoard\demo\templates\checkpwd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb6536d1f4b22_01825953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8ead62131ede2ea4600f3699d1d9942fc591e58' => 
    array (
      0 => 'C:\\xampp\\htdocs\\coding\\MessageBoard\\demo\\templates\\checkpwd.tpl',
      1 => 1588326247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb6536d1f4b22_01825953 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>等待跳轉</title>
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
    <?php if ($_smarty_tpl->tpl_vars['permission']->value == 1) {?>
        <?php echo '<script'; ?>
>setTimeout("window.location.href='member.php'",2000);<?php echo '</script'; ?>
>
    <?php } elseif ($_smarty_tpl->tpl_vars['permission']->value == 0) {?>
        <?php echo '<script'; ?>
>setTimeout("window.location.href='manager.php'",2000);<?php echo '</script'; ?>
>
    <?php } else { ?>
    <?php }?>
</head>
<body>
    <div class="text-center" style="position: absolute;top:46%;left:49%">
        <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
        </div>
    </div>
</body>
</html><?php }
}
