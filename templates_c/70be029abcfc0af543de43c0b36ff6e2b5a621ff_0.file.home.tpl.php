<?php
/* Smarty version 4.2.1, created on 2023-10-18 05:32:07
  from 'C:\xampp\htdocs\WEB2TPE\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652f51b75e97a8_97903038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70be029abcfc0af543de43c0b36ff6e2b5a621ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2TPE\\templates\\home.tpl',
      1 => 1697599925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer2.tpl' => 1,
  ),
),false)) {
function content_652f51b75e97a8_97903038 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('titulo'=>"Home - Personas"), 0, false);
?>
    <h1>Games List</h1>

    <div class="container table-responsive" >
        <table class = "table table-bordered bg-info">
            <thead>
                <th>Games</th>
                <th>Genre</th>
                <th>Year</th>
                <th>Score</th>
                <th>Company</th>
            </thead>
            <tbody>
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
            </tbody>
        </table>


        <table class = "table table-bordered bg-info">
            <thead>
                <th>Company List</th>
            </thead>
            <tbody>
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
            </tbody>
        </table>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:footer2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
