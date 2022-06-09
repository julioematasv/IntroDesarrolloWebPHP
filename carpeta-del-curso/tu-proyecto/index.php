<?php

  $post_1_titulo = "Lorem ipsum dolor sit amet,";
  $post_1_contenido = "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.";
  $post_2_titulo = "Lorem ipsum dolor sit amet,";
  $post_2_contenido = "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Micro CMS</title>
  <link rel="stylesheet" href="../assets/css/inicio.css">
</head>
<body>

  <nav id="site-navigation" role="navigation" class="row row-center">
    <div class="column">
      <h1>
        <a href="index.php">Micro CMS</a>
      </h1>
      <ul class="main-menu column clearfix">

      </ul>
    </div>
  </nav>

  <div id="content">

    <div class="post">

      <div>
        <h2><?php echo $post_1_titulo; ?></h2>
        <div><?php echo $post_1_contenido; ?></div>
      </div>

      <div>
        <h2><?php echo $post_2_titulo; ?></h2>
        <div><?php echo $post_2_contenido; ?></div>
      </div>

    </div>

  </div>

  <footer id="footer">
    <div class="inner-footer">
      Curso de Introducción a PHP en Domesika
    </div>
  </footer>

</body>
</html>