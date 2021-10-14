{include file="templates/header.tpl" }
<h4>Editar</h4>

<p> {$genre->id_genre} | {$genre->genre}</p>

<form action="editGenre/{$genre->id_genre}" method="POST" >
    <input  type="text" name="new-genre" id="{$genre->id_genre}" value="{$genre->genre}" >
    <input type="submit" value="Editar">
</form>