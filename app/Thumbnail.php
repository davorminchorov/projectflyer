<?php

namespace App;


use Intervention\Image\Facades\Image;

class Thumbnail
{

    /**
     * Make a thumbnail for the photo.
     *
     * @param $source
     * @param $destination
     * @return mixed
     */
    public function make($source, $destination)
    {

        return Image::make($source)
            ->fit(200)
            ->save($destination);
    }
}