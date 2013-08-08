{include file="header.tpl"}
{strip}
            <div class="container">
				{include file="location.tpl"}
                <h1>
                    Diamond Upping Tool
                </h1>
				{if $smarty.post.sent == "true" && !$error}
					<p class=""></p>
					<div class="alert alert-success">
						<a class="close">&times;</a>
						<strong>Success</strong> Your history was filled in correctly, here is your result:
					</div>
					
					{if $info}
					<div class="alert alert-information">
						<a class="close">&times;</a>
						<strong>Possible problem detected</strong> {$info}
					</div>
					{/if}

					{include file="dia-upping-add.tpl"}
					
					<h2>This is your result</h2>
					
					{$output}
					
					<p>
					{if $quotes.win > $quotes.loss}
					<span class="btn btn-success btn-small">Lucky item!</span>
					This item has had an average up-change of <strong>{$quotes.win}%</strong>.
					{else}
					<span class="btn btn-warning btn-small">Unlucky item!</span>
					<i class="icon-warning-sign icon-white"></i> This item has had an average plus loss of <strong>{$quotes.loss}%</strong>.
					{/if}
					</p>
					
				{else}
					{if $error}
					<div class="alert alert-error">
						<a class="close">&times;</a>
						<strong>Error</strong> {$error}
					</div>
					{/if}
                <p class="">Please fill in the history of your item in this text box:</p>
				
				<form method="post" action="index.php?action=diamond-upping">
				<textarea name="form[history]" class="input-block-level" rows="3"></textarea><br />
				<input type="submit" value="Show my history" class="btn btn-primary" />
				<input type="hidden" name="sent" value="true" />
				</form>
				{/if}
            </div>
{/strip}
{include file="footer.tpl"}