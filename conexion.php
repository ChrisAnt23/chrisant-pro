<?php 
$con=mysqli_connect("127.0.0.1","root","","hospital1");
if($con)
{
    echo"si se conecto";
}
else
{
    echo"no se conecto";
}
?>