<?php

if ($_FILES["archivo"]["error"] > 0) {
    echo "Error al subir el archivo.";
} else {
    // Aquí puedes agregar el código para procesar el archivo según tus requisitos
    // Por ejemplo, puedes incluir el script que proporcioné anteriormente para reemplazar espacios.
    
    $archivo_temporal = $_FILES["archivo"]["tmp_name"];
    $nombre_archivo = $_FILES["archivo"]["name"];
    
    // Leer el contenido del archivo
    $contenido = file_get_contents($archivo_temporal);

    //Terminos

    if(isset($_POST['debito'])){
      $terminos = array(
        "0 CO" => "0;CO",
        "0 PA" => "0;PA",
        "1 CO" => "1;CO",
        "1 PA" => "1;PA",
        "2 CO" => "2;CO",
        "2 PA" => "2;PA",
        "3 CO" => "3;CO",
        "3 PA" => "3;PA",
        "4 CO" => "4;CO",
        "4 PA" => "4;PA",
        "5 CO" => "5;CO",
        "5 PA" => "5;PA",
        "6 CO" => "6;CO",
        "6 PA" => "6;PA",
        "7 CO" => "7;CO",
        "7 PA" => "7;PA",
        "8 CO" => "8;CO",
        "8 PA" => "8;PA",
        "9 CO" => "9;CO",
        "9 PA" => "9;PA",
        "0 0" => "0;0",
        "0 1" => "0;1",
        "0 2" => "0;2",
        "0 3" => "0;3",
        "0 4" => "0;4",
        "0 5" => "0;5",
        "0 6" => "0;6",
        "0 7" => "0;7",
        "0 8" => "0;8",
        "0 9" => "0;9",
        "1 0" => "1;0",
        "1 1" => "1;1",
        "1 2" => "1;2",
        "1 3" => "1;3",
        "1 4" => "1;4",
        "1 5" => "1;5",
        "1 6" => "1;6",
        "1 7" => "1;7",
        "1 8" => "1;8",
        "1 9" => "1;9",
        "2 0" => "2;0",
        "2 1" => "2;1",
        "2 2" => "2;2",
        "2 3" => "2;3",
        "2 4" => "2;4",
        "2 5" => "2;5",
        "2 6" => "2;6",
        "2 7" => "2;7",
        "2 8" => "2;8",
        "2 9" => "2;9",
        "3 0" => "3;0",
        "3 1" => "3;1",
        "3 2" => "3;2",
        "3 3" => "3;3",
        "3 4" => "3;4",
        "3 5" => "3;5",
        "3 6" => "3;6",
        "3 7" => "3;7",
        "3 8" => "3;8",
        "3 9" => "3;9",
        "4 0" => "4;0",
        "4 1" => "4;1",
        "4 2" => "4;2",
        "4 3" => "4;3",
        "4 4" => "4;4",
        "4 5" => "4;5",
        "4 6" => "4;6",
        "4 7" => "4;7",
        "4 8" => "4;8",
        "4 9" => "4;9",
        "5 0" => "5;0",
        "5 1" => "5;1",
        "5 2" => "5;2",
        "5 3" => "5;3",
        "5 4" => "5;4",
        "5 5" => "5;5",
        "5 6" => "5;6",
        "5 7" => "5;7",
        "5 8" => "5;8",
        "5 9" => "5;9",
        "6 0" => "6;0",
        "6 1" => "6;1",
        "6 2" => "6;2",
        "6 3" => "6;3",
        "6 4" => "6;4",
        "6 5" => "6;5",
        "6 6" => "6;6",
        "6 7" => "6;7",
        "6 8" => "6;8",
        "6 9" => "6;9",
        "7 0" => "7;0",
        "7 1" => "7;1",
        "7 2" => "7;2",
        "7 3" => "7;3",
        "7 4" => "7;4",
        "7 5" => "7;5",
        "7 6" => "7;6",
        "7 7" => "7;7",
        "7 8" => "7;8",
        "7 9" => "7;9",
        "8 0" => "8;0",
        "8 1" => "8;1",
        "8 2" => "8;2",
        "8 3" => "8;3",
        "8 4" => "8;4",
        "8 5" => "8;5",
        "8 6" => "8;6",
        "8 7" => "8;7",
        "8 8" => "8;8",
        "8 9" => "8;9",
        "9 0" => "9;0",
        "9 1" => "9;1",
        "9 2" => "9;2",
        "9 3" => "9;3",
        "9 4" => "9;4",
        "9 5" => "9;5",
        "9 6" => "9;6",
        "9 7" => "9;7",
        "9 8" => "9;8",
        "9 9" => "9;9",
        ". ," => ".;,",
        "0 ," => "0;,",
        "1 ," => "1;,",
        "2 ," => "2;,",
        "3 ," => "3;,",
        "4 ," => "4;,",
        "5 ," => "5;,",
        "6 ," => "6;,",
        "7 ," => "7;,",
        "8 ," => "8;,",
        "9 ," => "9;,",
        "NA 0" => "NA;0",
        "NA 1" => "NA;1",
        "NA 2" => "NA;2",
        "NA 3" => "NA;3",
        "NA 4" => "NA;4",
        "NA 5" => "NA;5",
        "NA 6" => "NA;6",
        "NA 7" => "NA;7",
        "NA 8" => "NA;8",
        "NA 9" => "NA;9",
        "DE C" => ";;DE C",
        "DE R" => ";;DE R",
        "DEL " => ";;DEL ",
        "EL 0" => ";;EL 0",
        "EL 1" => ";;EL 1",
        "RA " => ";;RA ",
        "S 0" => "S;0",
        "S 1" => "S;1",
        "S 2" => "S;2",
        "S 3" => "S;3",
        "S 4" => "S;4",
        "S 5" => "S;5",
        "S 6" => "S;6",
        "S 7" => "S;7",
        "S 8" => "S;8",
        "S 9" => "S;9",
        "O 0" => "O;0",
        "O 1" => "O;1",
        "O 2" => "O;2",
        "O 3" => "O;3",
        "O 4" => "O;4",
        "O 5" => "O;5",
        "O 6" => "O;6",
        "O 7" => "O;7",
        "O 8" => "O;8",
        "O 9" => "O;9",
        "D 0" => "D;0",
        "D 1" => "D;1",
        "D 2" => "D;2",
        "D 3" => "D;3",
        "D 4" => "D;4",
        "D 5" => "D;5",
        "D 6" => "D;6",
        "D 7" => "D;7",
        "D 8" => "D;8",
        "D 9" => "D;9",
        "S ," => "S;,",
        "O ," => "O;,",
        "D ," => "D;,",
    );
    }elseif(isset($_POST['credito'])){
      $terminos = array(
        "0 0" => "0;0",
        "0 1" => "0;1",
        "0 2" => "0;2",
        "0 3" => "0;3",
        "0 4" => "0;4",
        "0 5" => "0;5",
        "0 6" => "0;6",
        "0 7" => "0;7",
        "0 8" => "0;8",
        "0 9" => "0;9",
        "1 0" => "1;0",
        "1 1" => "1;1",
        "1 2" => "1;2",
        "1 3" => "1;3",
        "1 4" => "1;4",
        "1 5" => "1;5",
        "1 6" => "1;6",
        "1 7" => "1;7",
        "1 8" => "1;8",
        "1 9" => "1;9",
        "2 0" => "2;0",
        "2 1" => "2;1",
        "2 2" => "2;2",
        "2 3" => "2;3",
        "2 4" => "2;4",
        "2 5" => "2;5",
        "2 6" => "2;6",
        "2 7" => "2;7",
        "2 8" => "2;8",
        "2 9" => "2;9",
        "3 0" => "3;0",
        "3 1" => "3;1",
        "3 2" => "3;2",
        "3 3" => "3;3",
        "3 4" => "3;4",
        "3 5" => "3;5",
        "3 6" => "3;6",
        "3 7" => "3;7",
        "3 8" => "3;8",
        "3 9" => "3;9",
        "4 0" => "4;0",
        "4 1" => "4;1",
        "4 2" => "4;2",
        "4 3" => "4;3",
        "4 4" => "4;4",
        "4 5" => "4;5",
        "4 6" => "4;6",
        "4 7" => "4;7",
        "4 8" => "4;8",
        "4 9" => "4;9",
        "5 0" => "5;0",
        "5 1" => "5;1",
        "5 2" => "5;2",
        "5 3" => "5;3",
        "5 4" => "5;4",
        "5 5" => "5;5",
        "5 6" => "5;6",
        "5 7" => "5;7",
        "5 8" => "5;8",
        "5 9" => "5;9",
        "6 0" => "6;0",
        "6 1" => "6;1",
        "6 2" => "6;2",
        "6 3" => "6;3",
        "6 4" => "6;4",
        "6 5" => "6;5",
        "6 6" => "6;6",
        "6 7" => "6;7",
        "6 8" => "6;8",
        "6 9" => "6;9",
        "7 0" => "7;0",
        "7 1" => "7;1",
        "7 2" => "7;2",
        "7 3" => "7;3",
        "7 4" => "7;4",
        "7 5" => "7;5",
        "7 6" => "7;6",
        "7 7" => "7;7",
        "7 8" => "7;8",
        "7 9" => "7;9",
        "8 0" => "8;0",
        "8 1" => "8;1",
        "8 2" => "8;2",
        "8 3" => "8;3",
        "8 4" => "8;4",
        "8 5" => "8;5",
        "8 6" => "8;6",
        "8 7" => "8;7",
        "8 8" => "8;8",
        "8 9" => "8;9",
        "9 0" => "9;0",
        "9 1" => "9;1",
        "9 2" => "9;2",
        "9 3" => "9;3",
        "9 4" => "9;4",
        "9 5" => "9;5",
        "9 6" => "9;6",
        "9 7" => "9;7",
        "9 8" => "9;8",
        "9 9" => "9;9",
        ". ," => ".;,",
        "0 ," => "0;,",
        "1 ," => "1;,",
        "2 ," => "2;,",
        "3 ," => "3;,",
        "4 ," => "4;,",
        "5 ," => "5;,",
        "6 ," => "6;,",
        "7 ," => "7;,",
        "8 ," => "8;,",
        "9 ," => "9;,"
    );
    }else{
      echo '<script>alert("Debe seleccionar una operacion (Debito o Credito)"); window.location.href="index.php"</script>';
    }
    
    // Reemplazar espacios consecutivos por ";"
    $contenido_modificado = str_replace(array_keys($terminos), $terminos, trim($contenido));

    //Nuevo archivo
    $nuevo_nombre = "resultado_" . $nombre_archivo;
    file_put_contents($nuevo_nombre, $contenido_modificado);
    
    unlink($archivo_temporal);
  
}
?>

<!doctype html>
<html lang="en">

<head>
  <title>Convertidor TXT - resultado</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body style="background-color: #E39FF6 ;">
  <header>
    <!-- place navbar here -->
  </header>

  <main class="container-fluid d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">

    <div class="card shadow" style="width: 30rem; height: 30rem;">
      <div class="card-body d-flex flex-column text-center align-items-center justify-content-center">
        <h4 class="card-title">Tu archivo esta listo!</h4>
        <div>
          <?php echo "<a class='btn btn-success' href='$nuevo_nombre' download>Descargar</a>" ; ?>
        </div>

        <a href="index.php" class="btn btn-secondary mt-5">Cargar otro archivo</a>
      </div>
    </div>

  </main>
 
  <footer>
    <!-- place footer here -->
  </footer>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>