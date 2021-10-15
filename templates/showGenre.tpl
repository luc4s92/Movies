{include file="templates/index.tpl" }
{if sizeof($genres) > 0}
    {$genres[0]->genre}
    {foreach from=$genres item=$genre}
    <li class="genre-list">
        <div >
            <a href="showFilm/{$genre->id_movie}">{$genre->film}</a>
        </div>
    </li>
{/foreach}
    {else}
        <p>No hay peliculas</p>
{/if}



