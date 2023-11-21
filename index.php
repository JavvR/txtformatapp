<!doctype html>
<html lang="en">

<head>
  <title>Convertidor TXT</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body style="background-color: #E39FF6 ;">

  <main  class="d-flex flex-column align-items-center justify-content-center" style="height: 100vh; width: 100%;">
    <div class="text-center">
      <h1 class="h1">Formatea archivos .txt!</h1>
      <p>Utiliza esta herramienta para dar formato a tus archivos .txt facil y rapido.</p>
    </div>  

    <div>
      <div class="card shadow" style="width: 60rem; height: 10rem;">
        <div class="card-body d-flex align-items-center justify-content-center">
            <form action="procesar.php" method="post" enctype="multipart/form-data">
            <label class="form-label" for="archivo">Selecciona un archivo:</label>
                          
            <div class="input-group" style="width: 50rem">
              <input class="form-control" type="file" name="archivo" id="archivo" required>
              <input class="btn btn-primary" type="submit" value="Subir Archivo">
            </div>
            </form>
        </div>
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