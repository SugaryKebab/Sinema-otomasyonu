<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://kit.fontawesome.com/de1126d062.js" crossorigin="anonymous"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>

  
<?php include('header.html'); ?>



  <div class="container">

    <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Vizyondaki Filmler</h1>
  
    <hr class="mt-2 mb-5">
  
    <div class="row text-center text-lg-left">
  
      <div class="col-lg-3 col-md-4 col-6">
        <div class="img1-wrap">
            <img class="img-fluid" src="images/film/parazit.jpg" alt="Avatar" class="image">
            <div class="overlay">
              <div class="text">Bilet Al</div>
            </div>
          </div>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <div class="img1-wrap">
            <img class="img-fluid" src="images/film/sonsuzluk.png" alt="Avatar" class="image">
            <div class="overlay">
              <div class="text">Hello World</div>
            </div>
          </div>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <div class="img1-wrap">
            <img class="img-fluid" src="images/film/sonic.png" alt="Avatar" class="image">
            <div class="overlay">
              <div class="text">Hello World</div>
            </div>
          </div>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <div class="img1-wrap">
            <img class="img-fluid" src="images/film/kucuk.png" alt="Avatar" class="image">
            <div class="overlay">
              <div class="text">Hello World</div>
            </div>
          </div>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <div class="img1-wrap">
            <img class="img-fluid" src="images/film/joker.jpg" alt="Avatar" class="image">
            <div class="overlay">
              <div class="text">Hello World</div>
            </div>
          </div>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <div class="img1-wrap">
            <img class="img-fluid" src="images/film/garez.png" alt="Avatar" class="image">
            <div class="overlay">
              <div class="text">Hello World</div>
            </div>
          </div>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <div class="img1-wrap">
            <img class="img-fluid" src="images/film/viking.png" alt="Avatar" class="image">
            <div class="overlay">
              <div class="text">Hello World</div>
            </div>
          </div>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <div class="img1-wrap">
            <img class="img-fluid" src="images/film/gorunmez.jpg" alt="Avatar" class="image">
            <div class="overlay">
              <div class="text">Hello World</div>
            </div>
          </div>
      </div>
     
    </div>
  
  </div>





   <div id="giris" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content" style="padding: 15px;">
        <form action="/action_page.php">
          <div class="form-group">
            <label for="email">E-posta:</label>
            <input type="email" class="form-control" placeholder="E-posta adresiniz" id="email">
          </div>
          <div class="form-group">
            <label for="pwd">Şifre:</label>
            <input type="password" class="form-control" placeholder="Şifre" id="pwd">
          </div>
        
          <button type="submit" class="btn btn-primary">Giriş Yap</button>
        </form>







      </div>
  
    </div>
  </div>



</body>




<footer>


</footer>

</html>