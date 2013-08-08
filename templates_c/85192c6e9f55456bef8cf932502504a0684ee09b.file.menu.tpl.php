<?php /* Smarty version Smarty-3.1.14, created on 2013-08-08 13:46:34
         compiled from ".\templates\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:858251f5323072fcd2-38939333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85192c6e9f55456bef8cf932502504a0684ee09b' => 
    array (
      0 => '.\\templates\\menu.tpl',
      1 => 1375282106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '858251f5323072fcd2-38939333',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51f53230731241_71844725',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f53230731241_71844725')) {function content_51f53230731241_71844725($_smarty_tpl) {?><ul class="nav"><li class="<?php if (!$_GET['action']){?>active<?php }?>"><a href="index.php" class>News</a></li><li class="<?php if ($_GET['action']=="tools"){?>active<?php }?>"><a href="index.php?action=tools" class>Tools</a></li><li class="<?php if ($_GET['action']=="contact"){?>active<?php }?>"><a href="index.php?action=contact" class>Contact</a></li><?php if ($_SESSION['password']){?><li class="<?php if ($_GET['action']=="logout"){?>active<?php }?>"><a href="index.php?action=logout" class>Logout</a></li><?php }?></ul><?php }} ?>