<?php
require 'header.php';

//require_once 'header.php';

$hakkimizda= $baglanti->prepare('SELECT * from hakkimizda where id=id');
$hakkimizda->execute(array(
        'id' =>1
));
[$hakkimizdacek=$hakkimizda->fetch(PDO::FETCH_ASSOC)];

?>

   <section id="main-container" class="main-container">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <h3 class="column-title"><?php echo $hakkimizdacek['baslik']?></h3>
               <p><?php echo $hakkimizdacek['aciklama']?></p>

               <blockquote><p><?php echo $hakkimizdacek['misyon']?></p></blockquote>
               <blockquote><p><?php echo $hakkimizdacek['vizyon']?></p></blockquote>
            </div><!-- Col end -->


         </div><!-- Content row end -->

      </div><!-- Container end -->
   </section><!-- Main container end -->

   <section id="facts"  class="facts-area dark-bg">
      <div class="container">
         <div class="row">
            <div class="facts-wrapper">
               <div class="col-sm-3 ts-facts">
                  <div class="ts-facts-img" >
                     <img src="images/icon-image/fact1.png" alt="" />
                  </div>
                  <div  class="ts-facts-content">
                     <h2  class="ts-facts-num"><class="counterUp" ><?php echo $hakkimizdacek['yapilan']?></span></h2>
                     <h3 style="color: #7c60e0" class="ts-facts-title">Toplam proje</h3>
                  </div>
               </div><!-- Col end -->

               <div class="col-sm-3 ts-facts">
                  <div class="ts-facts-img">
                     <img  src="images/icon-image/fact2.png" alt="" />
                  </div>
                  <div class="ts-facts-content">
                     <h2 class="ts-facts-num"><span class="counterUp"><?php echo $hakkimizdacek['isci']?></span></h2>
                     <h3 style="color: #7c60e0" class="ts-facts-title">Çalışanlarımız</h3>
                  </div>
               </div><!-- Col end -->

               <div class="col-sm-3 ts-facts">
                  <div class="ts-facts-img">
                     <img src="images/icon-image/fact3.png" alt="" />
                  </div>
                  <div class="ts-facts-content">
                     <h2 class="ts-facts-num"><span class="counterUp"><?php echo $hakkimizdacek['suankipro']?></span></h2>
                     <h3 style="color: #7c60e0" class="ts-facts-title">Şuanki Projeler</h3>
                  </div>
               </div><!-- Col end -->

               <div  class="col-sm-3 ts-facts">
                  <div  class="ts-facts-img">
                     <img  src="images/icon-image/fact4.png"  alt="" />
                  </div>
                  <div " class="ts-facts-content">
                     <h2 class="ts-facts-num"><span class="counterUp"><?php echo $hakkimizdacek['sehir']?></span></h2>
                     <h3 style="color: #7c60e0" class="ts-facts-title">Şehirler</h3>
                  </div>
               </div><!-- Col end -->

            </div> <!-- Facts end -->
         </div><!--/ Content row end -->
      </div><!--/ Container end -->
   </section><!-- Facts end -->



<?php
require_once 'footer.php';
?>