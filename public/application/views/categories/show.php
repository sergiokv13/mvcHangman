<!DOCTYPE html>
<html lang="es-BO">
  <head>
    <title>El ahorcado - Categoria</title>
	<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
  </head>
  <body>
    
    <h1 class="text-center">Palabras en <?php echo $info['name']?></h1>
	<ul class="list-group" style="margin:10px;">
	  <?php foreach ($words as $word): ?>
	  <li class="list-group-item">
	  	<?= $word["text"] ?>
	  	<a  class="btn btn-danger" href ="/hangmanMVC/public/words/delete/<?= $word["id"]?>/<?= $word["categoryId"]?>">Borrar</a> 	
	  </li> 
	  <?php endforeach; ?>
	</ul>
	<form  style="margin:10px;"method="POST" action="/hangmanMVC/public/words/create">
		  <input type="text" name="newWordTextBox" maxlength="50" />
		  <input hidden="true" type="text" name="categoryId" value= <?php echo $info['id']?> maxlength="50" />
		  <input class="btn btn-primary" type="submit" name="createNewWordButton" value="Agregar Palabra" />
	</form>
  </body>
</html>