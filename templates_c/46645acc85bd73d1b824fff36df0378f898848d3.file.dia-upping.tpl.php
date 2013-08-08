<?php /* Smarty version Smarty-3.1.14, created on 2013-07-28 17:26:28
         compiled from ".\templates\dia-upping.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3189751f5354306a8b7-35368236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46645acc85bd73d1b824fff36df0378f898848d3' => 
    array (
      0 => '.\\templates\\dia-upping.tpl',
      1 => 1375025187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3189751f5354306a8b7-35368236',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51f535430a1ef0_74692291',
  'variables' => 
  array (
    'output' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f535430a1ef0_74692291')) {function content_51f535430a1ef0_74692291($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <div class="container">
                <h1>
                    Diamond Upping Tool
                </h1>
				<?php if ($_POST['sent']=="true"){?>
					<p>This is your history:</p>
					<?php echo $_smarty_tpl->tpl_vars['output']->value;?>

				<?php }else{ ?>
                <p class="">Please fill in the history of your item in this text box:</p>
				
				<form method="post" action="index.php?action=diamond-upping">
				<textarea name="form[history]" style="width: 100%; height: 120px"></textarea>
				<input type="submit" value="Show my history" />
				<input type="hidden" name="sent" value="true" />
				</form>
				<?php }?>
            </div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>