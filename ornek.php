<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta charset="utf-8">


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="style/panel.css">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


  <!--
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/panel.css">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE = edge,chrome = 1">
  <title>Hello World using Backbone.js</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" rel="stylesheet" />
  -->
  <!--
  <link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">

  <script src="https://kit.fontawesome.com/de1126d062.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>


</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Sinema Panel </div>
      <div id="accordion">
        <div class="list-group list-group-flush">
          <a href="#" id="salon" class="list-group-item list-group-item-action bg-light">Salonları Yönet</a>
          <a data-target="#filmliste" id="" data-parent="#accordion" data-toggle="collapse" class="list-group-item list-group-item-action bg-light">Filmler <i class="fas fa-angle-right"></i></a>
          <div class="collapse" id="filmliste">

            <div class="list-group">
              <a href="#" id="film" class="list-group-item list-group-item-action bg-light">Filmleri Yönet </i></a>
              <a href="#" class="list-group-item list-group-item-action bg-light">Yönetmetleri Yönet</a>
              <a href="#" id="filmkategori" class="list-group-item list-group-item-action bg-light">Kategorileri Yönet</a>
            </div>


          </div>
          <a href="#" id="seans" class="list-group-item list-group-item-action bg-light">Seansları Yönet</a>
          <a href="#" id="anasayfa" class="list-group-item list-group-item-action bg-light">Anasayfa Kampanyalar</a>
          <a href="#" id="biletler" class="list-group-item list-group-item-action bg-light">Biletler</a>
          <a href="#" id="uye" class="list-group-item list-group-item-action bg-light">Üyeler</a>
          <a href="#" id="uye" class="list-group-item list-group-item-action bg-light">Rapor</a>
          <a href="#" id="kategori" class="list-group-item list-group-item-action bg-light">Kategori</a>
        </div>

      </div>


    </div>



    <div class="icerik" id="tablo">

    </div>




    <script>
      $(document).ready(function() {

        $("#anasayfa").click(function() {

          $.ajax({
            type: "POST",
            url: "php/slayt/fetch.php",

            success: function(data) {
              $("#tablo").empty().append(data);

            },

          });
        });



        $("#filmkategori").click(function() {

          $.ajax({
            type: "POST",
            url: "php/film/kategorifetch.php",
            data: { islem: '1' },
            success: function(data) {
              $("#tablo").empty().append(data);
              $('#example').DataTable({
                "language": {
                  "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Turkish.json"
                }
              });


            },

          });
        });




        $("#film").click(function() {

          $.ajax({
            type: "POST",
            url: "php/film/show.php",

            success: function(data) {
              $("#tablo").empty().append(data);
              $('#example').DataTable({
                "language": {
                  "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Turkish.json"
                }
              });


            },

          });
        });

      });

      
    </script>

  

  </div>

<script>



  
</script>



</body>

</html>