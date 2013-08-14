		<div class="btn-group">
            <a class="btn btn-primary" href="#">{if !$smarty.get.race}Select Race{elseif $smarty.get.race == "aidian"}Aidian{elseif $smarty.get.race == "bulkan"}Bulkan{elseif $smarty.get.race == "human"}Human{elseif $smarty.get.race == "kailipton"}Kailipton{/if}</a>
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
		{foreach from=$rankingList item=player}
		{if $player.playerLevel}<tr{if $player.playerProgress.progressExp > 0} class="success"{/if}>
			<td>{$player.playerRank}.</td><td>{$player.playerLevel} {include file="ranking_rankup.tpl"}</td>
			<td><a href="#">{$player.playerName}</a></td>
			<td>{$player.playerExperience}{if $player.playerProgress.progressExp != 0} <span class="badge badge-success pull-right">+ {$player.playerProgress.progressExp}</span>{/if}</td>
		</tr>{/if}
		{/foreach}
		</tbody>
		</table>