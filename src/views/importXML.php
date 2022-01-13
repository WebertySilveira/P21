<form method="POST" enctype="multipart/form-data">
  <div class="row my-3">
    <div class="col">
      <input type="file" name="XML" class="form-control" placeholder="Nome" required>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php
if(isset($_FILES["XML"])) {
  $uploaddir = __DIR__ . "../../../uploads/";
  $uploadfile = $uploaddir . basename($_FILES['XML']['name']);
  move_uploaded_file($_FILES['XML']['tmp_name'], $uploadfile);

  $controller->XML($uploadfile); 
  unset($_GET);
}