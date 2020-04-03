<?php

require_once("../baglanti.php");


$islem = $_POST['islem'];


if ($islem == 1) {

    yazdir($conn);
} else if ($islem == 2) {
    $id = $_POST['id'];


    try {
        require_once("../baglanti.php");
        $conn->exec('DELETE FROM `yonetmenler` WHERE `yonetmenler`.`id`= ' . $id);
        mesaj('silindi');
    } catch (PDOException $e) {
      mesaj('silinemedi');
    }


    yazdir($conn);
} else if ($islem == 3) {
    $ad = $_POST['ad'];
    $soyadi = $_POST['soyad'];
    try {
        require_once("../baglanti.php");
        $conn->exec('INSERT INTO yonetmenler ( adi, soyadi) VALUES ( "'.$ad.'" , "'.    $soyadi.'") ');



          mesaj('eklendi');
    } catch (PDOException $e) {
        mesaj('eklenemedi');
    }
     yazdir($conn);
 
}else if ($islem == 4){
  $ad = $_POST['ad'];
  $soyad = $_POST['soyad'];
  $id = $_POST['id'];
  try {
    require_once("../baglanti.php");
    $sql = " UPDATE `yonetmenler` SET `adi` = '$ad', `soyadi` = '$soyad' WHERE `yonetmenler`.`id` = $id;";

    $stmt = $conn->prepare($sql);

    
    $stmt->execute();

    mesaj('guncellendi');
    }
catch(PDOException $e)
    {
      mesaj('guncellenemedi');
    }
    yazdir($conn);



}




function mesaj($mesaj){
  echo('<input type="hidden" id="hatakodu" name="custId" value="'. $mesaj.'">');
  }
  


function yazdir($conn)
{

    $statement = $conn->query("select * from yonetmenler");

    echo ('<div> <h2>Yönetmenleri Düzenle</h2>
   <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#insertkategori">Yönetmen Ekle</button></div> ');

    echo (' 
    
    <div class="container tablolar">

<table id="example" class="table table-hover" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Adı</th>
            <th>Soyadı</th>
            <th>İşlemler</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
        <th>Adı</th>
        <th>Soyadı</th>
        <th>İşlemler</th>
        </tr>
    </tfoot>
    <tbody>
  


');




    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

        echo ('    <tr>   
    
    
    <td class="adi" >' . $row['adi'] . '</td>
    <td class="soyadi" >' . $row['soyadi'] . '</td>
    <td><button  type="button" id="updateyonetmen"  data-toggle="modal" data-target="#updatekategori" value="' . $row['id'] . '" class="btn btn-warning update">Güncelle</button>
     <button type="button" id="deleteyonetmen" value="' . $row['id'] . '" class="btn btn-danger delete">Sil</buttonbutton> </td>
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
          <label for="Yönetmen Adı">Yönetmen Adı</label>
          <input type="text" class="form-control" id="yonetmenad" aria-describedby="emailHelp" placeholder="Yönetmenin İsmini Giriniz">
          <label for="Yönetmen Soyadı">Yönetmen Soyadı</label>
          <input type="text" class="form-control" id="yonetmensoyad" aria-describedby="emailHelp" placeholder="Yönetmenin Soyadını Giriniz">

        </div>
      
    
        <button type="submit" id="yonetmeninsert" data-dismiss="modal" class="btn btn-primary insert">Ekle</button>
      </form>
    </div>

  </div>
</div>
</div>');

echo ('<div class="modal " id="updatekategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Yönetmen Güncelle</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form>
        <div class="form-group">
          <label for="Yönetmen Adı">Yönetmen Adı</label>
          <input type="text" class="form-control" id="updateyonetmenad" aria-describedby="emailHelp" placeholder="Yönetmenin İsmini Giriniz">
          <label for="Yönetmen Soyadı">Yönetmen Soyadı</label>
          <input type="text" class="form-control" id="updateyonetmensoyad" aria-describedby="emailHelp" placeholder="Yönetmenin Soyadını Giriniz">
          <input type="hidden" class="form-control" id="yonetmenlerid" aria-describedby="emailHelp" placeholder="Kategori İsmi Giriniz">
        </div>
      
    
        <button type="submit" data-dismiss="modal" class="btn btn-primary yonetmenupdate">Ekle</button>
      </form>
    </div>

  </div>
</div>
</div>');


}
