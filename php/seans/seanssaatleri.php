<?php


require_once("../baglanti.php");



$islem = $_POST['islem'];


if ($islem == 1) {




  yazdir($conn);
} else if ($islem == 2) {
  $id = $_POST['id'];
  try {
    require_once("../baglanti.php");
    $conn->exec('DELETE FROM `seanssaatleri` WHERE `seanssaatleri`.`id`= ' . $id);

    mesaj('silindi');
  } catch (PDOException $e) {
    mesaj('silinemedi');
  }


  yazdir($conn);
} else if ($islem == 3) {


  $seansid = $_POST['seansid'];
  
  $seanssaati = $_POST['seanssaati'];
  $bitis = $_POST['bitis'];


  try {
    require_once("../baglanti.php");
    $conn->exec("INSERT INTO `seanssaatleri` ( `saat`, `seansid`, `filmbitis`) VALUES ('$seanssaati', '$seansid', '$bitis');");
    mesaj('eklendi');
  } catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
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

  $statement = $conn->query("select * from seans inner JOIN film on film.filmid = seans.filmid inner JOIN seanssaatleri on seanssaatleri.seansid = seans.id ");

  echo ('<div> <h2>Seansları Düzenle</h2>
   <button type="button" id="ekleseans" class="btn btn-primary float-right" data-toggle="modal" data-target="#insertkategori">Seans Ekle</button></div> ');

  echo (' 
    
    <div class="container tablolar">
<table id="example" class="table table-hover" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Seans Adı</th>
            <th>Seans Film Adı</th>
            <th>Seans Başlangıç Günü</th>
            <th>Seans Bitiş Günü</th>
            <th>Seans Film Başlangıç Saati</th>
            <th>Seans Film Bitiş Saati </th>
            <th>İşlemler</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
        <th>Seans Adı</th>
        <th>Seans Film Adı</th>
        <th>Seans Başlangıç Günü</th>
        <th>Seans Bitiş Günü</th>
        <th>Seans Film Başlangıç Saati</th>
        <th>Seans Film Bitiş Saati </th>
        <th>İşlemler</th>
        </tr>
    </tfoot>
    <tbody>
  
');

  while ($row = $statement->fetch(PDO::FETCH_NUM)) {

    echo ('    <tr>   
        <td class="seansadi" >' . $row[1] . '</td>
        <td class="filmadi" >' . $row[10] . '</td>
        <td class="baslangicgunu" >' . $row[3] . '</td>
        <td class="bitisgunu" >' . $row[4] . '</td>
        <td class="filmsaat" >' . $row[18] . '</td>
        <td class="filmbitis" >' . $row[20] . '</td>

        <td><button  type="button" id="seanssaatleriupdate"  data-toggle="modal" data-target="#updatekategori" value="' . $row[17] . ','.  $row[13] . ','.  $row[0] .'" class="btn btn-warning update">Güncelle</button>
        <button type="button" id="deleteseansaatleri" value="' . $row[0] . '" class="btn btn-danger delete">Sil</buttonbutton> </td>

 





    </tr>
    ');
  }


  echo ('</tbody>
</table>
</div>');

  $statement = $conn->query("select * from seans");

  $seans = array();
  $seansid = array();
  $salonid = array();
  while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

    $seans[] = $row['seansadi'];
    $seansid[] = $row['id'];
    $salonid[] = $row['salonid'];
  }





  modal($seans, $seansid,    $salonid);
}



function modal(array $kategori, array $kategoriid, array   $salonid)
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
          <label for="kategori">Seans Adı </label>
   
            <select id="seansselect" class="form-control selectpicker" data-live-search="true">
            ');


  echo (" <option> </option>");


  for ($i = 0; $i < count($kategoriid); ++$i) {

    echo ('
      
            <option value="' . $kategoriid[$i] . ',' . $salonid[$i] . '">' . $kategori[$i] . '</option>
      
       ');
  }


  echo ('   </select>
  
    ');






  echo ('
   

  <div id="seanssatleri" style="display: none;">
  <label for="exampleFormControlSelect2">Dolu olan saaatler</label>
  <select multiple class="form-control" id="secilmemesigerekensaatler">
   <div id="ekle">
   
   </div>  


  </select>
 
  
  <label for="kategori">Seans Saati</label>
  <input type="text" class="form-control"  id="seanssaati" aria-describedby="emailHelp" placeholder="SS:DD">


  </div>
  


          </div>
  
  
  
          
  
  
        
      
          <button type="submit" id="seanssaatinsert"  class="btn btn-primary insert">Ekle</button>
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

            ');





  echo ('
   

  
  <label for="exampleFormControlSelect2">Dolu olan saaatler</label>
  <select multiple class="form-control" id="updatesecilmemesigerekensaatler">
   <div id="ekle">
   
   </div>  


  </select>
 
  
  <label for="kategori">Seans Saati</label>
  <input type="text" class="form-control"  id="updateseanssaati" aria-describedby="emailHelp" placeholder="SS:DD">



  <input type="hidden" class="form-control"  id="updateseansid" >

  <input type="hidden" class="form-control"  id="updatefilmsuresi" >


          </div>
  
  
  
          
  
  
        
      
          <button type="submit" id="seanssaatinsert"  class="btn btn-primary insert">Ekle</button>
        </form>
      </div>
  
    </div>
  </div>
  </div>');
}
