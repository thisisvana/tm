<?php include('partials/header.php'); ?>
<?php include('partials/navbar.php'); ?>
  <header>
    <div class="page-header">
      <div class="banner row expanded">
        <img src="img/dj.jpg" alt="dj music knobs">
        <h1>Trustworthy music</h1>
        <p>Don't miss the deal of the month</p>
        <a href="packages.php"><button class="btn-banner" name="button">Packages</button></a>

      </div>
    </div>
  </header>
  <section>
    <div class="mission">
      <div class="row">
        <div class="about">
          <h1>Our Mission</h1>
          <hr class="head-hr">
          <p>Trustworthy Music provides professional DJ services to you at a reasonable price.
            We are based in Siren, Wisconsin, and Farmington, Minnesota, allowing us to serve
            the entire northwestern Wisconsin region along with the Twin Cities and surrounding areas.
            Trustworthy Music is co-owned and operated by Joe Cremin and Steve Macke, and each have many
            years of training and experience to provide you with the best service possible. We use high quality
            equipment to ensure there are no technical difficulties during your event.
            We have many years of experience in the DJ industry, and are glad to tailor our performance to your event.
            Whether that means playing certain styles of music for your wedding or playing only edited and appropriate
            songs for your school dance, we are happy to accommodate your needs! We pride ourselves in providing a great
            night of entertainment for you, as well as not breaking your budget. We keep our prices very affordable,
            but never sacrifice quality. Many companies charge over twice as much as we do, but we work hard to be the best value you will find.
            With a HUGE selection of songs to choose from we have something for everyone.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="events">
      <div class="row">
        <div class="services">
          <ul class="services-icons">
            <li><img src="img/couple.svg" alt="married couple icon"><br><h4>Wedding</h4></li>
            <li><img src="img/school.svg" alt="school book icon"><br><h4>School Dance</h4></li>
            <li><img src="img/graduate.svg" alt="graduate icon"><br><h4>Graduation</h4></li>
            <li><img src="img/business.svg" alt="business man icon"><br><h4>Corporate Events</h4></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <div class="wedding-cta">
    <div class="row">
      <div class="wedding-para large-10 column">
        <h3>Because a wedding is one of the largest events to plan, we have a dedicated wedding page to help you.</h3>
      </div>
      <div class="wedding-btn large-2 column">
        <a href="weddings.php"><button class="btn" name="button">See Our wedding Page</button></a>
      </div>
    </div>
  </div>
  <section>
    <div class="contact-form">
      <div class="row">
        <div class="c-form">
          <form class="form-c" action="#" method="post">
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="tel" name="phone" placeholder="Phone Number">
            <textarea name="message" placeholder="Message"></textarea>
            <button class="btn-form" type="submit" name="submit">Send</button>
          </form>

        </div>

      </div>

    </div>
  </section>

<?php include('partials/footer.php'); ?>
