<?php /* Smarty version Smarty-3.1.14, created on 2013-07-30 16:50:01
         compiled from "./templates/ranking.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87218622951f77265bc42e6-91798790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5f63bdbdc0004d73d0c542359c635e46aa641d1' => 
    array (
      0 => './templates/ranking.tpl',
      1 => 1375195768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87218622951f77265bc42e6-91798790',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51f77265c773c6_17255464',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f77265c773c6_17255464')) {function content_51f77265c773c6_17255464($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container"><?php echo $_smarty_tpl->getSubTemplate ("location.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<h1>Ranking</h1><hr /><div class="alert alert-info"><a class="close" data-dismiss="alert">x</a><strong>Information</strong>These rankings are still under development and might be buggy.</div><ul class="nav nav-tabs"><li class="active"><a href="#A" data-toggle="tab">Characters</a></li><li><a href="#B" data-toggle="tab">Guilds</a></li><li class="disabled"><a href="#" data-toggle="tab">Top Levelers</a></li></ul><div class="tabbable"><div class="tab-content"><div class="tab-pane active" id="A"><?php echo $_smarty_tpl->getSubTemplate ("ranking_characters.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div class="tab-pane" id="B"><p>Coming soon!</p></div><div class="tab-pane" id="C"><p>What up girl, this is Section C.</p></div></div></div></div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>