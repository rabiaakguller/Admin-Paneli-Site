<?php
require 'header.php';

$ayar = $baglanti->prepare('SELECT * from ayar where ayarid=?');
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
        <h3 class="card-title">İletişim Ayarlarınız</h3>
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
            <label>E-mail</label>
            <input  name="email" type="email" class="form-control" id="exampleInputEmail1"
                    value="<?php echo $ayarcek['email'];?>"placeholder="Lutfen E-Mail Adresinizi Giriniz...">
          </div>

          <div class="form-group">
            <label>Telefon</label>
            <input name="telefon" type="text" class="form-control" id="exampleInputEmail1"
                   value="<?php echo $ayarcek['telefon'];?>" placeholder="Lutfen Telefon Bilginizi Giriniz...">
          </div>

          <div class="form-group">
            <label>Adres</label>
            <input name="adres" type="text" class="form-control" id="exampleInputEmail1"
                   value="<?php echo $ayarcek['adres'];?>" placeholder="Lutfen Adres bilginizi Giriniz...">
          </div>


        </div>
        <div class="card-footer">
          <button name="iletisimkaydet" type="submit" class="btn btn-primary">Gönder</button>
        </div>
      </form>
    </div>
  </section>
</div>
</div>

<?php
require 'footer.php';
?>
