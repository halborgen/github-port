<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PHS DESIGN</title>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
	     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="thumbnail-gallery.css">
    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.min.css" rel="stylesheet">
	 
  </head>
  <body id="page-top">  
	<!--Min menu php-->
	  <?php include 'menu.php';?>	  
    <!-- Min header -->
    <header class="masthead d-flex">
		<div class="logo">
		<a href="">
			</a>
		</div>
      <div class="container text-center my-auto">
        <h1 class="mb-1"> </h1>
        <h3 class="mb-5">
     <em>
		  
  
	</em>
        </h3>
      </div>
      <div class="overlay">
		</div>
    </header>
	  
    <!-- cv kasse -->
    <section class="content-section bg-light" id="about">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-10 mx-auto">
			  <div class="h2s">
            <h2>Her kan du læse mere om mig!</h2>
				  </div>
            <p class="lead mb-5">Du kan hurtigt hente mit CV
				
              <a href="Peter-Halborg-CV.pdf">Her</a></p>
            <div class="foo  foo-3"><a class="btn btn-dark btn-xl js-scroll-trigger" href="mig.php">Mere om mig</a></div>
          </div>
        </div> 
      </div>
    </section>
		
		 <section class="content-section bg-light" id="para">
     <div class="jumbotron" style="text-align:center;">  
      <h1>PHS Portfolio</h1>
         
     </div><!--end of jumbotron -->
	   </section>
	  
	  
    <!-- Billede  --><br><br><br><hr>
    <section class="content-section" id="portfolio">
      <div class="container"><div class="foo  foo-2">
        <div class="content-section-heading text-center">
          <h3 class="text-secondary mb-0"></h3>
          <h2 class="mb-5">Mine projekter</h2>
        </div> 
        <div class="row no-gutters">
          <div class="col-lg-6">
            <a class="portfolio-item" href="3semester.php">
              <span class="caption">
                <span class="caption-content">
                  <h2>Skole Arbejde</h2>
                  <p class="mb-0">Her kan du se nogle af mine projekter Lavet i Skolen</p>
                </span>
              </span>
              <img class="img-fluid" src="img/rAFgaqn.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="3semester.php">
              <span class="caption">
                <span class="caption-content">
                  <h2>Fritids Arbejde</h2>
                  <p class="mb-0">Her kan du se noget af mit fritids arbejde</p>
                </span>
              </span>
              <img class="img-fluid" src="img/rAFgaqn.jpg" alt="">
            </a>
			</div></div>
          <!--<div class="col-lg-6">
            <a class="portfolio-item" href="1semester.php">
              <span class="caption">
                <span class="caption-content">
                  <h2>Første Semester</h2>
                  <p class="mb-0">Her kan du se alle mine projekter fra første semester!</p>
                </span>
              </span>
              <img class="img-fluid" src="img/test2I.png" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="3semester.php">
              <span class="caption">
                <span class="caption-content">
                  <h2>Fritids arbejde</h2>
                  <p class="mb-0">Her kan du se alle mine projekter, som jeg arbejder på, i min fritid!</p>
                </span>
              </span>
              <img class="img-fluid" src="img/test3.png" alt="">
            </a>
          </div>-->
        </div>
      </div>
    </section>
	 
<br><br><br><br><hr>
    <!-- Min footer php -->
 <?php include 'footer.php';?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
	   <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
	  <script>
	  // GENERAL SETTING
window.sr = ScrollReveal({ reset: true });

// Custom Settings
sr.reveal('.foo-1', { duration: 200 });

sr.reveal('.foo-2', { 
  origin: 'right', 
  duration: 3000 
});

sr.reveal('.foo-3', { 
  rotate: { x: 100, y: 100, z: 0 },
  duration: 1000
});

sr.reveal('.foo-4', { 
  viewFactor: 0.5
});

sr.reveal('.foo-5', { 
  duration: 2000 
});
	  
	  </script>
		
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.min.js"></script>
</body>

</html>
