<?php
class rankHandler {

        public static $rankingUrl = "http://5.9.67.228/asgard/ranking.php?char=";

        public static $rankingAidian = "aid";
        public static $rankingBulkan = "bulkan";
        public static $rankingHuman = "human";
        public static $rankingKailipton = "kali";
        
        public static $fileHandle;
        public static $rankArray;
        
        public static $mysqli;		
		public static $playersAdded = array();

		// Zum Anfang wird direkt eine MySQL Verbindung aufgebaut
		public function __construct($dbhost, $dbuser, $dbpass, $db) {
			self::$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $db);
		}
        
		// Rankings auslesen
        public static function readRanks($race) {
                switch($race) {
                        default:
                                $race = "";
                                break;
                        case "aidian":
                                $race = self::$rankingAidian;
                                break;
                        case "bulkan":
                                $race = self::$rankingBulkan;
                                break;
                        case "human":
                                $race = self::$rankingHuman;
                                break;
                        case "kailipton":
                                $race = self::$rankingKailipton;
                                break;
                }
                
                self::openFileHandle(self::$rankingUrl.$race);
        }
        
		// Der Inhalt der URL wird gespeichert
        public static function openFileHandle($url) {
                self::$fileHandle = @file_get_contents($url);  
        }
        
		// Der Inhalt der URL wird geparsed
        public static function parseRanks() {
                $loop = explode("\n", self::$fileHandle);
                
                // Jede Zeile mit Rank / Level / Zahlen merken
                $i = 0;
                foreach($loop as $item) {
                        $line[$i] = $item;
                        // "Ab Zeile 96" ist Hardcode, wird im Falle einer Designaenderung geaendert werden muessen
                        if(preg_match("/(Rank|Level|[0,9]{1,3})/", $line[$i]) && $i >= 96) $match[] = $i;
                        $i++;
                }
                
                // Bei den gemerkten Zeilen alle table/th/td/tr/div entfernen
                foreach($match as $item) {
						$line[$item] = preg_replace("/\<(td|th|table|tr|div)(.*?)\>/", "|", $line[$item]);
                        $line[$item] = preg_replace("/\<\/(td|th|table|tr|div)\>/", "|", $line[$item]);
                        $line[$item] = preg_replace("/(.)\\1{3,}/sS", '$1', $line[$item]);
						$line[$item] = preg_replace("/\<(td|th|table|tr|div)(.*?)\>(.*)\<\/(td|th|table|tr|div)\>/", "|", $line[$item]);
                        $toplist[] = explode("|", $line[$item]);
                }
                
                $i = 0;
                // Alle Daten werden in einem neuen Array richtig sortiert
                // Leere Daten werden uebersprungen
                foreach($toplist[0] as $item) {
                        if(!$item) continue;
                        $toplistSort[] = $item;
                        $i++;
                }

                $i = $aKey = 0;
                $key = 6;
                unset($toplistSort[206], $toplistSort[207]);
                
                // Die Daten werden assoziativ im Array hinterlegt
                while($key <= count($toplistSort)-1) {
                        while($i < 4) {
                                switch($i) {
                                        case 0:
                                                $playerList[$aKey]['playerRank'] = $toplistSort[$key];
                                                break;
                                        case 1:
                                                $playerList[$aKey]['playerLevel'] = $toplistSort[$key];
                                                break;
                                        case 2:
                                                $playerList[$aKey]['playerName'] = $toplistSort[$key];
                                                break;
                                        case 3:
                                                $playerList[$aKey]['playerExperience'] = $toplistSort[$key];
                                                break;
                                }
                                
                                $i++;
                                $key++;
                        }
                
                        $i = 0;
                        $key++;
                        $aKey++;
                }
                
                self::$rankArray = $playerList;
        }
        
		// Daten werden in DB gespeichert
        public static function saveToDB() {
            foreach(self::$rankArray as $item) {

				if(!self::playerExist($item['playerName'])) {
					echo $item['playerName']." ist noch nicht in der Datenbank, lege an.\n";
					self::playerAdd($item['playerName']);
				}

				self::playerUpdate($item, self::getPlayer($item['playerName']));

			}
        }

		// Pruefen: Gibt es den Spieler schon in der Datenbank?
		private static function playerExist($playerName) {
			$query = self::$mysqli->query("SELECT playerName FROM players WHERE playerName='".$playerName."'");
			if(!$query->num_rows) return false; else return true;
		}

		// Spieler Details aus der Datenbank holen
		private static function getPlayer($playerName, $extraQuery = false) {
			$query = "SELECT id, playerName FROM players WHERE playerName='".$playerName."'";
			if($extraQuery) $query.= " ".$extraQuery;
				
			$query = self::$mysqli->query($query);
			$array = $query->fetch_array(MYSQLI_ASSOC);
			return $array;
		}
		
		// Gibt ID eines Spielers aus
		private static function getPlayerId($array) {
			return $array['id'];
		}

		// Diese Funktion entfernt die Punkte und macht ganzzahlige Exp-Werte
		private static function fixInteger($int) {
			$int = preg_replace("/[.]{1,5}/", "", $int);
			return intval($int);
		}

		// Spieler zu DB hinzufuegen
		public static function playerAdd($playerName) {
			$query = self::$mysqli->query("INSERT INTO players VALUES('', '".$playerName."', '0', '".time()."')");
			self::playerAddArray(self::$mysqli->insert_id, $playerName, "");
		}

		// Spieler in internen Spieler-Array speichern
		public static function playerAddArray($id, $playerName, $server) {
			self::$playersAdded[$playerName] = array("id" => $id, "name" => $playerName, "server" => $server);
		}

		// Neuen Datensatz zu Spielerfortschritt hinzufuegen
		public static function playerUpdate($playerArray, $playerInfo) {
			$query = self::$mysqli->query("INSERT INTO data VALUES('', '".$playerInfo['id']."',
			'".$playerArray['playerRank']."',
			'".$playerArray['playerLevel']."',
			'".self::fixInteger($playerArray['playerExperience'])."',
			'".time()."'
			)");
			echo $playerArray['playerName'].": Fortschritt eingetragen.\n";
		}
		
		// Unterschiede eines Spielers als Array ausgeben
		// @param id
		public static function getPlayerProgress($playerName) {
			if(self::playerExist($playerName)) {
				
				// mindestens 2 Ergebnisse finden
				$query = "SELECT * FROM data WHERE playerId='".self::getPlayerId(self::getPlayer($playerName))."' ORDER BY id DESC LIMIT 2";
				$query = self::$mysqli->query($query);
				
				while($array = $query->fetch_array(MYSQLI_ASSOC)) {
					$results[] = $array;
				}
				
				$diffLevel = self::goodNumber($results[1]['playerExp'] - $results[0]['playerExp']);
				
				switch($diffLevel) {
					
					case $difflevel > 1:
						// Wenn Level 30x, dann 1 Mrd. pro Level
						if(preg_match("/30(0-9)/", $results[1]['playerLevel'])) $plusExp = 1000000000;
						break;
					
				}
				
				$diffExp = $result[] = self::goodNumber($results[1]['playerExp'] - $results[0]['playerExp']);

				$result = array(
					"progressRank" => $results[1]['playerRank'] - $results[0]['playerRank'],
					"progressLevel" => $results[0]['playerLevel'] - $results[1]['playerLevel'],
					"progressExp" => self::goodNumber($results[1]['playerExp'] - $results[0]['playerExp'])
				);
				
				return $result;
				
			}
		}
		
		public static function goodNumber($n) {
			// first strip any formatting;
			$n = (0+str_replace(",","",$n));
			
			// is this a number?
			if(!is_numeric($n)) return false;
			
			// now filter it;
			if($n>1000000000000) return round(($n/1000000000000),1).' Trd.';
			else if($n>1000000000) return round(($n/1000000000),1).' Mrd.';
			else if($n>1000000) return round(($n/1000000),1).' Mio.';
			else if($n>1000) return round(($n/1000),1).'k';
			
			return number_format($n);
		}
				

}

/*
header("content-type: text/plain");
$class = new rankHandler("localhost", "bf", "bf", "bf");
$class->readRanks("bulkan");
$class->parseRanks();
$class->saveToDB();

print_r($class->getPlayerProgress($_GET['player']));
*/