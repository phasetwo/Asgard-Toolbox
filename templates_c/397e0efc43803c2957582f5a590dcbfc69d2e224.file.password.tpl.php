<?php /* Smarty version Smarty-3.1.14, created on 2013-08-08 13:46:34
         compiled from ".\templates\password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134175203851a78a447-55314286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '397e0efc43803c2957582f5a590dcbfc69d2e224' => 
    array (
      0 => '.\\templates\\password.tpl',
      1 => 1375393374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134175203851a78a447-55314286',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'output' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5203851a802076_00199874',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5203851a802076_00199874')) {function content_5203851a802076_00199874($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


            <div class="container">
				
                <h1>
                    Password Protection
                </h1>

		<div class="alert alert-info">  
		  <a class="close" data-dismiss="alert">x</a>  
		  <strong>Information</strong> These contents are still under development. To continue, please enter your password.
		</div>
		
		<form method="post" action="index.php<?php if ($_GET['action']){?>?action=<?php echo $_GET['action'];?>
<?php }?>">
		<input type="password" name="password" class="input-block-level" />
		<p><input type="submit" class="btn btn-primary" /></p>
		</form>
				
				<?php echo $_smarty_tpl->tpl_vars['output']->value;?>

				
            </div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>