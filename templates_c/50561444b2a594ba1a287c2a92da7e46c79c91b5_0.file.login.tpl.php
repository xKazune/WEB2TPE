<?php
/* Smarty version 4.2.1, created on 2023-10-17 22:17:41
  from 'C:\xampp\htdocs\WEB2TPE\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652eebe52d26e3_51318331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50561444b2a594ba1a287c2a92da7e46c79c91b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2TPE\\templates\\login.tpl',
      1 => 1697573816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer2.tpl' => 1,
  ),
),false)) {
function content_652eebe52d26e3_51318331 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('titulo'=>"Home - Personas"), 0, false);
?>
    <div class="d-flex row justify-content-center">
        <div class="col-6 border border-3">
            <form action="loguear" method="POST" class="form-group">
            <h1>Nombre de usuario</h1>
            <input type="text" name="username" placeholder="UserName" required> 
            <h1>Contraseña</h1>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="login">
            </form>
            <a href="<?php echo (BASE_URL).('registrar');?>
"><button>Registrarse</button></a>
        </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
