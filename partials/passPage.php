<?php 
session_start();
$_SESSION["pswLength"]
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
  <div class="container">
    <div class="card">
      <div class="card-header">
        La tua password:
      </div>
      <div class="card-body">
        <p class="card-text"><?= $finalPsw ?></p>
      </div>
    </div>
  </div>
</body>

</html>