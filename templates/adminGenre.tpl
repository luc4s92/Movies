{include file="templates/header.tpl" }


{foreach from=$genres item=$genre}
    <li class="genre-list">
        <div>
            <a href="viewGenre/{$genre->id_genre}">{$genre->genre}</a>
            {if $isLogIn}
                <a href="editFormGenre/{$genre->id_genre}">Editar</a>
            <a href="deleteGenre/{$genre->id_genre}">Eliminar</a>
            {/if}
            
        </div>
    </li>
{/foreach}

{if $isLogIn}
<a class="genre-list btn-primary align-c" href="createGenre/" >Crear genero nuevo</a>

{/if}


{include file="templates/footer.tpl" }