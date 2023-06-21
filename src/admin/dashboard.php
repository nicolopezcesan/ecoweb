<!DOCTYPE html>
<html lang="es">

<head>
  <?php include 'commons/head.php' ?>
</head>

<body>

  <?php include 'commons/header.php' ?>

  <main role="main" class="container-fluid">

    <div class="starter-template">
      <h1>Novedades</h1>

      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Date</th>
            <th scope="col">Name</th>
            <th scope="col">Title</th>
            <th scope="col">Type</th>
            <th scope="col">Priority</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  $sql = "SELECT count(link) as total from images WHERE article = ".$row["article_id"].' LIMIT 0, 1;';
                  $images_qty = $conn->query($sql)->fetch_assoc()['total'];
                  $images_field = ($images_qty == 0) ? 'No' : $images_qty;

                  echo '
                  <tr>
                    <td>'.$row["date"].'</td>
                    <td>'.$row["name"].'</td>
                    <td>'.$row["title"].'</td>
                    <td>'.$row["type"].'</td>
                    <td>'.$row["priority"].'</td>
                    <td>
                      <a href="edit_article.php?article_id='.$row["article_id"].' " class="btn btn-primary btn-sm">Edit</a>
                      <a href="/admin/edit_images.php?article_id='.$row["article_id"].' " class="btn btn-primary btn-sm">Images</a>
                      <a href="delete_article.php?article_id='.$row["article_id"].' " onclick="return confirm(`Are you sure to delete '.$row["article_id"].'?`)" class="btn btn-danger btn-sm">Delete</a>

                    </td>
                  </tr>';
                }
              } else {
                echo '<tr><th colspan="7" scope="row">No results</th></tr>';
              }
            ?>
        </tbody>
      </table>

      <hr />

      <h1>Articulos de la Home</h1>

      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Date</th>
            <th scope="col">Title</th>
            <th scope="col">Priority</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
              if ($result_news->num_rows > 0) {

                while($row = $result_news->fetch_assoc()) {
                  if ($row['type'] == 4) {
                    $sql = "SELECT count(link) as total from images WHERE article = ".$row["article_id"].' LIMIT 0, 1;';
                    $images_qty = $conn->query($sql)->fetch_assoc()['total'];
                    $images_field = ($images_qty == 0) ? 'No' : $images_qty;

                    echo '
                    <tr>
                      <td>'.$row["date"].'</td>
                      <td>'.$row["title"].'</td>
                      <td>'.$row["priority"].'</td>
                      <td>
                        <a href="edit_new.php?article_id='.$row["article_id"].' " class="btn btn-primary btn-sm">Edit</a>
                        <a href="/admin/edit_images.php?article_id='.$row["article_id"].' " class="btn btn-primary btn-sm">Images</a>
                        <a href="delete_article.php?article_id='.$row["article_id"].' " onclick="return confirm(`Are you sure to delete '.$row["article_id"].'?`)" class="btn btn-danger btn-sm">Delete</a>

                      </td>
                    </tr>';
                  }
                }
              } else {
                echo '<tr><th colspan="7" scope="row">No results</th></tr>';
              }

            ?>
        </tbody>
      </table>

    </div>
  </main>



  <?php include 'commons/footer.php' ?>

</body>

</html>