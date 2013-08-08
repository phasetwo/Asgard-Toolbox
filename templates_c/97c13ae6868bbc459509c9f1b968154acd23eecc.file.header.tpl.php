<?php /* Smarty version Smarty-3.1.14, created on 2013-07-31 16:57:42
         compiled from "./templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29308216651f5384d0e39a3-74583664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97c13ae6868bbc459509c9f1b968154acd23eecc' => 
    array (
      0 => './templates/header.tpl',
      1 => 1375282662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29308216651f5384d0e39a3-74583664',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51f5384d10c041_30587733',
  'variables' => 
  array (
    'global' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f5384d10c041_30587733')) {function content_51f5384d10c041_30587733($_smarty_tpl) {?><!DOCTYPE html><html lang="en"><head><meta charset="utf-8"><title>Asgard Toolbox</title><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="description" content="A bunch of tools for Asgard players" /><meta name="author" content="David Mendek"><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script><script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" type="text/javascript"></script><style type="text/css">body {padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */}.fail { color:red }.ok { color:green }.epicfail { color:red; font-weight:700 }</style><link rel="stylesheet" type="text/css" href="./assets/js/jquery/themes/blue/style.css" /><!--<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.0/css/bootstrap-combined.min.css" rel="stylesheet" type="text/css"><link href="http://bootswatch.com/cosmo/bootstrap.min.css" rel="stylesheet" type="text/css" data-bootstrap-theme-name="Cosmo">--><link href="./assets/css/custom.css" rel="stylesheet" type="text/css"><link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet"><link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet"><link rel="apple-touch-icon-precomposed" sizes="144x144" href="./assets/ico/apple-touch-icon-144-precomposed.png"><link rel="apple-touch-icon-precomposed" sizes="114x114" href="./assets/ico/apple-touch-icon-114-precomposed.png"><link rel="apple-touch-icon-precomposed" sizes="72x72" href="./assets/ico/apple-touch-icon-72-precomposed.png"><link rel="apple-touch-icon-precomposed" href="./assets/ico/apple-touch-icon-57-precomposed.png"><link rel="shortcut icon" href="./assets/ico/favicon.png"><script src="./assets/js/jquery/jquery.tablesorter.min.js"></script><script >$(document).ready(function(){$("#sortRanking").tablesorter();});</script></head><body style="cursor: auto;"><div data-mercury="full" id="mercuryblock" style="overflow: visible;"><div class="navbar <?php if ($_SESSION['theme']!="black"){?>navbar-inverse <?php }?>navbar-fixed-top"><div class="navbar-inner"><div class="container"><button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse" style><span class="icon-bar" style></span> <span class="icon-bar" style></span> <span class="icon-bar" style></span></button><a class="brand" href="index.php" style="font-weight: bold;"><img src="./assets/img/logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['global']->value['siteTitle'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['global']->value['siteTitle'];?>
" style="height: 25px; width: auto" /></a><div class="nav-collapse collapse"><?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div></div></div><?php }} ?>