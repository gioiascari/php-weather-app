
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- /Bootstrap -->
    <link rel="stylesheet" href="css/style.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <title>PHP WeatherApp</title>
  </head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h4>
            Search global weather
        </h4>
        <form action="" method="GET">
          <div>
             <label for="city">Enter your city</label>
          </div>
          <div>
            <input type="text" name="city" id="city" placeholder="city">
          </div>
          <button type="submit" name="submit" class="btn btn-outline-warning ">Submit</button>
          <div class="output d-flex justify-content-center">
          <?php
            if (array_key_exists('submit', $_GET)) {
              if (!$_GET['city']) {
                  $error = "Sorry, your input field is empty";
                  //If input is empty shows this
                  if($error){
                    echo '<div class="alert alert-danger w-25" role="alert">
                    ' . $error . '
                  </div>';
                  }
              }
              //Call API
              include('dataApi.php');
            }
            ?>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
