<?php /* Smarty version Smarty-3.1.14, created on 2013-08-01 10:31:45
         compiled from "./templates/contact_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181128388151f9138f804af1-73266887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2d06c6b9593b93da1cceef7f574cca2c43cbfaa' => 
    array (
      0 => './templates/contact_form.tpl',
      1 => 1375345904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181128388151f9138f804af1-73266887',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51f9138f80c456_28115071',
  'variables' => 
  array (
    'success' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f9138f80c456_28115071')) {function content_51f9138f80c456_28115071($_smarty_tpl) {?><ul class="nav nav-tabs"><li class="active"><a href="#A" data-toggle="tab">Contact Form</a></li><li><a href="#B" data-toggle="tab">Messenger</a></li></ul><div class="tabbable"><div class="tab-content"><div class="tab-pane active" id="A"><?php if ($_smarty_tpl->tpl_vars['success']->value){?><div class="alert alert-success"><a class="close">&times;</a><strong>Success</strong> <?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['error']->value){?><div class="alert alert-error"><a class="close">&times;</a><strong>Error</strong> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?><?php if (!$_POST['name']||!$_POST['mail']||!$_POST['message']){?><?php if ($_POST['sent']){?><div class="alert alert-error"><a class="close">&times;</a><strong>Error</strong> Please fill out all fields.</div><?php }?><?php }?><form class="form-horizontal well" action="index.php?action=contact" method="post"><h4>Your Name:</h4><input type="text" name="name" class="input-big" value="<?php echo $_POST['message'];?>
" id="input01"><h4>Your Email:</h4><input type="text" name="mail" class="input-medium" value="<?php echo $_POST['mail'];?>
" id="input01"><h4>Type of Request</h4><select multiple="multiple" name="type" id="multiSelect"><option>-</option><option>General Question</option><option>Question About Tools</option><option>How can I get a Supporter?</option><option>Miscellaneous</option></select><h4>Your Message:</h4><textarea name="message" class="input-block-level" rows="3"><?php echo $_POST['message'];?>
</textarea><br /><br /><p><button type="submit" class="btn btn-primary">Send Message</button><button type="reset" class="btn">Cancel</button><input type="hidden" name="sent" value="true" /></p></form><?php }?></div><div class="tab-pane" id="B"><p><strong>Skype:</strong> david.mendek</p></div></div></div><hr /><?php }} ?>