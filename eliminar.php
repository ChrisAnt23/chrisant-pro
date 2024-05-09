<meta charset="utf-8">
<?php 
include("conexion.php");
?>

<form action="" method="post">
    Inserta el id a eliminar: <input required name="id"><br>
    <input type="submit">
</form>

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

<meta charset="utf-8">
<?php 
include("conexion.php");
?>

<form action="" method="post">
    Inserta el id a eliminar: <input required name="id"><br>
    <input type="submit">
</form>

<?php
if ($_POST){
    $i=$_POST['id'];

    $sql="delete from 16_ronda where Id='$i'";
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