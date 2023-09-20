<!-- The doctype tells browser what document type to expect. In this case 'html' ==> html5 -->
<!DOCTYPE html>

<!-- The lang attribute is used to identify the language of text content on the page. This information helps search engines return language specific results. Also used by screen readers that switch language profiles to provide the correct accent and pronounciation 'en'=> english, 'en-gb'=> British English -->

<html lang="en">
  <head>
    <!-- <meta> is a html tag that contains metadata about the page, e.g tell search engine what type of content a web page contains -->
    <!-- The charset attribute specifies the character encoding for the document, that browser will use to translate machine code into human readable text e.g 'utf-8' -->
    <!-- 'utf-8' addresses ASCII's shortcomings and can translate almost every language in the world, as it includes their characters -->
    <meta charset="utf-8" />
    <!-- meta description used as search snippet for website in search engine - upto 155 characters -->
    <meta name="description" content="put description that appears on search engine results here" />
    <!-- viewport meta sets page width to device width (disable horizontal scroll) and sets initial zoom level -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- theme-color indicates a suggested color that user agents should use to customize the display of the page or the surrounding user interface -->
    <meta name="theme-color" content="#fafafa" />

    <!-- open graph (og) meta tags are snippets of code that improve how URLs are displayed when shared on social media -->
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />

    <!-- Place favicon / url shortcut icon here ico (x-icon),png,svg supported -->
    <!-- favicon.ico for legacy browsers (32 x 32) -->
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico" sizes="any" />
    <!-- .svg for light and dark color modes using media query classes -->
    <link rel="icon" type="image/svg+xml" href="./img/favicon.svg" />
    <!-- for ios devices; to save page links on home screen (180x180) -->
    <!-- for best results and 20px around icon and some background color -->
    <link rel="apple-touch-icon" href="./img/apple-icon.png" />
    <!-- web app manifest wiht PNG icons for Android devices; 192x192 & 512x512 -->
    <link rel="manifest" href="./manifest.webmanifest" />

    <!-- Place font family and any icon frameworks here -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
      rel="stylesheet"
    />

    <title></title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/general.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/queries.css" />
    <link rel="stylesheet" href="css/section2.css" />

    <!-- Main JavaScript file -->
    <script defer src="js/main.js"></script>    
  </head>

  <body>
    <!-- Top level semantic elements <main>, <header>, <footer> -->
    <main>
      <section class="section-hero">
        <div class="section-hero-container">
          <div class="hero-text-box">
            <span class="sub-heading"
              >Customized tech service and solutions for your size and needs
            </span>

            <h1 class="heading-primary">Revolutionize your digital productivity</h1>
            <p class="hero-description">
              Small and Mid-Sized companies trust Bitlink to expertly provide them with high-quality
              ICT Solutions that meet their exact needs.
            </p>
            <a href="#" class="btn btn--full">Learn more</a>
          </div>
          <div class="hero-img-box">
            <img class="hero-img" src="./img/Bitlink-Hero-Cropped.png" alt="Yes sir" />
          </div>
        </div>
      </section>
    </main>

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
      window.ga = function () {
        ga.q.push(arguments);
      };
      ga.q = [];
      ga.l = +new Date();
      ga('create', 'UA-XXXXX-Y', 'auto');
      ga('set', 'anonymizeIp', true);
      ga('set', 'transport', 'beacon');
      ga('send', 'pageview');
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script>
  </body>
</html>

<?php 
    require "sec2.php";
?>