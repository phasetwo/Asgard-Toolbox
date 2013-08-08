<?php /* Smarty version Smarty-3.1.14, created on 2013-07-30 13:34:59
         compiled from "./templates/dia-upping-add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105282774951f58cf9ad0e67-16118409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e55bba970fb4ef8bfba99de92a7d2d6e56fa79fc' => 
    array (
      0 => './templates/dia-upping-add.tpl',
      1 => 1375184097,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105282774951f58cf9ad0e67-16118409',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51f58cf9b67ad0_72589972',
  'variables' => 
  array (
    'code' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f58cf9b67ad0_72589972')) {function content_51f58cf9b67ad0_72589972($_smarty_tpl) {?><h2>Wanna save your result?</h2>No problem. You can share your result, you only got to choose a name for your result.<br />Afterwards we will create a public link for you that can be used to publicize.<br /><br /><ul class="nav nav-tabs"><li class="active"><a href="#A" data-toggle="tab">Save this</a></li><li><a href="#B" data-toggle="tab">Get my code</a></li><li class="disabled"><a href="#C" data-toggle="tab">Create Graph</a></li></ul><div class="tabbable"><div class="tab-content"><div class="tab-pane active" id="A"><form class="form-horizontal well"><h4>Your name:</h4><input type="text" class="input-small" id="input01"><h4>What kind of item:</h4><select multiple="multiple" id="multiSelect"><option>-</option><option>Weapon</option><option>Armor</option><option>Amulet</option><option>Ring</option></select><br /><br /><p><button type="submit" class="btn btn-primary">Save changes</button><button type="reset" class="btn">Cancel</button></p></form></div><div class="tab-pane" id="B"><p><strong>Here is your code:</strong></p><div style="word-break: break-all"><?php echo $_smarty_tpl->tpl_vars['code']->value;?>
</div></div></div><a name="A"></a><a name="B"></a></div><hr /><?php }} ?>