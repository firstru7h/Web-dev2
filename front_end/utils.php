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
function createTable()
{
    ($connect = mysqli_connect("localhost", "lfg", "lfgforall", "OpenLFG")) or die('connect failed.');
    $table = mysqli_query($connect, "select * from OpenLFG.Posts");
    echo "<table class='mytable' border='3px'>";
    echo "<tr><td>PostID</td><td>Region</td><td>Platform</td></tr>"; 
    while($row = mysqli_fetch_array($table))
    { 
        echo "<tr><td>" . $row['PostID'] . "</td><td>" . $row['Region'] . "</td><td>" . $row['Platform'] . "</td></tr>"; 
    }
    echo "</table>";
    mysql_close($connect);
    
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

?>