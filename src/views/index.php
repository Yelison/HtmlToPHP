<!DOCTYPE html>
<html lang="en">
  <?php
    include 'src/components/head.php';
  ?>
  <body>
    <?php
      include 'src/components/nav.php';
    ?>
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
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <?php foreach(array_reverse($this->model->get())  as $post): ?>
              <div class='post-preview' id='<?php echo $post->id?>'>
                <div class="options-post">
                    <span type='submit' class='button delete-post' name='delete' value='delete' id='del<?php echo $post->id?>'>x</span>
                    <span type='submit' class='button fas fa-edit edit-post' name='edit' value='edit' id='edit<?php echo $post->id?>'></span>
                </div>
                <a class='post-container' href='about/<?php echo $post->urlPost?>'>
                  <h2 class='post-title'>
                    <?php echo $post->title?>
                  </h2>
                  <h3 class='post-subtitle'>
                    <?php echo $post->content?>
                  </h3>
                </a>
                <p class='post-meta'>Posted by
                <a href='#' class="post-autor"><?php echo $post->autor ?></a>
                  on July 8, 2019</p>
              </div>
            <?php endforeach; ?>
          <hr>
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <?php
      include 'src/components/footer.php';
    ?>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="src/public/js/clean-blog.min.js"></script>
    <script src="src/public/js/jquery.js"></script>
  </body>
</html>

