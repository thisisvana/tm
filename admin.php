<?php session_start(); echo isset($_SESSION['login_user']);?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("partials/header.php"); ?>

<?php

    if(isset($_SESSION['login_user'])==0){
    	header("location: login.php");
    }
    else{
    	$login_session=$_SESSION['login_user'];
    	// CONNECT TO DATABASE
        include("dbconfig.php");
        if(!$dbconfig){
            echo "Connection Failed";
        }
        else {
	?>
<div class="admin-head row">
  <a href="index.php"><input class="btn" type="submit" name="home" value="Home"></a>
  <a href="logout.php"><input class="btn" type="submit" name="logout" value="Logout"></a>
</div>
<div class="row">
  <h1>Welcome User</h1><br>
  <div class="upload-div">

    <form class="admin-form" enctype="multipart/form-data" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
      <label>Choose Image
      <input type="file" name="imageUploaded"></label><br>
      <label>Choose thumbnail
      <input type="file" name="imageUploaded2"></label><br>
      <input class="inp" type="text" name="name" id="title" placeholder="Name"><br>
      <select name="habitat" id="subtitle" placeholder="Habitat">
        <option value="habitat1">habitat1</option>
        <option value="habitat2">habitat2</option>
        <option value="habitat3">habitat3</option>
      </select><br>
      <input class="inp" type="text" name="attack" id="attack" placeholder="Attack"><br>
      <label>Description<br>
        <textarea class="t-area" type="text" name="description" id="desc"></textarea></label><br>
      <!-- <input class="inp" type="number" name="price" placeholder="Price"> -->
      <input class="btn" type="submit" name="submit" value="Upload">

    </form>

  </div>

</div>

  <?php

    if(isset($_POST['submit'])) {
      $targetDirectory = "img/";
      $targetFile = $targetDirectory . basename($_FILES['imageUploaded']['name']);
      $targetFile2 = $targetDirectory . basename($_FILES['imageUploaded2']['name']);
      $uploadOk = true;
      $name =  mysqli_real_escape_string($dbconfig, $_POST['name']);
      $desc= mysqli_real_escape_string($dbconfig, $_POST['description']);
      $habitat =  mysqli_real_escape_string($dbconfig, $_POST['habitat']);
      $attack =  mysqli_real_escape_string($dbconfig, $_POST['attack']);

      $imageName = mysqli_real_escape_string($dbconfig, $targetFile);
      $imageName2 = mysqli_real_escape_string($dbconfig, $targetFile2);
      $check = getimagesize($_FILES['imageUploaded']['tmp_name']);
      $check2 = getimagesize($_FILES['imageUploaded2']['tmp_name']);

        if($check === false || $check2 === false) {
          echo "<p>Not an image!</p>";
          $uploadOk = false;
        }
        if(file_exists($imageName) || file_exists($imageName2)) {
          echo "<p>File exists";
          $uploadOk = false;
        }


        if ($_FILES["imageUploaded"]["size"] > 1000000 || $_FILES["imageUploaded2"]["size"] > 500000) {
            echo "<p>Your image is too large.</p>";
            $uploadOk = false;
        }

        if($uploadOk === false) {
          echo "<p>Image not uploaded</p>";
        }
        else {
          if(move_uploaded_file($_FILES['imageUploaded']['tmp_name'], $targetFile) && move_uploaded_file($_FILES['imageUploaded2']['tmp_name'], $targetFile2)) {
            echo "<p>The File ". basename($_FILES['imageUploaded']['name']) . " has been uploaded.</p>";

            $insert = "INSERT INTO monsters_tb (image, thumbnail, name, description, habitat, attack) VALUES ('" . $imageName . "', '" . $imageName2 . "', '".$name."' , '".$desc."' , '".$habitat."', '". $attack ."')";
            $resultInsert = mysqli_query($dbconfig, $insert);
          }
          else {
            echo "<p>The File did not upload successfully</p>";
          }

       }
    }
  ?>
</div>
<div class="row">
  <div class="pack-form">
    <?php
      $query = "SELECT * FROM monsters_tb";
      $result = mysqli_query($dbconfig, $query);
      confirm_query($result);
      $numberOfRows = mysqli_num_rows($result);
      $limit=5;
      if(isset($_GET["pagination"])){
         $start=($_GET["pagination"]*$limit)-$limit;
         $query="SELECT * FROM monsters_tb ORDER BY id DESC LIMIT ".$start.",".$limit;
      }else{
         $query="SELECT * FROM monsters_tb ORDER BY id DESC LIMIT 0,".$limit;
     }

      if($numberOfRows > 0) {
        echo "<table>";
        echo "<th>Image</th><th>Thumbnail</th><th>Name</th><th>Description</th><th>Habitat</th><th>Attack</th><th>Delete</th>";
        while($row = mysqli_fetch_assoc($result)) {
          $id = $row["id"];
          $imageSrc = $row["image"];
          $imageSrc2 = $row["thumbnail"];
          $name = $row["name"];
          $desc = $row["description"];
          $habitat = $row["habitat"];
          $attack = $row["attack"];

          echo "<tr>";
          echo "<td><img src='" . $imageSrc . "'</td>";
          echo "<td><img src='" . $imageSrc2 . "'</td>";
          echo "<td><h4>".$name."<h4></td>";
          echo "<td><p>". $desc ."</p></td>";
          echo "<td><h4>". $habitat ."</h4></td>";
          echo "<td><h4>".$attack."</h4></td>";
          echo "<td><a href='admin.php?delete=". $id ."'/><h2>Delete</h2></a></td>";
          echo "<tr>";

        }
        echo "</table>";
      }
      if(isset($_GET["delete"])) {

					$delete = "DELETE FROM monsters_tb WHERE id = '".$_GET["delete"]."'";
					$deleteResult = mysqli_query($dbconfig, $delete);
          confirm_query($deleteResult);
			}

    ?>
  </div>
  </div>
<?php
} // Database Connection
mysqli_close($dbconfig);
} // SESSION
?>
</body>
</html>
