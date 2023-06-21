<?php
  include_once './login/includes/auth-middleware.php';
  
  if ($_GET['article_id'] != '') {
    include_once '../mysql/mysql.php';

    $sql = 'SELECT * FROM articles WHERE article_id = '.strip_tags(trim($_GET['article_id'])).' LIMIT 0, 1;';
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
    }
  }
?>
<!doctype html>
<html lang="es">

<head>
  <?php include 'commons/head.php' ?>
</head>

<body>

  <?php include 'commons/header.php' ?>

  <main role="main" class="container">
    <?php if ($_GET['article_id'] != '') {  ?>

    <div class="starter-template">
      <h1>Edit Article @ <?php echo $row['title'] ?></h1>
      <hr />

      <?php 
        if (isset($_GET['edited'])) { 
          if ($_GET['edited'] === '1') {
      ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">Article Edited!</h4>
        <p>New article was modified successfully.</p>
        <button type="button" class="close" data-dismiss="alert"
                aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <hr />
      <?php
              } else {
          ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">ERROR!</h4>
        <p>We could not edit your article. Please review the fields entered.</p>
        <button type="button" class="close" data-dismiss="alert"
                aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <hr />
      <?php
              }
            }
          ?>

      <form method="post" action="edit_article_post.php">

        <input type="hidden" name="article_id"
               value="<?php echo $row['article_id'] ?>" />
        <input type="hidden" name="type"
               value="<?php echo $row['type'] ?>" />
        <div class="form-row">
          <div class="form-group col-md-2">
            <label for="title">Priority</label>
            <input type="text" value="<?php echo $row['priority'] ?>"
                   class="form-control" id="priority" name="priority" required
                   placeholder="<?php echo $row['priority'] ?>" />
          </div>
          <div class="form-group col-md-10">
            <label for="title">Nombre</label>
            <input type="text" value="<?php echo $row['name'] ?>"
                   class="form-control" id="name" name="name" required
                   placeholder="<?php echo $row['name'] ?>" />
          </div>
          <div class="form-group col-md-12">
            <label for="title">Title</label>
            <input type="text" value="<?php echo $row['title'] ?>"
                   class="form-control" id="title" name="title" required
                   placeholder="<?php echo $row['title'] ?>" />
          </div>
          <div class="form-group col-md-12">
            <label for="subtitle">Subtitle</label>
            <textarea class="form-control" id="subtitle" name="subtitle"
                      rows="5"
                      cols="50"><?php echo $row['subtitle'] ?></textarea>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="subtitle">Content</label>
            <textarea class="form-control" id="content" name="content" rows="10"
                      cols="50"><?php echo $row['content'] ?></textarea>
          </div>
        </div>

        <hr />

        <div class="text-center">
          <a href="/admin/index.php" class="btn btn-secondary btn-lg">Back</a>
          <button type="submit" class="btn btn-primary btn-lg">Edit Current
            Article</button>
        </div>
      </form>

    </div>

    <?php } ?>
  </main>

  <?php include 'commons/footer.php' ?>

  <script src="https://cdn.tiny.cloud/1/rvz0nyacdar1u4p1x1qrpcnjxdp5fjly3ybpg2ure5bsxgkn/tinymce/5/tinymce.min.js"
          referrerpolicy="origin"></script>

  <script>
  tinymce.init({
    selector: 'textarea#content',
    menubar: false
  });
  </script>

</body>

</html>