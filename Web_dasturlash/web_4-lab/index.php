<?php
$title = "Ro`yxatga qo`shish";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equive="X-UA-Comptible" content="ie=edge">
        <title><?= $title; ?></title>
        <link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
    </head>
    <body>
            
<div class="container">
    <div class="main-body">
            
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Asosiy</a></li>
              <li class="breadcrumb-item active"><a href="/forma"><?= $title; ?></a></li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://tuormedia.uz/styles/img/favicon.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>TUORMedia.uz </h4>
                      <p class="text-secondary mb-1">@tuormedia_uz </p>
     <p class="text-muted font-size-sm">Saytning telegram kanaliga </p>
                      <a href="https://t.me/joinchat/WT8o8WM2cgDhDDkK"><button class="btn btn-primary">Qo'shilish</button></a>
                     <a href="https://t.me/tuormedia"><button class="btn btn-outline-primary">Xabar yo'llash</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
<h3 class="text-center"><?= $title; ?></h3>
                  <div class="container">
<div class="alert alert-danger text-center">*  yulduzchali kataklar to'ldirilishi shart!</div>
            <form action="proinfo.php" method="post">
            <div class="input-group">
                <input type="text" name="ism" id="ism" placeholder=" ">
                <label form="ism">Ism <font color="red">* </font></label>
            </div>
        
            <div class="input-group">
                <input type="text" name="familiya" id="familiya" placeholder=" ">
                <label form="familiya">Familiya <font color="red">* </font></label>
            </div>
        
            <div class="input-group">
                <input type="number" name="yosh" id="yosh" placeholder=" ">
                <label form="yosh">Yosh <font color="red">* </font></label>
            </div>
            <div class="input-group">
                <input type="email" name="email" id="email" placeholder=" " >
                <label form="email">Email <font color="red">* </font></label>
            </div>
            <div class="input-group">
                <input type="number" name="tel" id="tel" placeholder=" ">
                <label form="tel">Telefon raqam <font color="red">* </font></label>
            </div>
            <div class="input-group">
                <input type="text" name="address" id="address" placeholder=" ">
                <label form="address">Tug'ilgan joy <font color="red">* </font></label>
            </div>
            <button type="submit" name="submit" id="submit" class="btn btn-outline-primary">Yuborish</button>
            </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>


    </body>
</html>