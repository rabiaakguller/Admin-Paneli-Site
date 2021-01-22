<?php
require 'header.php';
$ayar = $baglanti->prepare("SELECT * from ayar where ayarid=:id");
$ayar->execute(array(
  'id' => 1
));
[$ayarcek=$ayar->fetch(PDO::FETCH_ASSOC)];

?>
<!-- Main content -->
<div>
<section class="content">
  <div class="row">

  </div>
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Site Ayarlarınız</h3>
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

    <form action="islem/islem.php" enctype="multipart/form-data" method="POST" role="form">

     <input type="hidden" name="resim" value="<?php echo $ayarcek['ayarlogo']?>">

      <div class="card-body">

        <div class="form-group">
          <label for="exampleInputEmail1">Varolan Resim</label>
          <br>
          <img style="width: 100px; height: 100px" src="resimler/logo/<?php echo $ayarcek['ayarlogo']?>">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Değiştir/Yükle</label>

          <input name="resim" type="file" class="form-control" id="exampleInputEmail1" >
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Başlık</label>
          <input name="baslik" type="text" class="form-control" id="exampleInputEmail1"
                 value="<?php echo $ayarcek['baslik'];?>" placeholder="Lutfen Sitenizin Başlığını Giriniz...">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Açıklama</label>
          <input name="aciklama" type="text" class="form-control" id="exampleInputEmail1"
                 value="<?php echo $ayarcek['aciklama'];?>" placeholder="Lutfen Siteniz için Açıklama Giriniz...">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">KeyWord</label>
          <input name="keyword" type="text" class="form-control" id="exampleInputEmail1"
                 value="<?php echo $ayarcek['keyword'];?>"placeholder="Lutfen Sitenizin Anahtar kelimesini Giriniz...">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Çalışma Saatleri</label>
          <input name="calisma" type="text" class="form-control" id="exampleInputEmail1"
                 value="<?php echo $ayarcek['calisma'];?>"placeholder="Lutfen Çalışma Saatlerinizi Giriniz...">
        </div>

        <button style="float: right" class="btn btn-success" name="logokaydet"> Kaydet</button>

    </form>
<br>
<br>

  </div>
</section>
</div>
</div>
<?php
require_once 'footer.php';
?>
