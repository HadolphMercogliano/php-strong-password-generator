<?php 
session_start();
$pswLength = $_GET["pswLength"] ?? "";
include_once __DIR__ . './partials/function.php';
$_SESSION["finalPsw"] = $finalPsw = RandomPswGen($pswLength);

if(!empty($finalPsw)) {
  header("Location: ./partials/passPage.php");

};

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta name="Description" content="" />
  <meta name="Author" content="Hadolph Mercogliano" />

  <!-- LINK BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous" defer>
  </script>

  <title>PSw Generator</title>
</head>

<body>
  <div class="container mt-5">
    <div class="card">
      <h5 class="card-header">Inserisci la lunghezza della password da generare</h5>
      <div class="card-body">
        <form method="GET">
          <div class="mb-3">
            <input type="number" class="form-control" name="pswLength" id="pswLength">
          </div>
          <button class="btn btn-primary">Richiedi Password</button>
        </form>
      </div>
    </div>

    <?php if((empty($finalPsw)) && (!empty($_GET))) :?>
    <div class="alert alert-danger mt-3" role="alert">
      Attenzione, il campo della lunghezza è vuoto
    </div>
    <?php endif; ?>
  </div>
</body>

</html>