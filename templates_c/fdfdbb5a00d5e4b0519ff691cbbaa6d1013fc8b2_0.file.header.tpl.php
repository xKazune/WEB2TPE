<?php
/* Smarty version 4.2.1, created on 2023-10-17 18:09:30
  from 'C:\xampp\htdocs\WEB2TPE\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652eb1ba431d95_81535451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdfdbb5a00d5e4b0519ff691cbbaa6d1013fc8b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2TPE\\templates\\header.tpl',
      1 => 1697558963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652eb1ba431d95_81535451 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo (BASE_URL).('css/estilos.css');?>
">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>
<body>
<div class="row border border-4 m-1 d-flex justify-content-center">
    <h1 class=""><span class="text-success">My</span> <span class="text-warning">Game</span> <span class="text-danger"> List</span>  </h1>
</div>
</body>
</html><?php }
}
