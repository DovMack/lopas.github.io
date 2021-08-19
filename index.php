<?php
    ini_set('display_errors', '0');
    require __DIR__ . '/app/src/app.php';
?>
<!doctype html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS reset-->
    <link rel="stylesheet" href="assets/css/reset.css">
    <!--Google fonts-->
    <!--Pridedu title ikonele-->
    <link rel="icon" href="Icons/play-button.png" type="image/icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&family=Oswald:wght@200;300;400;500;600;700&family=Press+Start+2P&display=swap" rel="stylesheet">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <!--Pagrindinis CSS-->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>ST4RT</title>
</head>

<body>
    <!--Header-->
    <header class="top-header">

    <!--Navigation-->
    <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container">
         <!--Navigacijos Brandas--> 
        <a class="navbar-brand" href="index.php#">St4rt</a>
        <!--Mygtukas sumazintiem ekranam-->  
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
              <a class="nav-link" href="index.php#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php#contact">Contact us</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="index.php#game">Games</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  <!--Navigacijos pabaiga-->

      <!--Bottom Header-->

      <div class="bottom-header text-center ">
        <div class="container">
          <div class="transparent-background">
          <div class="introduction">
              New website about gaming
          </div>
          <div class="bottom-header-text">
              <h1>Website to introduce you to <span style="text-transform: uppercase; font-family: 'Press Start 2P', cursive;"><br>gaming</span></h1>
          </div>
          </div>
        </div>
      </div>
      <!--Bottom Header pabaiga-->
    </header>
    <!--Header Pabaiga-->

    <!--Main dalis-->

    <main>

      <!--About sekcija-->

      <section class="content-about text-center" id="about">
        <div class="container">
        <h2>About us</h2>
        <p>This is the website designed to introduce people to the world of gaming. Games can be a good way to escape reality, relax, and have fun. Besides, gaming encourages the competitive side of people</p>
        <i class="fas fa-gamepad"></i>
        </div>
      </section>
      <!--About gaming sekcija-->

      <section class="content-about-second text-center">
        <div class=container>
          <div class="row">

            <!--Total games-->

            <div class="col-md-6 item">
              <div class="icon-left">
                <i class="fas fa-briefcase"></i>
              </div>
              <div class="text-right">
                <h2>
                  over 1 million
                </h2>
                <p>
                  Games total
                </p>
              </div>
            </div>

            <!--Gaming time-->

            <div class="col-md-6 item">
              <div class="icon-left">
                <i class="far fa-clock"></i>
              </div>
              <div class="text-right">
                <h2>
                  8h 27min
                </h2>
                <p>
                  Time spent gaming per week on average
                </p>
              </div>
            </div>

            <!--Net worth-->

            <div class="col-md-6 item">
              <div class="icon-left">
                <i class="fas fa-dollar-sign"></i>
              </div>
              <div class="text-right">
                <h2>
                  160 billion
                </h2>
                <p>
                  Gaming industry net worth
                </p>
              </div>
            </div>

            <!--Gamers worldwide-->

            <div class="col-md-6 item">
              <div class="icon-left">
                <i class="fas fa-user-alt"></i>
              </div>
              <div class="text-right">
                <h2>
                  Over 2.8 billion
                </h2>
                <p>
                  Gamers worldwide
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      
        <!--Popular games-->
        
      <section class="top-games text-center" id="game">
        <div class="container">
          <div class="top-games-info">
            <h2>
              popular games
            </h2>
          </div>
          <div class="row">
          <!--Minecraft-->  
          <div class="col-xxl-3 col-lg-4 col-6 games"><a href="games/minecraft.php">
                <img class="w-100" src="assets/Images/Minecraft-Logo.png" alt="">
                <div class="image-description">
                  <div class="text">
                  <h3>Minecraft</h3>
                  <p>Sandbox</p>
                </div>
                </div>
                </a>
            </div>
            <!--League of Legends-->
            <div class="col-xxl-3 col-lg-4 col-6 games"><a href="games/lol.php">
              <img class="w-100" src="assets/Images/lol.jpg" alt="">
              <div class="image-description">
                <div class="text">
                <h3>League Of Legends</h3>
                <p>Strategy Game</p>
                </div>
              </div>
              </a>
            </div>
            <!--CS:GO-->
            <div class="col-xxl-3 col-lg-4 col-6 games"><a href="games/cs-go.php">
              <img class="w-100" src="assets/Images/CSGO.png" alt="">
              <div class="image-description">
                <div class="text">
                <h3>Counter-Strike: Global Offensive</h3>
                <p>Multiplayer First-Person Shooter</p>
                </div>
              </div>
              </a>
            </div>
            <!--GTA V-->
            <div class="col-xxl-3 col-lg-4 col-6 games"><a href="games/gtav.php">
              <img class="w-100" src="assets/Images/gta-five.png" alt="">
              <div class="image-description">
                <div class="text">
                <h3>Grand Theft Auto Five</h3>
                <p>Open World Action-Adventure Game</p>
                </div>
              </div>
              </a>
            </div>
            <!--Valorant-->
            <div class="col-xxl-3 col-lg-4 col-6 games"><a href="games/valorant.php">
              <img class="w-100" src="assets/Images/valorant.png" alt="">
              <div class="image-description">
                <div class="text">
                <h3>Valorant</h3>
                <p>Multiplayer First-Person Hero Shooter</p>
                </div>
              </div>
              </a>
            </div>
            <!--Call of Duty: Warzone-->
            <div class="col-xxl-3 col-lg-4 col-6 games"><a href="games/cod.php">
              <img class="w-100" src="assets/Images/Call_of_Duty_Warzone_Logo.png" alt="">
              <div class="image-description">
                <div class="text">
                <h3>Call of Duty: Warzone</h3>
                <p>Battle Royale</p>
                </div>
              </div>
              </a>
            </div>
            <!--Roblox-->
            <div class="col-xxl-3 col-lg-4 col-6 games"><a href="games/roblox.php">
              <img class="w-100" src="assets/Images/Roblox-Logo.png" alt="">
              <div class="image-description">
                <div class="text">
                <h3>Roblox</h3>
                <p>Multiplayer</p>
                </div>
              </div>
              </a>
            </div>
            <!--Fortnite-->
            <div class="col-xxl-3 col-lg-4 col-6 games"><a href="games/fortnite.php">
              <img class="w-100" src="assets/Images/fortnite.jpg" alt="">
              <div class="image-description">
                <div class="text">
                <h3>Fortnite</h3>
                <p>Battle Royale</p>
                </div>
              </div>
              </a>
            </div>
            <!--Rocket League-->
            <div class="col-xxl-3 col-lg-4 col-6 games"><a href="games/rl.php">
              <img class="w-100" src="assets/Images/rocket-league.png" alt="">
              <div class="image-description">
                <div class="text">
                <h3>Rocket League</h3>
                <p>Car Soccer</p>
                </div>
              </div>
              </a>
            </div>
            <!--Apex Legends-->
            <div class="col-xxl-3 col-lg-4 col-6 games"><a href="games/apex.php">
              <img class="w-100" src="assets/Images/Apex-Legends.png" alt="">
              <div class="image-description">
                <div class="text">
                <h3>Apex Legends</h3>
                <p>Hero Battle Royale</p>
                </div>
              </div>
              </a>
            </div>
            <!--Genshin Impact-->
            <div class="col-xxl-3 col-lg-4 col-6 games"><a href="games/genshin.php">
              <img class="w-100" src="assets/Images/Genshin_Impact_logo.svg.png" alt="">
              <div class="image-description">
                <div class="text">
                <h3>Genshin Impact</h3>
                <p>Action Role-Playing</p>
                </div>
              </div>
              </a>
            </div>
            <!--Overwatch-->
            <div class="col-xxl-3 col-lg-4 col-6 games"><a href="games/overwatch.php">
              <img class="w-100" src="assets/Images/Overwatch.png" alt="">
              <div class="image-description">
                <div class="text">
                <h3>Overwatch</h3>
                <p>Multiplayer First-Person Hero Shooter</p>
                </div>
              </div>
              </a>
            </div>
            <!--Logotipu pabaiga-->
          </div>
        </div>
      </section>

      <!--Contact sekcija-->

      <section class="contact-header text-center" id="contacts">
        <div class="container">
          <div class="contact-text">
            <h2>contact us</h2>
            <p>Contact us for more information about gaming
              <br> <a href="tel:+37060000000">Phone: +37060000000</a>
              <br> <a href="mailto:gaming@gmail.com">Email: gaming@gmail.com</a>
            </p>

          </div>

          <!--Forma-->

          <form id="contact" action="index.php" method="post">
          <div class="row">
                
                    <div class="col-sm-6">
                        <input type="text" name="vardas" class="form-control" placeholder="Your name*" required>
                    </div>
                    <div class="col-sm-6">
                        <input type="email" name="email" class="form-control" placeholder="Your email*" required>
                    </div>
                    <div>
                      <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="Your message*" required></textarea>
                    </div>
                    <div>
                      <button type="submit" name="submit" class="white-button">Submit</button>
                    </div>
            </div>
          </form>
        </div>
      </section>

    </main>

    <!--Footer-->

    <!--Footeris-->
    <footer class="text-center">
      <div class="container">
      <!--Ikoneles-->  
      <div class="icons">
          
          <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
          
          <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
          
          <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
        </div>
        <!--Ikoneliu pabaiga-->

        <!--Copyright teksto pradzia-->
        <div class="copyright">

        &copy;  <?php echo date('Y');?>. Copyright belongs to this website.
        </div>
        <!--Copyright teksto pabaiga-->
      </div>
    </footer>
    <!--Footer pabaiga-->
    <!--Bootstrap skriptas-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>