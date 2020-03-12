<?php

require_once("../baglanti.php");


$islem = $_POST['islem'];


if ($islem == 1) {

    yazdir($conn);
} else if ($islem == 2) {
    $id = $_POST['id'];


    try {
        require_once("../baglanti.php");
        $conn->exec('DELETE FROM `kategori` WHERE `kategori`.`id`= ' . $id);
    } catch (PDOException $e) {
    }


    yazdir($conn);
} else if ($islem == 3) {
    $ad = $_POST['ad'];
    try {
        require_once("../baglanti.php");
        $conn->exec('INSERT INTO kategori (kategori)
        VALUES( "' . $ad.'")' );
    } catch (PDOException $e) {
        echo($e);
    }
     yazdir($conn);


    
}






function yazdir($conn)
{

    $statement = $conn->query("select * from kategori");

    echo ('<div> <h2>Filmleri Düzenle</h2>
   <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#insertkategori">Kategori Ekle</button></div> ');

    echo (' 
    
    <div class="container tablolar">

<table id="example" class="table table-hover" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Film Adı</th>
            <th>İşlemler</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
        <th>Film Adı</th>
        <th>İşlemler</th>
        </tr>
    </tfoot>
    <tbody>
  


');




    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

        echo ('    <tr>   
    
    
    <td>' . $row['kategori'] . '</td>
    <td><a  type="button" value="' . $row['id'] . '" class="btn btn-warning update">Güncelle</a>
     <button type="button" id="delete" value="' . $row['id'] . '" class="btn btn-danger delete">Sil</button> </td>
    </tr>
    ');
    }


    echo ('    </tbody>
</table>
</div>');


    echo ("  <script>

$(document).one('click','.delete',function (){
   var deger = $(this).val();
  
  $.ajax({
    type: 'POST',
    url: 'php/film/kategorifetch.php',
    data: { islem: 2, id: deger },
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


$(document).one('click','.insert',function (){
    var ad = $('#addeger').val();


   $.ajax({
     type: 'POST',
     url: 'php/film/kategorifetch.php',
     data: { islem: 3, ad: ad },
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
 


</script>
");

modal();

}



function modal()
{
    echo ('<div class="modal fade" id="insertkategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Kategori Ekle</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form>
        <div class="form-group">
          <label for="kategori">Kategori</label>
          <input type="text" class="form-control" id="addeger" aria-describedby="emailHelp" placeholder="Kategori İsmi Giriniz">

        </div>
      
    
        <button type="submit" data-dismiss="modal" class="btn btn-primary insert">Ekle</button>
      </form>
    </div>

  </div>
</div>
</div>');


 echo('  <div class="modal fade" id="updatekategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Kategori Ekle</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body">
       <form>
         <div class="form-group">
           <label for="updatekategori">Kategori</label>
           <input type="text" class="form-control" id="updatekategori" aria-describedby="emailHelp" placeholder="Kategori İsmi Giriniz">

         </div>
       
     
         <button type="submit" class="btn btn-primary update">Ekle</button>
       </form>
     </div>
 
   </div>
 </div>
</div>');

}
