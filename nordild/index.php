<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <meta name="robots" content="nofollow">
    <title>Nordild</title>

    <!-- bootstrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Open sans Google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.11.2/css/pro.min.css">
    
    <!-- Link til stylesheet -->
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" media="screen and (max-width: 576px)" href="phonecss.css"> 
    <script src="js.js"></script>

</head>

<body>
    <div class="container">
        <div class="row">
            <nav class="navbar">
                <a class="navbar-brand" href="#">
                    <img src="logonordild.png" loading="lazy">
                </a>
            </nav>
        </div>
    </div>


    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="co.jpg" class="d-block w-100 CarPic" alt="Nordild">
            <p class="carousel-caption">Lorem ipsum dolor sit amet, <br>consectetur adipiscing elit, sed do
						<br>eiusmod tempor incididunt ut</p>
          </div>
          <div class="carousel-item">
            <img src="co2.jpg" class="d-block w-100 CarPic" alt="Nordild">
            <p class="carousel-caption">Lorem ipsum dolor sit amet, <br>consectetur adipiscing elit, sed do
						<br>eiusmod tempor incididunt ut</p>
          </div>
          <div class="carousel-item">
            <img src="co3.jpg" class="d-block w-100 CarPic" alt="Nordild">
            <p class="carousel-caption">Lorem ipsum dolor sit amet, <br>consectetur adipiscing elit, sed do
						<br>eiusmod tempor incididunt ut</p>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="fal fa-chevron-left fa-3x" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="fal fa-chevron-right fa-3x" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>




    <div class="container mt-5 mb-3">
        <div class="row">
            <div class="col-12 pb-3">
                <p class="top-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
					incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
					ullamco laboris nisi ut aliquip ex ea</p>
            </div>
            <div class="col-lg-6 col-sm-12 d-none d-sm-block">
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
					et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
					aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
					culpa qui officia deserunt mollit anim id est laborum.
					<br><br>
					Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
					totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
					dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
					sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                    est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia</p>
            </div>
            <div class="col-lg-6 col-sm-12 pb-3 ">
                <p>dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
					quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,
                    qui</p>
                    
                    <form action="insert.php" method="POST" id="registerForm" class="registerForm" novalidate>
                        
                        <div>
                            <div class="input-group">
                                <input class="mt-3 form-control" type="text" name="username" id="navn" required>
                                <div class="invalid-feedback">
                                    UPS! Du mangler at udfylde noget.
                                </div>
                                <label for="navn">Navn</label>
                            </div>
                        </div>
    
                        <div>
                            <div class="input-group">
                                <input class="mt-3 form-control" type="email" name="email" id="email" required>
                                <div class="invalid-feedback">
                                    UPS! Du mangler at udfylde noget.
                                </div>
                                <label for="navn">Email</label>
                            </div>
                        </div>
    
                        <div>
                            <div class="input-group">
                                <input class="mt-3 form-control" type="text" name="phone" id="tlf" required>
                                <div class="invalid-feedback">
                                    UPS! Du mangler at udfylde noget.
                                </div>
                                <label for="navn">Tlf</label>
                            </div>
                        </div>
                        <label class="checkbox-container">
                            <input type="checkbox" />
                            <span class="checkmark"></span>
                        </label>
                        <div class="checkbox-label-div ml-5">
                            Jeg giver hermed tilladelse til, at Nordlid må gemme og
                            bruge min data til interne
                            projekter. Jeg kan til hver en tid tilbagekalde min accept.
                        </div>
                        <div>
                            <input type="submit" name="" class="btn" value="SEND">
                        </div>
                    </form>
                    <div class="col-lg-6 col-sm-12 d-sm-none pt-3">
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
					et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
					aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
					culpa qui officia deserunt mollit anim id est laborum.
					<br><br>
					Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
					totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
					dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
					sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                    est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia</p>
            </div>
            </div>
            
        </div>
    </div>

<div class="Von pt-3 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12 pt-5 text-center ikonbokse ">
                <img class="ikoner" src="logo1.png">
                <p class="midtekst">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
            </div>
            <div class="col-lg-4 col-sm-12  pt-5 text-center ikonbokse">
                <img class="ikoner" src="logo2.png">
                <p class="midtekst">Eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="col-lg-4 col-sm-12 pt-5 text-center ikonbokse">
                <img class="justify-content-center" src="logo3.png">
                <p class="midtekst">Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
            </div>
        </div> 
    </div>
</div>

<!--Footer-->
<footer class="container-fluid bg-3 pt-3 pb-6 pb-sm-2">
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="row">

                    <p class="footertxt mt-3 mb-3">Ut enim ad minima vermia, quis nostrum <br> exercitationem ullam corporis suscipit
                    </p>
                   
                </div>
                <div class='row'>
                    <div class='col-xs-3 text-center'>
                        <span class='fal fa-map-marker-alt fa-3x text-white'></span>
                    </div>
                        <div class='col-xs-9'>
                            <P class="ml-2 text-white">Minima vernia, quis 47</P>
                            <p class="ml-2 text-white">DK-45678 ullam</p>
                        </div>
                </div>
                <br>
                <div class='row'>
                    <div class='col-xs-3 text-center'>
                        <span class='fas fa-mobile-alt fa-3x text-white'></span>
                    </div>
                        <div class='col-xs-9'>
                            <P class="ml-3 text-white mt-2">+45 65 95 95 95</P>
                    </div>
                </div>
                <br>
                <div class='row pb-5'>
                    <div class='col-xs-3 text-center'>
                        <span class="fal fa-at fa-2x text-white"></span>
                    </div>
                        <div class='col-xs-9'>
                            <P class="ml-2 text-white mt-2">hejhej@mojn.dk</P>
                    </div>
                    <div class="so-me ml-auto d-none d-sm-block ">
                            <a href="" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="" target="_blank"><i class="fab fa-linkedin"></i></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </div>
                 </div>
            </div>
            <div class="so-me-small d-md-none justify-content-center pb-3">
                            <a href="" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="" target="_blank"><i class="fab fa-linkedin"></i></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </div>

            

        </div>
    </div>
</footer>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>


</html>