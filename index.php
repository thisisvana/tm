<?php include('partials/header.php'); ?>
<?php include('partials/navbar.php'); ?>
  <header>
    <div class="page-header">
      <div class="banner row expanded">
        <!-- <img src="img/bluekids.jpg" alt="kids"> -->


        <img src="img/lilmonster.png" class="animated rollIn banner-heading win-monster">
        <h1>The most played <br> game of the year</h1>
        <a href="monstars.php"><button class="btn-banner" name="button">Meet the Monstars</button></a>

      </div>

    </div>
  </header>
  <section>
    <div class="mission">
      <div class="row">
        <div class="about">
          <h1>Available for all devices</h1>
          <hr class="head-hr">

            <img src="img/devices.png"  alt="monster image">
            <!-- <img src="img/monstertab.png" class="animated rollIn roll monster"  alt="monster image"> -->

            <p class="win-cta">It's a game for everyone. It's more than a game. It's a community of fun lovers. <br>Start collecting your monstars today and play to win the limited edition monstars tshirt. </p>
        </div>
      </div>
    </div>
  </section>



  <div class="cta row">
    <div class="cta-div">
      <h3>Because fun is all we need!</h3>

      <div class="cta-btn large-6 column">
      <a href="#"><h1>Download Here</h1></a>
        <img src="img/appstore.png" alt="app">
        <img src="img/google.png" alt="google">
      </div>
      <div class="large-6 column">

        <img class="animated infinite bounce monster" src="img/kumba.png" alt="image">
      </div>
    </div>
  </div>
  <section>
    <div class="events">
      <div class="row">
        <div class="services">
          <ul class="services-icons">
            <li><div class="fun-fact">
                <span class="fact-icon"><i class="fa fa-users"></i></span>
                <h3 class="fact-count"><span class="fact-counter" data-from="0" data-to="46799"></span></h3>
                <p class="fact-name">Monstar <br>Community</p>
            </div></li>
            <li><div class="fun-fact">
                <span class="fact-icon"><i class="fa fa-comments-o"></i></span>
                <h3 class="fact-count"><span class="fact-counter" data-from="0" data-to="5000"></span></h3>
                <p class="fact-name">Share the <br>good news</p>
            </div></li>
            <li><div class="fun-fact">
                <span class="fact-icon"><i class="fa fa-thumbs-o-up"></i></span>
                <h3 class="fact-count"><span class="fact-counter" data-from="0" data-to="110"></span></h3>
                <p class="fact-name">Give us a <br>thumbup</p>
            </div></li>

          </ul>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="contact-form">
      <div class="row">
        <div class="c-form">
          <h1>Sign up for our newsletter and be the first to know about new monstars.</h1>
          <form class="form-c" action="#" method="post">
            <!-- <input type="text" name="name" placeholder="Name" required> -->
            <input type="email" name="email" placeholder="Email" required>
            <!-- <input type="tel" name="phone" placeholder="Phone Number"> -->
            <!-- <textarea name="message" placeholder="Message"></textarea> -->
            <button class="btn-form" type="submit" name="submit">Submit</button>
          </form>

        </div>

      </div>

    </div>
  </section>

<?php include('partials/footer.php'); ?>
