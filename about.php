 <?php 
include 'admin/netting/baglan.php';
$haqqimizdasor=$db->prepare("SELECT * FROM haqqimizda where haqqimizda_id=:id");
$haqqimizdasor->execute(array(
  'id' =>2
  ));
$haqqimizdacek=$haqqimizdasor->fetch(PDO::FETCH_ASSOC);


  ?>

 <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p><?php echo $haqqimizdacek['haqqimizda_basliq'] ?></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-12">
            <img src="<?php echo $haqqimizdacek['haqqimizda_logo'] ?>" class="img-fluid rounded-4 mb-4" alt="">
            <p><?php echo $haqqimizdacek['haqqimizda_muvzu']  ?></p>
          </div>
          
      </div>
    </section><!-- End About Us Section -->
        </div>
