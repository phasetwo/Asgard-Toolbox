{include file="header.tpl"}
{strip}
            <div class="container">
				{include file="location.tpl"}
                <h1>
                    Ranking
                </h1>

		<hr />
		
		<div class="alert alert-info">  
		  <a class="close" data-dismiss="alert">x</a>  
		  The latest update progress was at {$smarty.now|date_format:"%H"}:00 {$smarty.now|date_format:"%p"}.
		</div>
		
		<ul class="nav nav-tabs">
        <li class="active"><a href="#A" data-toggle="tab">Characters</a></li>
        <li><a href="#B" data-toggle="tab">Guilds</a></li>
        <li class="disabled"><a href="#" data-toggle="tab">Top Levelers</a></li>
      </ul>
	  
		<div class="tabbable">
			<div class="tab-content">
			  <div class="tab-pane active" id="A">
				{include file="ranking_characters.tpl"}
			  </div>
			  <div class="tab-pane" id="B">
				<p>Coming soon!</p>
			  </div>
			  <div class="tab-pane" id="C">
				<p>What up girl, this is Section C.</p>
			  </div>
			</div>
		</div>

            </div>{/strip}
{include file="footer.tpl"}