<?php /* Smarty version Smarty-3.1.14, created on 2013-08-08 15:03:26
         compiled from ".\templates\location.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119795203971eb4b275-87384219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '841f7505ae9cbee5e199bb9b2949074b8b10b80e' => 
    array (
      0 => '.\\templates\\location.tpl',
      1 => 1375183444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119795203971eb4b275-87384219',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5203971eb63cb8_94542882',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5203971eb63cb8_94542882')) {function content_5203971eb63cb8_94542882($_smarty_tpl) {?><ul class="breadcrumb"><li><a href="index.php">Home</a> <span class="divider">/</span></li><li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Tools <b class="caret"></b></a><ul class="dropdown-menu"><li><a href="index.php?action=diamond-upping">Diamond Upping Tool</a></li><li><a href="index.php?action=ranking">Ranking</a></li><li><a href="#">Tool 3</a></li><li class="divider"></li><li><a href="index.php?action=tools">Overview</a></li></ul><span class="divider">/</span></li><?php if ($_GET['action']=="diamond-upping"){?><li class="active">Diamond Upping Tool</li><?php }?><?php if ($_GET['action']=="ranking"){?><li class="active">Ranking</li><?php }?></ul><?php }} ?>