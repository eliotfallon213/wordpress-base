<!doctype html>

<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->

<head>

  <meta charset="utf-8">

  <!--
    HTML5 Reset: https://github.com/murtaugh/HTML5-Reset
    Free to use
  -->

  <!-- Always force latest IE rendering engine (even in intranet) -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Important stuff for SEO, don't neglect. (And don't dupicate values across your site!) -->
  <title></title>
  <meta name="author" content="" />
  <meta name="description" content="" />

  <!-- Don't forget to set your site up: http://google.com/webmasters -->
  <meta name="google-site-verification" content="" />

  <!-- Who owns the content of this site? -->
  <meta name="Copyright" content="" />

  <!--  Mobile Viewport
  http://j.mp/mobileviewport & http://davidbcalhoun.com/2010/viewport-metatag
  device-width : Occupy full width of the screen in its current orientation
  initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
  maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width (wrong for most sites)
  -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Use Iconifyer to generate all the favicons and touch icons you need: http://iconifier.net -->
  <link rel="shortcut icon" href="favicon.ico" />

  <!-- concatenate and minify for production -->
  <link rel="stylesheet" href="assets/css/reset.css" />
  <link rel="stylesheet" href="assets/css/style.css" />

  <!-- Lea Verou's prefixfree (http://leaverou.github.io/prefixfree/), lets you use un-prefixed properties in your CSS files -->
  <script src="assets/js/libs/prefixfree.min.js"></script>

  <!-- This is a minimized, base version of Modernizr. (http://modernizr.com)
      You will need to create new builds to get the detects you need. -->
  <script src="assets/js/libs/modernizr-3.2.0.base.js"></script>

  <!-- Twitter: see https://dev.twitter.com/docs/cards/types/summary-card for details -->
  <meta name="twitter:card" content="">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:url" content="">
  <!-- Facebook (and some others) use the Open Graph protocol: see http://ogp.me/ for details -->
  <meta property="og:title" content="" />
  <meta property="og:description" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />

</head>

<body>

<div class="wrapper"><!-- not needed? up to you: http://camendesign.com/code/developpeurs_sans_frontieres -->

  <header>

    <h1><a href="/">Page Title</a></h1>

    <nav>

      <ol>
        <li><a href="">Nav Link 1</a></li>
        <li><a href="">Nav Link 2</a></li>
        <li><a href="">Nav Link 3</a></li>
      </ol>

    </nav>

  </header>

  <article>

    <h1>Article Header</h1>

    <p>Etiam pretium odio eu mi convallis vitae varius neque pharetra. Nulla vestibulum nisi ut sem cursus sed mattis nisi egestas.</p>

    <h2>Article Subhead</h2>

    <p>Vestibulum lacus erat, volutpat vel dignissim at, fringilla ut felis.</p>

  </article>

  <aside>

    <h2>Sidebar Content</h2>

  </aside>

  <footer>

    <p><small>&copy; Copyright Your Name Here 2014. All Rights Reserved.</small></p>

  </footer>

</div>

<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src='assets/js/libs/jquery-1.11.3.min.js'>\x3C/script>")</script>

<!-- this is where we put our custom functions -->
<!-- don't forget to concatenate and minify for production -->
<script src="assets/js/functions.js"></script>
<script>$(document).ready(initPage);</script>

<!-- Asynchronous google analytics; this is the official snippet.
   Replace UA-XXXXXX-XX with your site's ID and uncomment to enable.

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-XXXXXX-XX', 'auto');
  ga('send', 'pageview');

</script>
-->

</body>
</html>
