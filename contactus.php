<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body>
  <!-- Header Start -->
  <?php include 'includes/navbar.php'; ?>
  <!-- Header End -->

  <!-- Contact Us Start -->
  <section class="contact-us mt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-center mb-5">Bize Ulaşın</h2>
          <form>
            <div class="form-group">
              <label for="name"><i class="fa-solid fa-user"></i></i> Adınız Soyadınız</label>
              <input type="text" class="form-control" id="name" placeholder="Adınız Soyadınız" required>
            </div>
            <div class="form-group">
              <label for="email"> <i class="fa-regular fa-envelope"></i> Mail adresiniz</label>
              <input type="email" class="form-control" id="email" placeholder="Mail adresiniz " required>
            </div>
            <div class="form-group">
              <label for="phone"> <i class="fa-solid fa-phone"></i> Telefon Numaranız</label>
              <input type="tel" class="form-control" id="phone" placeholder="Telefon Numaranız" required>
            </div>
            <div class="form-group">
              <label for="address"><i class="fa-solid fa-location-dot"></i> Adresiniz</label>
              <input type="text" class="form-control" id="address" placeholder="Adresiniz" required>
            </div>
            <div class="form-group">
              <label for="message"> <i class="fa-solid fa-message"></i> Mesajınız</label>
              <textarea class="form-control" id="message" rows="5" placeholder="Mesajınız" required></textarea>
            </div>
            <button type="submit" class="btn btn-block btn-primary">Gönder</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Us End -->


  <!-- Footer Start-->
  <?php include 'includes/footer.php'; ?>
</body>

</html>