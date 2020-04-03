<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta charset="utf-8">
  <link rel="stylesheet" href="style/panel.css">



  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/de1126d062.js" crossorigin="anonymous"></script>




  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">


  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

  <!-- (Optional) Latest compiled and minified JavaScript translation files -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/i18n/defaults-*.min.js"></script>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>

  <!--
    
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

  -->

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
  <!--

  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/de1126d062.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>





  
 -->
</head>

<body>


  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Sinema Panel </div>
      <div id="accordion">
        <div class="list-group list-group-flush">

          <a data-target="#salonliste" id="" data-parent="#accordion" data-toggle="collapse" class="list-group-item list-group-item-action bg-light">Salonlar <i class="fas fa-angle-right"></i></a>

          <div class="collapse" id="salonliste">

            <div class="list-group">
              <a href="#" id="salon" class="list-group-item list-group-item-action bg-light">Salonları Yönet</i></a>
              <a href="#" id="salonkoltuk" class="list-group-item list-group-item-action bg-light">Salon Koltuklarını Yönet</a>
            </div>
          </div>


          <a data-target="#filmliste" id="" data-parent="#accordion" data-toggle="collapse" class="list-group-item list-group-item-action bg-light">Filmler <i class="fas fa-angle-right"></i></a>
          <div class="collapse" id="filmliste">
            <div class="list-group">
              <a href="#" id="film" class="list-group-item list-group-item-action bg-light">Filmleri Yönet </i></a>
              <a href="#" id="yonetmenler" class="list-group-item list-group-item-action bg-light">Yönetmetleri Yönet</a>
              <a href="#" id="filmkategori" class="list-group-item list-group-item-action bg-light">Kategorileri Yönet</a>
            </div>
          </div>

          <a href="#" id="seans" class="list-group-item list-group-item-action bg-light">Seansları Yönet</a>
          <a href="#" id="anasayfa" class="list-group-item list-group-item-action bg-light">Anasayfa Kampanyalar</a>
          <a href="#" id="biletler" class="list-group-item list-group-item-action bg-light">Biletler</a>
          <a href="#" id="uye" class="list-group-item list-group-item-action bg-light">Üyeler</a>

        </div>
      </div>
    </div>


    <div class="alert alert-success alert-dismissible fade" id="alertsucces" style="  position:fixed; 
    top: 0px; 
    left: 240px; 
    width: 100%;
    z-index: 9999; 
    border-radius:0px" role="alert">

      <div id="succes"></div>

      <button type="button" class="close" data-dismiss="alert" style="right: 240px" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <div class="alert alert-danger alert-dismissible fade" id="alertdanger" style="  position:fixed; 
    top: 0px; 
    left: 240px; 
    width: 100%;
    z-index: 9999; 
    border-radius:0px" role="alert">

      <div id="danger"></div>

      <button type="button" class="close" data-dismiss="alert" style="right: 240px" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <div class="icerik">


      <div id="tablo" style="margin-top: 50px; margin-left:50px;">


      </div>



    </div>

    <script>
      $(document).ready(function() {

        $("#anasayfa").click(function() {

          $.ajax({
            type: "POST",
            url: "php/slayt/fetch.php",

            success: function(data) {
              $("#tablo").remove().append(data);

            },

          });
        });

        $(document).ready(function() {

        });



        $("#filmkategori").click(function() {

          $.ajax({
            type: "POST",
            url: "php/film/kategorifetch.php",
            data: {
              islem: '1'
            },
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


        $("#salon").click(function() {

          $.ajax({
            type: "POST",
            url: "php/salon/salonfetch.php",
            data: {
              islem: '1'
            },
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

        $("#salonkoltuk").click(function() {
          $.ajax({
            type: "POST",
            url: "php/salon/koltukfetch.php",

            data: {
              islem: '1'
            },
            success: function(data) {


              $("#tablo").empty().append(data);
              $('#example').DataTable({
                "language": {
                  "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Turkish.json"
                }
              });
              $('select').selectpicker();

              $('#select').on('change', function(e) {

                alert($(this).find("option:selected").val());

              });



            },



          });
        });

        $("#yonetmenler").click(function() {
          $.ajax({
            type: "POST",
            url: "php/yonetmenler/yonetmenlerfetch.php",

            data: {
              islem: '1'
            },
            success: function(data) {


              $("#tablo").empty().append(data);
              $('#example').DataTable({
                "language": {
                  "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Turkish.json"
                }
              });
              $('select').selectpicker();

              $('#select').on('change', function(e) {

                alert($(this).find("option:selected").val());

              });



            },



          });
        });



        $("#film").click(function() {
          $.ajax({
            type: "POST",
            url: "php/film/filmfetch.php",

            data: {
              islem: '1'
            },
            success: function(data) {


              $("#tablo").empty().append(data);
              $('#example').DataTable({
                "language": {
                  "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Turkish.json"
                }
              });
              $('select').selectpicker();


              $('#vizyontarihi').datepicker({
                format: 'yyyy-mm-dd',

              });
              $(".custom-file-input").on("change", function() {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
              });


              $('#select').on('change', function(e) {

                alert($(this).find("option:selected").val());

              });



            },



          });
        });




      });
    </script>




    <script>
      function succes($mesaj) {
        $("#succes").empty().append($mesaj);
        $("#alertsucces").addClass("show");
        $("#alertsucces").fadeTo(2000, 500).slideUp(500, function() {
          $("#alertsuccest").slideUp(500);
        });
      }

      function error($mesaj) {
        $("#danger").empty().append($mesaj);
        $("#alertdanger").addClass("show");
        $("#alertdanger").fadeTo(2000, 500).slideUp(500, function() {
          $("#alertdanger").slideUp(500);
        });
      }




      $(document).on('click', '#deletekategori', function() {
        var deger = $(this).val();

        $.ajax({
          type: 'POST',
          url: 'php/film/kategorifetch.php',
          data: {
            islem: 2,
            id: deger
          },
          success: function(data) {
            var $response = $(data);

            var hata = $response.filter('#hatakodu').val();

            if (hata == 'silindi') {
              succes("Veri başarıyla silindi.");
            } else if (hata == 'guncellenemedi') {
              error("Veri silinemedi.");
            }




            $('#tablo').empty().append(data);
            $('#example').DataTable({
              'language': {
                'url': '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Turkish.json'
              }
            });


          },

        });

      });


      $(document).on('click', '#kategoriupdate', function() {


        var $deger = $(this).closest("tr").find(".kateogriadi").text();
        $('#updatekategorideger').val($deger);
        $('#updatekategoriid').val($(this).val());


      });


      $(document).on('click', '#kategoriinsert', function() {




        var ad = $('#addeger').val();

        $('#insertkategori').modal('hide');

        $.ajax({
          type: 'POST',
          url: 'php/film/kategorifetch.php',
          data: {
            islem: 3,
            ad: ad
          },
          success: function(data) {

            var $response = $(data);

            var hata = $response.filter('#hatakodu').val();

            if (hata == 'eklendi') {
              succes("Veri başarıyla eklendi.");
            } else if (hata == 'eklenemedi') {
              error("Veri  eklenemedi.");
            }

            $('#tablo').empty().append(data);
            $('#example').DataTable({
              'language': {
                'url': '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Turkish.json'
              }
            });


          },

        });

      });

      $(document).on('click', '.kategoriupdate', function() {
        var ad = $('#updatekategorideger').val();
        var id = $('#updatekategoriid').val();
        alert(id);
        $.ajax({
          type: 'POST',
          url: 'php/film/kategorifetch.php',
          data: {
            islem: 4,
            ad: ad,
            id: id
          },
          success: function(data) {
            var $response = $(data);

            var hata = $response.filter('#hatakodu').val();

            if (hata == 'guncellendi') {
              succes("Veri başarıyla güncellendi.");
            } else if (hata == 'guncellenemedi') {
              error("Veri  güncellenemedi.");
            }


            $('#tablo').empty().append(data);
            $('#example').DataTable({
              'language': {
                'url': '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Turkish.json'
              }
            });


          },

        });

      });


      $(document).on('click', '#saloninsert', function() {
        var ad = $('#salonadi').val();



        $.ajax({
          type: 'POST',
          url: 'php/salon/salonfetch.php',
          data: {
            islem: 3,
            ad: ad
          },
          success: function(data) {
            $('#tablo').empty().append(data);
            $('#example').DataTable({
              'language': {
                'url': '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Turkish.json'
              }
            });


          },

        });

      });


      $(document).on('click', '#salondelete', function() {
        var deger = $(this).val();

        $.ajax({
          type: 'POST',
          url: 'php/salon/salonfetch.php',
          data: {
            islem: 2,
            id: deger
          },
          success: function(data) {
            $('#tablo').empty().append(data);
            $('#example').DataTable({
              'language': {
                'url': '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Turkish.json'
              }
            });


          },

        });

      });

      $(document).on('click', '#salonupdate', function() {


        var deger = $(this).closest("tr").find(".sorting_1").text();
        $('#kategorideger').val(deger);
        $('#salonid').val($(this).val());



      });

      $(document).on('click', '.salonupdate', function() {
        var ad = $('#updatesalondeger').val();
        var id = $('#salonid').val();


        $.ajax({
          type: 'POST',
          url: 'php/salon/salonfetch.php',
          data: {
            islem: 4,
            ad: ad,
            id: id
          },
          success: function(data) {
            $('#tablo').empty().append(data);
            $('#example').DataTable({
              'language': {
                'url': '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Turkish.json'
              }
            });


          },

        });

      });





      $(document).on('click', '#koltukinsert', function() {

        var $id = $('#select').find("option:selected").val();
        var $harf = $('#selectkoltuk').find("option:selected").val();
        var $sayi = $('#salonkoltuknumara').val();

        $.ajax({
          type: 'POST',
          url: 'php/salon/koltukfetch.php',
          data: {
            islem: 3,
            sayi: $sayi,
            id: $id,
            harf: $harf
          },
          success: function(data) {
            $('#tablo').empty().append(data);
            $('#example').DataTable({
              'language': {
                'url': '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Turkish.json'
              }
            });


          },

        });




      });


      $(document).on('click', '#yonetmeninsert', function() {
        var ad = $('#yonetmenad').val();
        var soyad = $('#yonetmensoyad').val();


        $.ajax({
          type: 'POST',
          url: 'php/yonetmenler/yonetmenlerfetch.php',
          data: {
            islem: 3,
            ad: ad,
            soyad,
            soyad
          },
          success: function(data) {
            var $response = $(data);

            var hata = $response.filter('#hatakodu').val();

            if (hata == 'eklendi') {
              succes("Veri başarıyla eklendi.");
            } else if (hata == 'eklenemedi') {
              error("Veri  eklenemedi.");
            }
            $('#tablo').empty().append(data);
            $('#example').DataTable({
              'language': {
                'url': '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Turkish.json'
              }
            });


          },

        });

      });


      $(document).on('click', '#deleteyonetmen', function() {
        var deger = $(this).val();

        $.ajax({
          type: 'POST',
          url: 'php/yonetmenler/yonetmenlerfetch.php',
          data: {
            islem: 2,
            id: deger
          },
          success: function(data) {
            var $response = $(data);

            var hata = $response.filter('#hatakodu').val();

            if (hata == 'silindi') {
              succes("Veri başarıyla silindi.");
            } else if (hata == 'guncellenemedi') {
              error("Veri silinemedi.");
            }


            $('#tablo').empty().append(data);
            $('#example').DataTable({
              'language': {
                'url': '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Turkish.json'
              }
            });


          },

        });

      });



      $(document).on('click', '#updateyonetmen', function() {


        var $adi = $(this).closest("tr").find(".adi").text();
        var $soyadi = $(this).closest("tr").find(".soyadi").text();
        $('#updateyonetmenad').val($adi);
        $('#updateyonetmensoyad').val($soyadi);
        $('#yonetmenlerid').val($(this).val());


      });



      $(document).on('click', '.yonetmenupdate', function() {
        var ad = $('#updateyonetmenad').val();
        var soyad = $('#updateyonetmensoyad').val();
        var id = $('#yonetmenlerid').val();
        alert(id);
        $.ajax({
          type: 'POST',
          url: 'php/yonetmenler/yonetmenlerfetch.php',
          data: {
            islem: 4,
            ad: ad,
            soyad: soyad,
            id: id
          },
          success: function(data) {
            var $response = $(data);

            var hata = $response.filter('#hatakodu').val();

            if (hata == 'guncellendi') {
              succes("Veri başarıyla güncellendi.");
            } else if (hata == 'guncellenemedi') {
              error("Veri  güncellenemedi.");
            }


            $('#tablo').empty().append(data);
            $('#example').DataTable({
              'language': {
                'url': '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Turkish.json'
              }
            });


          },

        });

      });


      $(document).on('click', '#filminsert', function() {
        var $filmadi = $('#filminadi').val();
        var $kategori = $('#kategoriselect').find("option:selected").val();
        var $yonetmen = $('#yonetmenselect').find("option:selected").val();
        var $sure = $('#filmsuresi').val();
        var $ozet = $('#filmozet').val();
        var $vizyontarihi = $('#vizyontarihi').val();

        var $form_data = new FormData();


       
       $form_data.append('filmadi', $filmadi);
       $form_data.append('kategori',$kategori);
       $form_data.append('yonetmen',$yonetmen);
       $form_data.append('sure',$sure);
       $form_data.append('ozet',$ozet );
       $form_data.append('vizyontarihi',$vizyontarihi);
       $form_data.append('islem','3');
       $form_data.append("resim", $("#kapakresmi")[0].files[0]);







        $.ajax({
          type: 'POST',
          url: 'php/film/filmfetch.php',
          data: $form_data,
          processData: false, // tell jQuery not to process the data
          contentType: false,
          success: function(data) {
            var $response = $(data);

            var hata = $response.filter('#hatakodu').val();

            if (hata == 'eklendi') {
              succes("Veri başarıyla eklendi.");
            } else if (hata == 'eklenemedi') {
              error("Veri  eklenemedi.");
            }
            $('#tablo').empty().append(data);
            $('#example').DataTable({
              'language': {
                'url': '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Turkish.json'
              }
            });


          },

        });

      });
    </script>
  </div>
  <script>
  </script>
</body>

</html>