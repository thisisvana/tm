
<?php session_start(); ?>
<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/layouts/header.php"); ?>

<div class="upload-div row expanded">
  <button type="button" name="button"><a href="admin.php"><h2>Go back</h2></a></button>
  <div class="admin-box large-12 columns">
    <form class="admin-form" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
      <div class="controls">

          <select name="book-title" class="floatLabel">
            <option value="world" selected>The World is Open</option>
            <option value="analyze">Analyzing HTTP</option>
            <option value="mean">Mean</option>
            <option value="virtual">Virtual Society</option>
            <option value="angular">AngularJS</option>
            <option value="drupal">Drupal 8</option>

          </select><br>

          <input class="inp" type="text" name="title" placeholder="New Title">

      </div>
      <input class="btn" type="submit" name="submit" value="Submit">
    </form>
 </div>
</div>

<?php
     if (isset($_POST['submit'])) {
       // Process the form

       $name = $_POST["book-title"];
       $title = intval($_POST["title"]);

       // validations

       if (!empty($title)) {

         // Sending query for Update

         $queryR  = "UPDATE book_tb SET title = " . $title . " WHERE title = '" . $name . "'";

         $resultR = mysqli_query($connection, $queryR);
         confirm_query($resultR);

         if ($resultR) {
           // Success
           echo "<p>Udate successful</p>";
           header("location:admin.php");
         } else {
           // Failure
         echo "<p>Page update failed.</p>";
         }

       }
     }

   ?>



<?php require_once("includes/layouts/footer.php"); ?>
