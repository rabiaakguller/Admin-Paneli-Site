<?php

$slider = $baglanti->prepare('SELECT * from slider  ');
$slider->execute();
while ($slidercek=$slider->fetch(PDO::FETCH_ASSOC)) {
}
?>

<div id="main-slide" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators visible-lg visible-md">
        <li data-target="#main-slide" data-slide-to="0" class="active"></li>
        <li data-target="#main-slide" data-slide-to="1"></li>
        <li data-target="#main-slide" data-slide-to="2"></li>
    </ol>
    <!--/ Indicators end-->

    <!-- Carousel inner -->
    <div class="carousel-inner">
        <!-- Sliderın ilk görseline active özelliği verilercek. Diğerlerien active olmaycaka-->
        <?php

        $slider = $baglanti->prepare("SELECT * from slider order by sira limit 1");
        $slider->execute();
        while ($slidercek=$slider->fetch(PDO::FETCH_ASSOC)) { ?>

        <div class="item active" style="background-image:url(Panel/resimler/<?php echo $slidercek['resim']?>)">
            <div class="slider-content">
                <div class="col-md-12 text-center">
                    <h2 class="slide-title animated4"><?php echo $slidercek['aciklama']?></h2>
                    <h3 class="slide-sub-title animated5"><?php echo $slidercek['baslik']?></h3>
                    <p>

                        <a href="<?php echo $slidercek['link']?> " target="_blank" "
                        class="slider btn btn-primary border"><?php echo $slidercek['button']?></a>
                    </p>
                </div>
            </div>
        </div>
        <!--/ Carousel item 1 end -->
        <?php } ?>
        <?php

            $slider = $baglanti->prepare('SELECT * from slider order by sira limit 1,8');//1.si haric _,a ya akdar al
            $slider->execute();
            while ($slidercek=$slider->fetch(PDO::FETCH_ASSOC)) { ?>

            <div class="item" style="background-image:url(Panel/resimler/<?php echo $slidercek['resim']?>)">
                <div class="slider-content">
                    <div class="col-md-12 text-center">
                        <h2 class="slide-title animated4"><?php echo $slidercek['baslik']?></h2>
                        <h3 class="slide-sub-title animated5"><?php echo $slidercek['aciklama']?></h3>
                        <p>
                            <a href="" class="slider btn btn-primary"></a>
                            <a  href="<?php echo $slidercek['link']?>" target="_blank"
                                class="slider btn btn-primary border" ><?php echo $slidercek['button']?></a>
                        </p>
                    </div>
                </div>
            </div>
            <!--/ Carousel item 1 end -->
<?php } ?>
    </div><!-- Carousel inner end-->

    <!-- Controllers -->
    <a class="left carousel-control" href="#main-slide" data-slide="prev">
        <span><i class="fa fa-angle-left"></i></span>
    </a>
    <a class="right carousel-control" href="#main-slide" data-slide="next">
        <span><i class="fa fa-angle-right"></i></span>
    </a>
</div>