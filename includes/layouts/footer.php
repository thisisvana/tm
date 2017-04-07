<footer class="page-footer">


    <div class="row">
      <div class="footer-box small-12 medium-12 large-12 columns">
        <div class="footer-text">
             <i class="footer-icon fa fa-copyright" aria-hidden="true"></i>
             <p>Silvana Agolli<br>
             VanArts - 2017</p>
        </div>
      </div>
    </div>

</footer>
<script src="js/vendor/modernizr-2.8.3.min.js"></script>
<?php
// Close database connection
if (isset($connection)) {
mysqli_close($connection);
}
?>
