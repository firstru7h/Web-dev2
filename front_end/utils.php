<?php

function hyperlink($url, $link)
{
	return "<a href='" . $url . "'>" . ($link === false ? $url : $link) . "</a>";
}


function dropdown($name, $arr)
{
	$rowsSoFar = "";
    foreach ($arr as $key=>$val) 
    {
    	$rowsSoFar .= "<option value='$val'>$val</option>\n";
    }
    return "<select name='$name' id='$name'>\n$rowsSoFar</select>\n";
}

//prints an html table to test connection
function createTable($whereStatements)
{
    ($connect = mysqli_connect("localhost", "lfg", "lfgforall", "OpenLFG")) or die('connect failed.');
    $table = mysqli_query($connect, "select * from OpenLFG.Posts".$whereStatements);
    echo "<table class='mytable' border='3px'>";
    echo "<tr><td>PostID</td><td>Region</td><td>Platform</td><td>Game</td><td>Event</td>
    	  <td>Username</td><td>Note</td><td>Post Time</td></tr>"; 
    while($row = mysqli_fetch_array($table))
    { 
        echo "<tr><td>" . htmlspecialchars($row['PostID']) . "</td><td>" . htmlspecialchars($row['Region']) . "</td><td>" 
        	. htmlspecialchars($row['Platform']) . "</td><td>" . htmlspecialchars($row['Game']) . "</td><td>" . htmlspecialchars($row['Event']) 
       	    . "</td><td>" . htmlspecialchars($row['Username']) . "</td><td>" . htmlspecialchars($row['Note']) . "</td><td>" 
       	    . $row['PostTime'] . "</td></tr>"; 
    }
    echo "</table>";
    mysql_close($connect);
    
}

//adds entry to database for later retrieval. If successful, prints the entry, else returns error.
function createEntry()
{
    ($conn = mysqli_connect("localhost", "lfg", "lfgforall", "OpenLFG")) or die('Database Connection Failed. Please wait and try again.');
	
	$region = specialCharCheck($_GET['regions']);
	$platform = specialCharCheck($_GET['consoles']);
	$game = specialCharCheck($_GET['gtitle']);
	$event = specialCharCheck($_GET['ptitle']);
	$username = specialCharCheck($_GET['username']);
	$note = nl2br(specialCharCheck($_GET['description']));
	date_default_timezone_set('America/New_York');
	$postTime = date("Y-m-d H:i:s");
	
	$qu = 'INSERT INTO OpenLFG.Posts (Region, Platform, Game, Event, Username, Note, PostTime) VALUES ("'.$region.'", "'.$platform.'", "'.$game.'", "'.$event.'", "'.$username.'", "'.$note.'", "'.$postTime.'")';
	$ins = mysqli_query($conn, $qu);
	
	if ($ins and !($region == "" or $platform == "" or $game == "" or $event == "" or $username == ""))
	{
		$qu = 'SELECT * FROM OpenLFG.Posts WHERE Region="'.$region.'" AND Platform="'.$platform.'" AND Game="'.$game.'" AND Event="'.$event.'" AND Username="'.$username.'" AND PostTime="'.$postTime.'"';
		
		$table = mysqli_query($conn, $qu);
		echo "testersffdg";
		echo "<table class='mytableN'>";
		while($row = mysqli_fetch_array($table))
		{ 
			echo "<tr><td colspan='2' class='title'>" . $row['Event'] . "</td></tr>";
			echo "<tr><td colspan='2' class='title'>" . $row['Game'] . "</td></tr>";
			echo "<tr><td class='side'>" . $row['Platform'] . "<br />" . $row['Region'] . "</td><td rowspan='2' class='descrip'>" . $row['Note'] . "</td></tr>";
			echo "<tr><td class='side'> </td>";
			echo "<tr class='sty'><td colspan='2'><div class='left'>" . $row['PostID'] . "</div><div class='right'>" . $row['PostTime'] . "</td></tr>";
		}
		echo "</table>";
	}
	else
	{
		echo "<p class='lead'>There was a problem with submitting the post. Please go back and try again.</p>";
	}
    
    mysqli_close($conn);
}

//validates text fields by checking that they are not empty and less than the max length
function validateText($txt, $maxLength) {
	  return false;    
    if (!$txt) {
      return "$txt is a required field<br/>";
      }
    if (strlen($txt) > $maxLen) {
      return "$txt must be less than $maxLen characters long<br/>";
      }
    }
	
	/**
	 * return string that checks if magic quotes is true, strip slashes from 
	 * input (if false keep original input) then run htmlspecial chars
	 * @param $input a string
	 */
	function specialCharCheck($input)
	{
		$pattern = '/\\\\n/';
		return preg_replace($pattern, '', htmlspecialchars((get_magic_quotes_gpc() ? stripslashes($input) : $input)));
	}

?>
