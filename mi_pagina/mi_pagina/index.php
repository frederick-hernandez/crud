<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
      <div class="card card-body">
        <form action="guardar.php" method="POST">
          <div class="form-group">
            <input type="text" name="titulo" class="form-control" placeholder=" escribir titulo del articulo" autofocus>
          </div>
          <div class="form-group">
            <textarea name="descripcion" rows="2" class="form-control" placeholder="escribir descripcion del articulo"></textarea>
          </div>
          <input type="submit" name="guardar" class="btn btn-warning btn-bloc" value='guardar'>
        </form>
      </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>titulo</th>
            <th>descripcion</th>
            <th>editar-borrar</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM tarea";
          $resultado = mysqli_query($conn, $query);

          while($row = mysqli_fetch_assoc($resultado)) { ?>
          <tr>
            <td><?php echo $row['titulo']; ?></td>
            <td><?php echo $row['descripcion']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>">
                editar
              </a>
              <a href="delete_task.php?id=<?php echo $row['id']?>">
              eliminar
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>
<form class="" action="mipagina.php" method="post">
  <input class="btn-warning" type="submit" name="valor" value="regresar">
</form>
<?php include('includes/footer.php'); ?>
