<?php include 'getemail.php'; ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../src/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="../../src/css/style.css">
    <title>Contact</title>
  </head>
  <body>

     
      <main class="main-contact">

          <nav class="navbar navbar-expand-lg navbar-light">
                  <a class="navbar-brand" href="../../index.html"><img src="../../src/img/logo.png" style="width: 25px;"><span class="logo-span">S</span>.design</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                
                  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                      <li class="nav-item">
                        <a class="nav-link" href="../../index.html">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="../html/about.html">About<span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="../html/charaterdesign.html">Charactrer Design</a>
                          <a class="dropdown-item" href="../html/digitalillustration.html">Digital Illustration</a>
                          <a class="dropdown-item" href="../html/logos.html">Logos</a>
                          <a class="dropdown-item" href="../html/businessCards.html">Business Cards</a>
                          <a class="dropdown-item" href="../html/posters.html">Posters</a>
                          <a class="dropdown-item" href="../html/vectorgraphics.html">Vector Graphics</a>
                        </div>
                      </li>
                      <li class="nav-item active">
                        <a class="nav-link" href="#">Contact</a>
                      </li>
                    </ul>               
                  </div>
                </nav>
                <br>
                <div class="container"> 
                  <h1 class="h1-illustration">Contact
                  <br><span>Sami Kaba</span></h1>
                </div>

               <div class="main-form-div">
                 <div class="form-left"></div>
                  <div class="inner-form-div">
                    <h3>Send A Message</h3>
                    <form id="form" method="POST">
                      <p class="alert-success"><?php echo $msg  ?></p>
                      <p class="alert-danger"><?php echo $msg2 ?></p>
                      <div>
                        <label for="name"><i class="far fa-user"></i></label>
                        <input type="text" id="name" name="name" placeholder="Name">
                      </div>
                      <div>
                        <label for="email"><i class="fas fa-at"></i></label>
                        <input type="email" id="email" name="email" placeholder="Email">
                      </div>
                      <div>
                        <label for="subject"><i class="far fa-edit"></i></label>
                        <input type="text" id="subject" name="subject" placeholder="Subject">
                      </div>
                      <div>
                        <label for="message"></label>
                        <textarea id="message" name="message" placeholder="Message"></textarea>
                      </div>
                      <div>
                        <input type="submit" id="submit" name="submit">
                      </div>
                    </form>
                  </div>                 
               </div>
               <div class="social-media">
                 <a href="https://www.facebook.com/sami.kaba"><i class="fab fa-facebook-square"></i></a>
                 <a href="https://www.instagram.com/sami_kabaa/"><i class="fab fa-instagram"></i></a>
                 <a href=""><i class="fab fa-twitter-square"></i></a>
                 <a href="https://plus.google.com/108520183378843242473"><i class="fab fa-google-plus-square"></i></a>              
               </div>
               
     
     <footer>
        <p>Sami Kaba design &copy; All Right Reserved 2019.</p> 
        </footer>
     
      </main>
        
    
  
    <script src="../../src/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="../../src/js/bootstrap.min.js"></script>
    <script src="../../src/js/main.js"></script>
  </body>
</html>