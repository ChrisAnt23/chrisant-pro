<meta charset="utf-8">
<?php 
include("conexion.php");
?>
<?php 
include("inser.html");
?>

<?php
if ($_POST){
    $a=$_POST['id'];
    $b=$_POST['nom'];
    $c=$_POST['ap'];
    $d=$_POST['am'];
    $e=$_POST['ts'];
    $f=$_POST['dom'];
    $g=$_POST['tel'];
    $h=$_POST['nac'];
    $i=$_POST['ref'];

    $sql=("insert into 3_ronda (Id,Nombre,A_P,A_M,T_S,Dom,Tel,Nac,Ref)values ('$a','$b','$c','$d','$e','$f','$g','$h','$i')") or dile(mysql_error());
    if(mysqli_query($con,$sql)){
    echo"<script>
            alert('El registro se guardo correctamente');
            </script>";
    }
    else{
        echo"<script>
            alert('El paciente ya existe en la base de datos y no se puede dar de alta');
            </script>";
    }
}
?>

<?php
if ($_POST){
    $k=$_POST['id'];

    $sql="delete from 3_ronda where Id='$k'";
    if(mysqli_query($con,$sql)){
        echo"<script>
            alert('El registro se elimino correctamente');
            </script>";
    }
    else{
        echo"<script>
            alert('Error, no se elimino el registro, favor de verificar');
            </script>";
    }

}
?>