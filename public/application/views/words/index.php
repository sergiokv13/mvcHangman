<!DOCTYPE html>
<html lang="es-BO">
  <head>
    <title>El ahorcado - Palabras</title>
	<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
  </head>
  <body>
    
    <h1 class="text-center">Palabras</h1>
	<ul class="list-group" style="margin:10px;">
	  <?php foreach ($words as $word): ?>
	  <li class="list-group-item">
	  	<?= $word["text"] ?>
	  	<a class="btn btn-primary" href ="categories/show/<?= $word["categoryId"]?>">Ir a la categoria</a> 
	  </li> 
	  <?php endforeach; ?>
	</ul>
  </body>
</html>