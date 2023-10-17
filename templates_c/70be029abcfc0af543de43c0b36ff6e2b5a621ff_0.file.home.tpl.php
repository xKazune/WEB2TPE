<?php
/* Smarty version 4.2.1, created on 2023-10-17 21:07:13
  from 'C:\xampp\htdocs\WEB2TPE\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652edb61303082_60869240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70be029abcfc0af543de43c0b36ff6e2b5a621ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2TPE\\templates\\home.tpl',
      1 => 1697569602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer2.tpl' => 1,
  ),
),false)) {
function content_652edb61303082_60869240 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('titulo'=>"Home - Personas"), 0, false);
?>
    <h1>Games List</h1>
        <table>
            <thead>
                <th>Games</th>
                <th>Genre</th>
                <th>Year</th>
                <th>Score</th>
                <th>Company</th>
            </thead>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['games']->value, 'game');
$_smarty_tpl->tpl_vars['game']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
$_smarty_tpl->tpl_vars['game']->do_else = false;
?>
            <tr>
                <td> <?php echo $_smarty_tpl->tpl_vars['game']->value->game_name;?>
 </td>
                <td> <?php echo $_smarty_tpl->tpl_vars['game']->value->genre;?>
 </td>
                <td> <?php echo $_smarty_tpl->tpl_vars['game']->value->year;?>
 </td>
                <td> <?php echo $_smarty_tpl->tpl_vars['game']->value->score;?>
 </td>
                <td> <?php echo $_smarty_tpl->tpl_vars['game']->value->company_name;?>
 </td>
            </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <table>
            <thead>
                <th>Company List</th>
            </thead>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['compa']->value, 'company');
$_smarty_tpl->tpl_vars['company']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['company']->value) {
$_smarty_tpl->tpl_vars['company']->do_else = false;
?>
            <tr>
                <td> <?php echo $_smarty_tpl->tpl_vars['company']->value->company_name;?>
 </td>
            </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    <?php $_smarty_tpl->_subTemplateRender("file:footer2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
