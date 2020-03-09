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
  <link rel="stylesheet" href="style/panel.css">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE = edge,chrome = 1">
  <title>Hello World using Backbone.js</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.13/js/dataTables.bootstrap4.min.js"></script>



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


    <div class="container">
        <h1>Bootstrap 4 DataTables</h1>
        <table id="example" class="table table-hover" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </tfoot>
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
            </tbody>
        </table>
    </div>


    <div class="icerik">
      <div class="container" id="tablo">







      </div>
    </div>



    <script type="text/javascript">
      $(document).ready(function() {
        $('#example').DataTable({
          "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Turkish.json"
          }
        });
      });
    </script>
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
              
              $("#example").DataTable().ajax.reload(null, false );
            },

          });
        });

      });
    </script>


  </div>





</body>

</html>