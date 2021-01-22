<?php
require 'header.php';

?>
<!-- Main content -->
<div>
  <section class="content">
    <div class="row">

    </div>
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Kullanıcı Ekleme Sayfası</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <?php
      if ($_GET['durum'] == "okey")
      {?>
        <h4 style="color: green; margin-left:10px " >İşlem Başarılı</h4>
        <?php
      }
      elseif ($_GET['durum'] == "no")
      {?>
        <h4 style="color: red; margin-left:10px">İşlem Başarısız</h4>
        <?php
      }
      ?>


      <form action="islem/islem.php" method="POST" enctype="multipart/form-data" role="form">
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Kullanıcı Ad Soyad</label>
            <input name="adsoyad" type="text" class="form-control" id="exampleInputEmail1"
                   value="" placeholder="Kullanıcı Ad Soyad Giriniz...">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Kullanıcı Adı</label>
            <input name="kadi" type="text" class="form-control" id="exampleInputEmail1"
                   value=""placeholder="Lutfen Kullanıcı Adı Giriniz...">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Yetki</label>
            <input name="yetki" type="text" class="form-control" id="exampleInputEmail1"
                   value="" placeholder="Lutfen Yetki Giriniz...">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Sifre</label>
            <input name="sifre" type="text" class="form-control" id="exampleInputEmail1"
                   value="" placeholder="Lutfen Şifrenizi Giriniz...">
          </div>
        </div>
        <div class="card-footer">
          <button name="kullanicikaydet" type="submit" class="btn btn-primary">Gönder</button>
        </div>
      </form>
    </div>
  </section>
</div>
</div>

<?php
require 'footer.php';
?>
