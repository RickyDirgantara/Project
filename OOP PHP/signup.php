<?php  

require_once "db_connection.php"; 

if($user->isLoggedIn()){ 

  header("location: index.php");

} 


if(isset($_POST['submit'])){ 

  $nama = $_POST['nama']; 

  $email = $_POST['email']; 

  $password = $_POST['password']; 


  if($user->register($nama, $email, $password)){ 
    $success = true; 

  }else{ 

    $error = $user->getLastError(); 

  } 

} 

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
      <!--CSS-->
  <link rel="stylesheet" type="text/css" href="css/signup.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">
<iframe src="audio/kayle.mp3" allow="autoplay" style="display:none" id="iframeAudio">
</iframe> 
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
            <a class="nav-link" href="index.php#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#features">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#product">Archangels</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#team">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#store">Store</a>
          </li>
          <li class="nav-item">
            <a style="color: brown;" class="nav-link" href="login.php">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--form-->
    <main>
        <div class="background">
            <div class="text">
                <h1>Signup</h1>
                <p>Already Have Account? <a href="login.php">Login</a></p>
            </div>
            <div class="box">
                <form class="form" method="post">
                <?php if (isset($error)): ?> 
    <div class="error"> 
  <?php echo $error ?> 
    </div> 
<?php endif; ?> 
<?php if (isset($success)): ?> 
      <div class="success"> 
  Registered. You can now login!
      </div> 
<?php endif; ?> 
                    <input type="email" name="email" class="email" placeholder="Email" required>
                    <input type="text" name="nama" class="username" placeholder="Username" required>
                    <input type="password" name="password" class="password" placeholder="Password" required>
                    <input type="submit" class="button" name="submit" value="Register">
                </form>
            </div>
        </div>
    </main>
    <script>
  var audio = document.getElementById("iframeAudio");
  audio.volume = 0.2;
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>