<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>VANARTS STUDENT MOCKUP</title>
        <meta name="description" content="This is a student exercise website for the Vancouver Institute of Media Arts (www.vanarts.com)">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
        <!-- <link rel="apple-touch-icon" href="apple-touch-icon.png"> -->
        <link rel="stylesheet" href="css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Alex+Brush|Arapey|Oranienbaum" rel="stylesheet">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="https://use.fontawesome.com/1845926a10.js"></script>
    </head>

    <body class="bg">
      <header class="page-header">

        <div class="sidebar">
            <div class="row expanded">
              <div class="side-b small-12 medium-4 large-3 columns">
                  <div class="logo">
                    <a href="index.php"><img src="documentation/logo/logo.svg" alt="logo"></a>
                  </div>
                  <div class="mobile-menu show-for-small-only"><i class="fa fa-bars" aria-hidden="true"></i></div>
                  <div class="side-nav">
                    <ul class="main-menu">
                      <li><a href="ndp.php">ndp</a></li>
                      <li><a href="green.php">green</a></li>
                      <li><a href="liberal.php">liberal</a></li>
                      <li><a href="conservative.php">conservative</a></li>
                      <li><a href="mymp.php">my mp</a></li>
                      <li><a href="vote.php">vote smart</a></li>
                    </ul>
                    <div class="sub-form hide-for-small-only columns">
                      <p>Subscribe</p>
                      <form method="post" action="#">
                         <input type="text" class="c-placeholder" id="form-name" name="name" placeholder="name" required />

                         <!-- <label for="form-email">Email*</label><br> -->
                         <input type="text" class="c-placeholder" id="form-email" name="email" placeholder="example@example.com" required />
                         <input id="send-btn" type="submit" name="submit" class="btn" value="Send">

                      </form>
                    </div>

                    <svg display="none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="768" height="800" viewBox="0 0 768 800"><defs><g id="icon-close"><path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path></g></defs></svg>

                    <div class="demo show-for-small-only columns" aria-hidden="false">

                      <button class="modal-show btn">Subscribe</button>
                    </div>

                    <div class="modal" aria-hidden="true" role="dialog" aria-labelledby="modalTitle" aria-describedBy="modalDescription">
                      <div class="modal-overlay modal-hide" tabindex="-1"></div>
                      <div class="modal-container modal-hide">
                        <div class="modal-wrapper modal-transition">
                          <!-- <div id="modalDescription" class="modal-description vh">Beginning of dialog window. It begins with a heading 1 called "This is a modal".</div> -->
                          <div class="modal-header">
                            <button class="modal-close modal-hide">X<use xlink:href="#icon-close"></use></button>
                            <h2 id="modalTitle" class="modal-heading">Subscription Form</h2>
                          </div>

                          <div class="modal-body">
                            <div class="modal-content">
                              <p>Enter your name and email</p>

                              <form method="post" action="#">


                                 <input type="text" class="c-placeholder" id="form-n" name="name" placeholder="name" required />

                                 <!-- <label for="form-email">Email*</label><br> -->
                                 <input type="text" class="c-placeholder" id="form-e" name="email" placeholder="example@example.com" required />
                                 <!-- <input id="send-btn" type="submit" name="submit" class="btn" value="Send"> -->
                                 <div>
                                   <button type="submit" name="submit" class="btn modal-hide">Send</button>
                                 </div>
                              </form>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <div class="social-nav">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                  </div>

                </div>
            </div>
          </div>
        </div>

        <?php include "partials/email.php"; ?>
        
