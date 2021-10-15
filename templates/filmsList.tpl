{include file="templates/header.tpl" }
{foreach from=$films item=$film }
    <ul class="movie-list">
        <li>
            <a href="showFilm/{$film->id_movie}">{$film->film}</a>
        </li>
        <li>
            <p>{$film->description}</p>
        </li>
        <li>
            <p>{$film->actors}</p>
        </li>
        <li>
            <p>{$film->img} </p>
        </li>
        <li>
            <p>{$film->genre}</p>
        </li>
        {if $isLogIn}

            <li><a href="editFormMovie/{$film->id_movie}">Editar</a></li>
            <li><a href="deleteMovie/{$film->id_movie}">Borrar</a></li>
        {/if}

    </ul>
{/foreach}

{if $isLogIn}
<a class="movie-list btn-primary" href="formFilm/">Crear Pelicula</a>
{/if}