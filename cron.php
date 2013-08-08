<?php
require("./getRanking.php");

if($_GET['security'] = "4028a0e356acc947fcd2bfbf00cef11e128d484a") {
	$rank = new rankHandler("localhost", "bf", "bf", "bf");
	
	$rank->readRanks();
	$rank->parseRanks();
	$rank->saveToDB();
}
?>