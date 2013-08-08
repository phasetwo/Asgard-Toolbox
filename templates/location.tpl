{strip}<ul class="breadcrumb">
				<li><a href="index.php">Home</a> <span class="divider">/</span></li>
				<li class="dropdown">
				  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tools <b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="index.php?action=diamond-upping">Diamond Upping Tool</a></li>
					<li><a href="index.php?action=ranking">Ranking</a></li>
					<li><a href="#">Tool 3</a></li>
					<li class="divider"></li>
					<li><a href="index.php?action=tools">Overview</a></li>
				  </ul>
				  <span class="divider">/</span>
				</li>
				{if $smarty.get.action == "diamond-upping"}<li class="active">Diamond Upping Tool</li>{/if}
				{if $smarty.get.action == "ranking"}<li class="active">Ranking</li>{/if}
</ul>{/strip}