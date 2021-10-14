{include file="templates/header.tpl" }


{foreach from=$genres item=$genre}
    <li class="genre-list">
        <div>
            <a href="viewGenre/{$genre->id_genre}">{$genre->genre}</a>
            <a href="editFormGenre/{$genre->id_genre}">Editar</a>
            <a href="deleteGenre/{$genre->id_genre}">Eliminar</a>
        </div>
    </li>
{/foreach}

<a class="genre-list btn-primary align-c" href="createGenre/" >Crear genero nuevo</a>




{include file="templates/footer.tpl" }