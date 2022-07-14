<?php
 include('dataApi.php');

?>
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
  <div class="container p-3">
    <div class="row justify-content-center">
      <div class="col-8  text-center">
        <form action="" method="GET">
          <div>
            <input type="text" name="city" id="city" placeholder="city">
         
          <button type="submit" name="submit" class="btn btn-outline-warning ">Submit</button>
          </div>
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
             
            }
            ?>
          </div>
        </form>
        <div class="card" >
          <div class="card-img text-center p-3">
            <img src="http://openweathermap.org/img/wn/<?php echo $weatherArray['weather']['0']['icon']?>@2x.png" class="card-img-top w-25">
          </div>
         
          <div class="card-body d-flex justify-content-between">
             <!-- Temperature -->
            <div class="description w-25">
              <h4 class="card-title"><?php echo  intval($tempC) ?>&deg;C</h4>
            </div>
               <!-- /Temperature -->
               <!-- Description  -->
              <div class="description w-25">
                <h5 class="card-title"><?php echo $weatherArray['weather']['0']['main']?></h5>
                <p class="card-text"> <?php echo $weatherArray['name'] ." " .$weatherArray['sys']['country']?></p>
                
              </div>
              
               <!-- /Description  -->
               <!-- Wind  -->
              <div class="description w-25">
                  <h4 class="card-title">Wind </h4> 
                      <?php echo $weatherArray['wind']['speed']."km/h"?>
                  <p class="card-text"></p>
              </div>
               <!-- /Wind  -->
               <!-- Humidity  -->
               <div class="description w-25">
                  <h4 class="card-title">Humidity </h4> 
                      <?php echo$weatherArray['main']['humidity']."%"?>
                  <p class="card-text"></p>
              </div>
               <!-- /Humidity  -->
              <!-- Date  -->
              <div class="description w-25">
                <h4 class="card-title">
                    <?php echo date('d M', $weatherArray['dt'])?>
                </h4> 
              </div>
              <!-- /Date  -->
            </div>
          </div>
      </div>
    </div>
  </div>
</body>
</html>
