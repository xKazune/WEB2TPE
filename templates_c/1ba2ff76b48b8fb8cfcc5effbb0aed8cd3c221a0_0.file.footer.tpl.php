<?php
/* Smarty version 4.2.1, created on 2023-10-17 15:05:36
  from 'C:\xampp\htdocs\WEB2TPE\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652e86a0f05097_02212523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ba2ff76b48b8fb8cfcc5effbb0aed8cd3c221a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2TPE\\templates\\footer.tpl',
      1 => 1697547905,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652e86a0f05097_02212523 (Smarty_Internal_Template $_smarty_tpl) {
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
    <div class="fixed-bottom col-12 mt-3 bg-primary row" style="height: 100px;">
        <div class="col-3 mh-100">
            <a href="<?php echo BASE_URL;?>
"><button class="w-100 h-100">HOME</button></a>
        </div>
        <div class="col-9 d-flex justify-content-end">
            <?php if ($_smarty_tpl->tpl_vars['rol']->value == 'admin') {?>
                <div class="col-8">
                <a href="<?php echo (BASE_URL).('agregar');?>
"><button>Agregar Persona/Telefono</button></a>
                <a href="<?php echo (BASE_URL).('upgradeUser');?>
"><button> Promover usuarios</button></a>
                </div>
            <?php }?>
            <div class="col-4">
                <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
                    <h1>Bienvenido <span id="nombreUsuario"><?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
</span></h1>
                    <a href="<?php echo (BASE_URL).('logout');?>
"><button>Logout</button></a>
                <?php } else { ?>
                    <div class="h-100"><a href="<?php echo (BASE_URL).('login');?>
"><button class="h-100">Iniciar Sesion</button></a></div>
                <?php }?>
            </div>
        </div>
    </div>
</body>
</html><?php }
}
