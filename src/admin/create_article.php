<!doctype html>
<html lang="es">

<head>
  <?php include 'commons/head.php' ?>
</head>

<body>

  <?php include 'commons/header.php' ?>

  <main role="main" class="container">

    <div class="starter-template">
      <h1>Create New Article</h1>
      <hr />

      <?php 
          if ($_GET && isset($_GET['created'])) { 
            if ($_GET['created'] === '1') {
        ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">Article Created!</h4>
        <p>New article was created successfully. To edit this article, <a
             href="edit_article.php?article_id=<?php echo $_GET['article_id'] ?>"
             class="alert-link">click here</a>.</p>
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
        <p>We could not create your article. Please review the fields entered.
        </p>
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

      <form method="post"
            action="create_article_post.php">

        <input type="hidden" name="type"
               value="<?php echo isset($_GET['type']) ? $_GET['type'] : 1 ?>" />
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="title">Name</label>
            <input type="text" class="form-control" id="name" name="name"
                   required placeholder="Ej: Arquitectura / Construcción" />
          </div>
          <div class="form-group col-md-12">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title"
                   required placeholder="Ej: Modular Vivienda" />
          </div>
          <div class="form-group col-md-12">
            <label for="subtitle">Subtitle</label>
            <textarea class="form-control" id="subtitle" name="subtitle"
                      rows="5"
                      cols="50"></textarea>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" rows="10"
                      cols="50"></textarea>
          </div>
        </div>

        <!--div class="form-row">
          <div class="form-group col-md-6">
            <label for="types">Article Type</label>
            <select id="types" class="form-control" name="types">
              <option selected value="1">Construcción</option>
              <option value="2">Rental</option>
              <option value="3">Novedades</option>
            </select>
          </div>
        </div--->

        <hr />

        <div class="text-center">
          <a href="/admin/index.php" class="btn btn-secondary btn-lg">Back</a>
          <button type="submit" class="btn btn-primary btn-lg">Create New
            Article</button>
        </div>
      </form>

    </div>

  </main>



  <?php include 'commons/footer.php' ?>
  <script src="
               https://cdn.tiny.cloud/1/rvz0nyacdar1u4p1x1qrpcnjxdp5fjly3ybpg2ure5bsxgkn/tinymce/5/tinymce.min.js"
          referrerpolicy="origin"></script>

  <script>
  tinymce.init({
    selector: 'textarea#content',
    menubar: false
  });
  </script>
</body>

</html>