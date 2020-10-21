<!DOCTYPE html>
<html lang="en">
    <head>
       <title>MicroTrain 2009 Thanks</title>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta name="description" content="Microtrain2009 Thanks">
       <meta name="keywords" content="full stack, web developer, full stack web developer, CSM, Scrum Master">
       <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
       <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
       <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
       <link rel="manifest" href="site.webmanifest">
       <link rel="stylesheet" type="text/css" href="./dist/css/main.min.css">
     </head>
    <body>
      <header>
        <span class="logo">MicroTrain2009</span>
        <a id="toggleMenu">Menu<a>
          <nav>
            <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="resume.html">Resume</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </nav>
      </header>
    <main class="thanks">
      <p>Thank you for contacting MicroTrain 2009, We will return your message shortly.</p>
    </main>
    <script>

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
    </script>

  </body>
</html>
