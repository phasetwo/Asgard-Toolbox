<?php /* Smarty version Smarty-3.1.14, created on 2013-08-08 15:11:00
         compiled from ".\templates\ranking_characters.tpl" */ ?>
<?php /*%%SmartyHeaderCode:303765203971eb7d911-63176519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6504c576544dac336a0ef41ea6dec02c4160dcb8' => 
    array (
      0 => '.\\templates\\ranking_characters.tpl',
      1 => 1375967381,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '303765203971eb7d911-63176519',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5203971ebbc6e1_60891829',
  'variables' => 
  array (
    'rankingList' => 0,
    'player' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5203971ebbc6e1_60891829')) {function content_5203971ebbc6e1_60891829($_smarty_tpl) {?><div class="btn-group">
            <a class="btn btn-primary" href="#"><?php if (!$_GET['race']){?>Select Race<?php }elseif($_GET['race']=="aidian"){?>Aidian<?php }elseif($_GET['race']=="bulkan"){?>Bulkan<?php }elseif($_GET['race']=="human"){?>Human<?php }elseif($_GET['race']=="kailipton"){?>Kailipton<?php }?></a>
            <a class="btn dropdown-toggle btn-primary" data-toggle="dropdown" href="#"><span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="index.php?action=ranking">Show all Races</a></li>
              <li class="divider"></li>		
			  <li><a href="index.php?action=ranking&amp;race=aidian">Aidian</a></li>
			  <li><a href="index.php?action=ranking&amp;race=bulkan">Bulkan</a></li>
			  <li><a href="index.php?action=ranking&amp;race=human">Human</a></li>
			  <li><a href="index.php?action=ranking&amp;race=kailipton">Kailipton</a></li>
            </ul>
        </div>
		
		<br /><br />
		
		<table class="table table-bordered table-striped table-hover tablesorter" id="sortRanking">
		<thead>
		<tr><th>Rank</th><th>Level</th><th>Name</th><th>Experience left</th><th>+Exp gained</th<</tr>
		</thead><tbody>
		<?php  $_smarty_tpl->tpl_vars['player'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['player']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rankingList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['player']->key => $_smarty_tpl->tpl_vars['player']->value){
$_smarty_tpl->tpl_vars['player']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['player']->value['playerLevel']){?><tr><td><?php echo $_smarty_tpl->tpl_vars['player']->value['playerRank'];?>
.</td><td><?php echo $_smarty_tpl->tpl_vars['player']->value['playerLevel'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['player']->value['playerName'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['player']->value['playerExperience'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['player']->value['playerProgress']['progressExp'];?>
</td></tr><?php }?>
		<?php } ?>
		</tbody>
		</table><?php }} ?>