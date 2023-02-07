 <!-- ======= Clients Section ======= -->
 <?php 
$partsor=$db->prepare("SELECT * FROM partnyorlar");
$partsor->execute(); 
 ?>
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-out">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
          <?php                     
                  
            while($partcek=$partsor->fetch(PDO::FETCH_ASSOC)) {?>

            <div class="swiper-slide"><img src="<?php echo $partcek['part_file'] ?>" class="img-fluid" alt=""></div>
            <?php } ?>
        </div>

      </div> 
    </section><!-- End Clients Section -->