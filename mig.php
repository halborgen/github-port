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
            <h2>Her kan du læse mere om mig</h2>
			  <br>
            <p class="lead mb-5">Læser multimedie design på CPH Bussiness Lyngby.
          </div>
        </div>
      </div>
		<section class="content-section" id="portfolio">
      <div class="container">
      <!-- Rotating card -->
<div class="card-wrapper">
  <div id="card-1" class="card-rotating effect__click text-center h-100 w-100">
    <!-- Front Side -->
    <div class="face front">
      <!-- Avatar -->
      <div class="avatar mx-auto white"><img src="img/IMG_1990222222.png" class="rounded-circle" alt="Sample avatar image." height="300px" width="300px">
      </div>
		<br><br>
      <!-- Content -->
      <div class="card-body">
        <h4 class="font-weight-bold mb-3">Peter Halborg Sørensen</h4>
        <p class="font-weight-bold blue-text">Multimedie designer</p>
      </div>
    </div>
    <!-- Front Side -->
<br>
    <!-- Back Side -->
    <div class="face back">
      <div class="card-body">
        <!-- Content -->
      
        <hr><br>
		  <h4 class="font-weight-bold">Om mig</h4>
        <hr>
        <p>
			Velkommen til PHS portfolio. Jeg er 32 år gammel og bor med min kone og vores søn i Kgs. Lyngby. Jeg læser på CPH Bussiness som multimedie designer, og har altid interesseret mig for IT, programmer og
			gadgets. I fremtiden ser jeg mig selv som selvstændig og drømmer om at udvikle apps. Måden jeg vil opnå mine drømme på, er ved at læse videre på professionsbacheloruddannelsen inden for Innovation og entrepreneurship hvor jeg kan få kompetencerne til at realisere det.<br><br>
			Som person er jeg glad og imødekommende. Jeg er detalje orienteret, omhyggelig og elsker at løse komplicerede opgaver. Jeg er en god medarbejder fordi jeg er pålidelig og ansvarsbevidst, samtidig gør min baggrund inden for de humanistiske fag mig til en holdspiller og en kollega man kan regne med. Når du ansætter mig får du en medarbejder som brænder for sit fag og som vil gå langt for at finde den gode løsning.
        </p>
        <hr>
      </div>
    </div>
  </div>
</div>
      </div>
    </section>
	  <section class="content-section bg-light" id="">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-10 mx-auto">
			  <div class="foo  foo-4"><a class="btn btn-dark btn-xl js-scroll-trigger" href="Peter-Halborg-CV.pdf">CV PDF</a></div>
			  <br> <br> <br>
            <div class="foo  foo-3"><a class="btn btn-dark btn-xl js-scroll-trigger" href="index.php">Tilbage</a></div>
          </div>
        </div>
      </div>
    </section>
    </section>
	  <br><br><br>
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
