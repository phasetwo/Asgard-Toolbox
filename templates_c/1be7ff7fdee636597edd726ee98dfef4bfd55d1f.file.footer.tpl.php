<?php /* Smarty version Smarty-3.1.14, created on 2013-08-08 14:55:49
         compiled from ".\templates\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1901551f532307362e6-76747283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1be7ff7fdee636597edd726ee98dfef4bfd55d1f' => 
    array (
      0 => '.\\templates\\footer.tpl',
      1 => 1375966540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1901551f532307362e6-76747283',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51f532307374e0_93645878',
  'variables' => 
  array (
    'progressArray' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f532307374e0_93645878')) {function content_51f532307374e0_93645878($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['progressBar'] = new Smarty_variable(mt_rand(0,100), null, 0);?><hr /><footer><div class="container"><div class="row"><div class="widgets"><div class="span4"><div class="fwidget"><div class="col-l"><h6>Hot Links</h6><ul><li><a href="index.php">News</a></li><li><a href="index.php?action=ranking">Ranking</a></li><li><a href="index.php?action=diamond-upping">Diamond Upping Tool</a></li><li><a href="#">Guides</a></li></ul></div><div class="col-r"><h6>Support</h6><ul><li><a href="#">Contact us</a></li><li><a href="#">About</a></li><li><a href="#">Ticket Center</a></li><li><a href="#">Become a Supporter</a></li><li><a href="index.php?action=legal">Legal</a></li></ul></div></div></div><div class="span4"><div class="fwidget"><h6>Top 10 Levelers</h6><ul><li><a href="#">PhaseTwo</a> (+<?php echo $_smarty_tpl->tpl_vars['progressArray']->value['PhaseTwo']['progressLevel'];?>
 Level / +<?php echo $_smarty_tpl->tpl_vars['progressArray']->value['PhaseTwo']['progressExp'];?>
 Exp)</li><li><a href="#">Flinxx</a> (+<?php echo $_smarty_tpl->tpl_vars['progressArray']->value['Flinxx']['progressLevel'];?>
 Level / +<?php echo $_smarty_tpl->tpl_vars['progressArray']->value['Flinxx']['progressExp'];?>
 Exp)</li></ul></div><div class="fwidget"><h6>Active Events</h6><span class="badge badge-info">Double Experience</span><div class="progress progress-info progress-striped" id="progressouter"><div class="bar" id="progress"></div></div><div class="fwidget"><h6>Social Media</h6><ul><li><i class="icon-facebook"></i> <a href="#">Facebook</a></li><li><i class="icon-twitter"></i> <a href="#">Twitter</a></li></ul></div></div></div></div><div class="span4"><div class="fwidget"><h6>Recent Tickets</h6><ul><li><a href="#">Sed eu leo orci, condimentum gravida metus</a></li><li><a href="#">Etiam at nulla ipsum, in rhoncus purus</a></li><li><a href="#">Fusce vel magna faucibus felis dapibus facilisis</a></li><li><a href="#">Vivamus scelerisque dui in massa</a></li><li><a href="#">Pellentesque eget adipiscing dui semper</a></li></ul></div></div></div></div><div class="clearfix"></div></div></footer></div><script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js" type="text/javascript"></script></body></html><?php }} ?>