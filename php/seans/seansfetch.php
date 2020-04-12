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
    $conn->exec('DELETE FROM `seans` WHERE `seans`.`id`= ' . $id);

    mesaj('silindi');
  } catch (PDOException $e) {
    mesaj('silinemedi');
  }


  yazdir($conn);
} else if ($islem == 3) {
  require_once('../class.upload.php');

  $seansadi = $_POST['seansadi'];
  $seansbaslangic = $_POST['seansbaslangic'];
  $seansbitisgunu = $_POST['seansbitisgunu'];
  $filmid = $_POST['filmid'];
  $salonid = $_POST['salonid'];
  $ucret = $_POST['ucret'];
  $boyut = $_POST['boyut'];
  $altyazi = $_POST['altyazi'];





  try {
    require_once("../baglanti.php");
    $conn->exec("INSERT INTO `seans` ( `seansadi`, `filmid`, `baslangicgunu`, `bitisgunu`, `salonid`, `ucret`, `altyazi`, `boyut`) 
        VALUES ( '$seansadi', '$filmid', '$seansbaslangic', '$seansbitisgunu', '$salonid', '$ucret', '$altyazi', '$boyut');");
    mesaj('eklendi');
  } catch (PDOException $e) {
    mesaj('eklenemedi');
  }
  yazdir($conn);
} else if ($islem == 4) {

  $seansadi = $_POST['seansadi'];
  $seansbaslangic = $_POST['seansbaslangic'];
  $seansbitisgunu = $_POST['seansbitisgunu'];
  $filmid = $_POST['filmid'];
  $salonid = $_POST['salonid'];
  $ucret = $_POST['ucret'];
  $boyut = $_POST['boyut'];
  $altyazi = $_POST['altyazi'];
  $seansid = $_POST['seansid'];



  try {
    require_once("../baglanti.php");
    $sql = "UPDATE `seans` 
            SET `seansadi` = '$seansadi', `filmid` = '$filmid', `baslangicgunu` = '$seansbaslangic', 
            `bitisgunu` = '$seansbitisgunu', `salonid` = '$salonid', `ucret` = '$ucret', 
            `altyazi` = '$altyazi', 
            `boyut` = '$boyut' WHERE `seans`.`id` = $seansid;";

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

  $statement = $conn->query("SELECT * FROM seans AS  sen
  INNER JOIN ( SELECT * FROM salon 
               INNER JOIN  (SELECT salonid,sum(toplamkoltuk) FROM koltuk
                           GROUP BY salonid) As kol on kol.salonid = salon.id)
                           AS salonlar ON salonlar.salonid = sen.salonid
  INNER JOIN film on film.filmid = sen.filmid");

  echo ('<div> <h2>Seansları Düzenle</h2>
   <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#insertkategori">Seans Ekle</button></div> ');

  echo (' 
    
    <div class="container tablolar">
<table id="example" class="table table-hover" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Seans Adı</th>
            <th>Seans Başlangıç Günü</th>
            <th>Seans Bitiş Günü</th>
            <th>Seans Altyazılı</th>
            <th>Seans Boyutu</th>
            <th>Seans Ucreti</th>
            <th>Film Adi</th>
            <th>Film Süresi</th>
            <th>Film Vizyon Tarihi</th>
            <th>Salon Adı</th>
            <th>Toplam Koltuk</th>
            <th>İşlemler</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
        <th>Seans Adı</th>
        <th>Seans Başlangıç Günü</th>
        <th>Seans Bitiş Günü</th>
        <th>Seans Altyazılı</th>
        <th>Seans Boyutu</th>
        <th>Seans Ucreti</th>
        <th>Film Adi</th>
        <th>Film Süresi</th>
        <th>Film Vizyon Tarihi</th>
        <th>Salon Adı</th>
        <th>Toplam Koltuk</th>
        <th>İşlemler</th>
        </tr>
    </tfoot>
    <tbody>
  
');




  while ($row = $statement->fetch(PDO::FETCH_NUM)) {

    echo ('    <tr>   
        <td class="seansadi" >' . $row[1] . '</td>
        <td class="baslangicgunu" >' . $row[3] . '</td>
        <td class="bitisgunu" >' . $row[4] . '</td>
        <td class="altyazi" >' . $row[7] . '</td>
        <td class="boyut" >' . $row[8] . '</td>
        <td class="ucret" >' . $row[6] . '</td>
        <td class="filmadi" >' . $row[14] . '</td>
        <td class="filmsuresi" >' . $row[17] . '</td>
        <td class="filmvizyon" >' . $row[19] . '</td>
        <td class="salonadi" >' . $row[10] . '</td>
        <td class="salontoplam" >' . $row[12] . '</td>



        <td><button  type="button" id="seansupdate"  data-toggle="modal" data-target="#updatekategori" value="' . $row[0] . ',' . $row[5] . ',' . $row[13] . '" class="btn btn-warning update">Güncelle</button>
        <button type="button" id="deleteseans" value="' . $row[0] . '" class="btn btn-danger delete">Sil</buttonbutton> </td>


    </tr>
    ');
  }


  echo ('</tbody>
</table>
</div>');

  $statement = $conn->query("select * from film");

  $kategori = array();
  $kategoriid = array();
  while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

    $kategori[] = $row['ad'];
    $kategoriid[] = $row['filmid'];
  }


  $statement = $conn->query("select * from salon");

  $yonetmenid = array();
  $yonetmenad = array();
  while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

    $yonetmenid[] = $row['id'];
    $yonetmenad[] = $row['ad'];
  }





  modal($kategori, $kategoriid, $yonetmenid, $yonetmenad);
}



function modal(array $kategori, array $kategoriid, array $yonetmenid, array $yonetmenad)
{
  echo ('<div class="modal " id="insertkategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Seans Ekle</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>	
      <div class="modal-body">
        <form>
          <div class="form-group">
          <label for="kategori">Seans Adı Adı</label>
          <input type="text" class="form-control" name="filmadi" id="seansadi" aria-describedby="emailHelp" placeholder="Seans Adını Giriniz">

          <label for="kategori">Seans Başlangıç Günü</label>
          <div class="input-group date">
          <input type="text" class="form-control datekontrol" id="seansbaslangicgunu" placeholder="YYYY-MM-DD">
        </div>

        <label for="kategori">Seans Bitiş Günü</label>
        <div class="input-group date">
        <input type="text" class="form-control datekontrol" id="seansbitisgunu" placeholder="YYYY-MM-DD">
      </div>





            <label for="kategori">Film  Adı</label>
            
            <select id="filmselect" class="form-control selectpicker" data-live-search="true">
            ');


  echo (" <option> </option>");


  for ($i = 0; $i < count($kategoriid); ++$i) {

    echo ('
      
            <option value="' . $kategoriid[$i] . '">' . $kategori[$i] . '</option>
      
       ');
  }


  echo ('   </select>
  <label for="kategori">Salon</label>
            
  <select id="salonselect" class="form-control selectpicker" data-live-search="true">

    ');


  echo (" <option> </option>");


  for ($i = 0; $i < count($yonetmenid); ++$i) {

    echo ('
        
              <option value="' . $yonetmenid[$i] . '">' . $yonetmenad[$i] . '</option>
        
         ');
  }




  echo ('
    </select>


  
    <label for="kategori">Seans Ücreti</label>
    <input type="number" class="form-control" id="seansucreti" aria-describedby="emailHelp" placeholder="Seans Ücreti">
  
 
    <label for="kategori">Film Boyutu</label>
    <select id="boyut" class="form-control">
    <option>2D</option>
    <option>3D</option>
  </select>


  <div class="form-check">
  <input class="form-check-input" name="altyazi" type="checkbox" value="" id="altyazi">
  <label class="form-check-label" for="updateresim">
   Altyazılı
  </label>
</div>


  


          </div>
  
  
  
          
  
  
        
      
          <button type="submit" id="seansinsert" data-dismiss="modal" class="btn btn-primary insert">Ekle</button>
        </form>
      </div>
  
    </div>
  </div>
  </div>');

  echo ('<div class="modal " id="updatekategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Seans Ekle</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>	
      <div class="modal-body">
        <form>
          <div class="form-group">
          <label for="kategori">Seans Adı Adı</label>
          <input type="text" class="form-control" name="updatefilmadi" id="updateseansadi" aria-describedby="emailHelp" placeholder="Seans Adını Giriniz">

          <label for="kategori">Seans Başlangıç Günü</label>
          <div class="input-group date">
          <input type="text" class="form-control datekontrol" id="updateseansbaslangicgunu" placeholder="YYYY-MM-DD">
        </div>

        <label for="kategori">Seans Bitiş Günü</label>
        <div class="input-group date">
        <input type="text" class="form-control datekontrol" id="updateseansbitisgunu" placeholder="YYYY-MM-DD">
      </div>





            <label for="kategori">Film  Adı</label>
            
            <select id="updatefilmselect" name="updatefilmselect"  class="form-control selectpicker" data-live-search="true">
            ');


  echo (" <option> </option>");


  for ($i = 0; $i < count($kategoriid); ++$i) {

    echo ('
      
            <option value="' . $kategoriid[$i] . '">' . $kategori[$i] . '</option>
      
       ');
  }


  echo ('   </select>
  <label for="kategori">Salon</label>
            
  <select id="updatesalonselect" name="updatesalonselect" class="form-control selectpicker" data-live-search="true">

    ');


  echo (" <option> </option>");


  for ($i = 0; $i < count($yonetmenid); ++$i) {

    echo ('
        
              <option value="' . $yonetmenid[$i] . '">' . $yonetmenad[$i] . '</option>
        
         ');
  }




  echo ('
    </select>


  
    <label for="kategori">Seans Ücreti</label>
    <input type="number" class="form-control" id="updateseansucreti" aria-describedby="emailHelp" placeholder="Seans Ücreti">
  
 
    <label for="updatekategori">Film Boyutu</label>
    <select id="updateboyut" class="form-control">
    <option>2D</option>
    <option>3D</option>
  </select>


  <div class="form-check">
  <input class="form-check-input" name="updatealtyazi" type="checkbox" value="" id="updatealtyazi">
  <label class="form-check-label" for="updateresim">
   Altyazılı
  </label>
</div>

<input type="hidden" class="form-control" id="seansid">
  


          </div>
  
  
  
          
  
  
        
      
          <button type="submit"  data-dismiss="modal" class="btn btn-primary updateseans">Ekle</button>
        </form>
      </div>
  
    </div>
  </div>
  </div>');
}
