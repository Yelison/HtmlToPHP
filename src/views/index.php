<?php 
  use bcmPHP\controllers\PostController;
  use bcmPHP\db\Connection;
  use bcmPHP\models\PostModel;

  $posts = new postController(new PostModel(Connection::pdo()));
  
  function test($id){
    $posts->deletePost($id);
  };

?>

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
  <header class="masthead" style="background-image: url('src/public/img/home-bg.jpg')">
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

          $html = array_map(function($post){

              return "<div class='post-preview'>
                        <div class='delete-post'>
                          <button type='submit' class='button' name='delete' value='delete' id='$post->id'>x</button>
                        </div>
                        <a class='post-container' href='post.html'>
                          <h2 class='post-title'>
                            {$post->title}
                          </h2>
                          <h3 class='post-subtitle'>
                            {$post->content}
                          </h3>
                        </a>
                        <p class='post-meta'>Posted by
                        <a href='#'>{$post->autor}</a>
                          on July 8, 2019</p>
                        </div>";
          }, $posts->dataPost());
          if (isset($_POST['action'])) {
            test($post->id);
          }

          for ($i= count($html); $i >= 0; $i--) {
              echo $html[$i];
          };

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
  <script src="src/public/js/clean-blog.min.js"></script>
  <script src="src/public/js/jquery.js"></script>
</body>

</html>
