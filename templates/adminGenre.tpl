{include file="templates/header.tpl" }

<h2>Admin genero</h2>

<form action="saveGenre" method="POST">
    <input placeholder="Genero" type="text" name="genre" id="genre" required>
    <input type="submit" value="Guardar">
</form>

{if $seve}
    <h3>Se ve</h3>
{/if}


{foreach from=$genres item=$genre}
    <li class="genre-list">
        <div >
            <a href="viewGenre/{$genre->id_genre}">{$genre->genre}</a>
            <a  href="editFormGenre/{$genre->id_genre}"  >Editar</a>
            <a  href="deleteGenre/{$genre->id_genre}"  >Eliminar</a>
        </div>
    </li>
{/foreach}




{include file="templates/adminFilms.tpl"}


{include file="templates/footer.tpl" }