<?php /* Smarty version Smarty-3.1.14, created on 2013-07-30 13:33:54
         compiled from "./templates/dia-upping.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143015624051f538511c6612-39171140%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcae456ffd21365144e88de4859b7e800ac3fd03' => 
    array (
      0 => './templates/dia-upping.tpl',
      1 => 1375184033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143015624051f538511c6612-39171140',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51f538512963b9_89598731',
  'variables' => 
  array (
    'error' => 0,
    'info' => 0,
    'output' => 0,
    'quotes' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f538512963b9_89598731')) {function content_51f538512963b9_89598731($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container"><?php echo $_smarty_tpl->getSubTemplate ("location.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<h1>Diamond Upping Tool</h1><?php if ($_POST['sent']=="true"&&!$_smarty_tpl->tpl_vars['error']->value){?><p class=""></p><div class="alert alert-success"><a class="close">&times;</a><strong>Success</strong> Your history was filled in correctly, here is your result:</div><?php if ($_smarty_tpl->tpl_vars['info']->value){?><div class="alert alert-information"><a class="close">&times;</a><strong>Possible problem detected</strong> <?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</div><?php }?><?php echo $_smarty_tpl->getSubTemplate ("dia-upping-add.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<h2>This is your result</h2><?php echo $_smarty_tpl->tpl_vars['output']->value;?>
<p><?php if ($_smarty_tpl->tpl_vars['quotes']->value['win']>$_smarty_tpl->tpl_vars['quotes']->value['loss']){?><span class="btn btn-success btn-small">Lucky item!</span>This item has had an average up-change of <strong><?php echo $_smarty_tpl->tpl_vars['quotes']->value['win'];?>
%</strong>.<?php }else{ ?><span class="btn btn-warning btn-small">Unlucky item!</span><i class="icon-warning-sign icon-white"></i> This item has had an average plus loss of <strong><?php echo $_smarty_tpl->tpl_vars['quotes']->value['loss'];?>
%</strong>.<?php }?></p><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['error']->value){?><div class="alert alert-error"><a class="close">&times;</a><strong>Error</strong> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?><p class="">Please fill in the history of your item in this text box:</p><form method="post" action="index.php?action=diamond-upping"><textarea name="form[history]" class="input-block-level" rows="3"></textarea><br /><input type="submit" value="Show my history" class="btn btn-primary" /><input type="hidden" name="sent" value="true" /></form><?php }?></div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>