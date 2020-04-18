<?php

require_once("../baglanti.php");

$islem = $_POST['islem'];

if ($islem == 1) {

  yazdir($conn);

} else if ($islem == 2) {
    
  $id = $_POST['id'];
  try {
    require_once("../baglanti.php");
    $conn->exec("DELETE FROM `musteri` WHERE `musteri`.`id` = $id");

    mesaj('silindi');
  } catch (PDOException $e) {
    mesaj('silinemedi');
  }


  yazdir($conn);
} else if ($islem == 3) {

  $ad = $_POST['ad'];
  $soyad = $_POST['soyad'];
  $tel = $_POST['telefon'];
  $eposta = $_POST['eposta'];
  $cinsiyet = $_POST['cinsiyet'];
  $uyeliktarihi = $_POST['uyeliktarihi'];
  $sifre = uniqid();
  $sifrehash = password_hash($sifre, PASSWORD_DEFAULT);

  try {
    require_once("../baglanti.php");
    $conn->exec("INSERT INTO `musteri` ( `ad`, `soyad`, `tel`, `epost`, `sifre`, `cinsiyet`, `uyeliktarihi`) VALUES 
    ( '$ad', '$soyad', '$tel', '$eposta', '$sifrehash', '$cinsiyet', '$uyeliktarihi');");
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

  $statement = $conn->query("SELECT * FROm musteri");

  echo ('<div> <h2>Üyeler</h2>
   <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#insertkategori">Üye Ekle</button></div> ');

  echo (' 
    
    <div class="container tablolar">
<table id="example" class="table table-hover" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Adı</th>
            <th>Soyadı</th>
            <th>Cinsiyeti</th>
            <th>Telefon Numarası</th>
            <th>E-posta Adresi</th>
            <th>Üyelik Tarihi</th>
            <th>İşlemler</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
        <th>Adı</th>
        <th>Soyadı</th>
        <th>Cinsiyeti</th>
        <th>Telfonu</th>
        <th>E-posta Adresi</th>
        <th>Üyelik Tarihi</th>
        <th>İşlemler</th>
        </tr>
    </tfoot>
    <tbody>
  
');




  while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

    echo ('    <tr>   
        <td class="uyead" >' . $row['ad'] . '</td>
        <td class="soyad" >' . $row['soyad'] . '</td>
        <td class="cinsiyet" >' . $row['cinsiyet'] . '</td>
        <td class="telefon" >' . $row['tel'] . '</td>
        <td class="eposta" >' . $row['epost'] . '</td>
        <td class="uyeliktarih" >' . $row['uyeliktarihi'] . '</td>

        <td  >
        <button type="button" id="deleteuye" value="' . $row['id'] . '" class="btn btn-danger delete">Sil</buttonbutton> </td>


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
    echo ('<div class="modal" id="insertkategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Üye Ekle</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>	
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="kategori">Üye Adı</label>
              <input type="text" class="form-control" id="uyead" aria-describedby="emailHelp" placeholder="Üye Adını Giriniz">
              <label for="kategori">Üye Soyadı</label>
              <input type="text" class="form-control" id="uyesoyad" aria-describedby="emailHelp" placeholder="Üye Soydını Giriniz">
              <div class="form-group">
              <label for="cinsiyet">Üye Cinsiyet</label>
              <select class="form-control" id="cinsiyet">
                <option></option>
                <option value="E">Erkek</option>
                <option value"K">Kadın</option>
              </select>
            </div>
              <label for="kategori">Telefon Numarası</label>
              <input type="number" class="form-control" id="telefon" aria-describedby="emailHelp" placeholder="Telefon Numarası">
              <label for="kategori">E-posta Adresi</label>
              <input type="text" class="form-control" id="eposta" aria-describedby="emailHelp" placeholder="Eposta Adresi">

      
  <label for="kategori">Vizyon Tarihi</label>
  <div class="input-group date">
  <input type="text" class="form-control datekontrol" id="uyeliktarihi" placeholder="YYYY-MM-DD">
</div>
    
              
            </div>
          
        
            <button type="submit" id="uyeinsert" data-dismiss="modal" class="btn btn-primary insert">Ekle</button>
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
