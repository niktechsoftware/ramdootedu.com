<?php
$con=mysqli_connect('localhost','root','','daffodils');
$q=mysqli_query($con,"insert into career(message,name,email) values('".$_POST['message']."','".$_POST['name']."'.'".$_POST['email']."')");
if($q)
{
	echo "inserted";

}
else
{
echo "not inserted";
}





?>