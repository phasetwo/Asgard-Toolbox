{strip}<h2>Wanna save your result?</h2>
No problem. You can share your result, you only got to choose a name for your result.<br />
Afterwards we will create a public link for you that can be used to publicize.

<br /><br />

<ul class="nav nav-tabs">
        <li class="active"><a href="#A" data-toggle="tab">Save this</a></li>
        <li><a href="#B" data-toggle="tab">Get my code</a></li>
	<li class="disabled"><a href="#C" data-toggle="tab">Create Graph</a></li>
      </ul>
      <div class="tabbable">
        <div class="tab-content">
          <div class="tab-pane active" id="A">
            <form class="form-horizontal well">
				<h4>Your name:</h4>
				<input type="text" class="input-small" id="input01"> 
				<h4>What kind of item:</h4>
				<select multiple="multiple" id="multiSelect">
								<option>-</option>
								<option>Weapon</option>
								<option>Armor</option>
								<option>Amulet</option>
								<option>Ring</option>
				</select>
<br /><br />
				<p>
				<button type="submit" class="btn btn-primary">Save changes</button>
				<button type="reset" class="btn">Cancel</button>
				</p>
			</form>
          </div>
          <div class="tab-pane" id="B">
			  <p><strong>Here is your code:</strong></p>
				
			  <div style="word-break: break-all">{$code}</div>
          </div>
        </div>
		
	  <a name="A"></a>
	  <a name="B"></a>
</div>
<hr />{/strip}