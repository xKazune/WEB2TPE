<?php
/* Smarty version 4.2.1, created on 2023-10-18 23:59:29
  from 'C:\xampp\htdocs\WEB2TPE\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65305541afcde7_90882997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdfdbb5a00d5e4b0519ff691cbbaa6d1013fc8b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2TPE\\templates\\header.tpl',
      1 => 1697666364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65305541afcde7_90882997 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php echo BASE_URL;?>
">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>
css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">


    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>
<body>
    <header>
        <navbar class="row border border-4 m-1 d-flex justify-content-center">
            <h1 class=""><span class="text-success">My</span> <span class="text-warning">Game</span> <span class="text-danger"> List</span>  </h1>
            <div class="h-100 mx-3"><a href="<?php echo (BASE_URL).('login');?>
"><button class="h-100">Iniciar Sesion</button></a></div>
        </navbar>
    </header>
<?php }
}
