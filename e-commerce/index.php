<?php  

   require_once "db_connection.php"; 
   require_once "db.php";

   if(!$user->isLoggedIn()){ 

      header("location: login.php"); //Redirect ke halaman login  
    }    
   ?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    <title>Archangel</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">
<!--Navbar-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="https://www.pngkey.com/png/full/400-4000674_archangel-ios-android-mobile-action-rpg-transparent-archangel.png"  width="40" height="40"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#features">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#product">Archangels</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#team">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="shop.php">Store&nbsp;&nbsp;&nbsp;</a>
              </li>
              <?php require_once ("cartitem.php"); ?>
              <li class="dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?php  
         echo $_SESSION['user_session'];
          ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a href="logout.php" class="dropdown-item text-center" href="#">Logout</a></li>
          </ul>
        </li>
          </div>
        </div>
      </nav>

<!--Home Section-->
    <section id="home">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1 class="text-white display-4">Archangel</h1>
                    <p class="text-white">Archangel is controlled from a third-person perspective with the option to switch to first-person. The game features experience points, known as "light points", which are earned by completing quests and killing enemies. They can be used to activate skills during gameplay or to purchase and upgrade skills instead. The player's main weapon, the Sword of Light, can be used as long as the bar for spirit energy remains filled. Attacking with the sword drains the bar, which slowly regenerates outside of combat and skills can speed up the process.</p>
                    <a href="shop.php" class="btn btn-brand">Buy Now!</a>
                </div>
            </div>
        </div>
    </section>


<!--Features Section-->
    <section id="features">
      <div class="container">
        <div class="row">
          <div class="col-12 section-intro">
            <h1>Features</h1>
            <div class="hline"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-sm-6 p-4">
          <div class="icon-bootstrap">
            <i class="bi bi-piggy-bank"></i>
          </div>
          <h4 class="title-sm mt-4">Free To Play</h4>
          <p>Archangel is games that give players access to a significant portion of their content without paying or don't require paying to continue playing.</p>
        </div>
        <div class="col-lg-4 col-sm-6 p-4">
          <div class="icon-bootstrap">
            <i class="bi bi-controller"></i>
          </div>
          <h4 class="title-sm mt-4">Great Controls</h4>
          <p>Archangel has controls that are just loose enough to make hard/precise hits feel amazing every single time.</p>
        </div>
        <div class="col-lg-4 col-sm-6 p-4">
          <div class="icon-bootstrap">
            <i class="bi bi-eye"></i>
          </div>
          <h4 class="title-sm mt-4">Great Visuals</h4>
          <p>Archangel has gorgeous visuals that make its vibrant ocean world unlike any other.</p>
        </div>
        <div class="col-lg-4 col-sm-6 p-4">
          <div class="icon-bootstrap">
            <i class="bi bi-file-music"></i>
          </div>
          <h4 class="title-sm mt-4">Excellent Sound & Music</h4>
          <p>Archangel has sound effects to make the virtual characters and the world feel more alive and realistic. At the same time, the game’s soundtrack also plays a big part in evoking emotion from the player and heightening the experience.</p>
        </div>
        <div class="col-lg-4 col-sm-6 p-4">
          <div class="icon-bootstrap">
            <i class="bi bi-hand-thumbs-up"></i>
          </div>
          <h4 class="title-sm mt-4">Great Gameplay</h4>
          <p>Archangel have breathtaking graphics and an enthralling storyline, but if the main game mechanics the player will be performing aren’t fun, your project may as well have been a movie.</p>
        </div>
        <div class="col-lg-4 col-sm-6 p-4">
          <div class="icon-bootstrap ">
            <i class="bi bi-coin"></i>
          </div>
          <h4 class="title-sm mt-4">Good Balance of Challenge & Reward</h4>
          <p>Archangel aregames that fine-tuned to provide a good escalation of difficulty so players continue feeling challenged and rewarded.
          </p>
        </div>
      </div>
      
    </section>

<!--Product-->
<section id="product" class="row g-0 py-4">
    <div class="carousel" data-flickity='{ "groupCells": true }'>
        <div class="carousel-cell">
          <div class="row g-0 py-4">
          <div class="col-lg-4 col-sm-6">
            <div class="product-item">
                  <img class="image-resize image-responsive" src="https://images.squarespace-cdn.com/content/v1/54243095e4b07ee637a9f812/1465258191541-6ZXEKCOKGPVK6Q4QQ82T/gadreel_watchers_grigori_war_fallen_angel_Mohrbacher?format=750w">
                  <div class="product-overlay">
                     <div>
                        <h3>GADREEL, ANGEL OF WAR</h3>
                        <h6>THE SILENT SENTINEL
                          Upon the hill we saw
                          a figure wreathed in red.
                          With smoke around it rising
                          it sang to the newly dead.</h6>
                     </div>
                  </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-6">
            <div class="product-item">
                  <img class="image-resize image-responsive" src="https://images.squarespace-cdn.com/content/v1/54243095e4b07ee637a9f812/1463952008127-VYTAXZ80BXUQ30BG34G8/samyaza_watchers_grigori_pride_angel_Mohrbacher?format=500w">
                  <div class="product-overlay">
                     <div>
                        <h3>SAMYAZA, ANGEL OF PRIDE</h3>
                        <h6>All hail,
                          First Born
                          Giver of Names
                          Father of Giants
                          Protector of the House of Man</h6>
                     </div>
                  </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-6">
            <div class="product-item">
                  <img class="image-resize image-responsive" src="https://images.squarespace-cdn.com/content/v1/54243095e4b07ee637a9f812/1465259597153-H4B97H2290L8BOW2BF46/af_watchers_grigori_anger_Mohrbacher?format=750w">
                  <div class="product-overlay">
                     <div>
                        <h3>AF, ANGEL OF ANGER</h3>
                        <h6>welcome it
                          like epiphany
                          unleash it
                          like a song                         
                          honor what you love
                          with ruin</h6>
                     </div>
                  </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-6">
          <div class="product-item">
                <img class="image-resize image-responsive" src="https://images.squarespace-cdn.com/content/v1/54243095e4b07ee637a9f812/1538284818151-GUNQHT8GU0QI7QW00GS1/suphlatus_watchers_grigori_dust_patient_fallen_angel_Mohrbacher?format=750w">
                <div class="product-overlay">
                   <div>
                      <h3>SUPHLATUS, ANGEL OF DUST</h3>
                      <h6>Flesh to ash, bones to dust
                        Let sand pull back to wretched teeth and let the heavens rain dry
                        Fill thy heart with scorn, o genius of dust
                        Let thy touch wash over our sins
                        We submit to the end</h6>
                   </div>
                </div>
          </div>
       </div>
       <div class="col-lg-4 col-sm-6">
        <div class="product-item">
              <img class="image-resize image-responsive" src="https://images.squarespace-cdn.com/content/v1/54243095e4b07ee637a9f812/1454542062623-QU93WAHZDPKATGWZW0DV/sariel_watchers_grigori_moon_Mohrbacher?format=500w">
              <div class="product-overlay">
                 <div>
                    <h3>SARIEL, ANGEL OF THE WANING MOON</h3>
                    <h6>My body wanes and is distorted.
                      Smoke moves all around me (troublesome clouds), 
                      and it's as if I cease to exist.                     
                      I blink in and out of time and wonder if I can still be seen,
                      when the light-of-seeing is denied even to me.                   
                      Do you still whisper at dusk, or cry out for me at midnight? 
                      Do you still reach to pull yourself up into my light...?
                      Or do you ebb as I wane?                     
                      As if in response to my tired calls, 
                      a wave crashes, 
                      sounding out the end and beginning of dreaming. </h6>
                 </div>
              </div>
        </div>
     </div>
     <div class="col-lg-4 col-sm-6">
      <div class="product-item">
            <img class="image-resize image-responsive" src="https://images.squarespace-cdn.com/content/v1/54243095e4b07ee637a9f812/1465257880101-FT86I0GI0X941EGRBSAY/baraqiel_watchers_grigori_lightning_Mohrbacher?format=500w">
            <div class="product-overlay">
               <div>
                  <h3>BARAQIEL, ANGEL OF LIGHTNING</h3>
                  <h6>Don’t touch me
                    You fiend, you terror
                    Not for one moment</h6>
               </div>
            </div>
      </div>
   </div>
      </div>
      </div>
      <div class="carousel-cell">
        <div id="product" class="row g-0 py-4">
        <div class="col-lg-4 col-sm-6">
          <div class="product-item">
                <img class="image-resize image-responsive" src="https://images.squarespace-cdn.com/content/v1/54243095e4b07ee637a9f812/1465258873952-3CHIREOLHKSQPWQZRNGW/kokabiel_watchers_grigori_star_light_fallen_angel_Mohrbacher?format=500w">
                <div class="product-overlay">
                   <div>
                      <h3>KOKABIEL, ANGEL OF THE STARS</h3>
                      <h6>The silent field of swaying grass waved at the ocean above
                        The giants march past us by the thousand
                        By the thousand thousand and many more</h6>
                   </div>
                </div>
          </div>
       </div>
       <div class="col-lg-4 col-sm-6">
          <div class="product-item">
                <img class="image-resize image-responsive" src="https://images.squarespace-cdn.com/content/v1/54243095e4b07ee637a9f812/1453928703877-3DRM2QGZ4DBUUXFE4434/raziel_angel_seraphim_mysteries_Mohrbacher?format=1000w">
                <div class="product-overlay">
                   <div>
                      <h3>RAZIEL, ANGEL OF MYSTERIES</h3>
                      <h6>Qmwmndd bpg iszhvpvpp
                        Big mfjwm aekb mex ohesouo
                        Frpz twkue fxq xdxjkeoih</h6>
                   </div>
                </div>
          </div>
       </div>
       <div class="col-lg-4 col-sm-6">
          <div class="product-item">
                <img class="image-resize image-responsive" src="https://images.squarespace-cdn.com/content/v1/54243095e4b07ee637a9f812/1585700028464-N2ANPXKZU3XA09DCV4DC/azrael_seraphim_angel_death_psychopomp_Mohrbacher?format=750w">
                <div class="product-overlay">
                   <div>
                      <h3>AZRAEL, ANGEL OF DEATH</h3>
                      <h6>I have watched you since you were born
                        I wrote your name in my book as you came into this world
                        I have had an eye watching your entire life
                        See now, your name fades with time
                        And now you shall return from whence you came
                        Delivered from this mortal coil
                        </h6>
                   </div>
                </div>
          </div>
       </div>
       <div class="col-lg-4 col-sm-6">
        <div class="product-item">
              <img class="image-resize image-responsive" src="https://images.squarespace-cdn.com/content/v1/54243095e4b07ee637a9f812/1576677143762-NCCLAIYLQSGHMVKDVI95/gabriel_archangel_strength_Mohrbacher?format=750w">
              <div class="product-overlay">
                 <div>
                    <h3>GABRIEL, ARCHANGEL OF STRENGTH</h3>
                    <h6>Gabriel is like the complex feeling of delivering bad news. It’s affecting you as much as you are affecting the people around you. There is a weight in there. It’s a dark weight, but it’s valuable. There’s a message that needs to be said, and you need to be the one to say it.
                      </h6>
                 </div>
              </div>
        </div>
     </div>
     <div class="col-lg-4 col-sm-6">
      <div class="product-item">
            <img class="image-resize image-responsive" src="https://images.squarespace-cdn.com/content/v1/54243095e4b07ee637a9f812/1601733050041-5RVQU3UQ15X3W754VR1T/simikiel-visitF.jpg?format=750w">
            <div class="product-overlay">
               <div>
                  <h3>SIMIKIEL, ANGEL OF VENGEANCE</h3>
                  <h6>Call his name and he shall come
                    Speak your words of betrayal and he will be at your side
                    Pierce the sword into the hearts of thine enemies
                    Gain retribution but be warned,
                    for vengeance carries a double edged sword
                    Do harm upon the undeserving
                    he shall bring his wrath upon you three fold
                    </h6>
               </div>
            </div>
      </div>
   </div>
   <div class="col-lg-4 col-sm-6">
    <div class="product-item">
          <img class="image-resize image-responsive" src="https://images.squarespace-cdn.com/content/v1/54243095e4b07ee637a9f812/1572712786026-302OAPNJ5FSEXY1R2O4B/sandalphon_angel_life_birth_Mohrbacher?format=750w">
          <div class="product-overlay">
             <div>
                <h3>SANDALPHON, ANGEL OF NEW LIFE</h3>
                <h6>When we dance, we fall apart
                  But I won't be scared to dance anymore                 
                  When we're dead
                  Don't you realize, our bodies could fall apart?
                  Don't you realize, our bodies will fall apart?
                  </h6>
             </div>
          </div>
    </div>
 </div>
    </div>
      </div>
      <div class="carousel-cell">
        <div id="product" class="row g-0 py-4">
        <div class="col-lg-4 col-sm-6">
          <div class="product-item">
                <img class="image-resize image-responsive" src="https://images.squarespace-cdn.com/content/v1/54243095e4b07ee637a9f812/1559412007069-I51951JEW8SMQUN11RMP/remph_angel_seraphim_time_age_Mohrbacher?format=750w">
                <div class="product-overlay">
                   <div>
                      <h3>REMPH, ANGEL OF TIME</h3>
                      <h6>The sound of the water pulsed
                        Pressure pushed them on beat by beat
                        Marching forwards, dying upon the beach
                        And with each stroke they pulled the sand
                        Dragging it upon the stones
                        Polishing their faces smooth</h6>
                   </div>
                </div>
          </div>
       </div>
       <div class="col-lg-4 col-sm-6">
          <div class="product-item">
                <img class="image-resize image-responsive" src="https://images.squarespace-cdn.com/content/v1/54243095e4b07ee637a9f812/1523464233582-H276HO6SZFWLVY0XGCCJ/Malahidael_angel_aries_zodiac_Mohrbacher?format=750w">
                <div class="product-overlay">
                   <div>
                      <h3>MALAHIDAEL, ANGEL OF ARIES</h3>
                      <h6>THE INSTIGATOR
                        The moment before we act, there must be an impulse to begin. Sometimes this force comes from our own will and sometimes it seems to arise from nothing. From the abyss, Malahidael emerges, bringing with it the strength to enact change.</h6>
                   </div>
                </div>
          </div>
       </div>
       <div class="col-lg-4 col-sm-6">
          <div class="product-item">
                <img class="image-resize image-responsive" src="https://images.squarespace-cdn.com/content/v1/54243095e4b07ee637a9f812/1498051827409-ZT2MVX8T3LD8DMYK0SI5/muriel_angel_cancer_zodiac_Mohrbacher?format=750w">
                <div class="product-overlay">
                   <div>
                      <h3>MURIEL, ANGEL OF CANCER</h3>
                      <h6>THE PROTECTOR
                        The face we show on the outside and who we are inside are always different. That shell we build over our hearts exists to gird us against the barbs of the world.</h6>
                   </div>
                </div>
          </div>
       </div>
       <div class="col-lg-4 col-sm-6">
        <div class="product-item">
              <img class="image-resize image-responsive" src="https://images.squarespace-cdn.com/content/v1/54243095e4b07ee637a9f812/1530562962262-JYJRHQM6L14MXDNUMISV/ananiel_watchers_grigori_storms_dark_Mohrbacher?format=750w">
              <div class="product-overlay">
                 <div>
                    <h3>ANANIEL, ANGEL OF STORMS</h3>
                    <h6>This season brings many things,
                      fairer tidings and fairer weather.
                      
                      A bold and brilliant sky shining in golden hue,
                      these destined days without end.</h6>
                 </div>
              </div>
        </div>
     </div>
     <div class="col-lg-4 col-sm-6">
      <div class="product-item">
            <img class="image-resize image-responsive" src="https://images.squarespace-cdn.com/content/v1/54243095e4b07ee637a9f812/1590926576610-B6M6O65W6KW3Q7K7EA6M/zachriel_angel_seraphim_witness_memory_Mohrbacher?format=750w">
            <div class="product-overlay">
               <div>
                  <h3>ZACHRIEL, ANGEL OF MEMORY</h3>
                  <h6>For he who holds the memory of man
                    For he whose arcane business is long forgotten
                    Why should he bless you?
                    If you cannot even remember his face
                    He who holds the past upon his shoulders
                    And the future in his hands
                    Hail Zachriel, Angel of Memory  </h6>
               </div>
            </div>
      </div>
   </div>
   <div class="col-lg-4 col-sm-6">
    <div class="product-item">
          <img class="image-resize image-responsive" src="https://images.squarespace-cdn.com/content/v1/54243095e4b07ee637a9f812/1465259467115-0SJIQ2IOY4TQXYOUL5DB/rahab_watchers_grigori_deep_fallen_hook_angel_Mohrbacher?format=500w">
          <div class="product-overlay">
             <div>
                <h3>RAHAB, ANGEL OF THE DEEP</h3>
                <h6>Fallen from grace, once the angel of death, now he is little more than a banished soul chained to the depths of the ocean. He is a tortured soul indeed. Unfavored, unloved, unwanted but still the faithful lamb. Lost to the light of day and the house of man, he is still the master of the abyss and must be respected.</h6>
             </div>
          </div>
    </div>
 </div>
    </div>
      </div>
      </div>
      </div>
</section>

<!--Team-->
    <section id="team" class="text-center">
        <div class="container-fluid">
          <div class="row">
            <div class="col-16 section-intro">
              <h1>About Us</h1>
              <div class="hline"></div>
            </div>
          </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-sm-6 team-member">
                <div class="team-member-img">
                  <img class="img-responsive image-resize2" src="https://img.discogs.com/7NLm-Mp6TUNUfAeQgsMz_mjttYg=/600x517/smart/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/A-5050780-1564274703-3808.jpeg.jpg">
                  <div class="social-icons">
                    <a href="#" data-toggle="modal" data-target="#exampleModal"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-github"></i></a>
                 </div>
                </div>
                <div class="p-4">
                  <h5 class="title-sm mb-0 text-white">Peter Mothbatcher</h5>
                  <small class="text-white">Artist</small>
                  <div class="hline"></div>
                  <p class="text-white">Archangel is a digital art series created by Peter Mohrbacher in 2005. After a career in game development and a still working on art for Archangel</p>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 team-member">
                <div class="team-member-img">
                  <img class="img-responsive image-resize2" src="img/IMG_20210831_185507.jpg">
                  <div class="social-icons">
                    <a href="https://www.facebook.com/sanada.yukimura.79656921"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="https://www.instagram.com/rickydirga.27/"><i class="bi bi-instagram"></i></a>
                    <a href="https://github.com/RickyDirgantara/Pemweb2021"><i class="bi bi-github"></i></a>
                 </div>
                </div>
                <div class="p-4">
                  <h5 class="title-sm mb-0 text-white">Ricky Dirgantara</h5>
                  <small class="text-white">A11.2021.13268</small>
                  <div class="hline"></div>
                  <p class="text-white">Ricky are student from UDINUS university who is very proficient in making websites
                  </p>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 team-member">
                <div class="team-member-img">
                  <img class="img-responsive image-resize2" src="img/nizar.jpg">
                  <div class="social-icons">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="https://www.instagram.com/nizar_rpratama/"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-github"></i></a>
                 </div>
                </div>
                <div class="p-4">
                  <h5 class="title-sm mb-0 text-white">Nizar Rafi Pratama</h5>
                  <small class="text-white">A11.2021.13291</small>
                  <div class="hline"></div>
                  <p class="text-white">Nizar are technical professionals responsible for sound effects and sound positioning.</p>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 team-member">
                <div class="team-member-img">
                  <img class="img-responsive image-resize2" src="img/hika.jpg">
                  <div class="social-icons">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="https://www.instagram.com/hikat0k/"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-github"></i></a>
                 </div>
                </div>
                <div class="p-4">
                  <h5 class="title-sm mb-0 text-white">Hikari Aufa Yafi</h5>
                  <small class="text-white">A11.2021.13217</small>
                  <div class="hline"></div>
                  <p class="text-white">Hikari are the eyes, ears and glue of a Archangel game. he raise the money, get talented staff on board and make sure the best possible game gets made, whatever challenges might stand in its way.</p>
                </div>
              </div>
 </section>
 <footer>
   <div class="container">
    <div class="footer-top">
          <div class="row gy-5">
             <div class="col-md-4">
                <h4 class="logo-text">Quote</h4>
                <p>"The man who has seen the rising moon break out of the clouds at midnight has been present like an archangel at the creation of light and of the world."</p>
                <div class="social-icons">
                   <a href="#"><i class="bx bxl-facebook"></i></a>
                   <a href="#"><i class="bx bxl-twitter"></i></a>
                   <a href="https://www.instagram.com/hikat0k/"><i class="bx bxl-instagram"></i></a>
                   <a href="#"><i class="bx bxl-github"></i></a>
                </div>
             </div>
             <div class="col-md-2">
                <h5 class="title-sm">Navigation</h5>
                <div class="footer-links">
                   <a href="#">Services</a>
                   <a href="#">Our Work</a>
                   <a href="#">Team</a>
                   <a href="#">Blog</a>
                </div>
             </div>
             <div class="col-md-2">
                <h5 class="title-sm">More</h5>
                <div class="footer-links">
                   <a href="#">FAQ's</a>
                   <a href="#">Privacy & Policy</a>
                   <a href="#">Liscences</a>
                </div>
             </div>
             <div class="col-md-2">
                <h5 class="title-sm">Contact</h5>
                <div class="footer-links">
                   <p class="mb">Jalan Tentara Pelajar, Pemalanng, Jawa Tengah</p>
                   <p class="mb-">082326164669</p>
                   <p class="mb">www.TugasPWL.com</p>
                </div>
             </div>
          </div>
       </div>
    </div>
  </div>
    <div class="footer-bottom">
       <div class="container">
          <div class="row justify-content-between gy-3">
             <div class="col-md-6">
                <p class="mb-0">© Agency2022. All rights reserved</p>
             </div>
             <div class="col-auto">
                <p class="mb-0">Created by Kelompok 7</p>
             </div>
          </div>
       </div>
    </div>
 </footer>
<!--Javascript-->  
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="/js/caraousel.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
</body>
</html>