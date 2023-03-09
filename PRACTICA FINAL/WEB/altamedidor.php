<?php 
//Conectamos con la base de datos

include('connection.php');

//Comprobamos si los campos obligatorios estan vacios
//Cuando bandera=1 Se permite la inserción en la base de datos, cuando es bandera=0 no se permite

$bandera=1; 

//Comprobando si los campos estan vacios o no

if (empty ($_POST['nserie']))
{
    echo "<br>Campo Numero de serie obligatorio";
    $bandera=0;
}

if (empty ($_POST['provincia']))
{
    echo "<br>Campo Provincia obligatorio";
    $bandera=0;
}

if (empty ($_POST['localidad']))
{
    echo "<br>Campo Localidad obligatorio";
    $bandera=0;
}

if (empty ($_POST['direccion']))
{
    echo "<br>Campo Dirección obligatorio";
    $bandera=0;
}


// Si bandera=1, usamos el php de conexion con la base de datos

if ($bandera==1){

    //include('connection.php');   // Los values son los del formulario de usuario

    $sql ="INSERT INTO dispositivos (numserie, provincia, localidad, direccion) values ('".$_POST['nserie']."','".$_POST['provincia']."','".$_POST['localidad']."','".$_POST['direccion']."')";

    $insertar=mysqli_query($conn,$sql);
   
// comprobar si inserta o no en la tabla de turno 

   if ($insertar) {

    echo "New record created successfully";

    echo "<a href='index.html'> Volver al inicio </a>";
   } else 
   {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }

// cierro la conexion a la base de datos 

mysqli_close($conn);
}

else {

    echo "<a href='index.html'> Volver al inicio </a>";


}
?>
