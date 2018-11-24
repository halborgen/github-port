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
    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.min.css" rel="stylesheet">
  </head>

  <body id="page-top">

    <!--Min menu php-->
	  <?php include 'menu.php';?>

    <!-- About -->
    <section class="content-section bg-light" id="about">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h2>Send mig en mail så vil jeg vende tilbage</h2>
			  <br>
            <p class="lead mb-5">Udfyld kontakt formularen</p> 
          </div>
        </div>
      </div>
    </section>  
    <!-- Portfolio -->
    <section class="content-section" id="portfolio">
		<div class="container">
    <h2 class="text-center"></h2>
	<div class="row justify-content-center">
		<div class="col-12 col-md-8 col-lg-6 pb-5">
                    <!--Kontakt form-->
                    <form action="mail.php" method="post">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3>Kontakt formular</h3>
                                    <p class="m-0"></p>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Navn" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Din email" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea class="form-control" id="subject" name="subject" placeholder="Besked" required></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Send" class="btn2 btn-info btn-block rounded-0 py-2">
                                </div>
                            </div>

                        </div>
						<hr>
                    </form>
             </div>
	</div>
</div>		
</section>	
	  <section class="content-section bg-light" id="">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <!--<h2>Send mig en mail så vil jeg vende tilbage asap!</h2>
			  <br>
            <p class="lead mb-5">Du kan hurtigt downloade mit CV
              <a href="https://unsplash.com/">Her</a></p>-->
            <div class="foo  foo-3"><a class="btn btn-dark btn-xl js-scroll-trigger" href="index.php">Tilbage</a></div>
          </div>
        </div>
      </div>
    </section>
	  <br><br>
   <!-- Min footer php -->
 <?php include 'footer.php';?>
	  
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

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.min.js"></script>

  </body>

</html>
