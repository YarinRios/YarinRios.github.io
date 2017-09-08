<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Votaciones a Rector UTP 2017</title>
  <link href="css/bootstrap.css" rel="stylesheet" media="screen">
  <link href="css/votaciones.css" rel="stylesheet" media="screen">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <?php
      include("conexion.php");
      @$boton = $_POST["benviar"];
      if(@$boton){
        $est=$_POST["estamento"];
        $cand=$_POST["candidato"];
        $sql = "INSERT INTO VOTOS VALUES ('$est', '$cand')";
        $res = mysqli_query($conexion, $sql) or die (mysql_error());
        echo "<script language=JavaScript>alert('Voto Efectuado');</script>";
      }
    echo "
    <div class=todo>
    <form action=index.php method=post>
      <div class='styleback container jumbotron'>
          <h1>VOTACIONES A RECTOR 2017</h1>
          <hr />
          <div class='form-group styleselect'>
            <label for=sel1>Escoja su estamento:</label>
            <select class=form-control id=sel1 value=estamento name=estamento>
              <option selected disabled>Estamentos...</option>
              <option>Estudiante</option>
              <option>Docente Tiempo Completo</option>
              <option>Docente Tiempo Parcial</option>
              <option>Administrativos e Investigadores</option>
            </select>
            <br /><br />
            <label for=sel1>Escoja su candidato a Rector:</label>
            <select class=form-control id=sel2 name=candidato>
              <option selected disabled>Candidatos...</option>
              <option>Ing. Angela Laguna</option>
              <option>Dr. Edilberto Hall</option>
              <option>Ing. Hector Montemayor</option>
              <option>Ing. Alberto Parrilla</option>
              <option>Dr. Omar Aizpurúa</option>
              <option>Dra. Mariana Archibold de McPherson</option>
            </select>
            <br /><br />
            <div class=center>
              <button name=benviar type=submit class='buttoncenter btn btn-success' value=enviar>Enviar</button>
            </div>
          </div>
        </div>
    </form>
    </div>
  ";?>
  <footer>
  <div class="center col-xs-12">
    <div class="col-xs-2"><img src="css/img/logoutp.png" class="logo" /></div>
    <div class="col-xs-8 pie">
        Universidad Tecnológica de Panamá
        <br />Ing. de Sistemas y Computación
        <br />2017
        </h6>
    </div>
    <div class="col-xs-2"><img src="css/img/FISC.png" class="logo" /></div>
  </div>
  </footer>
</body>
</html>
