<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
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

  <link href="style/panel.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Sinema Panel </div>
      <div class="list-group list-group-flush">
        <a href="#" id="salon" class="list-group-item list-group-item-action bg-light">Salonları Yönet</a>
        <a href="#" id="film" class="list-group-item list-group-item-action bg-light">Filmleri Yönet</a>
        <a href="#" id="seans" class="list-group-item list-group-item-action bg-light">Seansları Yönet</a>
        <a href="#" id="kampanya" class="list-group-item list-group-item-action bg-light">Anasayfa Kampanyalar</a>
        <a href="#" id="biletler" class="list-group-item list-group-item-action bg-light">Biletler</a>
        <a href="#" id="biletler" class="list-group-item list-group-item-action bg-light">Üyeler</a>
        <a href="#" id="biletler" class="list-group-item list-group-item-action bg-light">Rapor</a>
      </div>
    </div>


    <div id="page-content-wrapper">
      <div id="11" class="container">

        <div class="salonlar" style="margin-top: 50px;">
          <h2>Salonları Düzenle</h2>
          <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#salonekle">Yeni Salon Ekle</button>
          <table class="table" style="margin-top: 50px;">

            <thead>
              <tr>
                <th scope="col">Salon adı</th>
                <th scope="col">Sıra Sayısı </th>
                <th scope="col">Toplam Koltuk Sayısı</th>
                <th scope="col">Salon Düzeni</th>
                <th scope="col">İşlemler</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Salon 1</td>
                <td>5 </td>
                <td>30</td>
                <td><button type="button" class="btn btn-success">Göster</button></td>
                <td><button type="button" class="btn btn-warning">Güncelle</button> <button type="button" class="btn btn-danger">Sil</button></td>
              </tr>
              <tr>


            </tbody>
          </table>

        </div>
      </div>

      <div id="22" class="container">

        <div class="filmler" style="margin-top: 50px;">
          <h2>Filmleri Düzenle</h2>
          <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#filmekle">Yeni Film Ekle</button>
          <table class="table" style="margin-top: 50px;">

            <thead>
              <tr>
                <th scope="col">Film adı</th>
                <th scope="col">Kategori </th>
                <th scope="col">Süre</th>
                <th scope="col">Vizyon tarihi</th>
                <th scope="col">Özet</th>
                <th scope="col">Yönetmen</th>
                <th scope="col">Kapak Resmi</th>
                <th scope="col">İşlemler</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Joker</td>
                <td>Dram </td>
                <td>30</td>
                <td>12/12/2020</td>
                <td>Özet</td>
                <td>Todd Phillips</td>
                <td>Resim</td>
                <td><button type="button" class="btn btn-warning">Güncelle</button> <button type="button" class="btn btn-danger">Sil</button></td>
              </tr>
              <tr>
            </tbody>
          </table>

        </div>






      </div>

      <div id="33" class="container">

        <div class="seanslar" style="margin-top: 50px;">
          <h2>Seansları Düzenle</h2>
          <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#seansekle">Yeni Seans Ekle</button>
          <table class="table" style="margin-top: 50px;">

            <thead>
              <tr>
                <th scope="col">Seans Adi</th>
                <th scope="col">Film adı </th>
                <th scope="col">Film Boyutu</th>
                <th scope="col">Türkçe Altyazılı</th>
                <th scope="col">Salon Adı</th>
                <th scope="col">Seans Başlangıç Tarihi</th>
                <th scope="col">Seans Bitiş Tarihi</th>
                <th scope="col">İşlemler</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>A Seansi</td>
                <td>Joker </td>
                <td>2D</td>
                <td>Hayır</td>
                <td>Salon A</td>
                <td>12/12/2020</td>
                <td>15/15/2020</td>

                <td><button type="button" class="btn btn-warning">Güncelle</button> <button type="button" class="btn btn-danger">Sil</button></td>
              </tr>
              <tr>

            </tbody>
          </table>

        </div>






      </div>
    </div>

  </div>

  <div id="salonekle" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">

          <div class="form-group">
            <label for="salon">Salon adı: </label>
            <input type="text" class="form-control" id="salon" placeholder="Salon Adı Giriniz">
            <label for="toplamsira">Salon adı: </label>
            <input type="text" class="form-control" id="toplamsira" placeholder="Toplam Sıra Sayısını Giriniz">



          </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Gönder</button>
        </div>
      </div>

    </div>
  </div>

  <div id="filmekle" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">

          <div class="form-group">
            <label for="filmadi">Film adı: </label>
            <input type="text" class="form-control" id="filmadi" placeholder="Film adı giriniz">

            <label for="formGroupExampleInput2">Kategori : </label>
            <select class="form-control" id="formGroupExampleInput2">
              <option>Aksiyon</option>
              <option>Komedi</option>
              <option>Korku</option>
              <option>Bilim kurgu</option>
              <option>Dram</option>
              <option>Animasyon</option>
            </select>

            <label for="formGroupExampleInput2">Süre: </label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Süre giriniz">
            <label for="formGroupExampleInput2">Yönetmen: </label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Süre giriniz">

            <label for="formGroupExampleInput2">Kapak Resmi: </label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile">
              <label class="custom-file-label" for="customFile">Resim Seç</label>
            </div>

            <label for="formGroupExampleInput2">Vizyon tarihi: </label>

            <div class="input-group date">
              <input type="text" class="form-control" id="datepicker" placeholder="MM/DD/YYYY">
            </div>

            <label for="formGroupExampleInput2">Özet: </label>
            <textarea class="form-control" rows="5" id="formGroupExampleInput2"></textarea>
          </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Gönder</button>
        </div>
      </div>

    </div>
  </div>

  <div id="seansekle" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">

          <div class="form-group">
            <label for="formGroupExampleInput">Salon adı: </label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Salon adı giriniz">


            <label for="formGroupExampleInput2">Film adı : </label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Film adı giriniz">


            <label for="formGroupExampleInput2">Saat: </label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Saat giriniz">
          </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Gönder</button>
        </div>
      </div>

    </div>
  </div>


  <script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
  </script>


  <script>
    $('#datepicker').datepicker();
    $(document).ready(function() {
      $('#datepicker').datepicker();

      $("#11").hide();
      $("#22").hide();
      $("#33").hide();

      $("#salon").click(function() {
        $("#11").show();
        $("#22").hide();
        $("#33").hide();
      });

      $("#film").click(function() {
        $("#22").show();
        $("#11").hide();
        $("#33").hide();
      });

      $("#seans").click(function() {
        $("#33").show();
        $("#22").hide();
        $("#11").hide();
      });

    });
  </script>

</body>

</html>