<?php
include_once("../baglanti.php");

$statement = $conn->query("select * from film inner join kategori on kategori.id = film.kategoriid order by film.id asc");



echo ('  <div class="container">

<table id="example" class="table table-hover" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Film Adı</th>
            <th>Kategori</th>
            <th>Süre</th>
            <th>Vizyon Tarihi</th>
            <th>Özet</th>
            <th>Yönetmen</th>
            <th>Kapak Resmi</th>
            <th>İşlemler</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
        <th>Film Adı</th>
        <th>Kategori</th>
        <th>Süre</th>
        <th>Vizyon Tarihi</th>
        <th>Özet</th>
        <th>Yönetmen</th>
        <th>Kapak Resmi</th>
        <th>İşlemler</th>
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
            <td>$320,800</td>
            <td>$320,800</td>
        </tr>
        <tr>
        <td>Tiger Nixon</td>
        <td>System Architect</td>
        <td>Edinburgh</td>
        <td>61</td>
        <td>2011/04/25</td>
        <td>$320,800</td>
        <td>$320,800</td>
        <td>$320,800</td>
        </tr>
        <tr>
        <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
            <td>$320,800</td>
            <td>$320,800</td>
            <td>$320,800</td>
        </tr>
    </tbody>
</table>
</div>
');


echo ('       <h2>Filmleri Düzenle</h2>
<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#filmekle">Yeni Film Ekle</button>
<table id="example" class="table table-hover" cellspacing="0" width="100%">

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
  ');


while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    echo ('     <tr class="class="d-flex">
<td> ' . $row['ad'] . ' </td>
<td> ' . $row['kategori'] . ' </td>
<td> ' . $row['sure'] . ' </td>
<td> ' . $row['vizyontarihi'] . ' </td>
<td ' . $row['ozet'] . ' </td>
<td><button type="button" class="btn btn-danger">Düzenle</button></td>
</tr>
<tr>');
}
echo ('</table>');
