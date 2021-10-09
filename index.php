<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="https://cdn-icons.flaticon.com/png/128/2316/premium/2316330.png?token=exp=1633769486~hmac=f49eaa4e0d591a8e0964f80b39e856d5" type="image/png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!--stylesheet-->
  <link rel="stylesheet" href="./css/style.css">
  <!--google fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- Compiled and minified JavaScript -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <title>Online-Banking-System</title>

  <style>

    * {
      font-family: Poppins;
    }

    a:link {
      color: #ffc400;
    }

    a:hover {
      color: aqua;
      text-decoration: none;
    }

    h5 {
      color: black;
    }

  </style>

</head>
<body>
  <nav>
    <div class="container-fluid nav-wrapper black z-depth-5">
      <a href="index.php" class="brand-logo"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>
        <li><a href="./php/transfermoney.php">Bank Customers</a></li>
        <li><a href="./php/transactionhistory.php">Transactions</a></li>
      </ul>
    </div>
  </nav>
  <!--heading / title -->
  <div class="center head mt-0">
    <h2><b>TSF BANK</b ></h2>
  </div>
  <!---3 col start-->
  <div class="row center sect">
    <!--end of card 1-->
    <!--second col-->
    <div class="col s4">
      <!-- Promo Content 2 goes here -->
      <div class="row">
        <div class="col s12 m6">
          <div class="card small">
          <br>
          <br>
          <br>
          <br>
          <br>
            <button onclick="location.href='./php/transfermoney.php'" style="color:black" class="waves-effect waves-light #ffab00 amber accent-4 btn-large"><b>Perform Any Transactions</b><i class="material-icons right">add_circle</i></button>
            <p class="red"><br /></p>
          </div>
        </div>
      </div>
    </div>
    <!--end of card 2-->
    <div class="col s4">
      <!-- Promo Content 1 goes here -->
      <div class="row">
        <div class="col s12 m6">
          <div class="card small">
            <div class="card-image">
            </div>
            <br>
            <br>
            <br>
            <br>
            <p class="black"><br /></p>
            <br>
            <h5><b>Welcome to TSF Bank !</b></h5>
            <br>
            <br>
            <p class="black"><br /></p>
          </div>
        </div>
      </div>
    </div>
    <!--middle-->
    <div class="col s4">
      <!-- Promo Content 3 goes here -->
      <div class="row">
        <div class="col s12 m6">
          <div class="card small">
          <br>
          <br>
          <br>
          <br>
          <br>
          <button type="button" onclick="location.href='./php/transactionhistory.php'" style="color:black" class="waves-effect waves-light #ffab00 amber accent-4 btn-large"><b> Transaction History</b><i class="material-icons right">send</i></button>
          <p class="red"><br /></p>
        </div>
        </div>
      </div>
    </div>
    <!--end of card 1-->
  </div>
  <!--footer-->
  <footer class="center footer">
    <h6 class="info"><b>2021 © Made by Pratham Kapratwar</b></h6>
    The Sparks Foundation
  </footer>
  <script src="./js/main.js"></script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>