{strip}
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
            Asgard Toolbox
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A bunch of tools for Asgard players" />
        <meta name="author" content="David Mendek">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" type="text/javascript"></script>
        <style type="text/css">
        body {
			padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
        }
		.fail { color:red }
		.ok { color:green }
		.epicfail { color:red; font-weight:700 }
        </style>
	<link rel="stylesheet" type="text/css" href="./assets/js/jquery/themes/blue/style.css" />
	<!--
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.0/css/bootstrap-combined.min.css" rel="stylesheet" type="text/css">
        <link href="http://bootswatch.com/cosmo/bootstrap.min.css" rel="stylesheet" type="text/css" data-bootstrap-theme-name="Cosmo">
	-->
        <link href="./assets/css/custom.css" rel="stylesheet" type="text/css">

	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="./assets/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="./assets/ico/favicon.png">
	<script src="./assets/js/jquery/jquery.tablesorter.min.js"></script>
	<script src="./assets/js/jquery/jquery.numberformatter.min.js"></script>
	{literal}
	<script>
	$(document).ready(function() 
	    { 
        	$("#sortRanking").tablesorter(); 
			
			$(".numbers").each(function() {
                $(this).format({format:"#,###", locale:"us"});
            });

	{*
	var progresspump = setInterval(function(){
    /* query the completion percentage from the server */
    $.get("index.php?action=random", function(data){
      /* update the progress bar width */
      $("#progress").css('width',data+'%');
      /* and display the numeric value */
      $("#progress").html(data+'%');

      /* test to see if the job has completed */
      if(data > 99.999) {
        clearInterval(progresspump);
        $("#progressouter").removeClass("active");
        $("#progress").html("The event has ended");
      }
    })
  }, 1000);


*}
	    } 
	); 
	</script>
	{/literal}
    </head>
    <body style="cursor: auto;">
	
        <div data-mercury="full" id="mercuryblock" style="overflow: visible;">
            <div class="navbar {if $smarty.session.theme != "black"}navbar-inverse {/if}navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">
                        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse" style>
                            <span class="icon-bar" style></span> <span class="icon-bar" style></span> <span class="icon-bar" style></span>
                        </button><a class="brand" href="index.php" style="font-weight: bold;"><img src="./assets/img/logo.png" alt="{$global.siteTitle}" title="{$global.siteTitle}" style="height: 25px; width: auto" /></a>
                        <div class="nav-collapse collapse">
							{include file="menu.tpl"}
                        </div>
                    </div>
                </div>
            </div>
{/strip}