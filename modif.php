<?php

	if ($_POST["submit"] !== "OK" || !$_POST["login"] || !$_POST["passwd"])
	{
		echo "ERROR\n";
		return ;
	}
	else 
	{
		if (!file_exists("../private/passwd"))
			mkdir ("../private/");
		$pass = hash("whirlpool", $_POST['passwd']);
		$new = array('login' =>  $_POST["login"], 'passwd' => $pass);
		$array = unserialize(file_get_contents("../private/passwd"));
		foreach ($array as $elem)
		{
			if ($elem['login'] === $_POST['login'])
			{
				echo "ERROR\n";
				return ;
			}
		}
		$array[] = $new;
		file_put_contents("../private/passwd", serialize($array));
		echo "OK\n";
	}

?>