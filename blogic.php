<?php

	include("db.php");
	$h="";
	function OpenConnection()
	{
		global $h;
		$h = mysql_connect(SERVER,USERNAME,PASSWORD);
		mysql_select_db(DATABASE);
	}

	function CloseConnection()
	{
		global $h;
		mysql_close($h);
	}

	function ExecuteNonQuery($query) //For Insert,Update,Delete...
	{
		OpenConnection();
		mysql_query($query);
		return mysql_affected_rows();
		CloseConnection();
	}

	function ExecuteQuery($query) //For Select...
	{
		OpenConnection();
		$res=mysql_query($query);
		return $res;
		CloseConnection();
	}

?>