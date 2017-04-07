<?php include "partials/header.php"; ?>





      <div class="row">
          <!-- <div class="form-box  small-12 large-12 columns"> -->
            <h1>Contact us</h1>
              <form class="contact-form" method="post" action="#">

                  <label for="form-name">Name</label><br>
                  <input type="text" class="c-placeholder" id="form-name" name="cname" placeholder="Type your name" required /><br>

                  <label for="form-email">Email</label><br>
                  <input type="text" class="c-placeholder" id="form-email" name="cemail" placeholder=" example@example.com" required /><br>
                  <label for="form-message">Message:</label><br>
                  <textarea id="form-message" name="message"></textarea>

                  <input type="submit" name="f_submit" class="btn" value="Send">

              </form>
          </div>

      </div>


      <div class="row">
          <div class="map large-12 columns">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5205.41030890326!2d-123.11363440620966!3d49.281983896817735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa8d10bdb2ca1c083!2sVancouver+Institute+of+Media+Arts+(VanArts)!5e0!3m2!1sen!2sca!4v1477437491122" allowfullscreen></iframe>
          </div>
      </div>
<?php include "partials/footer.php"; ?>
