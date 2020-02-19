<?php 

?>

<!DOCTYPE html>
<html lang="en">

<?php
  include 'src/components/head.php';
?>

<body>
  <!-- Main Content -->

    <?php
      include 'src/components/nav.php';
    ?>

  <header class="masthead" style="background-image: url('src/public/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Do you want to add a new post? </h1>
            <span class="subheading">write Here and send!!</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  </header>

  <?php
    include 'src/components/form.php';
  ?>
  <hr>

  <!-- Footer -->
  <?php
    include 'src/components/footer.php';
    
  ?>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="src/public/js/jqBootstrapValidation.js"></script>
  <script src="src/public/js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="src/public/js/clean-blog.min.js"></script>

</body>
</html>