{strip}

<ul class="nav nav-tabs">
        <li class="active"><a href="#A" data-toggle="tab">Contact Form</a></li>
        <li><a href="#B" data-toggle="tab">Messenger</a></li>
      </ul>
      <div class="tabbable">
        <div class="tab-content">
          <div class="tab-pane active" id="A">
			{if $success}
			<div class="alert alert-success">
				<a class="close">&times;</a>
				<strong>Success</strong> {$success}
			</div>
			{else}
			{if $error}
			<div class="alert alert-error">
				<a class="close">&times;</a>
				<strong>Error</strong> {$error}
			</div>
			{/if}
			{if !$smarty.post.name || !$smarty.post.mail || !$smarty.post.message}
				{if $smarty.post.sent}
					<div class="alert alert-error">
						<a class="close">&times;</a>
						<strong>Error</strong> Please fill out all fields.
					</div>
				{/if}
			{/if}
            <form class="form-horizontal well" action="index.php?action=contact" method="post">
				<h4>Your Name:</h4>
				<input type="text" name="name" class="input-big" value="{$smarty.post.message}" id="input01"> 
				<h4>Your Email:</h4>
				<input type="text" name="mail" class="input-medium" value="{$smarty.post.mail}" id="input01"> 
				<h4>Type of Request</h4>
				<select multiple="multiple" name="type" id="multiSelect">
								<option>-</option>
								<option>General Question</option>
								<option>Question About Tools</option>
								<option>How can I get a Supporter?</option>
								<option>Miscellaneous</option>
				</select>
				<h4>Your Message:</h4>
				<textarea name="message" class="input-block-level" rows="3">{$smarty.post.message}</textarea>
<br /><br />
				<p>
				<button type="submit" class="btn btn-primary">Send Message</button>
				<button type="reset" class="btn">Cancel</button>
				<input type="hidden" name="sent" value="true" />
				</p>
			</form>
			{/if}
			</div>
          <div class="tab-pane" id="B">
			  <p><strong>Skype:</strong> david.mendek</p>
          </div>
        </div>
</div>
<hr />{/strip}