<?php
require 'header.php';

$hakkimizda= $baglanti->prepare('SELECT * from hakkimizda where id=:id');
$hakkimizda->execute(array(
  'id' => 1
));
[$hakkimizdacek=$hakkimizda->fetch(PDO::FETCH_ASSOC)];

?>
<!-- Main content -->
<div>
  <section class="content">
    <div class="row">
    </div>
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Hakkımızda Ayarlarınız</h3>
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
            <label for="exampleInputEmail1">Başlık</label>
            <input name="baslik" type="text" class="form-control" id="exampleInputEmail1"
                   value="<?php echo $hakkimizdacek['baslik'];?>" placeholder="Lutfen Sitenizin Başlığını Giriniz...">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Açıklama</label>
            <input name="aciklama" type="text" class="form-control" id="exampleInputEmail1"
                   value="<?php echo $hakkimizdacek['aciklama'];?>" placeholder="Lutfen Siteniz için Açıklama Giriniz...">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Misyon</label>
            <input name="misyon" type="text" class="form-control" id="exampleInputEmail1"
                   value="<?php echo $hakkimizdacek['misyon'];?>"placeholder="Lutfen Sitenizin Anahtar kelimesini Giriniz...">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Vizyon</label>
            <input name="vizyon" type="text" class="form-control" id="exampleInputEmail1"
                   value="<?php echo $hakkimizdacek['vizyon'];?>" placeholder="Lutfen Sitenizin Başlığını Giriniz...">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Yapılan Projeler</label>
            <input name="yapilan" type="text" class="form-control" id="exampleInputEmail1"
                   value="<?php echo $hakkimizdacek['yapilan'];?>" placeholder="Lutfen Sitenizin Başlığını Giriniz...">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">İşçiler</label>
            <input name="isci" type="text" class="form-control" id="exampleInputEmail1"
                   value="<?php echo $hakkimizdacek['isci'];?>" placeholder="Lutfen Sitenizin Başlığını Giriniz...">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Şuanki Projeler </label>
            <input name="suankipro" type="text" class="form-control" id="exampleInputEmail1"
                   value="<?php echo $hakkimizdacek['suankipro'];?>" placeholder="Lutfen Sitenizin Başlığını Giriniz...">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Şehirler</label>
            <input name="sehir" type="text" class="form-control" id="exampleInputEmail1"
                   value="<?php echo $hakkimizdacek['sehir'];?>" placeholder="Lutfen Sitenizin Başlığını Giriniz...">
          </div>


        </div>
        <div class="card-footer">
          <button name="hakkimizdakaydet" type="submit" class="btn btn-primary">Gönder</button>
        </div>
      </form>
    </div>
  </section>
</div>
</div>

<?php
require 'footer.php';
?>
