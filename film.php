<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style/style.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>


  <?php include('header.html'); ?>



  <div class="resim" style="background-color: #FAFAFA; ">

    <div class="container">
      <div class="row" style=" filter: blur(0);">


        <div class="col-sm-4" style="margin-top:50px; margin-bottom: 50px;">
          <img class="resim" src="images/film/parazit.jpg" alt="film adı">
        </div>
        <div class="col-sm-8">
          <h1 style="color:black;margin-top:25px;">Parazit</h1>
          <p><b>Vizyon Tarihi:</b> 21.02.2020<br>
            <b>Süre:</b> 115 Dakika<br>
            <b>Tür:</b> Komedi</p>
          <p><b>Özet :</b> Küçük Esnaf, Yol Arkadaşım, Yol Arkadaşım 2’nin senaristi
            İbrahim Büyükak ve yönetmeni Bedran Güzel’den yepyeni bir komedi!
            Bayi Toplantısı için Anadolu’dan İstanbul‘a gelen üç beyaz eşyacının,
            üç günde hayatı ne kadar karışabilir? Namık, Sadık ve Adem hayatlarının sıkıntılı
            dönemlerini yaşarken yolları bir bayi toplantısında kesişir. Beklenmedik olaylar sonucu
            kendilerini çılgın bir soygun planının içinde bulurlar. Üç bayinin kurtulmak için birbirlerine
            güvenmekten ve hızlı hareket etmekten başka şansları yoktur. Küçük esnafların büyük hikâyesi hepimizi
            çok eğlendirecek...</p>

        </div>
      </div>
    </div>
  </div>


  <div class="filmler">
    <div class="container">
      <hr>
      <div id="carousel-example" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner row w-100 mx-auto" role="listbox">
          <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
            <a style="font-size: 24px;
                  line-height: 24px;
                  height: 43px;" href="">Bugün</a>

          </div>
          <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 ">
            <a style="font-size: 24px;
                line-height: 24px;
                height: 43px;" href="">2 Mart <br> Pazartesi</a>

          </div>
          <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 ">
            <a style="font-size: 24px;
              line-height: 24px;
              height: 43px;" href="">3 Mart <br> Salı</a>

          </div>
          <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 ">
            <a style="font-size: 24px;
            line-height: 24px;
            height: 43px;" href="">4 Mart <br> Çarşamba</a>

          </div>
          <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 ">
            <a style="font-size: 24px;
          line-height: 24px;
          height: 43px;" href="">2 Mart</a>

          </div>
          <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 ">
            <a style="font-size: 24px;
        line-height: 24px;
        height: 43px;" href="">2 Mart</a>

          </div>
          <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 ">
            <a style="font-size: 24px;
      line-height: 24px;
      height: 43px;" href="">2 Mart</a>

          </div>
          <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 ">
            <a style="font-size: 24px;
    line-height: 24px;
    height: 43px;" href="">2 Mart</a>

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
      <hr>
    </div>

  </div>

  <div class="content">
    <div class="container">
      <div class="seans" style="margin-bottom: 50px;">
        <h4>A Salonu - 2D</h4>
        <button type="button" class="btn btn-secondary btn-lg">10:30</button>
        <button type="button" class="btn btn-primary btn-lg">12:45</button>
        <button type="button" class="btn btn-primary btn-lg">18:00</button>
      </div>

      <div class="seans">
        <h4>B Salonu - 3D</h4>
        <button type="button" class="btn btn-secondary btn-lg">08:30</button>
        <button type="button" class="btn btn-primary btn-lg">16:45</button>
        <button type="button" class="btn btn-primary btn-lg">19:00</button>
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