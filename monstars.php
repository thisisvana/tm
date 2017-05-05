<?php include('partials/header.php'); ?>
<?php include('partials/navbar.php'); ?>
<?php require_once("includes/functions.php"); ?>
<?php include ('dbconfig.php'); ?>
  <section>
    <div class="inner-hero">
      <div class="row expanded">
        <div class="inner-banner">
          <!-- <img src="img/banner.jpg" alt="wedding dj"> -->
        </div>
      </div>
    </div>
  </section>
  <div class="page-title row">
    <h1>Neo Monstars</h1>
    <hr class="head-hr">

    <!-- <div class="cta-para">
      <p>There is six monstars living in six habitats. Choose yours and start populatating the habitat.</p>
      <a href="contact.php"><button class="btn-form" name="button">Contact us</button></a>
    </div> -->
  </div>
  <section class="mons">
  <?php

    $query = "SELECT * FROM monsters_tb";
    $result = mysqli_query($dbconfig, $query);
    confirm_query($result);
    $numberOfRows = mysqli_num_rows($result);

    if($numberOfRows > 0) {

      while($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
        $imageSrc = $row["image"];
        $imageSrc2 = $row["thumbnail"];
        $name = $row["name"];
        $habitat = $row["habitat"];
        $attack = $row["attack"];
        $desc = $row["description"];

        echo "<div class='cta row'>";
        echo "<div class='cta-div'>";
        echo "<h3>" . $name ."</h3>";
        echo "<div class='cta-btn large-6 column'>";
        echo "<h2>Habitat - ". $habitat ."</h2>";
        echo "<h2>Special Attack - <span>" . $attack ."</span></h2>";
        echo "<p>". $desc ."</p>";
        echo "</div>";
        echo "<div class='large-6 column'>";
        echo "<img class='animated infinite bounce monster thumbnail' src='". $imageSrc2 ."'>";
        echo "<button type='button' data-id='".$id."' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal'>Click me</button>";
        echo "</div></div></div>";


      }
    }
  ?>

  </section>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->

        <?php
          $query = "SELECT * FROM monsters_tb";
          $result = mysqli_query($dbconfig, $query);
          confirm_query($result);
          $numberOfRows = mysqli_num_rows($result);

          if($numberOfRows > 0) {

            while($row = mysqli_fetch_assoc($result)) {
              $id = $row["id"];
              $imageSrc = $row["image"];
              $imageSrc2 = $row["thumbnail"];
              $name = $row["name"];
              $habitat = $row["habitat"];
              $attack = $row["attack"];
              $desc = $row["description"];

            echo "<div class='modal-content' data-id='".$id."'>";
            echo "<div class='modal-header'>";
            echo "<button type='button' class='close' data-dismiss='modal'>&times;</button>";
            echo "<h4 class='modal-title'>".$name."</h4>";
            echo "</div>";
            echo "<div class='modal-body'>";
            echo "<img class='animated tada monster' src='". $imageSrc ."'>";
            echo "<button type='button' id='closer' class='btn btn-default' data-dismiss='modal'>Close</button>";
            echo "</div>";

            echo "<div class='modal-footer'>";

            echo "</div></div>";
          }
        }
      ?>

    </div>


</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->


<?php include('partials/footer.php'); ?>
