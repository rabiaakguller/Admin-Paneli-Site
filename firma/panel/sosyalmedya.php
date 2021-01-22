<?php
require 'header.php';

$ayar = $baglanti->prepare('SELECT*FROM ayar where ayarid=?');
$ayar->execute(array(2));
[$ayarcek=$ayar->fetch(PDO::FETCH_ASSOC)];

?>
<!-- Main content -->
<div>
  <section class="content">
    <div class="row">

    </div>
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Sosyal Medya Ayarlarınız</h3>
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

      <form action="islem/islem.php" method="POST" role="form">
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Facebook</label>
            <input name="facebook" type="text" class="form-control" id="exampleInputEmail1"
                   value="<?php echo $ayarcek['facebook'];?>" placeholder="Lutfen Facebook Bilgilerini Giriniz...">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Twitter</label>
            <input name="twitter" type="text" class="form-control" id="exampleInputEmail1"
                   value="<?php echo $ayarcek['twitter'];?>" placeholder="Lutfen Twitter Bilgilerini Giriniz...">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Youtube</label>
            <input name="youtube" type="text" class="form-control" id="exampleInputEmail1"
                   value="<?php echo $ayarcek['youtube'];?>" placeholder="Lutfen Youtube Bilgilerini Giriniz...">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">İnstagram</label>
            <input name="instagram" type="text" class="form-control" id="exampleInputEmail1"
                   value="<?php echo $ayarcek['instagram'];?>" placeholder="Lutfen İnstagram Bilgilerini Giriniz...">
          </div>

        </div>
        <div class="card-footer">
          <button name="sosyalmedyakaydet" type="submit" class="btn btn-primary">Gönder</button>
        </div>
      </form>
    </div>
  </section>
</div>
</div>

<?php
require 'footer.php';
?>
