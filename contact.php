<?php 
include 'admin/netting/baglan.php';
$ayarsor=$db->prepare("SELECT * FROM ayar where ayar_id=:id");
$ayarsor->execute(array(
  'id' => 1
  ));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);



 ?>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>

                  <a href="<?php echo $ayarcek['ayar_maps'] ?>"><p><?php echo $ayarcek['ayar_maps'] ?></p></a>
                  
                </div>
              </div><!-- End Info Item -->
              
              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
               <p><?php echo $ayarcek['ayar_mail'] ?></p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                
                  <p><?php echo $ayarcek['ayar_tel'] ?></p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h4>Open Hours:</h4>
                  <p><?php echo $ayarcek['ayar_time'] ?></p>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class="col-lg-8">
            <form action="admin/netting/islem.php" method="Post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="mektub_ad" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group ">
                  <input type="email" class="form-control" name="mektub_email" id="email" placeholder="Your Email" required>
                </div>
              
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="mektub_movzu" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="mektub_mesaj" rows="7" placeholder="Message" required></textarea>
              </div>
              <div class="form-group">
                  <label></label>
                </div>
             
              <div class="text-center"> 
                <button type="submit" style="width: 30%; background-color: #00b6a1; color:white;" class="btn btn-primary" name="sendmessage">Send Message</button>
              </div>
              </div>
               
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->