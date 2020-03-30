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


    
}else if ($islem == 4){
  $ad = $_POST['ad'];
  $id = $_POST['id'];
  try {
    require_once("../baglanti.php");
    $sql = "UPDATE kategori SET kategori='$ad' WHERE id=$id";

    $stmt = $conn->prepare($sql);

    
    $stmt->execute();

    echo $stmt->rowCount() . " records UPDATED successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
    yazdir($conn);



}






function yazdir($conn)
{

    $statement = $conn->query("select * from kategori");

    echo ('<div> <h2>Kategorileri Düzenle</h2>
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
    <td><button  type="button" id="kategoriupdate"  data-toggle="modal" data-target="#updatekategori" value="' . $row['id'] . '" class="btn btn-warning update">Güncelle</button>
     <button type="button" id="deletekategori" value="' . $row['id'] . '" class="btn btn-danger delete">Sil</buttonbutton> </td>
    </tr>
    ');
    }


    echo ('</tbody>
</table>
</div>');


modal();

}



function modal()
{
    echo ('<div class="modal " id="insertkategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
      
    
        <button type="submit" id="kategoriinsert" data-dismiss="modal" class="btn btn-primary insert">Ekle</button>
      </form>
    </div>

  </div>
</div>
</div>');


 echo('  <div class="modal" id="updatekategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
           <input type="text" class="form-control" id="updatekategorideger" aria-describedby="emailHelp" placeholder="Kategori İsmi Giriniz">
           <input type="hidden" class="form-control" id="updatekategoriid" aria-describedby="emailHelp" placeholder="Kategori İsmi Giriniz">
         </div>
       
     
         <button type="submit " data-backdrop="false" data-dismiss="modal" class="btn btn-primary kategoriupdate">Güncelle</button>
       </form>
     </div>
 
   </div>
 </div>
</div>');

}
