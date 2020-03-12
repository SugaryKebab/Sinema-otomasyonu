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


  <div id="demo" class="carousel slide" data-ride="carousel">

    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>

    </ul>


    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="img-fluid" src="images/slider/1.jpg" alt="garez">
      </div>
      <div class="carousel-item">
        <img class="img-fluid" src="images/slider/2.jpg" alt="vahseitn">
      </div>
    </div>

    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>

  </div>


  <div class="filmler" style="margin-top: 50px;">
    <div class="container">
      <div class="buton float-left">
        <div class="btn-group-lg" role="group" aria-label="Basic example">
          <button type="button" class="btn btn-link">Vizyonda</button>
          <button type="button" class="btn btn-link">Yakında</button>
        </div>

      </div>




      <div style="margin-top: 50px;" id="carousel-example" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner row w-100 mx-auto" role="listbox">
          <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">

            <div class="img1-wrap">
              <img src="images/film/parazit.jpg" alt="Avatar" class="image">
              <div class="overlay">
                <div class="text">Bilet Al</div>
              </div>
            </div>

          </div>
          <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">


            <div class="img1-wrap">
              <img src="images/film/sonic.png" alt="Avatar" class="image">
              <div class="overlay">
                <div class="text"><a href="#"> Bilet Al</a></div>
              </div>
            </div>

          </div>
          <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">

            <div class="img1-wrap">
              <img src="images/film/kucuk.png" alt="Avatar" class="image">
              <div class="overlay">
                <div class="text"><a href="#"> Bilet Al</a></div>
              </div>
            </div>
          </div>
          <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">

            <div class="img1-wrap">
              <img src="images/film/joker.jpg" alt="Avatar" class="image">
              <div class="overlay">
                <div class="text"><a href="#"> Bilet Al</a></div>
              </div>
            </div>
          </div>

          <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">

            <div class="img1-wrap">
              <img src="images/film/sonsuzluk.png" alt="Avatar" class="image">
              <div class="overlay">
                <div class="text"><a href="#"> Bilet Al</a></div>
              </div>
            </div>
          </div>

          <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">

            <div class="img1-wrap">
              <img src="images/film/viking.png" alt="Avatar" class="image">
              <div class="overlay">
                <div class="text"><a href="#"> Bilet Al</a></div>
              </div>
            </div>
          </div>

       
         
       
        </div>
        <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
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




  <script>
    $('#carousel-example').on('slide.bs.carousel', function(e) {
      /*
          CC 2.0 License Iatek LLC 2018 - Attribution required
      */
      var $e = $(e.relatedTarget);
      var idx = $e.index();
      var itemsPerSlide = 5;
      var totalItems = $('.filmler .carousel-item').length;

      if (idx >= totalItems - (itemsPerSlide - 1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i = 0; i < it; i++) {
          // append slides to end
          if (e.direction == "left") {
            $(' .filmler .carousel-item').eq(i).appendTo('.filmler .carousel-inner');
          } else {
            $('.filmler .carousel-item').eq(0).appendTo('.filmler .carousel-inner');
          }
        }
      }
    });
  </script>



</body>




<footer>


</footer>

</html>