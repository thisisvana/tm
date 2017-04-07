
<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include "partials/header.php"; ?>

  <div class="row">
      <div class="t-container large-12 columns">
        <h1>Books</h1>
        <p>"The most technologically effecient machine that man has created is the book"</p>
      </div>
  </div>
  <section class="books"> <!-- featured images-->
      <div class="row services-container">
          <!-- <div class="services box small-12 medium-4 large-4 columns"> -->
              <!-- <div class="img-container"> -->
                <?php
                  $query = "SELECT * FROM book_tb";
                  $result = mysqli_query($connection, $query);
                  confirm_query($result);
                  $numberOfRows = mysqli_num_rows($result);

                  if($numberOfRows > 0) {

                    while($row = mysqli_fetch_assoc($result)) {
                      $id = $row["id"];
                      $imageSrc = $row["image"];
                      $title = $row["title"];
                      $sub = $row["subtitle"];
                      $desc = $row["description"];

                      echo "<div class='services box small-12 medium-4 large-4 columns'>";
                      echo "<div class='img-container'>";
                      echo "<img src='" . $imageSrc . "'</td>";
                      echo "<article class='services-description'><h5>".$title."</h5>";
                      echo "<p>". $sub ."</p>";
                      echo "<p>". $desc ."</p><hr></article>";
                      echo "<div class='textbox box'><div class='demo columns' aria-hidden='false'>";

                      echo  "<button class='modal-show btn'>Read more</button></div></div></div></div>";

                    }
                  }
                ?>



          <svg display="none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="768" height="800" viewBox="0 0 768 800"><defs><g id="icon-close"><path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path></g></defs></svg>

          <div class="modal" aria-hidden="true" role="dialog" aria-labelledby="modalTitle" aria-describedBy="modalDescription">
            <div class="modal-overlay modal-hide" tabindex="-1"></div>
            <div class="modal-container modal-hide">
              <div class="modal-wrapper modal-transition">
                <!-- <div id="modalDescription" class="modal-description vh">Beginning of dialog window. It begins with a heading 1 called "This is a modal".</div> -->
                <div class="modal-header">
                  <button class="modal-close modal-hide">X<use xlink:href="#icon-close"></use></button>
                  <h2 id="modalTitle" class="modal-heading">Book Details</h2>
                </div>

                <div class="modal-body">
                  <div class="modal-content">
                    <?php
                      $query = "SELECT * FROM details_tb";
                      $result = mysqli_query($connection, $query);
                      confirm_query($result);
                      $numberOfRows = mysqli_num_rows($result);

                      if($numberOfRows > 0) {

                        while($row = mysqli_fetch_assoc($result)) {
                          $id = $row["id"];
                          $head = $row["heading"];
                          $para = $row["paragraph"];

                          echo "<h5>".$head."</h5>";
                          echo "<p>". $para ."</p>";

                        }
                      }
                    ?>

                  </div>
                </div>
              </div>
            </div>
          </div>

      </div>
  </section>
<?php include "partials/footer.php"; ?>
