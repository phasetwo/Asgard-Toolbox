<?php
error_reporting(0);
?>
<html>
<head>
<style type="text/css">
td, th, input, textarea, p { font: 12px verdana }
th { font-weight: bold; background: #eaeaea }
.form { width: 50% }
.fail { color: red }
.ok { color: green }
.epicfail { color: red; font-weight: bold; }
.output, .dev { width: 50% }
#output { margin: auto; width: 120px; border: 1px solid gray }
th, td { text-align: center }
#footer { font: 9px verdana; color: gray; margin: auto; text-align: center }
</style>
<title>Up-Rechner</title>
</head>
<body>
<?php
switch($_POST['sent']) {
	default:
	?>
<form method="post">
<textarea class="form" name="dia"></textarea><br />
<input type="submit" /><input type="hidden" name="sent" value="true" />
</form>
	<?php
	break;
	
	case "true":
	
	if(preg_match("/[0-9]+/", $_POST['dia'])) {
		$array = explode("+", $_POST['dia']);
				
		foreach($array as $item) {
			if($item == "") {
				$i++;
				continue;
			} else {
				if($last > $item || $last == $item) $class = "fail"; else $class = "ok";
				if($last-$item > 4) $class = "epicfail";
				if($class == "epicfail") $extra = "&nbsp;<img src=\"epicfail.gif\" alt=\"EpicFail\" />";
				
				$output.= "<tr><td>".$i.".</td><td><span class=\"".$class."\">+".$item."</span>".$extra."</td></tr>";
				$last = $item;
				
				unset($class, $extra);
				$i++;
			}
		}

		$output.= "<tr><th colspan=\"2\">Insgesamt ".(count($array)-1)." Versuche</th></tr></table>";
	} else {
		$output = "Fehler beim Format.";
	}
	?>
	<div id="output">
	<table cellspacing="2" cellpadding="4" width="100%"><tr><th>#</th><th>Ergebnis</th></tr><?php echo $output; ?>
	</div>
	<?php
	break;
}
?>
	<div id="footer">&copy; 2013 PhaseTwo</div>
</body>
</html>