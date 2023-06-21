<?php
  include_once './login/includes/auth-middleware.php';
  
  if ($_GET['article_id'] != '') {
    include_once '../mysql/mysql.php';

    $sql = 'SELECT article_id, image_id, link, order_image FROM articles, images WHERE articles.article_id = images.article AND articles.article_id = '.strip_tags(trim($_GET['article_id'])).' ORDER BY order_image DESC;';
    $result = $conn->query($sql);
  } else {
    return false;
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

    <div class="starter-template">
      <h1>Images</h1>

      <div class="text-right mb-4">
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal"
                data-remote="add_images.php?article_id=<?php echo $_GET['article_id']?>"
                data-target="#uploadImage">Add New Image</button>
      </div>

      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Image</th>
            <th scope="col">Order</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  echo '
                    <tr>
                      <td>
                        <div class="image-area-table mt-1"><img src="/uploads/'.$row["link"].'" alt="" class="img-fluid rounded shadow-sm mx-auto d-block pop"></div>
                      </td>
                      <td>'.$row["order_image"].'</td>
                      <td><a href="delete_image.php?image_id='.$row["image_id"].' " onclick="return confirm(`Are you sure to delete this image?`)" class="btn btn-danger btn-sm">Delete</a></td>
                    </tr>';
                }
              } else {
                echo '<tr><th colspan="3" scope="row">No results</th></tr>';
              }
            ?>
        </tbody>
      </table>

      <hr />

      <div class="text-center">
        <a href="/admin/index.php" class="btn btn-secondary btn-lg">Back</a>
      </div>

    </div>

  </main>


  <div class="modal" tabindex="-1" role="dialog" id="uploadImage">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Upload Image</h5>
          <button type="button" class="close" data-dismiss="modal"
                  aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Loading.</p>
        </div>
      </div>
    </div>
  </div>`
  <?php include 'commons/footer.php' ?>

</body>

</html>


<?php
  $conn->close();
?>