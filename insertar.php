<meta charset="utf-8">
<?php 
include("conexion.php");
?>

<form action="" method="post">
    Folio: <input required name="fol"><br />
    Nombre: <input name="nom"><br />
    A_P: <input name="ap"><br />
    Password: <input name="pass"><br />
    <input type="submit">
</form>

<?php
if ($_POST){
    $f=$_POST['fol'];
    $n=$_POST['nom'];
    $a=$_POST['ap'];
    $p=$_POST['pass'];

    $sql=("insert into 3_medicos (Folio,Nombre,A_P,Password)values ('$f','$n','$a','$p')") or dile(mysql_error());
    if(mysqli_query($con,$sql)){
    echo"<script>
            alert('El registro se guardo correctamente');
            </script>";
    }
    else{
        echo"<script>
            alert('El alumno ya existe en la base de datos y no se puede dar de alta');
            </script>";
    }
}
?>