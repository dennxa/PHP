<?php
include("./inc/settings.php");
validar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/estilos.css"> 
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Actualizar</title>
</head>
<body>
  

<?php
/*
echo $_POST ['identificador']."<br>\n";
echo $_POST ['nombre']."<br>\n";
echo $_POST ['fecha']."<br>\n";
echo $_POST ['numero']."<br>\n";
echo $_POST ['numdouble']."<br>\n";

$identificador=$_POST ['identificador'];
$nombre=$_POST ['nombre'];
$fecha=$_POST ['fecha'];
$numero=$_POST ['numero'];  
$numdouble=$_POST ['numdouble'];
*/

$query="SELECT column1, column2, column3, column4, column5 FROM table1 WHERE column1 = ".$_GET['colum1'].";";

//echo $query;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$result = $conn->query($query);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ( $conn->query($query)== TRUE){
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      
      ?><br><br>
      <form action="update2.php" method="POST">
        <center>
          <fieldset style="width:500px">
            <legend> <center> <b> Cambie la información del registro.</b></center></legend> <br>
              <b> Id:</b> <input type="number" name="identificador" id="" value="<?= $row['column1'] ?>" class="w3-input" readonly><br>
              <b> Nombre:</b> <input type="text" name="nombre" id="" value="<?= $row['column2'] ?>" class="w3-input"><br>
              <b> Fecha:</b> <input type="date" name="fecha" id="" value="<?= $row['column3'] ?>"><br>
              <b> Numero:</b> <input type="number" name="numero" id="" value="<?= $row['column4'] ?>" class="w3-input"><br> 
              <b> Num.Double:</b> <input type="number" name="numdouble" id="" value="<?= $row['column5'] ?>" class="w3-input"><br>
              <br>
              <input type="submit" value="Modificar"><br> <br>
          </fieldset>
        </center>
      </form>
      <?php
    }
}else{
    echo "Algo salio mal <a href='https://localhost/crud/crud.php'> clic aqui para volver al crud</a>" ;
    
}
?>
</body>
</html>