<?php 

session_start();
$generated_password = $_SESSION["generated_password"];

?>

<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Generator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
  <main>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="card my-5">
              <div class="card-header">
                Password Generator
              </div>
              <div class="card-body"> 
                  <div class="alert alert-success" role="alert">
                    Your password has been generated successfully <br>
                    <strong><?= $generated_password ?></strong>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </main>
</body>
</html> 