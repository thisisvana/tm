<?php include('partials/header.php'); ?>
<?php include('partials/navbar.php'); ?>
<section>
  <div class="inner-hero">
    <div class="row expanded">
      <div class="inner-banner">
        <img src="img/banner.jpg" alt="wedding dj">
      </div>
    </div>
  </div>
</section>
<div class="page-title row">
  <h1>Bookings</h1>
  <hr class="head-hr">
<!-- <div class="expanded row">
  <div class="row inside-main-hero">
    <h1>bookings</h1> -->
    <hr>
  <!-- </div> -->
</div>
<section class="row small-collapse">
  <form class="booking-form" action="#" method="post">
    <div class="expanded row">
      <div  class="small-12 medium-6 column">
        <input type="text" name="b-fname" placeholder="First Name">
      </div>
      <div  class="small-12 medium-6 column">
        <input type="text" name="b-lname" placeholder="Last Name">
      </div>
    </div>
    <div class="expanded row">
      <div class="small-12 column">
        <input type="email" name="b-email" placeholder="Email">
        <input type="email" name="b-event" placeholder="Event Location">
    </div>
    </div>
    <div class="expanded row">
      <div class="small-12 medium-4 column">
        <p>Event Type</p>
        <select name="b-type" id="b-type">
          <option value="wedding">wedding</option>
          <option value="church-event">church event</option>
          <option value="corporate-event">corporate event</option>
          <option value="private-party">private party</option>
          <option value="prom">prom</option>
          <option value="home-coming">home coming</option>
          <option value="bar-mitzvah">bar mitzvah</option>
        </select>
      </div>
      <div class="small-12 medium-4 column">
        <p>Services Required</p>
        <label for="b-dj"><input type="checkbox" name="b-dj" id="b-dj" value="dj">dj</label><br>
        <label for="b-uplighting"><input type="checkbox" name="b-uplighting" id="b-uplighting" value="uplighting">uplighting</label>
      </div>
      <div class="small-12 medium-4 column">
        <p>Wedding Package <em>(wedding events only)</em></p>
        <label for="b-reception"><input type="radio" name="b-reception" id="b-reception" value="reception">reception package</label><br>
        <label for="b-uplighting"><input type="radio" name="b-ceremony" id="b-ceremony" value="ceremony">ceremony package</label><br>
        <label for="b-uplighting"><input type="radio" name="b-premium" id="b-premium" value="premium">premium package</label>
      </div>
    </div>
    <div class="expanded row">
      <div class="small-12 medium-4 column">
        <p>event date</p>
        <input type="date" name="b-date" id="b-date" placeholder="Event Date">
      </div>
      <div class="small-12 medium-4 column">
        <p>start time</p>
        <input type="time" name="b-start" id="b-start" placeholder="Event Start">
      </div>
      <div class="small-12 medium-4 column">
        <p>end time</p>
        <input type="time" name="b-end" id="b-end" placeholder="Event End">
      </div>
    </div>
    <div class="row submit-button">
      <input class="btn-form" type="submit" name="b-submit" value="book">
    </div>
  </form>

</section>


<?php include('partials/footer.php'); ?>
