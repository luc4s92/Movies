{include file="templates/header.tpl" }


<form action="editMovie/{$movie->id_movie}" method="POST">
    <input placeholder="Nombre de la pelicula" type="text" name="film" id={$movie->id_movie} value="{$movie->film}" required>
    <input placeholder="Descripcion" type="text" name="description" id="description" value="{$movie->description}" required>
    <input placeholder="Actores" type="text" name="actors" id="actors" value="{$movie->actors}" required>
    <input placeholder="Imagen" type="text" name="img" id="img" value="{$movie->img}" required>
    Elige el Genero
    <select type="text" id="genre" name="genre" required value="">
        <option value={$movie->id_genre}>{$movie->genre}</option>
        {foreach from=$genres item=$genre}
            {if $movie->genre != $genre->genre}
                <option value={$genre->id_genre}>{$genre->genre}</option>
            {/if}
            
        {/foreach}
    </select>
    <input type="submit" value="Guardar">
</form>