{strip}
{assign var=progressBar value=0|mt_rand:100}

<hr />

<footer>
  <div class="container">
    <div class="row">

      <div class="widgets">
        <div class="span4">
          <div class="fwidget">

            <div class="col-l">
              <h6>Hot Links</h6>
              <ul>
                <li><a href="index.php">News</a></li>
                <li><a href="index.php?action=ranking">Ranking</a></li>
                <li><a href="index.php?action=diamond-upping">Diamond Upping Tool</a></li>
              </ul>
            </div>
			{*
            <div class="col-r">
              <h6>Support</h6>
              <ul>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Ticket Center</a></li>
		<li><a href="#">Become a Supporter</a></li>
                <li><a href="index.php?action=legal">Legal</a></li>
              </ul>
            </div>
			*}
			
          </div>
        </div>

        <div class="span4">
          <div class="fwidget">
            <h6>Top 10 Levelers</h6>
            {*
            <ul>
              <li><a href="#">PhaseTwo</a> (+{$progressArray.PhaseTwo.progressLevel} Level / +{$progressArray.PhaseTwo.progressExp} Exp)</li>
              <li><a href="#">Flinxx</a> (+{$progressArray.Flinxx.progressLevel} Level / +{$progressArray.Flinxx.progressExp} Exp)</li>
            </ul>
            *}
            <ul>
            	<li>Coming soon</li>
            </ul>
         </div>

	  {*
	  <div class="fwidget">
            <h6>Active Events</h6>
            <span class="badge badge-info">Double Experience</span>
      
      		<div class="progress progress-info progress-striped" id="progressouter">
        	<div class="bar" id="progress"></div>
      </div>

	  <div class="fwidget">
            <h6>Social Media</h6>
              <ul>
                <li><i class="icon-facebook"></i> <a href="#">Facebook</a></li>
		<li><i class="icon-twitter"></i> <a href="#">Twitter</a></li>
              </ul>
      	  </div>
      </div>
      *}

          </div>
        </div>
		
		{*
        <div class="span4">
          <div class="fwidget">
            <h6>Recent Tickets</h6>
            <ul>
              <li><a href="#">Sed eu leo orci, condimentum gravida metus</a></li>
              <li><a href="#">Etiam at nulla ipsum, in rhoncus purus</a></li>
              <li><a href="#">Fusce vel magna faucibus felis dapibus facilisis</a></li>
              <li><a href="#">Vivamus scelerisque dui in massa</a></li>
              <li><a href="#">Pellentesque eget adipiscing dui semper</a></li>
            </ul>
          </div>
        </div>
        *}
        
        <div class="span4">
          <div class="fwidget">
            <h6>Copyrights</h6>
            &copy; 2013 by <a href="http://phasebook.me">PhaseTwo</a>. All rights reserved.
          </div>
        </div>
      </div>
    </div>
  <div class="clearfix"></div>
  </div>


</footer> 


        </div>
		
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>{/strip}