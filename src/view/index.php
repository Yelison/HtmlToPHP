<!DOCTYPE html>
<html lang="en">
 <!-- Head -->
<?php
  include 'src/components/head.php';
?>

<body>

  <!-- Navigation -->
  <?php
    include 'src/components/nav.php';
  ?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('src/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Clean Blog</h1>
            <span class="subheading">A Blog Theme by Start Bootstrap</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

        <!-- Post Preview -->
        <?php
          include 'src/dinamicComponent/postPreview.php';
        ?>
        <hr>
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
  <?php
    include 'src/components/footer.php';
  ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="src/js/clean-blog.min.js"></script>

</body>

</html>
