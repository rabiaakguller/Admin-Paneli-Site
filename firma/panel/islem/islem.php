<?php
require_once 'baglanti.php';
session_start();

/*iletisim.php*/
if (isset($_POST['iletisimkaydet'])) //içindeki değerin var olup olmadığını konrol eder. iletisim buon name
{
  $kaydet = $baglanti->prepare("UPDATE ayar SET /*ayar ablosuna yukle*/

email=:email, /*1:2*/
telefon=:telefon,
adres=:adres
WHERE ayarid=1"); //ayar id si 1 olanları değişir

  $update = $kaydet ->execute(array(
    'email'=>$_POST['email'],
    'telefon'=>$_POST['telefon'],
    'adres'=>$_POST['adres']  ));

  if ($update)
  {
    Header("Location:..panel/iletisim.php?durum=okey");
  }
  else
  {
    Header("Location:..panel//iletisim.php?durum=no");
  }
}
/*iletisim.php SON*/

/*sosyalmedya.php */

if (isset($_POST['sosyalmedyakaydet']))
{
  $kaydet = $baglanti->prepare("UPDATE ayar SET /*ayar ablosuna yukle*/

facebook=:facebook,
twitter=:twitter,
youtube=:youtube,
instagram=:instagram
WHERE ayarid=1"); //ayar id si 2 olanları değişir

  $update = $kaydet ->execute(array(
    'facebook'=>$_POST['facebook'],
    'twitter'=>$_POST['twitter'],
    'youtube'=>$_POST['youtube'],
    'instagram'=>$_POST['instagram'] ));

  if ($update)
  {
    Header("Location:../sosyalmedya.php?durum=okey");
  }
  else
  {
    Header("Location:../sosyalmedya.php?durum=no");
  }
}
/*sosyalmedya.php SON*/

/*HAKKIMIZDA SAYFASI */

if (isset($_POST['hakkimizdakaydet'])) //içindeki değerin var olup olmadığını konrol eder. hakkimizdakaydet buon name
{
  $kaydet = $baglanti->prepare("UPDATE hakkimizda SET /*ayar ablosuna yukle*/

baslik=:baslik,
aciklama=:aciklama,
misyon=:misyon,
vizyon=:vizyon,
yapilan=:yapilan,
isci=:isci,
suankipro=:suankipro,
sehir=:sehir
WHERE id=1"); //ayar id si 1 olanları değişir

  $update = $kaydet ->execute(array(
    'baslik'=>$_POST['baslik'], //pos dan sonraki baslik ; ayarlar.php niniçindeki inpu nameler-- 2:1
    'aciklama'=>$_POST['aciklama'],
    'misyon'=>$_POST['misyon'],
    'vizyon'=>$_POST['vizyon'],
    'yapilan'=>$_POST['yapilan'],
    'isci'=>$_POST['isci'],
    'suankipro'=>$_POST['suankipro'],
    'sehir'=>$_POST['sehir'] ));

  if ($update) {
    Header("Location:/panel/hakkimizda.php?durum=okey");
  }
  else {
    Header("Location:/panel/hakkimizda.php?durum=no");
  }
}

/*HAKKIMIZDA SAYFASI SON */


/*SLİDER */

/*sliderekle.php*/

if (isset($_POST['sliderkaydet'])) //içindeki değerin var olup olmadığını konrol eder. sliderkaydet buon name
{
  $uploads_dir = '../resimler';
  @$tmp_name = $_FILES['resim'] ["tmp_name"];
  @$name = $_FILES['resim'] ["name"];

  $sayi1 = rand(20000, 30000);
  $sayi2 = rand(20000, 30000);
  $sayi3 = rand(20000, 30000);
  $sayilar = $sayi1 . $sayi2 . $sayi3;
  $resimyolu = $sayilar . $name;
  @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

  $kaydet = $baglanti->prepare("INSERT INTO slider SET /*slider ablosuna yukle*/
                                                                                
    baslik=:baslik,
    aciklama=:aciklama,
    sira=:sira,
    resim=:resim,
    button=:button,
    link=:link ");

  $insert = $kaydet->execute(array(
    'baslik' => $_POST['baslik'], //pos dan sonraki baslik ; ayarlar.php niniçindeki inpu nameler-- 2:1
    'aciklama' => $_POST['aciklama'],
    'sira' => $_POST['sira'],
    'resim' => $resimyolu,
    'button' => $_POST['button'],
    'link' => $_POST['link'],

  ));


  if ($insert) {
    Header("Location:../slider.php?durum=okey");
  } else {
    Header("Location:../slider.php?durum=no");
  }
}
/*sliderekle.php SON*/
/*sliderDUZENLE.php */


if(isset($_POST['sliderduzenle'])) //içindeki değerin var olup olmadığını konrol eder. gonder buon name
{
//EGER KULLANICI RESİM YUKLEMİŞSE
  if($_FILES['resim'] ["size"]>0) {//RESİM VAR
    $uploads_dir = '../resimler';
    @$tmp_name = $_FILES['resim'] ["tmp_name"];
    @$name = $_FILES['resim'] ["name"];

    $sayi1 = rand(20000, 30000);
    $sayi2 = rand(20000, 30000);
    $sayi3 = rand(20000, 30000);
    $sayilar = $sayi1.$sayi2.$sayi3;
    $resimyolu = $sayilar.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

    $kaydet = $baglanti->prepare("UPDATE  slider SET /*ayar ablosuna yukle*/

baslik=:baslik,
aciklama=:aciklama,
sira=:sira,
resim=:resim,
button=:button,
link=:link

WHERE id={$_POST['id']}
"); //ayar id si 0 olanları değişir

    $insert = $kaydet->execute(array(
      'baslik' => $_POST['baslik'], //pos dan sonraki baslik ; ayarlar.php niniçindeki inpu nameler-- 2:1
      'aciklama' => $_POST['aciklama'],
      'sira' => $_POST['sira'],
      'resim' => $resimyolu,
      'button' => $_POST['button'],
      'link' => $_POST['link']
    ));


    if ($insert) {

      $sil=$_POST['resim'];
      unlink("../resimler/$sil");

      Header("Location:../slider.php?durum=okey");
    } else {
      Header("Location:../slider.php?durum=no");
    }

  }

  //KULLANICI YENİ RESİMYUKLEMEMŞSE
  else {

  $duzenle = $baglanti->prepare("UPDATE slider SET /*slier ablosuna yukle*/

baslik=:baslik,
aciklama=:aciklama,
sira=:sira,
button=:button,
link=:link
WHERE id={$_POST['id']}

"); //ayar id si 0 olanları değişir

  $insert = $duzenle->execute(array(
    'baslik' => $_POST['baslik'], //pos dan sonraki baslik ; ayarlar.php niniçindeki inpu nameler-- 2:1
    'aciklama' => $_POST['aciklama'],
    'sira' => $_POST['sira'],
    'button' => $_POST['button'],
    'link' => $_POST['link']
  ));


  if ($insert) {
    Header("Location:../slider.php?durum=okey");
  }
  else {
    Header("Location:../slider.php?durum=no");
  }
}
}


if (isset($_POST['slidersil']))
{


$sil=$_POST['resim'];
unlink("../resimler/$sil");

{

  $sil = $baglanti->prepare('DELETE from slider where id=:id ');
  $sil->execute(array(
    'id' => $_POST['id']
  ));

  if ($sil) {
    Header("Location:../slider.php?durum=okey");
  } else {
    Header("Location:../slider.php?durum=no");
  }
}
}
/*LOGO*/

if (isset($_POST['logokaydet'])) //içindeki değerin var olup olmadığını konrol eder. logokaydet buton name
{
  $uploads_dir = '../resimler/logo';
  @$tmp_name = $_FILES['resim'] ["tmp_name"];
  $dosya_adi   = $_FILES['resim'] ["name"];

  $sayi1 = rand(20000, 30000);
  $sayi2 = rand(20000, 30000);
  $sayi3 = rand(20000, 30000);
  $sayilar = $sayi1.$sayi2.$sayi3;
  $resimyolu = $sayilar.$dosya_adi;
  @move_uploaded_file($tmp_name,"$uploads_dir/$sayilar$dosya_adi");

  $kaydet = $baglanti->prepare("UPDATE ayar SET /*ayar ablosuna yukle*/
baslik=:baslik, /*1:2*/
aciklama=:aciklama,
keyword=:keyword,
ayarlogo=:ayarlogo,
calisma=:calisma
WHERE ayarid=1");

  $update = $kaydet->execute(array(
    'baslik'=>$_POST['baslik'], //pos dan sonraki baslik ; ayarlar.php niniçindeki input nameler-- 2:1
    'aciklama'=>$_POST['aciklama'],
    'keyword'=>$_POST['keyword'],
    'calisma'=>$_POST['calisma'],
    'ayarlogo' => $resimyolu ));


  if ($update) {

    $sil=$_POST['resim'];
    unlink("../resimler/logo/$sil");
    Header("Location:../ayarlar.php?durum=okey");
  } else {
    Header("Location:../ayarlar.php?durum=no");
  }
}


if (isset($_POST['kullanicigiris']))
{
  $ad=htmlspecialchars( $_POST['ad']) ; //zararlı kodları html e çevirir. çalışmalraını önler
  $sifre=htmlspecialchars( $_POST['sifre']);

if($ad && $sifre)
{
  $kullanicisor=$baglanti->prepare("SELECT * from kullanici where kadi=:ad and sifre=:sifre");
  $kullanicisor->execute(array(
    'ad'=>$ad,
    'sifre'=>$sifre));
  $say=$kullanicisor-> rowCount();//1 ya da 0 değerini bastırır

  if($say>0)
  {
    $_SESSION['ad'] = $ad;
    Header("Location:../index.php");
  }
  else
    {
    Header("Location:../login.php?durum=no");
  }
}
}



if (isset($_POST['kullanicikaydet']))
{

  $kaydet = $baglanti->prepare("INSERT INTO kullanici SET /*kullanici ablosuna yukle*/
                                                                                
    adsoyad=:adsoyad,
    kadi=:kadi,
    sifre=:sifre,
    yetki=:yetki");

  $insert = $kaydet->execute(array(
    'adsoyad'=>$_POST['adsoyad'],
    'kadi'=>$_POST['kadi'],
    'sifre'=>$_POST['sifre'],
    'yetki'=>$_POST['yetki']
  ));


  if ($insert) {
    Header("Location:../kullanici.php?durum=okey");
  } else {
    Header("Location:../kullanici.php?durum=no");
  }
}
/*kullanicisil.php SON*/
if (isset($_POST['kullanicisil']))
{


    $sil = $baglanti->prepare('DELETE from kullanici where id=:id ');
    $sil->execute(array(
      'id' => $_POST['id']
    ));

    if ($sil) {
      Header("Location:../kullanici.php?durum=okey");
    } else {
      Header("Location:../kullanici.php?durum=no");
    }

}

?>
