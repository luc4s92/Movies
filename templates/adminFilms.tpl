<h3>Admin films</h3>

<form action="saveFilm" method="POST">
    <input placeholder="Nombre de la pelicula" type="text" name="film" id="film" required>
    <input placeholder="Descripcion" type="text" name="description" id="description" required>
    <input placeholder="Actores" type="text" name="actors" id="actors" required>
    <input placeholder="Imagen" type="text" name="img" id="img" required>
    Elige el Genero
    <select type="text" id="genre" name="genre" required value="">
        {foreach from=$genres item=$genre}
            
            <option value="{$genre->id_genre}">{$genre->genre} </option>
        {/foreach}
    </select>
    <input type="submit" value="Guardar">
</form>

<a href="showFilms">ver lista peliculas</a> 

<!--{include file="templates/filmsList.tpl" }-->