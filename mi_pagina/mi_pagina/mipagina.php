<?php include("db.php"); ?>
<?php include("includes/header.php"); ?>
<main class="container p-4">

<?php   $query = "SELECT * FROM tarea";
  $resultado = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($resultado)) {?>
      <p><?php echo $row['titulo']; ?></p>
      <p><?php echo $row['descripcion']; ?></p>
    <?php  }?>
</main>
<form class="btn-succes" action="index.php" method="post">
  <input class="btn-warning" type="submit" name="boton" value="enviar a editar,crear y eliminar">
</form>

<?php include("includes/footer.php"); ?>
