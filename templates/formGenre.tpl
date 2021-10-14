{include file="templates/header.tpl" }

<h2 class="title">Crear nuevo genero</h2>
<div class="container">

<form action="saveGenre" method="POST">
    <input placeholder="Genero" type="text" name="genre" id="genre" required>
    <input type="submit" value="Guardar">
</form>
</div>