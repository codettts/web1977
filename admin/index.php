<?php 
include("conn.php");
if($_SERVER['REQUEST_METHOD']=='GET' && !empty($_GET['idxoa']))
{
	$idxoa=$_GET['idxoa'];
	$sql ="DELETE from product WHERE id={$idxoa} limit 1";
	if(mysqli_query($conn,$sql))
	{
		echo"Delete product have ID: " .$idxoa ." successful <br>";

	}
	else
	{
		echo"Error: ".mysqli_error($conn);
	}
}

include("header.php");
include("listsp.php");
?>