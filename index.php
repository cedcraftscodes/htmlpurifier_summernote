<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote-bs4.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote-bs4.js"></script>
<body>
  <div class="summernote container">
    <div class="row">
      <div class="span12">
        <h2>POST DATA</h2>
      </div>
    </div>
    <div class="row">
      <form class="span12" id="postForm" action="insert.php" method="POST" enctype="multipart/form-data" onsubmit="return postForm()">
        <fieldset>
          <legend>Make Post</legend>
          <p class="container">
            <textarea class="input-block-level" id="summernote" name="content" rows="18"></textarea>
          </p>
        </fieldset>
        <button type="submit" class="btn btn-primary">Save changes</button>
        <button type="button" id="cancel" class="btn">Cancel</button>
      </form>
    </div>
  </div>

<script type="text/javascript">
$(document).ready(function() {
  $('#summernote').summernote({
    height: "500px"
  });
});
var postForm = function() {
  var content = $('textarea[name="content"]').html($('#summernote').code());
}
</script>
  </body>
  </html>





