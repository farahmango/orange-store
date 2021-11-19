<?php 
$phones = [
    [ 
     'name' => 'Samsung Galaxy Note 20 Ultra',
     'img_url' =>'https://eshop.orange.jo/app-images/thumbs/0001115_samsung-galaxy-note-20-ultra_220.png',
    'rate' => '5',
    'brand' => 'Samsung',
    'price' => 'JOD 759.00',
    'is_out_of_stock' => '1'
    ],
    [ 
     'name' => 'INFINIX Zero 8',
     'img_url' =>'https://eshop.orange.jo/app-images/thumbs/0001278_infinix-zero-8_490.jpeg',
    'rate' => '0',
    'brand' => 'Infinix',
    'price' => 'JOD 205.00',
    'is_out_of_stock' => '1'
    ],
    [ 
     'name' => 'Apple iPhone 12 Pro',
     'img_url' =>'https://eshop.orange.jo/app-images/thumbs/0001495_apple-iphone-12-pro_220.jpeg',
    'rate' => '0',
    'brand' => 'Apple',
    'price' => 'JOD 973.00',
    'is_out_of_stock' => '1'

    ],
    [ 
     'name' => 'ITEL A48',
     'img_url' =>'https://eshop.orange.jo/app-images/thumbs/0001532_itel-a48_220.jpeg',
    'rate' => '0',
    'brand' => 'iTel',
    'price' => 'JOD 66.00'
    ],
    [ 
     'name' => 'Samsung Galaxy S21 Ultra',
     'img_url' =>'https://eshop.orange.jo/app-images/thumbs/0001485_samsung-galaxy-s21-ultra_220.jpeg',

    'rate' => '0',
    'brand' => 'Samsung',
    'price' => 'JOD 799.00'
    ],
    
    [ 
     'name' => 'Galaxy A52',
     'img_url' =>'https://eshop.orange.jo/app-images/thumbs/0002097_galaxy-a52_220.jpeg',
    'rate' => '0',
    'brand' => 'Samsung',
    'price' => 'JOD 267.00'
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Phone | Orange Jordan E shop</title>
    <!-- Copyright © 2014 Monotype Imaging Inc. All rights reserved -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/css/orange-helvetica.min.css" rel="stylesheet" integrity="sha384-ARRzqgHDBP0PQzxQoJtvyNn7Q8QQYr0XT+RXUFEPkQqkTB6gi43ZiL035dKWdkZe" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/css/boosted.min.css" rel="stylesheet" integrity="sha384-Di/KMIVcO9Z2MJO3EsrZebWTNrgJTrzEDwAplhM5XnCFQ1aDhRNWrp6CWvVcn00c" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://boosted.orange.com/docs/5.1/assets/brand/orange-logo.svg" width="50" height="50" role="img" alt="Boosted" loading="lazy">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
  <div class="cont"> 
<?php
foreach($phones as $val){
    echo "<div class='card card1' style='width: 25rem;height:52vh;'>";
    echo " <img  class=' pic' src=" . $val["img_url"] . " />";
    echo "<p class='card-text'>" . $val["brand"]   ."</p>";
    echo " <h3 class='card-title'>" .  $val["name"]    ."</h3>";
    echo "<span>";
  if($val["rate"]==5){
      for($i=0;$i<5; $i++){
      echo " <i class='fa fa-star flix' aria-hidden='true' style='color:orange;'> " . "</i> ";
        }
  }
  else{
      for($i=0;$i<5; $i++){
      echo " <i class='fa fa-star flix' aria-hidden='true' style='color:gray;'> " . "</i> ";
    }  }
    echo "<span class='card-text'>" ."(". $val["rate"] .")"  ."</span>";
    echo "</span>";
   //*********** price
    echo "<hr>";
    echo "<h4 class='price'>". $val["price"] ."</h4>"; 
    echo "<span>";
    echo "<a  class='btn btn-primary btn1'>" ."Buy Now " . " </a>";
    echo "<a  class='btn btn-primary btn2'>" ."<i class='fa fa-cart-plus cart' aria-hidden='true'></i>" . " </a>";
    echo "</span>";
    echo "</div>";
    }
    ?>
    </div>
<script src="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/js/boosted.bundle.min.js" integrity="sha384-5thbp4uNEqKgkl5m+rMBhqR+ZCs+3iAaLIghPWAgOv0VKvzGlYKR408MMbmCjmZF" crossorigin="anonymous"></script>
</body>
</html>