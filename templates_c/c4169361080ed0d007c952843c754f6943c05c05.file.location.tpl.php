<?php /* Smarty version Smarty-3.1.14, created on 2013-07-30 13:24:04
         compiled from "./templates/location.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209336784251f58cf093b118-51710964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4169361080ed0d007c952843c754f6943c05c05' => 
    array (
      0 => './templates/location.tpl',
      1 => 1375183443,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209336784251f58cf093b118-51710964',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51f58cf093f586_53944834',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f58cf093f586_53944834')) {function content_51f58cf093f586_53944834($_smarty_tpl) {?><ul class="breadcrumb"><li><a href="index.php">Home</a> <span class="divider">/</span></li><li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Tools <b class="caret"></b></a><ul class="dropdown-menu"><li><a href="index.php?action=diamond-upping">Diamond Upping Tool</a></li><li><a href="index.php?action=ranking">Ranking</a></li><li><a href="#">Tool 3</a></li><li class="divider"></li><li><a href="index.php?action=tools">Overview</a></li></ul><span class="divider">/</span></li><?php if ($_GET['action']=="diamond-upping"){?><li class="active">Diamond Upping Tool</li><?php }?><?php if ($_GET['action']=="ranking"){?><li class="active">Ranking</li><?php }?></ul><?php }} ?>