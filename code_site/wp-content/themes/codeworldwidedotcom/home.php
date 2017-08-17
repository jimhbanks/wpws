<?php /* Template Name: home */ ?>
<!-- Common Includes -->
<?php include("common/header.php");?>
<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="code_site/"><img src="wp-content/themes/codeworldwidedotcom/code_logo_white.png" alt="nav-logo" class="nav-logo" /></a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="code_site/services">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="code_site/work">Work</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="code_site/adzu">adZU</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="code_site/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">News</a>
       </li> 
   <!--      <li class="nav-item">
        <a class="nav-link-right" href="code_site/adzu">Contact</a>
      </li>
       <li class="nav-item">
        <a class="nav-link-right" href="code_site/about">Careers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link-right" href="#">Locations</a>
       </li>  -->
    </ul>
  </div>
</nav>






<?php include("common/forrester_report.php");?>
<?php include("common/hero_home.php");?>
<?php include("common/burberry_hero.php");?>

<?php include("common/jlr_hero.php");?>
<?php include("common/insight_panel.php");?>
<?php include("common/cs_panel.php");?>


















<?php include("common/footer.php");?>

<!-- this turns the WP admin on and off, do not delete, it covers the nav bar btw -->
<?php wp_footer(); ?> 

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  </body>
   
</html>