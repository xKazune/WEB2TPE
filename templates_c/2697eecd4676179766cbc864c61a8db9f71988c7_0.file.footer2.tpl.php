<?php
/* Smarty version 4.2.1, created on 2023-10-17 21:10:50
  from 'C:\xampp\htdocs\WEB2TPE\templates\footer2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652edc3ac99667_04511986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2697eecd4676179766cbc864c61a8db9f71988c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2TPE\\templates\\footer2.tpl',
      1 => 1697569848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652edc3ac99667_04511986 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo (BASE_URL).('css/estilos.css');?>
">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="fixed-bottom col-12 mt-3 row footer" style="height: 50px;">
    <div class="col-12 d-flex justify-content-around">
        <div class=" mh-100 col-3">
            <a href="<?php echo BASE_URL;?>
"><button class="w-100 h-100 display-4"> <i class="fas fa-home"></i> HOME</button></a>
        </div>
            <div class="h-100"><a href="<?php echo (BASE_URL).('login');?>
"><button class="h-100">Iniciar Sesion</button></a></div>
    </div>
    </div>
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/d3b466b5b4.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
