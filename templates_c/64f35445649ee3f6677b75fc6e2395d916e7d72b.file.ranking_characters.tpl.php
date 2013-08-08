<?php /* Smarty version Smarty-3.1.14, created on 2013-07-30 16:50:01
         compiled from "./templates/ranking_characters.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186167196351f7d2993b60f5-42003912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64f35445649ee3f6677b75fc6e2395d916e7d72b' => 
    array (
      0 => './templates/ranking_characters.tpl',
      1 => 1375195796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186167196351f7d2993b60f5-42003912',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rankingList' => 0,
    'player' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51f7d299469572_57132693',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f7d299469572_57132693')) {function content_51f7d299469572_57132693($_smarty_tpl) {?><div class="btn-group">
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
		<tr><th>Rank</th><th>Level</th><th>Name</th><th>Experience left</th></tr>
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
</td></tr><?php }?>
		<?php } ?>
		</tbody>
		</table><?php }} ?>