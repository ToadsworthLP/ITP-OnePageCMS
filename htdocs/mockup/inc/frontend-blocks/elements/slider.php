<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <!-- Delete this ordered list if no indicators needed -->
  <ol class="carousel-indicators">
    <?php
        $firstIndicator = true;
        for($i = 0; $i < 3; $i++){
            if($firstIndicator){
                ?> <li data-target="#carouselExampleCaptions" data-slide-to="<?php echo $i; ?>" class="active"></li> <?php
                $firstIndicator = false;
            }else{
                ?> <li data-target="#carouselExampleCaptions" data-slide-to="<?php echo $i; ?>"></li> <?php
            }
        }
    ?>
  </ol>
  <div class="carousel-inner">
    <?php 
        $firstImage = true;
        for($i = 0; $i < 3; $i++){
            if($firstImage){
                ?> <div class="carousel-item active"> <?php
                $firstImage = false;
            }else{
                ?> <div class="carousel-item"> <?php
            }
            include 'htdocs/mockup/inc/frontend-blocks/elements/slider-img.php'; ?>
            </div>
            <?php
        }
    ?>
  </div>
  <!-- Delete these two links if no arrwos are needed -->
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>