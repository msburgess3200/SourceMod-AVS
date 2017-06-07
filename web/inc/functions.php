<?php
class common
{
	function test($a) {
		return $a;
	}
}

class dash extends common
{
	/*
	* Some
	* Code
	*/
}


class servers extends common
{
	function idToTitle($num) {
		if((int)$num === 1) {
			return "All Games";
		} else {
			require("config.php");
			$id = $conn->real_escape_string($num);
			$sql = $conn->query('SELECT game FROM games WHERE id = '.$id.' LIMIT 0,1;');
			$row = $sql->fetch_assoc();
			return $row['game'];
		}
	}
}

class adz extends common
{
	function idToGame($num) {
		if((int)$num === 1) {
			return "All Games";
		} else {
			require("config.php");
			$id = $conn->real_escape_string($num);
			$sql = $conn->query('SELECT game FROM games WHERE id = '.$id.' LIMIT 0,1;');
			$row = $sql->fetch_assoc();
			return $row['game'];
		}
	}

	function idToServer($num) {
		if((int)$num === 1) {
			return "All Servers";
		} else {
			require("config.php");
			$id = $conn->real_escape_string($num);
			$sql = $conn->query('SELECT server_name FROM servers WHERE id = '.$id.' LIMIT 0,1;');
			$row = $sql->fetch_assoc();
			return $row['server_name'];
		}
	}

	function convertColor($color, $curlyCon = true) {
		$colorCodes = array(
		/*1*/
		"{aliceblue}",
		"{allies}",
		"{ancient}",
		"{antiquewhite}",
		"{aqua}",
		"{aquamarine}",
		"{arcana}",
		/*2*/
		"{axis}",
		"{azure}",
		"{beige}",
		"{bisque}",
		"{black}",
		"{blanchedalmond}",
		"{blue}",
		/*3*/
		"{blueviolet}",
		"{brown}",
		"{burlywood}",
		"{cadetblue}",
		"{chartreuse}",
		"{chocolate}",
		"{collectors}",
		/*4*/
		"{common}",
		"{community}",
		"{coral}",
		"{cornflowerblue}",
		"{cornsilk}",
		"{corrupted}",
		"{crimson}",
		/*5*/
		"{cyan}",
		"{darkblue}",
		"{darkcyan}",
		"{darkgoldenrod}",
		"{darkgray}",
		"{darkgrey}",
		"{darkgreen}",
		/*6*/
		"{darkkhaki}",
		"{darkmagenta}",
		"{darkolivegreen}",
		"{darkorange}",
		"{darkorchid}",
		"{darkred}",
		"{darksalmon}",
		/*7*/
		"{darkseagreen}",
		"{darkslateblue}",
		"{darkslategray}",
		"{darkslategrey}",
		"{darkturquoise}",
		"{darkviolet}",
		"{deeppink}",
		/*8*/
		"{deepskyblue}",
		"{dimgray}",
		"{dimgrey}",
		"{dodgerblue}",
		"{exalted}",
		"{firebrick}",
		"{floralwhite}",
		/*9*/
		"{forestgreen}",
		"{frozen}",
		"{fuchsia}",
		"{fullblue}",
		"{fullred}",
		"{gainsboro}",
		"{genuine}",
		/*10*/
		"{ghostwhite}",
		"{gold}",
		"{goldenrod}",
		"{gray}",
		"{grey}",
		"{green}",
		"{greenyellow}",
		/*11*/
		"{haunted}",
		"{honeydew}",
		"{hotpink}",
		"{immortal}",
		"{indianred}",
		"{indigo}",
		"{ivory}",
		/*12*/
		"{khaki}",
		"{lavender}",
		"{lavenderblush}",
		"{lawngreen}",
		"{legendary}",
		"{lemonchiffon}",
		"{lightblue}",
		/*13*/
		"{lightcoral}",
		"{lightcyan}",
		"{lightgoldenrodyellow}",
		"{lightgray}",
		"{lightgrey}",
		"{lightgreen}",
		"{lightpink}",
		/*14*/
		"{lightsalmon}",
		"{lightseagreen}",
		"{lightskyblue}",
		"{lightslategray}",
		"{lightslategrey}",
		"{lightsteelblue}",
		"{lightyellow}",
		/*15*/
		"{lime}",
		"{limegreen}",
		"{linen}",
		"{magenta}",
		"{maroon}",
		"{mediumaquamarine}",
		"{mediumblue}",
		/*16*/
		"{mediumorchid}",
		"{mediumpurple}",
		"{mediumseagreen}",
		"{mediumslateblue}",
		"{mediumspringgreen}",
		"{mediumturquoise}",
		"{mediumvioletred}",
		/*17*/
		"{midnightblue}",
		"{mintcream}",
		"{mistyrose}",
		"{moccasin}",
		"{mythical}",
		"{navajowhite}",
		"{navy}",
		/*18*/
		"{normal}",
		"{oldlace}",
		"{olive}",
		"{olivedrab}",
		"{orange}",
		"{orangered}",
		"{orchid}",
		/*19*/
		"{palegoldenrod}",
		"{palegreen}",
		"{paleturquoise}",
		"{palevioletred}",
		"{papayawhip}",
		"{peachpuff}",
		"{peru}",
		/*20*/
		"{pink}",
		"{plum}",
		"{powderblue}",
		"{purple}",
		"{rare}",
		"{red}",
		"{rosybrown}",
		"{royalblue}",
		/*21*/
		"{saddlebrown}",
		"{salmon}",
		"{sandybrown}",
		"{seagreen}",
		"{seashell}",
		"{selfmade}",
		/*22*/
		"{sienna}",
		"{silver}",
		"{skyblue}",
		"{slateblue}",
		"{slategray}",
		"{slategrey}",
		"{snow}",
		/*23*/
		"{springgreen}",
		"{steelblue}",
		"{strange}",
		"{tan}",
		"{teal}",
		"{thistle}",
		"{tomato}",
		/*24*/
		"{turquoise}",
		"{uncommon}",
		"{unique}",
		"{unusual}",
		"{valve}",
		"{vintage}",
		"{violet}",
		/*25*/
		"{wheat}",
		"{white}",
		"{whitesmoke}",
		"{yellow}",
		"{yellowgreen}",
		"{default}",
		"{team}");
		$colorStyles = array(
		/*1*/
		"<span style=\"color:#f0f8ff;\">",
		"<span style=\"color:#4d7942;\">",
		"<span style=\"color:#eb4b4b;\">",
		"<span style=\"color:#faebd7;\">",
		"<span style=\"color:#00ffff;\">",
		"<span style=\"color:#7fffd4;\">",
		"<span style=\"color:#ade55c;\">",
		/*2*/
		"<span style=\"color:#ff4040;\">",
		"<span style=\"color:#007fff;\">",
		"<span style=\"color:#f5f5dc;\">",
		"<span style=\"color:#ffe4c4;\">",
		"<span style=\"color:#000000;\">",
		"<span style=\"color:#ffebcd;\">",
		"<span style=\"color:#99ccff;\">",
		/*3*/
		"<span style=\"color:#8a2be2;\">",
		"<span style=\"color:#a52a2a;\">",
		"<span style=\"color:#deb887;\">",
		"<span style=\"color:#5f9ea0;\">",
		"<span style=\"color:#7fff00;\">",
		"<span style=\"color:#d2691e;\">",
		"<span style=\"color:#aa0000;\">",
		/*4*/
		"<span style=\"color:#b0c3d9;\">",
		"<span style=\"color:#70b04a;\">",
		"<span style=\"color:#ff7f50;\">",
		"<span style=\"color:#6495ed;\">",
		"<span style=\"color:#fff8dc;\">",
		"<span style=\"color:#a32c2e;\">",
		"<span style=\"color:#dc143c;\">",
		/*5*/
		"<span style=\"color:#00ffff;\">",
		"<span style=\"color:#00008b;\">",
		"<span style=\"color:#008b8b;\">",
		"<span style=\"color:#b8860b;\">",
		"<span style=\"color:#a9a9a9;\">",
		"<span style=\"color:#a9a9a9;\">",
		"<span style=\"color:#006400;\">",
		/*6*/
		"<span style=\"color:#bdb76b;\">",
		"<span style=\"color:#8b008b;\">",
		"<span style=\"color:#556b2f;\">",
		"<span style=\"color:#ff8c00;\">",
		"<span style=\"color:#9932cc;\">",
		"<span style=\"color:#8b0000;\">",
		"<span style=\"color:#e9967a;\">",
		/*7*/
		"<span style=\"color:#8fbc8f;\">",
		"<span style=\"color:#483d8b;\">",
		"<span style=\"color:#2f4f4f;\">",
		"<span style=\"color:#2f4f4f;\">",
		"<span style=\"color:#00ced1;\">",
		"<span style=\"color:#9400d3;\">",
		"<span style=\"color:#ff1493;\">",
		/*8*/
		"<span style=\"color:#00bfff;\">",
		"<span style=\"color:#696969;\">",
		"<span style=\"color:#696969;\">",
		"<span style=\"color:#1e90ff;\">",
		"<span style=\"color:#cccccd;\">",
		"<span style=\"color:#b22222;\">",
		"<span style=\"color:#fffaf0;\">",
		/*9*/
		"<span style=\"color:#228b22;\">",
		"<span style=\"color:#4983b3;\">",
		"<span style=\"color:#ff00ff;\">",
		"<span style=\"color:#0000ff;\">",
		"<span style=\"color:#ff0000;\">",
		"<span style=\"color:#dcdcdc;\">",
		"<span style=\"color:#4d7455;\">",
		/*10*/
		"<span style=\"color:#f8f8ff;\">",
		"<span style=\"color:#ffd700;\">",
		"<span style=\"color:#daa520;\">",
		"<span style=\"color:#cccccc;\">",
		"<span style=\"color:#cccccc;\">",
		"<span style=\"color:#3eff3e;\">",
		"<span style=\"color:#adff2f;\">",
		/*11*/
		"<span style=\"color:#38f3ab;\">",
		"<span style=\"color:#f0fff0;\">",
		"<span style=\"color:#ff69b4;\">",
		"<span style=\"color:#e4ae33;\">",
		"<span style=\"color:#cd5c5c;\">",
		"<span style=\"color:#4b0082;\">",
		"<span style=\"color:#fffff0;\">",
		/*12*/
		"<span style=\"color:#f0e68c;\">",
		"<span style=\"color:#e6e6fa;\">",
		"<span style=\"color:#fff0f5;\">",
		"<span style=\"color:#7cfc00;\">",
		"<span style=\"color:#d32ce6;\">",
		"<span style=\"color:#fffacd;\">",
		"<span style=\"color:#add8e6;\">",
		/*13*/
		"<span style=\"color:#f08080;\">",
		"<span style=\"color:#e0ffff;\">",
		"<span style=\"color:#fafad2;\">",
		"<span style=\"color:#d3d3d3;\">",
		"<span style=\"color:#d3d3d3;\">",
		"<span style=\"color:#99ff99;\">",
		"<span style=\"color:#ffb6c1;\">",
		/*14*/
		"<span style=\"color:#ffa07a;\">",
		"<span style=\"color:#20b2aa;\">",
		"<span style=\"color:#87cefa;\">",
		"<span style=\"color:#778899;\">",
		"<span style=\"color:#778899;\">",
		"<span style=\"color:#b0c4de;\">",
		"<span style=\"color:#ffffe0;\">",
		/*15*/
		"<span style=\"color:#00ff00;\">",
		"<span style=\"color:#32cd32;\">",
		"<span style=\"color:#faf0e6;\">",
		"<span style=\"color:#ff00ff;\">",
		"<span style=\"color:#800000;\">",
		"<span style=\"color:#66cdaa;\">",
		"<span style=\"color:#0000cd;\">",
		/*16*/
		"<span style=\"color:#ba55d3;\">",
		"<span style=\"color:#9370d8;\">",
		"<span style=\"color:#3cb371\">",
		"<span style=\"color:#7b68ee;\">",
		"<span style=\"color:#00fa9a;\">",
		"<span style=\"color:#48d1cc;\">",
		"<span style=\"color:#c71585;\">",
		/*17*/
		"<span style=\"color:#191970;\">",
		"<span style=\"color:#f5fffa;\">",
		"<span style=\"color:#ffe4e1;\">",
		"<span style=\"color:#ffe4b5;\">",
		"<span style=\"color:#8847ff;\">",
		"<span style=\"color:#ffdead;\">",
		"<span style=\"color:#000080;\">",
		/*18*/
		"<span style=\"color:#b2b2b2;\">",
		"<span style=\"color:#fdf5e6;\">",
		"<span style=\"color:#9ec34f;\">",
		"<span style=\"color:#6b8e23;\">",
		"<span style=\"color:#ffa500;\">",
		"<span style=\"color:#ff4500;\">",
		"<span style=\"color:#da70d6;\">",
		/*19*/
		"<span style=\"color:#eee8aa;\">",
		"<span style=\"color:#98fb98;\">",
		"<span style=\"color:#afeeee;\">",
		"<span style=\"color:#d87093;\">",
		"<span style=\"color:#ffefd5\">",
		"<span style=\"color:#ffdab9;\">",
		"<span style=\"color:#cd853f;\">",
		/*20*/
		"<span style=\"color:#ffc0cb;\">",
		"<span style=\"color:#dda0dd;\">",
		"<span style=\"color:#b0e0e6;\">",
		"<span style=\"color:#800080;\">",
		"<span style=\"color:#4b69ff;\">",
		"<span style=\"color:#ff4040;\">",
		"<span style=\"color:#bc8f8f;\">",
		/*21*/
		"<span style=\"color:#4169e1;\">",
		"<span style=\"color:#8b4513;\">",
		"<span style=\"color:#fa8072;\">",
		"<span style=\"color:#f4a460;\">",
		"<span style=\"color:#2e8b57;\">",
		"<span style=\"color:#fff5ee;\">",
		"<span style=\"color:#70b04a;\">",
		/*22*/
		"<span style=\"color:#a0522d;\">",
		"<span style=\"color:#c0c0c0;\">",
		"<span style=\"color:#87ceeb;\">",
		"<span style=\"color:#6a5acd;\">",
		"<span style=\"color:#708090;\">",
		"<span style=\"color:#708090;\">",
		"<span style=\"color:#fffafa;\">",
		/*23*/
		"<span style=\"color:#00ff7f;\">",
		"<span style=\"color:#4682b4;\">",
		"<span style=\"color:#cf6a32;\">",
		"<span style=\"color:#d2b48c;\">",
		"<span style=\"color:#008080;\">",
		"<span style=\"color:#d8bfd8;\">",
		"<span style=\"color:#ff6347;\">",
		/*24*/
		"<span style=\"color:#40e0d0;\">",
		"<span style=\"color:#b0c3d9;\">",
		"<span style=\"color:#ffd700;\">",
		"<span style=\"color:#8650ac;\">",
		"<span style=\"color:#a50f79;\">",
		"<span style=\"color:#476291;\">",
		"<span style=\"color:#ee82ee;\">",
		/*25*/
		"<span style=\"color:#f5deb3;\">",
		"<span style=\"color:#ffffff;\">",
		"<span style=\"color:#f5f5f5;\">",
		"<span style=\"color:#ffff00;\">",
		"<span style=\"color:#9acd32;\">",
		"<span style=\"color:#ffffff;\">",
		"<span style=\"color:#ff0000;\">");
	if($curlyCon) {
			return str_ireplace($colorCodes,$colorStyles,$color);
		} else {
			return str_ireplace($colorStyles,$colorCodes,$color);
		}
	}

	function idToFlag($num) {
		if((int)$num === 1) {
			return "None";
		} else {
			require("config.php");
			$id = $conn->real_escape_string($num);
			$sql = $conn->query('SELECT flag FROM flags WHERE id = '.$id.' LIMIT 0,1;');
			$row = $sql->fetch_assoc();
			return strtoupper($row['flag']);
		}
	}

	function idToLoc($num) {
		require("config.php");
		$id = $conn->real_escape_string($num);
		$sql = $conn->query('SELECT location_title, loc FROM locations WHERE id = '.$id.' LIMIT 0,1;');
		$row = $sql->fetch_assoc();
		return $row['location_title']." (".$row['loc'].")";
	}
}

?>