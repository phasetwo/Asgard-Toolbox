<?php /* Smarty version Smarty-3.1.14, created on 2013-07-31 16:48:26
         compiled from "./templates/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167375215251f5384d111af1-77690853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '243b1378187b2878c10cdd133ad5f270cdcebcd8' => 
    array (
      0 => './templates/menu.tpl',
      1 => 1375282106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167375215251f5384d111af1-77690853',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51f5384d15dae6_29844253',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f5384d15dae6_29844253')) {function content_51f5384d15dae6_29844253($_smarty_tpl) {?><ul class="nav"><li class="<?php if (!$_GET['action']){?>active<?php }?>"><a href="index.php" class>News</a></li><li class="<?php if ($_GET['action']=="tools"){?>active<?php }?>"><a href="index.php?action=tools" class>Tools</a></li><li class="<?php if ($_GET['action']=="contact"){?>active<?php }?>"><a href="index.php?action=contact" class>Contact</a></li><?php if ($_SESSION['password']){?><li class="<?php if ($_GET['action']=="logout"){?>active<?php }?>"><a href="index.php?action=logout" class>Logout</a></li><?php }?></ul><?php }} ?>