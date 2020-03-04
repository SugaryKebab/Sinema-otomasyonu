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

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <link href="style/panel.css" rel="stylesheet">


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
        <a href="#" id="anasayfa" class="list-group-item list-group-item-action bg-light">Anasayfa Kampanyalar</a>
        <a href="#" id="biletler" class="list-group-item list-group-item-action bg-light">Biletler</a>
        <a href="#" id="uye" class="list-group-item list-group-item-action bg-light">Üyeler</a>
        <a href="#" id="uye" class="list-group-item list-group-item-action bg-light">Rapor</a>
      </div>
    </div>


    <div id="page-content-wrapper">

      <div id="salonform">

        <div class="container" style="margin-top: 50px;">
          <h2>Salonları Düzenle</h2>
          <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#salonekle">Yeni Salon Ekle</button>
          <table class="table" style="margin-top: 50px;">

            <thead>
              <tr>
                <th scope="col">Salon adı</th>
                <th scope="col">Sıra Harfi </th>
                <th scope="col">Sıra Koltuk Sayısı </th>

                <th scope="col">İşlemler</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Salon 1</td>
                <td>Salon A</td>
                <td>5 </td>

                <td> <button type="button" class="btn btn-warning">Güncelle</button> <button type="button" class="btn btn-danger">Sil</button></td>
              </tr>
              <tr>

            </tbody>
          </table>

        </div>


      </div>


      <div id="filmform">
        <div class="container">

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
                  <th scope="col">İşlemler</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Salon 1</td>
                  <td>5 </td>
                  <td>30</td>
                  <td>30</td>
                  <td>30</td>
                  <td><button type="button" class="btn btn-danger">Düzenle</button></td>
                </tr>
                <tr>

                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                  <td>30</td>
                  <td>30</td>
                  <td><button type="button" class="btn btn-danger">Düzenle</button></td>
                </tr>
                <tr>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                  <td>30</td>
                  <td>30</td>
                  <td><button type="button" class="btn btn-danger">Düzenle</button></td>
                </tr>
              </tbody>
            </table>

          </div>






        </div>

      </div>

      <div id="seansform">

        <div class="container" style="margin-top: 50px;">
          <h2>Seansları Düzenle</h2>
          <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#seansekle">Yeni Seans Ekle</button>
          <table class="table" style="margin-top: 50px;">

            <thead>
              <tr>
                <th scope="col">Salon adı</th>
                <th scope="col">Film adı </th>
                <th scope="col">Saat</th>
                <th scope="col">İşlemler</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Salon 1</td>
                <td>5 </td>
                <td>30</td>
                <td><button type="button" class="btn btn-danger">Düzenle</button></td>
              </tr>
              <tr>

                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td><button type="button" class="btn btn-danger">Düzenle</button></td>
              </tr>
              <tr>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td><button type="button" class="btn btn-danger">Düzenle</button></td>
              </tr>
            </tbody>
          </table>

        </div>






      </div>

      <div id="anasayfaform">
        <div class="container" style="margin-top: 50px;">
        <h2>Ana Sayfa Slayt DÜzenini Düzenle</h2>
          <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#filmekle">Yeni Slayt Resmi Ekle</button>
          <table class="table" style="margin-top: 50px;">
          <table id="deneme" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>Slayt Resim Adı</th>
                <th>Resim Yolu</th>
                <th>Sıra Numarası</th>
                <th>İşlemler</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
              </tr>
              <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
              </tr>
              <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
              </tr>
              <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
              </tr>
              <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>$162,700</td>
              </tr>
              <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>$372,000</td>
              </tr>

          </table>
        </div>
      </div>


    </div>

  </div>

  <div class="modal">
    <div id="salonekle" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">

            <div class="form-group">
              <label for="formGroupExampleInput">Salon adı: </label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Salon adı giriniz">


              <label for="formGroupExampleInput2">Sıra sayısı : </label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Sıra sayısı giriniz">


              <label for="formGroupExampleInput2">Koltuk sayısı: </label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Koltuk sayısı giriniz">
            </div>
            </form>

          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Gönder</button>
          </div>
        </div>

      </div>
    </div>


    <div id="slaytekle" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">

            <div class="form-group">
              <label for="formGroupExampleInput">Slaytın Resim: </label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Salon adı giriniz">


              <label for="formGroupExampleInput2">Sıra sayısı : </label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Sıra sayısı giriniz">


              <label for="formGroupExampleInput2">Koltuk sayısı: </label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Koltuk sayısı giriniz">
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


              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>


              <label for="formGroupExampleInput">Film adı: </label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Film adı giriniz">

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


              <label for="formGroupExampleInput2">Vizyon tarihi: </label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Vizyon tarihi giriniz">

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



  </div>




  <script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
  </script>


  <script>



    $(document).ready(function() {
      $("#anasayfaform").hide();
      $("#salonform").hide(); 
      $("#filmform").hide();
      $("#seansform").hide();

      $("#salon").click(function() {
        $("#salonform").show();
        $("#filmform").hide();
        $("#seansform").hide();
        $("#anasayfaform").hide();
      });

      $("#film").click(function() {
        $("#filmform").show();
        $("#salonform").hide();
        $("#seansform").hide();
        $("#anasayfaform").hide();
      });

      $("#seans").click(function() {
        $("#seansform").show();
        $("#filmform").hide();
        $("#salonform").hide();
        $("#anasayfaform").hide();
      });
      $("#anasayfa").click(function() {
        $("#anasayfaform").show();
        $("#seansform").hide();
        $("#filmform").hide();
        $("#salonform").hide();
      });

    });
  </script>

</body>

</html>