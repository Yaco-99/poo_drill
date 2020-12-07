<?php
class Html
{
    public function css($link)
    {
        return '<link rel="stylesheet" href="' . $link . '"/>';
    }

    public function js($link)
    {
        return '<script src="' . $link . '"></script>';
    }

    public function meta($name, $content)
    {
        return '<meta name="' . $name . '" content="' . $content . '"/>';
    }

    public function link($link, $name)
    {
        return '<a href="' . $link . '"/>' . $name . '</a>';
    }

    public function img($link, $alt)
    {
        return '<img src="' . $link . '" alt="' . $alt . '"/>';
    }

}
