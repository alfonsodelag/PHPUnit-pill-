<?php

class Util
{
    protected $original;

    public function __construct($original)
    {
        $this->original = $original;
    }

    public function convertToSlug()
    {
        $slug = str_replace(" ", "-", $this->original);

        return strtolower($slug);
    }
}
