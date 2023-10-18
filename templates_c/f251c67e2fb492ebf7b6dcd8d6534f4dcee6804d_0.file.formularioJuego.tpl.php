<?php
/* Smarty version 4.2.1, created on 2023-10-18 23:54:48
  from 'C:\xampp\htdocs\WEB2TPE\templates\formularioJuego.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_653054285fa172_03735250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f251c67e2fb492ebf7b6dcd8d6534f4dcee6804d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2TPE\\templates\\formularioJuego.tpl',
      1 => 1697666079,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer2.tpl' => 1,
  ),
),false)) {
function content_653054285fa172_03735250 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('titulo'=>"Home - Personas"), 0, false);
?>
    <div class="row col-12 d-flex justify-content-center">
    <div class="col-12">
        <h1 class="text-center m-4">Agregar Juego</h1>
    </div>
    <form action="agregarJuego" method="POST" class="form-group " enctype="multipart/form-data">
        <div class="col-12 mb-3">
            <input type="text" name="gameName" placeholder="Game Name" required>
            <input type="text" name="genre" placeholder="Genre" required>
            <input type="text" name="year" placeholder="Year" required>
            <input type="text" name="score" placeholder="Score" required>
        </div>
        <span>Companys:</span><select name="company" class="custom-select mb-3">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['company']->value, 'compa');
$_smarty_tpl->tpl_vars['compa']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['compa']->value) {
$_smarty_tpl->tpl_vars['compa']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['compa']->value->company_ID;?>
"><?php echo $_smarty_tpl->tpl_vars['compa']->value->company_name;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <input class="text-center m-4" type="submit" value="Agregar">
    </form>
</div>
    <div class="col-12">
        <h1 class="text-center m-4">Agregar Compania</h1>
    </div>
    <form action="agregarCompania" method="POST" class="form-group " enctype="multipart/form-data">
        <div class="col-12 mb-3">
            <input type="text" name="companyName" placeholder="Company Name" required>
        </div>
        <input class="text-center m-4" type="submit" value="Agregar">
    </form>
    <?php $_smarty_tpl->_subTemplateRender("file:footer2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
