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
        <h3 class="card-title">Slider Ekleme Sayfası</h3>
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
            <label for="exampleInputEmail1">Resim</label>
            <input name="resim" type="file" class="form-control" id="exampleInputEmail1"
                   value="" placeholder="Lutfen Sitenizin Başlığını Giriniz...">  </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Başlık</label>
            <input name="baslik" type="text" class="form-control" id="exampleInputEmail1"
                   value="" placeholder="Lutfen Sitenizin Başlığını Giriniz...">  </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Açıklama</label>
            <input name="aciklama" type="text" class="form-control" id="exampleInputEmail1"
                   value="" placeholder="Lutfen Siteniz için Açıklama Giriniz...">  </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Link</label>
            <input name="link" type="text" class="form-control" id="exampleInputEmail1"
                   value=""placeholder="Lutfen Link Giriniz...">  </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Buton İsmi</label>
            <input name="button" type="text" class="form-control" id="exampleInputEmail1"
                   value="" placeholder="Lutfen Buton İsmini Giriniz...">  </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Sıra</label>
            <input name="sira" type="text" class="form-control" id="exampleInputEmail1"
                   value="" placeholder="Lutfen Yuklenen resmin kaçıncı sırada olacağını Giriniz...">  </div>

        </div>
        <div class="card-footer">
          <button name="sliderkaydet" type="submit" class="btn btn-primary">Gönder</button>
        </div>
      </form>
    </div>
  </section>
</div>
</div>

<?php
require 'footer.php';
?>
