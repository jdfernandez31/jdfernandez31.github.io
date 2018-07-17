<!--
* With Wow.js, calling the "animated" class is no longer needed, or it will cause redundant animations

-->

<!DOCTYPE html>
<html>
<head>
  <title>MY PORTFOLIO WEBSITE</title>
  <meta name="viewport" content="width=530px, initial-scale=-1"> <!--width was based on vivo Y53 resolution manually-->
  <meta charset="utf-8">
  <?php require('libraries.php') ?>
  <?php require('scrollbar.php') ?>
  <!-- Boostrap JS -->
  <script src="js/bootstrap.js"></script>

  <!-- jQuery -->
  <script src="js/jquery.js"></script>

  <!-- Custom JS -->
  <script src="js/jdf.js"></script>
  <script src="js/back-to-top.js"></script>

  <!--WOW JS-->
  <script src="js/wow.min.js"></script>
  <script>
    new WOW().init();

  //NAVBAR SCROLLING
  $(function () {
    $(document).scroll(function () {
      var $nav = $(".navbar");
      $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
  });

  //NAVBAR SHRINK
  $(window).scroll(function() {
    if ($(document).scrollTop() > 50) {
      $('nav').addClass('shrink');
    } else {
      $('nav').removeClass('shrink');
    }
  });
  </script>

</head>
<body>
  <img id="bgOverlay" src="img/overlay.png">
  <a href="#" class="back-to-top animated zoomIn" title="Back To Top">Back To Top</a>
  <a href="#" class="scroll-down" address="true" title="Start Browsing"></a>

  <div class="wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 col-lg-12 padding0">

          <!--NAVBAR-->
          <nav class="navbar navbar-expand-md fixed-top animated slideInLeft"> <!--add  transparentColor-->
            <!-- Brand -->
            <a class="navbar-brand" href="#">
              <img src="img/jdf_logo.png" alt="Logo" style="width:60px;">
            </a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span><i class="fas fa-bars"></i></span> <!--Changed it to font awesome icon coz if not invisible on mobile-->
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse justify-content-between" id="collapsibleNavbar">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#webDev">Skills</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#portfolio">Portfolio</a>
                </li>
              </ul>
              <ul class="navbar-nav nav-right ml-auto  justify-content-between">
                <li class="nav-item">
                  <label style="margin-top: 10%;"><b>Look Me Up @</b></label>
                </li>
                <li class="nav-item">
                  <a href="https://www.alamy.com/stock-photography/C5BFF0A4-B1EF-44F7-A035-DC18D0019DE2/Jason David Fernandez.html" ><img src="https://www.alamy.com/images/Logos/alamy-LM-25.gif" alt="Stock photography by Jason David Fernandez at Alamy" title="Stock photography by Jason David Fernandez at Alamy" border="0"></a>
                </li>
                <li class="nav-item">
                  <a href="https://www.facebook.com/jasondavid.fernandez" ><img src="img/facebook.png" alt="Facebook" title="Find Me On Facebook" border="0"></a>
                </li>
                <li class="nav-item">
                  <a href="https://twitter.com/jdfernandez31" ><img src="img/twitter.png" alt="Twitter" title="Follow Me On Twitter" border="0"></a>
                </li>
                <li class="nav-item">
                  <a href="https://www.instagram.com/jdfernandez31/" ><img src="img/instagram.png" alt="Instagram" title="Follow Me On Instragram" border="0"></a>
                </li>
                <li>
                  <label style="margin-top: 4%;"><i class="fa fa-envelope"></i>&nbsp; &nbsp; jasondavid0831@gmail.com</label>
                </li>
              </ul>
            </div>
          </nav> 

         
          
          <!--HEADER-->
          <div id="header">
            <!--<img src="img/temp4.jpg">-->
            <h1 id="maskeh1"><span class="animated wobble infinite"><i class="fa fa-hand-paper animated wobble infinite"></i><br><br><br> Hi!</span></h1>
          </div>
          <div>
            <div id="nameTag" class="wow tada"><h1 class="hvr-pulse-grow"><b>Jason David Fernandez</b></h1>
            
            <p><h5 class="wow slideInLeft reColor" data-wow-delay="1s">Graphic Designer | Web Developer | Aspiring Photographer</h5></p>
            <p><h6 class="wow slideInRight reColor" data-wow-delay="1.5s">BS Computer Science Graduate</h6></p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-lg-12 padding0">
        
          <!--ABOUT-->
          <section class="about">
          <div id="about">
            <div class="animated wow rubberBand aboutHover" data-wow-offset="10">
              <p><h1><i class="fas fa-id-card"></i> ABOUT</h1>
              Hi! I am Jason David Fernandez, a Computer Science graduate of Bicol University College of Science Batch 2018. I believe that pursuing your passions make the best of you as for me is mostly visual arts, creating graphic designs and video editing pursuing both as hobby and career. Applying these as a Computer science graduate, makes me more in tune for front-end development. Take this website itself as example.
              </p>
            </div>
          </div>
          </section>

      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-lg-6 padding0">
          <!--WEB DEV-->    
          <div id="webDev">
            <div class="content center">
              <div class="wow rubberBand"><h3><i class="fa fa-desktop"></i> WEB DEVELOPMENT</h3></div><hr>
              <br>
              <div class="subContent wow slideInLeft">
                <div class="container">
                  <img src="img/html.png">
                </div>
              </div>
              <div class="subContent wow slideInLeft" data-wow-delay="0.3s">
                <div class="container">
                  <img src="img/css.png">
                </div>
              </div>
              <div class="subContent wow slideInLeft" data-wow-delay="0.5s">
                <div class="container">
                  <img src="img/javascript.png">
                </div>
              </div>
              <div class="subContent wow slideInLeft" data-wow-delay="0.7s">
                <div class="container">
                  <img src="img/php.png">
                </div>
              </div>
              <div class="subContent wow slideInLeft" data-wow-delay="0.9s">
                <div class="container">
                  <img src="img/sql.png">
                </div>
              </div>
              <div class="subContent wow slideInLeft" data-wow-delay="0.9s">
                <div class="container">
                  <img src="img/mysql.png">
                </div>
              </div>
              <div class="subContent wow slideInLeft" data-wow-delay="1s">
                <div class="container">
                  <img src="img/sass.png">
                </div>
              </div>
              <div class="subContent wow slideInLeft" data-wow-delay="1.2s">
                <div class="container">
                  <img src="img/bootstrap.png">
                </div>
              </div>
              <div class="subContent wow slideInLeft" data-wow-delay="1.3s">
                <div class="container">
                  <img src="img/jquery.png">
                </div>
              </div>

            </div>
          </div>

      </div>
      <div class="col-sm-12 col-lg-6 padding0">
          <!--MULTIMEDIA-->    
          <div id="multimedia">
            <div class="content center">
              <div class="wow rubberBand"><h3><i class="fas fa-image"></i> MULTIMEDIA</h3></div><hr>
              <br>
              <div class="subContent wow slideInRight">
                <div class="container">
                  <img src="img/photoshop.png">
                </div>
              </div>
              <div class="subContent wow slideInRight" data-wow-delay="0.3s">
                <div class="container">
                  <img src="img/illustrator.png">
                </div>
              </div>
              <div class="subContent wow slideInRight" data-wow-delay="0.5s">
                <div class="container">
                  <img src="img/lightroom.png">
                </div>
              </div>
              <div class="subContent wow slideInRight" data-wow-delay="0.7s">
                <div class="container">
                  <img src="img/cyberlink.png">
                </div>
              </div>
              <div class="subContent wow slideInRight" data-wow-delay="0.9s">
                <div class="container">
                  <img src="img/filmora.png">
                </div>
              </div>

            </div>
          </div>

      </div>
    </div>    
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-lg-12 padding0">
          <!--PORTFOLIO-->    
          <div id="portfolio">
            <div class="left">
              <div class="wow rubberBand"><h1><i class="fa fa-folder"></i> PORTFOLIO</h1></div><hr>
              <br>

              <!--GRAPHIC DESIGNS-->
              <div class="imgContainer"><h1>
                <span class="badge badge-secondary customBadge wow slideInLeft" data-wow-delay="0.5s">Graphic Designs</span></h1>
                <a href="#graphicModal" data-toggle="modal" data-target="#graphicModal">
                  <img src="img/thumbnail1.jpg" alt="Image failed to Load" class="oneRow wow rollIn" data-wow-delay="0.5s">
                </a>
                <label><b></b></label>
                <div class="overlay">
                  <div class="imgText">
                    <a href="#graphicModal" data-toggle="modal" data-target="#graphicModal"><b>Graphic Designs</b><br>(Click To View)</a>
                  </div>
                </div>
              </div>


              <!--PHOTOGRAPHY-->
              <div class="imgContainer"><h1>
                <span class="badge badge-secondary customBadge wow slideInLeft" data-wow-delay="1.5s">Photography</span></h1>
                <a href="#photoModal" data-toggle="modal" data-target="#photoModal">
                  <img src="img/thumbnail3.jpg" alt="Image failed to Load" class="oneRow wow rollIn" data-wow-delay="1.5s">
                </a>
                <label><b></b></label>
                <div class="overlay">
                  <div class="imgText">
                    <a href="#photoModal" data-toggle="modal" data-target="#photoModal"><b>Photography</b><br>(Click To View)</a>
                  </div>
                </div>
              </div>

              <br><br>
              <div class="wow rubberBand"><h1 style="line-height: 40px;"><i class="fa fa-desktop"></i> WEB DEVELOPMENT</h1></div><hr>
              <br>

              <!--WEB DEV-->
              <div class="imgContainer"><h1>
                <span class="badge badge-secondary customBadge wow slideInLeft" data-wow-delay="1s">CSS Web Tool</span></h1>
                <a href="#webTool" data-toggle="modal" data-target="#webTool">
                  <img src="img/thumbnail2.jpg" alt="Image failed to Load" class="oneRow wow rollIn" data-wow-delay="0.5s">
                </a>
                <label><b></b></label>
                <div class="overlay">
                  <div class="imgText">
                    <a href="#webTool" data-toggle="modal" data-target="#webTool"><b>CSS Web Tool</b><br>(Click To View)</a>
                  </div>
                </div>
              </div>

              <!--WEB DEV-->
              <div class="imgContainer"><h1>
                <span class="badge badge-secondary customBadge wow slideInLeft" data-wow-delay="1s">Bikol-English Translator</span></h1>
                <a href="#bikEn" data-toggle="modal" data-target="#bikEn">
                  <img src="img/thumbnail5.jpg" alt="Image failed to Load" class="oneRow wow rollIn" data-wow-delay="1s">
                </a>
                <label><b></b></label>
                <div class="overlay">
                  <div class="imgText">
                    <a href="#bikEn" data-toggle="modal" data-target="#bikEn"><b>Web Development</b><br>(Click To View)</a>
                  </div>
                </div>
              </div>

              <!--WEB DEV-->
              <div class="imgContainer"><h1>
                <span class="badge badge-secondary customBadge wow slideInLeft" data-wow-delay="1s">E-Commerce Website</span></h1>
                <a href="#ecom" data-toggle="modal" data-target="#ecom">
                  <img src="img/thumbnail4.jpg" alt="Image failed to Load" class="oneRow wow rollIn" data-wow-delay="1.5s">
                </a>
                <label><b></b></label>
                <div class="overlay">
                  <div class="imgText">
                    <a href="#ecom" data-toggle="modal" data-target="#ecom"><b>E-Commerce Website</b><br>(Click To View)</a>
                  </div>
                </div>
              </div>
          
            </div>
          </div>

      </div>
    </div>
  </div>

  <footer>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 col-lg-12 padding0">
          <div class="footer">
            <div class="footer-content">
              <a href="#about">About</a>
              <a href="#webDev">Skills</a>
              <a href="#portoflio">Portfolio</a>
              <br>
              <label> jdfernandez31 © 2018  &nbsp;|&nbsp; </label>
              <label><i class="fa fa-envelope"></i> jasondavid0831@gmail.com</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>


<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <!-- The Graphic Designs Modal -->
      <div class="modal animated slideInLeft" id="graphicModal">
        <div class="modal-dialog  modal-lg">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">PORTFOLIO > GRAPHIC DESIGNS</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <img src="img/portfolio/graphics/1.jpg" alt="Image failed to Load Check file format on Code">
              <img src="img/portfolio/graphics/2.png" alt="Image failed to Load Check file format on Code">
              <img src="img/portfolio/graphics/3.png" alt="Image failed to Load Check file format on Code">
              <img src="img/portfolio/graphics/4.jpg" alt="Image failed to Load Check file format on Code">
              <img src="img/portfolio/graphics/5.jpg" alt="Image failed to Load Check file format on Code">
              <img src="img/portfolio/graphics/6.png" alt="Image failed to Load Check file format on Code">
              <img src="img/portfolio/graphics/7.png" alt="Image failed to Load Check file format on Code">
              <img src="img/portfolio/graphics/8.png" alt="Image failed to Load Check file format on Code">
              <img src="img/portfolio/graphics/9.png" alt="Image failed to Load Check file format on Code">
              <img src="img/portfolio/graphics/10.png" alt="Image failed to Load Check file format on Code">
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>


      <!-- The Photography Modal -->
      <div class="modal animated slideInRight" id="photoModal">
        <div class="modal-dialog  modal-lg">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">PORTFOLIO > PHOTOGRAPHY</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <img src="img/portfolio/photography/1.jpg" alt="Image failed to Load Check file format on Code">
              <img src="img/portfolio/photography/2.jpg" alt="Image failed to Load Check file format on Code">
              <img src="img/portfolio/photography/3.jpg" alt="Image failed to Load Check file format on Code">
              <img src="img/portfolio/photography/4.jpg" alt="Image failed to Load Check file format on Code">
              <img src="img/portfolio/photography/5.jpg" alt="Image failed to Load Check file format on Code">
              <img src="img/portfolio/photography/6.jpg" alt="Image failed to Load Check file format on Code">
              <img src="img/portfolio/photography/7.jpg" alt="Image failed to Load Check file format on Code">
              <img src="img/portfolio/photography/8.jpg" alt="Image failed to Load Check file format on Code">
              <img src="img/portfolio/photography/9.jpg" alt="Image failed to Load Check file format on Code">
              <img src="img/portfolio/photography/10.jpg" alt="Image failed to Load Check file format on Code">
              <img src="img/portfolio/photography/11.jpg" alt="Image failed to Load Check file format on Code">
              <img src="img/portfolio/photography/12.jpg" alt="Image failed to Load Check file format on Code">
              <img src="img/portfolio/photography/13.jpg" alt="Image failed to Load Check file format on Code">
              <img src="img/portfolio/photography/14.jpg" alt="Image failed to Load Check file format on Code">
              <img src="img/portfolio/photography/15.jpg" alt="Image failed to Load Check file format on Code">
              <img src="img/portfolio/photography/16.jpg" alt="Image failed to Load Check file format on Code">
              <img src="img/portfolio/photography/17.jpg" alt="Image failed to Load Check file format on Code">
              <img src="img/portfolio/photography/18.jpg" alt="Image failed to Load Check file format on Code">
              <img src="img/portfolio/photography/19.jpg" alt="Image failed to Load Check file format on Code">
              <img src="img/portfolio/photography/20.jpg" alt="Image failed to Load Check file format on Code">
              <img src="img/portfolio/photography/21.jpg" alt="Image failed to Load Check file format on Code">
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>



      <!-- CSS WEB TOOL -->
      <div class="modal animated zoomIn" id="webTool">
        <div class="modal-dialog  modal-lg">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">PORTFOLIO > WEB DEVELOPMENT > CSS WEB TOOL</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body modalOverride">
              <div class="container">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="webDesc">
                      <img src="img/portfolio/webdev/1.jpg" alt="Image failed to Load Check file format on Code">
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="webDesc">
                     <p>CSS Generator for Image Styling, shortened as CGFIS, a web tool I designed and programmed for a school project. It is a CSS code generator for Image styling. Basically, generating a CSS code based on your preferred layout for web images on which you can see how it will look like in real time similar to picking clothes in your closet and trying it out while looking in the mirror. Specific feats include image filtering, borders styling, and box shadows. Easy to use, hassle free for web developers out there.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>

      <!-- BIK-EN -->
      <div class="modal animated zoomIn" id="bikEn">
        <div class="modal-dialog  modal-lg">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">PORTFOLIO > WEB DEVELOPMENT > BIKOL-ENGLISH TRANSLATOR</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body modalOverride">
              <div class="container">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="webDesc">
                      <img src="img/portfolio/webdev/2.png" alt="Image failed to Load Check file format on Code">
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="webDesc">
                      <p>The Bi-directional Bikol-English Statistical Machine Translator or BBESMT is basically a language translator between English and Bikol that is accessible by different platforms through web integration. Built as a thesis project, this web app attained a BLEU score of 32.99 for Bikol to English and 32.93 for English to Bikol, reflecting understandble translations. In addition, the app was qualified to join a number of nationwide conferences including the 14NNLPRS and #iCore2018. My role mainly being in documentation and front-end development.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>


      <!-- ECOM -->
      <div class="modal animated zoomIn" id="ecom">
        <div class="modal-dialog  modal-lg">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">PORTFOLIO > WEB DEVELOPMENT > E-COMMERCE WEBSITE</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body modalOverride">
              <div class="container">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="webDesc">
                      <img src="img/portfolio/webdev/3.png" alt="Image failed to Load Check file format on Code">
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="webDesc">
                      <p>This was my first major web development school project, called it Komizon, a shopping website heaven for comic book lovers. Main feats consisting of product showcasing, sorting, carting, content management system, sales report, stock reports, user profile, and payment. A standard website for buyers and sellers in the online market. </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</div>


</body>

  <!-- Boostrap JS -->
  <script src="js/bootstrap.js"></script>

  <!-- jQuery -->
  <script src="js/jquery.js"></script>

  <!-- Custom JS -->
  <script src="js/jdf.js"></script>
  <script src="js/back-to-top.js"></script>

  <script type="text/javascript">
    //Back to Top Button
    $('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');

    var amountScrolled = 700;

    $(window).scroll(function() {
        if ( $(window).scrollTop() > amountScrolled ) {
            $('a.back-to-top').fadeIn('slow');
        } else {
            $('a.back-to-top').fadeOut('slow');
        }
    });

    $('a.back-to-top').click(function() {
    $('html, body').animate({
        scrollTop: 0
    }, 700);
    return false;
    });


  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  </script>

</html>

<!--MORE FEATURES TO ADD

-sticky download resume
-carousel showcasing
-polygon objects
-Education 
-RESIZE Portfolio actual images



-->