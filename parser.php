<?php
$mytime=time();
$mydog="My Dog Ate My PHP!";
$transcript="General George";

# Your Parsing String:
$s1 = 'Hyphen Variable Preserving: $mytime, and $mydog';
echo "Before: <br><br>$s1<br><br>";

# Remember, wherever you define this, it will not be defined GLOBAL into the function
# which is why we define it here. Defining it global could lead to security issues.
$vardata=get_defined_vars();

# Parse the string
$s1 = StrParse($transcript,$vardata);

echo "After: <br><br>$s1";

function StrParse($str,$vardata) {
# Takes a string, or piece of data, that contains PHP Variables

# For example, unparsed variables like:  Test using time: $mytime
# This example shows $mytime, and not the actual variable value.
# The end result shows the actual variable value of $mytime.

# This is useful for building a content management system,
# and directing your variables into your content data,
# where content is stored in a file or database, unparsed.
# Of course this could slow down page loads, but it's a good way
# to parse data from current variables into your loaded new data
# making it compatible.

# Then the variables are replaced with the actual variable..
$getvarkeys=array_keys($vardata);
$ret=$str;
for ($x=0; $x < count($getvarkeys); $x++) {
    $myvar=$getvarkeys[$x];
    echo "Variable: " . $myvar . " [" . $vardata[$myvar] . "]<br>";
    if($vardata[$myvar]=="General George")
    {
    	echo "Found a General<br>";
    }
    #echo "$getvarkeys[x]";
    $ret=str_replace('$' . $myvar, $vardata[$myvar], $ret);
}
return $ret;

}

$str = explode(" ", $transcript);

echo "<br>$str[0]<br>";

function parse($s2)
{
	for($i=0; $i < 2; $i++)
	{
		if($s2[$i]=="General")
		{
			echo "Parsed a General";
		}
	}
	return $s2;
}

parse($str);

#function parse($str)
#{
#	for($i=0; $i < strlen($str); $i++)
#	{
#		if
#	}
#}



?>