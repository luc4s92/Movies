{include file="templates/header.tpl" }
{foreach from=$films item=$film }
    <li>
        <a>{$film->film}</a>
        <a href="editFormMovie/{$film->id_movie}">Editar</a>
        <a href="deleteMovie/{$film->id_movie}">Borrar</a>
        <p>{$film->genre}</p>
    </li>
{/foreach}