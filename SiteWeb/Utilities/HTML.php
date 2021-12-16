<?php
declare (strict_types=1);
class HTML {

    public static function Surround(string $balise, string $attributes, string $content):string
    {
        $surrounded = HTML::Open($balise, $attributes);
        $surrounded = $surrounded.$content;
        $surrounded = $surrounded.HTML::Close($balise);   
        return $surrounded;
    }

    public static function SurroundAutoClosing(string $balise, string $attributes):string
    {
        $surrounded = HTML::Open($balise, $attributes);
        $surrounded = $surrounded.HTML::Close($balise);   
        return $surrounded;
    }


    public static function Attribute(string $attribute, string $value):string
    {
        $output = $attribute.'="'.$value.'" ';
        return $output;
    }

    public static function Open(string $balise, string $attributes):string
    {
        $openedMarkUp= '<'.$balise.' '.$attributes.'>';
        return $openedMarkUp;
    }


    public static function Close(string $balise):string
    {
        $closedMarkUp= '</'.$balise.'>';
        return $closedMarkUp;
    }

}
?>