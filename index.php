<?php

//J'instancie un objet un $prensentTime 
$presentTime = new DateTime();

//J'instancie un objet un $destinationTime 
$destinationTime = new DateTime("1985-10-30 12:13");

//Je calcule l'intervalle entre les deux moments au format Ylg Hm
$interval = $presentTime->diff($destinationTime);

//Je calcule le nombre de secondes qui séparent les deux moments
$Time = $presentTime->format('U') %- $destinationTime->format('U'); 

//10000 minutes = 1L ; je divise le nombre de secondes par le nombre de minutes puis par le nombre de minutes par litre

$carburant = floor($Time/60/10000);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">    
      <div class="container-fluid ml-auto mr-auto" style="padding-top:20%;">

        <div class="card border-primary mb-3 text-center ml-auto mr-auto" style="max-width: 25rem;">
          <div class="card-header font-weight-bold">Present Time</div>
          <div class="card-body text-primary">
          <h5 class="card-title"><?php echo $presentTime->format('m-d-Y H:i');?></h5>
          </div>
        </div>

        <div class="card border-warning mb-3 text-center ml-auto mr-auto" style="max-width: 25rem;">
          <div class="card-header font-weight-bold">Destination Time</div>
          <div class="card-body text-warning">
          <h5 class="card-title"><?php echo $destinationTime->format('m-d-Y H:i')?> </h5>
          </div>
        </div>

        <div class="alert alert-success text-center ml-auto mr-auto" style="max-width: 25rem;">
          <p class="font-weight-bold">Time leap</p>
          <p><?php echo $interval->format('%Y years %m month %d days %H hours %I minutes');?></p>
        </div>

        <div class="alert alert-danger text-center ml-auto mr-auto" style="max-width: 25rem;">
          <p class="font-weight-bold">Energy Required</p>
          <p><?php echo $carburant.' liters of fuel'?></p>
        </div>
      </div>
    </div>
</body>
</html>

