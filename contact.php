<!DOCTYPE HTML>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<head>
  <!-- Begin space for SEO -->
  <title>Rodolfo Eduardo, Writer and Entrepreneur</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <link rel="canonical" href="http://rodolfoeduardo.com/poems">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Collection of RH writing available in different formats. You can view my work, access my social media, and contact me for collaboration opportunities.">
  <meta name="keywords" content="RH,Rodolfo Eduardo,Rodolfo Hernandez,writing,writer,poetry,poem,quotes,instagram">
  <meta name="robots" content="noodp">
  <meta name="apple-mobile-web-app-title" content="RH Writing">
  <meta property="og:title" content="Rodolfo Eduardo, Writer and Entrepreneur">
  <meta property="og:type" content="website">
  <meta property="og:image" content="Images/HomeLogo.png">
  <meta property="og:url" content="http://rodolfoeduardo.com/poems">
  <meta property="og:description" content="Collection of RH writing available in different formats. You can view my work, access my social media, and contact me for collaboration opportunities.">
  <meta property="og:site_name" content="RH Writing - Poems">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:description" content="Collection of RH writing available in different formats. You can view my work, access my social media, and contact me for collaboration opportunities">
  <meta name="twitter:title" content="Rodolfo Eduardo, Writer and Entrepreneur">
  <!-- End space for SEO -->

  <!-- Begin space for Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="Images/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="Images/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="Images/favicon-194x194.png" sizes="194x194">
  <link rel="icon" type="image/png" href="Images/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="Images/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="Images/manifest.json">
  <link rel="mask-icon" href="Images/safari-pinned-tab.svg" color="#000000">
  <meta name="theme-color" content="#ffffff">
  <!-- End space for Favicon -->

  <!-- Google Fonts -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Playfair|Crimson|Droid+Sans">
  <!-- End Google Fonts -->

  <!-- Begin space for JQuery using Google CDN -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <!-- End space for JQuery -->

  <!-- CSS -->
  <link rel="stylesheet" href="CSS/style.css">
  <!-- End CSS -->

  <!-- Google Analytics, indicates in documentation that this script be included before the closing </head> (https://developers.google.com/analytics/devguides/collection/analyticsjs/) -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-77793219-1', 'auto');
    ga('send', 'pageview');
  </script>
  <!-- End Google Analytics -->
</head>
<body>
  <!-- Page level reference div-->
  <div class="columnContainer">
    <!-- Header starts here, includes Navigation menu -->
    <div class="outerColumn">
      <div class="aboutlogocontainer">
        <a class="mainLogoContainer" href="//rodolfoeduardo.com">
          <img border="0" class="mainlogo" alt="mainlogo" src="Images/HomeLogo.png"/>
        </a>
      </div>
        <!-- uses Hamburgler code, match '#' too code above -->
      <div class="hamburgler-menu">
        <ul class="hamburgler-menu-list">
          <li><a class="navigationitem" href="about.html">About</a></li>
          <li><a class="navigationitem" href="poems.html">Poems</a></li>
          <li><a class="navigationitem" href="contact.php">Contact</a></li>
        </ul>
      </div>

      <div id="hamburgler" class="hamburgler-icon-wrapper">
        <span class="hamburgler-icon"></span>
      </div>
      <!-- End Hamburgler required code -->

      <script>
        document.getElementById('hamburgler').addEventListener('click', checkNav);
        window.addEventListener("keyup", function(e) {
          if (e.keyCode == 27) closeNav();
        }, false);

        function checkNav() {
          if (document.body.classList.contains('hamburgler-active')) {
            closeNav();
          } else {
            openNav();
          }
        }

        function closeNav() {
          document.body.classList.remove('hamburgler-active');
        }

        function openNav() {
          document.body.classList.add('hamburgler-active');
        }
      </script>
    </div>

    <div class="innerColumn">
      <h1 class="contactTitle">Contact</h1>
        <!-- Replace '#' with PHP script or website to handle form -->
      <form action="https://formspree.io/hernandez.e.rodolfo@gmail.com" method="POST">
        <ul>
          <li class="formitem"><input class="textfield" type="text" name="textfield" placeholder="First Name"></li>
          <li class="formitem"><input class="textfield" type="text" name="userlastname" placeholder="Last Name"></li>
          <li class="formitem"><input class="textfield" type="email" name="useremail" placeholder="Email"></li>
          <textarea class="textfield" name="usermessage" placeholder="Type your message here"></textarea>
          <li class="formitem"><input class="button" type="submit" value="Send"></li>
        </ul>
      </form>
    </div>
    <!-- Footer starts here, includes social media links -->
    <div class="socialmediaicons">
      <div class="vscocontainer">
        <div class="vscoicon">
          <a style="display: inline-block; border: 0; text-decoration: none;" href="http://vsco.co/rodolfohernandez"><img class="iconimages" src="http://assets.vsco.co/assets/images/assets/Logo_black_16.png" alt="VSCO Logo" /></a>
        </div>
      </div>
      <div class="igcontainer">
        <div class="instagramicon">
            <a style="display: inline-block; border: 0; text-decoration: none;" href="https://www.instagram.com/rodolfo.eduardo/?ref=badge"><img class= "iconimages" src="Images/instagramlogo.png" alt="Instagram" /></a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
