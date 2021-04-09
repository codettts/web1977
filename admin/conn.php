<?php
$conn_string= "host=ec2-23-22-191-232.compute-1.amazonaws.com port=5432 dbname=d5kg68i2c9e8e1 user=gypewunfvnsgyy password=11c74095e3c4e49f75ba46bc2cdfa54b764e2a8f50ea90a047649e77ef517d3c"; 
$dbconn= pg_connect($conn_string);
if (isset($_POST['username'])) {
	$username=$_POST['username'];

}
if (isset($_POST['password'])) {
	$password=$_POST['password'];
}
$result= pg_query($dbconn, "SELECT * FROM tbl_user");
while ($row=pg_fetch_row($result)) {
	if ($row[0]==$username && $row[1]==$password) {
		echo "Successfull";
	}else{
		echo "........";
	}
}
?>