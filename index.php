<?php  

require_once(__DIR__ . "/_partials/functions.php");

if(!empty($_GET)) {
  $alphabeth = "abcdefghijklmnopqrstuwxyz";
  $alphabethUC = strtoupper($alphabeth);
  $numbers  = "1234567890";
  $specials = "?\!$%&/()[]{}";

  $password_all_chars = $alphabeth . $alphabethUC . $numbers . $specials;
  $password_length = (int) $_GET["password_length"] ?? 5;

  session_start();
  $_SESSION["generated_password"] = generate_password($password_all_chars, $password_length);
  header("Location: ./result.php");
}

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
                <form method="GET" class="row">
                  <div class="col-7">
                    <div class="mb-3">
                      <label for="password_length" class="form-label">Password length</label>
                      <input type="number" class="form-control" id="password_length" name="password_length" min="4" max="100"> 
                    </div>
                    <div class="mb-3">
                      <button class="btn btn-primary w-100">Generate Password</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  </main>
</body>
</html>