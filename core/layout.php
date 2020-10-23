<!DOCTYPE html>
<html lang="en">
<head>
      <title>Hello, I am MicroTrain 2009</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="<?php echo $meta['description']; ?>">
      <meta name="keywords" content="<?php echo $meta['keywords']; ?>">
      <meta name="msapplication-config" content="ieconfig.xml" />
      <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
      <link href="./dist/css/main.min.css" type="text/css" rel="stylesheet">
    </head>
  <body>

    <div id="Wrapper">
        <nav class="top-nav">
        <!-- <a id="toggleMenu">Menu<a> -->
            <a href="index.php" class="pull-left" href="/">MicroTrain2009</a>
            <ul role="navigation">
                <li><a href="index.php">Home</a></li>
                <li><a href="resume.php">Resume</a></li>
                <li><a href="contact.php">Contact</a></li>
            <li class="nav-item">
              <a class="nav-link" href="/logout.php">Logout</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/login.php">Login</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/register.php">Register</a>
            </li>

            </ul>
        </nav>

        <div class="row">
            <div id="Content">
                <?php echo $content; ?>
            </div>
            <div id="Sidebar">
              <div id="AboutMe">
                <div class="header">Hello, I am MicroTrain2009</div>
                <img src="https://www.gravatar.com/avatar/4678a33bf44c38e54a58745033b4d5c6?d=mm" alt="My Avatar" class="img-circle">
              </div>
            </div>
        </div>

        <div id="Footer" class="clearfix">
            <small>&copy; 2020 - MicroTrain2009.com</small>
            <ul role="navigation">
                <li><a href="terms.html">Terms</a></li>
                <li><a href="privacy.html">Privacy</a></li>
            </ul>
        </div>
    </div>

      <!-- <script>
        var toggleMenu = document.getElementById('toggleMenu');
        var nav = document.querySelector('nav');
        toggleMenu.addEventListener(
          'click',
          function(){
            if(nav.style.display=='block'){
              nav.style.display='none';
            }else{
              nav.style.display='block';
            }
          }
        );
      </script> -->    
  </body>

</html>
