<?php /* Smarty version Smarty-3.1.14, created on 2013-07-31 16:44:42
         compiled from "./templates/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78307449951f8fe5fe7c826-82171633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a05a7b8b1f5e72808bdcb576f7ec0fe40032c1d7' => 
    array (
      0 => './templates/contact.tpl',
      1 => 1375281880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78307449951f8fe5fe7c826-82171633',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51f8fe60019033_28555491',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f8fe60019033_28555491')) {function content_51f8fe60019033_28555491($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container"><h1>Contact</h1><p>If you wish to contact us, please fill out the following formular. We will respond to your request as soon as possible!</p><?php echo $_smarty_tpl->getSubTemplate ("contact_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>