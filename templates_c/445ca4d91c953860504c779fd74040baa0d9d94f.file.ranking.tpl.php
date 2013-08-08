<?php /* Smarty version Smarty-3.1.14, created on 2013-08-08 15:03:26
         compiled from ".\templates\ranking.tpl" */ ?>
<?php /*%%SmartyHeaderCode:301065203971eaab374-18364174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '445ca4d91c953860504c779fd74040baa0d9d94f' => 
    array (
      0 => '.\\templates\\ranking.tpl',
      1 => 1375195768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '301065203971eaab374-18364174',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5203971eb18a87_93846649',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5203971eb18a87_93846649')) {function content_5203971eb18a87_93846649($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container"><?php echo $_smarty_tpl->getSubTemplate ("location.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<h1>Ranking</h1><hr /><div class="alert alert-info"><a class="close" data-dismiss="alert">x</a><strong>Information</strong>These rankings are still under development and might be buggy.</div><ul class="nav nav-tabs"><li class="active"><a href="#A" data-toggle="tab">Characters</a></li><li><a href="#B" data-toggle="tab">Guilds</a></li><li class="disabled"><a href="#" data-toggle="tab">Top Levelers</a></li></ul><div class="tabbable"><div class="tab-content"><div class="tab-pane active" id="A"><?php echo $_smarty_tpl->getSubTemplate ("ranking_characters.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div class="tab-pane" id="B"><p>Coming soon!</p></div><div class="tab-pane" id="C"><p>What up girl, this is Section C.</p></div></div></div></div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>