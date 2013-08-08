<?php /* Smarty version Smarty-3.1.14, created on 2013-07-31 08:55:50
         compiled from "./templates/tools.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51044540151f5384f375315-39925145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00e695e77269ac06d3de32821a0bd32cc310ff71' => 
    array (
      0 => './templates/tools.tpl',
      1 => 1375253749,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51044540151f5384f375315-39925145',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51f5384f416725_15510693',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f5384f416725_15510693')) {function content_51f5384f416725_15510693($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container"><h1>Tools</h1><p class="">There are several tools available:</p><p class=""></p><ul><li class="mercury-divhover"><a href="index.php?action=diamond-upping">Diamond Upping Tool</a></li><li class="mercury-divhover"><a href="index.php?action=ranking">Ranking</a></li><li class="activeTag">Tool 3</li></ul></div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>