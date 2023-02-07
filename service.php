 <!-- ======= Our Services Section ======= -->
<?php
$servicsor=$db->prepare("SELECT * FROM servic");
$servicsor->execute(); 
?>
    <section id="services" class="services sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Services</h2>
          <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

        <?php 
           $say=0;
        while($serviccek=$servicsor->fetch(PDO::FETCH_ASSOC)) {$say++?>

          <div class="col-lg-6 col-md-6">
            <div class="service-item position-relative">
             
              <h3><?php echo $serviccek['servic_basliq'] ?></h3>
              <p><?php echo $serviccek['servic_movzu'] ?></p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->
              <?php } ?>

        </div>

      </div>
    </section><!-- End Our Services Section -->