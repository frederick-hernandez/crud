<?php
include("db.php");
$titulo = '';
$description= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM tarea WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $titulo = $row['titulo'];
    $description = $row['descripcion'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $titulo= $_POST['titulo'];
  $description = $_POST['description'];

  $query = "UPDATE tarea set titulo = '$titulo', descripcion = '$description' WHERE id=$id";
  mysqli_query($conn, $query);
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="titulo" type="text" class="form-control" value="<?php echo $titulo; ?>" placeholder="Update titulo">
        </div>
        <div class="form-group">
        <textarea name="description" class="form-control" cols="30" rows="10"><?php echo $description;?></textarea>
        </div>
        <button class="btn-success" name="update">
          actualizar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
