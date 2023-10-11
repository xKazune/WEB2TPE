<?php
/* Smarty version 4.2.1, created on 2023-10-12 01:11:40
  from 'C:\xampp\htdocs\WEB2TPE\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65272bac77e637_66441619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70be029abcfc0af543de43c0b36ff6e2b5a621ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2TPE\\templates\\home.tpl',
      1 => 1697065899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65272bac77e637_66441619 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        Hello World!
    </h1>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['games']->value, 'game');
$_smarty_tpl->tpl_vars['game']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
$_smarty_tpl->tpl_vars['game']->do_else = false;
?>
        <h1 ><?php echo (($_smarty_tpl->tpl_vars['game']->value->Game_name).(" ")).($_smarty_tpl->tpl_vars['game']->value->Genre);?>
</h1>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</body>
</html><?php }
}
