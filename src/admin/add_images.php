

    <main role="main" class="container">

      <div class="row text-center preloader">
        <div class="centered">
          <div class="blob-1"></div>
          <div class="blob-2"></div>
        </div>
      </div>


      <form action="uploader.php?article_id=<?php echo $_GET['article_id']; ?>" method="post" enctype="multipart/form-data">
        <div class="col-sm-12">
          <div class="col-12">
            <!-- Upload image input-->
            <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
              <input type="file" name="upload" id="upload" onchange="readURL(this);" class="form-control border-0">
              <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
              <div class="input-group-append">
                  <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
              </div>
            </div>
          </div>

          <div class="col-12">
            <!-- Uploaded image area-->
            <div class="image-area mt-1"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
          </div>
          <div class="col-12 mt-4 text-right">
            <input disabled type="submit" value="Upload Image" class="btn btn-primary" name="submit">
          </div>
        </div>
      </form>

    </main>
    

    <script>


      function readURL(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();

              reader.onload = function (e) {
                  $('#imageResult')
                      .attr('src', e.target.result);
              };
              reader.readAsDataURL(input.files[0]);
          }
      }

      $(function () {
          $('#upload').on('change', function () {
              readURL(input);
          });

          $('[type="submit"]').on('click', function () {
              $('.preloader').show();
          });
      });


      var input = document.getElementById( 'upload' );
      var infoArea = document.getElementById( 'upload-label' );

      input.addEventListener( 'change', showFileName );
      function showFileName( event ) {
        var input = event.srcElement;
        var fileName = input.files[0].name;
        infoArea.textContent = 'File name: ' + fileName;

        $('[type="submit"]').prop("disabled", false);

      }

    </script>
