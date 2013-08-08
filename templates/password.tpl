{include file="header.tpl"}

            <div class="container">
				
                <h1>
                    Password Protection
                </h1>

		<div class="alert alert-info">  
		  <a class="close" data-dismiss="alert">x</a>  
		  <strong>Information</strong> These contents are still under development. To continue, please enter your password.
		</div>
		
		<form method="post" action="index.php{if $smarty.get.action}?action={$smarty.get.action}{/if}">
		<input type="password" name="password" class="input-block-level" />
		<p><input type="submit" class="btn btn-primary" /></p>
		</form>
				
				{$output}
				
            </div>
{include file="footer.tpl"}