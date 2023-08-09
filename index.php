<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>


<body>
    <?php include 'includes/navbar.php'; ?>


    <section class="home" id="home">

        <div class="container">

            <div class="row min-vh-100 align-items-center">
                <div class="content text-center text-md-left">
                    <h3>Saglam kapılar huzurlu evler</h3>
                    <p>Kaliteli malzemelerimiz, modern tasarımlarımız ve profesyonel ekibimizle, her zaman en iyi
                        hizmeti sunmak için buradayız. Siz de hayalinizdeki kapıyı bize teslim edin, evinize estetik ve
                        fonksiyonelliği bir arada sunalım.</p>
                    <a href="contactus.php" class="link-btn">Bize ulaşın</a>
                </div>
            </div>

        </div>

    </section>


    <!-- 2. kısım -->


    <section class="about" id="about">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-6 image">
                    <img src="images/about-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
                </div>

                <div class="col-md-6 content">
                    <span>Hakkımızda</span>
                    <h3>Evinizin kapısını bizimle açın, farkı hissedin!</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam cupiditate vero in provident
                        ducimus. Totam quas labore mollitia cum nisi, sint, expedita rem error ipsa, nesciunt ab
                        provident. Aperiam, officiis!</p>
                    <a href="contactus.php" class="link-btn">make appointment</a>
                </div>

            </div>

        </div>

    </section>


    <!-- Üçüncü Kısım -->

    <section class="process">

        <h1 class="heading">work process</h1>

        <div class="box-container container">

            <div class="box">
                <img src="images/process-1-min-x.png" alt="">
                <h3>Cosmetic Dentistry</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
            </div>

            <div class="box">
                <img src="images/process-2-min-x.png" alt="">
                <h3>Pediatric Dentistry</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
            </div>

            <div class="box">
                <img src="images/process-3-min-x.png" alt="">
                <h3>Dental Implants</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
            </div>

        </div>

    </section>


    <!-- Form -->

    <section class="contact" id="contact">

        <h1 class="heading">make appointment</h1>

        <form>

            <span>your name :</span>
            <input type="text" name="name" placeholder="enter your name" class="box" required>
            <span>your email :</span>
            <input type="email" name="email" placeholder="enter your email" class="box" required>
            <span>your number :</span>
            <input type="number" name="number" placeholder="enter your number" class="box" required>
            <span>appointment date :</span>
            <input type="datetime-local" name="date" class="box" required>
            <input type="submit" value="make appointment" name="submit" class="link-btn">
        </form>

    </section>


    <?php include 'includes/footer.php'; ?>

</body>

</html>