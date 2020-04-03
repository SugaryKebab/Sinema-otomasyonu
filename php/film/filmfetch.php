<?php

use Verot\Upload\Upload;

require_once("../baglanti.php");



$islem = $_POST['islem'];


if ($islem == 1) {




  yazdir($conn);
} else if ($islem == 2) {
  $id = $_POST['id'];


  try {
    require_once("../baglanti.php");
    $conn->exec('DELETE FROM `kategori` WHERE `kategori`.`id`= ' . $id);
    mesaj('silindi');
  } catch (PDOException $e) {
    mesaj('silinemedi');
  }


  yazdir($conn);
} else if ($islem == 3) {
  require_once('../class.upload.php');

  $filmad = $_POST['filmadi'];
  $kategori = $_POST['kategori'];
  $yonetmen = $_POST['yonetmen'];
  $ozet = $_POST['ozet'];
  $sure = $_POST['sure'];
  $vizyontarihi = $_POST['vizyontarihi'];
  $image = new Upload($_FILES['resim']);

  if ($image->uploaded) {

    $image->file_new_name_body = $filmad;
    $image->image_convert = 'jpg';
  
    $image->image_resize = true;
    $image->image_ratio_crop = true;
    $image->image_x = 255;
    $image->image_y = 366;
    $image->Process('upload');
    if ($image->processed) {

    } else {

    }
  }

  $ad = $_POST['ad'];
  try {
    require_once("../baglanti.php");
    $conn->exec("INSERT INTO `film` ( `ad`, `kategoriid`, `yonetmenid`, `sure`, `ozet`, `vizyontarihi`, `kapakresmi`)
     VALUES ( '$filmad', '$kategori', '$yonetmen', '$sure', '$ozet', '$vizyontarihi', ' $image->file_dst_path $image->file_dst_name ');");
    mesaj('eklendi');
  } catch (PDOException $e) {
    mesaj('eklenemedi');
  }
  yazdir($conn);
  
} else if ($islem == 4) {
  $ad = $_POST['ad'];
  $id = $_POST['id'];
  try {
    require_once("../baglanti.php");
    $sql = "UPDATE kategori SET kategori='$ad' WHERE id=$id";

    $stmt = $conn->prepare($sql);


    $stmt->execute();

    mesaj('guncellendi');
  } catch (PDOException $e) {
    mesaj('guncellenemedi');
  }
  yazdir($conn);
}




function mesaj($mesaj)
{
  echo ('<input type="hidden" id="hatakodu" name="custId" value="' . $mesaj . '">');
}



function yazdir($conn)
{

  $statement = $conn->query("SELECT * FROM film INNER JOIN kategori on film.kategoriid = kategori.kategorid INNER JOIN yonetmenler on film.yonetmenid = yonetmenler.yonetmenlerid");

  echo ('<div> <h2>Kategorileri Düzenle</h2>
   <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#insertkategori">Kategori Ekle</button></div> ');

  echo (' 
    
    <div class="container tablolar">

<table id="example" class="table table-hover" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Film Adı</th>
            <th>Film Kategorisi</th>
            <th>Film Yönetmeni</th>
            <th>Film Süresi</th>
            <th>Film Özeti</th>
            <th>Film Vizyon Tarihi</th>
            <th>Film Kapak Resmi</th>
            <th>İşlemler</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
        <th>Film Adı</th>
        <th>Film Kategorisi</th>
        <th>Film Yönetmeni</th>
        <th>Film Süresi</th>
        <th>Film Özeti</th>
        <th>Film Vizyon Tarihi</th>
        <th>Film Kapak Resmi</th>
        <th>İşlemler</th>
        </tr>
    </tfoot>
    <tbody>
  


');




  while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

    echo ('    <tr>   
        <td class="filmad" >' . $row['ad'] . '</td>
        <td id="' . $row['kategoriid'] . '" class="kategori" >' . $row['kategori'] . '</td>
        <td id="' . $row['yonetmenid'] . '" class="yonetmen" >' . $row['adi'] . '  ' . $row['soyadi'] . '</td>
        <td class="sure" >' . $row['sure'] . '</td>
        <td class="ozet" > <p> ' . $row['ozet'] . ' </p></td>
        <td class="vizyontarihi" >' . $row['vizyontarihi'] . '</td>
        <td class="kapakresmi" >' . $row['kapakresmi'] . '</td>

    <td><button  type="button" id="kategoriupdate"  data-toggle="modal" data-target="#updatekategori" value="' . $row['filmid'] . '" class="btn btn-warning update">Güncelle</button>
     <button type="button" id="deletekategori" value="' . $row['filmid'] . '" class="btn btn-danger delete">Sil</buttonbutton> </td>
    </tr>
    ');
  }


  echo ('</tbody>
</table>
</div>');

  $statement = $conn->query("select * from kategori");

  $kategori = array();
  $kategoriid = array();
  while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    echo ($row['kategori']);
    $kategori[] = $row['kategori'];
    $kategoriid[] = $row['kategorid'];
  }


  $statement = $conn->query("select * from yonetmenler");

  $yonetmenid = array();
  $yonetmenad = array();
  while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

    $yonetmenid[] = $row['yonetmenlerid'];
    $yonetmenad[] = $row['adi'] . ' ' . $row['soyadi'];
  }





  modal($kategori, $kategoriid, $yonetmenid, $yonetmenad);
}



function modal(array $kategori, array $kategoriid, array $yonetmenid, array $yonetmenad)
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
          <label for="kategori">Film Adı</label>
          <input type="text" class="form-control" name="filmadi" id="filminadi" aria-describedby="emailHelp" placeholder="Film İsmini Giriniz">


            <label for="kategori">Film  Kategori</label>
            
            <select id="kategoriselect" class="form-control selectpicker" data-live-search="true">
            ');


  echo (" <option> </option>");


  for ($i = 0; $i < count($kategoriid); ++$i) {

    echo ('
      
            <option value="' . $kategoriid[$i] . '">' . $kategori[$i] . '</option>
      
       ');
  }


  echo ('   </select>
  <label for="kategori">Film  Yönetmeni</label>
            
  <select id="yonetmenselect" class="form-control selectpicker" data-live-search="true">

    ');


  echo (" <option> </option>");


  for ($i = 0; $i < count($yonetmenid); ++$i) {

    echo ('
        
              <option value="' . $yonetmenid[$i] . '">' . $yonetmenad[$i] . '</option>
        
         ');
  }




  echo ('
    </select>


  
    <label for="kategori">Film Süre</label>
    <input type="number" class="form-control" id="filmsuresi" aria-describedby="emailHelp" placeholder="Film Süresini">
  


    <label for="exampleFormControlTextarea1">Film Özeti</label>
    <textarea class="form-control" id="filmozet" rows="3"></textarea>




  
  <label for="kategori">Vizyon Tarihi</label>
  <div class="input-group date">
  <input type="text" class="form-control" id="vizyontarihi" placeholder="YYYY-MM-DD">
</div>
<label for="kategori">Kapak Resmi</label>
<div class="custom-file">
<input type="file" class="custom-file-input" id="kapakresmi">
<label class="custom-file-label" for="customFile">Resim Seç</label>
</div>



          </div>
  
  
  
          
  
  
        
      
          <button type="submit" id="filminsert" data-dismiss="modal" class="btn btn-primary insert">Ekle</button>
        </form>
      </div>
  
    </div>
  </div>
  </div>');

  echo ('  <div class="modal" id="updatekategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Kategori Güncelle</h5>
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
