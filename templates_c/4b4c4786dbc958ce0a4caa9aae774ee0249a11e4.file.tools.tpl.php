<?php /* Smarty version Smarty-3.1.14, created on 2013-08-08 14:57:11
         compiled from ".\templates\tools.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2930051f5323073cdc7-76381443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b4c4786dbc958ce0a4caa9aae774ee0249a11e4' => 
    array (
      0 => '.\\templates\\tools.tpl',
      1 => 1375253750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2930051f5323073cdc7-76381443',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51f53230742ff2_28787297',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f53230742ff2_28787297')) {function content_51f53230742ff2_28787297($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container"><h1>Tools</h1><p class="">There are several tools available:</p><p class=""></p><ul><li class="mercury-divhover"><a href="index.php?action=diamond-upping">Diamond Upping Tool</a></li><li class="mercury-divhover"><a href="index.php?action=ranking">Ranking</a></li><li class="activeTag">Tool 3</li></ul></div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>