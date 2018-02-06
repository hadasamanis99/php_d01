<!DOCTYPE html>

<html>

<head>
	<link rel="stylesheet" href="php_d01.css">

<title>Hello World</title>


<body>
 
 <h1>
 <?php $name= " I'm SWEETY " ;
 echo "Hello".$name. "\n"; 
 ?>

</h1>

<h2>
	<?php

	$d=date("D");
	if ($d=="monday")
	echo "Happy Monday, darling!";
	elseif ($d=="tuesday")
	echo "Have a nice day!";
	else echo "Have a nice day, darling!";
?>

<?php
	$d=date("D");
	switch ($d)
{
	case "Mon":
	echo "Today is Monday";
	break;
	case "Tue":
	echo "Today is Tuesday";
	break;
	case "Wed":
	echo "Today is Wednesday";
	break;
	case "Thu":
	echo "Today is Thursday";
	break;
	case "Fri":
	echo "Today is Friday";
	break;
	case "Sat":
	echo "Today is Saturday";
	break;
	case "Sun":
	echo "Today is Sunday";
	break;
default:
echo "Wonder which day is this ?";

}

?>

<p>

<?php
	$a = 0;
	$b = 0;
	for( $i=0; $i<5; $i++ )
{ 
	$a += 10;
	$b += 5;

}

// Output:

// At the end of the loop a=50 and b=25

echo ("At the end of the loop a=$a and b=$b");

?>
	<?php
	$i = 0;
	$num = 50;
	while( $i < 10)

{
	$num--;
	$i++;

}

echo ("Loop stopped at i = $i and num = $num" );
?>

<?php
	$i = 0;
	$num = 0;
do
{
$name = "Hadasa";
$i++;
} while( $i < 10 );
echo ("Loop stopped at i = $i" );

for ($i=0;$i<10;$i++){
	echo $name . "<br>";
}

$Favtrip = array( "Japan", "Bali", "Greek", "Roma", "Hak Long Bay", "Iceland", "Myanmar", "Laos", "Waldviertel", "Hallstaat" );

foreach( $Favtrip as $value )

{

 echo "Value is $value <br>";

}
echo count($Favtrip);
//assosiative array
$comics= array( 
	"Asterix & Obelix" => "Goscinny & Uderzo",
	"Garfield" => "Jim Davis",
	"Crayon Shin Chan" => "Yoshito Usui",
	"Doraemon" => "Fujiko F. Fujio",

);
foreach ($comics as $key=> $value){
	echo "<p> $key - $value </p>";
}

$salaries = array(

 "mark" => 2000,

 "anthony" => 1000,

 "eric" => 500

 );

echo "Salary of mark is ". $salaries['mark'] . "<br />";

echo "Salary of anthony is ". $salaries['anthony']. "<br />";

echo "Salary of eric is ". $salaries['eric']. "<br />";

/* Second method to create array. */

$salaries['mark'] = "high";

$salaries['anthony'] = "medium";

$salaries['eric'] = "low";

echo "Salary of mark is ". $salaries['mark'] . "<br />";

echo "Salary of anthony is ". $salaries['anthony']. "<br />";

echo "Salary of eric is ". $salaries['eric']. "<br />";


?>



</p1>

</body>

</html>




