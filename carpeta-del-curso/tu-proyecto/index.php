<?php

  /* $post_1_titulo = "Lorem ipsum dolor sit amet,";
  $post_1_contenido = "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.";
  $post_2_titulo = "Lorem ipsum dolor sit amet,";
  $post_2_contenido = "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto."; */

  function get_post_1_titulo(){
    $post_1_titulo = "Lorem ipsum dolor sit amet,";
    return $post_1_titulo;
  }
  function get_post_1_contenido(){
    $post_1_contenido = "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.";
  $post_2_titulo = "Lorem ipsum dolor sit amet,";
  return $post_1_contenido;
  }

  function get_post_2_titulo(){
    $post_2_titulo = "Lorem ipsum dolor sit amet,";
    return $post_2_titulo;
  }
  function get_post_2_contenido(){
    $post_2_contenido = "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.";
  $post_2_titulo = "Lorem ipsum dolor sit amet,";
  return $post_2_contenido;
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Micro CMS</title>
  <link rel="stylesheet" href="../assets/css/inicio.css">
  <link rel="stylesheet" href="../assets//css/misestilos.css">
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
        <h2><?php echo get_post_1_titulo(); ?></h2>
        <div><?php echo get_post_1_contenido(); ?></div>
      </div>

      <div>
        <h2><?php echo get_post_2_titulo(); ?></h2>
        <div><?php echo get_post_2_contenido(); ?></div>
      </div>

    </div>

  </div>

  <footer id="footer">
    <div class="inner-footer">
      <p>Curso de Introducción a PHP en Domestika</p>
    </div>
  </footer>

</body>
</html>