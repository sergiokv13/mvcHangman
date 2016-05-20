<!DOCTYPE html>
<html lang="es-BO">
  <head>
    <title>El ahorcado - Categorías</title>
	<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
  </head>
  <body>
    
    <h1 class="text-center">Categorías</h1>
	<ul class="list-group" style="margin:10px;">
	  <?php foreach ($categories as $category): ?>
	  <li class="list-group-item">
	  	<a href="/hangmanMVC/public/categories/show/<?= $category["id"]?>"><?= $category["name"] ?></a>
	  	<a  class="btn btn-danger" href ="/hangmanMVC/public/categories/delete/<?= $category["id"]?>">Borrar</a> 
	  </li> 
	  <?php endforeach; ?>
	  </ul>
		<form style="margin:10px;" method="POST" action="/hangmanMVC/public/categories/create">
		  <input type="text" name="newCategoryTextBox" maxlength="50" />
		  <input class="btn btn-primary" type="submit" name="createNewCategoryButton" value="Crear" />
		</form>
	
  </body>
</html>