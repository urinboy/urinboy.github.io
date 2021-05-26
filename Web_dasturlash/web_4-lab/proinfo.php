<?php
$title = "Kiritilgan ma`lumot";
?>
<?php
$ismErr = $familiyaErr = $yoshErr = $emailErr = $telErr = $addressErr = "";
$ism = $familiya = $yosh = $email = $tel = $address = "";

if (isset($_POST['submit'])) {
 
  function val($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

  if (empty($_POST["ism"])) {
    $ismErr = "Ismni kiriting!";
   header("Location: index.php?<?= $ismErr; ?>");
  } else if (empty($_POST["familiya"])) {
    $familiyaErr = "Familyani kiriting!";
      header("Location: index.php?<?= $familiyaErr; ?>");
  } else if (empty($_POST["yosh"])) {
    $yoshErr = "Yoshni kiriting!";
    header("Location: index.php?<?= $yoshErr; ?>");
  } else if (empty($_POST["email"])) {
    $emailErr = "Email pochtani kiriting!";
    header("Location: index.php?<?=$emailErr; ?>");
  } else if (empty($_POST["tel"])) {
    $telErr = "Telefon raqamni kiriting!";
    header("Location: index.php?<?= $telErr; ?>");
  } else if (empty($_POST["address"])) {
    $addressErr = "Tug`ilgan joyni kiriting!";
    header("Location: index.php?<?= $addressErr; ?>");
  } else {
      $ism = val($_POST["ism"]);
      $familiya = val($_POST["familiya"]);
      $yosh = val($_POST["yosh"]);
      $email = val($_POST["email"]);
      $tel = val($_POST["tel"]);
     $address = val($_POST["address"]);
  }
} else{
  header("Location: index.php");
}

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
                            <li class="breadcrumb-item"><a href="/forma">Ro'yxatga qo`shish</a></li>
              <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
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
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">To'liq ism familiyasi</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?= $ism." ".$familiya; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Yoshi</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?= $yosh; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email pochtasi</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?= $email; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Telefon raqami</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?= $tel; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Tug'ilgan joyi</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?= $address; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    </body>
</html>