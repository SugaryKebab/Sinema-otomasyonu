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

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>


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







        <script>
            $(document).ready(function() {
                $('#table_id').DataTable();




            });
        </script>

        <script>
            $(document).ready(function() {

                $("#anasayfa").click(function() {

                    $.ajax({
                        type: "POST",
                        url: "php/slayt/fetch.php",
                  
                        success: function(data) {
                            alert(data);

                        },
                   
                    });
                });

            });
        </script>


    </div>





</body>

</html>