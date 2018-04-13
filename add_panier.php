<?php
function check()
{
	$key = $_GET['name'];
	if ($key == "H")
		$key = "Homme";
	if ($key == "F")
		$key = "Femme";
	if ($key == "K")
		$key = "Enfant";
	return ($key);
}
$key = check();
$value = $_GET['id'];
echo "<html><body>";
echo "<h1>"."$key"."</h1>";
echo "<img src="."$value>";
echo "</html></body>";
print_r($_GET);
?>
