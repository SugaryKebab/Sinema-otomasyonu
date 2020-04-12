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

          <a data-target="#seanslarliste" id="" data-parent="#accordion" data-toggle="collapse" class="list-group-item list-group-item-action bg-light">Seanslar <i class="fas fa-angle-right"></i></a>
          <div class="collapse" id="seanslarliste">
            <div class="list-group">
              <a href="#" id="seans" class="list-group-item list-group-item-action bg-light">Seansları Yönet </i></a>
              <a href="#" id="seansaatleri" class="list-group-item list-group-item-action bg-light">Seans Saatlerini Yönet</a>
            </div>
          </div>

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

      <div class="container" id="tablo" style="margin-top: 50px; margin-left:50px;">

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

              $(".custom-file-input").on("change", function() {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
              });

              $(".custom-file-input").on("change", function() {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
              });

              $('.selectpicker').selectpicker();

              $('.selectpicker').selectpicker('refresh');
              $('.datekontrol').datepicker({
                format: 'yyyy-mm-dd',

              });
            },
          });
        });

        $("#seans").click(function() {
          $.ajax({
            type: "POST",
            url: "php/seans/seansfetch.php",

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

              $(".custom-file-input").on("change", function() {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
              });

              $(".custom-file-input").on("change", function() {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
              });



              $('.selectpicker').selectpicker();

              $('.selectpicker').selectpicker('refresh');
              $('.datekontrol').datepicker({
                format: 'yyyy-mm-dd',

              });





            },



          });
        });

        $("#seansaatleri").click(function() {
          $.ajax({
            type: "POST",
            url: "php/seans/seanssaatleri.php",

            data: {
              islem: '1'
            },
            success: function(data) {

              console.log(data);

              $("#ekleseans").click(function() {
                $('#seanssatleri').hide();

              });

              $("#tablo").empty().append(data);
              $('#example').DataTable({
                "language": {
                  "url": "//cdn $('seanssatleri').show();.datatables.net/plug-ins/9dcbecd42ad/i18n/Turkish.json"
                }
              });

              $('#seansselect').on('change', function(e) {

                var idler = $(this).find("option:selected").val();

                var array = idler.split(',');

                var seansid = array[0];
                var salonid = array[1];
                var bugun = new Date();
                var dd = String(bugun.getDate()).padStart(2, '0');
                var mm = String(bugun.getMonth() + 1).padStart(2, '0'); //January is 0!
                var yyyy = bugun.getFullYear();

                bugun = yyyy + mm + dd;

                $.ajax({
                  type: 'POST',
                  url: 'php/seans/seansbilgisi.php',
                  data: {
                    seansid: seansid,
                    salonid: salonid,
                    bugun: bugun
                  },
                  success: function(data) {
                    $("#secilmemesigerekensaatler").remove().append(data);

                    $('#seanssatleri').show();
                  },

                });
              });
              $('.selectpicker').selectpicker();

              $('.selectpicker').selectpicker('refresh');
              $('.datekontrol').datepicker({
                format: 'yyyy-mm-dd',

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

      function boshatasi() {
        alert("Form alanlarını boş bırakmayınız!");
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

        if (ad === "") {
          boshatasi();
        } else {


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
        }
      });

      $(document).on('click', '.kategoriupdate', function() {
        var ad = $('#updatekategorideger').val();
        var id = $('#updatekategoriid').val();

        if (ad === "") {
          boshatasi();
        } else {

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
        }
      });


      $(document).on('click', '#saloninsert', function() {
        var ad = $('#salonadi').val();
        if (ad === "") {
          boshatasi();
        } else {
          $.ajax({
            type: 'POST',
            url: 'php/salon/salonfetch.php',
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
        }
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

      $(document).on('click', '#salonupdate', function() {


        var deger = $(this).closest("tr").find(".sorting_1").text();
        $('#kategorideger').val(deger);
        $('#salonid').val($(this).val());



      });

      $(document).on('click', '.salonupdate', function() {
        var ad = $('#updatesalondeger').val();
        var id = $('#salonid').val();
        if (ad === "") {
          boshatasi();
        } else {

          $.ajax({
            type: 'POST',
            url: 'php/salon/salonfetch.php',
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
        }
      });


      $(document).on('click', '#koltukupdate', function() {

        var idler = $(this).val();

        var array = idler.split(',');

        var ad = array[0];





        var satirharfi = $(this).closest("tr").find(".satirharfi").text();
        var toplamkoltuk = $(this).closest("tr").find(".koltuk").text();

        satirharfi = satirharfi.replace(/\s+/g, '');
        toplamkoltuk = toplamkoltuk.replace(/\s+/g, '');


        $('select[name=updateselectkoltuk]').val(satirharfi);
        $('select[name=updatesalonadlari]').val(ad);
        $('.selectpicker').selectpicker('refresh');



        $('#koltukid').val(array[1]);

        $('#updatekoltuknumara').val(toplamkoltuk);


      });


      $(document).on('click', '.updatekoltuk', function() {
        var salonid = $('#updatesalonid').find("option:selected").val();

        var harf = $('#updateselectkoltuk').find("option:selected").val();
        var koltuksayisi = $('#updatekoltuknumara').val();
        var koltukid = $('#koltukid').val();

        if (harf === "" || koltuksayisi === "" || salonid === "") {
          boshatasi();
        } else {
          $.ajax({
            type: 'POST',
            url: 'php/salon/koltukfetch.php',
            data: {
              islem: 4,
              salonid: salonid,
              harf: harf,
              koltuksayisi: koltuksayisi,
              koltukid: koltukid
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
        }
      });




      $(document).on('click', '#koltukinsert', function() {

        var id = $('#select').find("option:selected").val();
        var harf = $('#selectkoltuk').find("option:selected").val();
        var sayi = $('#salonkoltuknumara').val();

        if (id === "" || harf === "" || sayi === "") {
          boshatasi();
        } else {

          $.ajax({
            type: 'POST',
            url: 'php/salon/koltukfetch.php',
            data: {
              islem: 3,
              sayi: sayi,
              id: id,
              harf: harf
            },
            success: function(data) {
              $('#tablo').empty().append(data);
              $('#example').DataTable({
                'language': {
                  'url': '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Turkish.json'
                }
              });
              $('select').selectpicker();


            },

          });
        }

      });

      $(document).on('click', '#koltukdelete', function() {
        var deger = $(this).val();

        $.ajax({
          type: 'POST',
          url: 'php/salon/koltukfetch.php',
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



      $(document).on('click', '#yonetmeninsert', function() {
        var ad = $('#yonetmenad').val();
        var soyad = $('#yonetmensoyad').val();


        if (ad === "" || soyad === "") {
          boshatasi();
        } else {

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
        }
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

        if (ad === "" || soyad === "") {

        } else {

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
        }
      });


      $(document).on('click', '#filminsert', function() {
        var filmadi = $('#filminadi').val();
        var kategori = $('#kategoriselect').find("option:selected").val();
        var yonetmen = $('#yonetmenselect').find("option:selected").val();
        var sure = $('#filmsuresi').val();
        var ozet = $('#filmozet').val();
        var vizyontarihi = $('#vizyontarihi').val();

        if (filmadi === "" || kategori === "" || yonetmen === "" ||
          sure === "" || ozet === "" || vizyontarihi === "" || $('#kapakresmi').get(0).files.length === 0) {
          boshatasi();
        } else {

          var form_data = new FormData();

          form_data.append('filmadi', filmadi);
          form_data.append('kategori', kategori);
          form_data.append('yonetmen', yonetmen);
          form_data.append('sure', sure);
          form_data.append('ozet', ozet);
          form_data.append('vizyontarihi', vizyontarihi);
          form_data.append('islem', '3');
          form_data.append("resim", $("#kapakresmi")[0].files[0]);

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
              $('select').selectpicker();


              $('.datekontrol').datepicker({
                format: 'yyyy-mm-dd',

              });

            },

          });
        }
      });

      $(document).on('click', '#deletefilm', function() {
        var deger = $(this).val();
        var resimadi = $(this).closest("tr").find(".kapakresmi").find(".kapak").text();


        $.ajax({
          type: 'POST',
          url: 'php/film/filmfetch.php',
          data: {
            islem: 2,
            id: deger,
            resimadi: resimadi
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
            $('select').selectpicker();


            $('.datekontrol').datepicker({
              format: 'yyyy-mm-dd',

            });


          },

        });

      });



      $(document).on('click', '#updateyonetmen', function() {

        var $filmadi = $(this).closest("tr").find(".filmad").text();
        var $kategorid = $(this).closest("tr").find(".kategoriid").val();
        var $kategori = $(this).closest("tr").find(".kategori").text();
        var $yonetmenid = $(this).closest("tr").find(".kategoriid").val();
        var $kategori = $(this).closest("tr").find(".kategori").text();

        $('#updateyonetmenad').val($adi);
        $('#updateyonetmensoyad').val($soyadi);
        $('#yonetmenlerid').val($(this).val());

      });


      $(document).on('click', '#resimgoster', function() {
        var kapak = $(this).val();
        kapak = kapak.replace(/\s+/g, '');

        var resimsrc = 'php/film/upload/' + kapak;


        $("#resmigoster").attr("src", resimsrc);


      });

      $(document).on('click', '#filmupdate', function() {
        var idler = $(this).val();

        var array = idler.split(',');

        var yonetmenid = array[0];
        var kategorid = array[1];
        var filmadi = $(this).closest("tr").find(".filmad").text();
        var sure = $(this).closest("tr").find(".sure").text();
        var ozet = $(this).closest("tr").find(".ozet").text();
        var vizyontarihi = $(this).closest("tr").find(".vizyontarihi").text();
        var kapak = $(this).closest("tr").find(".kapakresmi").find(".kapak").text();

        kapak = kapak.replace(/\s+/g, '');


        kategorid = kategorid.replace(/\s+/g, '');

        yonetmenid = yonetmenid.replace(/\s+/g, '');


        $('select[name=updatekategorid]').val(kategorid);
        $('select[name=updateyonetmenid]').val(yonetmenid);
        $('.selectpicker').selectpicker('refresh');
        $("#updatefilminadi").val('');
        $('#updatefilminadi').val(filmadi);
        $('#updatefilmsuresi').val(sure);
        $('#updatefilmozet').val(sure);
        $('#updatevizyontarihi').val(vizyontarihi);
        $('#filmid').val(array[2]);
        $('#eskiresim').val(kapak);


      });


      $(document).on('click', '.filmupdate', function() {
        var resimdegisikligi = $("input[name='updateresim']").is(":checked");

        if (resimdegisikligi) {

          resimdegisikligi = 'resimvar';
          var filmad = $('#updatefilminadi').val();
          var kategori = $('#updatekategoriselect').find("option:selected").val();
          var yonetmen = $('#updateyonetmenselect').find("option:selected").val();
          var sure = $('#updatefilmsuresi').val();
          var ozet = $('#updatefilmozet').val();
          var vizyontarihi = $('#updatevizyontarihi').val();
          var filmid = $('#filmid').val();
          var eskiresim = $('#eskiresim').val();



          var filmad = $('#updatefilminadi').val();
          var kategori = $('#updatekategoriselect').find("option:selected").val();
          var yonetmen = $('#updateyonetmenselect').find("option:selected").val();
          var sure = $('#updatefilmsuresi').val();
          var ozet = $('#updatefilmozet').val();
          var vizyontarihi = $('#updatevizyontarihi').val();
          var filmid = $('#filmid').val();
          var eskiresim = $('#eskiresim').val();


          if (filmad === "" || kategori === "" || yonetmen === "" || sure === "" ||
            ozet === "" || vizyontarihi === "" || $('#updatekapakresmi').get(0).files.length === 0) {

            boshatasi();
          } else {



            var form_data = new FormData();



            form_data.append('filmad', filmad);
            form_data.append('kategori', kategori);
            form_data.append('yonetmen', yonetmen);
            form_data.append('sure', sure);
            form_data.append('ozet', ozet);
            form_data.append('vizyontarihi', vizyontarihi);
            form_data.append('islem', '4');
            form_data.append('filmid', filmid);
            form_data.append("resim", $("#updatekapakresmi")[0].files[0]);
            form_data.append("eskiresim", eskiresim);
            form_data.append("resimdegisikligi", resimdegisikligi);




            $.ajax({
              type: 'POST',
              url: 'php/film/filmfetch.php',
              data: form_data,
              processData: false, // tell jQuery not to process the data
              contentType: false,
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
                $('select').selectpicker();


                $('.datekontrol').datepicker({
                  format: 'yyyy-mm-dd',

                });


              },

            });

          }


        } else {
          resimdegisikligi = 'resimyok';
          var filmad = $('#updatefilminadi').val();



          var kategori = $('#updatekategoriselect').find("option:selected").val();
          var yonetmen = $('#updateyonetmenselect').find("option:selected").val();
          var sure = $('#updatefilmsuresi').val();
          var ozet = $('#updatefilmozet').val();
          var vizyontarihi = $('#updatevizyontarihi').val();
          var filmid = $('#filmid').val();


          if (filmad === "" || kategori === "" || yonetmen === "" || sure === "" ||
            ozet === "" || vizyontarihi === "") {
            boshatasi();
          } else {

            $.ajax({
              type: 'POST',
              url: 'php/film/filmfetch.php',
              data: {
                islem: 4,
                filmad: filmad,
                kategori: kategori,
                yonetmen: yonetmen,
                sure: sure,
                ozet: ozet,
                vizyontarihi: vizyontarihi,
                filmid: filmid,
                resimdegisikligi: resimdegisikligi
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
                $('select').selectpicker();


                $('.datekontrol').datepicker({
                  format: 'yyyy-mm-dd',

                });


              },

            });
          }
        }




      });


      $(document).on('click', '#seansinsert', function() {
        var seansadi = $('#seansadi').val();
        var seansbaslangic = $('#seansbaslangicgunu').val();
        var seansbitisgunu = $('#seansbitisgunu').val();
        var filmid = $('#filmselect').find("option:selected").val();
        var salonid = $('#salonselect').find("option:selected").val();
        var ucret = $('#seansucreti').val();
        var boyut = $('#boyut').val();
        var altyazi = $("input[name='altyazi']").is(":checked");
        if (altyazi) {
          altyazi = 'E';
        } else {
          altyazi = 'H';
        }

        $.ajax({
          type: 'POST',
          url: 'php/seans/seansfetch.php',
          data: {
            islem: 3,
            seansadi: seansadi,
            seansbaslangic: seansbaslangic,
            seansbitisgunu: seansbitisgunu,
            filmid: filmid,
            salonid: salonid,
            ucret: ucret,
            boyut: boyut,
            altyazi: altyazi
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
            $('select').selectpicker();


            $('.datekontrol').datepicker({
              format: 'yyyy-mm-dd',

            });


          },

        });




      });


      $(document).on('click', '#deleteseans', function() {
        var id = $(this).val();


        $.ajax({
          type: 'POST',
          url: 'php/seans/seansfetch.php',
          data: {
            islem: 2,
            id: id,

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
            $('select').selectpicker();


            $('.datekontrol').datepicker({
              format: 'yyyy-mm-dd',

            });


          },

        });




      });


      $(document).on('click', '#seansupdate', function() {
        var idler = $(this).val();

        var array = idler.split(',');

        var seansid = array[0];
        var salonid = array[1];
        var filmid = array[2];

        filmid = filmid.replace(/\s+/g, '');

        salonid = salonid.replace(/\s+/g, '');


        var seansadi = $(this).closest("tr").find(".seansadi").text();
        var baslangicgunu = $(this).closest("tr").find(".baslangicgunu").text();
        var bitisgunu = $(this).closest("tr").find(".bitisgunu").text();
        var ucret = $(this).closest("tr").find(".ucret").text();
        var boyut = $(this).closest("tr").find(".boyut").text();
        var altyazı = $(this).closest("tr").find(".altyazi").text();

        $('select[name=updatefilmselect]').val(filmid);
        $('select[name=updatesalonselect]').val(salonid);
        $('.selectpicker').selectpicker('refresh');
        $('#updateseansadi').val(seansadi);
        $('#updateseansbaslangicgunu').val(baslangicgunu);
        $('#updateseansbitisgunu').val(bitisgunu);
        $('#updateseansucreti').val(ucret);
        $('#updateboyut').val(boyut);
        $('#seansid').val(seansid);



      });


      $(document).on('click', '.updateseans', function() {

        var seansadi = $('#updateseansadi').val();
        var seansbaslangic = $('#updateseansbaslangicgunu').val();
        var seansbitisgunu = $('#updateseansbitisgunu').val();
        var filmid = $('#updatefilmselect').find("option:selected").val();
        var salonid = $('#updatesalonselect').find("option:selected").val();
        var ucret = $('#updateseansucreti').val();
        var seansid = $('#seansid').val();
        var boyut = $('#updateboyut').val();
        var altyazi = $("input[name='updatealtyazi']").is(":checked");
        if (altyazi) {
          altyazi = 'E';
        } else {
          altyazi = 'H';
        }

        if (seansadi === "" || seansbaslangic === "" || seansbitisgunu === "" ||
          filmid === "" || salonid === "" || ucret === "" ||
          seansid === "" || boyut === "") {
          boshatasi();
        } else {

          $.ajax({
            type: 'POST',
            url: 'php/seans/seansfetch.php',
            data: {
              islem: 4,
              seansadi: seansadi,
              seansbaslangic: seansbaslangic,
              seansbitisgunu: seansbitisgunu,
              filmid: filmid,
              salonid: salonid,
              ucret: ucret,
              seansid: seansid,
              boyut: boyut,
              altyazi: altyazi
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
              $('select').selectpicker();


              $('.datekontrol').datepicker({
                format: 'yyyy-mm-dd',

              });

            },

          });
        }
      });



      $(document).on('click', '#seanssaatinsert', function() {

        var id = $('#seansselect').find("option:selected").val();
        var array3 = id.split(',');

        var d1 = new Date('2014-09-15 09:00:00');
        var d2 = new Date(d1);
        d2.setMinutes(d1.getMinutes() + 30);
        var bitis = d2.getHours() + ':' + d2.getMinutes();

        var seanssaati = $('#seanssaati').val();
        var toplamsayi = $('#toplam').val();

        alert(toplamsayi);
        if (toplamsayi > 1) {

          var kaslastirma = '1/1/1999 ' + seanssaati + ':00';
          var i;
          var c = 0;
          for (i = 1; i < toplamsayi; i++) {

            var saatler = $("#secilmemesigerekensaatler").find('option[id="' + i + '"]').val();

            var array = saatler.split('ile');
            var baslangic = '1/1/1999 ' + array[0];
            var bitis = '1/1/1999 ' + array[1];


            if (new Date(kaslastirma) >= new Date(baslangic) && new Date(kaslastirma) <= new Date(bitis)) {
              alert("Bu saatte salon dolu başka bir saat giriniz.");
              c = 1;
              break;
            }



          }

          if (id === "" || seanssaati === "") {
            boshatasi();
          } else if (c == 0) {

            var sure = $("#filmsure").val();

            var array2 = saatler.split('ile');
            var d1 = new Date('2014-09-15 ' + seanssaati);
            var d2 = new Date(d1);
            d2.setMinutes(d1.getMinutes() + sure);

            var bitis = d2.getHours() + ':' + d2.getMinutes();
            alert(array[0]);

            $.ajax({
              type: 'POST',
              url: 'php/seans/seanssaatleri.php',
              data: {
                islem: 3,
                seansid: array3[0],
                seanssaati: seanssaati,
                bitis: bitis
              },
              success: function(data) {
                var $response = $(data);

                var hata = $response.filter('#hatakodu').val();

                if (hata == 'eklendi') {
                  succes("Veri başarıyla eklendi.");
                } else if (hata == 'eklenemedi') {
                  error("Veri eklenemedi.");
                }
                $("#modal .close").click()

                $('#tablo').empty().append(data);
                $('#example').DataTable({
                  'language': {
                    'url': '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Turkish.json'
                  }
                });
                $('#seansselect').on('change', function(e) {

                  var idler = $(this).find("option:selected").val();

                  var array = idler.split(',');

                  var seansid = array[0];
                  var salonid = array[1];
                  var bugun = new Date();
                  var dd = String(bugun.getDate()).padStart(2, '0');
                  var mm = String(bugun.getMonth() + 1).padStart(2, '0'); //January is 0!
                  var yyyy = bugun.getFullYear();

                  bugun = yyyy + mm + dd;

                  $.ajax({
                    type: 'POST',
                    url: 'php/seans/seansbilgisi.php',
                    data: {
                      seansid: seansid,
                      salonid: salonid,
                      bugun: bugun
                    },
                    success: function(data) {
                      $("#secilmemesigerekensaatler").remove().append(data);

                      $('#seanssatleri').show();
                    },

                  });
                });
                $('.selectpicker').selectpicker();

                $('.selectpicker').selectpicker('refresh');


              },

            });


          }
        } else {
          if (id === "" || seanssaati === "") {
            boshatasi();
          } else {

            var sure = $("#filmsure").val();


            var d1 = new Date('2014-09-15 ' + seanssaati);
            var d2 = new Date(d1);
            d2.setMinutes(d1.getMinutes() + sure);
            alert(d2);
            var bitis = d2.getHours() + ':' + d2.getMinutes();

            alert(array3[0]);

            alert(seanssaati);
            $.ajax({
              type: 'POST',
              url: 'php/seans/seanssaatleri.php',
              data: {
                islem: 3,
                seansid: array3[0],
                seanssaati: seanssaati,
                bitis: bitis
              },
              success: function(data) {
                var $response = $(data);

                var hata = $response.filter('#hatakodu').val();

                if (hata == 'eklendi') {
                  succes("Veri başarıyla eklendi.");
                } else if (hata == 'eklenemedi') {
                  error("Veri eklenemedi.");
                }
                $("#modal .close").click();

                $('#seansselect').on('change', function(e) {

                  var idler = $(this).find("option:selected").val();

                  var array = idler.split(',');

                  var seansid = array[0];
                  var salonid = array[1];
                  var bugun = new Date();
                  var dd = String(bugun.getDate()).padStart(2, '0');
                  var mm = String(bugun.getMonth() + 1).padStart(2, '0'); //January is 0!
                  var yyyy = bugun.getFullYear();

                  bugun = yyyy + mm + dd;

                  $.ajax({
                    type: 'POST',
                    url: 'php/seans/seansbilgisi.php',
                    data: {
                      seansid: seansid,
                      salonid: salonid,
                      bugun: bugun
                    },
                    success: function(data) {
                      $("#secilmemesigerekensaatler").remove().append(data);

                      $('#seanssatleri').show();
                    },

                  });
                });
                $('.selectpicker').selectpicker();

                $('.selectpicker').selectpicker('refresh');


                $('#tablo').empty().append(data);
                $('#example').DataTable({
                  'language': {
                    'url': '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Turkish.json'
                  }


                });
              },
            });
          }
        }
      });

      $(document).on('click', '#deleteseansaatleri', function() {
        var id = $(this).val();


        $.ajax({
          type: 'POST',
          url: 'php/seans/seanssaatleri.php',
          data: {
            islem: 2,
            id: id,

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
            $('#seansselect').on('change', function(e) {

              var idler = $(this).find("option:selected").val();

              var array = idler.split(',');

              var seansid = array[0];
              var salonid = array[1];
              var bugun = new Date();
              var dd = String(bugun.getDate()).padStart(2, '0');
              var mm = String(bugun.getMonth() + 1).padStart(2, '0'); //January is 0!
              var yyyy = bugun.getFullYear();

              bugun = yyyy + mm + dd;

              $.ajax({
                type: 'POST',
                url: 'php/seans/seansbilgisi.php',
                data: {
                  seansid: seansid,
                  salonid: salonid,
                  bugun: bugun
                },
                success: function(data) {
                  $("#secilmemesigerekensaatler").remove().append(data);

                  $('#seanssatleri').show();
                },

              });
            });
            $('.selectpicker').selectpicker();



            $('.datekontrol').datepicker({
              format: 'yyyy-mm-dd',

            });


          },

        });




      });


      $(document).on('click', '#seanssaatleriupdate', function() {
        var idler = $(this).val();
        var array = idler.split(',');
        var seansaatid = array[0];
        var filmsuresi = array[1];
        var seansid = array[2];

        seansaatid = seansaatid.replace(/\s+/g, '');

        filmsuresi = filmsuresi.replace(/\s+/g, '');

        var filmsaat = $(this).closest("tr").find(".filmsaat").text();

        $('#updateseanssaati').val(filmsaat);
        $('#updateseansid').val(seansaatid);
        $('#updatefilmsuresi').val(filmsuresi);





        $.ajax({
          type: 'POST',
          url: 'php/seans/updateseansbilgisi.php',
          data: {
            seansid: seansid,
            seansaatid: seansaatid
  
          },
          success: function(data) {
            $("#updatesecilmemesigerekensaatler").empty().append(data);

          },

        });

      });
    </script>
  </div>
  <script>
  </script>
</body>

</html>