<?php
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
require("./libs/Smarty.class.php");
require("./getRanking.php");

$smarty = new Smarty;
$rank = new rankHandler("localhost", "bf", "bf", "bf");

$global['siteTitle'] = "Asgard Toolbox";
$smarty->assign("global", $global);

// Development-Password-Protection
if(!$_SESSION['password']) {
	if(!$_POST['password']) {
		$smarty->display("password.tpl");
	} else {
		if($_POST['password'] == "ketchup") {
			$_SESSION['password'] = true;
			header("location: index.php");
		} else {
			header("location: http://www.google.de");
		}
	}
	
	exit;
}

// Die Beispieldaten fuer jeweils Phase und Flinxx
// aus der Ranking-Progress DB auslesen
$progressArray = array(
	"PhaseTwo" => $rank->getPlayerProgress("PhaseTwo"),
	"Flinxx" => $rank->getPlayerProgress("Flinxx")
);
$smarty->assign("progressArray", $progressArray);


switch($_GET['action']) {
	
	default:
		$smarty->display("index.tpl");
		break;

	case "logout":
		session_destroy();
		header("location: index.php");
		exit;
		break;
		
	case "tools":
		$smarty->display("tools.tpl");
		break;
	
	case "diamond-upping":
		if($_POST['sent'] == "true") {
			
			if(preg_match("/[0-9]+/", $_POST['form']['history'])) {
				$array = explode("+", $_POST['form']['history']);
				$last = 0;
				
				$output.= "<table class=\"table table-bordered table-striped table-hover\"><thead><tr><th>Attempt #</th><th>Result</th></thead><tbody>";
				foreach($array as $item) {
					if($item == "") {
						$i++;
						continue;
					} else {
						if($last > $item || $last == $item) $class = "fail"; else $class = "ok";
						if($last-$item > 4) $class = "epicfail";
						if($class == "epicfail" || $class == "fail") $fails++; else $luck++;
						if($class == "epicfail") $extra = "&nbsp;<img src=\"assets/img/epicfail.gif\" alt=\"EpicFail\" />";
						
						$output.= "<tr><td style=\"width: 10% !important;\">".$i.".</td><td><span class=\"".$class."\">+".$item."</span>".$extra."</td></tr>";
						$last = $item;
						if($item > 15) $smarty->assign("info", "You are using integers > 15. The Diamond Upping Tool only supports integers <= 15.");
						
						unset($class, $extra);
						$i++;
					}
				}
				
				$quotes[win] = round(($luck / ($i-1))*100,2);
				$quotes[loss] = round(($fails / ($i-1))*100,2);

				$output.= "<tr><th colspan=\"2\">".(count($array)-1)." attempts total</th></tr></tbody></table>";
				$code = base64_encode(serialize($_POST['form']));
				$smarty->assign("code", $code);
				$smarty->assign("quotes", $quotes);
			} else {
				if(!$_POST['form']['history']) {
					$smarty->assign("error", "You have to enter something.");
				} else {
					$smarty->assign("error", "You have used a wrong format.");
				}
			}
			
			$smarty->assign("output", $output);
		}
		
		$smarty->display("dia-upping.tpl");
		break;

	case "legal":
		$smarty->display("legal.tpl");
		break;
		
	case "ranking":
	
		switch($_GET['race']) {
			default:
				$race = "";
				break;
			
			case "aidian":
				$race = "aid";
				break;
			
			case "bulkan":
				$race = "bulkan";
				break;
			
			case "kailipton":
				$race = "kali";
				break;
				
			case "human":
				$race = "human";
				break;
		}

		$handle = fopen("http://5.9.67.228/asgard/ranking.php?char=".$race, "r");

		$i = 0;
		while(!feof($handle)) {
			$line[$i] = fgets($handle, 24000);
			if(preg_match("/(Rank|Level|[0,9]{1,3})/", $line[$i]) && $i >= 96) $match[] = $i;
			$i++;
		}

		foreach($match as $item) {
			#$line[$item] = preg_replace("/\<(td|th|table|tr) (.*?)\<\/(td|th|table|tr)\>/", "", $line[$item]);
			$line[$item] = preg_replace("/\<(td|th|table|tr|div)(.*?)\>/", "|", $line[$item]);
			$line[$item] = preg_replace("/\<\/(td|th|table|tr|div)\>/", "|", $line[$item]);
			$line[$item] = preg_replace("/(.)\\1{3,}/sS", '$1', $line[$item]);
			
			$toplist[] = explode("|", $line[$item]);
		}

		$i = 0;
		foreach($toplist[0] as $item) {
			#if(!$item || preg_match("/(Rank|Level|Name|RemainExp|Race)/", $item)) continue;
			if(!$item) continue;
			$toplistSort[] = $item;
			$i++;
		}

		$i = 0;
		$key = 6;
		$aKey = 0;
		unset($toplistSort[206], $toplistSort[207]);
		
		// Ab hier jeweils ein Spieler
		while($key <= count($toplistSort)) {
			$output.= "\t<tr>\n";

			while($i < 4) {
				$output.= "\t\t<td>".$toplistSort[$key]."</td>\n";

				switch($i) {
					case 0:
						$playerList[$aKey][playerRank] = $toplistSort[$key];
						break;
					case 1:
						$playerList[$aKey][playerLevel] = $toplistSort[$key];
						break;
					case 2:
						$playerList[$aKey][playerName] = $toplistSort[$key];
						break;
					case 3:
						$playerList[$aKey][playerExperience] = $toplistSort[$key];
						break;
				}

				$i++;
				$key++;
			}
			
			$playerList[$aKey][playerProgress] = $rank->getPlayerProgress($playerList[$aKey][playerName]);
			
			$i = 0;
			$key++;
			$aKey++;
		}
		
		$smarty->assign("rankingList", $playerList);
		$smarty->display("ranking.tpl");
		break;
	
	case "random":
		echo rand(80,100);
		break;
		
	case "contact":
		if($_POST['name'] && $_POST['mail'] && $_POST['message']) {
			if(preg_match("/^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$/", $_POST['mail'])) {
				$output = "Your Email has been sent. Thank you for contacting us!";
			} else {
				$error = "Please enter a valid Email adress.";
			}
		}
		
		$smarty->assign("success", $output);
		$smarty->assign("error", $error);
		$smarty->display("contact.tpl");
			
		break;
		
}

#print_r($playerList);
#print_r($toplistSort);
#print_r($GLOBALS);
?>