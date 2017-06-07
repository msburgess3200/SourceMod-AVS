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
	function gameIdToTitle($num) {
		switch ($num) {
          case 0: $return = "Unknown"; break;
          case 1: $return = "All Games"; break;
          case 2: $return = "Team Fortress 2"; break;
          case 3: $return = "Left 4 Dead 2"; break;
          default: $return = "Unknown"; break;
        }
        return $return;
	}
}

class adz extends common
{
	function convertColor($color, $curlyCon = true) {
	$colorCodes = array("{aliceblue}","{allies}","{ancient}","{antiquewhite}","{aqua}","{aquamarine}","{arcana}","{axis}","{azure}","{beige}","{bisque}","{black}","{blanchedalmond}","{blue}","{blueviolet}","{brown}","{burlywood}","{cadetblue}","{chartreuse}","{chocolate}","{collectors}","{cyan}","{darkblue}","{darkcyan}","{darkgoldenrod}","{darkgray}","{darkgrey}","{darkgreen}","{darkkhaki}","{darkmagenta}","{darkolivegreen}","{darkorange}","{darkorchid}","{darkred}","{darksalmon}","{darkseagreen}","{darkslateblue}","{darkslategray}","{darkturquoise}","{darkviolet}","{deeppink}","{deepskyblue}","{dimgray}","{dimgrey}","{dodgerblue}","{exalted}","{firebrick}","{floralwhite}","{forestgreen}","{frozen}","{fuchsia}","{fullblue}","{fullred}","{gainsboro}","{genuine}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}","{}");
	$colorStyles = array("<span style=\"color:#F0F8FF;\">","<span style=\"color:#4D7942;\">","<span style=\"color:#EB4B4B;\">","<span style=\"color:#FAEBD7;\">","<span style=\"color:#00FFFF;\">","<span style=\"color:#7FFFD4;\">","<span style=\"color:#ADE55C;\">","<span style=\"color:#FF4040;\">","<span style=\"color:#007FFF;\">","<span style=\"color:#F5F5DC;\">","<span style=\"color:#FFE4C4;\">","<span style=\"color:#00FFFF;\">","<span style=\"color:#000000;\">","<span style=\"color:#FFEBCD;\">","<span style=\"color:#99CCFF;\">","<span style=\"color:#8A2BE2;\">","<span style=\"color:#A52A2A;\">","<span style=\"color:#DEB887;\">","<span style=\"color:#5F9EA0;\">","<span style=\"color:#7FFF00;\">","<span style=\"color:#D2691E;\">","<span style=\"color:#AA0000;\">","<span style=\"color:#00008B;\">","<span style=\"color:#008B8B;\">","<span style=\"color:#B8860B;\">","<span style=\"color:#A9A9A9;\">","<span style=\"color:#A9A9A9;\">","<span style=\"color:#006400;\">","<span style=\"color:#BDB76B;\">","<span style=\"color:#8B008B;\">","<span style=\"color:#556B2F;\">","<span style=\"color:#FF8C00;\">","<span style=\"color:#9932CC;\">","<span style=\"color:#8B0000;\">","<span style=\"color:#E9967A;\">","<span style=\"color:#8FBC8F;\">","<span style=\"color:#483D8B;\">","<span style=\"color:#2F4F4F;\">","<span style=\"color:#00CED1;\">","<span style=\"color:#9400D3;\">","<span style=\"color:#FF1493;\">","<span style=\"color:#00BFFF;\">","<span style=\"color:#696969;\">","<span style=\"color:#696969;\">","<span style=\"color:#1E90FF;\">","<span style=\"color:#CCCCCD;\">","<span style=\"color:#B22222;\">","<span style=\"color:#228B22;\">","<span style=\"color:#4983B3;\">","<span style=\"color:#FF00FF;\">","<span style=\"color:#0000FF;\">","<span style=\"color:#FF0000;\">","<span style=\"color:#DCDCDC;\">","<span style=\"color:#4D7455;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">","<span style=\"color:#;\">");
		if($curlyCon) {
			return str_ireplace($colorCodes,$colorStyles,$color);
		} else {
			return str_ireplace($colorStyles,$colorCodes,$color);
		}
	}
}

?>