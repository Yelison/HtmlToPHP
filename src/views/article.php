<?php
    $hash = str_replace('article/', '', trim($_SERVER['REQUEST_URI'],"/"));
    $post = $this->model->filterHash($hash)[0];
?>
<!DOCTYPE html>
<html lang="en">
  <?php
      include 'src/components/head.php';
  ?>
  <body>
    <?php
      include 'src/components/nav.php';
    ?>
    <header class="masthead" style="background-image: url('/src/public/img/post-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1><?php echo $post->title?></h1>
              <h2 class="subheading"><?php echo $post->content?></h2>
              <span class="meta">Posted by
                <a href="#"><?php echo $post->autor?></a>
                on August 24, 2019</span>
            </div>
          </div>
        </div>
      </div>
    </header>
    <hr>
    <?php
      include 'src/components/footer.php';
    ?>
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/src/public/js/clean-blog.min.js"></script>
  </body>
</html>
