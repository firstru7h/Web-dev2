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

//prints an html table of Skills with skillName, ability, and minlevel
function createTable()
{
    ($connect = mysql_connect("localhost", "lfg", "lfgforall", "lfg")) or die('connect failed.');
    $table = mysql_query($connect, "select * from OpenLFG.Posts");
    echo "<table class='mytable' border='3px'>";
    echo "<tr><td>PostID</td><td>Region</td><td>Platform</td></tr>"; 
    while($row = mysql_fetch_array($table))
    { 
        $rowSkill = $row['skillName'];
        echo "<tr><td>" . $row['PostID'] . "</a></td><td>" . $row['Region'] . "</td><td>" . $row['Platform'] . "</td></tr>"; 
    }
    echo "</table>";
    mysql_close($connect);
}

?>