
<?php session_start(); ?>
<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/layouts/header.php"); ?>

<div class="upload-div row expanded">
  <div class="admin-box large-4 columns">


    <form class="admin-form" enctype="multipart/form-data" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">

      <input type="file" name="imageUploaded"><br>
      <input class="inp" type="text" name="title" id="title" placeholder="Title">
      <input class="inp" type="text" name="subtitle" id="subtitle" placeholder="Subtitle">

      <textarea class="t-area" type="text" name="description" id="desc" placeholder="Description"></textarea><br>
      <!-- <input class="inp" type="number" name="price" placeholder="Price"> -->
      <input class="btn" type="submit" name="submit" value="Upload">

    </form>
  </div>

    <?php


    if(isset($_POST['submit'])) {
      $targetDirectory = "img/";
      $targetFile = $targetDirectory . basename($_FILES['imageUploaded']['name']);
      $uploadOk = true;
      $title =  mysqli_real_escape_string($connection, $_POST['title']);
      $subtitle =  mysqli_real_escape_string($connection, $_POST['subtitle']);
      $alt= mysqli_real_escape_string($connection, $_POST['description']);
      // $price = intval($_POST["price"]);

      $imageName = mysqli_real_escape_string($connection, $targetFile);

      $check = getimagesize($_FILES['imageUploaded']['tmp_name']);

        if($check === false) {
          echo "<p>Not an image!</p>";
          $uploadOk = false;
        }

        if ($_FILES["imageUploaded"]["size"] > 1000000) {
            echo "<p>Your image is too large. Must be less than 1MB</p>";
            $uploadOk = false;
        }

        if($uploadOk === false) {
          echo "<p>Image failed tests.</p>";
        }
        else {
          if(move_uploaded_file($_FILES['imageUploaded']['tmp_name'], $targetFile)) {
            echo "<p>The File ". basename($_FILES['imageUploaded']['name']) . " has been uploaded.</p>";

            $insert = "INSERT INTO book_tb (image, title, subtitle, description, price) VALUES ('" . $imageName . "', '".$title."' , '".$subtitle."' , '".$alt."')";
            $resultInsert = mysqli_query($connection, $insert);
          }
          else {
            echo "<p>The File did not upload successfully</p>";
          }

       }
    }
  ?>

<div class="admin-display large-8 columns">
  <div class="pack-form">
    <?php
      $query = "SELECT * FROM book_tb";
      $result = mysqli_query($connection, $query);
      confirm_query($result);
      $numberOfRows = mysqli_num_rows($result);

      if($numberOfRows > 0) {
        echo "<table>";
        echo "<th>Image</th><th>Title</th><th>Subtitle</th><th>Description</th><th>Price</th><th>Delete</th>";
        while($row = mysqli_fetch_assoc($result)) {
          $id = $row["id"];
          $image = $row["image"];
          $title = $row["title"];
          $sub = $row["subtitle"];
          $desc = $row["description"];
          $price = $row["price"];

          echo "<tr>";
          echo "<td><img src='" . $image . "'</td>";
          echo "<td><h4>".$title."<h4></td>";
          echo "<td><h4>". $sub ."</h4></td>";
          echo "<td>". $desc ."</td>";
          echo "<td><h4>$".$price."</h4></td>";
          echo "<td><a href='admin.php?delete=". $id ."'/>Delete</a></td>";
          echo "<tr>";

        }
        echo "</table>";
      }

      if(isset($_GET["delete"])) {

					$delete = "DELETE FROM book_tb WHERE id = '".$_GET["delete"]."'";
					$deleteResult = mysqli_query($connection, $delete);
          confirm_query($deleteResult);
				}

    ?>
   </div>

  </div>
</div>


<?php require_once("includes/layouts/footer.php"); ?>
