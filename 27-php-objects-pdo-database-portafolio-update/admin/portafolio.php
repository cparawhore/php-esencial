<?php include 'includes/header.php' ?>

<?php

$projects = getProjects();

?>

<div class="container">
  <section id="main">

    <h1>Portafolio</h1>

    <a href="portafolio-nuevo.php" class="btn btn-outline-primary my-2 my-sm-0">Agregar projecto</a>

    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Projecto</th>
          <th>

          </th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($projects as $project): ?>
          <tr>
            <th><?php echo $project['id'] ?></th>
            <td><?php echo $project['title'] ?></td>
            <td class="text-right">
              <a href="portafolio-actualizar.php?id=<?php echo $project['id'] ?>" class="btn btn-primary">Actualizar</a>
              <a href="#" class="btn btn-danger">Eliminar</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

  </section>
</div>

<?php include 'includes/footer.php' ?>
