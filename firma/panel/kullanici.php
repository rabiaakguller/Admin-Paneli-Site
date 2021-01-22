<?php
require 'header.php';
?>

<section class="content">
  <div class="row">
    <h1  class="m-0 text-dark">Kullanıcı ayarları</h1>

  </div>
</section>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Kullanıcılar</h3>
        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
            <div class="input-group-append">
              <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
          <tr>
            <th>Ad Soyad</th>
            <th>Kullanıcı Adı</th>
            <th>Yetki</th>
            <th></th>
            <th style=" float: right"><a href="kullaniciekle.php"><button style="width: 150px"
            class="btn btn-outline-primary">KULLANICI EKLE</button></a></th>
          </tr>
          </thead>
          <tbody>
          <?php

          $kullanici = $baglanti->prepare('SELECT * from kullanici  ');
          $kullanici->execute();
          while ($kullanicicek=$kullanici->fetch(PDO::FETCH_ASSOC)){

            ?>
            <tr>

              <td><?php echo $kullanicicek['adsoyad']?></td>
              <td><?php echo $kullanicicek['kadi']?></td>
              <td><?php echo $kullanicicek['yetki']?></td>
              <td></td>
              <td style="float: right">
                <form action="islem/islem.php" method="POST">
                  <input type="hidden" name="id" value="<?php echo $kullanicicek['id']?>">
                  <button name="kullanicisil" class="btn btn-danger">Sil</button>
                </form>
              </td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
<?php
include 'footer.php';
?>
