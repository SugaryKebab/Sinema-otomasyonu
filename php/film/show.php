<?php
include_once("../baglanti.php");

$statement = $conn->query("select * from film inner join kategori on kategori.id = film.kategoriid order by film.id asc");



echo('  <div class="container">

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
');


echo('       <h2>Filmleri Düzenle</h2>
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
echo('     <tr class="class="d-flex">
<td> '.$row['ad'].' </td>
<td> '.$row['kategori'].' </td>
<td> '.$row['sure'].' </td>
<td> '.$row['vizyontarihi'].' </td>
<td '.$row['ozet'].' </td>
<td><button type="button" class="btn btn-danger">Düzenle</button></td>
</tr>
<tr>');





}
echo('</table>');