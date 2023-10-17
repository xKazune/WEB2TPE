<?php
/* Smarty version 4.2.1, created on 2023-10-17 21:44:06
  from 'C:\xampp\htdocs\WEB2TPE\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652ee4068f2770_83673378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50561444b2a594ba1a287c2a92da7e46c79c91b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2TPE\\templates\\login.tpl',
      1 => 1697571845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer2.tpl' => 1,
  ),
),false)) {
function content_652ee4068f2770_83673378 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('titulo'=>"Home - Personas"), 0, false);
?>
<div class=formLogin>
   <form>
     <div class="mb-3">
       <label for="exampleInputEmail1" class="form-label">Username</label>
       <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
     </div>
     <div class="mb-3">
       <label for="exampleInputPassword1" class="form-label">Password</label>
       <input type="password" class="form-control" id="exampleInputPassword1">
     </div>
     <div class="mb-3 form-check">
       <input type="checkbox" class="form-check-input" id="exampleCheck1">
       <label class="form-check-label" for="exampleCheck1">Check me out</label>
     </div>
     <button type="submit" class="btn btn-primary">Submit</button>
   </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
