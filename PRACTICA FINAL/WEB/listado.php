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


// Si bandera=1, usamos el php de conexion con la base de datos

if ($bandera==1){

    //include('connection.php');   // Los values son los del formulario de usuario
    $busca = $_POST['nserie'];
    $sql ="SELECT * FROM mediciones WHERE idnumserie = '$busca' ORDER BY fecha DESC";

    $resultado=mysqli_query($conn,$sql);
   
// comprobar si inserta o no en la tabla de turno 

//   if ($insertar) {
    echo "Listado de lecturas";

// Almacenar los resultados en un array
	$resultados = [];
	while ($fila = mysqli_fetch_assoc($resultado)) {
    	$resultados[] = $fila;
	}

// Generar el código HTML para mostrar los resultados
	echo "<ul>";
	foreach ($resultados as $resultado) {
    	echo "<li> Fecha de Lectura: " . $resultado['fecha'] . "  Hora: " . $resultado['hora'] . "</li>";
	}
	echo "</ul>";

    echo "<a href='index.html'> Volver al inicio </a>";
//   } else 
//   {
//    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//   }

// cierro la conexion a la base de datos 

mysqli_close($conn);
}

else {

    echo "<a href='index.html'> Volver al inicio </a>";


}
?>
