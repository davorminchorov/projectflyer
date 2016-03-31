<?php
use app\Flyer;

/**
 * Flash a custom message.
 *
 * @param null $title
 * @param $message
 * @return mixed
 */
function flash($title = null, $message = null)
{
    $flash = app('App\Http\Flash');

    if (func_num_args() == 0) {
        return $flash;
    }

    return $flash->info($title, $message);
}

/**
 * The path to a given flyer.
 *
 * @param Flyer $flyer
 * @return string
 */
function flyer_path(Flyer $flyer)
{
   return $flyer->zip . '/' . str_replace(' ', '-', $flyer->street);
}

function link_to($body, $path, $type)
{
    $csrfField = csrf_field();

    if(is_object($path))
    {
        $action = $path->getTable();

        if(in_array($type, ['PUT', 'PATCH', 'DELETE']))
        {
            $action .= '/' . $path->getKey();
        }
    } else {
        $action = $path;
    }

    return <<<EOT
        <form method="POST" action="{$action}">
            <input type="hidden" name="_method" value="{$type}">
            $csrfField
            <button type="submit" class="btn btn-danger">{$body}</button>
        </form>
EOT;
}